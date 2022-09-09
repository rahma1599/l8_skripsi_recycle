<?php

namespace App\Http\Controllers;

use App\Models\RecycleModel;
use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use App\Models\SizeModel;
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
        $data_recycle = RecycleModel::all();
        return view('recycle.index',compact('data_recycle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = BarangModel::all();
        $size = SizeModel::all();
        return view('recycle.create',compact(['barang','size']));
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
            'di_recycle' => 'required',
            'tanggal' => 'required',
            'id_barang' => 'required',
            'style' => 'required',
            'size' => 'required',
            'status' => 'required',
            'jumlah' => 'required',
            'plant' => 'required',
            'shift_group' => 'required',
        ]);

            RecycleModel::create([
                'id_recycle' => $request['id_recycle'],
                'tanggal' => $request['tanggal'],
                'id_barang' => $request['id_barang'],
                'style' => $request['style'],
                'size' => $request['size'],
                'status' => $request['status'],
                'jumlah' => $request['jumlah'],
                'plant' => $request['plant'],
                'keterangan' => $request['keterangan'],
                'shift_group' => $request['shift_group'],
                ]);
            return redirect()->route('data_recycle.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecycleModel  $data_recycleModel
     * @return \Illuminate\Http\Response
     */
    public function show(RecycleModel $data_recycle)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecycleModel  $data_recycleModel
     * @return \Illuminate\Http\Response
     */
    public function edit(RecycleModel $data_recycle)
    {
        //dd($data_recycle->id);
        return view('recycle.edit',compact('data_recycle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecycleModel  $data_recycleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecycleModel $data_recycle)
    {
        $request->validate([
            'di_recycle' => 'required',
            'tanggal' => 'required',
            'id_barang' => 'required',
            'style' => 'required',
            'size' => 'required',
            'status' => 'required',
            'jumlah' => 'required',
            'plant' => 'required',
            'shift_group' => 'required',
        ]);

        //dd($request['style']);
        $data_recycle->update($request->all());
         RecycleModel::where('id',$request['id'])->update([
            'id_recycle' => $request['id_recycle'],
            'tanggal' => $request['tanggal'],
            'id_barang' => $request['id_barang'],
            'style' => $request['style'],
            'size' => $request['size'],
            'status' => $request['status'],
            'jumlah' => $request['jumlah'],
            'plant' => $request['plant'],
            'keterangan' => $request['keterangan'],
            'shift_group' => $request['shift_group'],
        ]);
        return redirect()->route('data_recycle.index')->with('Succes','Data Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecycleModel  $data_recycleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecycleModel $data_recycle)
    {
        $data_recycle->delete();
        return redirect()->route('recycle.index')->with('Succes','Data Berhasil di Hapus');
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
