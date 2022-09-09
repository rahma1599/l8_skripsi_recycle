@extends('layouts.template')
@section('sidemenu')
  @include('admin.sidemenu')
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
      <!-- User Profile Cards -->
      <section id="user-profile-cards" class="row mt-2">
        <div class="col-12">
          <h4 class="text-uppercase">Detil Barang</h4>
          {{-- <p>User profile cards with border & shadow variant.</p> --}}
        </div>
        <div class="col-xl-4 col-md-6 col-12">
          <div class="card">
            <div class="text-center">
              <div class="card-body">
                <img src="{{asset('/foto_barang/'.$barang->foto_barang)}}" class="rounded-circle  height-150"
                alt="Card image">
              </div>
              <div class="card-body">
                <h4 class="card-title">{{ $barang->kode_barang }}</h4>
                <h6 class="card-subtitle text-muted">{{ ucfirst($barang->nama_barang) }}</h6>
              </div>
            </div>
            <div class="list-group list-group-flush">
              <div class="list-group-item"><i class="la la-briefcase"></i>Divisi TI</div>
              <div class="list-group-item"><i class="ft-mail"></i> {{ $barang->stok_barang }}</div>
              <div class="list-group-item"><i class="ft-check-square"></i>{{ ucfirst($barang->harga_barang) }}</div>
              <div class="list-group-item"> <i class="ft-message-square"></i> {{ $barang->keterangan }}</div>
            </div>
            <div class="form-actions left">
                <a href="{{ URL::previous() }}" class="btn btn-warning btn-min-width">Back</a>
            </div>
          </div>
        </div>
      </section>
      </div>
    </div>
</div>
@endsection
