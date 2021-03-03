<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function novels(){

        return $this->hasMany('App\Novel');
    }
}
