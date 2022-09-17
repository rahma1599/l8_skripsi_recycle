@extends('layouts.template')
@section('sidemenu')
  @include('admin.sidemenu')
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form">Form Edit Transaksi Recycle</h4>
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
                        <form method="POST" action="{{ route('data_recycle.update',$data_recycle->id) }}" class="form" novalidate >@csrf
                            @method('PUT')
                            <div class="form-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="projectinput1">Id Recycle</label>
                                    <input type="text" id="id_recycle" class="form-control" name="id_recycle" value="{{ $data_recycle->id_recycle }}" readonly>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="projectinput2">Tanggal</label>
                                    <input type="date" id="tanggal" class="form-control" placeholder="Tanggal" name="tanggal" value="{{ $data_recycle->tanggal }}">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="projectinput3">Id Barang</label>
                                    <input type="text" id="id_barang" class="form-control" placeholder="Barang" name="id_barang" value="{{ $data_recycle->id_barang }}">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="projectinput4">Style Barang</label>
                                    <input type="text" id="style" class="form-control" placeholder="Style Barang" name="style" value="{{ $data_recycle->style }}">
                                   </div>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="projectinput3">Size Barang</label>
                                    <input type="text" id="size" class="form-control" placeholder="Size Barang" name="size" value="{{ $data_recycle->size }}">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="projectinput4">Status Barang</label>
                                    <input type="text" id="status" class="form-control" placeholder="Status Barang" name="status" value="{{ $data_recycle->status }}">
                                   </div>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="projectinput3">Shift/Group</label>
                                    <select id="shift_group" name="shift_group" class="form-control">
                                        <option value="{{ $data_recycle->shift_group }}" default>{{ $data_recycle->shift_group }}</option>
                                        <option value="1/A">1/A</option>
                                        <option value="1/B">1/B</option>
                                        <option value="1/C">1/C</option>
                                        <option value="2/A">2/B</option>
                                        <option value="2/B">2/B</option>
                                        <option value="2/C">2/C</option>
                                        <option value="3/A">3/A</option>
                                        <option value="3/B">3/B</option>
                                        <option value="3/C">3/C</option>
                                        </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="projectinput4">Keterangan</label>
                                    <input type="text" id="keterangan" class="form-control" placeholder="Keterangan" name="keterangan" value="{{ $data_recycle->keterangan }}">
                                   </div>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="projectinput3">Jumlah</label>
                                    <input type="text" id="jumlah" class="form-control" placeholder="Jumlah" name="jumlah" value="{{ $data_recycle->jumlah }}">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="projectinput4">Plant</label>
                                    <input type="text" id="plant" class="form-control" placeholder="Plant" name="plant" value="{{ $data_recycle->plant }}">
                                   </div>
                                  </div>
                              </div>
                            <div class="form-actions right">
                              <a href="{{ URL::previous() }}" class="btn btn-warning btn-min-width">Back</a>
                              <button type="submit" class="btn btn-primary btn-min-width">
                                Update
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
