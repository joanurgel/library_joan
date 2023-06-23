<?php

namespace App\Http\Controllers;

use App\Models\Bokk;
use Illuminate\Http\Request;

class BokkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bokk = Bokk:: all();
        return view('welcome' , compact('bokk'));
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
     * @param  \App\Models\Bokk  $bokk
     * @return \Illuminate\Http\Response
     */
    public function show(Bokk $bokk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bokk  $bokk
     * @return \Illuminate\Http\Response
     */
    public function edit(Bokk $bokk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bokk  $bokk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bokk $bokk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bokk  $bokk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bokk $bokk)
    {
        //
    }
}
