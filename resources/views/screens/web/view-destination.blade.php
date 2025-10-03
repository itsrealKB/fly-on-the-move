@extends('layouts.web.app')

@push('styles')

@endpush

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-7">
                        <div class="view-page-img">
                            <img class="img-fluid" src="{{ asset('assets/web/images/destination-img-1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="destination-imgs-area">
                            <div class="dest-change-img">
                                <img src="{{ asset('assets/web/images/destination-img-2.png') }}" alt="">
                            </div>
                            <div class="dest-change-img">
                                <img src="{{ asset('assets/web/images/destination-img-3.png') }}" alt="">
                            </div>
                            <div class="dest-change-img">
                                <img src="{{ asset('assets/web/images/destination-img-4.png') }}" alt="">
                            </div>
                            <div class="dest-change-img">
                                <img src="{{ asset('assets/web/images/destination-img-5.png') }}" alt="">
                            </div>
                            <div class="dest-change-img">
                                <img src="{{ asset('assets/web/images/destination-img-6.png') }}" alt="">
                            </div>
                            <div class="dest-change-img">
                                <img src="{{ asset('assets/web/images/destination-img-7.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="view-page-title">
                            <h2>Quemquemtreu Lodge</h2>
                            <span>Lodge - Freshwater, USA, New York</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="view-tab-area">
                            <div class="view-tab-btn">
                                <button class="view-arrival active" data-tab-target="#Offer"><i
                                        class="fa-solid fa-tag"></i>Offer & Package</button>
                            </div>
                            <div class="view-tab-btn">
                                <button class="view-arrival" data-tab-target="#General"><i
                                        class="fa-solid fa-circle-info"></i>General Description</button>
                            </div>
                            <div class="view-tab-btn">
                                <button class="view-arrival" data-tab-target="#Facilities"><i
                                        class="fa-regular fa-compass"></i>Facilities</button>
                            </div>
                            <div class="view-tab-btn">
                                <button class="view-arrival" data-tab-target="#Pre"><i
                                        class="fa-solid fa-plane-departure"></i>Pre Trip Information</button>
                            </div>
                            <div class="view-tab-btn">
                                <button class="view-arrival" data-tab-target="#Fishing"><i
                                        class="fa-solid fa-fish"></i>Fishing</button>
                            </div>
                            <div class="view-tab-btn">
                                <button class="view-arrival" data-tab-target="#Location"> <i
                                        class="fa-solid fa-location-dot"></i>Location</button>
                            </div>
                            <div class="view-tab-btn">
                                <button class="view-arrival" data-tab-target="#Video"><i
                                        class="fa-solid fa-video"></i>Video</button>
                            </div>
                            <div class="view-tab-btn">
                                <button class="view-arrival" data-tab-target="#FAQ"><i
                                        class="fa-regular fa-comments"></i>FAQ</button>
                            </div>
                            <div class="people-looking">
                                <button><span>0</span>other people looking right now</button>
                            </div>
                            <div class="fly-search-area">
                                <div class="f-search-title">
                                    <h2>Search Flights</h2>
                                </div>
                                <div class="powerd-logo">
                                    <img class="img-fluid" src="{{ asset('assets/web/images/sky-scanner.png') }}" alt="">
                                </div>
                                <div class="fly-from-input">
                                    <p>From</p>
                                    <input type="text">
                                </div>
                                <div class="fly-from-input">
                                    <p>To</p>
                                    <input type="text">
                                </div>
                                <div class="fly-return-radio-area">
                                    <div class="fly-radio">
                                        <input type="radio" id="css" name="fav_language" value="CSS">
                                        <label for="css">Return</label><br>
                                    </div>
                                    <div class="fly-radio">
                                        <input type="radio" id="One Way" name="fav_language" value="CSS">
                                        <label for="One Way">One Way</label><br>
                                    </div>
                                </div>
                                <div class="fly-departure-date-area">
                                    <div class="fly-from-input">
                                        <p>Depart</p>
                                        <input type="date">
                                    </div>
                                    <div class="fly-from-input">
                                        <p>One Way</p>
                                        <input type="date">
                                    </div>
                                </div>
                                <div class="fly-search-again">
                                    <button>Search Again<i class="fa-solid fa-plane-departure"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-sections active" id="Offer" data-tab-content>
                            <div class="view-section-inner-tab-btn">
                                <button class="view-arrival-2 active" data-view-target="#Date">Date & Duration</button>
                                <button class="view-arrival-2 " data-view-target="#Package">Package Description</button>
                                <button class="view-arrival-2 " data-view-target="#Itinenary">Itinenary</button>
                            </div>
                            <div id="Date" data-view-content class="inner-tab-chnage active">
                                <div class="view-detail">
                                    <p>Lodge - Freshwater, USA, New York</p>
                                    <p>October 05 - October 31, 2023</p>
                                    <p>Nights 26 / Fishing Days 26</p>
                                    <span>Ends in 20 days</span>
                                </div>
                                <div class="view-inner-hd">
                                    <h1>Double Room with one Double Bed - Standard</h1>
                                    <p class="view-offer-percent">20% Off</p>
                                </div>
                                <div class="fly-img-detail-area">
                                    <div class="fly-img">
                                        <input id="upload-profile-2" type="file" accept="image/*"
                                            onchange="readROUTE(this)" />
                                        <label for="upload-profile-2"><img id="img-preview-2" onclick="editPopup()"
                                                src="{{ asset('assets/web/images/fly-img.png') }}" alt=""> </label>
                                    </div>
                                    <div class="fly-client-detail-area">
                                        <div class="fly-client-detail">
                                            <h2>Quantity</h2>
                                            <span>1</span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Min guest</h2>
                                            <span><i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Max guest</h2>
                                            <span><i class="fa-solid fa-user"></i> <i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Price per person from</h2>
                                            <span>$274.56</span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Full Price</h2>
                                            <span>$312.00</span>
                                        </div>
                                        <div class="conform-time-fly">
                                            <p>Confirmation within 24 hours</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fly-include">
                                    <div class="include-hd">
                                        <h1>Included</h1>
                                        <div class="include-li">
                                            <span> • Accommodation</span>
                                            <span> • All Meals</span>
                                            <span> • Tackle & Flies</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fly-include">
                                    <div class="include-hd">
                                        <h1>Excluded</h1>
                                        <div class="include-li">
                                            <span> • Gratuities for Guides & Staff</span>
                                            <span> • Guide Service</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fly-include">
                                    <div class="include-hd">
                                        <h1>Species</h1>
                                        <div class="include-li">
                                            <span> • Rainbow trout</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="Package" data-view-content class="inner-tab-chnage">
                                <div class="view-detail">
                                    <p>Lodge - Freshwater, USA, New York</p>
                                    <p>October 05 - October 31, 2023</p>
                                    <p>Nights 26 / Fishing Days 26</p>
                                    <span>Ends in 20 days</span>
                                </div>
                                <div class="view-inner-hd">
                                    <h1>Double Room with one Double Bed - Standard</h1>
                                    <p class="view-offer-percent">20% Off</p>
                                </div>
                                <div class="fly-img-detail-area">
                                    <div class="fly-img">
                                        <input id="upload-profile-2" type="file" accept="image/*"
                                            onchange="readROUTE(this)" />
                                        <label for="upload-profile-2"><img id="img-preview-2" onclick="editPopup()"
                                                src="{{ asset('assets/web/images/fly-img.png') }}" alt=""> </label>
                                    </div>
                                    <div class="fly-client-detail-area">
                                        <div class="fly-client-detail">
                                            <h2>Quantity</h2>
                                            <span>1</span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Min guest</h2>
                                            <span><i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Max guest</h2>
                                            <span><i class="fa-solid fa-user"></i> <i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Price per person from</h2>
                                            <span>$274.56</span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Full Price</h2>
                                            <span>$312.00</span>
                                        </div>
                                        <div class="conform-time-fly">
                                            <p>Confirmation within 24 hours</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fly-include">
                                    <div class="include-hd">
                                        <h1>Included</h1>
                                        <div class="include-li">
                                            <span> • Accommodation</span>
                                            <span> • All Meals</span>
                                            <span> • Tackle & Flies</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fly-include">
                                    <div class="include-hd">
                                        <h1>Excluded</h1>
                                        <div class="include-li">
                                            <span> • Gratuities for Guides & Staff</span>
                                            <span> • Guide Service</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fly-include">
                                    <div class="include-hd">
                                        <h1>Species</h1>
                                        <div class="include-li">
                                            <span> • Rainbow trout</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Itinenary" data-view-content class="inner-tab-chnage">
                                <div class="view-detail">
                                    <p>Lodge - Freshwater, USA, New York</p>
                                    <p>October 05 - October 31, 2023</p>
                                    <p>Nights 26 / Fishing Days 26</p>
                                    <span>Ends in 20 days</span>
                                </div>
                                <div class="view-inner-hd">
                                    <h1>Double Room with one Double Bed - Standard</h1>
                                    <p class="view-offer-percent">20% Off</p>
                                </div>
                                <div class="fly-img-detail-area">
                                    <div class="fly-img">
                                        <input id="upload-profile-2" type="file" accept="image/*"
                                            onchange="readROUTE(this)" />
                                        <label for="upload-profile-2"><img id="img-preview-2" onclick="editPopup()"
                                                src="{{ asset('assets/web/images/fly-img.png') }}" alt=""> </label>
                                    </div>
                                    <div class="fly-client-detail-area">
                                        <div class="fly-client-detail">
                                            <h2>Quantity</h2>
                                            <span>1</span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Min guest</h2>
                                            <span><i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Max guest</h2>
                                            <span><i class="fa-solid fa-user"></i> <i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Price per person from</h2>
                                            <span>$274.56</span>
                                        </div>
                                        <div class="fly-client-detail">
                                            <h2>Full Price</h2>
                                            <span>$312.00</span>
                                        </div>
                                        <div class="conform-time-fly">
                                            <p>Confirmation within 24 hours</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fly-include">
                                    <div class="include-hd">
                                        <h1>Included</h1>
                                        <div class="include-li">
                                            <span> • Accommodation</span>
                                            <span> • All Meals</span>
                                            <span> • Tackle & Flies</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fly-include">
                                    <div class="include-hd">
                                        <h1>Excluded</h1>
                                        <div class="include-li">
                                            <span> • Gratuities for Guides & Staff</span>
                                            <span> • Guide Service</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fly-include">
                                    <div class="include-hd">
                                        <h1>Species</h1>
                                        <div class="include-li">
                                            <span> • Rainbow trout</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end deal-bookbtn">
                                <button class="book-flight">Book Now</button>
                            </div>
                        </div>
                        <div class="tab-sections" id="General" data-tab-content>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>General Description</h1>
                                    <div class="include-li-dest">
                                        <p>The estancia Quemquemtreu headquarters are an hour and twenty minutes away from
                                            Chapelco airport, located between the cities of Junín and San Martin de los
                                            Andes in the province of Neuquén. It is also 3 hours away from the city of San
                                            Carlos de Bariloche.</p>
                                        <p>The road to Quemquemtreu winds through the hills that mark the transition from
                                            the arid Patagonia steppe and the Andes mountain range. Placed at the foot of
                                            mount Pailacura this old cattle ranch nests its name from the Quemquemtreu
                                            stream which flows through the property.</p>
                                        <p>Estancia Quemquemtreu is a unique environment, where guests will enjoy friendly,
                                            personalized attention and every comfort during an unforgettable stay.</p>
                                        <p>It is flanked by the Collón Cura and Caleufu rivers, two of the best mountain
                                            waterways for fly fishing and crossed by the Quemquemtreu stream, excellent for
                                            dry flies early in the season. The Quemquemtreu waters flow into the Collón
                                            Cura, one of the most famous Patagonian rivers, which arises from the confluence
                                            of the Aluminé and the Chimehuín rivers. The water is cold and crystal.
                                            Quemquemtreu ranch has lots of wild life, guanacos, wild boar, red deer and
                                            birds, and plentiful large trout are seen regularly.</p>
                                        <p>Fishing season goes from November until the end of April.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Capacity</h1>
                                    <div class="include-li-dest">
                                        <p>12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Food and drink</h1>
                                    <div class="include-li-dest">
                                        <p>Our meals are very simple, lots of vegetables from are own garden with beef or
                                            chicken. Home made pasta is served as well one night.</p>
                                        <p>We try to have an "asado", Argentine barbecue, for every guest weather permitting
                                            and open bar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Spoken Languages</h1>
                                    <div class="include-li">
                                        <span> • English</span>
                                        <span> • Spanish</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-sections" id="Facilities" data-tab-content>
                            <div class="view-section-inner-tab-btn">
                                <button class="">Date & Duration</button>
                                <button class="">Package Description</button>
                                <button class="">Itinenary</button>
                            </div>
                            <div class="view-detail">
                                <p>Lodge - Freshwater, USA, New York</p>
                                <p>October 05 - October 31, 2023</p>
                                <p>Nights 26 / Fishing Days 26</p>
                                <span>Ends in 20 days</span>
                            </div>
                            <div class="view-inner-hd">
                                <h1>Double Room with one Double Bed - Standard</h1>
                                <p class="view-offer-percent">20% Off</p>
                            </div>
                            <div class="fly-img-detail-area">
                                <div class="fly-img">
                                    <input id="upload-profile-2" type="file" accept="image/*" onchange="readROUTE(this)" />
                                    <label for="upload-profile-2"><img id="img-preview-2" onclick="editPopup()"
                                            src="{{ asset('assets/web/images/fly-img.png') }}" alt=""> </label>
                                </div>
                                <div class="fly-client-detail-area">
                                    <div class="fly-client-detail">
                                        <h2>Quantity</h2>
                                        <span>1</span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Min guest</h2>
                                        <span><i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Max guest</h2>
                                        <span><i class="fa-solid fa-user"></i> <i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Price per person from</h2>
                                        <span>$274.56</span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Full Price</h2>
                                        <span>$312.00</span>
                                    </div>
                                    <div class="conform-time-fly">
                                        <p>Confirmation within 24 hours</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Included</h1>
                                    <div class="include-li">
                                        <span> • Accommodation</span>
                                        <span> • All Meals</span>
                                        <span> • Tackle & Flies</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Excluded</h1>
                                    <div class="include-li">
                                        <span> • Gratuities for Guides & Staff</span>
                                        <span> • Guide Service</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Species</h1>
                                    <div class="include-li">
                                        <span> • Rainbow trout</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-sections" id="Pre" data-tab-content>
                            <div class="view-section-inner-tab-btn">
                                <button class="">Date & Duration</button>
                                <button class="">Package Description</button>
                                <button class="">Itinenary</button>
                            </div>
                            <div class="view-detail">
                                <p>Lodge - Freshwater, USA, New York</p>
                                <p>October 05 - October 31, 2023</p>
                                <p>Nights 26 / Fishing Days 26</p>
                                <span>Ends in 20 days</span>
                            </div>
                            <div class="view-inner-hd">
                                <h1>Double Room with one Double Bed - Standard</h1>
                                <p class="view-offer-percent">20% Off</p>
                            </div>
                            <div class="fly-img-detail-area">
                                <div class="fly-img">
                                    <input id="upload-profile-2" type="file" accept="image/*" onchange="readROUTE(this)" />
                                    <label for="upload-profile-2"><img id="img-preview-2" onclick="editPopup()"
                                            src="{{ asset('assets/web/images/fly-img.png') }}" alt=""> </label>
                                </div>
                                <div class="fly-client-detail-area">
                                    <div class="fly-client-detail">
                                        <h2>Quantity</h2>
                                        <span>1</span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Min guest</h2>
                                        <span><i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Max guest</h2>
                                        <span><i class="fa-solid fa-user"></i> <i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Price per person from</h2>
                                        <span>$274.56</span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Full Price</h2>
                                        <span>$312.00</span>
                                    </div>
                                    <div class="conform-time-fly">
                                        <p>Confirmation within 24 hours</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Included</h1>
                                    <div class="include-li">
                                        <span> • Accommodation</span>
                                        <span> • All Meals</span>
                                        <span> • Tackle & Flies</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Excluded</h1>
                                    <div class="include-li">
                                        <span> • Gratuities for Guides & Staff</span>
                                        <span> • Guide Service</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Species</h1>
                                    <div class="include-li">
                                        <span> • Rainbow trout</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-sections" id="Fishing" data-tab-content>
                            <div class="view-section-inner-tab-btn">
                                <button class="">Date & Duration</button>
                                <button class="">Package Description</button>
                                <button class="">Itinenary</button>
                            </div>
                            <div class="view-detail">
                                <p>Lodge - Freshwater, USA, New York</p>
                                <p>October 05 - October 31, 2023</p>
                                <p>Nights 26 / Fishing Days 26</p>
                                <span>Ends in 20 days</span>
                            </div>
                            <div class="view-inner-hd">
                                <h1>Double Room with one Double Bed - Standard</h1>
                                <p class="view-offer-percent">20% Off</p>
                            </div>
                            <div class="fly-img-detail-area">
                                <div class="fly-img">
                                    <input id="upload-profile-2" type="file" accept="image/*" onchange="readROUTE(this)" />
                                    <label for="upload-profile-2"><img id="img-preview-2" onclick="editPopup()"
                                            src="{{ asset('assets/web/images/fly-img.png') }}" alt=""> </label>
                                </div>
                                <div class="fly-client-detail-area">
                                    <div class="fly-client-detail">
                                        <h2>Quantity</h2>
                                        <span>1</span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Min guest</h2>
                                        <span><i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Max guest</h2>
                                        <span><i class="fa-solid fa-user"></i> <i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Price per person from</h2>
                                        <span>$274.56</span>
                                    </div>
                                    <div class="fly-client-detail">
                                        <h2>Full Price</h2>
                                        <span>$312.00</span>
                                    </div>
                                    <div class="conform-time-fly">
                                        <p>Confirmation within 24 hours</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Included</h1>
                                    <div class="include-li">
                                        <span> • Accommodation</span>
                                        <span> • All Meals</span>
                                        <span> • Tackle & Flies</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Excluded</h1>
                                    <div class="include-li">
                                        <span> • Gratuities for Guides & Staff</span>
                                        <span> • Guide Service</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fly-include">
                                <div class="include-hd">
                                    <h1>Species</h1>
                                    <div class="include-li">
                                        <span> • Rainbow trout</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="booking-form-main">
            <form action="" class="booking-form">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="book-hotel-hd">Booking Hotel</h3>
                    <button type="button" class="form-booking-close">
                        X
                    </button>
                </div>
                <div class="booking-field-main">
                    <div>
                        <label for="">Angler Select </label>
                        <select name="" id="">
                            <option value="Angler">Angler</option>
                            <option value="non-Angler">Non-Angler</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Guide Select </label>
                        <select name="" id="">
                            <option value="Single Guide">Single Guide</option>
                            <option value="Shared">Shared</option>
                        </select>
                    </div>
                </div>
                <div class="booking-field-main">
                    <div>
                        <label for="">Type of room </label>
                        <select name="" id="">
                            <option selected>Type of room</option>
                            <option value="one">one</option>
                            <option value="two">two</option>
                            <option value="three">three</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Fishing days </label>
                        <input type="text" placeholder="Fishing days / Accomodation Nights/">
                    </div>
                </div>
                <div class="booking-field-main">
                    <div style="width: 100%;">
                        <label for="">Outcome Cost</label>
                        <input type="number" placeholder="">
                    </div>
                </div>
                <div class="booking-field-main">
                    <div>
                        <label for="">Arrival date</label>
                        <input type="datetime-local" id="datetime1">
                    </div>
                    <div>
                        <label for="">departure date</label>
                        <input type="datetime-local" id="datetime2">
                    </div>
                </div>
                <div class="booking-field-main room-count-area">
                    <div>
                        <label for="">Room</label>
                        <div class="quantity-box d-flex align-items-center gap-2">
                            <button type="button" class="btn-increm" id="roomdecre">-</button>
                            <div class="number-div">
                                <input type="number" id="roominput" name="roominput" min="1" max="100" placeholder="1">
                            </div>
                            <button type="button" class="btn-increm" id="roomincre">+</button>
                        </div>
                    </div>
                    <div>
                        <label for="">Adults</label>
                        <div class="quantity-box d-flex align-items-center gap-2">
                            <button type="button" class="btn-increm" id="adultDecrement">-</button>
                            <div class="number-div">
                                <input type="number" id="adultIQuantity-field" name="adultIQuantity-field" min="0" max="100"
                                    placeholder="0">
                            </div>
                            <button type="button" class="btn-increm" id="adultIncrement">+</button>
                        </div>
                    </div>
                    <div>
                        <label for="">Children</label>
                        <div class="quantity-box d-flex align-items-center gap-2">
                            <button type="button" class="btn-increm" id="childDecrement">-</button>
                            <div class="number-div">
                                <input type="number" id="childquantity-field" name="childquantity-field" min="0" max="100"
                                    placeholder="0">
                            </div>
                            <button type="button" class="btn-increm" id="childIncrement">+</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end deal-bookbtn">
                    <a href="{{ route('payment.detail') }}">Confirm Booking</a>
                </div>
            </form>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        // let noimage = "./assets/images/update-profile.png";
        let noimage = "{{ asset('assets/web/images/update-profile.png') }}";

        function readROUTE(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#img-preview").attr("src", e.target.result);
                    $("#img-preview-2").attr("src", e.target.result);
                    $(".edit-popup-back").removeClass('active');
                };

                reader.readAsDataROUTE(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
        }


        $('.book-flight').click(function () {
            $('.booking-form-main').addClass("active")
        })
        $('.form-booking-close').click(function () {
            $('.booking-form-main').removeClass("active")
        })

    </script>

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
