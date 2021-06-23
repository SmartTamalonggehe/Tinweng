@extends('admin.layouts.master')

@section('title')Perhitungan Variabel @endsection

@section('css')
<!-- datatables css -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Toastr -->
<link type="text/css" href="{{ asset('assets/libs/toastr/toastr.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/apex-charts/apexcharts.css') }}" rel="stylesheet" type="text/css" />

<style>
    .container-rumus {
        display: inline-block;
        width: 100px;
        margin-bottom: 20px;
        position: relative;
    }

    .rumus {
        background-image: url('/images/kurung_kurawal_buka.png');
        background-repeat: no-repeat;
        background-size: contain;
        background-position: left;
        padding-left: 40px;
        position: relative;
        height: 120px;
        left: 100px;
    }

    .rendah,
    .sedang1,
    .sedang2,
    .tinggi,
    .u {
        position: absolute;
    }

    .rendah {
        top: -13px;

    }

    .sedang1 {
        top: 10px;
        font-size: 12px;
    }

    .sedang2 {
        top: 50px;
        font-size: 12px;
    }

    .tinggi {
        top: 110px;
    }

    .u {
        left: 0;
        top: 34px
    }
</style>


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

                <h4 class="card-title">Data @yield('title')</h4>
                <div id="route" style="display: none">nilaiKriteria</div>
                <div id="tampil"></div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

{{-- @include('admin.nilaiKriteria.form') --}}

@endsection

@section('script')
<!-- Toastr -->
<script src="{{ asset('assets/libs/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('assets/libs/toastr/toastr.js') }}"></script>
<!-- Plugins js -->
<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>
{{-- Apex Chart --}}
<script src="{{ URL::asset('/assets/libs/apex-charts/apexcharts.js') }}"></script>

{{-- My Script --}}
<script src="{{ asset('my_js/load_data.js') }}"></script>
<script src="{{ asset('my_js/add_data.js') }}"></script>


@endsection
