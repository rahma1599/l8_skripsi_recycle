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
                  <h4 class="card-title">Laporan Recycle</h4>
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
                      <a class="btn btn-success" href="{{ route('admin.index') }}">Laporan</a>
                  </div>
                      <table class="table table-striped table-bordered dataex-html5-export-print">
                        <thead>
                          <tr>
                            <th>Tanggal</th>
                            <th>Kode Barang</th>
                            <th>Style</th>
                            <th>Plant</th>
                            <th>Shift/Group</th>
                            <th>Size</th>
                            <th>Size Run</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($vlaporan as $data )
                            <tr>
                              <td>{{ $data->tanggal }}</td>
                              <td>{{ $data->kode_barang }}</td>
                              <td>{{ $data->style }}</td>
                              <td>{{ $data->plant }}</td>
                              <td>{{ $data->shift/group }}</td>
                              <td>{{ $data->size }}</td>
                              <td>{{ $data->size_run }}</td>
                              <td>{{ $data->keterangan }}</td>
                              <td>{{ $data->jumlah }}</td>
                              <td>{{ $data->status }}</td>
                              <td class="text-center">
                                <form action="{{ route('laporan.destroy',$data->id) }}" method="POST">
                                  <a class="btn btn-info btn-sm" href="{{ route('laporan.show',$data->id) }}"><i class="la la-search"></i></a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('laporan.edit',$data->id) }}"><i class="la la-edit"></i></a>
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