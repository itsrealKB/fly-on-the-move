@extends('layouts.web.app')

@push('styles')

@endpush

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="deals-title">
                            <h1>Freshwater Destinations</h1>
                        </div>
                    </div>
                    <div class="col-4  ">
                        <div class="search-filter-area">
                            <div class="filter-hd">
                                <h2>Refine search results</h2>
                            </div>
                            <div class="checkin-area">
                                <div class="check-title">
                                    <p>Where?</p>
                                </div>
                                <div class="check-dates">
                                    <h2>Search location</h2>
                                    <input type="text" name="" id="" >
                                </div>
                            </div>
                            <div class="checkin-area">
                                <div class="check-title">
                                    <p>What?</p>
                                </div>
                                <div class="check-box">
                                    <input type="checkbox" name="" id="fresher" >
                                    <label for="fresher">Freshwater</label>
                                </div>
                                <div class="check-box">
                                    <input type="checkbox" name="" id="Saltwater" >
                                    <label for="Saltwater">Saltwater</label>
                                </div>
                            </div>
                            <div class="checkin-area">
                                <div class="check-title">
                                    <p>Type of Operation </p>
                                </div>
                                <div class="check-box">
                                    <input type="checkbox" name="" id="Guide" >
                                    <label for="Guide">Guide / Capt.</label>
                                </div>
                                <div class="check-box">
                                    <input type="checkbox" name="" id="Hotel" >
                                    <label for="Hotel">Hotel</label>
                                </div>
                                <div class="check-box">
                                    <input type="checkbox" name="" id="Lodge" >
                                    <label for="Lodge">Lodge</label>
                                </div>
                                <div class="check-box">
                                    <input type="checkbox" name="" id="Outfitter" >
                                    <label for="Outfitter">Outfitter</label>
                                </div>
                                <div class="check-box">
                                    <input type="checkbox" name="" id="Travel Agency" >
                                    <label for="Travel Agency">Travel Agency</label>
                                </div>
                            </div>
                            <div class="filter-search-btn">
                                <button>Search Again</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="deals-page-area">
                            <div class="deals-page-details">
                                <div class="deals-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/images/deals-poster-3.png') }}" alt="">
                                </div>
                                <div class="deal-det-area">
                                    <div class="d-title">
                                        <h2>Quemquemtreu Lodge</h2>
                                    </div>
                                    <div class="dest-p-lounge">
                                        <p>Lodge - Freshwater, Argentina</p>
                                        <span>No Offer in this moment</span>
                                    </div>
                                    <div class="deast-para">
                                        <p>Contact us to discover trip specials and prime availability  for this Fishing Operation</p>
                                    </div>
                                    <div class="dest-p-para">
                                        <p>Working and fly fishing ranch</p>
                                    </div>
                                    <div class="deal-bookbtn">
                                        <a href="{{ route('view.destination') }}">Book now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deals-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/images/deals-poster-2.png') }}" alt="">
                                </div>
                                <div class="deal-det-area">
                                    <div class="d-title">
                                        <h2>Quemquemtreu Lodge</h2>
                                    </div>
                                    <div class="dest-p-lounge">
                                        <p>Lodge - Freshwater, Argentina</p>
                                        <span>No Offer in this moment</span>
                                    </div>
                                    <div class="deast-para">
                                        <p>Contact us to discover trip specials and prime availability  for this Fishing Operation</p>
                                    </div>
                                    <div class="dest-p-para">
                                        <p>Working and fly fishing ranch</p>
                                    </div>
                                    <div class="deal-bookbtn">
                                        <a href="{{ route('view.destination') }}">Book now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deals-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/images/deals-poster-4.png') }}" alt="">
                                </div>
                                <div class="deal-det-area">
                                    <div class="d-title">
                                        <h2>Quemquemtreu Lodge</h2>
                                    </div>
                                    <div class="dest-p-lounge">
                                        <p>Lodge - Freshwater, Argentina</p>
                                        <span>No Offer in this moment</span>
                                    </div>
                                    <div class="deast-para">
                                        <p>Contact us to discover trip specials and prime availability  for this Fishing Operation</p>
                                    </div>
                                    <div class="dest-p-para">
                                        <p>Working and fly fishing ranch</p>
                                    </div>
                                    <div class="deal-bookbtn">
                                        <a href="{{ route('view.destination') }}">Book now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deals-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/images/deals-poster-5.png') }}" alt="">
                                </div>
                                <div class="deal-det-area">
                                    <div class="d-title">
                                        <h2>Quemquemtreu Lodge</h2>
                                    </div>
                                    <div class="dest-p-lounge">
                                        <p>Lodge - Freshwater, Argentina</p>
                                        <span>No Offer in this moment</span>
                                    </div>
                                    <div class="deast-para">
                                        <p>Contact us to discover trip specials and prime availability  for this Fishing Operation</p>
                                    </div>
                                    <div class="dest-p-para">
                                        <p>Working and fly fishing ranch</p>
                                    </div>
                                    <div class="deal-bookbtn">
                                        <a href="{{ route('view.destination') }}">Book now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deals-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/images/deals-poster-6.png') }}" alt="">
                                </div>
                                <div class="deal-det-area">
                                    <div class="d-title">
                                        <h2>Quemquemtreu Lodge</h2>
                                    </div>
                                    <div class="dest-p-lounge">
                                        <p>Lodge - Freshwater, Argentina</p>
                                        <span>No Offer in this moment</span>
                                    </div>
                                    <div class="deast-para">
                                        <p>Contact us to discover trip specials and prime availability  for this Fishing Operation</p>
                                    </div>
                                    <div class="dest-p-para">
                                        <p>Working and fly fishing ranch</p>
                                    </div>
                                    <div class="deal-bookbtn">
                                        <a href="{{ route('view.destination') }}">Book now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deals-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/images/deals-poster-7.png') }}" alt="">
                                </div>
                                <div class="deal-det-area">
                                    <div class="d-title">
                                        <h2>Quemquemtreu Lodge</h2>
                                    </div>
                                    <div class="dest-p-lounge">
                                        <p>Lodge - Freshwater, Argentina</p>
                                        <span>No Offer in this moment</span>
                                    </div>
                                    <div class="deast-para">
                                        <p>Contact us to discover trip specials and prime availability  for this Fishing Operation</p>
                                    </div>
                                    <div class="dest-p-para">
                                        <p>Working and fly fishing ranch</p>
                                    </div>
                                    <div class="deal-bookbtn">
                                        <a href="{{ route('view.destination') }}">Book now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deals-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/images/deals-poster-7.png') }}" alt="">
                                </div>
                                <div class="deal-det-area">
                                    <div class="d-title">
                                        <h2>Quemquemtreu Lodge</h2>
                                    </div>
                                    <div class="dest-p-lounge">
                                        <p>Lodge - Freshwater, Argentina</p>
                                        <span>No Offer in this moment</span>
                                    </div>
                                    <div class="deast-para">
                                        <p>Contact us to discover trip specials and prime availability  for this Fishing Operation</p>
                                    </div>
                                    <div class="dest-p-para">
                                        <p>Working and fly fishing ranch</p>
                                    </div>
                                    <div class="deal-bookbtn">
                                        <a href="{{ route('view.destination') }}">Book now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-page-details">
                                <div class="deals-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/images/deals-poster-5.png') }}" alt="">
                                </div>
                                <div class="deal-det-area">
                                    <div class="d-title">
                                        <h2>Quemquemtreu Lodge</h2>
                                    </div>
                                    <div class="dest-p-lounge">
                                        <p>Lodge - Freshwater, Argentina</p>
                                        <span>No Offer in this moment</span>
                                    </div>
                                    <div class="deast-para">
                                        <p>Contact us to discover trip specials and prime availability  for this Fishing Operation</p>
                                    </div>
                                    <div class="dest-p-para">
                                        <p>Working and fly fishing ranch</p>
                                    </div>
                                    <div class="deal-bookbtn">
                                        <a href="{{ route('view.destination') }}">Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')

@endpush
