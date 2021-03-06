<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    

    public function novels(){

        return $this->belongsToMany('App\Novel');

    }

    public function artists()
    {

        return $this->belongsToMany('App\Artist');
    }

}
