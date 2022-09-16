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
        $request->validate([
            'size' => 'required',
        ]);

            SizeModel::create([
                'size' => $request['size'],
            ]);
            return redirect()->route('size.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SizeModel  $size
     * @return \Illuminate\Http\Response
     */
    public function show(SizeModel $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SizeModel  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(SizeModel $size)
    {
        return view('size.edit',compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SizeModel  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SizeModel $size)
    {
        $request->validate([
            'size' => 'required',
        ]);

        //dd($request['style']);
        $size->update($request->all());
        SizeModel::where('id',$request['id'])->update([
            // 'id_barang' => $request['id_barang'],
            'size' => $request['size'],
        ]);
        return redirect()->route('size.index')->with('Succes','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SizeModel  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(SizeModel $size)
    {
        $size->delete();
        return redirect()->route('size.index')->with('Succes','Data Berhasil di Hapus');
    }
}
