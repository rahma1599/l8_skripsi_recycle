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
        return view('barang.create');
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
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'stok_barang' => 'required',
            'harga_barang' => 'required',
        ]);

        $foto_barang = $request->file('foto_barang');
        if(isset($foto_barang)){
            $foto_extention = $foto_barang->getClientOriginalExtension();
            $nama_foto = $request->kode_barang . "-Foto." . $foto_extention;
            $upload_path = 'foto_barang/';
            $request->file('foto_barang')->move($upload_path, $nama_foto);
            //echo $nama_foto;
            BarangModel::create([
                'kode_barang' => $request['kode_barang'],
                'nama_barang' => $request['nama_barang'],
                'stok_barang' => $request['stok_barang'],
                'harga_barang' => $request['harga_barang'],
                'foto_barang' => $nama_foto,
                'keterangan' => $request['keterangan'],
            ]);
            //Alert::warning('Tambah pengguna berhasil !');
            return redirect()->route('barang.index');
        }else{
            BarangModel::create([
                'kode_barang' => $request['kode_barang'],
                'nama_barang' => $request['nama_barang'],
                'stok_barang' => $request['stok_barang'],
                'harga_barang' => $request['harga_barang'],
                'keterangan' => $request['keterangan'],
            ]);
            //Alert::warning('Tambah pengguna berhasil !');
            return redirect()->route('barang.index');

        }
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
        return view('barang.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,BarangModel $barang)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'stok_barang' => 'required',
            'harga_barang' => 'required',
        ]);

        //dd($barang->id);
        $foto_barang = $request->file('foto_barang');
        if(isset($foto_barang)){
            $foto_extention = $foto_barang->getClientOriginalExtension();
            $nama_foto = $request->kode_barang . "-Foto." . $foto_extention;
            $upload_path = 'foto_barang/';
            $request->file('foto_barang')->move($upload_path, $nama_foto);

            BarangModel::where('id',$barang->id)->update([
                'kode_barang' => $request['kode_barang'],
                'nama_barang' => $request['nama_barang'],
                'stok_barang' => $request['stok_barang'],
                'harga_barang' => $request['harga_barang'],
                'foto_barang' => $nama_foto,
                'keterangan' => $request['keterangan'],
            ]);
            return redirect()->route('barang.index')->with('Succes','Data Berhasil di Update');

        }else{
            $barang->update($request->all());
            return redirect()->route('barang.index')->with('Succes','Data Berhasil di Update');
        }
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
