<?php

namespace App\Http\Controllers;

use App\idiom_level;
use Illuminate\Http\Request;

class IdiomLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Idiom_level = Idiom_level::all(); //extraer en formato JSON los datos
        //archivo.funcion
        //return $idiom_level; //esto es un fortmato JSON
        return view('Idiom_level.index', compact('Idiom_level')); //3.- mandar los datos a la vista
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\idiom_level  $idiom_level
     * @return \Illuminate\Http\Response
     */
    public function show(idiom_level $idiom_level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\idiom_level  $idiom_level
     * @return \Illuminate\Http\Response
     */
    public function edit(idiom_level $idiom_level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\idiom_level  $idiom_level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, idiom_level $idiom_level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\idiom_level  $idiom_level
     * @return \Illuminate\Http\Response
     */
    public function destroy(idiom_level $idiom_level)
    {
        //
    }
}
