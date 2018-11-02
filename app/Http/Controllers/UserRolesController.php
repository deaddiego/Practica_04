<?php

namespace App\Http\Controllers;

use App\user_roles;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $User_roles = User_roles::all(); //extraer en formato JSON los datos
        //archivo.funcion
        //return $user_roles; //esto es un fortmato JSON
        return view('User_roles.index', compact('User_roles')); //3.- mandar los datos a la vista
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
     * @param  \App\user_roles  $user_roles
     * @return \Illuminate\Http\Response
     */
    public function show(user_roles $user_roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user_roles  $user_roles
     * @return \Illuminate\Http\Response
     */
    public function edit(user_roles $user_roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user_roles  $user_roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_roles $user_roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user_roles  $user_roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_roles $user_roles)
    {
        //
    }
}
