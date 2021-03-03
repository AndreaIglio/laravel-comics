<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    public function artists()
    {

        return $this->belongsToMany('App\Artist');
    }
    public function writers()
    {

        return $this->belongsToMany('App\Writer');

    }

    public function series(){

        return $this->belongsTo('App\Serie');

    }
}
