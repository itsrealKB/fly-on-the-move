@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <main>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="index-hi-msg">
                            <h2>My Booking</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="booking-chart-area">
                            <div class="chrt-hd-area">
                                <div class="chart-area-hd">
                                    <h3>Car Hire Booking Results</h3>
                                </div>
                                <div class="total-book-hd">
                                    <span>Total Bookings (17)</span>
                                </div>
                                </div>
                            <div class="overflow-table">
                                <div class="col-12">
                                    <div class="table-parent">
                                        <table
                                            class="datatables-ajax table-responsive table-stripe table"
                                            id="orders-table"
                                            >
                                            <thead>
                                                <tr class="tbl-head">
                                                <th>Sr.#</th>
                                                <th>Title</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="comm-report-tbl">
                                                <tr class="even active-tr">
                                                    <td class="sorting_1"><strong>1</strong></td>
                                                    <td><strong>Mercedes-Benz EQS SUV</strong></td>
                                                    <td>New York City</td>
                                                    <td>London</td>
                                                    <td>2/6/2020</td>
                                                    <td>$350</td>
                                                    <td class="table-status-pending"> <span>Pending</span> </td>
                                                    <td class="order-view">
                                                        <div class="dropdown table-btn-drop">
                                                            <button class="btn btn-secondary dropdown-click" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu table-menu-drop">
                                                                <li><a class="dropdown-item" onclick="bookingPopup()" href="#"><i class="fa-regular fa-calendar"></i> Reschedule Booking</a></li>
                                                                <li><a class="dropdown-item" onclick="carup()" href="#"><i class="fa-regular fa-eye"></i> View Details</a></li>
                                                                <li><a class="dropdown-item red" href="#">Cancel Reservation</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="odd active-tr">
                                                    <td class="sorting_1"><strong>1</strong></td>
                                                    <td><strong>Mercedes-Benz EQS SUV</strong></td>
                                                    <td>New York City</td>
                                                    <td>London</td>
                                                    <td>2/6/2020</td>
                                                    <td>$350</td>
                                                    <td class="table-status-pending"> <span>Pending</span> </td>
                                                    <td class="order-view">
                                                        <div class="dropdown table-btn-drop">
                                                            <button class="btn btn-secondary dropdown-click" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu table-menu-drop">
                                                                <li><a class="dropdown-item" onclick="bookingPopup()" href="#"><i class="fa-regular fa-calendar"></i> Reschedule Booking</a></li>
                                                                <li><a class="dropdown-item" onclick="carup()" href="#"><i class="fa-regular fa-eye"></i> View Details</a></li>
                                                                <li><a class="dropdown-item red" href="#">Cancel Reservation</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="even active-tr">
                                                    <td class="sorting_1"><strong>1</strong></td>
                                                    <td><strong>Mercedes-Benz EQS SUV</strong></td>
                                                    <td>New York City</td>
                                                    <td>London</td>
                                                    <td>2/6/2020</td>
                                                    <td>$350</td>
                                                    <td class="table-status-reschdule"> <span>Rescheduled</span> </td>
                                                    <td class="order-view">
                                                        <div class="dropdown table-btn-drop">
                                                            <button class="btn btn-secondary dropdown-click" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu table-menu-drop">
                                                                <li><a class="dropdown-item" onclick="bookingPopup()" href="#"><i class="fa-regular fa-calendar"></i> Reschedule Booking</a></li>
                                                                <li><a class="dropdown-item" onclick="carup()" href="#"><i class="fa-regular fa-eye"></i> View Details</a></li>
                                                                <li><a class="dropdown-item red" href="#">Cancel Reservation</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="odd active-tr">
                                                    <td class="sorting_1"><strong>1</strong></td>
                                                    <td><strong>Mercedes-Benz EQS SUV</strong></td>
                                                    <td>New York City</td>
                                                    <td>London</td>
                                                    <td>2/6/2020</td>
                                                    <td>$350</td>
                                                    <td class="table-status-reschdule"> <span>Rescheduled</span> </td>
                                                    <td class="order-view">
                                                        <div class="dropdown table-btn-drop">
                                                            <button class="btn btn-secondary dropdown-click" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu table-menu-drop">
                                                                <li><a class="dropdown-item" onclick="bookingPopup()" href="#"><i class="fa-regular fa-calendar"></i> Reschedule Booking</a></li>
                                                                <li><a class="dropdown-item" onclick="carup()" href="#"><i class="fa-regular fa-eye"></i> View Details</a></li>
                                                                <li><a class="dropdown-item red" href="#">Cancel Reservation</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="even active-tr">
                                                    <td class="sorting_1"><strong>1</strong></td>
                                                    <td><strong>Mercedes-Benz EQS SUV</strong></td>
                                                    <td>New York City</td>
                                                    <td>London</td>
                                                    <td>2/6/2020</td>
                                                    <td>$350</td>
                                                    <td class="table-status-complete"> <span>complete</span> </td>
                                                    <td class="order-view">
                                                        <div class="dropdown table-btn-drop">
                                                            <button class="btn btn-secondary dropdown-click" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu table-menu-drop">
                                                                <li><a class="dropdown-item" onclick="bookingPopup()" href="#"><i class="fa-regular fa-calendar"></i> Reschedule Booking</a></li>
                                                                <li><a class="dropdown-item" onclick="carup()" href="#"><i class="fa-regular fa-eye"></i> View Details</a></li>
                                                                <li><a class="dropdown-item red" href="#">Cancel Reservation</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="odd active-tr">
                                                    <td class="sorting_1"><strong>1</strong></td>
                                                    <td><strong>Mercedes-Benz EQS SUV</strong></td>
                                                    <td>New York City</td>
                                                    <td>London</td>
                                                    <td>2/6/2020</td>
                                                    <td>$350</td>
                                                    <td class="table-status-complete"> <span>complete</span> </td>
                                                    <td class="order-view">
                                                        <div class="dropdown table-btn-drop">
                                                            <button class="btn btn-secondary dropdown-click" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu table-menu-drop">
                                                                <li><a class="dropdown-item" onclick="bookingPopup()" href="#"><i class="fa-regular fa-calendar"></i> Reschedule Booking</a></li>
                                                                <li><a class="dropdown-item" onclick="carup()" href="#"><i class="fa-regular fa-eye"></i> View Details</a></li>
                                                                <li><a class="dropdown-item red" href="#">Cancel Reservation</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="even active-tr">
                                                    <td class="sorting_1"><strong>1</strong></td>
                                                    <td><strong>Mercedes-Benz EQS SUV</strong></td>
                                                    <td>New York City</td>
                                                    <td>London</td>
                                                    <td>2/6/2020</td>
                                                    <td>$350</td>
                                                    <td class="table-status-complete"> <span>complete</span> </td>
                                                    <td class="order-view">
                                                        <div class="dropdown table-btn-drop">
                                                            <button class="btn btn-secondary dropdown-click" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu table-menu-drop">
                                                                <li><a class="dropdown-item" onclick="bookingPopup()" href="#"><i class="fa-regular fa-calendar"></i> Reschedule Booking</a></li>
                                                                <li><a class="dropdown-item" onclick="carup()" href="#"><i class="fa-regular fa-eye"></i> View Details</a></li>
                                                                <li><a class="dropdown-item red" href="#">Cancel Reservation</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="odd active-tr">
                                                    <td class="sorting_1"><strong>1</strong></td>
                                                    <td><strong>Mercedes-Benz EQS SUV</strong></td>
                                                    <td>New York City</td>
                                                    <td>London</td>
                                                    <td>2/6/2020</td>
                                                    <td>$350</td>
                                                    <td class="table-status-pending"> <span>Pending</span> </td>
                                                    <td class="order-view">
                                                        <div class="dropdown table-btn-drop">
                                                            <button class="btn btn-secondary dropdown-click" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu table-menu-drop">
                                                                <li><a class="dropdown-item" onclick="bookingPopup()" href="#"><i class="fa-regular fa-calendar"></i> Reschedule Booking</a></li>
                                                                <li><a class="dropdown-item" onclick="carup()" href="#"><i class="fa-regular fa-eye"></i> View Details</a></li>
                                                                <li><a class="dropdown-item red" href="#">Cancel Reservation</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="even active-tr">
                                                    <td class="sorting_1"><strong>1</strong></td>
                                                    <td><strong>Mercedes-Benz EQS SUV</strong></td>
                                                    <td>New York City</td>
                                                    <td>London</td>
                                                    <td>2/6/2020</td>
                                                    <td>$350</td>
                                                    <td class="table-status-reschdule"> <span>Rescheduled</span> </td>
                                                    <td class="order-view">
                                                        <div class="dropdown table-btn-drop">
                                                            <button class="btn btn-secondary dropdown-click" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu table-menu-drop">
                                                                <li><a class="dropdown-item" onclick="bookingPopup()" href="#"><i class="fa-regular fa-calendar"></i> Reschedule Booking</a></li>
                                                                <li><a class="dropdown-item" onclick="carup()" href="#"><i class="fa-regular fa-eye"></i> View Details</a></li>
                                                                <li><a class="dropdown-item red" href="#">Cancel Reservation</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="odd active-tr">
                                                    <td class="sorting_1"><strong>1</strong></td>
                                                    <td><strong>Mercedes-Benz EQS SUV</strong></td>
                                                    <td>New York City</td>
                                                    <td>London</td>
                                                    <td>2/6/2020</td>
                                                    <td>$350</td>
                                                    <td class="table-status-reschdule"> <span>Rescheduled</span> </td>
                                                    <td class="order-view">
                                                        <div class="dropdown table-btn-drop">
                                                            <button class="btn btn-secondary dropdown-click" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu table-menu-drop">
                                                                <li><a class="dropdown-item" onclick="bookingPopup()" href="#"><i class="fa-regular fa-calendar"></i> Reschedule Booking</a></li>
                                                                <li><a class="dropdown-item" onclick="carup()" href="#"><i class="fa-regular fa-eye"></i> View Details</a></li>
                                                                <li><a class="dropdown-item red" href="#">Cancel Reservation</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                                                    
                </div>
            </div>
        </section>
    </main>

    <div class="rechdule-pop-up-back">
            <div class="reschdule-popup">
                <div class="close-btn-reschdule" onclick="carupClose()" >
                <i  class="fa-solid fa-xmark"></i>
                </div>
                <div class="pop-heading">
                <h3>Booking Details</h3>
                </div>
                <div class="pop-book-details-area">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>Car Name</h3>
                                <span>Mercedes Benz EQS SUV</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>Classification</h3>
                                <span>SUV</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>From</h3>
                                <span>Greenwich Village</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>To</h3>
                                <span>Manhattan</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>Date</h3>
                                <span>30/6/2020</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>Class</h3>
                                <span>Economy</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>Price</h3>
                                <span>$350</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>Status</h3>
                                <span>Pending</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="pop-btns">
                                <div class="pop-reched-btn">
                                    <button>Reschedule Booking</button>
                                </div>
                                <div class="pop-cancel-btn">
                                    <button>Cancel Trip</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
        </div>     
        <div class="booking-pop-up-back">
            <div class="reschdule-popup">
                <div class="close-btn-reschdule" onclick="bookingPopupClose()" >
                <i  class="fa-solid fa-xmark"></i>
                </div>
                <div class="pop-heading">
                <h3>Reschedule Booking</h3>
                </div>
                <div class="pop-book-details-area">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>Car Name</h3>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Car</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>Date</h3>
                                <input type="date">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>From</h3>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select City</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>To</h3>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select City</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>Payment</h3>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Cash</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="details-box">
                                <h3>Class</h3>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Class</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="pop-btns">
                                <div class="pop-reched-btn">
                                    <button>Reschedule</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
    </div>
@endsection


@push('scripts')
    <script>
        $(function () {
            $("#orders-table").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [
                    {
                        data: "Sr",
                    },
                    {
                        data: "Affiliate Partner",
                    },
                    {
                        data: "Sales to date",
                    },
                    {
                        data: "Sales Vol. to Date",
                    },
                    {
                        data: "Sales last 30 Days",
                    },
                    {
                        data: "Sales Vol. last 30 Days",
                    },
                    {
                        data: "Clicks",
                    },
                    {
                        data:"purchase"
                    },
                ],
            });
        });
    </script>
       
    <script>
            const carupWrap = document.querySelector('.rechdule-pop-up-back')
            function carup() {
            carupWrap.classList.add('active')
            }
            
            function carupClose() {
            console.log("hello")
            carupWrap.classList.remove('active')
            }



            const bookingPopupWrap = document.querySelector('.booking-pop-up-back')
            function bookingPopup() {
            bookingPopupWrap.classList.add('active')
            }
            
            function bookingPopupClose() {
            console.log("hello")
            bookingPopupWrap.classList.remove('active')
            }
    </script>
@endpush
