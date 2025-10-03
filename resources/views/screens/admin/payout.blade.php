@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
     <main>
        <section class="content ecommerce-page wallet">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <h2 class="wallet-hd">E-Wallet
                        </h2>
                    </div>
                </div>
            </div>
            <section class="E-Wallet">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="center-box-balance center">
                                <p>Total Balance</p>
                                <h1>$32,058.98</h1>
                                <div class="profile-detail wallet justify-content-center">
                                    <div class="file-de-in">
                                        <input type="text" placeholder="Enter Withdrawal Amount" id="sad3">
                                    </div>
                                </div>
                                <div class="edit-profile-button justify-content-center p-0">
                                        <button class="withdra-btn">Withdrawal</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="revenues-boxes pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="box-reven">
                                <h5>UpComing</h5>
                                <h2>$890.30</h2>
                                <div class="btm-prom d-flex">
                                    <div class="left-down-rotate"><i class="fas fa-arrow-left"></i></div>
                                    <h5>0.30%</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="box-reven">
                                <h5>Withdrawal</h5>
                                <h2>$890.30</h2>
                                <div class="btm-prom d-flex">
                                    <div class="left-down-rotate"><i class="fas fa-arrow-left"></i></div>
                                    <h5>0.30%</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="box-reven">
                                <h5>Total Earnings</h5>
                                <h2>$890.30</h2>
                                <div class="btm-prom d-flex">
                                    <div class="left-down-rotate"><i class="fas fa-arrow-left"></i></div>
                                    <h5>0.30%</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="E-Wallet-tabs">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tabs-list">
                                <div class="tab-button active" onclick="showTab(0)"><i class="fa-regular fa-bell"></i>
                                    Activities</div>
                                <div class="tab-button" onclick="showTab(1)"><i class="fa-solid fa-chart-simple"></i>
                                    Statistics</div>
                                <div class="tab-button" onclick="showTab(2)"><i class="fa-regular fa-bell"></i> Summary
                                </div>
                            </div>
                            <div class="table-content-wallet">
                                <div class="tab active-tab" id="tab1">
                                    <div class="tablcolum">
                                        <div class="tableft-side">
                                            <div class="left-icon">
                                                <img src="../../../assets/images/leftdown.svg" alt="">
                                            </div>
                                            <div class="right-text">
                                                <h3>iTunes Gift Card #22338</h3>
                                                <h5>Today, 13:45</h5>
                                            </div>
                                        </div>
                                        <div class="tabright-price">
                                            <div class="minus">-</div>$198.25
                                        </div>
                                    </div>
                                    <div class="tablcolum">
                                        <div class="tableft-side">
                                            <div class="left-icon">
                                                <img src="../../../assets/images/rightup.svg" alt="">
                                            </div>
                                            <div class="right-text">
                                                <h3>iTunes Gift Card #22338</h3>
                                                <h5>Today, 13:45</h5>
                                            </div>
                                        </div>
                                        <div class="tabright-price">
                                            <div class="pluse">-</div>$198.25
                                        </div>
                                    </div>
                                    <div class="tablcolum">
                                        <div class="tableft-side">
                                            <div class="left-icon">
                                                <img src="../../../assets/images/leftdown.svg" alt="">
                                            </div>
                                            <div class="right-text">
                                                <h3>iTunes Gift Card #22338</h3>
                                                <h5>Today, 13:45</h5>
                                            </div>
                                        </div>
                                        <div class="tabright-price">
                                            <div class="minus">-</div>$198.25
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab2">
                                   
                                    <div class="tablcolum">
                                        <div class="tableft-side">
                                            <div class="left-icon">
                                                <img src="../../../assets/images/leftdown.svg" alt="">
                                            </div>
                                            <div class="right-text">
                                                <h3>iTunes Gift Card #22338</h3>
                                                <h5>Today, 13:45</h5>
                                            </div>
                                        </div>
                                        <div class="tabright-price">
                                            <div class="minus">-</div>$198.25
                                        </div>
                                    </div>
                                    <div class="tablcolum">
                                        <div class="tableft-side">
                                            <div class="left-icon">
                                                <img src="../../../assets/images/leftdown.svg" alt="">
                                            </div>
                                            <div class="right-text">
                                                <h3>iTunes Gift Card #22338</h3>
                                                <h5>Today, 13:45</h5>
                                            </div>
                                        </div>
                                        <div class="tabright-price">
                                            <div class="pluse">-</div>$198.25
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab3">
                                    
                                    <div class="tablcolum">
                                        <div class="tableft-side">
                                            <div class="left-icon">
                                                <img src="../../../assets/images/rightup.svg" alt="">
                                            </div>
                                            <div class="right-text">
                                                <h3>iTunes Gift Card #22338</h3>
                                                <h5>Today, 13:45</h5>
                                            </div>
                                        </div>
                                        <div class="tabright-price">
                                            <div class="pluse">-</div>$198.25
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
       
        <div  class="payout-form">
            <button class="remove-payout-form"><i class="fa-solid fa-xmark"></i></button>
            <div class="">
                <h3 class="">Withdraw Request</h3>
                <p>Your Withdrawal Request Has Been Sent</p>
            </div>
        </div>
    {{-- </div> --}}
    
    </main>
@endsection
   
@push('scripts')
    <script>
        function showTab(tabIndex) {
            // Hide all tabs and remove the 'active' class from tab buttons
            var tabs = document.querySelectorAll(".tab");
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove("active-tab");
            }

            var tabButtons = document.querySelectorAll(".tab-button");
            for (var i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove("active");
            }

            // Show the selected tab and set the corresponding tab button as active
            tabs[tabIndex].classList.add("active-tab");
            tabButtons[tabIndex].classList.add("active");
        }
        
        $(".withdra-btn").click(function () {
            $(".payout-form").addClass("active")
        })
        $(".remove-payout-form").click(function () {
            $(".payout-form").removeClass("active")
        })
    </script>
@endpush
