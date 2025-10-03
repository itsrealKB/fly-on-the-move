@extends('layouts.web.app')

@push('styles')

@endpush

@section('content')
    <main>
        <section class="hero-banner">
            <div class="video-area">
                <div>
                    <video src="
                    {{ asset('assets/web/images/banner-video.mp4') }}" autoplay="true" muted="true" loop="true">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="text-center banner-content">
                            <h1 class="banner-hd">Best deals for the best <br> fly fishing destinations.</h1>
                            <a href="{{ route('deals') }}" class="primary-btn">EXPLORE DEALS</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="deal-sec">
            <div class="container-fluid p-0">
                <div class="deal-head">
                    <h2 class="sec-heading">Today’s Deals</h2>
                    <a href="{{ route('deals') }}" class="secondary-btn">ALL DEALS</a>
                </div>
                <div class="slider-btn-wrapper position-relative">

                    <div class="deal-slides-wrap">
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
                                    <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt="" class="operating-image"> Guide</p>
                                </div>
                                <div class="card-desc2 d-flex justify-content-between">
                                    <p><i class="fa-solid fa-water"></i> Freshwater</p>
                                    <!-- <p><i class="fa-solid fa-moon"></i> Nights 9 / Fishing days 9</p> -->
                                </div>
                                <div class="d-flex from mb-4">
                                    <!-- <a>From</a> -->
                                    <p>From $320 <span class="text-decoration-line-through">$400</span> per person</p>
                                    <!-- <a> per person</a> -->
                                </div>
                                <div class="book-btn-wrap">
                                    <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card">
                            <div class="ribbon">DEAL 2: 25% OFF-SAVE $618</div>
                            <div class="deal-img">
                                <img src="{{ asset('assets/web/images/deal-card-img2.png') }}" alt="">
                            </div>
                            <div class="deal-card-body">
                                <div class="card-hd">
                                    <h3>Cali Fishing Dream</h3>
                                    <p class="line-cls">Expires In: 18 Days <br> <span>Quantity: 2</span></p>
                                </div>
                                <div class="deal-date">
                                    <p><i class="fa-solid fa-location-dot"></i> Mexico, Baja California</p>
                                    <p><i class="fa-regular fa-calendar-days"></i> Apr 05 - Apr 11, 2025</p>
                                </div>
                                <div class="quantity-check">
                                    <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-4</p>
                                    <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt="" class="operating-image"> Outfitter</p>
                                </div>
                                <div class="card-desc2 d-flex justify-content-between">
                                    <p><i class="fa-solid fa-water"></i> Saltwater</p>
                                    <!-- <p><i class="fa-solid fa-moon"></i> Nights 9 / Fishing days 9</p> -->
                                </div>
                                <div class="d-flex from mb-4">
                                    <!-- <a>From</a> -->
                                    <p>From $2472 <span class="text-decoration-line-through">$3090</span> per person</p>
                                    <!-- <a> per person</a> -->
                                </div>
                                <div class="book-btn-wrap">
                                    <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card">
                            <div class="ribbon">DEAL 3: 10% OFF-SAVE $891</div>
                            <div class="deal-img">
                                <img src="{{ asset('assets/web/images/deal-card-img3.png') }}" alt="">
                            </div>
                            <div class="deal-card-body">
                                <div class="card-hd">
                                    <h3>Fly Fishing Slovenia </h3>
                                    <p class="line-cls">Expires In: 18 Days <br> <span>Quantity: 5</span></p>
                                </div>
                                <div class="deal-date">
                                    <p><i class="fa-solid fa-location-dot"></i> SLovenia, Gorenjska</p>
                                    <p><i class="fa-regular fa-calendar-days"></i> Jul 01 - Oct 24, 2025</p>
                                </div>
                                <div class="quantity-check">
                                    <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-4 </p>
                                    <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt="" class="operating-image"> Travel Agency</p>
                                </div>
                                <div class="card-desc2 d-flex justify-content-between">
                                    <p><i class="fa-solid fa-water"></i> Freshwater</p>
                                    <p><i class="fa-solid fa-moon"></i> Nights 9 / Fishing days 9</p>
                                </div>
                                <div class="d-flex from mb-4">
                                    <!-- <a>From</a> -->
                                    <p>From $8019 <span class="text-decoration-line-through">$8910</span> per person</p>
                                    <!-- <a>per person</a> -->
                                </div>
                                <div class="book-btn-wrap">
                                    <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card">
                            <div class="ribbon">DEAL 4: 46% OFF-SAVE $2571</div>
                            <div class="deal-img">
                                <img src="{{ asset('assets/web/images/deal-card-img4.png') }}" alt="">
                            </div>
                            <div class="deal-card-body">
                                <div class="card-hd">
                                    <h3>Amazonia Anglers</h3>
                                    <p class="line-cls">Expires In: 18 Days <br> <span>Quantity: 4</span></p>
                                </div>
                                <div class="deal-date">
                                    <p><i class="fa-solid fa-location-dot"></i> Brazil, Amazonia</p>
                                    <p><i class="fa-regular fa-calendar-days"></i> Sep 10 - Sep 17, 2025</p>
                                </div>
                                <div class="quantity-check">
                                    <p class="spec-p"><img src="{{ asset('assets/web/images/quantiti.png') }}" alt="">1-6</p>
                                    <p class="spec-p"><img src="{{ asset('assets/web/images/operation-type.png') }}" alt="" class="operating-image"> Outfitter</p>
                                </div>
                                <div class="card-desc2 d-flex justify-content-between">
                                    <p><i class="fa-solid fa-water"></i> Freshwater</p>
                                    <p><i class="fa-solid fa-moon"></i> Nights 7 / Fishing days 6</p>
                                </div>
                                <div class="d-flex from align-items-end gap-1 mb-4">
                                    <!-- <a>From</a> -->
                                    <p>From $3018 <span class="text-decoration-line-through">$5590</span> per person</p>
                                    <!-- <a>per person</a> -->
                                </div>
                                <div class="book-btn-wrap">
                                    <a href="#" class="book-btn w-100 text-center">VIEW DEAL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="deal-prev-arrow"><i class="fa-solid fa-angle-left"></i></button>
                    <button class="deal-next-arrow"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
            <div class="slogan-slider">
                <div class="slogan-slide">
                    <p>Did you know that you can Fly Fish in Italy?</p>
                </div>
                <div class="slogan-slide">
                    <p>The most authentic Baja experiences and fly fishing packages.</p>
                </div>
                <div class="slogan-slide">
                    <p>A paradise of turquoise rivers, clear lakes, green forests and unspoiled plains.</p>
                </div>
                <div class="slogan-slide">
                    <p>Peacock Bass from one of six floating River Trains fly fishing 10 pristine private rivers.</p>
                </div>
            </div>
        </section>
        <section class="offer-sec">
            <div class="container-fluid">
                <div class="offer-wrap">
                    <div class="offer-wrap-left">
                        <h3>We are committed to offering you the best rates for the best fly fishing destinations.</h3>
                    </div>
                    <div class="offer-wrap-right">
                        <img src="{{ asset('assets/web/images/offer-sec-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="partner-sec">
            <h2 class="sec-heading text-center">Our Partners</h2>
            <div class="container-fluid p-0">
                <div class="partner-slides-wrap">
                    <div class="partner-slide">
                        <div class="video-wrapper">
                            <video width="100%" poster="{{ asset('assets/web/images/video-poster-img2.png') }}" controls>
                                <source src="{{ asset('assets/web/images/partner-video2.webm') }}" type="video/mp4">
                            </video>
                            <div class="overlay">
                                <div class="play-button">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partner-slide">
                        <div class="video-wrapper">
                            <video width="100%" poster="{{ asset('assets/web/images/video-poster-img4.png') }}" controls>
                                <source src="{{ asset('assets/web/images/partner-video4.webm') }}" type="video/mp4">
                            </video>
                            <div class="overlay">
                                <div class="play-button">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partner-slide">
                        <div class="video-wrapper">
                            <video width="100%" poster="{{ asset('assets/web/images/video-poster-img1.png') }}" controls>
                                <source src="{{ asset('assets/web/images/partner-video1.webm') }}" type="video/mp4">
                            </video>
                            <div class="overlay">
                                <div class="play-button">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partner-slide">
                        <div class="video-wrapper">
                            <video width="100%" poster="{{ asset('assets/web/images/video-poster-img3.png') }}" controls>
                                <source src="{{ asset('assets/web/images/partner-video3.webm') }}" type="video/mp4">
                            </video>
                            <div class="overlay">
                                <div class="play-button">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fish-sec">
            <h2 class="sec-heading text-center">Fish On</h2>
            <div class="container-fluid">
                <div class="row row-gap-4">
                    <div class="col-lg-7">
                        <img src="{{ asset('assets/web/images/fish-img1.png') }}" alt="">
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/web/images/fish-img2.png') }}" alt="">
                    </div>
                </div>
                <div class="row row-gap-4">
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/web/images/fish-img3.png') }}" alt="">
                    </div>
                    <div class="col-lg-7 position-relative">
                        <img src="{{ asset('assets/web/images/fish-img4.png') }}" alt="">
                        <img src="{{ asset('assets/web/images/fish-img-after.png') }}" alt="" class="circle-img">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('gallery') }}" class="d-block secondary-btn">View More</a>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')

@endpush
