@extends('layouts.web.app')

@push('styles')

@endpush

@section('content')
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="inner-hd">Contact US</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="tearm-condi-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12">
                    <p class="inner-para text-center">Whether you’re looking for answers, would like to solve a problem, or
                        just want to let us know how we did, you’ll find many ways to contact us right here. We’ll help you
                        resolve your issues quickly and easily, getting you back to more important things</p>
                    <p class="inner-para text-center">Please fill in the form below, we will write back soon. Feel free to
                        reach us via Skype or Phone too.</p>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <form action="">
                                <div class="">
                                    <label for="" class="contact-label">Full Name</label>
                                    <input type="text" class="contact-input-feild">
                                </div>
                                <div class="">
                                    <label for="" class="contact-label">Email</label>
                                    <input type="text" class="contact-input-feild">
                                </div>
                                <div class="">
                                    <label for="" class="contact-label">Phone</label>
                                    <input type="text" class="contact-input-feild">
                                </div>
                                <div class="">
                                    <label for="" class="contact-label">Your Message</label>
                                    <textarea name="" id="" class="contact-textarea-feild"></textarea>
                                </div>
                                <div class="opt-desc-area align-items-start">
                                    <button>Send</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <p class="inner-para "><strong>Manager</strong>  Niccolò Baldeshi Balleani San Martín de los Andes, Patagonia Argentina <strong>Sales & Bookings</strong>  email:</p>
                            <p class="inner-para ">info@flyonthemove.com</p>
                            <p class="inner-para ">Phone Number : +14066462080</p>
                            <p class="inner-para ">Skype: fly fishing last minute <strong>Technical Support</strong></p>
                            <p class="inner-para ">email: support@flyonthemove.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('scripts')

@endpush



