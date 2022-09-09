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
                    <form method="POST" action="{{ route('recycle.store') }}" class="form" novalidate enctype="multipart/form-data">@csrf
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput1">NRP</label>
                              <input type="text" id="kode_barang" class="form-control" placeholder="Kode Barang" name="kode_barang">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput2">Nama Barang</label>
                              <input type="text" id="nama_barang" class="form-control" placeholder="Nama Barang" name="nama_barang">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Stok Barang</label>
                              <input type="text" id="stok_barang" class="form-control" placeholder="Stok Barang" name="stok_barang">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Harga Barang</label>
                              <input type="text" id="harga_barang" class="form-control" placeholder="Harga Barang" name="harga_barang">
                             </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="companyName">Foto Barang</label>
                          <input type="file" id="foto_barang" class="form-control" placeholder="Foto Barang" name="foto_barang">
                        </div>
                        <div class="form-group">
                          <label for="companyName">Keterangan</label>
                          <input type="text" id="keterangan" class="form-control" placeholder="keterangan" name="keterangan">
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
