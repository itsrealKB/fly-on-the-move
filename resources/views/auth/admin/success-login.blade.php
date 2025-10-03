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
                                    <img src="{{ asset('assets/admin/images/succes-tik.png') }}" alt="">
                                </div>
                                <div class="succ-title">
                                    <h2>Success !</h2>
                                    <p>A email has been send to your <strong>email@domain.com.</strong>Please check for an email from company and click on the included link to reset your password.</p>
                                </div>
                                <div class="l-login-btn">
                                    <button>Back to login</button>
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
