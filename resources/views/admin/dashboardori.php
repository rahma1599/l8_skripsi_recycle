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

      
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Dashboard</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              
            </div>
          </div>
        </div>
      </div>
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
   </div>
           
        </section>
        <!--/ HTML5 export buttons table -->
      </div>
    </div>
  </div>
  @endsection