
<div class="user-main-area">
    <div class="side-bar-area">
        <div class="side-bar-mob-close-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="side-bar-logo-img">
            <img class="img-fluid" src="{{ asset('assets/admin/images/side-bar-logo.png') }}" alt="">
        </div>
        <nav class="side-nav">
            <ul class="side-nav-btn">
                <li class="s-nav-link active-li dashboard">
                    <a href="{{ route('dashboard') }}">
                        <div class="d-flex gap-1 align-items-center">
                            <div class="red"><i class="fa-solid fa-chart-simple"></i></div>
                            <div class="side-hd">
                                <p>Dashboard</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="s-nav-drop s-nav-link">
                    <div class="side-bar-drop">
                        <div class="s-nav-link-a">
                            <a href="{{ route('fish.operation') }}">
                                <div class="side-hd">
                                    <div class=" blue "><i class="fa-solid fa-fish"></i></div>
                                    <p>Fishing Operation</p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </div>
                        <ul class="chec-li">
                            <li>
                                <a href="{{ route('fish.operation') }}" class="checked-link-side">
                                    Your Fishing Oper...
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('add.fishing') }}" class="checked-link-side">
                                    Add Your Fishing Oper...
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('room.type') }}" class="checked-link-side">
                                    Your Room Types
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('add.room.type') }}" class="checked-link-side">
                                    Add Your Room Type
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('offers.and.deals') }}" class="checked-link-side">
                                    Your Deals
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('add.offers.and.deals') }}" class="checked-link-side">
                                    Add Your Deal
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="s-nav-drop s-nav-link">
                    <div class="side-bar-drop">
                        <div class="s-nav-link-a">
                            <a href="{{ route('my.profile') }}">
                                <div class="side-hd">
                                    <div class=" blue "><i class="fa-regular fa-user"></i></div>
                                    <p>My Profile</p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </div>
                        <ul class="chec-li">
                            <li>

                                <a href="{{ route('my.profile') }}" class="checked-link-side">
                                    Account Info
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact.us') }}" class="checked-link-side">
                                    Contacts
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.payment.detail') }}" class="checked-link-side">
                                    Payment Details
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="s-nav-link active-li">
                    <a href="{{ route('booking') }}" class="s-nav-active">
                        <div class="d-flex gap-1 align-items-center">
                            <div class="yellow"><i class="fa-solid fa-check-to-slot"></i></div>
                            <div class="side-hd">
                                <p>Bookings</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="s-nav-link active-li">
                    <a href="{{ route('invoices') }}" class="s-nav-active">
                        <div class="d-flex gap-1 align-items-center">
                            <div class="pink"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="side-hd">
                                <p>Invoices</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="s-nav-drop s-nav-link">
                    <div class="side-bar-drop">
                        <div class="s-nav-link-a ">
                            <a href="{{ route('my.wallet') }}">
                                <div class="side-hd">
                                    <div class=" blue "><i class="fa-regular fa-user"></i></div>
                                    <p>My Wallets</p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </div>
                        <ul class="chec-li">
                            <li>
                                <a href="{{ route('my.wallet') }}" class="checked-link-side">
                                    Wallet
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('payout') }}" class="checked-link-side">
                                    Withdraw
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="s-nav-link active-li">
                    <a href="{{ route('payment') }}" class="s-nav-active">
                        <div class="d-flex gap-1 align-items-center">
                            <div class="yellow"><i class="fa-solid fa-credit-card"></i></div>
                            <div class="side-hd">
                                <p>Payment Method</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="s-nav-link active-li">
                    <a href="{{ route('coupon') }}" class="s-nav-active">
                        <div class="d-flex gap-1 align-items-center">
                            <div class="green"><i class="fa-solid fa-receipt"></i></div>
                            <div class="side-hd">
                                <p>Coupons</p>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="s-nav-link active-li">
                    <a href="#" class="s-nav-active">
                        <div class="d-flex gap-1 align-items-center">
                            <div class="red"><i class="fa-solid fa-right-from-bracket"></i></div>
                            <div class="side-hd">
                                <p>Logout</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dashboard = document.querySelector('.dashboard');
            dashboard.classList.add('active');
            var currentUrl = window.location.pathname;
            var activeLiElements = document.querySelectorAll('.s-nav-link');
            activeLiElements.forEach(function(activeLi) {
                var anchorHref = activeLi.querySelector('a').getAttribute('href');
                var underLi = activeLi.querySelector('ul');
                if (currentUrl.includes(anchorHref)) {
                    activeLi.classList.add('active');
                    dashboard.classList.remove('active');
                }
                if (underLi) {
                    var anchorActive = underLi.querySelectorAll('li');
                    anchorActive.forEach(function(anchorLi) {
                        var underAnchorHref = anchorLi.querySelector('a').getAttribute('href');
                        var underAnchorHrefActive = anchorLi.querySelector('a')
                        if (currentUrl.includes(underAnchorHref)) {
                            var closestActiveLi = getClosest(anchorLi, '.s-nav-link');
                            if (closestActiveLi) {
                                closestActiveLi.classList.add('active');
                                dashboard.classList.remove('active');
                                underAnchorHrefActive.classList.add('active');
                            }
                        }
                    });
                }
            });

            function getClosest(element, selector) {
                while (element && !element.matches(selector)) {
                    element = element.parentElement;
                }
                return element;
            }
        });

        /* Added By Khalil */

        /* document.addEventListener("DOMContentLoaded", function() {
            var dashboard = document.querySelector('.dashboard');
            dashboard.classList.add('active');
            var currentUrl = window.location.pathname;
            var activeLiElements = document.querySelectorAll('.s-nav-link');
            activeLiElements.forEach(function(activeLi) {
                var anchorHref = activeLi.querySelector('a').getAttribute('href');
                var underLi = activeLi.querySelector('ul');
                if(anchorHref.includes(currentUrl)){
                    dashboard.classList.remove('active');
                    activeLi.classList.add('active');
                }
                if(underLi) {
                    var anchorActive = underLi.querySelectorAll('li');
                    anchorActive.forEach(function(anchorLi) {
                        var underAnchorHref = anchorLi.querySelector('a').getAttribute('href');
                        var underAnchorHrefActive = anchorLi.querySelector('a');
                        if(underAnchorHref.includes(currentUrl)) {
                            var closestActiveLi = getClosest(anchorLi, '.s-nav-link');
                            if(closestActiveLi){
                                dashboard.classList.remove('active');
                                if(currentUrl != '/payment'){
                                    closestActiveLi.classList.add('active');
                                    underAnchorHrefActive.classList.add('active');
                                }
                            }
                        }
                    });
                }
            });

            function getClosest(element, selector) {
                while (element && !element.matches(selector)) {
                    element = element.parentElement;
                }
                return element;
            }
        }); */

    </script>
