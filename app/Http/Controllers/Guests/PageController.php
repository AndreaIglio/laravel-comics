<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Novel;

class PageController extends Controller
{
    public function homepage(){

        $novels = Novel::all();
        return view('guests.homepage', compact('novels'));


    }
}
