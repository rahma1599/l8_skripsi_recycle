@extends('layouts.template')
@section('sidemenu')
  @include('admin.sidemenu')
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form">Form Tambah Transaksi Recycle</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="card-text">
                    <form method="POST" action="{{ route('data_recycle.store') }}" class="form" novalidate enctype="multipart/form-data">@csrf
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput1">Id Recycle</label>
                              <input type="text" id="id_recycle" class="form-control" name="id_recycle" value="{{ $no_urut }}" readonly>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput2">Tanggal</label>
                              <input type="date" id="tanggal" class="form-control" placeholder="Tanggal" name="tanggal">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Id Barang</label>
                              <select id="id_barang" name="id_barang" class="form-control">
                                @foreach($barang as $data)
                                <option value="{{$data->id_barang}}">{{$data->id_barang}}</option>
                                @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Style Barang</label>
                              <input type="text" id="style" class="form-control" placeholder="Style Barang" name="style">
                             </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Size Barang</label>
                              <select id="size" name="size" class="form-control">
                                @foreach($size as $data)
                                <option value="{{$data->size}}">{{$data->size}}</option>
                                @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Status Barang</label>
                              <select id="status" name="status" class="form-control">
                                <option value="Laporan Masuk">Laporan Masuk</option>
                                <option value="Laporan Diproses">Laporan Diproses</option>
                                <option value="Laporan Selesai">Laporan Selesai</option>
                                </select>
                             </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Shift/Group</label>
                              <select id="shift_group" name="shift_group" class="form-control">
                                <option value="1/C">1/C</option>
                                <option value="2/B">2/B</option>
                                <option value="3/A">3/A</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Keterangan</label>
                              <select id="keterangan" name="keterangan" class="form-control">
                                <option value="Belum Potong">Belum Potong</option>
                                <option value="Tunggu Buffing">Tunggu Buffing</option>
                                <option value="Siap Pouring">Siap Pouring</option>
                                </select>
                             </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Jumlah</label>
                              <input type="text" id="jumlah" class="form-control" placeholder="Jumlah" name="jumlah">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Plant</label>
                              <input type="text" id="plant" class="form-control" placeholder="Plant" name="plant" value="JVB">
                             </div>
                            </div>
                        </div>
                      <div class="form-actions right">
                        <a href="{{ URL::previous() }}" class="btn btn-warning btn-min-width">Back</a>                        {{-- </button> --}}
                        <button type="submit" class="btn btn-primary btn-min-width">
                          Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection
