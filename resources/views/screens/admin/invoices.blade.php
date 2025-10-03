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
                            <h2>Invoices Details</h2>
                        </div>
                    </div>
                    <div class="overflow-table">
                        <div class="col-12">
                            <div class="table-parent">
                                <table class="datatables-ajax table-responsive table-stripe table inv-table" id="orders-table">
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
                                                    <button class="btn btn-secondary" type="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                     <button class="btn btn-secondary" type="button">
                                                      <i class="fa-solid fa-file-export"></i>
                                                    </button>
                                                     <button class="btn btn-secondary flag" type="button" onclick="activeRow()">
                                                       <i class="fa-solid fa-flag"></i>
                                                    </button>
                                            </td>
                                            <td class="table-status-complete"> <span>complete</span> </td>
                                        </tr>
                                        <tr class="odd active-tr">
                                            <td class="sorting_1">#12345</td>
                                            <td>Fly Fishing Italy</td>
                                            <td>November 11, 2023 12:27</td>
                                            <td>$2.00</td>
                                            <td>$1.86</td>
                                            <td>$0.14 <br>(7%)</td>
                                             <td class="order-view">
                                                    <button class="btn btn-secondary" type="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                     <button class="btn btn-secondary" type="button">
                                                      <i class="fa-solid fa-file-export"></i>
                                                    </button>
                                                     <button class="btn btn-secondary flag" type="button" onclick="activeRow()">
                                                       <i class="fa-solid fa-flag"></i>
                                                    </button>
                                            </td>
                                            <td class="table-status-complete"> <span>complete</span> </td>
                                        </tr>
                                        <tr class="even active-tr">
                                            <td class="sorting_1">#12345</td>
                                            <td>Fly Fishing Italy</td>
                                            <td>November 11, 2023 12:27</td>
                                            <td>$2.00</td>
                                            <td>$1.86</td>
                                            <td>$0.14 <br>(7%)</td>
                                           <td class="order-view">
                                                    <button class="btn btn-secondary" type="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                     <button class="btn btn-secondary" type="button">
                                                      <i class="fa-solid fa-file-export"></i>
                                                    </button>
                                                     <button class="btn btn-secondary flag" type="button" onclick="activeRow()">
                                                       <i class="fa-solid fa-flag"></i>
                                                    </button>
                                            </td>
                                            <td onclick="invoice()" class="table-status-reschdule"> <span>Completed & Paid</span> </td>
                                        </tr>
                                        <tr class="odd active-tr">
                                            <td class="sorting_1">#12345</td>
                                            <td>Fly Fishing Italy</td>
                                            <td>November 11, 2023 12:27</td>
                                            <td>$2.00</td>
                                            <td>$1.86</td>
                                            <td>$0.14 <br>(7%)</td>
                                             <td class="order-view">
                                                    <button class="btn btn-secondary" type="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                     <button class="btn btn-secondary" type="button">
                                                      <i class="fa-solid fa-file-export"></i>
                                                    </button>
                                                     <button class="btn btn-secondary flag" type="button" onclick="activeRow()">
                                                       <i class="fa-solid fa-flag"></i>
                                                    </button>
                                            </td>
                                            <td onclick="invoice()" class="table-status-reschdule"> <span>Completed & Paid</span> </td>
                                        </tr>
                                        <tr class="even active-tr">
                                            <td class="sorting_1">#12345</td>
                                            <td>Fly Fishing Italy</td>
                                            <td>November 11, 2023 12:27</td>
                                            <td>$2.00</td>
                                            <td>$1.86</td>
                                            <td>$0.14 <br>(7%)</td>
                                             <td class="order-view">
                                                    <button class="btn btn-secondary" type="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                     <button class="btn btn-secondary" type="button">
                                                      <i class="fa-solid fa-file-export"></i>
                                                    </button>
                                                     <button class="btn btn-secondary flag" type="button" onclick="activeRow()">
                                                       <i class="fa-solid fa-flag"></i>
                                                    </button>
                                            </td>
                                            <td class="table-status-complete"> <span>complete</span> </td>
                                        </tr>
                                        <tr class="odd active-tr">
                                            <td class="sorting_1">#12345</td>
                                            <td>Fly Fishing Italy</td>
                                            <td>November 11, 2023 12:27</td>
                                            <td>$2.00</td>
                                            <td>$1.86</td>
                                            <td>$0.14 <br>(7%)</td>
                                            <td class="order-view">
                                                    <button class="btn btn-secondary" type="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                     <button class="btn btn-secondary" type="button">
                                                      <i class="fa-solid fa-file-export"></i>
                                                    </button>
                                                     <button class="btn btn-secondary flag" type="button" onclick="activeRow()">
                                                       <i class="fa-solid fa-flag"></i>
                                                    </button>
                                            </td>
                                            <td class="table-status-complete"> <span>complete</span> </td>
                                        </tr>
                                        <tr class="even active-tr">
                                            <td class="sorting_1">#12345</td>
                                            <td>Fly Fishing Italy</td>
                                            <td>November 11, 2023 12:27</td>
                                            <td>$2.00</td>
                                            <td>$1.86</td>
                                            <td>$0.14 <br>(7%)</td>
                                             <td class="order-view">
                                                    <button class="btn btn-secondary" type="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                     <button class="btn btn-secondary" type="button">
                                                      <i class="fa-solid fa-file-export"></i>
                                                    </button>
                                                     <button class="btn btn-secondary flag" type="button" onclick="activeRow()">
                                                       <i class="fa-solid fa-flag"></i>
                                                    </button>
                                            </td>
                                            <td class="table-status-complete"> <span>complete</span> </td>
                                        </tr>
                                        <tr class="odd active-tr">
                                            <td class="sorting_1">#12345</td>
                                            <td>Fly Fishing Italy</td>
                                            <td>November 11, 2023 12:27</td>
                                            <td>$2.00</td>
                                            <td>$1.86</td>
                                            <td>$0.14 <br>(7%)</td>
                                             <td class="order-view">
                                                    <button class="btn btn-secondary" type="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                     <button class="btn btn-secondary" type="button">
                                                      <i class="fa-solid fa-file-export"></i>
                                                    </button>
                                                     <button class="btn btn-secondary flag" type="button" onclick="activeRow()">
                                                       <i class="fa-solid fa-flag"></i>
                                                    </button>
                                            </td>
                                            <td class="table-status-complete"> <span>complete</span> </td>
                                        </tr>
                                        <tr class="even active-tr">
                                            <td class="sorting_1">#12345</td>
                                            <td>Fly Fishing Italy</td>
                                            <td>November 11, 2023 12:27</td>
                                            <td>$2.00</td>
                                            <td>$1.86</td>
                                            <td>$0.14 <br>(7%)</td>
                                            <td class="order-view">
                                                    <button class="btn btn-secondary" type="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                     <button class="btn btn-secondary" type="button">
                                                      <i class="fa-solid fa-file-export"></i>
                                                    </button>
                                                     <button class="btn btn-secondary flag" type="button" onclick="activeRow()">
                                                       <i class="fa-solid fa-flag"></i>
                                                    </button>
                                            </td>
                                            <td onclick="invoice()" class="table-status-reschdule"> <span>Completed & Paid</span> </td>
                                        </tr>
                                        <tr class="odd active-tr">
                                            <td class="sorting_1">#12345</td>
                                            <td>Fly Fishing Italy</td>
                                            <td>November 11, 2023 12:27</td>
                                            <td>$2.00</td>
                                            <td>$1.86</td>
                                            <td>$0.14 <br>(7%)</td>
                                             <td class="order-view">
                                                    <button class="btn btn-secondary" type="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                     <button class="btn btn-secondary" type="button">
                                                      <i class="fa-solid fa-file-export"></i>
                                                    </button>
                                                     <button class="btn btn-secondary flag" type="button" onclick="activeRow()">
                                                       <i class="fa-solid fa-flag"></i>
                                                    </button>
                                            </td>
                                            <td onclick="invoice()" class="table-status-reschdule"> <span>Completed & Paid</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="invoice-pop-up-back">
        <div class="invoice-popup">
            <div class="close-btn-reschdule" onclick="invoiceClose()">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="invoice-pop-heading">
                <h3>Invoice</h3>
            </div>
            <div class="invoice-details-area">
                <div class="row">
                    <div class="col-12">
                        <div class="invoice-detail">
                            <h3>Billed To:</h3>
                            <div class="bill-detail">
                                <p> John Michael</p>
                                <p>1234 Main</p>
                                <p>Apt. 4B</p>
                                <p>Lipsum, AB 12345</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="invoice-detail">
                            <h3>Payment Method:</h3>
                            <div class="bill-detail">
                                <p>Visa ending **** 1234</p>
                                <p>loremipsum@xyz.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="order-summary-detail-area">
                            <div class="order-summ-hd">
                                <h2>Order Summary</h2>
                            </div>
                            <table>
                                <thead class="pop-tbl">
                                    <tr>
                                        <th width="50px">Sr#</th>
                                        <th width="500px">Title</th>
                                        <th width="100px">Price</th>
                                    </tr>

                                </thead>
                                <tbody class="pop-tbl-tbody">
                                    <tr>
                                        <td>01</td>
                                        <td>Fly Fishing Italy</td>
                                        <td>$350.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="total-order-summry-pop">
                            <strong>Total</strong>
                            <strong>$350.00</strong>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="print-pdf-btn">
                            <button><i class="fa-solid fa-print"></i>Print PDF</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
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
        const invoiceWrap = document.querySelector('.invoice-pop-up-back')

        function invoice() {
            invoiceWrap.classList.add('active')
        }

        function invoiceClose() {
            invoiceWrap.classList.remove('active')
        }

        $(document).ready(function() {
            activeRow();
        });

        function activeRow() {
            $(".btn.btn-secondary.flag").click(function() {
                console.log("click");
                $(this).closest("tr").toggleClass("active-table-row");
            });
        }

    </script>
@endpush
