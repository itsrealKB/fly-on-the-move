@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
     <main>
        <form id="signUpForm" action="#!">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9 col-12">
                            <div class="step">
                                <div class="booking-chart-area">
                                    <div class="payment-det-title">
                                        <h2>Create Your room type<span class="stepIndicator">Step 1/1</span> </h2>
                                        <p>The <strong>Room Type</strong> is a concept that allows you to describe the type of <strong>Accomodation</strong> and the <strong>max numbers of Guests that</strong> you will include in your Deal. It is mandatory to add or customize the Room Type that meets your needs. This information will be visible to the Guests.</p>
                                    </div>
                                    <div class="profile-data-area">
                                    <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Assigned Operation
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option disabled selected value="Please select the Room Category">Select one. If not selected the room will be copied for all new BYT account </option>
                                                    <option value="+++++++++">+++++++++</option>
                                                    <option value="abcd">abcd</option>
                                                    <option value="Alaska Trophy Adventures Lodge">Alaska Trophy Adventures Lodge</option>
                                                    <option value="Andes Drifters">Andes Drifters</option>
                                                    <option value="Andes Drifters - Parana On The Fly">Andes Drifters - Parana On The Fly</option>
                                                    <option value="Argentina Hunt">Argentina Hunt</option>
                                                    <option value="Argentina Waters - Le Fario Lodge">Argentina Waters - Le Fario Lodge</option>
                                                    <option value="Avalon Cayo Cruz">Avalon Cayo Cruz</option>
                                                    <option value="Avalon-Cayo Largo">Avalon-Cayo Largo</option>
                                                    <option value="Avalon - Isla de la Juventud">Avalon - Isla de la Juventud</option>
                                                    <option value="Avalon Jardines de la Reina">Avalon Jardines de la Reina</option>
                                                    <option value="Aylmer Lake Lodge">Aylmer Lake Lodge</option>
                                                    <option value="Baja's Fishing Dream">Baja's Fishing Dream</option>
                                                    <option value="Belousiha River Lodge">Belousiha River Lodge</option>
                                                    <option value="Best Golf & Fishing Patagonia">Best Golf & Fishing Patagonia</option>
                                                    <option value="Big Sky Anglers/Golden Stone Inn">Big Sky Anglers/Golden Stone Inn</option>
                                                    <option value="Blue & Green Outfitters">Blue & Green Outfitters</option>
                                                    <option value="Blue Bayou Lodge Of Guatemala">Blue Bayou Lodge Of Guatemala</option>
                                                    <option value="Chavanga fishing outfitter">Chavanga fishing outfitter</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type of Accommodation
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option disabled selected>Please Select the type of Accommodation</option>
                                                    <option value="Boat">Boat</option>
                                                    <option value="Cabin">Cabin</option>
                                                    <option value="Camp">Camp</option>
                                                    <option value="Casties or inns or Hotels or Homes or Mountain Huts">Casties or inns or Hotels or Homes or Mountain Huts</option>
                                                    <option value="Chalet">Chalet</option>
                                                    <option value="Cottage">Cottage</option>
                                                    <option value="Guesthouse">Guesthouse</option>
                                                    <option value="Hotel">Hotel</option>
                                                    <option value="Houseboat">Houseboat</option>
                                                    <option value="Inn">Inn</option>
                                                    <option value="Lodge">Lodge </option>
                                                    <option value="Ranch">Ranch</option>
                                                    <option value="Resort">Resort</option>
                                                    <option value="Villa">Villa</option>
                                                    <option value="Yacht">Yacht</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Room Types *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected>Please select the Room Type</option>
                                                    <option value="Single Room">Single Room</option>
                                                    <option value="Double Room with one double bed">Double Room with one double bed</option>
                                                    <option value="Double or Twin">Double or Twin</option>
                                                    <option value="Twin Room with 2 beds">Twin Room with 2 beds</option>
                                                    <option value="Triple Room">Triple Room</option>
                                                    <option value="Quadruple">Quadruple</option>
                                                    <option value="For 3 Guests">For 3 Guests</option>
                                                    <option value="For 4 Guests">For 4 Guests</option>
                                                    <option value="For 5 Guests">For 5 Guests</option>
                                                    <option value="For 6 Guests">For 6 Guests</option>
                                                    <option value="For 7 Guests">For 7 Guests</option>
                                                    <option value="For 8 Guests">For 8 Guests</option>
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Full/Entire">Full/Entire</option>
                                                    <option value="Cabin">Cabin</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Room Categories *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option disabled value="Please select the Room Category">Please select the Room Category</option>
                                                    <option value="Deluxe">Deluxe</option>
                                                    <option value="Luxury">Luxury</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Suite">Suite</option>
                                                    <option value="Superior">Superior</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Room title
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <!-- <input type="text" placeholder="" id="sad"> -->
                                                <p style="line-height: 1.5;"><b>Optional:</b> You can assign a <b><span class="italic">Name</span></b> for this Room or name a type of accomodation that is different but part of the same fly fishing operation</p>
                                                <p style="line-height: 1.5;"><b>Name
                                                        <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button>
                                                    </b></p>
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Description 
                                                        <!-- <button type="button" class="setquestion-hover" data-toggle="tooltip" data-placement="top" title="lorem ipsum">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                        </button> -->
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <textarea ></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Operation Categories

                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option disabled selected>Operation Categories</option>
                                                    <option value="fishing">Fishing</option>
                                                    <option value="outfitters ">Outfitters </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Minimum number of guest
                                                       
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Maximum number of guest
                                                       
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example" required>
                                                    < <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Facilities</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Boat Rental" id="Boat-Rental">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/air-condition.png') }}" alt="" srcset="">
                                                        <label for="Boat-Rental">Air Conditioning</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Alarm CLock" id="alaramclock">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/wall-clock.png') }}" alt="" srcset="">
                                                        <label for="alaramclock">Alarm Clock</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="BathTub" id="BathTub">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/bathtub.png') }}" alt="" srcset="">
                                                        <label for="BathTub">BathTub</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Ceiling" id="Ceiling">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fan.png') }}" alt="" srcset="">
                                                        <label for="Ceiling">Ceiling fans</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Electricity" id="Electricity">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/electricity.png') }}" alt="" srcset="">
                                                        <label for="Electricity">Electricity</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Hairdryer" id="Hairdryer">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/hairdryer.png') }}" alt="" srcset="">
                                                        <label for="Hairdryer">Hairdryer</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Heating" id="Heating">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/heating.png') }}" alt="" srcset="">
                                                        <label for="Heating">Heating</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Ironing" id="Ironing">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/iron.png') }}" alt="" srcset="">
                                                        <label for="Ironing">Ironing facilities</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Microwave" id="Microwave">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/microwave.png') }}" alt="" srcset="">
                                                        <label for="Microwave">Microwave</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Non-Smoking" id="Non-Smoking">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/non-smoking-room.png') }}" alt="" srcset="">
                                                        <label for="Non-Smoking">Non-Smoking Rooms</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Private Bathroom" id="PrivateBathroom">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/toilet.png') }}" alt="" srcset="">
                                                        <label for="PrivateBathroom">Private Bathroom</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Refrigerator" id="Refrigerator">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/refrigerator.png') }}" alt="" srcset="">
                                                        <label for="Refrigerator">Refrigerator</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Safety Box" id="Safety">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/safe-box.png') }}" alt="" srcset="">
                                                        <label for="Safety">Safety Box</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Satellite Channels" id="SatelliteChannels">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/satellite.png') }}" alt="" srcset="">
                                                        <label for="SatelliteChannels">Satellite Channels</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Shower" id="Shower">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/shower.png') }}" alt="" srcset="">
                                                        <label for="Shower">Shower</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Tea/Coffee" id="Tea/Coffee">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/coffee-cup.png') }}" alt="" srcset="">
                                                        <label for="Tea/Coffee">Tea/Coffee maker</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="TV" id="tv">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/tv.png') }}" alt="" srcset="">
                                                        <label for="tv">TV</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Upper" id="Upper">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/apartment.png') }}" alt="" srcset="">
                                                        <label for="Upper">Upper floors accessible by stairs only</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="" class="width-set-lble">
                                                <div class="profile-title">
                                                    <h3>Featured Image</h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-none">
                                                <p class="img-drop-text p-0">(Make sure your photos are 900 x 675 pixel or larger)</p>

                                                <form action="/action_page.php">
                                                    <label for="myFile-2"><i class="fa-solid fa-arrow-up-from-bracket"></i>Upload or Drop Your Image</label>
                                                    <input type="file" id="myFile-profile" name="filename">
                                                </form>
                                            </div>
                                            <img src="{{ asset('assets/admin/images/profile-update.png') }}" id="step-profile">
                                        </div>
                                        <div class="profile-detail border-radius-last-child border-radius">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Gallery Images</h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-none">
                                            <p class="img-drop-text p-0">(Make sure your photos are 900 x 675 pixel or larger)</p>
                                                <form action="/action_page.php">
                                                    <label for="myFile-2"><i class="fa-solid fa-arrow-up-from-bracket"></i>Upload or Drop Your Image</label>
                                                    <input type="file" id="galleryimages" name="filename">
                                                </form>
                                                <div class="d-flex align-items-center gap-3 images-boxes flex-wrap">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit">Save</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="step">
                                    <div class="booking-chart-area">
                                        <div class="payment-det-title">
                                            <h2>Create Your Fishing Operations <span class="stepIndicator">Step 2/2</span></h2>
                                            <p>This is where you create your profile. All information provided will be the key to making your unique profile stronger aiming at your future guests.</p>
                                        </div>
                                        <div class="chrt-hd-area">
                                            <div class="profile-pg-hd">
                                                <h3>Additional Information</h3>
                                                <p>Fields mark with an asterisk(*) are required</p>
                                            </div>
                                        </div>
                                        <div class="profile-data-area">
                                            <div class="profile-detail">
                                                <label for="" class="width-set-lble">
                                                    <div class="profile-title">
                                                        <h3>Profile Picture</h3>
                                                    </div>
                                                </label>
                                                <div class="input-div d-none">
                                                    <p class="img-drop-text"><strong>choose your profile picture:</strong> Remember that your profile picture is the first impression, so its important to upload a photo represents you well.</p>
                                                    <p class="">Featured Image (make sure your photo are 900 x 675 pixels or larger) *</p>

                                                    <form action="/action_page.php">
                                                        <label for="myFile-2"><i class="fa-solid fa-arrow-up-from-bracket"></i>Upload or Drop Your Image</label>
                                                        <input type="file" id="myFile-profile" name="filename">
                                                    </form>
                                                </div>
                                                <img src="{{ asset('assets/admin/images/profile-update.png') }}" id="step-profile">
                                            </div>
                                            <div class="profile-detail">
                                                <label for="">
                                                    <div class="profile-title">
                                                        <h3>Gallery Information *</h3>
                                                    </div>
                                                </label>
                                                <div class="input-div d-none">
                                                    <p class="img-drop-text"> Great photos invites guests to get the full experience of your fishing operation . make sure you include high-resolution photos of your fishing operation . we'll display these photos on your property's page on the flyonthemove.com website . we recommend to work with at least <strong>10</strong>pictures (max 20 pictures).</p>
                                                    <p class="">Gallery Image (make sure your photo are 1190 x 669 pixels or larger) *</p>
                                                    <form action="/action_page.php">
                                                        <label for="myFile-2"><i class="fa-solid fa-arrow-up-from-bracket"></i>Upload or Drop Your Image</label>
                                                        <input type="file" id="galleryimages" name="filename">
                                                    </form>
                                                    <div class="d-flex align-items-center gap-3 images-boxes flex-wrap">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-detail">
                                                <label for="">
                                                    <div class="profile-title">
                                                        <h3>YouTube Video <i class="fa-solid fa-question"></i></h3>
                                                    </div>
                                                </label>
                                                <div class="input-div">
                                                    <input type="text" placeholder="Video link">
                                                </div>
                                            </div>
                                            <div class="profile-detail border-radius-last-child border-radius">
                                                <label for="">
                                                    <div class="profile-title">
                                                        <h3>Vimeo Video <i class="fa-solid fa-question"></i></h3>
                                                    </div>
                                                </label>
                                                <div class="input-div">
                                                    <input type="text" placeholder="Video link">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-chart-area">
                                        <div class="chrt-hd-area">
                                            <div class="profile-pg-hd">
                                                <h3>Facilities</h3>
                                            </div>
                                        </div>
                                        <div class="profile-data-area">
                                            <div class="profile-detail">
                                                <label for="">
                                                    <div class="profile-title">
                                                        <h3>Activities</h3>
                                                    </div>
                                                </label>
                                                <div class="input-div">
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Arts And Culture" id="arts-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/arts-and-culture.png') }}" alt="" srcset="">
                                                            <label for="arts-id">Arts And Culture</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Birding" id="Birding-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/birding.png') }}" alt="" srcset="">
                                                            <label for="Birding-id">Birding</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Boat Rental" id="Boat-Rental">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/boat-rental.png') }}" alt="" srcset="">
                                                            <label for="Boat-Rental">Boat Rental</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Casting Instructorr" id="casting">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/boat-rental.png') }}" alt="" srcset="">
                                                            <labe for="casting">Casting Instructorr</labe>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Fly fishing guide" id="Fly-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/fly-fishing-guide.png') }}" alt="" srcset="">
                                                            <label for="Fly-id">Fly fishing guide</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Food" id="Foodid">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/food.png') }}" alt="" srcset="">
                                                            <label for="Foodid">Food</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Golf" id="golf-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/golf.png') }}" alt="" srcset="">
                                                            <label for="golf-id">Golf</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Hiking" id="hiking-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/hiking.png') }}" alt="" srcset="">
                                                            <label for="hiking-id">Hiking</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Horseback  Riding" id="horseback">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/horse-riding.png') }}" alt="" srcset="">
                                                            <label for="horseback">Horseback Riding</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="hunting" id="hunting-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/hunting.png') }}" alt="" srcset="">
                                                            <label for="hunting-id">Hunting</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Kayaking" id="Kayaking-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/kayak.png') }}" alt="" srcset="">
                                                            <label for="Kayaking-id">Kayaking</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Mountain Biking" id="mountain-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/mountain-biking.png') }}" alt="" srcset="">
                                                            <label for="mountain-id">Mountain Biking</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="National Parks Visits" id="National-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/national-parks-visits.png') }}" alt="" srcset="">
                                                            <label for="National-id">National Parks Visits</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Sailing" id="Sailing-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                            <label for="Sailing-id">Sailing</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Scuba diving" id="Scuba-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                            <label for="Scuba-id">Scuba diving</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Sighseeing" id="Sighseeing-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                            <label for="Sighseeing-id">Sighseeing</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Snorkeling" id="Snorkeling-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                            <label for="Snorkeling-id">Snorkeling</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="White Water rafting" id="white-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                            <label for="white-id">White Water rafting</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Windsurfing" id="Windsurfing-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                            <label for="Windsurfing-id">Windsurfing</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-detail">
                                                <label for="">
                                                    <div class="profile-title">
                                                        <h3>Food & Drink</h3>
                                                    </div>
                                                </label>
                                                <div class="input-div">
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Chef Cuisine" id="Chef">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/chef-cuisine.png') }}" alt="" srcset="">
                                                            <label for="Chef">Chef Cuisine</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Gourmet" id="Gourmet">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/gourmet.png') }}" alt="" srcset="">
                                                            <label for="Gourmet">Gourmet</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Home Cooking" id="Home-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/home-cooking.png') }}" alt="" srcset="">
                                                            <label for="Home-id">Home Cooking</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="open Bar" id="open-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/open-bar.png') }}" alt="" srcset="">
                                                            <label for="open-id">Open Bar</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Restaurant with Dining" id="Restaurant">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/restaurant-with-dining.png') }}" alt="" srcset="">
                                                            <label for="Restaurant">Restaurant with Dining </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Special Diet Meals (Upon request) " id="Special">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/special-diet-meals.png') }}" alt="" srcset="">
                                                            <label for="Special">Special Diet Meals (Upon request) </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-detail">
                                                <label for="">
                                                    <div class="profile-title">
                                                        <h3>General</h3>
                                                    </div>
                                                </label>
                                                <div class="input-div">
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="24 Hour Assistance" id="Assistance">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/24-hours.png') }}" alt="" srcset="">
                                                            <label for="Assistance">24 Hour Assistance</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Air Condition" id="Condition">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/air-condition.png') }}" alt="" srcset="">
                                                            <label for="Condition">Air Condition</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Baby Sitting" id="Sitting">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/baby-sitting.png') }}" alt="" srcset="">
                                                            <label for="Sitting">Baby Sitting</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Credit Card Payment" id="Payment">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/credit-card-icon.png') }}" alt="" srcset="">
                                                            <label for="Payment">Credit Card Payment</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Ficilities for Disable Guests" id="Ficilities">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/ficilities-for-disable-guests.png') }}" alt="" srcset="">
                                                            <label for="Ficilities">Ficilities for Disable Guests</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Heating" id="Heating">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/heating.png') }}" alt="" srcset="">
                                                            <label for="Heating">Heating</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Laundry Service" id="landry-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/laundry-service.png') }}" alt="" srcset="">
                                                            <label for="landry-id">Laundry Service</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Non-Smoking area (public and private)" id="sad">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/non-smoking-area.png') }}" alt="" srcset="">
                                                            <label for="Non-Smoking">Non-Smoking area (public and private)</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Room Service" id="room-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/room-service.png') }}" alt="" srcset="">
                                                            <label for="room-id">Room Service</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Safety Deposit Box" id="Safety-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/safety-deposit-box.png') }}" alt="" srcset="">
                                                            <label for="Safety-id">Safety Deposit Box</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-detail">
                                                <label for="">
                                                    <div class="profile-title">
                                                        <h3>Health & Wellness</h3>
                                                    </div>
                                                </label>
                                                <div class="input-div">
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Doctor on Call" id="Doctor">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/doctor.png') }}" alt="" srcset="">
                                                            <label for="Doctor">Doctor on Call</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Gym" id="Gym">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/dumbbell.png') }}" alt="" srcset="">
                                                            <label for="Gym">Gym</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Massages" id="Massages">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/body-spa.png') }}" alt="" srcset="">
                                                            <label for="Massages">Massages</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Sauna" id="Sauna">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/sauna.png') }}" alt="" srcset="">
                                                            <label for="Sauna">Sauna</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="SPA" id="SPA">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/spa.png') }}" alt="" srcset="">
                                                            <label for="SPA">SPA</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <img src="{{ asset('assets/admin/images/safety-deposit-box.png') }}" alt="" srcset="">
                                                        <input type="checkbox" name="Swimming" id="Swimming">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/swimming.png') }}" alt="" srcset="">
                                                            <label for="Swimming">Swimming Pool </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Wellness Workshop" id="Wellness">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/wellness.png') }}" alt="" srcset="">
                                                            <label for="Wellness">Wellness Workshop </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Yoga" id="Yoga">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/yoga.png') }}" alt="" srcset="">
                                                            <label for="Yoga">Yoga </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-detail">
                                                <label for="">
                                                    <div class="profile-title">
                                                        <h3>Internet</h3>
                                                    </div>
                                                </label>
                                                <div class="input-div">
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="WiFi" id="WiFi">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/wi-fi.png') }}" alt="" srcset="">
                                                            <label for="WiFi">WiFi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-detail">
                                                <label for="">
                                                    <div class="profile-title">
                                                        <h3>Media & Technology</h3>
                                                    </div>
                                                </label>
                                                <div class="input-div">
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Cellular Coverage" id="Cellular-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/cellular-coverage.png') }}" alt="" srcset="">
                                                            <label for="Cellular-id">Cellular Coverage</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Computer" id="Computer-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/computer.png') }}" alt="" srcset="">
                                                            <label for="Computer-id">Computer</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Satellite Channels" id="Satellite-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/satellite.png') }}" alt="" srcset="">
                                                            <label for="Satellite-id">Satellite Channels</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Telephone" id="Telephone-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/telephone-call.png') }}" alt="" srcset="">
                                                            <label for="Telephone-id">Telephone</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="TV" id="TV-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/tv.png') }}" alt="" srcset="">
                                                            <label for="TV-id">TV</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-detail border-radius-last-child border-radius">
                                                <label for="">
                                                    <div class="profile-title">
                                                        <h3>Pets</h3>
                                                    </div>
                                                </label>
                                                <div class="input-div">
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Pets Allowed" id="pests-allowed">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/pets-allowed.png') }}" alt="" srcset="">
                                                            <label for="pests-allowed">Pets Allowed</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Pets Not Allowed" id="pests-nontallowed">
                                                        <div class="d-flex align-items-center gap-2" c>
                                                            <img src="{{ asset('assets/admin/images/pets-animals.png') }}" alt="" srcset="">
                                                            <label for="pests-nontallowed">Pets Not Allowed</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        </form>

    </main>
@endsection

@push('scripts')
    <!--<script src="https://cdn.tiny.cloud/1/dfpwqzta0shla64s4zi0rqjezy639oqfj9hnk8bwsqr8lu08/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>-->
    <script src="https://cdn.tiny.cloud/1/dfpwqzta0shla64s4zi0rqjezy639oqfj9hnk8bwsqr8lu08/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '.myTextarea'
        });

        $('.googlemap-link').click(function() {
            $('.map-set').addClass('active')
        })
        // document.getElementById('fresh-id').addEventListener('change', function() {
        //     var freshActiveDiv = document.querySelector('.fresh-active');
        //     if (this.checked) {
        //         freshActiveDiv.classList.add('active');
        //     } else {
        //         freshActiveDiv.classList.remove('active');
        //     }
        // });
        // document.getElementById('salt-id').addEventListener('change', function() {
        //     var freshActiveDiv = document.querySelector('.saltwater-active');
        //     if (this.checked) {
        //         freshActiveDiv.classList.add('active');
        //     } else {
        //         freshActiveDiv.classList.remove('active');
        //     }
        // });
    </script>
    <script>
        // let noimage = "./assets/images/update-profile.png') }}";
        let noimage = "{{ asset('assets/admin/images/update-profile.png') }}') }}";

        function readURL(input) {
            console.log(input.files);
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
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            var x = document.getElementsByClassName("step");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("step");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("signUpForm").submit();
                return false;
            }
            showTab(currentTab);
        }

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
        imageInput.addEventListener('change', function(event) {
            if (event.target.files && event.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    showImg.src = e.target.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const multiImagesInput = document.getElementById('galleryimages');
            const imagesBoxes = document.querySelector('.images-boxes');

            multiImagesInput.addEventListener('change', function() {
                const files = this.files;

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const imgBox = document.createElement('div');
                        imgBox.className = 'img-box';

                        const removeBtn = document.createElement('button');
                        removeBtn.className = 'remove-img';
                        removeBtn.innerText = 'X';

                        const image = document.createElement('img');
                        image.src = event.target.result;
                        image.alt = 'Uploaded Image';

                        removeBtn.addEventListener('click', function() {
                            imagesBoxes.removeChild(imgBox); // Casties or inns or Hotel or Homes or Mountain Huts
                        });

                        imgBox.appendChild(removeBtn);
                        imgBox.appendChild(image);
                        imagesBoxes.appendChild(imgBox);
                    };

                    reader.readAsDataURL(file);
                }
            });
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });

        function validateForm() {
            const requiredFields = document.querySelectorAll('#signUpForm [required]');
            for (let field of requiredFields) {
                if (!field.value.trim()) {
                    alert('Please fill in all required fields.');
                    return false;
                }
            }
            return true;
        }
    </script>
@endpush
