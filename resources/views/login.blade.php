@extends('template.layouts.master-without-nav')

@section('title') @lang('Login') @endsection

@section('body')

    <body>
    @endsection

    @section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="index" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary">
                                <div class="text-primary text-center p-4">
                                    <h5 class="text-white font-size-20">Selamat Datang</h5>
                                    <p class="text-white-50">Silahkan Login</p>
                                    <a href="index" class="logo logo-admin">
                                        <img src="{{ URL::asset('/assets/images/logo-sm.png') }}" height="24" alt="logo">
                                    </a>
                                </div>
                            </div>

                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form class="form-horizontal mt-4" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input name="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                @if (old('email')) value="{{ old('email') }}" @endif id="username" placeholder="Enter username"
                                                autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" name="password"
                                                class="form-control  @error('password') is-invalid @enderror"
                                                id="userpassword" placeholder="Enter password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customControlInline">
                                                    <label class="custom-control-label" for="customControlInline">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <button class="btn btn-primary w-md waves-effect waves-light"
                                                    type="submit">Log In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
