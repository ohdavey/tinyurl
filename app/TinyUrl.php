<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinyUrl extends Model
{
    /**
     * Don't auto-apply mass assignment protection.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get a string path for the tinyurl.
     *
     * @return string
     */
    public function path()
    {
        return "/tinyurl/{$this->id}";
    }

}
