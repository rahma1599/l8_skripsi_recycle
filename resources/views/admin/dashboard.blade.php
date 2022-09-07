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
      <div class="content-header row">
        <div class="content-body">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                            <h3 class="warning">850</h3>
                            <h6>Prioritas</h6>
                            </div>
                            <div>
                            <i class="icon-bulb warning font-large-5 float-right"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                            <h3 class="danger">748</h3>
                            <h6>Belum Diproses</h6>
                            </div>
                            <div>
                            <i class="icon-envelope-letter danger font-large-5 float-right"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-1 col-1">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                            <h3 class="info">146</h3>
                            <h6>Diperoses</h6>
                            </div>
                            <div>
                            <i class="icon-envelope-open info font-large-5 float-right"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                            <h3 class="success">146</h3>
                            <h6>Selesai</h6>
                            </div>
                            <div>
                            <i class="icon-check success font-large-5 float-right"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>

    <div class="content-body">
        <!-- HTML5 export buttons table -->
        <section id="html5">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Daftar Pengguna</h4>
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
                      <a class="btn btn-success" href="{{ route('pengguna.create') }}">Add User</a>
                  </div>
                      <table class="table table-striped table-bordered dataex-html5-export-print">
                        <thead>
                          <tr>
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $data )
                            <tr>
                              <td>{{ $data->nrp }}</td>
                              <td>{{ $data->name }}</td>
                              <td>{{ $data->email }}</td>
                              <td>{{ $data->level }}</td>
                              <td>{{ $data->status }}</td>
                              <td class="text-center">
                                <form action="{{ route('pengguna.destroy',$data->id) }}" method="POST">
                                  @csrf
                                  {{-- @method('DELETE') --}}
                                  <a class="btn btn-info btn-sm" href="{{ route('admin.show',$data->id) }}"><i class="la la-search"></i></a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('pengguna.edit',$data->id) }}"><i class="la la-edit"></i></a>
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
