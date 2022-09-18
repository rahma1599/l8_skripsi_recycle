<?php

namespace App\Http\Controllers;

use App\Models\LaporanModel;
use App\Models\RecycleModel;
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

    public function laporanBelumPotong()
    {
        return view('laporan.show-laporan-belum-potong');

    }

    public function laporanTungguBuffing()
    {
        return view('laporan.show-laporan-tunggu-buffing');

    }

    public function laporanSiapPouring()
    {
        return view('laporan.show-laporan-siap-pouring');

    }

    public function showLaporan(Request $request){
        $dari_periode = date('Y-m-d',strtotime($request['dari_tanggal']));
        $sd_periode = date('Y-m-d',strtotime($request['sd_tanggal']));
        $jenis = $request['jenis_laporan'];
        //$parameter_periode = [''];

        if ($jenis == 'belum-potong') {
            $jenis_laporan = $jenis;
            // echo $jenis_laporan;
            $isi_laporan = RecycleModel::where([['tanggal','>=', $dari_periode],['tanggal','<=', $sd_periode]])->get();
        }elseif($jenis == 'tunggu-buffing'){
            $jenis_laporan = $jenis;
            // echo $jenis_laporan;
            $isi_laporan = RecycleModel::where([['tanggal','>=', $dari_periode],['tanggal','<=', $sd_periode]])->get();
        }elseif($jenis == 'siap-pouring'){
            $jenis_laporan = $jenis;
            $isi_laporan = RecycleModel::where([['tanggal','>=', $dari_periode],['tanggal','<=', $sd_periode]])->get();
            // echo $jenis_laporan;
        }
        return view('laporan.laporan',compact('isi_laporan','jenis_laporan','dari_periode','sd_periode'));
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
