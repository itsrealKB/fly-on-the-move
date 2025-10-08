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
                                    <img src="{{ asset('assets/admin/images/unlock.png') }}" alt="">
                                </div>
                                <div class="succ-title">
                                    <h2>Update Your Password</h2>
                                </div>
                                <form action="{{ route('admin.update.password.action') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="email" value="{{ $email }}" />
                                    <input type="hidden" name="token" value="{{ $token }}" />
                                    <div class="log-input">
                                        <input type="password" name="password" placeholder="Enter your updated password"/>
                                        @error('password')
                                            <small class="text-danger fw-bold fst-italic">{{ $message }}</small>
                                        @enderror

                                        <input type="password" name="password_confirmation" placeholder="Re-enter your password"/>
                                        @error('password_confirmation')
                                            <small class="text-danger fw-bold fst-italic">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="l-login-btn">
                                        <button>Update Password</button>
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
