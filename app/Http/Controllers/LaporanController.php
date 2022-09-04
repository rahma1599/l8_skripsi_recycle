<?php

namespace App\Http\Controllers;

use App\Models\LaporanModel;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = LaporanModel::all();
        return view('admin.laporan',['vlaporan' => $laporan ]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLaporanAll()
    {
        $laporan = LaporanModel::all();
        return view('admin.laporan',['vlaporan' => $laporan ]);  

    }

    public function showLapRecycleB()
    {
        $laporan = LaporanModel::all();
        return view('admin.laporan',['vlaporan' => $laporan ]);  

    }

    public function showLapRecycleF()
    {
        $laporan = LaporanModel::all();
        return view('admin.laporan',['vlaporan' => $laporan ]);  

    }

    public function showLapRecycleS()
    {
        $laporan = LaporanModel::all();
        return view('admin.laporan',['vlaporan' => $laporan ]);  

    }

    public function create()
    {
        return view('admin.laporan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'kode_barang' => 'required',
            'style' => 'required',
            'plant' => 'required',
            'shift/group' => 'required',
            'size' => 'required',
            'size_run' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);

        LaporanModel::create([
            'tanggal' => $request['tanggal'],
            'kode_barang' => $request['kode_barang'],
            'style' => $request['style'],
            'plant' => $request['plant'],
            'shift/group' => $request['shift/group'],
            'size' => $request['size'],
            'size_run' => $request['size_run'],
            'keterangan' => $request['keterangan'],
            'jumlah' => $request['jumlah'],
            'status' => $request['status'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanModel $laporanModel)
    {
        return view('laporan.show',compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanModel $laporanModel)
    {
        return view('laporan.edit',compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $laporanModel)
    {
        ////  dd($request['id']);
        $request->validate([
            'tanggal' => 'required',
            'kode_barang' => 'required',
            'style' => 'required',
            'plant' => 'required',
            'shift/group' => 'required',
            'size' => 'required',
            'size_run' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);

        //dd($laporanModel);
        LaporanModel::where('id', $laporanModel)->update([
            'tanggal' => $request['tanggal'],
            'kode_barang' => $request['kode_barang'],
            'style' => $request['style'],
            'plant' => $request['plant'],
            'shift/group' => $request['shift/group'],
            'size' => $request['size'],
            'size_run' => $request['size_run'],
            'keterangan' => $request['keterangan'],
            'jumlah' => $request['jumlah'],
            'status' => $request['status'],
            ]);
        return redirect()->route('admin.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanModel $id)
    {
        //
    }
}
