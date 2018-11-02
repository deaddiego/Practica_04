<?php

namespace App\Http\Controllers;

use App\user_info;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $User_info = User_info::all(); //extraer en formato JSON los datos
        //archivo.funcion
        //return $user_info; //esto es un fortmato JSON
        return view('User_info.index', compact('User_info')); //3.- mandar los datos a la vista
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
     * @param  \App\user_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function show(user_info $user_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function edit(user_info $user_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_info $user_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_info $user_info)
    {
        //
    }
}
