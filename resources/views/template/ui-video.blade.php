@extends('template.layouts.master')

@section('title') @lang('translation.Video') @endsection

@section('content')

<!-- start page title -->
<div class="row align-items-center">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="font-size-18">Video</h4>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                <li class="breadcrumb-item active">Video</li>
            </ol>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="float-right d-none d-md-block">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-settings mr-2"></i> Settings
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Responsive embed video 16:9</h4>
                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>
            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Responsive embed video 21:9</h4>
                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                <!-- 21:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>

            </div>
        </div>
    </div> <!-- end col -->

</div> <!-- end row -->

<div class="row">

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Responsive embed video 4:3</h4>
                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                <!-- 4:3 aspect ratio -->
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>
            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Responsive embed video 1:1</h4>
                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                <!-- 1:1 aspect ratio -->
                <div class="embed-responsive embed-responsive-1by1">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>

            </div>
        </div>
    </div> <!-- end col -->

</div> <!-- end row -->

@endsection
