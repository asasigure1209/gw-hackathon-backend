<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function usefuls()
    {
        return $this->hasMany('App\Useful');
    }
}
