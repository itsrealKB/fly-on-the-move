<footer class="footer">
    <div class="container">
        <div class="news-letter-wrap">
            <div>
                <a href="{{ route('index') }}" class="footer-logo">
                    <img src="{{ asset('assets/web/images/replace-img/new-log2.png') }}" class="header-logo" alt="">
                </a>
                <!-- <p>Enjoy the newest, easiest, online way to shop for <br> the best discounts on amazing fly fishing trips.</p> -->
                <p>Discover the simplest way to book unforgettable <br> fly fishing trips—at unbeatable online discounts.</p>
            </div>
            <div>
                <h3>Newsletter</h3>
                <form action="">
                    <div class="email-input">
                        <input type="email" placeholder="Your Email Address" required>
                        <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 position-relative">
                <h4 class="footer-hd">Contact Us</h4>
                <ul class="footer-nav-spec">
                    <li><img src="{{ asset('assets/web/images/Overlay.png') }}" alt=""> <a href="mailto:info@flyonthemove.com">info@flyonthemove.com</a></li>
                    <!--<li><img src="assets/images/Overlay2.png" alt=""><a href="tel:+1(406)646-2080 ">+1 (406) 646-2080</a></li>-->
                </ul>
                <div class="social-icons-wrap">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-basketball"></i></a>
                </div>
            </div>
            <div class="col-lg-3 position-relative">
                <h4 class="footer-hd">Quick Links</h4>
                <ul class="animate">
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('deals') }}">Deals</a></li>
                    <li><a href="{{ route('destination') }}">Destinations</a></li>
                    <li><a href="#">Travel Tools</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                </ul>
            </div>
            <div class="col-lg-3 position-relative">
                <h4 class="footer-hd">Helpful Links</h4>
                <ul class="animate">
                    <li><a href="#">List Your Fly Fishing Operation</a></li>
                    <li><a href="{{ route('booking.terms.conditions') }}">Booking Terms</a></li>
                    <li><a href="#">Tour Guide</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4 class="footer-hd">Information's</h4>
                <ul class="animate">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="{{ route('terms.conditions') }}">Terms And Conditions</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid bottom-bar">
        <div class="footer-bottom">
            <p>Copyright © <script>document.write(new Date().getFullYear())</script> All Rights Reserved | <b>FLY ON THE MOVE.</b> Designed & Developed by <a href="https://www.webdesignglory.com/" class=""><b>WDG.</b></a></p>
        </div>
    </div>
</footer>

<a id="scroll-top-btn"></a>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{ asset('assets/web/js/index.js') }}"></script>

@stack('scripts')
