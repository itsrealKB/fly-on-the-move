@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <main>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="booking-chart-area">
                            <div class="chrt-hd-area">
                                <div class="chart-area-hd">
                                    <h3>Coupons</h3>
                                    <p class="pagination-count">
                                        Showing 1 - 6 of 28 results
                                    </p>
                                </div>
                                </div>
                            <div class="wishlists">
                                <div class="col-lg-4 col-md-6 col-12 responce-copon-card">
                                    <div class="wishlist-prod-area copon-back">
                                        <div class="copon-detail-area">
                                            <div class="copon-details">
                                                <div class="gift-title">
                                                    <h3>GIFT CARD</h3>
                                                    <span class=""><i class="fa-solid fa-gift"></i></span>
                                                </div>
                                                <div class="offer-detail">
                                                    <span>20% OFF</span>
                                                    <p>5446465</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                   
                                <div class="col-lg-4 col-md-6 col-12 responce-copon-card">
                                    <div class="wishlist-prod-area copon-back">
                                        <div class="copon-detail-area">
                                            <div class="copon-details">
                                                <div class="gift-title">
                                                    <h3>GIFT CARD</h3>
                                                    <span class=""><i class="fa-solid fa-gift"></i></span>
                                                </div>
                                                <div class="offer-detail">
                                                    <span>20% OFF</span>
                                                    <p>5446465</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-lg-4 col-md-6 col-12 responce-copon-card">
                                    <div class="wishlist-prod-area copon-back">
                                        <div class="copon-detail-area">
                                            <div class="copon-details">
                                                <div class="gift-title">
                                                    <h3>GIFT CARD</h3>
                                                    <span class=""><i class="fa-solid fa-gift"></i></span>
                                                </div>
                                                <div class="offer-detail">
                                                    <span>20% OFF</span>
                                                    <p>5446465</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-lg-4 col-md-6 col-12 responce-copon-card">
                                    <div class="wishlist-prod-area copon-back">
                                        <div class="copon-detail-area">
                                            <div class="copon-details">
                                                <div class="gift-title">
                                                    <h3>GIFT CARD</h3>
                                                    <span class=""><i class="fa-solid fa-gift"></i></span>
                                                </div>
                                                <div class="offer-detail">
                                                    <span>20% OFF</span>
                                                    <p>5446465</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-lg-4 col-md-6 col-12 responce-copon-card">
                                    <div class="wishlist-prod-area copon-back">
                                        <div class="copon-detail-area">
                                            <div class="copon-details">
                                                <div class="gift-title">
                                                    <h3>GIFT CARD</h3>
                                                    <span class=""><i class="fa-solid fa-gift"></i></span>
                                                </div>
                                                <div class="offer-detail">
                                                    <span>20% OFF</span>
                                                    <p>5446465</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-lg-4 col-md-6 col-12 responce-copon-card">
                                    <div class="wishlist-prod-area copon-back">
                                        <div class="copon-detail-area">
                                            <div class="copon-details">
                                                <div class="gift-title">
                                                    <h3>GIFT CARD</h3>
                                                    <span class=""><i class="fa-solid fa-gift"></i></span>
                                                </div>
                                                <div class="offer-detail">
                                                    <span>20% OFF</span>
                                                    <p>5446465</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div> 
                        <div class="col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination rewie-pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                                                    
                </div>
            </div>
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
                    columns: [
                        {
                            data: "Sr",
                        },
                    ],
                });
            });
    </script>
@endpush
