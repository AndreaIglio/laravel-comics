<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function artists()
    {

        return $this->belongsToMany('App\Artist');
    }
}
