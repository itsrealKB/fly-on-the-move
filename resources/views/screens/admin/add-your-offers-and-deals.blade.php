@extends('layouts.admin.app')

@push('styles')
    <style>
    .step2 .profile-detail label {
        width: 15%;
    }

    .step2 .rates-wrapper {
        width: 85%;
    }

    .step2 .rates-wrapper .col-lg-2 {
        align-self: center;
    }

    .step2 .rates-wrapper .col-lg-2 h5 {
        color: black;
        font-size: 20px;
        font-weight: 600;
    }

    #imageContainer {
        margin-top: 20px;
        text-align: center;
        display: none;
    }

    /* #imageContainer #dateCanvas {
        width: 300px !important;
        height: 300px !important;
    } */

    canvas {
        border: 1px solid #ccc;
        border-radius: 8px;
        background: #fff;
    }

    .block-div-content {
        gap: 15px;
    }

    .block-div-content label {
        font-weight: 600;
        align-content: start;
        margin-top: 10px;
    }

    .input-div {
        padding-top: 0;
    }

    .block-div-content input,
    .block-div-content textarea,
    .block-div-content select,
    .input-div-check,
    .input-div-check label {
        margin: 0;
    }

    .block-div-content.d-flex.mb-3 {
        margin-bottom: 25px !important;
    }



    @media (max-width: 1440px) {

        .rate-inp label,
        .block-div-content label {
            padding: 0;
        }

        .main-wrapper-radio {
            flex-wrap: wrap;
        }

        .block-div-content {
            flex-direction: column;
        }

        .radio-div .input-div {
            width: 100%;
        }

    }

    @media (min-width: 1600px) {
        .block-div-content label {
            width: 236px;
        }
    }

    @media (max-width: 991px) {
        .h-mobile {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .step2 .profile-detail label {
            width: 25%;
        }

        .rate-inp label {
            font-size: 13px;
        }

        .rates-wrapper p {
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        .step2 .profile-detail input {
            margin: 8px 0 14px 0px;
        }

        .step2 .profile-detail label,
        .step2 .rates-wrapper,
        .radio-div {
            width: 100%;
        }
    }

    .no-shad:focus {
        box-shadow: none !important;
    }
</style>
@endpush

@section('content')
   <main>
        <form id="signUpForm" action="#!" onsubmit="return validateForm()">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-11 col-12 custom-column">
                            <div class="step1 active-option parentclass" id="step-1" data-value2="stepForm1">
                                <div class="booking-chart-area">
                                    <div class="payment-det-title">
                                        <h2>Create Your Package Deal <span class="stepIndicator">Step 1/2</span> </h2>
                                    </div>
                                    <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>Date & Duration</h3>
                                            <p>Fields mark with an asterisk(*) are required</p>
                                        </div>
                                    </div>
                                    <div class="bg-yellowset chrt-hd-area d-grid gap-2 pt-3">
                                        <p>You can decide to sell this Offer & Package Selecting: </p>
                                        <p><b>OPEN PERIOD:</b> The Guests can book a period that starts on the dates you have selected.</p>
                                        <p><b>FIXED PERIOD:</b> The Guests can book just the period you have selected</p>
                                    </div>
                                    <div class="profile-data-area">
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3> Type of Deal: *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="radio" placeholder="" name="Fixed1" id="Open-id" required>
                                                    <label for="Open-id">Open</label>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="radio" placeholder="" name="Fixed1" id="fixed-id" required>
                                                    <label for="fixed-id">Fixed</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Name of your operation</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Deal title *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" name="Package Title" maxlength="50" required>
                                                <p>Max Char 50</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Select Date *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" id="rangeCalendar1" class="rangeCalendar" placeholder="Select date range">
                                                <div id="imageContainer1" class="imageContainer" style="display:none;">
                                                    <canvas id="dateCanvas1" class="dateCanvas"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>End Date *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <input type="date" placeholder="" id="end-date" required>
                                            </div>
                                        </div> -->
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Number of Nights * / Number of Guided/Fishing days: *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="number" id="nights">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="number" placeholder="" id="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Number of Guided/Fishing days: *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <input type="text" placeholder="" id="" required>
                                            </div>
                                        </div> -->










                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Arrival Time *
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="time" placeholder="" id="startdate" required>
                                            </div>
                                        </div> -->
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Departure Time *
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="time" placeholder="" id="startdate" required>
                                            </div>
                                        </div> -->
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Arrival and Department Details / Times *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type Of Room *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="radio-div">
                                                <div class="main-wrapper-radio">
                                                    <div class="radio-button">
                                                        <input class="" type="radio" value="" name="emr" id="radiocheck1" data-value="radio-content1">
                                                        <label class="radio-label" for="radiocheck1">Type of Room Option 1</label>
                                                    </div>
                                                    <div class="radio-button">
                                                        <input class="" type="radio" value="" name="emr" id="radiocheck2" data-value="radio-content2">
                                                        <label class="radio-label" for="radiocheck2">Type of Room Option 2</label>
                                                    </div>
                                                    <div class="radio-button">
                                                        <input class="" type="radio" value="" name="emr" id="radiocheck3" data-value="radio-content3">
                                                        <label class="radio-label" for="radiocheck3">Type of Room Option 3</label>
                                                    </div>
                                                    <div class="radio-button hidden-radio-wrap" id="flexDiv">
                                                        <input class="" type="radio" value="" name="emr" id="radiocheck4">
                                                        <label class="radio-label" for="radiocheck4">Add Your Room Type</label>
                                                    </div>
                                                </div>
                                                <div class="radioContentWrap">
                                                    <div id="radio-content1">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                    <div id="radio-content2">
                                                        <strong>This is the Second item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                    <div id="radio-content3">
                                                        <strong>This is the Third item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- new -->
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Add Your Room Type *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="radio-div flex-column justify-content-center">
                                                <div class="main-wrapper-radio">
                                                    <div class="radio-button">
                                                        <input class="" type="checkbox" value="" name="roomType" id="toggleRadio">
                                                        <label class="radio-label" for="toggleRadio">Add Your Room Type</label>
                                                    </div>
                                                </div>
                                                <div class="radioContentWrap">
                                                    <div id="blockDiv" class="condition-form">
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Type of Deal: *</label>
                                                            <div class="input-div">
                                                                <div class="input-div-check">
                                                                    <input type="radio" placeholder="" name="Fixed1" id="Open-id1">
                                                                    <label for="Open-id1">Open</label>
                                                                </div>
                                                                <div class="input-div-check">
                                                                    <input type="radio" placeholder="" name="Fixed1" id="fixed-id1">
                                                                    <label for="fixed-id1">Fixed</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Name of your operation</label>
                                                            <div class="input-div">
                                                                <input type="text" placeholder="" id="sad">
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="Package-Title">Deal title * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <input type="text" placeholder="" name="Package-Title" maxlength="50">
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Select Date * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <input type="text" id="rangeCalendar2" placeholder="Select date range" name="date-picking" class="flatpickr-input" readonly="readonly">
                                                                <div id="imageContainer2" style="display:none;">
                                                                    <canvas id="dateCanvas2"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Number of Nights */Number of Guided/Fishing days: * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <div class="row row-gap-3 w-100">
                                                                    <div class="col-md-6">
                                                                        <input type="number" name="nighting">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="number" name="fiding">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Arrival and Department Details / Times * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <textarea name="departo"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Select Your Room Type *<button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <select class="form-select" aria-label="Default select example" name="selecta">
                                                                    <option disabled="" selected="">Select a room</option>
                                                                    <option value="1">Double or Twin-Luxury-Cottage suite ( max guest 2)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Room Type Description * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <textarea name="desc-room"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Type of Accomodation * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <select class="form-select" aria-label="Default select example" name="accomfim">
                                                                    <option disabled="" selected="">Select type of accommodation</option>
                                                                    <option value="1">Boat</option>
                                                                    <option value="2">Cabin</option>
                                                                    <option value="3">Camp</option>
                                                                    <option value="3">Castles or Inns or Hotels or Homes or Mountain Huts</option>
                                                                    <option value="3">Chalet</option>
                                                                    <option value="3">Cottage</option>
                                                                    <option value="3">Guesthouse</option>
                                                                    <option value="3">Hotel</option>
                                                                    <option value="3">Houseboat</option>
                                                                    <option value="3">Inn</option>
                                                                    <option value="3">Lodge</option>
                                                                    <option value="3">Ranch</option>
                                                                    <option value="3">Resort</option>
                                                                    <option value="3">Villa</option>
                                                                    <option value="3">Yacht</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Quantity of rooms available for this "Room Type" <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <select class="form-select" aria-label="Default select example" name="quntyaval">
                                                                    <option selected="">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="3">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- new -->

                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Select Your Room Type *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected>Select a room</option>
                                                    <option value="1">Double or Twin-Luxury-Cottage suite ( max guest 2)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Room Type Description *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type of Accomodation *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected>Select type of accommodation</option>
                                                    <option value="1">Boat</option>
                                                    <option value="2">Cabin</option>
                                                    <option value="3">Camp</option>
                                                    <option value="3">Castles or Inns or Hotels or Homes or Mountain Huts</option>
                                                    <option value="3">Chalet</option>
                                                    <option value="3">Cottage</option>
                                                    <option value="3">Guesthouse</option>
                                                    <option value="3">Hotel</option>
                                                    <option value="3">Houseboat</option>
                                                    <option value="3">Inn</option>
                                                    <option value="3">Lodge</option>
                                                    <option value="3">Ranch</option>
                                                    <option value="3">Resort</option>
                                                    <option value="3">Villa</option>
                                                    <option value="3">Yacht</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Quantity</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <p>You are asked to list the quantity of the <span class="italic">Room Type</span> you have choosen you are able to offer for the required period.</p>
                                                <p>Once you enter the quantity, you can go ahead and enter the <b><span class="italic">Number of Guests</span></b> and the <b><span class="italic">Rates</span></b>.</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Quantity of rooms available for this "Room Type</b>"
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="3">4</option>
                                                    <option value="3">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="profile-detail">
                                            <label for=""></label>
                                            <div class="input-div setheading">
                                                <input placeholder="Number of Guests" type="number" min="0">
                                                <input placeholder="Rates" type="number" min="0">
                                            </div>
                                        </div> -->
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Information *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Description *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="The fishing description in your profile will be added to this deal. For any specific information regarding this particular time in the season. ">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Guide Service Information *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title d-block">
                                                    <h3 class="d-flex mb-2">Itinerary
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                    <p>Here you can specify how activities evolve throughout these dates.</p>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea class=""></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <p>Only services selected will be shown in your published deal. You are welcome to further explain specific services in the Good to Know section below.</p>
                                                <p>Please contact us if it miss the service you need included/excluded</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Included</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="services-head">
                                                    <h2>Services</h2>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="wifi-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/wi-fi.png') }}" alt="" srcset="">
                                                        <label for="wifi-idz">Wifi</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Accomodation-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/accomodation.png') }}" alt="" srcset="">
                                                        <label for="Accomodation-idz">Accomodation</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Alcoholic-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/glass-drink.png') }}" alt="" srcset="">
                                                        <label for="Alcoholic-idz">Alcoholic beverages</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="All-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/meals.png') }}" alt="" srcset="">
                                                        <label for="All-idz">All meals</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="activities-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/soft-drinks.png') }}" alt="" srcset="">
                                                        <label for="activities-idz">All soft drinks during activities</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="lessons-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/cook.png') }}" alt="" srcset="">
                                                        <label for="lessons-idz">Cooking lessons</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Additional-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/laundry-machine.png') }}" alt="" srcset="">
                                                        <label for="Additional-idz">Laundry & Additional special services</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Lodging-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/lodging.png') }}" alt="" srcset="">
                                                        <label for="Lodging-idz">Lodging tax</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorised-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="Non-motorised-idz">Lunches</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="meal-upon-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="meal-upon-idz">Meals upon arrival</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="meal-upon-departure-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="meal-upon-departure-idz">Meals upon departure </label>
                                                    </div>
                                                </div>
                                                <!-- <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorisedz-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="Non-motorisedz-id">Non-motorised Water Sports</label>
                                                    </div>
                                                </div> -->
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Phone-idzz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/phone-call.png') }}" alt="" srcset="">
                                                        <label for="Phone-idzz">Phone calls</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Pick-izd">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/transporting.png') }}" alt="" srcset="">
                                                        <label for="Pick-izd">Pick up at Local Airport</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Private-izd">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-rod.png') }}" alt="" srcset="">
                                                        <label for="Private-izd">Private water rod fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flies-izd">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/tackle-box.png') }}" alt="" srcset="">
                                                        <label for="Flies-izd">Tackle and Flies</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Tender-idonez">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="Tender-idonez">Tender boat</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="fuel-idonez">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="fuel-idonez">Fuel Cost</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Transportation-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/truck.png') }}" alt="" srcset="">
                                                        <label for="Transportation-idz">Transportation to and from the fishing</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Insurance-idone">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/protection.png') }}" alt="" srcset="">
                                                        <label for="Insurance-idone">Travel and Medical Insurance</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Excluded</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="services-head">
                                                    <h2>Services</h2>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="accepted-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/cardless.png') }}" alt="" srcset="">
                                                        <label for="accepted-idz">Credit cards are not accepted</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="License-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/license.png') }}" alt="" srcset="">
                                                        <label for="License-id">Fishing License</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flights-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/airplane.png') }}" alt="" srcset="">
                                                        <label for="Flights-id">Flights</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="equipment-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-net.png') }}" alt="" srcset="">
                                                        <label for="equipment-id">Fly fishing equipment</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Gratuitiesf-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/delivery.png') }}" alt="" srcset="">
                                                        <label for="Gratuitiesf-id">Gratuities for Guides & Staff</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Servicef-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/self-service.png') }}" alt="" srcset="">
                                                        <label for="Servicef-id">Guide Service</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Landingf-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/web.png') }}" alt="" srcset="">
                                                        <label for="Landingf-id">Landing Fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Additional-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/laundry-machine.png') }}" alt="" srcset="">
                                                        <label for="Additional-id">Laundry Additional special services</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Lunchf-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="Lunchf-id">Lunches</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="meal-upon-idz99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="meal-upon-idz99">Meals upon arrival</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="meal-upon-departure-idz99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="meal-upon-departure-idz99">Meals upon departure </label>
                                                    </div>
                                                </div>
                                                <!-- <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorised-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="Non-motorised-id">Non-motorised Water Sports</label>
                                                    </div>
                                                </div> -->
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Phonef-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/phone-call.png') }}" alt="" srcset="">
                                                        <label for="Phonef-id">Phone calls</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Local-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/transporting.png') }}" alt="" srcset="">
                                                        <label for="Local-id">Pick up at Local Airport</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Private-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-rod.png') }}" alt="" srcset="">
                                                        <label for="Private-id">Private water rod fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flies-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/tackle-box.png') }}" alt="" srcset="">
                                                        <label for="Flies-id">Tackle and Flies</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Tender-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="Tender-id">Tender boat</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="fuel-idonez9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="fuel-idonez9">Fuel Cost</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Transportation-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/truck.png') }}" alt="" srcset="">
                                                        <label for="Transportation-id">Transportation to and from the fishing</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Insurance-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/protection.png') }}" alt="" srcset="">
                                                        <label for="Insurance-id">Travel and Medical Insurance</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Extra</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="services-head">
                                                    <h2>Activities</h2>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="horse-back-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/horse-riding.png') }}" alt="" srcset="">
                                                        <label for="horse-back-idz">Horseback riding</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="water-rafting-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/rafting.png') }}" alt="" srcset="">
                                                        <label for="water-rafting-id">White water rafting</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="hiking-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/hiking.png') }}" alt="" srcset="">
                                                        <label for="hiking-idz">Hiking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="biking-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/mountain-biking.png') }}" alt="" srcset="">
                                                        <label for="biking-id">Biking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="kayaking-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/kayak.png') }}" alt="" srcset="">
                                                        <label for="kayaking-idz">Kayaking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="bird-watching-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/birding.png') }}" alt="" srcset="">
                                                        <label for="bird-watching-id">Birdwatching</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="local-ride-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="local-ride-idz">Local rides</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="golf-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/golf.png') }}" alt="" srcset="">
                                                        <label for="golf-id">Golf</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="SPA-idz">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/body-spa.png') }}" alt="" srcset="">
                                                        <label for="SPA-idz">SPA</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Recommended gear
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Good to know
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Expected fish types
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <p>please provide what type of fish will be available in that particular period</p>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                            <!-- <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Browntrout-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <label for="Browntrout-id">Brown trout</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Rainbow-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <label for="Rainbow-id">Rainbow trout</label>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Admin Only</h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                            <div class="input-div">
                                                <h4>Is it a featured offered ?
                                                </h4>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="2">Yes</option>
                                                    <option value="3">No</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="form-footer">
                                            <button type="submit" class="btn-1" id="buttonNumberOne">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step1-child in-active-option parentclass" id="step-1-child" data-value="step-child-1">
                                <div class="booking-chart-area">
                                    <div class="payment-det-title">
                                        <div class="d-flex justify-content-center text-center align-items-center">
                                            <h2>Add Your Room Type Including <br> a Different Accommodation</h2>
                                            <!-- <button class="skip-btn d-block" type="button">Skip</button> -->
                                        </div>
                                    </div>
                                    <!-- <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>Date & Duration</h3>
                                            <p>Fields mark with an asterisk(*) are required</p>
                                        </div>
                                    </div>
                                    <div class="bg-yellowset chrt-hd-area d-grid gap-2 pt-3">
                                        <p>You can decide to sell this Offer & Package Selecting: </p>
                                        <p><b>OPEN PERIOD:</b> The Guests can book a period that starts on the dates you have selected.</p>
                                        <p><b>FIXED PERIOD:</b> The Guests can book just the period you have selected</p>
                                    </div> -->

                                    <div class="profile-data-area" id="profile-data-area">
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3> Type of Deal: *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="radio" placeholder="" name="Fixed" id="Open-id-second" required class="no-shad">
                                                    <label for="Open-id-second">Open</label>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="radio" placeholder="" name="Fixed" id="fixed-id-second" required>
                                                    <label for="fixed-id-second">Fixed</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Name of your operation</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Deal title *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" name="Package Title" maxlength="50" required>
                                                <p>Max Char 50</p>
                                            </div>
                                        </div> -->

                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Select Date *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <p class="d-edit-para">Click on The Field to Edit The Date.</p>
                                                <input type="text" id="rangeCalendar2" class="rangeCalendar" placeholder="Select date range">
                                                <div id="imageContainer2" class="imageContainer" style="display:none;">
                                                    <canvas id="dateCanvas2" class="dateCanvas"></canvas>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Number of Nights * / Number of Guided/Fishing days: *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="number" id="nights">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="" id="parentThree" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Number of Guided/Fishing days: *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <input type="text" placeholder="" id="" required>
                                            </div>
                                        </div> -->










                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Arrival Time *
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="time" placeholder="" id="startdate" required>
                                            </div>
                                        </div> -->
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Departure Time *
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="time" placeholder="" id="startdate" required>
                                            </div>
                                        </div> -->
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Arrival and Department Details / Times *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type Of Room *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="radio-div">
                                                <div class="main-wrapper-radio">
                                                    <div class="radio-button">
                                                        <input class="" type="radio" name="emr-second" id="radiocheck1-second" data-value="radio-content4">
                                                        <label class="radio-label" for="radiocheck1-second">Type of Room Option 1</label>
                                                    </div>
                                                    <div class="radio-button">
                                                        <input class="" type="radio" name="emr-second" id="radiocheck2-second" data-value="radio-content5">
                                                        <label class="radio-label" for="radiocheck2-second">Type of Room Option 2</label>
                                                    </div>
                                                    <div class="radio-button">
                                                        <input class="" type="radio" name="emr-second" id="radiocheck3-second" data-value="radio-content6">
                                                        <label class="radio-label" for="radiocheck3-second">Type of Room Option 3</label>
                                                    </div>
                                                    <div class="radio-button hidden-radio-wrap" id="flexDiv">
                                                        <input class="" type="radio" name="emr-second" id="radiocheck4-second">
                                                        <label class="radio-label" for="radiocheck4-second">Add Your Room Type</label>
                                                    </div>
                                                </div>
                                                <div class="radioContentWrap">
                                                    <div id="radio-content4">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                    <div id="radio-content5">
                                                        <strong>This is the Second item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                    <div id="radio-content6">
                                                        <strong>This is the Third item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- new -->
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Add Your Room Type *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="radio-div flex-column justify-content-center">
                                                <div class="main-wrapper-radio">
                                                    <div class="radio-button">
                                                        <input class="" type="checkbox" value="" name="roomType" id="toggleRadio">
                                                        <label class="radio-label" for="toggleRadio">Add Your Room Type</label>
                                                    </div>
                                                </div>
                                                <div class="radioContentWrap">
                                                    <div id="blockDiv" class="condition-form">
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Type of Deal: *</label>
                                                            <div class="input-div">
                                                                <div class="input-div-check">
                                                                    <input type="radio" placeholder="" name="Fixed1" id="Open-id1">
                                                                    <label for="Open-id1">Open</label>
                                                                </div>
                                                                <div class="input-div-check">
                                                                    <input type="radio" placeholder="" name="Fixed1" id="fixed-id1">
                                                                    <label for="fixed-id1">Fixed</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Name of your operation</label>
                                                            <div class="input-div">
                                                                <input type="text" placeholder="" id="sad">
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="Package-Title">Deal title * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <input type="text" placeholder="" name="Package-Title" maxlength="50">
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Select Date * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <input type="text" id="rangeCalendar2" placeholder="Select date range" name="date-picking" class="flatpickr-input" readonly="readonly">
                                                                <div id="imageContainer2" style="display:none;">
                                                                    <canvas id="dateCanvas2"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Number of Nights */Number of Guided/Fishing days: * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <div class="row row-gap-3 w-100">
                                                                    <div class="col-md-6">
                                                                        <input type="number" name="nighting">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="number" name="fiding">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Arrival and Department Details / Times * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <textarea name="departo"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Select Your Room Type *<button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <select class="form-select" aria-label="Default select example" name="selecta">
                                                                    <option disabled="" selected="">Select a room</option>
                                                                    <option value="1">Double or Twin-Luxury-Cottage suite ( max guest 2)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Room Type Description * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <textarea name="desc-room"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Type of Accomodation * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <select class="form-select" aria-label="Default select example" name="accomfim">
                                                                    <option disabled="" selected="">Select type of accommodation</option>
                                                                    <option value="1">Boat</option>
                                                                    <option value="2">Cabin</option>
                                                                    <option value="3">Camp</option>
                                                                    <option value="3">Castles or Inns or Hotels or Homes or Mountain Huts</option>
                                                                    <option value="3">Chalet</option>
                                                                    <option value="3">Cottage</option>
                                                                    <option value="3">Guesthouse</option>
                                                                    <option value="3">Hotel</option>
                                                                    <option value="3">Houseboat</option>
                                                                    <option value="3">Inn</option>
                                                                    <option value="3">Lodge</option>
                                                                    <option value="3">Ranch</option>
                                                                    <option value="3">Resort</option>
                                                                    <option value="3">Villa</option>
                                                                    <option value="3">Yacht</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Quantity of rooms available for this "Room Type" <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <select class="form-select" aria-label="Default select example" name="quntyaval">
                                                                    <option selected="">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="3">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- new -->

                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Select Your Room Type *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected>Select a room</option>
                                                    <option value="1">Double or Twin-Luxury-Cottage suite ( max guest 2)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Room Type Description *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type of Accomodation *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected>Select type of accommodation</option>
                                                    <option value="1">Boat</option>
                                                    <option value="2">Cabin</option>
                                                    <option value="3">Camp</option>
                                                    <option value="3">Castles or Inns or Hotels or Homes or Mountain Huts</option>
                                                    <option value="3">Chalet</option>
                                                    <option value="3">Cottage</option>
                                                    <option value="3">Guesthouse</option>
                                                    <option value="3">Hotel</option>
                                                    <option value="3">Houseboat</option>
                                                    <option value="3">Inn</option>
                                                    <option value="3">Lodge</option>
                                                    <option value="3">Ranch</option>
                                                    <option value="3">Resort</option>
                                                    <option value="3">Villa</option>
                                                    <option value="3">Yacht</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Quantity</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <p>You are asked to list the quantity of the <span class="italic">Room Type</span> you have choosen you are able to offer for the required period.</p>
                                                <p>Once you enter the quantity, you can go ahead and enter the <b><span class="italic">Number of Guests</span></b> and the <b><span class="italic">Rates</span></b>.</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Quantity of rooms available for this "Room Type</b>"
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="3">4</option>
                                                    <option value="3">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="profile-detail">
                                            <label for=""></label>
                                            <div class="input-div setheading">
                                                <input placeholder="Number of Guests" type="number" min="0">
                                                <input placeholder="Rates" type="number" min="0">
                                            </div>
                                        </div> -->
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Information *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Description *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="The fishing description in your profile will be added to this deal. For any specific information regarding this particular time in the season. ">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Guide Service Information *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title d-block">
                                                    <h3 class="d-flex mb-2">Itinerary
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                    <p>Here you can specify how activities evolve throughout these dates.</p>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea class=""></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <p>Only services selected will be shown in your published deal. You are welcome to further explain specific services in the Good to Know section below.</p>
                                                <p>Please contact us if it miss the service you need included/excluded</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Included</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="services-head">
                                                    <h2>Services</h2>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="wifi-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/wi-fi.png') }}" alt="" srcset="">
                                                        <label for="wifi-idz-second">Wifi</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Accomodation-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/accomodation.png') }}" alt="" srcset="">
                                                        <label for="Accomodation-idz-second">Accomodation</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Alcoholic-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/glass-drink.png') }}" alt="" srcset="">
                                                        <label for="Alcoholic-idz-second">Alcoholic beverages</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="All-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/meals.png') }}" alt="" srcset="">
                                                        <label for="All-idz-second">All meals</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="activities-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/soft-drinks.png') }}" alt="" srcset="">
                                                        <label for="activities-idz-second">All soft drinks during activities</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="lessons-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/cook.png') }}" alt="" srcset="">
                                                        <label for="lessons-idz-second">Cooking lessons</label>
                                                    </div>
                                                </div>

                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Additional-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/laundry-machine.png') }}" alt="" srcset="">
                                                        <label for="Additional-idz-second">Laundry & Additional special services</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Lodging-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/lodging.png') }}" alt="" srcset="">
                                                        <label for="Lodging-idz-second">Lodging tax</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorised-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="Non-motorised-idz-second">Lunches</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="mealf-upon-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="mealf-upon-idz-second">Meals upon arrival</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="mealf-upon-departure-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="mealf-upon-departure-idz-second">Meals upon departure </label>
                                                    </div>
                                                </div>
                                                <!-- <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorisedz-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="Non-motorisedz-id-second">Non-motorised Water Sports</label>
                                                    </div>
                                                </div> -->
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Phone-idzz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/phone-call.png') }}" alt="" srcset="">
                                                        <label for="Phone-idzz-second">Phone calls</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Pick-izd-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/transporting.png') }}" alt="" srcset="">
                                                        <label for="Pick-izd-second">Pick up at Local Airport</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Private-izd-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-rod.png') }}" alt="" srcset="">
                                                        <label for="Private-izd-second">Private water rod fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flies-izd-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/tackle-box.png') }}" alt="" srcset="">
                                                        <label for="Flies-izd-second">Tackle and Flies</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Tender-idonez-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="Tender-idonez-second">Tender boat</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="fuel-idonez-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="fuel-idonez-second">Fuel Cost</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Transportation-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/truck.png') }}" alt="" srcset="">
                                                        <label for="Transportation-idz-second">Transportation to and from the fishing</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Insurance-idone-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/protection.png') }}" alt="" srcset="">
                                                        <label for="Insurance-idone-second">Travel and Medical Insurance</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Excluded</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="services-head">
                                                    <h2>Services</h2>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="accepted-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/cardless.png') }}" alt="" srcset="">
                                                        <label for="accepted-idz-second">Credit cards are not accepted</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="License-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/license.png') }}" alt="" srcset="">
                                                        <label for="License-id-second">Fishing License</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flights-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/airplane.png') }}" alt="" srcset="">
                                                        <label for="Flights-id-second">Flights</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="equipment-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-net.png') }}" alt="" srcset="">
                                                        <label for="equipment-id-second">Fly fishing equipment</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Gratuitiesf-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/delivery.png') }}" alt="" srcset="">
                                                        <label for="Gratuitiesf-id-second">Gratuities for Guides & Staff</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Servicef-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/self-service.png') }}" alt="" srcset="">
                                                        <label for="Servicef-id-second">Guide Service</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Landingf-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/web.png') }}" alt="" srcset="">
                                                        <label for="Landingf-id-second">Landing Fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Additional-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/laundry-machine.png') }}" alt="" srcset="">
                                                        <label for="Additional-id-second">Laundry Additional special services</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Lunchf-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="Lunchf-id-second">Lunches</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="meal-upon-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="meal-upon-idz-second">Meals upon arrival</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="meal-upon-departure-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="meal-upon-departure-idz-second">Meals upon departure </label>
                                                    </div>
                                                </div>
                                                <!-- <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorised-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="Non-motorised-id-second">Non-motorised Water Sports</label>
                                                    </div>
                                                </div> -->
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Phonef-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/phone-call.png') }}" alt="" srcset="">
                                                        <label for="Phonef-id-second">Phone calls</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Local-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/transporting.png') }}" alt="" srcset="">
                                                        <label for="Local-id-second">Pick up at Local Airport</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Private-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-rod.png') }}" alt="" srcset="">
                                                        <label for="Private-id-second">Private water rod fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flies-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/tackle-box.png') }}" alt="" srcset="">
                                                        <label for="Flies-id-second">Tackle and Flies</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Tender-idonezf-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="Tender-idonezf-second">Tender boat</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="fuel-idonezf-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="fuel-idonezf-second">Fuel Cost</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Transportation-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/truck.png') }}" alt="" srcset="">
                                                        <label for="Transportation-id-second">Transportation to and from the fishing</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Insurance-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/protection.png') }}" alt="" srcset="">
                                                        <label for="Insurance-id-second">Travel and Medical Insurance</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Extra</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="services-head">
                                                    <h2>Activities</h2>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="horse-back-idzsecond">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/horse-riding.png') }}" alt="" srcset="">
                                                        <label for="horse-back-idzsecond">Horseback riding</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="water-rafting-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/rafting.png') }}" alt="" srcset="">
                                                        <label for="water-rafting-id-second">White water rafting</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="hiking-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/hiking.png') }}" alt="" srcset="">
                                                        <label for="hiking-idz-second">Hiking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="biking-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/mountain-biking.png') }}" alt="" srcset="">
                                                        <label for="biking-id-second">Biking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="kayaking-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/kayak.png') }}" alt="" srcset="">
                                                        <label for="kayaking-idz-second">Kayaking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="bird-watching-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/birding.png') }}" alt="" srcset="">
                                                        <label for="bird-watching-id-second">Birdwatching</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="local-ride-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="local-ride-idz-second">Local rides</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="golf-id-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/golf.png') }}" alt="" srcset="">
                                                        <label for="golf-id-second">Golf</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="SPA-idz-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/body-spa.png') }}" alt="" srcset="">
                                                        <label for="SPA-idz-second">SPA</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Recommended gear
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Good to know
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Expected fish types
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <p>please provide what type of fish will be available in that particular period</p>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                            <!-- <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Browntrout-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <label for="Browntrout-id">Brown trout</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Rainbow-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <label for="Rainbow-id">Rainbow trout</label>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Admin Only</h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                            <div class="input-div">
                                                <h4>Is it a featured offered ?
                                                </h4>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="2">Yes</option>
                                                    <option value="3">No</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="form-footer">
                                            <button type="submit" class="btn-1">Continue to rates</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step2 in-active-option parentclass" id="step-2" data-value="stepForm2">
                                <div class="booking-chart-area">
                                    <div class="payment-det-title mb-5">
                                        <h2>Create Your Package Deal <span class="stepIndicator">Step 2/2</span> </h2>
                                    </div>
                                    <!-- <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>Pricing</h3>
                                            <p>Fields mark with an asterisk(*) are required</p>
                                        </div>
                                    </div>
                                    <div class="bg-yellowset chrt-hd-area d-grid gap-2 pt-3">
                                        <p>You can decide to sell this Offer & Package Selecting: </p>
                                        <p><b>OPEN PERIOD:</b> The Guests can book a period that starts on the dates you have selected.</p>
                                        <p><b>FIXED PERIOD:</b> The Guests can book just the period you have selected</p>
                                    </div> -->
                                    <div class="profile-data-area">
                                        <div class="profile-detail">
                                            <label for="" class="deal-border">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="row rates-wrapper">
                                                <div class="col-md-6 h-mobile">
                                                    <h3 class="mb-0">Daily Rates</h3>
                                                </div>
                                                <div class="col-md-6 h-mobile">
                                                    <h3 class="mb-0">Package Rate</h3>
                                                </div>
                                                <!--<div class="col-12">-->
                                                <!--<div class="rate-inp">-->
                                                <!--            <label for="">Number of nights</label>-->
                                                <!--            <input type="tel" id="nights">-->
                                                <!--        </div>-->
                                                <!--</div>-->
                                                <div class="price-box">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-lg-5 col-12">
                                                                <div>
                                                                    <div class="rate-inp" id="parentsTwo">
                                                                        <label for="">Price per person Double <br> occupancy / Shared Guide* <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                                        <input type="tel" id="dailyRateDoubleShared">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 text-center">
                                                                <h5>OR</h5>
                                                            </div>
                                                            <div class="col-lg-5 col-12">
                                                                <div>
                                                                    <div class="rate-inp">
                                                                        <label for="">Price per person Double <br> occupancy / Shared Guide* <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                                        <input type="tel" id="packageRateDoubleShared">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="" class="border-0">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="row rates-wrapper">
                                                <div class="col-12">
                                                    <p class="mb-4">You can apply a diffrent price per person id the Guests are not booking The maximum capacity of the Room <strong>if not</strong> the guests will be charged the price per person of full occupancy</p>
                                                    <p>You can also indicate the price of the <strong>single guide</strong> (optional)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="" class="border-0">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="row rates-wrapper price-box">
                                                <div class="col-lg-5 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Price Single Occupancy / Shared Guide <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel" id="dailyRateSharedGuide">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 text-center">
                                                    <h5>OR</h5>
                                                </div>
                                                <div class="col-lg-5 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Price Single Occupancy / Shared Guide <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel" id="packageRateSharedGuide">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="" class="border-0">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="row rates-wrapper price-box">
                                                <div class="col-lg-5 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Price Single Occupancy / Single Guide <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel " id="dailyRateSingleGuide">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 text-center">
                                                    <h5>OR</h5>
                                                </div>
                                                <div class="col-lg-5 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Price Single Occupancy / Single Guide <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel" id="packageRateSingleGuide">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="" class="border-0">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="row rates-wrapper price-box">
                                                <div class="col-lg-5 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Price Non fisherman per person <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel" id="dailyRateNonFisherman">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 text-center">
                                                    <h5>OR</h5>
                                                </div>
                                                <div class="col-lg-5 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Price Non fisherman per person <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel" id="packageRateNonFisherman">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="" class="border-0">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="row rates-wrapper price-box">
                                                <div class="col-lg-5 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Price for childern (Non adult) per person <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel" id="dailyRateNonAdult">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 text-center">
                                                    <h5>OR</h5>
                                                </div>
                                                <div class="col-lg-5 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Price for childern (Non adult) per person <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel" id="packageRateNonAdult">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="" class="border-0">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="row rates-wrapper price-box">
                                                <div class="col-lg-6 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Percentage of Discount (without the symbol %)* <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel" id="discountPercentage">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="" class="border-0">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="row rates-wrapper ">
                                                <div class="col-12">
                                                    <h3 class="my-5">Price</h3>
                                                    <p>Based of the Number of Nights/Guided days and prices entered , this is the standard price per person (Full Occupancy) as it well be promoted in the web site</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="" class="border-0 price-border">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="row rates-wrapper price-box mb-0">
                                                <div class="col-lg-6 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Double occupancy Full price in $ per person (USD)* <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel" id="doubleOccupancyFullPrice" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Double occupancy Discounted price per person (USD)* <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="text" id="doubleOccupancyDiscountedPrice" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-6 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Single occupancy Full price in $ per person (USD)* <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="tel" id="singleOccupancyFullPrice" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div>
                                                        <div class="rate-inp">
                                                            <label for="">Single occupancy Discounted price per person (USD)* <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum"><i class="fa-solid fa-circle-question"></i></button></label>
                                                            <input type="text" id="singleOccupancyDiscountedPrice" readonly>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="form-footer mt-4">
                                            <button type="button" class="btn-2">Back</button>
                                            <button type="button" class="stepping-4">Review Full Deal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step3 in-active-option parentclass" id="step-3" data-value="stepForm3">
                                <div class="booking-chart-area">
                                    <div class="payment-det-title">
                                        <h2>Create Your Package Deal <span class="stepIndicator">Step 1/2</span> </h2>
                                    </div>
                                    <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>Date & Duration</h3>
                                            <p>Fields mark with an asterisk(*) are required</p>
                                        </div>
                                    </div>
                                    <div class="bg-yellowset chrt-hd-area d-grid gap-2 pt-3">
                                        <p>You can decide to sell this Offer & Package Selecting: </p>
                                        <p><b>OPEN PERIOD:</b> The Guests can book a period that starts on the dates you have selected.</p>
                                        <p><b>FIXED PERIOD:</b> The Guests can book just the period you have selected</p>
                                    </div>
                                    <div class="profile-data-area">
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3> Type of Deal: *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="radio" placeholder="" name="Fixed3" id="Open-id3" required>
                                                    <label for="Open-id3">Open</label>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="radio" placeholder="" name="Fixed3" id="fixed-id3" required>
                                                    <label for="fixed-id3">Fixed</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Name of your operation</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Deal title *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" name="Package Title" maxlength="50" required>
                                                <p>Max Char 50</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Select Date *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" id="rangeCalendar3" placeholder="Select date range" name="date-picking" class="flatpickr-input" readonly="readonly">
                                                <div id="imageContainer3" style="display:none;">
                                                    <canvas id="dateCanvas3"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Number of Guided/Fishing days: *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="number" placeholder="" id="fishingDays" required>
                                            </div>
                                        </div>
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Number of Guided/Fishing days: *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <input type="text" placeholder="" id="" required>
                                            </div>
                                        </div> -->










                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Arrival Time *
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="time" placeholder="" id="startdate" required>
                                            </div>
                                        </div> -->
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Departure Time *
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="time" placeholder="" id="startdate" required>
                                            </div>
                                        </div> -->
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Arrival and Department Details / Times *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type Of Room *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="radio-div">
                                                <div class="main-wrapper-radio">
                                                    <div class="radio-button">
                                                        <input class="" type="radio" name="emr9" id="radiocheck19" data-value="radio-content7">
                                                        <label class="radio-label" for="radiocheck19">Type of Room Option 1</label>
                                                    </div>
                                                    <div class="radio-button">
                                                        <input class="" type="radio" name="emr9" id="radiocheck29" data-value="radio-content8">
                                                        <label class="radio-label" for="radiocheck29">Type of Room Option 2</label>
                                                    </div>
                                                    <div class="radio-button">
                                                        <input class="" type="radio" name="emr9" id="radiocheck39" data-value="radio-content9">
                                                        <label class="radio-label" for="radiocheck39">Type of Room Option 3</label>
                                                    </div>
                                                </div>
                                                <div class="radioContentWrap">
                                                    <div id="radio-content7">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                    <div id="radio-content8">
                                                        <strong>This is the Second item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                    <div id="radio-content9">
                                                        <strong>This is the Third item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- new -->
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Add Your Room Type *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="radio-div flex-column justify-content-center">
                                                <div class="main-wrapper-radio">
                                                    <div class="radio-button">
                                                        <input class="" type="checkbox" value="" name="roomType" id="toggleRadio">
                                                        <label class="radio-label" for="toggleRadio">Add Your Room Type</label>
                                                    </div>
                                                </div>
                                                <div class="radioContentWrap">
                                                    <div id="blockDiv" class="condition-form">
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Type of Deal: *</label>
                                                            <div class="input-div">
                                                                <div class="input-div-check">
                                                                    <input type="radio" placeholder="" name="Fixed1" id="Open-id1">
                                                                    <label for="Open-id1">Open</label>
                                                                </div>
                                                                <div class="input-div-check">
                                                                    <input type="radio" placeholder="" name="Fixed1" id="fixed-id1">
                                                                    <label for="fixed-id1">Fixed</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Name of your operation</label>
                                                            <div class="input-div">
                                                                <input type="text" placeholder="" id="sad">
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="Package-Title">Deal title * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <input type="text" placeholder="" name="Package-Title" maxlength="50">
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Select Date * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <input type="text" id="rangeCalendar2" placeholder="Select date range" name="date-picking" class="flatpickr-input" readonly="readonly">
                                                                <div id="imageContainer2" style="display:none;">
                                                                    <canvas id="dateCanvas2"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Number of Nights */Number of Guided/Fishing days: * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <div class="row row-gap-3 w-100">
                                                                    <div class="col-md-6">
                                                                        <input type="number" name="nighting">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="number" name="fiding">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Arrival and Department Details / Times * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <textarea name="departo"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Select Your Room Type *<button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <select class="form-select" aria-label="Default select example" name="selecta">
                                                                    <option disabled="" selected="">Select a room</option>
                                                                    <option value="1">Double or Twin-Luxury-Cottage suite ( max guest 2)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Room Type Description * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <textarea name="desc-room"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Type of Accomodation * <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <select class="form-select" aria-label="Default select example" name="accomfim">
                                                                    <option disabled="" selected="">Select type of accommodation</option>
                                                                    <option value="1">Boat</option>
                                                                    <option value="2">Cabin</option>
                                                                    <option value="3">Camp</option>
                                                                    <option value="3">Castles or Inns or Hotels or Homes or Mountain Huts</option>
                                                                    <option value="3">Chalet</option>
                                                                    <option value="3">Cottage</option>
                                                                    <option value="3">Guesthouse</option>
                                                                    <option value="3">Hotel</option>
                                                                    <option value="3">Houseboat</option>
                                                                    <option value="3">Inn</option>
                                                                    <option value="3">Lodge</option>
                                                                    <option value="3">Ranch</option>
                                                                    <option value="3">Resort</option>
                                                                    <option value="3">Villa</option>
                                                                    <option value="3">Yacht</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="block-div-content d-flex mb-3">
                                                            <label for="">Quantity of rooms available for this "Room Type" <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" aria-label="lorem ipsum" data-bs-original-title="lorem ipsum">
                                                                    <i class="fa-solid fa-circle-question"></i>
                                                                </button></label>
                                                            <div class="input-div">
                                                                <select class="form-select" aria-label="Default select example" name="quntyaval">
                                                                    <option selected="">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="3">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- new -->

                                        <!-- close this code at 3/6/2025 -->

                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Select Your Room Type *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected>Select a room</option>
                                                    <option value="1">Double or Twin-Luxury-Cottage suite ( max guest 2)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Room Type Description *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type of Accomodation *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected>Select type of accommodation</option>
                                                    <option value="1">Boat</option>
                                                    <option value="2">Cabin</option>
                                                    <option value="3">Camp</option>
                                                    <option value="3">Castles or Inns or Hotels or Homes or Mountain Huts</option>
                                                    <option value="3">Chalet</option>
                                                    <option value="3">Cottage</option>
                                                    <option value="3">Guesthouse</option>
                                                    <option value="3">Hotel</option>
                                                    <option value="3">Houseboat</option>
                                                    <option value="3">Inn</option>
                                                    <option value="3">Lodge</option>
                                                    <option value="3">Ranch</option>
                                                    <option value="3">Resort</option>
                                                    <option value="3">Villa</option>
                                                    <option value="3">Yacht</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Quantity</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <p>You are asked to list the quantity of the <span class="italic">Room Type</span> you have choosen you are able to offer for the required period.</p>
                                                <p>Once you enter the quantity, you can go ahead and enter the <b><span class="italic">Number of Guests</span></b> and the <b><span class="italic">Rates</span></b>.</p>
                                            </div>
                                        </div> -->
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Quantity of rooms available for this "Room Type</b>"
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="3">4</option>
                                                    <option value="3">5</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <!-- <div class="profile-detail">
                                            <label for=""></label>
                                            <div class="input-div setheading">
                                                <input placeholder="Number of Guests" type="number" min="0">
                                                <input placeholder="Rates" type="number" min="0">
                                            </div>
                                        </div> -->

                                        <!-- close this code at 3/6/2025 -->
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Information *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Description *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="The fishing description in your profile will be added to this deal. For any specific information regarding this particular time in the season. ">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Guide Service Information *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title d-block">
                                                    <h3 class="d-flex mb-2">Itinerary
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                    <p>Here you can specify how activities evolve throughout these dates.</p>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea class=""></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <p>Only services selected will be shown in your published deal. You are welcome to further explain specific services in the Good to Know section below.</p>
                                                <p>Please contact us if it miss the service you need included/excluded</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Included</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="services-head">
                                                    <h2>Services</h2>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="wi-fi-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/wi-fi.png') }}" alt="" srcset="">
                                                        <label for="wi-fi-idz9">Wifi</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Accomodation-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/accomodation.png') }}" alt="" srcset="">
                                                        <label for="Accomodation-idz9">Accomodation</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Alcoholic-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/glass-drink.png') }}" alt="" srcset="">
                                                        <label for="Alcoholic-idz9">Alcoholic beverages</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="All-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/meals.png') }}" alt="" srcset="">
                                                        <label for="All-idz9">All meals</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="activities-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/soft-drinks.png') }}" alt="" srcset="">
                                                        <label for="activities-idz9">All soft drinks during activities</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="lessons-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/cook.png') }}" alt="" srcset="">
                                                        <label for="lessons-idz9">Cooking lessons</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Additional-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/laundry-machine.png') }}" alt="" srcset="">
                                                        <label for="Additional-idz9">Laundry & Additional special services</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Lodging-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/lodging.png') }}" alt="" srcset="">
                                                        <label for="Lodging-idz9">Lodging tax</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorised-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="Non-motorised-idz9">Lunches</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="meal-upon-arrival-idzthird99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="meal-upon-arrival-idzthird99">Meals upon arrival</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="meal-upon-departure-idzthird99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="meal-upon-departure-idzthird99">Meals upon departure</label>
                                                    </div>
                                                </div>
                                                <!-- <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorisedz-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="Non-motorisedz-id9">Non-motorised Water Sports</label>
                                                    </div>
                                                </div> -->
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Phone-idzz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/phone-call.png') }}" alt="" srcset="">
                                                        <label for="Phone-idzz9">Phone calls</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Pick-izd9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/transporting.png') }}" alt="" srcset="">
                                                        <label for="Pick-izd9">Pick up at Local Airport</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Private-izd9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-rod.png') }}" alt="" srcset="">
                                                        <label for="Private-izd9">Private water rod fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flies-izd9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/tackle-box.png') }}" alt="" srcset="">
                                                        <label for="Flies-izd9">Tackle and Flies</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Tender-idonez9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="Tender-idonez9">Tender boat</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="fuell-idonez9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="fuell-idonez9">Fuel Cost</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Transportation-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/truck.png') }}" alt="" srcset="">
                                                        <label for="Transportation-idz9">Transportation to and from the fishing</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Insurance-idone9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/protection.png') }}" alt="" srcset="">
                                                        <label for="Insurance-idone9">Travel and Medical Insurance</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Excluded</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="services-head">
                                                    <h2>Services</h2>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="accepted-idz9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/cardless.png') }}" alt="" srcset="">
                                                        <label for="accepted-idz9">Credit cards are not accepted</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="License-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/license.png') }}" alt="" srcset="">
                                                        <label for="License-id9">Fishing License</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flights-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/airplane.png') }}" alt="" srcset="">
                                                        <label for="Flights-id9">Flights</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="equipment-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-net.png') }}" alt="" srcset="">
                                                        <label for="equipment-id9">Fly fishing equipment</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Gratuitiesf-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/delivery.png') }}" alt="" srcset="">
                                                        <label for="Gratuitiesf-id9">Gratuities for Guides & Staff</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Servicef-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/self-service.png') }}" alt="" srcset="">
                                                        <label for="Servicef-id9">Guide Service</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Landingf-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/web.png') }}" alt="" srcset="">
                                                        <label for="Landingf-id9">Landing Fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Additional-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/laundry-machine.png') }}" alt="" srcset="">
                                                        <label for="Additional-id9">Laundry Additional special services</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Lunchf-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="Lunchf-id9">Lunches</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="meal-upon-arrival-idzthird">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="meal-upon-arrival-idzthird">Meals upon arrival</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="meal-upon-departure-idzthird">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="meal-upon-departure-idzthird">Meals upon departure</label>
                                                    </div>
                                                </div>
                                                <!-- <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorised-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="Non-motorised-id9">Non-motorised Water Sports</label>
                                                    </div>
                                                </div> -->
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Phonef-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/phone-call.png') }}" alt="" srcset="">
                                                        <label for="Phonef-id9">Phone calls</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Local-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/transporting.png') }}" alt="" srcset="">
                                                        <label for="Local-id9">Pick up at Local Airport</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Private-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-rod.png') }}" alt="" srcset="">
                                                        <label for="Private-id9">Private water rod fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flies-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/tackle-box.png') }}" alt="" srcset="">
                                                        <label for="Flies-id9">Tackle and Flies</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Tender-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="Tender-id9">Tender boat</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="fuell-idthreez9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="fuell-idthreez9">Fuel Cost</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Transportation-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/truck.png') }}" alt="" srcset="">
                                                        <label for="Transportation-id9">Transportation to and from the fishing</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Insurance-id9">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/protection.png') }}" alt="" srcset="">
                                                        <label for="Insurance-id9">Travel and Medical Insurance</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Extra</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="services-head">
                                                    <h2>Activities</h2>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="horse-back-idzsecond99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/horse-riding.png') }}" alt="" srcset="">
                                                        <label for="horse-back-idzsecond99">Horseback riding</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="water-rafting-id-second99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/rafting.png') }}" alt="" srcset="">
                                                        <label for="water-rafting-id-second99">White water rafting</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="hiking-idz-second99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/hiking.png') }}" alt="" srcset="">
                                                        <label for="hiking-idz-second99">Hiking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="biking-id-second99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/mountain-biking.png') }}" alt="" srcset="">
                                                        <label for="biking-id-second99">Biking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="kayaking-idz-second99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/kayak.png') }}" alt="" srcset="">
                                                        <label for="kayaking-idz-second99">Kayaking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="bird-watching-id-second99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/birding.png') }}" alt="" srcset="">
                                                        <label for="bird-watching-id-second99">Birdwatching</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="local-ride-idz-second99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="local-ride-idz-second99">Local rides</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="golf-id-second99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/golf.png') }}" alt="" srcset="">
                                                        <label for="golf-id-second99">Golf</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="SPA-idz-second99">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/body-spa.png') }}" alt="" srcset="">
                                                        <label for="SPA-idz-second99">SPA</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Recommended gear
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Good to know
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Expected fish types
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <p>please provide what type of fish will be available in that particular period</p>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                            <!-- <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Browntrout-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <label for="Browntrout-id">Brown trout</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Rainbow-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <label for="Rainbow-id">Rainbow trout</label>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Admin Only</h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                            <div class="input-div">
                                                <h4>Is it a featured offered ?
                                                </h4>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="2">Yes</option>
                                                    <option value="3">No</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="form-footer">
                                            <button type="submit" class="btn-1">Continue To Rates</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="step3-child in-active-option parentclass" id="step-3-child" data-value="step-child-3">
                                <div class="booking-chart-area">
                                    <div class="payment-det-title">
                                        <h2>Create Your Package Deal <span class="stepIndicator">Step 1/2</span> </h2>
                                    </div>
                                    <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>Date & Duration</h3>
                                            <p>Fields mark with an asterisk(*) are required</p>
                                        </div>
                                    </div>
                                    <div class="bg-yellowset chrt-hd-area d-grid gap-2 pt-3">
                                        <p>You can decide to sell this Offer & Package Selecting: </p>
                                        <p><b>OPEN PERIOD:</b> The Guests can book a period that starts on the dates you have selected.</p>
                                        <p><b>FIXED PERIOD:</b> The Guests can book just the period you have selected</p>
                                    </div>
                                    <div class="d-flex marg30">
                                        <button class="skip-btn d-block" type="button">Skip</button>
                                    </div>
                                    <div class="profile-data-area">
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3> Type of Deal: *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="radio" placeholder="" name="Fixed3-second" id="Open-id3-second" required>
                                                    <label for="Open-id3-second">Open</label>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="radio" placeholder="" name="Fixed3-second" id="fixed-id3-second" required>
                                                    <label for="fixed-id3-second">Fixed</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Name of your operation</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Deal title *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" name="Package Title" maxlength="50" required>
                                                <p>Max Char 50</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Select Date *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" id="rangeCalendar4" placeholder="Select date range" name="date-picking" class="flatpickr-input" readonly="readonly">
                                                <div id="imageContainer4" style="display:none;">
                                                    <canvas id="dateCanvas4"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Number of Guided/Fishing days: *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="" required>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Arrival and Department Details / Times *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type Of Room *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="radio-div">
                                                <div class="main-wrapper-radio">
                                                    <div class="radio-button">
                                                        <input class="" type="radio" name="emr9-second" id="radiocheck19-second" data-value="radio-content10">
                                                        <label class="radio-label" for="radiocheck19-second">Type of Room Option 1</label>
                                                    </div>
                                                    <div class="radio-button">
                                                        <input class="" type="radio" name="emr9-second" id="radiocheck29-second" data-value="radio-content11">
                                                        <label class="radio-label" for="radiocheck29-second">Type of Room Option 2</label>
                                                    </div>
                                                    <div class="radio-button">
                                                        <input class="" type="radio" name="emr9-second" id="radiocheck39-second" data-value="radio-content12">
                                                        <label class="radio-label" for="radiocheck39-second">Type of Room Option 3</label>
                                                    </div>
                                                </div>
                                                <div class="radioContentWrap">
                                                    <div id="radio-content10">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                    <div id="radio-content11">
                                                        <strong>This is the Second item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                    <div id="radio-content12">
                                                        <strong>This is the Third item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Select Your Room Type *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected>Select a room</option>
                                                    <option value="1">Double or Twin-Luxury-Cottage suite ( max guest 2)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Room Type Description *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type of Accomodation *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected>Select type of accommodation</option>
                                                    <option value="1">Boat</option>
                                                    <option value="2">Cabin</option>
                                                    <option value="3">Camp</option>
                                                    <option value="3">Castles or Inns or Hotels or Homes or Mountain Huts</option>
                                                    <option value="3">Chalet</option>
                                                    <option value="3">Cottage</option>
                                                    <option value="3">Guesthouse</option>
                                                    <option value="3">Hotel</option>
                                                    <option value="3">Houseboat</option>
                                                    <option value="3">Inn</option>
                                                    <option value="3">Lodge</option>
                                                    <option value="3">Ranch</option>
                                                    <option value="3">Resort</option>
                                                    <option value="3">Villa</option>
                                                    <option value="3">Yacht</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Quantity</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <p>You are asked to list the quantity of the <span class="italic">Room Type</span> you have choosen you are able to offer for the required period.</p>
                                                <p>Once you enter the quantity, you can go ahead and enter the <b><span class="italic">Number of Guests</span></b> and the <b><span class="italic">Rates</span></b>.</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Information *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <input type="text" placeholder="" id="" required>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Description *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="The fishing description in your profile will be added to this deal. For any specific information regarding this particular time in the season. ">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Guide Service Information *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea required></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title d-block">
                                                    <h3 class="d-flex mb-2">Itinerary
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                    <p>Here you can specify how activities evolve throughout these dates.</p>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea class=""></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <p>Only services selected will be shown in your published deal. You are welcome to further explain specific services in the Good to Know section below.</p>
                                                <p>Please contact us if it miss the service you need included/excluded</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Service included</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Accomodation-idz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/accomodation.png') }}" alt="" srcset="">
                                                        <label for="Accomodation-idz9-second">Accomodation</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Alcoholic-idz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/glass-drink.png') }}" alt="" srcset="">
                                                        <label for="Alcoholic-idz9-second">Alcoholic beverages</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="All-idz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/meals.png') }}" alt="" srcset="">
                                                        <label for="All-idz9-second">All meals</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="activities-idz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/soft-drinks.png') }}" alt="" srcset="">
                                                        <label for="activities-idz9-second">All soft drinks during activities</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="lessons-idz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/cook.png') }}" alt="" srcset="">
                                                        <label for="lessons-idz9-second">Cooking lessons</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="accepted-idz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/cardless.png') }}" alt="" srcset="">
                                                        <label for="accepted-idz9-second">Credit cards are not accepted</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Additional-idz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/laundry-machine.png') }}" alt="" srcset="">
                                                        <label for="Additional-idz9-second">Laundry & Additional special services</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Lodging-idz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/lodging.png') }}" alt="" srcset="">
                                                        <label for="Lodging-idz9-second">Lodging tax</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorised-idz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="Non-motorised-idz9-second">Lunch</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorisedz-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="Non-motorisedz-id9-second">Non-motorised Water Sports</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Phone-idzz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/phone-call.png') }}" alt="" srcset="">
                                                        <label for="Phone-idzz9-second">Phone calls</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Pick-izd9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/transporting.png') }}" alt="" srcset="">
                                                        <label for="Pick-izd9-second">Pick up at Local Airport</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Private-izd9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-rod.png') }}" alt="" srcset="">
                                                        <label for="Private-izd9-second">Private water rod fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flies-izd9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/tackle-box.png') }}" alt="" srcset="">
                                                        <label for="Flies-izd9-second">Tackle and Flies</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Tender-idonez9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="Tender-idonez9-second">Tender boat and fuel</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Transportation-idz9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/truck.png') }}" alt="" srcset="">
                                                        <label for="Transportation-idz9-second">Transportation to and from the fishing</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Insurance-idone9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/protection.png') }}" alt="" srcset="">
                                                        <label for="Insurance-idone9-second">Travel and Medical Insurance</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Service excluded</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="License-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/license.png') }}" alt="" srcset="">
                                                        <label for="License-id9-second">Fishing License</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flights-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/airplane.png') }}" alt="" srcset="">
                                                        <label for="Flights-id9-second">Flights</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="equipment-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-net.png') }}" alt="" srcset="">
                                                        <label for="equipment-id9-second">Fly fishing equipment</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Gratuitiesf-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/delivery.png') }}" alt="" srcset="">
                                                        <label for="Gratuitiesf-id9-second">Gratuities for Guides & Staff</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Servicef-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/self-service.png') }}" alt="" srcset="">
                                                        <label for="Servicef-id9-second">Guide Service</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Landingf-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/web.png') }}" alt="" srcset="">
                                                        <label for="Landingf-id9-second">Landing Fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Additional-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/laundry-machine.png') }}" alt="" srcset="">
                                                        <label for="Additional-id9-second">Laundry Additional special services</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Lunchf-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dish.png') }}" alt="" srcset="">
                                                        <label for="Lunchf-id9-second">Lunch</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Non-motorised-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/travel.png') }}" alt="" srcset="">
                                                        <label for="Non-motorised-id9-second">Non-motorised Water Sports</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Phonef-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/phone-call.png') }}" alt="" srcset="">
                                                        <label for="Phonef-id9-second">Phone calls</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Local-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/transporting.png') }}" alt="" srcset="">
                                                        <label for="Local-id9-second">Pick up at Local Airport</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Private-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fishing-rod.png') }}" alt="" srcset="">
                                                        <label for="Private-id9-second">Private water rod fees</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Flies-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/tackle-box.png') }}" alt="" srcset="">
                                                        <label for="Flies-id9-second">Tackle and Flies</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Tender-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat.png') }}" alt="" srcset="">
                                                        <label for="Tender-id9-second">Tender boat and fuel</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Transportation-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/truck.png') }}" alt="" srcset="">
                                                        <label for="Transportation-id9-second">Transportation to and from the fishing</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fresh Water" id="Insurance-id9-second">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/protection.png') }}" alt="" srcset="">
                                                        <label for="Insurance-id9-second">Travel and Medical Insurance</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Recommended gear
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Good to know
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Expected fish types
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <p>please provide what type of fish will be available in that particular period</p>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn-1">Continue to rates</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="step4 in-active-option parentclass" id="step-4" data-value="stepForm4">
                                <div class="booking-chart-area">
                                    <div class="payment-det-title" id="parent3">
                                        <h2 class="justify-content-center">Review Full Deal</h2>
                                        <input type="hidden">
                                    </div>
                                    <div class="profile-data-area">
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3> Type of Deal: *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap">
                                                    <p>Fixed</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Name of your operation</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap">
                                                    <p>35</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Deal title *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap">
                                                    <p>Dummy Deal Name</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Select Date *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap">
                                                    <p>2025-02-04 to 2025-02-12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Number of Nights *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap">
                                                    <p>20</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Number of Guided/Fishing days: *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap">
                                                    <p>80</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Arrival and Department Details / Times *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore illo quidem iusto eveniet eos? Saepe vitae explicabo hic facere corrupti.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type Of Room *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="radio-div">
                                                <div class="data-show-wrap">
                                                    <p>Type of Room Option 1</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Select Your Room Type *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap">
                                                    <p>Double or Twin-Luxury-Cottage suite ( max guest 2)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Room Type Description *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque culpa placeat architecto expedita porro. Fugit, a quasi porro unde nostrum, voluptates vitae dolores blanditiis neque quisquam deleniti aliquid repudiandae et consequuntur! Vero sit sapiente incidunt voluptatum veniam tempore similique dolores distinctio iste consectetur aspernatur nihil, deserunt rem doloribus laboriosam deleniti.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type of Accomodation *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap">
                                                    <p>Castles or Inns or Hotels or Homes or Mountain Huts</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Quantity</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <p>You are asked to list the quantity of the <span class="italic">Room Type</span> you have choosen you are able to offer for the required period.</p>
                                                <p>Once you enter the quantity, you can go ahead and enter the <b><span class="italic">Number of Guests</span></b> and the <b><span class="italic">Rates</span></b>.</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Information *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <div class="data-show-wrap data-show-wrap2">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, fugiat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Description *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="The fishing description in your profile will be added to this deal. For any specific information regarding this particular time in the season. ">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <div class="data-show-wrap">
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae excepturi tempore sit nulla eligendi officiis autem! In expedita provident ullam eaque culpa corporis perferendis, aperiam velit beatae aliquid labore illo.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Guide Service Information *
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <div class="data-show-wrap">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta inventore id amet doloribus! Consequatur dolorem, incidunt fugit repudiandae, pariatur deleniti sequi culpa optio suscipit voluptate rerum? Placeat in, nemo necessitatibus sequi voluptatibus nesciunt porro ad deserunt quibusdam ut sed voluptas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title d-block">
                                                    <h3 class="d-flex mb-2">Itinerary
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                    <p>Here you can specify how activities evolve throughout these dates.</p>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <div class="data-show-wrap">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nemo modi optio labore placeat voluptatem incidunt necessitatibus, vero molestiae praesentium autem aperiam magnam perspiciatis nobis assumenda. Cupiditate impedit quibusdam laboriosam accusamus voluptatum temporibus, magni sequi debitis praesentium officia blanditiis sunt fuga, odio dolore ratione. Fuga voluptate reprehenderit nobis maxime molestias.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <p>Only services selected will be shown in your published deal. You are welcome to further explain specific services in the Good to Know section below.</p>
                                                <p>Please contact us if it miss the service you need included/excluded</p>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Service included</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap d-flex gap-3 flex-wrap">
                                                    <p>Alcoholic beverages</p>
                                                    <p>Pick up at Local Airport</p>
                                                    <p>Cooking lessons</p>
                                                    <p>Lodging tax</p>
                                                    <p>All soft drinks during activities</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Service excluded</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap d-flex gap-3 flex-wrap">
                                                    <p>Fishing License</p>
                                                    <p>Flights</p>
                                                    <p>Fly fishing equipment</p>
                                                    <p>Gratuities for Guides & Staff</p>
                                                    <p>Guide Service</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Extra Activities</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="data-show-wrap d-flex gap-3 flex-wrap">
                                                    <p>SPA</p>
                                                    <p>Hiking</p>
                                                    <p>White water rafting</p>
                                                    <p>Birdwatching</p>
                                                    <p>Horseback riding</p>
                                                    <p>Local rides</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Recommended gear
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <div class="data-show-wrap">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nemo modi optio labore placeat voluptatem incidunt necessitatibus, vero molestiae praesentium autem aperiam magnam perspiciatis nobis assumenda. Cupiditate impedit quibusdam laboriosam accusamus voluptatum temporibus, magni sequi debitis praesentium officia blanditiis sunt fuga, odio dolore ratione. Fuga voluptate reprehenderit nobis maxime molestias.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Good to know
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <div class="data-show-wrap">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nemo modi optio labore placeat voluptatem incidunt necessitatibus, vero molestiae praesentium autem aperiam magnam perspiciatis nobis assumenda. Cupiditate impedit quibusdam laboriosam accusamus voluptatum temporibus, magni sequi debitis praesentium officia blanditiis sunt fuga, odio dolore ratione. Fuga voluptate reprehenderit nobis maxime molestias.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Expected fish types
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <p>please provide what type of fish will be available in that particular period</p>
                                            </label>
                                            <div class="input-div d-grid">
                                                <div class="data-show-wrap">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nemo modi optio labore placeat voluptatem incidunt necessitatibus, vero molestiae praesentium autem aperiam magnam perspiciatis nobis assumenda. Cupiditate impedit quibusdam laboriosam accusamus voluptatum temporibus, magni sequi debitis praesentium officia blanditiis sunt fuga, odio dolore ratione. Fuga voluptate reprehenderit nobis maxime molestias.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer d-flex justify-content-center mt-3">
                                            <button type="submit" class="requesting-btn btn-3" id="requesting-btn">REQUEST TO PUBLISH</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </main>

    <div class="popup-wrap" id="popup-wrap">
        <div class="popup-area position-relative">
            <div class="popup-col">
                <p>Please select the correspondent button <br> below for this particular deal:</p>
                <div class="popup-btn-wrapper justify-content-center">
                    <button id="closeBtn">With Accommodation</button>
                    <button id="stepBtn3">Without Accommodation</button>
                </div>
            </div>
        </div>
    </div>


    <div class="popup-wrap2 " id="popup-wrap2">
        <div class="popup-area2 position-relative">
            <div class="popup-col2">
                <p>This Deal is Subject to Analysis by Fly on the move. You’ll get an Email Confirming the Deal is Published Soon.</p>
            </div>
        </div>
    </div>

    <div class="popup-wrap3 " id="popup-wrap3">
        <div class="popup-area3 position-relative">
            <div class="popup-col3">
                <p>Click Here ONLY to Add a Second Step to this Deal Including a Different Accommodation</p>
                <div class="popup-btn-wrapper justify-content-center">
                    <button id="closeBtn2">Skip</button>
                    <button id="stepBtn2">Continue</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        window.onload = function() {
            document.getElementById('popup-wrap').classList.add('active');
            document.getElementById('closeBtn').addEventListener('click', function() {
                document.getElementById('popup-wrap').classList.remove('active');
            })
        }
    </script>
    <script>
        document.getElementById("requesting-btn").addEventListener("click", function() {
            let popup = document.getElementById("popup-wrap2");
            popup.classList.add("active");

            setTimeout(function() {
                location.reload();
            }, 5000);
        });
    </script>

    <script>
        function updateRates() {
            const nights = parseInt(document.getElementById("nights").value) || 0;
            const fishingDays = parseInt(document.getElementById("fishingDays").value) || 0;
            const discountField = document.getElementById("discountPercentage");
            const discount = parseFloat(discountField.value) || 0;

            if (nights > 0 || fishingDays > 0) {
                const dailyRateFields = [
                    "dailyRateDoubleShared",
                    "dailyRateSharedGuide",
                    "dailyRateSingleGuide",
                    "dailyRateNonFisherman",
                    "dailyRateNonAdult"
                ];
                const packageRateFields = [
                    "packageRateDoubleShared",
                    "packageRateSharedGuide",
                    "packageRateSingleGuide",
                    "packageRateNonFisherman",
                    "packageRateNonAdult"
                ];

                for (let i = 0; i < dailyRateFields.length; i++) {
                    const dailyRateField = document.getElementById(dailyRateFields[i]);
                    const packageRateField = document.getElementById(packageRateFields[i]);

                    const dailyRate = parseFloat(dailyRateField.value) || 0;
                    const packageRate = parseFloat(packageRateField.value) || 0;
                    const multiplier = Math.max(nights, fishingDays);

                    if (dailyRate > 0 && dailyRateField === document.activeElement) {
                        packageRateField.value = (dailyRate * multiplier).toFixed(2);
                    }

                    if (packageRate > 0 && packageRateField === document.activeElement) {
                        dailyRateField.value = (packageRate / multiplier).toFixed(2);
                    }
                }

                const packageRateDoubleShared = parseFloat(document.getElementById("packageRateDoubleShared").value) || 0;
                const doubleOccupancyField = document.getElementById("doubleOccupancyFullPrice");
                if (packageRateDoubleShared > 0) {
                    doubleOccupancyField.value = packageRateDoubleShared.toFixed(2);
                }

                const doubleOccupancyDiscountField = document.getElementById("doubleOccupancyDiscountedPrice");
                if (discount > 0) {
                    if (packageRateDoubleShared > 0) {
                        const discountedPrice = packageRateDoubleShared - (packageRateDoubleShared * discount) / 100;
                        doubleOccupancyDiscountField.value = discountedPrice.toFixed(2);
                    } else {
                        doubleOccupancyDiscountField.value = "";
                    }
                } else {
                    doubleOccupancyDiscountField.value = "";
                }
            } else {
                const allFields = [
                    "dailyRateDoubleShared",
                    "packageRateDoubleShared",
                    "dailyRateSharedGuide",
                    "packageRateSharedGuide",
                    "dailyRateSingleGuide",
                    "packageRateSingleGuide",
                    "dailyRateNonFisherman",
                    "packageRateNonFisherman",
                    "dailyRateNonAdult",
                    "packageRateNonAdult",
                    "doubleOccupancyFullPrice",
                    "doubleOccupancyDiscountedPrice"
                ];
                allFields.forEach((field) => {
                    document.getElementById(field).value = "";
                });
            }
        }

        document.getElementById("nights").addEventListener("input", updateRates);
        document.getElementById("fishingDays").addEventListener("input", updateRates);
        document.getElementById("discountPercentage").addEventListener("input", updateRates);

        const fields = [
            "dailyRateDoubleShared",
            "packageRateDoubleShared",
            "dailyRateSharedGuide",
            "packageRateSharedGuide",
            "dailyRateSingleGuide",
            "packageRateSingleGuide",
            "dailyRateNonFisherman",
            "packageRateNonFisherman",
            "dailyRateNonAdult",
            "packageRateNonAdult"
        ];
        fields.forEach((field) => {
            document.getElementById(field).addEventListener("input", updateRates);
        });
    </script>





    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        function initSyncedFlatpickr(ids, canvasIds, containerIds) {
            const flatpickrs = [];

            ids.forEach((id, index) => {
                const fp = flatpickr(id, {
                    mode: "range",
                    onChange: function(selectedDates) {
                        if (selectedDates.length === 2) {
                            ids.forEach(inputId => {
                                document.querySelector(inputId).value = this.input.value;
                            });

                            canvasIds.forEach((canvasId, i) => {
                                generateImageWithDates(selectedDates[0], selectedDates[1], canvasId, containerIds[i]);
                            });
                        }
                    }
                });
                flatpickrs.push(fp);
            });
        }

        initSyncedFlatpickr(["#rangeCalendar1", "#rangeCalendar2"],
            ["dateCanvas1", "dateCanvas2"],
            ["imageContainer1", "imageContainer2"]);

        function generateImageWithDates(startDate, endDate, canvasId, containerId) {
            const canvas = document.getElementById(canvasId);
            if (!canvas) return console.error(`Canvas element '${canvasId}' not found!`);

            const ctx = canvas.getContext("2d");
            if (!ctx) return console.error(`Unable to get 2D context for '${canvasId}'!`);

            document.getElementById(containerId).style.display = "block";

            const monthsToShow = [];
            let currentMonth = startDate.getMonth();
            let currentYear = startDate.getFullYear();

            while (currentYear < endDate.getFullYear() || (currentYear === endDate.getFullYear() && currentMonth <= endDate.getMonth())) {
                monthsToShow.push({
                    month: currentMonth,
                    year: currentYear
                });
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
            }

            const singleMonthWidth = 300;
            const cellHeight = 40;
            const maxDays = 42;
            const numRows = Math.ceil(maxDays / 7);
            const calendarHeight = numRows * cellHeight + 70;

            canvas.width = singleMonthWidth * monthsToShow.length;
            canvas.height = calendarHeight;

            ctx.clearRect(0, 0, canvas.width, canvas.height);

            monthsToShow.forEach((monthInfo, index) => {
                const offsetX = index * singleMonthWidth;
                drawCalendar(ctx, monthInfo.month, monthInfo.year, startDate, endDate, offsetX, cellHeight, singleMonthWidth);
            });
        }

        function drawCalendar(ctx, month, year, startDate, endDate, offsetX, cellHeight, singleMonthWidth) {
            const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            const cellWidth = singleMonthWidth / 7;
            const startX = offsetX;
            const startY = 60;

            ctx.font = "bold 14px Arial";
            ctx.fillStyle = "#000";
            ctx.textAlign = "center";
            ctx.fillText(`${["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"][month]} ${year}`, offsetX + singleMonthWidth / 2, 30);

            ctx.font = "12px Arial";
            days.forEach((day, i) => {
                ctx.fillText(day, startX + i * cellWidth + cellWidth / 2, startY);
            });

            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const startDay = new Date(year, month, 1).getDay();
            let date = 1;

            for (let row = 0; row < 6; row++) {
                for (let col = 0; col < 7; col++) {
                    const x = startX + col * cellWidth;
                    const y = startY + 40 + row * cellHeight;

                    if (row === 0 && col < startDay) continue;
                    if (date > daysInMonth) break;

                    const isSelected = new Date(year, month, date) >= startDate && new Date(year, month, date) <= endDate;

                    if (isSelected) {
                        ctx.fillStyle = "#007BFF";
                        ctx.fillRect(x + 5, y - 20, cellWidth - 10, cellHeight - 6);
                        ctx.fillStyle = "#FFF";
                    } else {
                        ctx.fillStyle = "#000";
                    }

                    ctx.font = "12px Arial";
                    ctx.textAlign = "center";
                    ctx.fillText(date, x + cellWidth / 2, y);
                    date++;
                }
            }
        }
    </script>

    <!-- Third Step Calender Script -->
    <script>
        // Function to initialize an independent Flatpickr input
        function initIndependentFlatpickr(inputId, canvasId, containerId) {
            flatpickr(inputId, {
                mode: "range",
                onChange: function(selectedDates) {
                    if (selectedDates.length === 2) {
                        generateImageWithDates(selectedDates[0], selectedDates[1], canvasId, containerId);
                    }
                }
            });
        }

        // Call function for independent input
        initIndependentFlatpickr("#rangeCalendar3", "dateCanvas3", "imageContainer3");

        function generateImageWithDates(startDate, endDate, canvasId, containerId) {
            const canvas = document.getElementById(canvasId);
            if (!canvas) return console.error(`Canvas '${canvasId}' not found!`);

            const ctx = canvas.getContext("2d");
            if (!ctx) return console.error(`Cannot get 2D context for '${canvasId}'!`);

            document.getElementById(containerId).style.display = "block";

            const monthsToShow = [];
            let currentMonth = startDate.getMonth();
            let currentYear = startDate.getFullYear();

            while (currentYear < endDate.getFullYear() || (currentYear === endDate.getFullYear() && currentMonth <= endDate.getMonth())) {
                monthsToShow.push({
                    month: currentMonth,
                    year: currentYear
                });
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
            }

            const singleMonthWidth = 300;
            const cellHeight = 40;
            const maxDays = 42;
            const numRows = Math.ceil(maxDays / 7);
            const calendarHeight = numRows * cellHeight + 70;

            canvas.width = singleMonthWidth * monthsToShow.length;
            canvas.height = calendarHeight;

            ctx.clearRect(0, 0, canvas.width, canvas.height);

            monthsToShow.forEach((monthInfo, index) => {
                drawCalendar(ctx, monthInfo.month, monthInfo.year, startDate, endDate, index * singleMonthWidth, cellHeight, singleMonthWidth);
            });
        }

        function drawCalendar(ctx, month, year, startDate, endDate, offsetX, cellHeight, singleMonthWidth) {
            const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            const cellWidth = singleMonthWidth / 7;
            ctx.font = "bold 14px Arial";
            ctx.fillStyle = "#000";
            ctx.textAlign = "center";
            ctx.fillText(`${["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"][month]} ${year}`, offsetX + singleMonthWidth / 2, 30);

            ctx.font = "12px Arial";
            days.forEach((day, i) => {
                ctx.fillText(day, offsetX + i * cellWidth + cellWidth / 2, 60);
            });

            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const startDay = new Date(year, month, 1).getDay();
            let date = 1;
            for (let row = 0; row < 6; row++) {
                for (let col = 0; col < 7; col++) {
                    const x = offsetX + col * cellWidth;
                    const y = 100 + row * cellHeight;
                    if (row === 0 && col < startDay) continue;
                    if (date > daysInMonth) break;
                    const isSelected = new Date(year, month, date) >= startDate && new Date(year, month, date) <= endDate;
                    if (isSelected) {
                        ctx.fillStyle = "#007BFF";
                        ctx.fillRect(x + 5, y - 20, cellWidth - 10, cellHeight - 6);
                        ctx.fillStyle = "#FFF";
                    } else {
                        ctx.fillStyle = "#000";
                    }
                    ctx.font = "12px Arial";
                    ctx.fillText(date, x + cellWidth / 2, y);
                    date++;
                }
            }
        }
    </script>



    <script src="https://cdn.tiny.cloud/1/dfpwqzta0shla64s4zi0rqjezy639oqfj9hnk8bwsqr8lu08/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.myTextarea'
        });

        $('.googlemap-link').click(function() {
            $('.map-set').addClass('active')
        })
        document.getElementById('fresh-id')?.addEventListener('change', function() {
            var freshActiveDiv = document.querySelector('.fresh-active');
            if (this.checked) {
                freshActiveDiv.classList.add('active');
            } else {
                freshActiveDiv.classList.remove('active');
            }
        });
        document.getElementById('salt-id')?.addEventListener('change', function() {
            var freshActiveDiv = document.querySelector('.saltwater-active');
            if (this.checked) {
                freshActiveDiv.classList.add('active');
            } else {
                freshActiveDiv.classList.remove('active');
            }
        });
    </script>
    <script>
        let noimage =
            "./assets/images/update-profile.png') }}";

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview").attr("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
        }
    </script>
    <script>
        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("step");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) {
                document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("stepIndicator");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    </script>
    <script>
        const imageInput = document.querySelector('#myFile-profile');
        const showImg = document.querySelector('#step-profile');
        imageInput?.addEventListener('change', function(event) {
            if (event.target.files && event.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    showImg.src = e.target.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        });
    </script>




    <!-------------------- Validate Form Script -------------------->


    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $(function() {
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();
            var maxDate = year + '-' + month + '-' + day;
            $('#startdate').attr('min', maxDate);
            $('#enddate').attr('min', maxDate);
        });

        let change = true;
        let lastOccupation;


        function undo() {
            document.querySelectorAll('.parentclass').forEach(Element => {

                if (!Element.classList.contains("active-option")) {
                    Element.querySelectorAll('[required]').forEach(item => {
                        item.required = false
                    })
                } else {
                    Element.querySelectorAll('input').forEach(item => {
                        if (item.type !== "checkbox" && item.name !== "emr") {
                            item.required = true;

                        }
                    })
                }
            })
        }

        undo();

        const scrollToTop = () => {
            const parent = document.getElementById("profile-data-area").querySelectorAll("input")
            const parent2 = document.getElementById("parentsTwo").querySelectorAll("input")
            const parent3 = document.getElementById("parentThree")


            parent[0].focus();
            parent2[0].focus()
            parent3.focus()

        }

        function validateForm() {

            const parent = document.getElementById("profile-data-area").querySelectorAll("inp ut")
            const parent2 = document.getElementById("parentsTwo").querySelectorAll("input")
            // const parent3 = document.getElementById("parent3").querySelector("input") 

            const requiredFields = document.querySelectorAll('#signUpForm [required]');

            if (!change && !document.getElementById('step-2').classList.contains("active-option")) {

            }
            for (let field of requiredFields) {
                // console.log(field);

                if (!field.value.trim()) {
                    console.log(field);
                    change = false;
                    return false;
                }
            }

            // console.log(change);

            if (change) {
                const stepOne = document.getElementById('step-1').classList.contains("active-option");
                const stepTwo = document.getElementById('step-3').classList.contains("active-option");
                const stepOneChild = document.getElementById('step-1-child').classList.contains("active-option");
                // const stepThreeChild = document.getElementById('step-3-child').classList.contains("active-option");
                // console.log("running");

                if (stepOne) {
                    // document.getElementById('step-1').classList.replace('active-option', 'in-active-option');
                    // document.getElementById('step-1-child').classList.replace('in-active-option', 'active-option');
                    document.getElementById('popup-wrap3').classList.add('active');
                    // undo()
                    // lastOccupation = "First Child"


                }
                if (stepTwo) {
                    document.getElementById('step-3').classList.replace('active-option', 'in-active-option');
                    document.getElementById('step-2').classList.replace('in-active-option', 'active-option');
                    undo();
                    // console.log("3rd");

                    lastOccupation = "Third Child"
                }
                if (stepOneChild) {
                    document.getElementById('step-1-child').classList.replace('active-option', 'in-active-option');
                    document.getElementById('step-2').classList.replace('in-active-option', 'active-option');

                }

                scrollToTop();

                return false;
            }

            return false;


        }

        // document.getElementById('buttonNumberOne').addEventListener('click', function() {

        // })

        document.getElementById('stepBtn2').addEventListener('click', function() {
            document.getElementById('popup-wrap3').classList.remove('active');
            document.getElementById('step-1').classList.replace('active-option', 'in-active-option');
            document.getElementById('step-1-child').classList.replace('in-active-option', 'active-option');
            lastOccupation = "First Child";
            undo()
            scrollToTop()

        })

        document.getElementById('closeBtn2').addEventListener('click', function() {
            document.getElementById('popup-wrap3').classList.remove('active');
            document.getElementById('step-1').classList.replace('active-option', 'in-active-option');
            document.getElementById('step-2').classList.replace('in-active-option', 'active-option');
            lastOccupation = "First"
            scrollToTop()
        })

        document.getElementById('stepBtn3').addEventListener('click', function() {
            document.getElementById('step-1').classList.replace('active-option', 'in-active-option');
            document.getElementById('step-3').classList.replace('in-active-option', 'active-option');
            document.getElementById('popup-wrap').classList.remove('active');
            undo()
        })




        document.querySelector('.btn-2').addEventListener('click', () => {
            if (lastOccupation === "First Child") {
                document.getElementById('step-1-child').classList.replace('in-active-option', 'active-option');
            } else if (lastOccupation === "First") {
                document.getElementById('step-1').classList.replace('in-active-option', 'active-option');
            } else {
                document.getElementById('step-3').classList.replace('in-active-option', 'active-option');
            }
            document.getElementById('step-2').classList.replace('active-option', 'in-active-option');

            undo()

        });

        document.querySelector('.btn-3').addEventListener('click', () => {
            change = false;
        })

        document.querySelector('.stepping-4').addEventListener('click', () => {
            document.getElementById('step-2').classList.replace('active-option', 'in-active-option');
            document.getElementById('step-4').classList.replace('in-active-option', 'active-option');

        })

        const skipButton = document.querySelectorAll('.skip-btn');

        const methodSkip = () => {
            const requiredFields = document.querySelectorAll('#signUpForm [required]');
            let flag = true;
            // requiredFields.forEach(field => {

            //     if (field.value.trim() && field.type !== 'radio' && field.type !== 'checkbox') {
            //         flag = false;
            //     }
            //     if (field.type === 'radio' && field.checked) {
            //         flag = false;
            //     }
            // })
            if (flag) {
                requiredFields[0].closest(".parentclass").classList.replace("active-option", "in-active-option")
                document.getElementById('step-2').classList.replace('in-active-option', 'active-option');
            }
        }

        if (skipButton.length > 0) {
            skipButton[0].addEventListener('click', () => {
                methodSkip();
            })

            // skipButton[1].addEventListener('click', () => {
            //     methodSkip();
            // })
        }
    </script>

    <!-------------------- Validate Form Script -------------------->



    <script>
        const radios = document.querySelectorAll(".radio-button");

        radios.forEach(elem => {
            elem.addEventListener('click', () => {
                const radiosInp = elem.querySelector("input").getAttribute("data-value");
                // console.log(document.getElementById(radiosInp));

                radios.forEach(item => {
                    const checkIds = item.querySelector("input").getAttribute("data-value")
                    if (checkIds) {
                        document.getElementById(checkIds).style.display = "none"
                    }
                });
                if (radiosInp) {
                    document.getElementById(radiosInp).style.display = "block"
                }
                // document.getElementById(radiosInp).style.display = "block";
            })
        })

        // function show1() {
        //     document.getElementById('radio-content1').style.display = 'block';
        //     document.getElementById('radio-content2').style.display = 'none';
        //     document.getElementById('radio-content3').style.display = 'none';
        // }

        // function show2() {
        //     document.getElementById('radio-content2').style.display = 'block';
        //     document.getElementById('radio-content1').style.display = 'none';
        //     document.getElementById('radio-content3').style.display = 'none';
        // }

        function show3() {
            document.getElementById('radio-content3').style.display = 'block';
            document.getElementById('radio-content1').style.display = 'none';
            document.getElementById('radio-content2').style.display = 'none';
        }

        function show4() {
            document.getElementById('radio-content4').style.display = 'block';
            document.getElementById('radio-content5').style.display = 'none';
            document.getElementById('radio-content6').style.display = 'none';
        }

        function show5() {
            document.getElementById('radio-content5').style.display = 'block';
            document.getElementById('radio-content4').style.display = 'none';
            document.getElementById('radio-content6').style.display = 'none';
        }

        function show6() {
            document.getElementById('radio-content6').style.display = 'block';
            document.getElementById('radio-content4').style.display = 'none';
            document.getElementById('radio-content5').style.display = 'none';
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#daterange').daterangepicker({
                opens: 'left',
                autoUpdateInput: true,
                locale: {
                    format: 'MM/DD/YYYY',
                    cancelLabel: 'Clear'
                }
            });

            $('#daterange').on('apply.daterangepicker', function(ev, picker) {
                $('#start-date').text(picker.startDate.format('MM/DD/YYYY'));
                $('#end-date').text(picker.endDate.format('MM/DD/YYYY'));
            });

            $('#daterange').on('cancel.daterangepicker', function() {
                $(this).val('');
                $('#start-date').text('N/A');
                $('#end-date').text('N/A');
            });
        });
    </script>
    <script>
        const radio = document.getElementById("toggleRadio");
        const blockDiv = document.getElementById("blockDiv");
        const flexDiv = document.getElementById("flexDiv");
        const conditionForm = document.querySelectorAll('.condition-form [name]')


        if (radio) {
            radio.addEventListener("change", function() {
                if (radio.checked) {
                    blockDiv.style.display = "block";
                    flexDiv.style.display = "flex";
                    conditionForm.forEach(req => {
                        req.setAttribute('required', true)
                    })
                } else {
                    blockDiv.style.display = "none";
                    flexDiv.style.display = "none";
                    conditionForm.forEach(req => {
                        req.removeAttribute('required')
                    })
                }
            });
        }
    </script>
@endpush
