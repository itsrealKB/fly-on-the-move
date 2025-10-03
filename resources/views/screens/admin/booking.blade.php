@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <main>
        <form action="">
            <section class="order-detail-sec">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="order-detail-para">
                                <p>Order <strong>#12345</strong> was placed on <strong>Friday November 11, 2023 12:27</strong> - Status <strong class="primary-blue">Completed & Paid.</strong></p>
                            </div>
                            <div class="order-title">
                                <h1>Order details</h1>
                            </div>
                        </div>
                        <div class="col-12 overf">
                            <div class="order-detail-box-area">
                                <div class="product-box-area">
                                    <div class="prod-box-hd">
                                        Product
                                    </div>
                                    <div class="prod-box-detail">
                                        <h3 class="primary-blue"><strong>Fly Fishing Italy - Offer Code 386 / 1</strong></h3>
                                        <p>Italy, Tuscany, Florence</p>
                                        <div class="qty-box-area">
                                            <p>Quantity: <span>1</span></p>
                                            <p>From / to: <span>April 18 - April 20, 2021</span></p>
                                            <p>Nights / Fishing Days: <span> 3 / 3</span></p>
                                        </div>
                                        <div class="qty-box-area">
                                            <p>Room:<span>Double or Twin - Standard</span></p>
                                            <p>Guest in room: <span>1</span></p>
                                            <p>Guide: <span>shared</span></p>
                                        </div>
                                    </div>
                                    <div class="pymt-p">
                                        <h1>Payment method:</h1>
                                    </div>
                                    <div class="pymt-p">
                                        <h1>Total</h1>
                                    </div>
                                </div>
                                <div class="product-box-area">
                                    <div class="prod-box-hd">
                                            Total
                                    </div>
                                    <div class="prod-box-detail">
                                        <h3 class="primary-gold"><strong>$2.00</strong></h3>
                                    </div>
                                    <div class="pymt-p">
                                        <h1 class="primary-gold">PayPal Express Checkout</h1>
                                    </div>
                                    <div class="pymt-p">
                                        <h1 class="primary-gold">$2.00</h1>
                                    </div>
                                </div>
                            </div>                                        
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="order-title">
                                <h1>Billing address</h1>
                            </div>
                            <div class="bill-detail-box-area">
                                <div class="order-user-detail">
                                    <span><strong>First Name / Last name:</strong>Niccolo Baldeschi Balleani</span>
                                </div>
                                <div class="order-user-detail">
                                    <span><strong>Address:</strong> via ancona</span>
                                </div>
                                <div class="order-user-detail">
                                    <span><strong>Address 2: </strong>106</span>
                                </div>
                                <div class="order-user-detail">
                                    <span><strong>City:</strong> jesi, italy</span>
                                </div>
                                <div class="order-user-detail">
                                    <span><strong>State:</strong> AN</span>
                                </div>
                                <div class="order-user-detail">
                                    <span><strong>Country:</strong> IT</span>
                                </div>
                                <div class="order-user-detail">
                                    <span><i class="fa-solid fa-phone primary-gold"></i> <strong>Phone:</strong> 54297243004</span>
                                </div>
                                <div class="order-user-detail">
                                    <span><i class="fa-solid fa-envelope primary-gold"></i> <strong>Email:</strong> nickoflyfish@hotmail.com</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="order-title">
                                <h1>Contact Details</h1>
                            </div>
                            <div class="bill-detail-box-area">
                                <div class="order-user-detail">
                                    <span>Operation Name: <strong class="primary-blue"> Fly Fishing Italy</strong></span>
                                </div>
                                <div class="order-user-detail">
                                    <span> Contact Name: <strong class="primary-gold"> Gianluca Orselli</strong></span>
                                </div>
                                <div class="order-user-detail">
                                    <a href="http://www.flyfishingitaly.com">http://www.flyfishingitaly.com</a>
                                </div>
                                <div class="order-user-detail">
                                    <span><i class="fa-solid fa-phone primary-gold"></i> <strong>Phone:</strong> 54297243004</span>
                                </div>
                                <div class="order-user-detail">
                                    <span><i class="fa-solid fa-envelope primary-gold"></i> <strong>Email:</strong> nickoflyfish@hotmail.com</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="go-back-btn">
                                <a href="#">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>  
    </main>
@endsection

@push('scripts')
    
@endpush
