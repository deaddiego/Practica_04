<?php

namespace App\Http\Controllers;

use App\user_language;
use Illuminate\Http\Request;

class UserLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $User_language = User_language::all(); //extraer en formato JSON los datos
        //archivo.funcion
        //return $user_language; //esto es un fortmato JSON
        return view('User_language.index', compact('User_language')); //3.- mandar los datos a la vista
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
     * @param  \App\user_language  $user_language
     * @return \Illuminate\Http\Response
     */
    public function show(user_language $user_language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user_language  $user_language
     * @return \Illuminate\Http\Response
     */
    public function edit(user_language $user_language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user_language  $user_language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_language $user_language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user_language  $user_language
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_language $user_language)
    {
        //
    }
}
