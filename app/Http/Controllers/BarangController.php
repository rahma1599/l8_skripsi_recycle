<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;
use App\Models\StyleModel;
use App\Models\SizeModel;
use App\Models\JabatanModel;
use App\Models\RecycleModel;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vbarang = BarangModel::all();
        return view('barang.index',compact('vbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $style = StyleModel::all();
        return view('barang.create',compact('style'));
    }

    public function stokOpnameForm()
    {
        return view('barang.stok-opname');
        //dd('ke sini');
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
            'id_barang' => 'required',
            'style' => 'required',
        ]);

            BarangModel::create([
                'id_barang' => $request['id_barang'],
                'style' => $request['style'],
            ]);
            return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BarangModel $barang)
    {
        return view('barang.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangModel $barang)
    {
        $style = StyleModel::where('style', '!=', $barang->style)->get();
        return view('barang.edit',compact(['barang','style']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangModel $barang)
    {
         $request->validate([
            'id_barang' => 'required',
            'style' => 'required',
        ]);

        //dd($request['style']);
        $barang->update($request->all());
         BarangModel::where('id_barang',$request['style'])->update([
            // 'id_barang' => $request['id_barang'],
            'style' => $request['style'],
        ]);
        return redirect()->route('barang.index')->with('Succes','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangModel $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('Succes','Data Berhasil di Hapus');

    }
}
