@extends('admin.layouts.master')

@section('title') Hasil @endsection

@section('css')
<!-- datatables css -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Toastr -->
<link type="text/css" href="{{ asset('assets/libs/toastr/toastr.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- start page title -->
<div class="row align-items-center">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="font-size-18">Halaman @yield('title')</h4>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="float-right d-none d-md-block">
            <div class="dropdown">
                <button id="tambah" class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button">
                    Tambah Data
                </button>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="route" style="display: none">hasil</div>
                <div id="tampil"></div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@include('admin.hasil.form')

@endsection

@section('script')
<!-- Toastr -->
<script src="{{ asset('assets/libs/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('assets/libs/toastr/toastr.js') }}"></script>
<!-- Plugins js -->
<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>

{{-- My Script --}}
<script src="{{ asset('my_js/load_data.js') }}"></script>
<script src="{{ asset('my_js/add_data.js') }}"></script>



@endsection
