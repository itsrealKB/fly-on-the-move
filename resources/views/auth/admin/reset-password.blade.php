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
                                <div class="suce-log-icon">
                                    <img src="{{ asset('assets/admin/images/lock-reset.png') }}" alt="">
                                </div>
                                <div class="succ-title">
                                    <h2>Reset Password</h2>
                                    <p>Enter your email address and we’ll send you an email with instructions to reset your password</p>
                                </div>
                                <form action="/admin/reset-password" method="POST">
                                    @csrf
                                    <div class="log-input">
                                        <input type="email" name="email" placeholder="Email">
                                        @error('email')
                                            <small class="text-danger fw-bold fst-italic">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="l-login-btn">
                                        <button>Reset</button>
                                    </div>
                                </form>
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
