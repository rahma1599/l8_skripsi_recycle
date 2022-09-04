@extends('layouts.template')

@section('sidemenu')
  @include('admin.sidemenu')
@endsection

@section('data-tables')


<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Input Data Recycle</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form">Recycle Airbag</h4>
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
{{--                       <p>This is the most basic and default form having form sections.
                        To add form section use <code>.form-section</code> class
                        with any heading tags. This form has the buttons on the bottom
                        left corner which is the default position.</p>
                    </div> --}}
                    <form class="form">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput1">Shift/Group</label>
                              <input type="text" id="projectinput1" class="form-control" placeholder="input Shift/Group"
                              name="fname">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <label for="projectinput6">Keterangan</label>
                              <select id="projectinput6" name="keterangan" class="form-control">
                                <option value="0" selected="" disabled=""></option>
                                <option value="belum potong">belum potong</option>
                                <option value="tunggu buffing">tunggu buffing</option>
                                <option value="siap pouring">siap pouring</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Jumlah</label>
                              <input type="text" id="projectinput3" class="form-control" placeholder="Input Jumlah" name="email">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Kode Barang</label>
                              <input type="text" id="projectinput4" class="form-control" placeholder="Input Kode Barang" name="phone">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Style</label>
                              <input type="text" id="projectinput3" class="form-control" placeholder="Input Style" name="email">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Status</label>
                              <input type="text" id="projectinput4" class="form-control" placeholder="Input Status" name="phone">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Size</label>
                              <input type="text" id="projectinput3" class="form-control" placeholder="Input Size" name="email">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Size Run</label>
                              <input type="text" id="projectinput4" class="form-control" placeholder="Input Size Run" name="phone">
                            </div>
                          </div>
                        </div>


                        <h4 class="form-section"><i class="la la-paperclip"></i> Requirements</h4>
                        <div class="form-group">
                          <label for="companyName">Plant</label>
                          <input type="text" id="companyName" class="form-control" placeholder="Input Plant"
                          name="company">
                        </div>
                        <div class="form-group">
                          <label for="companyName">Date</label>
                          <input type="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip"
                          data-trigger="hover" data-placement="top" data-title="Date Opened">
                        </div>
                        <div class="form-group">
                          <label>Select File</label>
                          <label id="projectinput7" class="file center-block">
                            <input type="file" id="file">
                            <span class="file-custom"></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-actions right">
                        <button type="button" class="btn btn-warning btn-min-width">
                         Cancel
                        </button>
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