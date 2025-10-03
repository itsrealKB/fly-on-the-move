@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <main>
        <form action="">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9 col-12">
                            <div class="booking-chart-area">
                                <div class="paymnet-det-para">
                                    <p>This info will be used by FFLM to invoice you for the stipulated commission</p>
                                </div>
                                <div class="payment-det-title">
                                    <h2>Commission percentage</h2>
                                    <p>Commission Percentage by default 14%</p>
                                </div>
                                <div class="chrt-hd-area">
                                    <div class="profile-pg-hd">
                                        <h3>Bank account</h3>
                                    </div>
                                </div>

                                <div class="paym-para-s">
                                    <p>We need your <strong>PayPal</strong> or <strong>Bank account</strong> where all
                                        payments should be sent.</p>
                                    <p>n case you have a PayPal account, the payment is made as soon as you confirm the
                                        reservation request.Otherwise, if you choose to be paid using a Bank account,
                                        the payment is made as soon as possible</p>
                                    <p>An invoice will be sent you every month.</p>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="radio-pym-btn ">
                                        <button class="bank-det-btn" type="button">Bank Account</button>
                                    </div>
                                    <div class="paypal-div">
                                        <button class="paypal-btn">
                                            <span>Pay</span>Pal
                                        </button>
                                    </div>
                                </div>
                                <!-- <div class="profile-detail">
                                    <label for="sad3">
                                        <div class="profile-title">
                                            <h3>PayPal Account</h3>
                                        </div>
                                    </label>
                                    <div class="file-de-in">
                                        <input type="text" placeholder="" id="sad3">
                                    </div>
                                </div> -->


                                <div class="profile-data-area">
                                    <div class="profile-detail">
                                        <label for="sad3">
                                            <div class="profile-title">
                                                <h3>Paypal</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad3">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="sad3">
                                            <div class="profile-title">
                                                <h3>Zip Code</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad3">
                                        </div>
                                    </div>
                                    <div class="profile-detail border-radius-last-child">
                                        <label for="sad3">
                                            <div class="profile-title">
                                                <h3>VAT number <span class="ques-icon"><i class="fa-solid fa-info"></i></span> 
                                                <span class="ques-content">can be called different things around the world but it is the tax reference number issued by your local  authority</span>
                                                </h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad3">
                                        </div>
                                    </div>
                                    <div class="edit-profile-button px-0">
                                        <button>Save</button>
                                    </div>
                                </div>

                                <div class="profile-data-area bacnk-detail">
                                    <div class="profile-detail ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Account Holder</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="text" placeholder="Enter first & last name" id="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="profile-detail ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Account Number</h3>
                                            </div>
                                        </label>
                                        <div class="input-div flex-no">
                                            <input type="text" name="card-number" class="cardnumber width"
                                                placeholder="0000-0000-0000-0000" maxlength="16"
                                                oninput="validateCardNumber(this)">
                                        </div>
                                    </div>
                                    <div class="profile-detail border-radius border-radius-last-child ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Name of Bank</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="text" placeholder="" id="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-chart-area area-account-form">
                                <div class="chrt-hd-area">
                                    <div class="profile-pg-hd">
                                        <h3>Invoice Information</h3>
                                        <p>Fields mark with an asterisk(*) are required</p>
                                    </div>
                                </div>
                                <div class="profile-data-area">
                                    <div class="profile-detail ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>First Name</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="text" placeholder="" id="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="profile-detail ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Company Name *</h3>
                                            </div>
                                        </label>
                                        <div class="input-div flex-no">
                                            <input type="text" placeholder="" id="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="profile-detail border-radius-last-child ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Vat Number</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="text" placeholder="" id="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="profile-main-title">
                                        <h1>Commercial Address for invoice</h1>
                                    </div>
                                </div>
                                <div class="profile-data-area">
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Street number *</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Apartment</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Postal code *</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Country *</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>State *</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad">
                                        </div>
                                    </div>
                                    <div class="profile-detail border-radius-last-child">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>City *</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad">
                                        </div>
                                    </div>
                                    <div class="edit-profile-button">
                                        <button type="button" onclick="invoice()">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </main>

    <div class="invoice-pop-up-back">
        <div class="invoice-popup">
            <div class="order-pop-icon">
                <i class="fa-solid fa-list-check"></i>
            </div>
            <div class="invoice-pop-heading">
                <h3>Order ID: 12345</h3>
                <p>Are you sure to Confirm the Payment to the Lodge? </p>
            </div>
            <div class="order-number">
                <span>(Order_id: 21339)</span>
            </div>
            <div class="invoice-details-area">
                <div class="row">
                    <div class="col-12">
                        <div class="print-pdf-btn">
                            <button onclick="invoiceClose()">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
   <script>
        $(".radio-pym-btn button").click(function () {
            $(".area-account-form").toggleClass("active");
        });
    </script>
    <script>
        // let noimage = "./assets/images/update-profile.png";
        let noimage = "{{ asset('assets/admin/images/update-profile.png') }}";

        function readURL(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#img-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
        }
    </script>
    <script>
        const invoiceWrap = document.querySelector('.invoice-pop-up-back')
        
        function invoice() {
            invoiceWrap.classList.add('active')
        }

        function invoiceClose() {
            console.log("hello")
            invoiceWrap.classList.remove('active')
        }
    </script>
@endpush
