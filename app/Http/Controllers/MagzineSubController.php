<?php

namespace App\Http\Controllers;

use App\Models\Magzine_Sub;
use Illuminate\Http\Request;

class MagzineSubController extends Controller
{
    public function index()
    {
        return view('magazine-sub')->with('data',Magzine_Sub::get());
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
     * @param  \App\Models\Magzine_Sub  $magzine_Sub
     * @return \Illuminate\Http\Response
     */
    public function show(Magzine_Sub $magzine_Sub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magzine_Sub  $magzine_Sub
     * @return \Illuminate\Http\Response
     */
    public function edit(Magzine_Sub $magzine_Sub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magzine_Sub  $magzine_Sub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magzine_Sub $magzine_Sub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magzine_Sub  $magzine_Sub
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magzine_Sub $magzine_Sub)
    {
        //
    }
}
