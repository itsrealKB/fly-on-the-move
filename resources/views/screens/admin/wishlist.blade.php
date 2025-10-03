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
                            <h2>Wishlist</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="booking-chart-area">
                            <div class="chrt-hd-area">
                                <div class="chart-area-hd">
                                    <h3>Wishlist</h3>
                                    <p class="pagination-count">
                                        Showing 1 - 6 of 28 results
                                    </p>
                                </div>
                            </div>
                            <div class="wishlists">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wishlist-prod-area wish-shadow">
                                        <div class="wishlist-img-area">
                                            <div class="wish-img">
                                                <img src="{{ asset('assets/admin/images/card-img.png') }}" alt="">
                                            </div>
                                            <div class="wish-heart-btn">
                                                <button><i class="fa-solid fa-heart"></i></button>
                                            </div>
                                        </div>
                                        <div class="wish-prod-detail">
                                            <div class="wish-title">
                                                <h3>The Millennium Hilton New York</h3>
                                                <p>124 E Huron St, New york</p>
                                            </div>
                                            <div class="wish-prod-reviews">
                                                <span>4.4/5</span>
                                                <p>Average</p>
                                                <strong class="nmb-of-review">(30 Reviews)</strong>
                                            </div>
                                            <div class="wish-prod-pric-area">
                                                <div class="wish-prod-price">
                                                    <div class="d-flex align-items-center ">
                                                        <p>From</p>
                                                        <span>$88.00</span>
                                                    </div>
                                                    <h1>Per night</h1>
                                                </div>
                                                <div class="prod-wish-see-detail">
                                                    <a href="#">See details<i class="fa-solid fa-chevron-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wishlist-prod-area">
                                        <div class="wishlist-img-area">
                                            <div class="wish-img">
                                                <img src="{{ asset('assets/admin/images/car-wish.png') }}" alt="">
                                            </div>
                                            <div class="wish-heart-btn">
                                                <span>Bestseller</span>
                                                <button><i class="fa-solid fa-heart"></i></button>
                                            </div>
                                        </div>
                                        <div class="wish-prod-detail">
                                            <div class="wish-title">
                                                <p>Compact SUV</p>
                                                <h3>Toyota Corolla or Similar</h3>
                                            </div>
                                            <div class="wish-prod-reviews">
                                                <span>4.4/5</span>
                                                <p>Average</p>
                                                <strong class="nmb-of-review">(30 Reviews)</strong>
                                            </div>
                                            <div class="wish-prod-pric-area">
                                                <div class="wish-prod-price">
                                                    <div class="d-flex align-items-center ">
                                                        <p>From</p>
                                                        <span>$20.00</span>
                                                    </div>
                                                    <h1>Per day</h1>
                                                </div>
                                                <div class="prod-wish-see-detail">
                                                    <a href="#">See details<i class="fa-solid fa-chevron-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wishlist-prod-area wish-shadow">
                                        <div class="wishlist-img-area">
                                            <div class="wish-img">
                                                <img src="{{ asset('assets/admin/images/plane-wish.png') }}" alt="">
                                            </div>
                                            <div class="wish-heart-btn">
                                                <span>Bestseller</span>
                                                <button><i class="fa-solid fa-heart"></i></button>
                                            </div>
                                        </div>
                                        <div class="wish-prod-detail">
                                            <div class="wish-title">
                                                <h3>London to New York City</h3>
                                                <p>New York City Airport</p>
                                            </div>
                                            <div class="wish-prod-reviews">
                                                <span>4.4/5</span>
                                                <p>Average</p>
                                                <strong class="nmb-of-review">(30 Reviews)</strong>
                                            </div>
                                            <div class="wish-prod-pric-area">
                                                <div class="wish-prod-price">
                                                    <div class="d-flex align-items-center ">
                                                        <p>From</p>
                                                        <span>$124.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wishlist-prod-area wish-shadow">
                                        <div class="wishlist-img-area">
                                            <div class="wish-img">
                                                <img src="{{ asset('assets/admin/images/card-img.png') }}" alt="">
                                            </div>
                                            <div class="wish-heart-btn">
                                                <span>Bestseller</span>
                                                <button><i class="fa-solid fa-heart"></i></button>
                                            </div>
                                        </div>
                                        <div class="wish-prod-detail">
                                            <div class="wish-title">
                                                <h3>The Millennium Hilton New York</h3>
                                                <p>124 E Huron St, New york</p>
                                            </div>
                                            <div class="wish-prod-reviews">
                                                <span>4.4/5</span>
                                                <p>Average</p>
                                                <strong class="nmb-of-review">(30 Reviews)</strong>
                                            </div>
                                            <div class="wish-prod-pric-area">
                                                <div class="wish-prod-price">
                                                    <div class="d-flex align-items-center ">
                                                        <p>From</p>
                                                        <span>$88.00</span>
                                                    </div>
                                                    <h1>Per night</h1>
                                                </div>
                                                <div class="prod-wish-see-detail">
                                                    <a href="#">See details<i class="fa-solid fa-chevron-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wishlist-prod-area">
                                        <div class="wishlist-img-area">
                                            <div class="wish-img">
                                                <img src="{{ asset('assets/admin/images/car-wish.png') }}" alt="">
                                            </div>
                                            <div class="wish-heart-btn">
                                                <span>Bestseller</span>
                                                <button><i class="fa-solid fa-heart"></i></button>
                                            </div>
                                        </div>
                                        <div class="wish-prod-detail">
                                            <div class="wish-title">
                                                <p>Compact SUV</p>
                                                <h3>Toyota Corolla or Similar</h3>
                                            </div>
                                            <div class="wish-prod-reviews">
                                                <span>4.4/5</span>
                                                <p>Average</p>
                                                <strong class="nmb-of-review">(30 Reviews)</strong>
                                            </div>
                                            <div class="wish-prod-pric-area">
                                                <div class="wish-prod-price">
                                                    <div class="d-flex align-items-center ">
                                                        <p>From</p>
                                                        <span>$20.00</span>
                                                    </div>
                                                    <h1>Per day</h1>
                                                </div>
                                                <div class="prod-wish-see-detail">
                                                    <a href="#">See details<i class="fa-solid fa-chevron-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wishlist-prod-area wish-shadow">
                                        <div class="wishlist-img-area">
                                            <div class="wish-img">
                                                <img src="{{ asset('assets/admin/images/plane-wish.png') }}" alt="">
                                            </div>
                                            <div class="wish-heart-btn">
                                                <button><i class="fa-solid fa-heart"></i></button>
                                            </div>
                                        </div>
                                        <div class="wish-prod-detail">
                                            <div class="wish-title">
                                                <h3>London to New York City</h3>
                                                <p>New York City Airport</p>
                                            </div>
                                            <div class="wish-prod-reviews">
                                                <span>4.4/5</span>
                                                <p>Average</p>
                                                <strong class="nmb-of-review">(30 Reviews)</strong>
                                            </div>
                                            <div class="wish-prod-pric-area">
                                                <div class="wish-prod-price">
                                                    <div class="d-flex align-items-center ">
                                                        <p>From</p>
                                                        <span>$124.00</span>
                                                    </div>
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
                }, ],
            });
        });
    </script>
@endpush
