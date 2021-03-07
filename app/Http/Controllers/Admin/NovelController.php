<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Novel;
use Illuminate\Support\Facades\Storage;
use App\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class NovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novels = Novel::all();
        return view('admin.novels.index', compact('novels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Serie::all();
        return view('admin.novels.create', compact('series'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Novel $novel)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'body' => 'required',
            'price' => 'required',
            'available' => 'required',
            'serie_id' => 'nullable',
            'on_sale_date' => 'nullable',
            'volume' => 'required',
            'trim_size' => 'required',
            'pages' => 'required',
            'cover' => 'nullable',
            'jumbotron' => 'required',
        ]);

        $cover = Storage::put('header_home', $request->cover);
        $jumbotron = Storage::put('jumbotron_show', $request->jumbotron);


        $validatedData['cover'] = $cover;
        $validatedData['jumbotron'] = $jumbotron;


        $novel = Novel::create($validatedData);

        $novel->save();

        return redirect()->route('admin.novels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Novel  $novel
     * @return \Illuminate\Http\Response
     */
    public function show(Novel $novel)
    {
        
        return view('admin.novels.show', compact('novel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Novel  $novel
     * @return \Illuminate\Http\Response
     */
    public function edit(Novel $novel)
    {
        $series = Serie::all();
        // dd($series);
        return view('admin.novels.edit',compact('novel','series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Novel  $novel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novel $novel)
    {

        Storage::delete('header_home', $novel->cover);
    
        $validatedData = $request->validate([
            'name' => 'required',
            'body' => 'required',
            'price' => 'required',
            'available' => 'required',
            'serie_id' => 'required',
            'on_sale_date' => 'nullable',
            'volume' => 'required',
            'trim_size'=>'required',
            'pages'=>'required',
            'cover'=> 'nullable',
            'rated' => 'required'
        ]);
            

        $cover = Storage::put('header_home', $request->cover);
        $jumbotron = Storage::put('jumbotron_show', $request->jumbotron);

        $validatedData['cover'] = $cover;
        $validatedData['jumbotron'] = $jumbotron;

        $novel->update($validatedData);

        return redirect()->route('admin.novels.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Novel  $novel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novel $novel)
    {
        
        $novel->delete();

        return redirect()->route('admin.novels.index');

    }
}
