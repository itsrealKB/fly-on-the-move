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
                            <h2>Your Wallet</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="availble-balance-area">
                            <p>Your available balance:</p>
                            <span>$123.00</span>
                        </div>
                    </div>
                    <div class="col-12">

                        <div class="booking-chart-area">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="chrt-hd-area">
                                        <div class="chart-area-hd">
                                            <h3>Previous Transactions</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 col-12">
                                    <div class="">
                                        <div class="edit-profile-button justify-content-end">
                                            <a href="{{ route('payout') }}" class="add-payout"> Check Withdraw</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="overflow-table">
                                <div class="col-12">
                                    <div class="table-parent">
                                        <table class="datatables-ajax table-responsive table-stripe table"
                                            id="orders-table">
                                            <thead>
                                                <tr class="tbl-head">
                                                    <th>Order</th>
                                                    <th>Operation</th>
                                                    <th>Date</th>
                                                    <th>Total</th>
                                                    <th>To Pay Lodge</th>
                                                    <th>Commission</th>
                                                    <th>Actions</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="comm-report-tbl">
                                                <tr class="even active-tr">
                                                    <td class="sorting_1">#12345</td>
                                                    <td>Fly Fishing Italy</td>
                                                    <td>November 11, 2023 12:27</td>
                                                    <td>$2.00</td>
                                                    <td>$1.86</td>
                                                    <td>$0.14 <br>(7%)</td>
                                                    <td class="order-view">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="table-status-reschdule"> <span>Completed & Paid</span>
                                                    </td>
                                                </tr>
                                                <tr class="odd active-tr">
                                                    <td class="sorting_1">#12345</td>
                                                    <td>Fly Fishing Italy</td>
                                                    <td>November 11, 2023 12:27</td>
                                                    <td>$2.00</td>
                                                    <td>$1.86</td>
                                                    <td>$0.14 <br>(7%)</td>
                                                    <td class="order-view">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="table-status-reschdule"> <span>Completed & Paid</span>
                                                    </td>
                                                </tr>
                                                <tr class="even active-tr">
                                                    <td class="sorting_1">#12345</td>
                                                    <td>Fly Fishing Italy</td>
                                                    <td>November 11, 2023 12:27</td>
                                                    <td>$2.00</td>
                                                    <td>$1.86</td>
                                                    <td>$0.14 <br>(7%)</td>
                                                    <td class="order-view">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td onclick="invoice()" class="table-status-reschdule">
                                                        <span>Completed & Paid</span>
                                                    </td>
                                                </tr>
                                                <tr class="odd active-tr">
                                                    <td class="sorting_1">#12345</td>
                                                    <td>Fly Fishing Italy</td>
                                                    <td>November 11, 2023 12:27</td>
                                                    <td>$2.00</td>
                                                    <td>$1.86</td>
                                                    <td>$0.14 <br>(7%)</td>
                                                    <td class="order-view">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td onclick="invoice()" class="table-status-reschdule">
                                                        <span>Completed & Paid</span>
                                                    </td>
                                                </tr>
                                                <tr class="even active-tr">
                                                    <td class="sorting_1">#12345</td>
                                                    <td>Fly Fishing Italy</td>
                                                    <td>November 11, 2023 12:27</td>
                                                    <td>$2.00</td>
                                                    <td>$1.86</td>
                                                    <td>$0.14 <br>(7%)</td>
                                                    <td class="order-view">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="table-status-reschdule"> <span>Completed & Paid</span>
                                                    </td>
                                                </tr>
                                                <tr class="odd active-tr">
                                                    <td class="sorting_1">#12345</td>
                                                    <td>Fly Fishing Italy</td>
                                                    <td>November 11, 2023 12:27</td>
                                                    <td>$2.00</td>
                                                    <td>$1.86</td>
                                                    <td>$0.14 <br>(7%)</td>
                                                    <td class="order-view">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="table-status-reschdule"> <span>Completed & Paid</span>
                                                    </td>
                                                </tr>
                                                <tr class="even active-tr">
                                                    <td class="sorting_1">#12345</td>
                                                    <td>Fly Fishing Italy</td>
                                                    <td>November 11, 2023 12:27</td>
                                                    <td>$2.00</td>
                                                    <td>$1.86</td>
                                                    <td>$0.14 <br>(7%)</td>
                                                    <td class="order-view">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="table-status-reschdule"> <span>Completed & Paid</span>
                                                    </td>
                                                </tr>
                                                <tr class="odd active-tr">
                                                    <td class="sorting_1">#12345</td>
                                                    <td>Fly Fishing Italy</td>
                                                    <td>November 11, 2023 12:27</td>
                                                    <td>$2.00</td>
                                                    <td>$1.86</td>
                                                    <td>$0.14 <br>(7%)</td>
                                                    <td class="order-view">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="table-status-reschdule"> <span>Completed & Paid</span>
                                                    </td>
                                                </tr>
                                                <tr class="even active-tr">
                                                    <td class="sorting_1">#12345</td>
                                                    <td>Fly Fishing Italy</td>
                                                    <td>November 11, 2023 12:27</td>
                                                    <td>$2.00</td>
                                                    <td>$1.86</td>
                                                    <td>$0.14 <br>(7%)</td>
                                                    <td class="order-view">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td onclick="invoice()" class="table-status-reschdule">
                                                        <span>Completed & Paid</span>
                                                    </td>
                                                </tr>
                                                <tr class="odd active-tr">
                                                    <td class="sorting_1">#12345</td>
                                                    <td>Fly Fishing Italy</td>
                                                    <td>November 11, 2023 12:27</td>
                                                    <td>$2.00</td>
                                                    <td>$1.86</td>
                                                    <td>$0.14 <br>(7%)</td>
                                                    <td class="order-view">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td onclick="invoice()" class="table-status-reschdule">
                                                        <span>Completed & Paid</span>
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
            <!-- </div> -->
        </section>
    </main>
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
                columns: [{
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
                    data: "purchase"
                },
                ],
            });
        });
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
