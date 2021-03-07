<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{

    protected $fillable = ['name', 'body', 'available', 'price','on_sale_date','volume','trim_size','pages','cover', 'serie_id','rated','jumbotron'];

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
