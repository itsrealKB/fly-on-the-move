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
                                <div class="log-f-title">
                                    <h1>Save up to<strong>50%</strong> on <strong>the best Lodges, Outfitters</strong>and <strong>Guides</strong>around the world</h1>
                                </div>
                                <div class="log-f-title">
                                    <h1>Insert your <strong>Email</strong> and <strong>Password</strong></h1>
                                </div>
                                <form action="/admin/register" method="POST">
                                    @csrf
                                    <div class="log-input">
                                        <input type="text" name="name" placeholder="Name">
                                        @error('name')
                                            <small class="text-danger fw-bold fst-italic">{{ $message }}</small>
                                        @enderror
                                        <input type="email" name="email" placeholder="Email">
                                        @error('email')
                                            <small class="text-danger fw-bold fst-italic">{{ $message }}</small>
                                        @enderror
                                        <input type="number" name="number" placeholder="Phone">
                                        @error('number')
                                            <small class="text-danger fw-bold fst-italic">{{ $message }}</small>
                                        @enderror
                                        <input type="password" name="password" placeholder="Type your password">
                                        @error('password')
                                            <small class="text-danger fw-bold fst-italic">{{ $message }}</small>
                                        @enderror
                                        <input type="password" name="password_confirmation" placeholder="Re-type your password">
                                        @error('password_confirmation')
                                            <small class="text-danger fw-bold fst-italic">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="l-login-btn">
                                        <button>Register</button>
                                    </div>
                                </form>
                                <div class="l-forget-link">
                                    <p>Already a member? </p><a href="{{ route('admin.login') }}">Login Now</a>
                                </div>
                                <div class="l-privacy-f">
                                    <p>By logging into an account you agree to our <a href="#">Terms & Condition</a>,<a href="#"> Privacy Policy</a>, <a href="#"> Cookies Policy</a></p>
                                </div>
                                <div class="create-or">
                                    <div class="line-or"></div>
                                    <div class="or-hd">
                                        <h4>Click here to become our Partner!</h4>
                                    </div>
                                    <div class="line-or"></div>
                                </div>
                                <div class="l-login-btn ad-fishbtn">
                                    <button>Add Your Fishing Operation</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="login-main-img">
                            <img class="img-fluid" src="{{ asset('assets/admin/images/login-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
