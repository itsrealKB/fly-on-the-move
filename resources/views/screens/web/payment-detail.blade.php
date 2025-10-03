@extends('layouts.web.app')

@push('styles')

@endpush

@section('content')
    <section class="Booking-Section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="shadow-box">

                        <div class="booking-prod">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-12">
                                    <div class="img-pro">
                                        <img class="img-fluid" src="{{ asset('assets/web/images/destination-img-1.png') }}" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-12">
                                    <div class="pro-hd-sm">
                                        <h3>Lorem Ipsum...</h3>
                                        <h2>Lorem Ipsum is simply dummy text</h2>
                                    </div>
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="box-rate">
                                            4.2
                                        </div>
                                        <p class="reviews-para"> <span class="wbold">Very Good</span> 371 reviews</p>
                                        <p>Your booking is protected by <span>Get Easy Trip</span></p>

                                    </div>
                                    <div class=" d-flex justify-content-between align-items-center flex-wrap setgrid">
                                        <div class="date-box">
                                            <h4>Tuesday, Aug 11</h4>
                                            <h5>Arrival Date</h5>
                                        </div>
                                        <div class="date-box">
                                            <h4>Tuesday, Aug 11</h4>
                                            <h5>Departure Date</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="shadow-box">
                        <div class="radio-column">
                            <input type="radio" id="payfull" name="payfull" value="Pay in full">
                            <label for="payfull" class="w-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="radio-hd">Pay in full</h4>
                                        <p class="radoio-para">Pay the total and you are all set</p>
                                    </div>
                                    <div class="check-circle"><i class="fa-regular fa-circle"></i></div>
                                </div>
                            </label>
                        </div>
                        <div class="radio-column">
                            <input type="radio" id="payfull" name="payfull" value="Pay in full">
                            <label for="payfull" class="w-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="radio-hd">Pay part now, part later</h4>
                                        <p class="radoio-para">Pay $207.43 now, and the rest ($207.43) will be automatically
                                            charged to the same payment method on Nov 14, 2022. No extra fees.</p>
                                        <button class="readmore-booking mt-3">More Info</button>
                                    </div>
                                    <div class="check-circle"><i class="fa-regular fa-circle"></i></div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="shadow-box">
                        <div class="radio-column blue-bg">
                            <input type="radio" id="payfull" name="payfull" value="Pay in fulls">
                            <label for="payfull" class="w-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="visa-card-radio"><img src="{{ asset('assets/web/images/Visa.svg') }}" alt="Visa Card">
                                        </div>
                                        <h4 class="radio-hd m-0">**** 4321</h4>
                                        <p class="radoio-para">02/27</p>
                                    </div>
                                    <div class="check-circle"><i class="fa-regular fa-circle"></i></div>
                                </div>
                            </label>
                        </div>
                        <div class="uploadCard-info">
                            <button type="button" class="upload-oppop-btn open-card-popup">
                                <i class="fa-solid fa-plus"></i>
                                <br>
                                <h5>Add a new card</h5>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="shadow-box">

                        <!-- Filter ROw -->
                        <!-- Room Type -->
                        <div class="row">
                            <div class="col-12">
                                <h2 class="filter-hd">Rooms Details</h2>
                            </div>
                            <div class="col-12">
                                <div class="boxone-filter">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4>Room Type</h4>
                                        <h3>Luxury Deluxe</h3>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3 align-items-end">
                                        <div class="drop-title">
                                            <h5 class="guest-title">No. of Rooms</h5>
                                        </div>
                                        <div class="quantity-box d-flex align-items-center">
                                            <button class="btn-increm" id="roomdecre">-</button>
                                            <div class="number-div">
                                                <input type="number" id="roominput" name="roominput" min="1" max="100"
                                                    placeholder="1">
                                            </div>
                                            <button class="btn-increm" id="roomincre">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr class="mt-1 mb-3">
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="filter-hd">Guests Details</h2>
                            </div>
                            <div class="col-12">
                                <div class="boxone-filter">
                                    <div class="d-flex justify-content-between mb-3 align-items-end">
                                        <div class="drop-title">
                                            <h5 class="guest-title">Adults</h5>
                                        </div>
                                        <div class="quantity-box d-flex align-items-center">
                                            <button class="btn-increm" id="adultDecrement">-</button>
                                            <div class="number-div">
                                                <input type="number" id="adultIQuantity-field" name="adultIQuantity-field"
                                                    min="0" max="100" placeholder="0">
                                            </div>
                                            <button class="btn-increm" id="adultIncrement">+</button>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3 align-items-end">
                                        <div class="drop-title">
                                            <h5 class="guest-title">Children</h5>
                                        </div>
                                        <div class="quantity-box d-flex align-items-center">
                                            <button class="btn-increm" id="childDecrement">-</button>
                                            <div class="number-div">
                                                <input type="number" id="childquantity-field" name="childquantity-field"
                                                    min="0" max="100" placeholder="0">
                                            </div>
                                            <button class="btn-increm" id="childIncrement">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr class="mt-1 mb-3">
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="filter-hd mb-3">Rooms Details</h2>
                            </div>
                            <div class="col-12">
                                <div class="price-list d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="price-hd-book">Base Fare</h3>
                                    <h2 class="price-clm-book">$240</h2>
                                </div>
                                <div class="price-list d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="price-hd-book">Discount</h3>
                                    <h2 class="price-clm-book">$0</h2>
                                </div>
                                <div class="price-list d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="price-hd-book">Taxes</h3>
                                    <h2 class="price-clm-book">$20</h2>
                                </div>

                                <div class="price-list d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="price-hd-book">Service Fee</h3>
                                    <h2 class="price-clm-book">$5</h2>
                                </div>
                                <div class="">
                                    <hr class="mt-3 mb-3">
                                </div>
                                <div class="price-list d-flex justify-content-between align-items-center mb-3">
                                    <h2 class="price-clm-book">Total</h2>
                                    <h2 class="price-clm-book">$265</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="thanks-for-Booking">
        <div class="cardoverlay"></div>
        <div class="positon-box-popup thanks">
            <div class="close-btn-popup">
                <button class="closeBtn-poup close-btnstyle" type="button"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="card-form-inner center">
                <div class="check"><i class="fa-solid fa-circle-check"></i></div>
                <h2 class="thanks-hd">Thanks for Booking!</h2>
                <p class="para-popup">Booking Ref: FRA-BE-123456789-LUXROOM</p>
                <p class="para-popup">You successfully created your booking. <br>
                    To print your booking.</p>

                <div class="mt-4 mb-4"><a href="#!" class="clickhere">Click Here!</a></div>
                <div class="d-flex justify-content-center deal-bookbtn">
                    <a href="{{ route('index') }}" class="book-flight">Return Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Add a new Card Popup Start-->

    <div class="card-open-popup">
        <div class="cardoverlay"></div>
        <div class="positon-box-popup">
            <div class="close-btn-popup">
                <button class="closeBtn-poup close-btnstyle" type="button"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="card-form-inner">
                <h1 class="popup-hd mb-3">Add a new Card</h1>
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-border-box">
                                <div class="text-field">
                                    <input type="text" required="">
                                    <label>Card Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-border-box">
                                <div class="text-field">
                                    <input type="text" required="">
                                    <label>Exp. Date </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-border-box">
                                <div class="text-field">
                                    <input type="text" required="">
                                    <label>CVC</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-border-box">
                                <div class="text-field">
                                    <input type="text" required="">
                                    <label>Name on Card</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-border-box">
                                <div class="text-field">
                                    <select name="cars" id="cars">
                                        <option value="volvo">Country or Region</option>
                                        <option value="saab">Country or Region</option>
                                        <option value="mercedes">Country or Region</option>
                                        <option value="audi">Country or Region</option>
                                    </select>
                                    <!-- <label>Country or Region</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-check">
                                <div class="text-check">
                                    <input type="checkbox" name="vehicle3" value="Boat" checked>
                                    <label for="vehicle3"> Securely save my information for 1-click checkout</label><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-3">
                                <button class="view-place thankyou-popupopen" type="button"> Add Card</button>
                            </div>

                            <p class="para-popup center">
                                By confirming your subscription, you allow The Outdoor Inn Crowd Limited to charge your card
                                for this payment and future payments in accordance with their terms. You can always cancel
                                your subscription.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // popup Open

        $(".open-card-popup").click(function () {
            $(".card-open-popup").addClass("active");
        });
        $(".thankyou-popupopen").click(function () {
            $(".card-open-popup").removeClass("active");
            $(".thanks-for-Booking").addClass("active");
        });

        // Thankyou Open popup

        $(".closeBtn-poup").click(function () {
            $(".card-open-popup").removeClass("active");
            $(".thanks-for-Booking").removeClass("active");
            $(".ticket-Booking").removeClass("active");
        });


        // View ticket
        $(".viwe-ticket-btn").click(function () {
            $(".thanks-for-Booking").removeClass("active");
            $(".ticket-Booking").addClass("active");
        });


        // Add the "active" class when a radio input is clicked
        $(document).ready(function () {
            $("input[type='radio'][name='payfull']").click(function () {
                $(".radio-column").removeClass("active"); // Remove the class from all radio-columns
                if ($(this).is(":checked")) {
                    $(this).closest(".radio-column").addClass("active"); // Add the class to the parent radio-column
                }
            });
        });

        // Rooms Quantity Increment

        const roomIncre = document.getElementById("roomincre");
        const roomDecre = document.getElementById("roomdecre");
        const roomInput = document.getElementById("roominput");

        roomIncre.addEventListener("click", () => {
            roomInput.stepUp();
        });

        roomDecre.addEventListener("click", () => {
            roomInput.stepDown();
        });



        const adultIncrementBtn = document.getElementById("adultIncrement");
        const adultDecrementBtn = document.getElementById("adultDecrement");
        const adultInputField = document.getElementById("adultIQuantity-field");

        adultIncrementBtn.addEventListener("click", () => {
            adultInputField.stepUp();
        });

        adultDecrementBtn.addEventListener("click", () => {
            adultInputField.stepDown();
        });


        const childIncrementButton = document.getElementById("childIncrement");
        const childDecrementButton = document.getElementById("childDecrement");
        const childInputField = document.getElementById("childquantity-field");

        childIncrementButton.addEventListener("click", () => {
            childInputField.stepUp();
        });

        childDecrementButton.addEventListener("click", () => {
            childInputField.stepDown();
        });

        // const roomIncrementButton = document.getElementById("roomIncrement");
        // const roomDecrementButton = document.getElementById("roomDecrement");
        // const roomInputField = document.getElementById("roomQuantity-field");

        // roomIncrementButton.addEventListener("click", () => {
        //   roomInputField.stepUp();
        // });

        // roomDecrementButton.addEventListener("click", () => {
        //   roomInputField.stepDown();
        // });
    </script>
@endpush
