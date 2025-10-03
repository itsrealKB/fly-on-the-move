@extends('layouts.web.guest')

@push('styles')
    <style>
        .login-sec{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 80px 0;
            background: gainsboro;
            }
            .form-label{
            margin-top: 10px;
            font-family: var(--roboto);
            font-weight: 500;
            color: #000;
            font-size: 20px;
            }
            .log-input{
            padding: 15px 30px;
            height: auto !important;
            }
            .log-btn{
            background: var(--blue-theme);
            color: #fff;
            }
            .log-btn:hover{
            background: var(--blue-theme);
            color: #fff;
            }
            .form-check .form-label{
            margin-top: 0 !important;
            }
            .log-chk{
            outline: none !important;
            box-shadow: none !important;
            }
            .log-chk:focus{
            outline: none !important;
            box-shadow: none !important;
            }
    </style>
@endpush

@section('content')
    <section class="login-sec">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="{{ asset('assets/web/images/logo.png') }}"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form>
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form1Example13" class="form-control form-control-lg log-input" />
                <label class="form-label" for="form1Example13">Email address</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form1Example23" class="form-control form-control-lg log-input" />
                <label class="form-label" for="form1Example23">Password</label>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input log-chk" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-label" for="form1Example3"> Remember me </label>
                </div>
                <a href="{{ route('forget.password') }}" class="form-label">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn log-btn btn-lg btn-block">Sign in</button>

            <div class="mt-3 d-flex justify-content-between">
                <label class="form-label" for="form1Example3">Don't Have An Account?</label>
                <a href="{{ route('register') }}" class="form-label">Register Here</a>
            </div>

            <!-- <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
            </div>

            <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                role="button">
                <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
            </a>
            <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                role="button">
                <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> -->

            </form>
        </div>
        </div>
    </div>
    </section>
@endsection

