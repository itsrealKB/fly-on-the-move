@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <main>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="dashboard-chart-area row">
                        <div class="col-xl-3 col-md-3 col-sm-6 col-12">
                            <div class="dash-chart-box">
                                <div class="box">
                                    <div class="chart" data-percent="80" data-scale-color="#ffb400">
                                        <div class="chart-icon">
                                            <i class="fa-solid fa-arrow-right fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-chrt-title">
                                    <p>Total Booking</p>
                                    <span>44</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 col-sm-6 col-12">
                            <div class="dash-chart-box">
                                <div class="box">
                                    <div class="chart" data-percent="70" data-scale-color="#ffb400">
                                        <div class="chart-icon">
                                            <i class="fa-solid fa-arrow-right fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-chrt-title">
                                    <p>Pending</p>
                                    <span>12</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 col-sm-6 col-12">
                            <div class="dash-chart-box">
                                <div class="box">
                                    <div class="chart" data-percent="40" data-scale-color="#ffb400">
                                        <div class="chart-icon">
                                            <i class="fa-solid fa-arrow-right fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-chrt-title">
                                    <p>Completed</p>
                                    <span>25</span>
                                </div>
                            </div>
                        </div>
                        <div class="index-table-hd">
                            <h2>Your Bookings</h2>
                            <p><span><i class="fa-solid fa-check"></i></span>15 New Bookings This Month</p>
                        </div>
                        <div class="overflow-table">
                            <div class="col-12">
                                <div class="table-parent">
                                    <table class="datatables-ajax table-responsive table-stripe table" id="orders-table-3">
                                        <thead>
                                            <tr class="tbl-head">
                                                <th>Order</th>
                                                <th>Operation</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>To Pay Lodge</th>
                                                <th>Commission</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="comm-report-tbl">
                                            <tr class="even active-tr">
                                                <td class="sorting_1">#12345</td>
                                                <td>Fly Fishing Italy</td>
                                                <td>November 11, 2023 12:27</td>
                                                <td class="table-status-complete"> <span>complete</span> </td>
                                                <td>$2.00</td>
                                                <td>$1.86</td>
                                                <td>$0.14 <br>(7%)</td>
                                                <td class="order-view">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd active-tr">
                                                <td class="sorting_1">#12345</td>
                                                <td>Fly Fishing Italy</td>
                                                <td>November 11, 2023 12:27</td>
                                                <td class="table-status-complete"> <span>complete</span> </td>
                                                <td>$2.00</td>
                                                <td>$1.86</td>
                                                <td>$0.14 <br>(7%)</td>
                                                <td class="order-view">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even active-tr">
                                                <td class="sorting_1">#12345</td>
                                                <td>Fly Fishing Italy</td>
                                                <td>November 11, 2023 12:27</td>
                                                <td class="table-status-reschdule"> <span>Completed & Paid</span> </td>
                                                <td>$2.00</td>
                                                <td>$1.86</td>
                                                <td>$0.14 <br>(7%)</td>
                                                <td class="order-view">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd active-tr">
                                                <td class="sorting_1">#12345</td>
                                                <td>Fly Fishing Italy</td>
                                                <td>November 11, 2023 12:27</td>
                                                <td class="table-status-reschdule"> <span>Completed & Paid</span> </td>
                                                <td>$2.00</td>
                                                <td>$1.86</td>
                                                <td>$0.14 <br>(7%)</td>
                                                <td class="order-view">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even active-tr">
                                                <td class="sorting_1">#12345</td>
                                                <td>Fly Fishing Italy</td>
                                                <td>November 11, 2023 12:27</td>
                                                <td class="table-status-complete"> <span>complete</span> </td>
                                                <td>$2.00</td>
                                                <td>$1.86</td>
                                                <td>$0.14 <br>(7%)</td>
                                                <td class="order-view">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd active-tr">
                                                <td class="sorting_1">#12345</td>
                                                <td>Fly Fishing Italy</td>
                                                <td>November 11, 2023 12:27</td>
                                                <td class="table-status-complete"> <span>complete</span> </td>
                                                <td>$2.00</td>
                                                <td>$1.86</td>
                                                <td>$0.14 <br>(7%)</td>
                                                <td class="order-view">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even active-tr">
                                                <td class="sorting_1">#12345</td>
                                                <td>Fly Fishing Italy</td>
                                                <td>November 11, 2023 12:27</td>
                                                <td class="table-status-complete"> <span>complete</span> </td>
                                                <td>$2.00</td>
                                                <td>$1.86</td>
                                                <td>$0.14 <br>(7%)</td>
                                                <td class="order-view">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd active-tr">
                                                <td class="sorting_1">#12345</td>
                                                <td>Fly Fishing Italy</td>
                                                <td>November 11, 2023 12:27</td>
                                                <td class="table-status-complete"> <span>complete</span> </td>
                                                <td>$2.00</td>
                                                <td>$1.86</td>
                                                <td>$0.14 <br>(7%)</td>
                                                <td class="order-view">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even active-tr">
                                                <td class="sorting_1">#12345</td>
                                                <td>Fly Fishing Italy</td>
                                                <td>November 11, 2023 12:27</td>
                                                <td class="table-status-reschdule"> <span>Completed & Paid</span> </td>
                                                <td>$2.00</td>
                                                <td>$1.86</td>
                                                <td>$0.14 <br>(7%)</td>
                                                <td class="order-view">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd active-tr">
                                                <td class="sorting_1">#12345</td>
                                                <td>Fly Fishing Italy</td>
                                                <td>November 11, 2023 12:27</td>
                                                <td class="table-status-reschdule"> <span>Completed & Paid</span> </td>
                                                <td>$2.00</td>
                                                <td>$1.86</td>
                                                <td>$0.14 <br>(7%)</td>
                                                <td class="order-view">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
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
        </section>
    </main>
@endsection


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function() {
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
        $(function() {
            $('.chart').easyPieChart({
                size: 120,
                barColor: "#1aa",
                scaleLength: 0,
                lineWidth: 8,
                trackColor: "#E9ECEF",
                lineCap: "circle",
                animate: 2000,
            });
        });
    </script>
@endpush
