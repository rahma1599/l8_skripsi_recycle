<?php

namespace App\Http\Controllers;

use App\Models\SizeModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size = SizeModel::all();
        return view('size.index',compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('size.create');

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
     * @param  \App\Models\SizeModel  $sizeModel
     * @return \Illuminate\Http\Response
     */
    public function show(SizeModel $sizeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SizeModel  $sizeModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SizeModel $sizeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SizeModel  $sizeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SizeModel $sizeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SizeModel  $sizeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SizeModel $sizeModel)
    {
        //
    }
}
