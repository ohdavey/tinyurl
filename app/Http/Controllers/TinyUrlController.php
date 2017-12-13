<?php

namespace App\Http\Controllers;

use App\TinyUrl;
use Illuminate\Http\Request;

class TinyUrlController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required|url',
        ]);


        $urlExist = TinyUrl::where('url', $request->url)->first();

        if (!$urlExist) {
            $tinyurl = TinyUrl::create([
                'code' => substr(uniqid(), 8, 5),
                'url' => request('url'),
                'views' => 0,
            ]);

            $response = array(
                'url' => $tinyurl->url,
                'created_at' => $tinyurl->created_at->format('d M Y - H:i:s'),
                'tinyurl' => url('/') . "/" . $tinyurl->code,
                'views' => $tinyurl->views,
            );
        } else {
            $response = array(false, 'error' => 'This URL is already in our system');
        }


        if (request()->expectsJson()) {
            return response($response);
        }

        return redirect($tinyurl->path())
            ->with('tinyUrl', url('/') . "/" . $tinyurl->code);

    }

    /**
     * Display the specified resource.
     *
     * @param  $url
     * @return view
     */
    public function show($code)
    {
        $tinyUrl = TinyUrl::where('code', $code)->first();

        if ($tinyUrl) {
            return view('url.show', [
                'tinyurl' => $tinyUrl,
            ]);
        }
        abort(404, 'Sorry, that tinyurl code does not exist.');
        //
    }

    /** If tinyurl is visited, update view count and redirect to original url.
     *
     * @param  $code
     * @return \Illuminate\Http\Response
     */
    public function redirect($code)
    {
        $tinyUrl = TinyUrl::where('code', $code)->first();

        if ($tinyUrl) {

            $tinyUrl->views++;

            $tinyUrl->save();

            return redirect($tinyUrl->url);
        }
    }
}
