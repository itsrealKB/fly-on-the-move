<header>
        <div class="container-fluid p-0">
            <div class="top-bar">
                <p>fishing trip burning away at the back of their mind.</p>
            </div>
            <div class="header-second-row">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/web/images/replace-img/new-log2.png') }}" class="header-logo" alt="">
                </a>
                <div class="d-flex align-items-center justify-content-center gap-4">
                    <div>
                        <a href="#">
                            <img src="{{ asset('assets/web/images/header-profile-img.png') }}" class="resize-img" alt="">
                        </a>
                    </div>
                    <div class="hamburger" id="menu-btn">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
            <div class="header-third-row">
                <a href="#" class="operation-btn">List Your Fly Fishing operation</a>
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/web/images/replace-img/new-log2.png') }}" alt="" class="header-logo">
                </a>
                <div class="header-third-right">
                    <a href="#">
                        <img src="{{ asset('assets/web/images/header-profile-img.png') }}" alt="">
                    </a>
                    @guest
                        <a href="{{ route('register') }}" class="operation-btn">Register</a>
                    @endguest
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="operation-btn border-0">Logout</button>
                        </form>
                    @endauth
                </div>
            </div>

            <div class="nav-wrapper">
                <ul>
                    <li class="hd-nav">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button">
                                Deals
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('deals') }}">Day deals</a></li>
                                <li><a class="dropdown-item" href="#">Last minute deals</a></li>
                                <li><a class="dropdown-item" href="#">Largest discount</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hd-nav">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button">
                                DESTINATIONS
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('freshwater') }}">Freshwater </a></li>
                                <li><a class="dropdown-item" href="{{ route('salt.water') }}">Saltwater</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hd-nav">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button">
                                TRAVEL TOOLS
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item dropdown-item-new "
                                        href="https://www.skyscanner.net/?rtn=1&adultsv2=1&referrer=https://www.flyonthemove.com/accomodation/fly-fishing-guide-italy/?offert=309&option=1&associateid=WIG_WBT_01426_00001&referralServiceVersion=meeseeks-referral-service-v1&utm_medium=GSP&utm_source=Free%20Widgets&utm_content=SearchWidget&utm_campaign=Unmonetized%20widgets">Search
                                        Flights – Skyscanner</a></li>
                                <li><a class="dropdown-item dropdown-item-new"
                                        href="https://partner.globalrescue.com/flyfishinglastminute/">The World’s Best
                                        Travel Protection</a></li>
                                <li><a class="dropdown-item" href="{{ route('rental.gear') }}">Rental Gear – Rent
                                        This Rod</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hd-nav">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button">
                                GALLERY
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('gallery') }}">Image Gallery</a></li>
                                <li><a class="dropdown-item" href="{{ route('gallery.video') }}">Video Gallery</a></li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
            <!-- Mobile Nav -->

            <nav class="mob-nav">
                <ul class="ul-parent " id="header-offcanva">
                    <div class="dropdown">
                        <button class="dropdown-toggle text-uppercase" type="button">
                            Deals
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('deals') }}">Day deals</a></li>
                            <li><a class="dropdown-item" href="#">Last minute deals</a></li>
                            <li><a class="dropdown-item" href="#">Largest discount</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button">
                            DESTINATIONS
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('freshwater') }}">Freshwater </a></li>
                            <li><a class="dropdown-item" href="{{ route('salt.water') }}">Saltwater</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button">
                            TRAVEL TOOLS
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://www.skyscanner.net/?rtn=1&adultsv2=1&referrer=https://www.flyonthemove.com/accomodation/fly-fishing-guide-italy/?offert=309&option=1&associateid=WIG_WBT_01426_00001&referralServiceVersion=meeseeks-referral-service-v1&utm_medium=GSP&utm_source=Free%20Widgets&utm_content=SearchWidget&utm_campaign=Unmonetized%20widgets">Search
                                    Flights – Skyscanner</a></li>
                            <li><a class="dropdown-item"
                                    href="https://partner.globalrescue.com/flyfishinglastminute/">The World’s Best
                                    Travel </br> Protection</a></li>
                            <li><a class="dropdown-item" href="{{ route('rental.gear') }}">Rental Gear – Rent
                                    This Rod</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button">
                            GALLERY
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('gallery') }}">Image Gallery</a></li>
                            <li><a class="dropdown-item" href="{{ route('gallery.video') }}">Video Gallery</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">

                        <a href="#" class="operation-btn dropdown-item text-uppercase ">List Your Fly Fishing
                            operation</a>

                    </div>
                    <div class="dropdown">

                        <a href="#" class="operation-btn dropdown-item text-uppercase">Register</a>

                    </div>
                </ul>
            </nav>
        </div>
        <!-- Desktop Nav Right -->
        <nav class="desktop-nav" id="mydrawer">
            <button class="drawer-btn" id="drawerButton">
                <img src="{{ asset('assets/web/images/fav.png') }}" alt="">
            </button>
            <ul class="ul-parent " id="desktopNavbar">
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button">
                        DEALS
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('deals') }}">DAY DEALS</a></li>
                        <li><a class="dropdown-item" href="#">LAST MINUTE DEALS</a></li>
                        <li><a class="dropdown-item" href="#">LARGEST DICOUNT</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button">
                        DESTINATIONS
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('freshwater') }}">FRESHWATER</a></li>
                        <li><a class="dropdown-item" href="{{ route('salt.water') }}">SALTWATER</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button">
                        TRAVEL TOOLS
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item"
                                href="https://www.skyscanner.net/?rtn=1&adultsv2=1&referrer=https://www.flyonthemove.com/accomodation/fly-fishing-guide-italy/?offert=309&option=1&associateid=WIG_WBT_01426_00001&referralServiceVersion=meeseeks-referral-service-v1&utm_medium=GSP&utm_source=Free%20Widgets&utm_content=SearchWidget&utm_campaign=Unmonetized%20widgets"
                                target="_blank">SEARCH
                                FLIGHTS – SKYSCANNER</a></li>
                        <li><a class="dropdown-item" href="https://partner.globalrescue.com/flyfishinglastminute/"
                                target="_blank">THE WORLDS’S BEST
                                TRAVEL </br> PROTECTION</a></li>

                        <li><a class="dropdown-item" href="{{ route('rental.gear') }}">RENTAL GEAR – RENT
                                THIS ROD</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button">
                        GALLERY
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('gallery') }}">IMAGE GALLERY</a></li>
                        <li><a class="dropdown-item" href="{{ route('gallery.video') }}">VIDEO GALLERY</a></li>
                    </ul>
                </div>
                <div class="dropdown">

                    <a href="#" class="text-decoration-none text-white" style="background: none;
                        border: none;
                        color: #fff;
                        font-size: 18px;
                        font-weight: bold;
                        text-align: left;
                        width: 100%;
                        padding: 10px 0;
                        cursor: pointer;
                        transition: color 0.3s ease;">
                        REGISTER
                    </a>

                </div>
            </ul>
        </nav>
    </header>
    <script>
        document.getElementById("menu-btn").addEventListener("click", function () {
            let icon = this.querySelector("i");
            if (icon.classList.contains("fa-bars")) {
                icon.classList.replace("fa-bars", "fa-xmark");
            } else {
                icon.classList.replace("fa-xmark", "fa-bars");
            }
        });


    </script>
