<?php

namespace App\Http\Controllers;

use App\idiom_certificate;
use Illuminate\Http\Request;

class IdiomCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Idiom_certificate = Idiom_certificate::all(); //extraer en formato JSON los datos
        //archivo.funcion
        //return $idiom_certificate; //esto es un fortmato JSON
        return view('Idiom_certificate.index', compact('Idiom_certificate')); //3.- mandar los datos a la vista
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
     * @param  \App\idiom_certificate  $idiom_certificate
     * @return \Illuminate\Http\Response
     */
    public function show(idiom_certificate $idiom_certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\idiom_certificate  $idiom_certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(idiom_certificate $idiom_certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\idiom_certificate  $idiom_certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, idiom_certificate $idiom_certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\idiom_certificate  $idiom_certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(idiom_certificate $idiom_certificate)
    {
        //
    }
}
