@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Track your TinyUrl.
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped">

                            <thead>
                            <tr>
                                <th>Original URL</th>
                                <th>Created</th>
                                <th>TinyUrl</th>
                                <th>Views</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $tinyurl->url }}</td>
                                <td>{{ $tinyurl->created_at }}</td>
                                <td><a href="{{ url('/') . '/' . $tinyurl->code }}">{{ $tinyurl->code }}</a></td>
                                <td>{{ $tinyurl->views }}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
