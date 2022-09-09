<?php

namespace App\Http\Controllers;

use App\Models\RecycleModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\RecycleModel  $recycleModel
     * @return \Illuminate\Http\Response
     */
    public function show(RecycleModel $recycleModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecycleModel  $recycleModel
     * @return \Illuminate\Http\Response
     */
    public function edit(RecycleModel $recycleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecycleModel  $recycleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecycleModel $recycleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecycleModel  $recycleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecycleModel $recycleModel)
    {
        //
    }

    public function laporanBelumPotong(){
        return view('recycle.show-laporan-belum-potong');
    }

    public function laporanTungguBuffing(){
        return view('recycle.show-laporan-tunggu-buffing');
    }

    public function laporanSiapPouring(){
        return view('recycle.show-laporan-siap-pouring');
    }
}
