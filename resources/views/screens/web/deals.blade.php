@extends('layouts.web.app')

@push('styles')
    <style>
        .deals-page-area .deal-card {
            margin: 0;
            height: 100%;
        }

        .deals-page-area {
            justify-content: space-between;
            gap: 0 !important;
        }

        .deals-page-details {
            width: calc(100% / 3 - 20px);
            max-width: unset !important;
            border-radius: 10px;
            margin-bottom: 40px !important;
        }


        .load-more-wrap {
            display: flex;
            justify-content: center;
        }

        .load-more-wrap a {
            padding: 14px 60px;
            font-size: 18px;
            border: 2px solid black;
            text-decoration: none;
            font-weight: 600;
            color: black;
            font-family: "Outfit", sans-serif;
            border-radius: 50px;
        }

        .load-more-wrap a:hover {
            background-color: #16afaf;
            transition: 1s;
            color: white;
            border-color: #16afaf;
        }

        .search-filter-area-wrapper {
            display: flex;
            align-items: center;
            position: fixed;
            top: 50%;
            left: -444px;
            z-index: 99999;
            transition: 1s !important;
            transform: translateY(-50%);
            width: 530px;
            padding: 0;
            flex-direction: row-reverse;
        }

        .search-filter-area-wrapper.active-wrapper {
            left: 0px !important;
            transition: 1s !important;
        }

        .height-div {
            height: 100vh;
            overflow: auto;
            padding: 22px 0px;
        }

        .darwer-btn2 {
            background-color: #16afaf;
            border: none;
            outline: none;
            height: 69px;
            width: 95px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            padding-left: 30px;
        }

        .darwer-btn2 i {
            font-size: 37px;
            color: white;
        }

        .colunm-area-important {
            justify-content: end !important;
            gap: 20px !important;
        }

        .colunm-area-important .deals-page-details {
            width: 35% !important;
        }

        @media (max-width: 1440px) {
            .colunm-area-important .deals-page-details {
                width: 33% !important;
            }
        }

        @media (max-width: 1366px) {
            .deals-page-area.grid-area .deals-page-details .deal-card .card-hd h3 {
                width: 50%;
            }
        }

        @media (max-width: 1280px) {
            .search-filter-area-wrapper {
                width: 460px;
                left: -376px;
            }

        }

        @media (max-width: 768px) {
            .footer .container {
                max-width: 540px !important;
            }
        }


        @media (max-width: 995px) {
            .container {
                max-width: 720px !important;
            }

            .deals-page-details {
                width: calc(100% / 2 - 10px);
            }
        }

        @media (max-width: 500px) {
            .deals-page-details {
                width: calc(100% / 1 - 10px);
            }

            .search-filter-area-wrapper {
                left: -382px !important;
            }

            .darwer-btn2 {
                padding-left: 0 !important;
            }

            .darwer-btn2 i {
                font-size: 30px;
            }
        }

        .toggle-layout-buttons button {
            background-color: transparent;
            color: black;
            padding: 12px 14px;
            font-size: 25px;
            border-radius: 10px;
            border: 2px solid black;
        }

        .toggle-layout-buttons button.active {
            background-color: #16afaf;
            color: white;
            border-color: rgb(255, 255, 255);
        }

        .deals-page-area.active.list-area {
            justify-content: center;
        }

        .toggle-layout-buttons {
            position: relative;
            z-index: 999999;
        }

        .deals-page-area.deal.list-area.active .deals-page-details {
            width: calc(100% / 1 - 500px);
        }

        .deals-page-area.deal.list-area.active .deals-page-details .deal-card-body {
            flex-grow: 1;
        }

        .deals-page-area.deal.list-area.active .deals-page-details .deal-card {
            display: flex;
        }

        .deals-page-area.deal.list-area.active .deals-page-details .deal-card .ribbon {
            left: calc(-1*var(--f));
            clip-path:
                polygon(calc(100% - var(--r)) 0, 0 0, 0 calc(100% - var(--f)), var(--f) 100%,
                    var(--f) calc(100% - var(--f)), calc(100% - var(--r)) calc(100% - var(--f)),
                    100% calc(50% - var(--f)/2));
            width: 300px;
        }

        .deals-page-area.deal.list-area.active .deals-page-details .deal-card .deal-img {
            width: 415px !important;
            display: flex;
        }

        .deals-page-area.deal.list-area.active.colunm-area-important .deals-page-details {
            width: calc(100% / 1 - 460px) !important;
        }

        .deals-page-area.deal.list-area.active.colunm-area-important .deal-card-body {
            width: 100%;
        }

        .deals-page-area.deal.list-area.active.colunm-area-important .deals-page-details .deal-card .deal-img {
            width: 835px !important;
        }

        @media (max-width: 1280px) {
            .deals-page-area.deal.list-area.active .deals-page-details .deal-card .deal-img {
                width: 310px !important;
            }

            .deals-page-area.deal.list-area.active .deals-page-details .deal-card .ribbon {
                width: 282px !important;
            }

            .deals-page-area.deal.list-area.active .deals-page-details {
                width: calc(100% / 1 - 445px);
            }
        }

        @media (max-width: 1208px) {
            .deals-page-details {
                width: calc(100% / 3 - 8px);
            }

            .deals-page-area.deal.list-area.active.colunm-area-important .deals-page-details {
                width: calc(100% / 1 - 350px) !important;
            }
        }
    </style>

    <style>
        @media (max-width: 1024px) {
            .deals-page-area.active.colunm-area {
                justify-content: space-between !important;
                gap: 0 !important;
            }


            .colunm-area-important .deals-page-details,
            .deals-page-details {
                width: calc(100% / 2 - 12px) !important;
            }
        }

        @media (max-width: 767px) {
            .deals-page-area.active.colunm-area {
                justify-content: center !important;
                gap: 0 !important;
            }

            .colunm-area-important .deals-page-details,
            .deals-page-details {
                width: calc(100% / 1 - 12px) !important;
            }
        }
    </style>
@endpush

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="deals-title">
                            <h1>Our Deals</h1>
                            <p>Single Day Packages</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="toggle-layout-buttons text-end">
                            <button class="layout-btn columnButton" data-target="colunm"><i
                                    class="fa fa-th-large"></i></button>
                            <button class="layout-btn active listButton" data-target="list"><i
                                    class="fa-solid fa-list"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="search-filter-area-wrapper" id="searchWrapper">
                        <button class="darwer-btn2" id="darwerBtn2">
                            <i class="fa-solid fa-arrow-right" id="drawerIcon"></i>
                        </button>
                        <div class="search-filter-area">
                            <div class="height-div">
                                <div class="filter-hd">
                                    <h2>Search Filters</h2>
                                </div>
                                <div class="checkin-area">
                                    <div class="check-title">
                                        <p>When?</p>
                                    </div>
                                    <div class="check-dates">
                                        <h2>Check-in date</h2>
                                        <input type="date" name="" id="">
                                    </div>
                                    <div class="check-dates">
                                        <h2>Check-out date</h2>
                                        <input type="date" name="" id="">
                                    </div>
                                </div>
                                <div class="checkin-area">
                                    <div class="check-title">
                                        <p>Where?</p>
                                    </div>
                                    <div class="check-dates">
                                        <h2>Search location</h2>
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="checkin-area">
                                    <div class="check-title">
                                        <p>What?</p>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="fresher">
                                        <label for="fresher">Freshwater</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="Saltwater">
                                        <label for="Saltwater">Saltwater</label>
                                    </div>
                                </div>
                                <div class="checkin-area">
                                    <div class="check-title">
                                        <p>Number of Guests</p>
                                    </div>
                                    <div class="check-dates">
                                        <input type="number" name="" id="">
                                    </div>
                                </div>
                                <div class="checkin-area">
                                    <div class="check-title">
                                        <p>Price per person (Package Rate)</p>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="0">
                                        <label for="0">0 - 499 $</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="50">
                                        <label for="50">500 - 999 $</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="1000">
                                        <label for="1000">1000 - 1499 $</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="1500">
                                        <label for="1500">1500 - 1999 $</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="2000">
                                        <label for="2000">2000 $+</label>
                                    </div>
                                </div>
                                <div class="checkin-area">
                                    <div class="check-title">
                                        <p>Price per person (Package Rate)</p>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="Guide">
                                        <label for="Guide">Guide / Capt.</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="Hotel">
                                        <label for="Hotel">Hotel</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="Lodge">
                                        <label for="Lodge">Lodge</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="Outfitter">
                                        <label for="Outfitter">Outfitter</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" name="" id="Travel Agency">
                                        <label for="Travel Agency">Travel Agency</label>
                                    </div>
                                </div>
                                <div class="filter-search-btn">
                                    <button>Search Again</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="deals-page-area deal colunm-area" data-value="colunm">
                            <div class="deals-page-details">
                                <div class="deal-card">
                                    <div class="ribbon">DEAL 1: 20% OFF-SAVE $80</div>
                                    <div class="deal-img">
                                        <img src="{{ asset('assets/web/images/deal-card-img1.png') }}" alt="">
                                    </div>
                                    <div class="deal-card-body">
                                        <div class="card-hd">
                                            <h3>Fly Fishing Tuscany</h3>
                                            <p class="line-cls">Ends In: 20 Days <br> <span>Quantity: 3</span></p>
                                        </div>
                                        <div class="deal-date">
                                            <p><i class="fa-solid fa-location-dot"></i> Tuscany, Italy</p>
                                            <p><i class="fa-regular fa-calendar-days"></i> May 01 - Sep 30, 2025</p>
                                        </div>
                                        <div class="quantity-check">
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-2</p>
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt=""
                                                    class="operating-image"> Guide</p>
                                        </div>
                                        <div class="card-desc2 d-flex justify-content-between">
                                            <p><i class="fa-solid fa-water"></i> Freshwater</p>
                                        </div>
                                        <div class="d-flex from mb-4">
                                            <p>From $320 <span class="text-decoration-line-through">$400</span> per person
                                            </p>
                                        </div>
                                        <div class="book-btn-wrap">
                                            <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deal-card">
                                    <div class="ribbon">DEAL 2: 25% OFF-SAVE $618</div>
                                    <div class="deal-img">
                                        <img src="{{ asset('assets/web/images/deal-card-img2.png') }}" alt="">
                                    </div>
                                    <div class="deal-card-body">
                                        <div class="card-hd">
                                            <h3>Cali Fishing Dream</h3>
                                            <p class="line-cls">Ends In: 20 Days <br> <span>Quantity: 2</span></p>
                                        </div>
                                        <div class="deal-date">
                                            <p><i class="fa-solid fa-location-dot"></i> Mexico, Baja California</p>
                                            <p><i class="fa-regular fa-calendar-days"></i> Apr 05 - Apr 11, 2025</p>
                                        </div>
                                        <div class="quantity-check">
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-4</p>
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt=""
                                                    class="operating-image"> Outfitter</p>
                                        </div>
                                        <div class="card-desc2 d-flex justify-content-between">
                                            <p><i class="fa-solid fa-water"></i> Saltwater</p>
                                        </div>
                                        <div class="d-flex from mb-4">
                                            <p>From $2472 <span class="text-decoration-line-through">$3090</span> per person
                                            </p>
                                        </div>
                                        <div class="book-btn-wrap">
                                            <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deal-card">
                                    <div class="ribbon">DEAL 3: 10% OFF-SAVE $891</div>
                                    <div class="deal-img">
                                        <img src="{{ asset('assets/web/images/deal-card-img3.png') }}" alt="">
                                    </div>
                                    <div class="deal-card-body">
                                        <div class="card-hd">
                                            <h3>Fly Fishing Slovenia </h3>
                                            <p class="line-cls">Ends In: 20 Days <br> <span>Quantity: 5</span></p>
                                        </div>
                                        <div class="deal-date">
                                            <p><i class="fa-solid fa-location-dot"></i> SLovenia, Gorenjska</p>
                                            <p><i class="fa-regular fa-calendar-days"></i> Jul 01 - Oct 24, 2025</p>
                                        </div>
                                        <div class="quantity-check">
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-4 </p>
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt=""
                                                    class="operating-image"> Travel Agency</p>
                                        </div>
                                        <div class="card-desc2 d-flex justify-content-between">
                                            <p><i class="fa-solid fa-water"></i> Freshwater</p>
                                            <p><i class="fa-solid fa-moon"></i> Nights 9 / Fishing days 9</p>
                                        </div>
                                        <div class="d-flex from mb-4">
                                            <p>From $8019 <span class="text-decoration-line-through">$8910</span> per person
                                            </p>
                                        </div>
                                        <div class="book-btn-wrap">
                                            <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deal-card">
                                    <div class="ribbon">DEAL 4: 46% OFF-SAVE $2571</div>
                                    <div class="deal-img">
                                        <img src="{{ asset('assets/web/images/deal-card-img4.png') }}" alt="">
                                    </div>
                                    <div class="deal-card-body">
                                        <div class="card-hd">
                                            <h3>Amazonia Anglers</h3>
                                            <p class="line-cls">Ends In: 20 Days <br> <span>Quantity: 4</span></p>
                                        </div>
                                        <div class="deal-date">
                                            <p><i class="fa-solid fa-location-dot"></i> Brazil, Amazonia</p>
                                            <p><i class="fa-regular fa-calendar-days"></i> Sep 10 - Sep 17, 2025</p>
                                        </div>
                                        <div class="quantity-check">
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-6</p>
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt=""
                                                    class="operating-image"> Outfitter</p>
                                        </div>
                                        <div class="card-desc2 d-flex justify-content-between">
                                            <p><i class="fa-solid fa-water"></i> Freshwater</p>
                                            <p><i class="fa-solid fa-moon"></i> Nights 7 / Fishing days 6</p>
                                        </div>
                                        <div class="d-flex from align-items-end gap-1 mb-4">
                                            <p>From $3018 <span class="text-decoration-line-through">$5590</span> per person
                                            </p>
                                        </div>
                                        <div class="book-btn-wrap">
                                            <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deals-page-area deal list-area active" data-value="list">
                            <div class="deals-page-details">
                                <div class="deal-card">
                                    <div class="ribbon">DEAL 1: 20% OFF-SAVE $80</div>
                                    <div class="deal-img">
                                        <img src="{{ asset('assets/web/images/deal-card-img1.png') }}" alt="">
                                    </div>
                                    <div class="deal-card-body">
                                        <div class="card-hd">
                                            <h3>Fly Fishing Tuscanay</h3>
                                            <p class="line-cls">Ends In: 20 Days <br> <span>Quantity: 3</span></p>
                                        </div>
                                        <div class="deal-date">
                                            <p><i class="fa-solid fa-location-dot"></i> Tuscany, Italy</p>
                                            <p><i class="fa-regular fa-calendar-days"></i> May 01 - Sep 30, 2025</p>
                                        </div>
                                        <div class="quantity-check">
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-2</p>
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt=""
                                                    class="operating-image"> Guide</p>
                                        </div>
                                        <div class="card-desc2 d-flex justify-content-between">
                                            <p><i class="fa-solid fa-water"></i> Freshwater</p>
                                        </div>
                                        <div class="d-flex from mb-4">
                                            <p>From $320 <span class="text-decoration-line-through">$400</span> per person
                                            </p>
                                        </div>
                                        <div class="book-btn-wrap">
                                            <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deal-card">
                                    <div class="ribbon">DEAL 2: 25% OFF-SAVE $618</div>
                                    <div class="deal-img">
                                        <img src="{{ asset('assets/web/images/deal-card-img2.png') }}" alt="">
                                    </div>
                                    <div class="deal-card-body">
                                        <div class="card-hd">
                                            <h3>Cali Fishing Dream</h3>
                                            <p class="line-cls">Ends In: 20 Days <br> <span>Quantity: 2</span></p>
                                        </div>
                                        <div class="deal-date">
                                            <p><i class="fa-solid fa-location-dot"></i> Mexico, Baja California</p>
                                            <p><i class="fa-regular fa-calendar-days"></i> Apr 05 - Apr 11, 2025</p>
                                        </div>
                                        <div class="quantity-check">
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-4</p>
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt=""
                                                    class="operating-image"> Outfitter</p>
                                        </div>
                                        <div class="card-desc2 d-flex justify-content-between">
                                            <p><i class="fa-solid fa-water"></i> Saltwater</p>
                                        </div>
                                        <div class="d-flex from mb-4">
                                            <p>From $2472 <span class="text-decoration-line-through">$3090</span> per person
                                            </p>
                                        </div>
                                        <div class="book-btn-wrap">
                                            <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deal-card">
                                    <div class="ribbon">DEAL 3: 10% OFF-SAVE $891</div>
                                    <div class="deal-img">
                                        <img src="{{ asset('assets/web/images/deal-card-img3.png') }}" alt="">
                                    </div>
                                    <div class="deal-card-body">
                                        <div class="card-hd">
                                            <h3>Fly Fishing Slovenia </h3>
                                            <p class="line-cls">Ends In: 20 Days <br> <span>Quantity: 5</span></p>
                                        </div>
                                        <div class="deal-date">
                                            <p><i class="fa-solid fa-location-dot"></i> SLovenia, Gorenjska</p>
                                            <p><i class="fa-regular fa-calendar-days"></i> Jul 01 - Oct 24, 2025</p>
                                        </div>
                                        <div class="quantity-check">
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-4 </p>
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt=""
                                                    class="operating-image"> Travel Agency</p>
                                        </div>
                                        <div class="card-desc2 d-flex justify-content-between">
                                            <p><i class="fa-solid fa-water"></i> Freshwater</p>
                                            <p><i class="fa-solid fa-moon"></i> Nights 9 / Fishing days 9</p>
                                        </div>
                                        <div class="d-flex from mb-4">
                                            <p>From $8019 <span class="text-decoration-line-through">$8910</span> per person
                                            </p>
                                        </div>
                                        <div class="book-btn-wrap">
                                            <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deal-card">
                                    <div class="ribbon">DEAL 4: 46% OFF-SAVE $2571</div>
                                    <div class="deal-img">
                                        <img src="{{ asset('assets/web/images/deal-card-img4.png') }}" alt="">
                                    </div>
                                    <div class="deal-card-body">
                                        <div class="card-hd">
                                            <h3>Amazonia Anglers</h3>
                                            <p class="line-cls">Ends In: 20 Days <br> <span>Quantity: 4</span></p>
                                        </div>
                                        <div class="deal-date">
                                            <p><i class="fa-solid fa-location-dot"></i> Brazil, Amazonia</p>
                                            <p><i class="fa-regular fa-calendar-days"></i> Sep 10 - Sep 17, 2025</p>
                                        </div>
                                        <div class="quantity-check">
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-6</p>
                                            <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt=""
                                                    class="operating-image"> Outfitter</p>
                                        </div>
                                        <div class="card-desc2 d-flex justify-content-between">
                                            <p><i class="fa-solid fa-water"></i> Freshwater</p>
                                            <p><i class="fa-solid fa-moon"></i> Nights 7 / Fishing days 6</p>
                                        </div>
                                        <div class="d-flex from align-items-end gap-1 mb-4">
                                            <p>From $3018 <span class="text-decoration-line-through">$5590</span> per person
                                            </p>
                                        </div>
                                        <div class="book-btn-wrap">
                                            <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="load-more-wrap">
                            <a href="#">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        const searchWrapper = document.getElementById('searchWrapper');
        const columnArea = document.querySelector('.colunm-area');
        const listArea = document.querySelector('.list-area');
        const drawerIcon = document.getElementById('drawerIcon');
        const darwerBtn2 = document.getElementById('darwerBtn2');

        let isOpen = true;

        columnArea.classList.add('colunm-area-important');
        listArea.classList.add('colunm-area-important');
        searchWrapper.classList.add('active-wrapper');
        drawerIcon.classList.remove('fa-arrow-right');
        drawerIcon.classList.add('fa-arrow-left');

        darwerBtn2.addEventListener('click', () => {
            isOpen = !isOpen;

            if (isOpen) {
                columnArea.classList.add('colunm-area-important');
                listArea.classList.add('colunm-area-important');
                searchWrapper.classList.add('active-wrapper');
                drawerIcon.classList.remove('fa-arrow-right');
                drawerIcon.classList.add('fa-arrow-left');
            } else {
                columnArea.classList.remove('colunm-area-important');
                listArea.classList.remove('colunm-area-important');
                searchWrapper.classList.remove('active-wrapper');
                drawerIcon.classList.remove('fa-arrow-left');
                drawerIcon.classList.add('fa-arrow-right');
            }
        });


    </script>

    <script>
        document.querySelectorAll('.layout-btn').forEach(button => {
            button.addEventListener('click', function () {
                const target = this.getAttribute('data-target');

                document.querySelectorAll('.layout-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
                document.querySelectorAll('.deals-page-area').forEach(area => {
                    if (area.getAttribute('data-value') === target) {
                        area.classList.add('active');
                    } else {
                        area.classList.remove('active');
                    }
                });
            });
        });
    </script>

    <script>
        function forceColunmOnlyOnSmallScreens() {
            if (window.innerWidth <= 1024) {
                // Remove active from list button
                const listBtn = document.querySelector('.layout-btn.listButton');
                if (listBtn) listBtn.classList.remove('active');

                // Add active to column button
                const colBtn = document.querySelector('.layout-btn.columnButton');
                if (colBtn) colBtn.classList.add('active');

                // Remove active from list-area
                const listArea = document.querySelector('.deals-page-area.deal.list-area.active');
                if (listArea) listArea.classList.remove('active');

                // Add active to colunm-area
                const colArea = document.querySelector('.deals-page-area.deal.colunm-area');
                if (colArea) colArea.classList.add('active');
            }
        }

        window.addEventListener('load', forceColunmOnlyOnSmallScreens);
        window.addEventListener('resize', forceColunmOnlyOnSmallScreens);
    </script>
@endpush
