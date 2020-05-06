<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Useful extends Model
{
    //
    public function post() {
        return $this->belongsTo('Post');
    }
}
