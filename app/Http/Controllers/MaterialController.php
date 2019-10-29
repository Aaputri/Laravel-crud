<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_decode(Material::all()); //simbol (::) adalah simbol sebuah akses
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
        Material::create($request->all());
        return redirect('/api');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $Material
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return json_decode(Material::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $Material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $Material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $Material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Material::find($id)->update($request->all());
        return redirect('/api');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $Material
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Material::find($id)->delete();
        return redirect('/api');
    }
}
