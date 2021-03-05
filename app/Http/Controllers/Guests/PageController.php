<?php

namespace App\Http\Controllers\Guests;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Novel;
use App\Articles;
use App\Serie;

class PageController extends Controller
{
    public function homepage(){

        $novels = Novel::all();
        $articles = Article::all();
        $series = Serie::all();
        return view('guests.homepage', compact('novels','articles','series'));


    }
}
