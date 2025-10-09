@extends('layouts.admin.guest')

@section('content')
    <main>
        <section class="login">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                            <div class="login-form-area">
                                <div class="logo-area">
                                    <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/admin/images/login-logo.png') }}" alt=""></a>
                                </div>

                                <div class="login-input-area">

                                    @if(session('msg'))
                                        <div class="alert alert-{{ session('type') }} alert-dismissible" role="alert">
                                            <div> {{ session('msg') }}</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <div class="log-f-title">
                                        <h1>Insert your <strong>Email</strong> and <strong>Password</strong></h1>
                                    </div>
                                    <form action="{{ route('admin.login.post') }}" method="POST">
                                        @csrf
                                        <div class="log-input">
                                            <input type="email" name="email" placeholder="Email">
                                            @error('email')
                                                <small class="text-danger fw-bold fst-italic">{{ $message }}</small>
                                            @enderror
                                            <input type="password" name="password"  placeholder="Password">
                                            @error('password')
                                                <small class="text-danger fw-bold fst-italic">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="l-forget-link">
                                            <p>Forgot your password?</p><a href="{{ route('admin.reset.password') }}"> Click Here</a>
                                        </div>
                                        <div class="remember-check">
                                            <input id="Remember me" name="remember_me" type="checkbox">
                                            <label for="Remember me">Remember me</label>
                                        </div>
                                        <div class="l-login-btn">
                                            <button>Login</button>
                                        </div>
                                    </form>
                                    <div class="l-forget-link">
                                        {{-- <p>New Account?</p><a href="{{ route('admin.register') }}"> Register Now</a> --}}
                                    </div>
                                    <div class="l-privacy-f">
                                        <p>By logging into an account you agree to our <a href="#">Terms & Condition</a>,<a href="#"> Privacy Policy</a>, <a href="#"> Cookies Policy</a></p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-6">
                        <div class="login-main-img">
                            <img class="img-fluid" src="{{ asset('assets/admin/images/login.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
