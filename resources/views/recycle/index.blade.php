@extends('layouts.template')
@section('sidemenu')
  @include('admin.sidemenu')
@endsection
@section('data-tables')
<link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- HTML5 export buttons table -->
        <section id="html5">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Daftar Transaksi Recycle</h4>
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
                  <div class="card-body card-dashboard">
                    <div class="float-left">
                      <a class="btn btn-success" href="{{ route('data_recycle.create') }}">Add Transaksi</a>
                  </div>
                      <table class="table table-striped table-bordered dataex-html5-export-print">
                        <thead>
                          <tr>
                            <th>Id Transaksi</th>
                            <th>Tanggal</th>
                            <th>Id Barang</th>
                            <th>Style</th>
                            <th>Jumlah</th>
                            <th>Size</th>
                            <th>Plant</th>
                            <th>Status</th>
                            <th>Shift/Group</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data_recycle as $data )
                            <tr>
                              <td>{{ $data->id_recycle }}</td>
                              <td>{{ $data->tanggal }}</td>
                              <td>{{ $data->id_barng }}</td>
                              <td>{{ $data->style }}</td>
                              <td>{{ $data->jumlah }}</td>
                              <td>{{ $data->size }}</td>
                              <td>{{ $data->plant }}</td>
                              <td>{{ $data->status }}</td>
                              <td>{{ $data->shift_group }}</td>
                              <td>{{ $data->keterangan }}</td>
                              <td class="text-center">
                                <form action="{{ route('data_recycle.destroy',$data->id) }}" method="POST">
                                  {{-- <a class="btn btn-info btn-sm" href="{{ route('data_recycle.show',$data->id) }}"><i class="la la-search"></i></a> --}}
                                    <a class="btn btn-primary btn-sm" href="{{ route('data_recycle.edit',$data->id) }}"><i class="la la-edit"></i></a>
                                    @csrf
                                    {{-- @method('DELETE') --}}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="la la-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ HTML5 export buttons table -->
      </div>
    </div>
  </div>
  @endsection
