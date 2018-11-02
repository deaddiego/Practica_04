<?php

namespace App\Http\Controllers;

use App\career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Career = Career::all(); //extraer en formato JSON los datos
        //archivo.funcion
        //return $career; //esto es un fortmato JSON
        return view('Career.index', compact('Career')); //3.- mandar los datos a la vista

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
     * @param  \App\career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, career $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(career $career)
    {
        //
    }
}
