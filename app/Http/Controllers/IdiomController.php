<?php

namespace App\Http\Controllers;

use App\idiom;
use Illuminate\Http\Request;

class IdiomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Idiom = Idiom::all(); //extraer en formato JSON los datos
        //archivo.funcion
        //return $idiom; //esto es un fortmato JSON
        return view('Idiom.index', compact('Idiom')); //3.- mandar los datos a la vista
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
     * @param  \App\idiom  $idiom
     * @return \Illuminate\Http\Response
     */
    public function show(idiom $idiom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\idiom  $idiom
     * @return \Illuminate\Http\Response
     */
    public function edit(idiom $idiom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\idiom  $idiom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, idiom $idiom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\idiom  $idiom
     * @return \Illuminate\Http\Response
     */
    public function destroy(idiom $idiom)
    {
        //
    }
}
