@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <main>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-12">
                        <div class="index-hi-msg">
                            <h2>Your Fishing Operations</h2>
                        </div>
                        <div class="profile-data-area">
                            <div class="profile-data-area">
                                <div class="profile-detail ">
                                    <label for="">
                                        <div class="profile-title">
                                            <h3>Status of the Operation</h3>
                                        </div>
                                    </label>
                                    <div class="input-div">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Approved</option>
                                            <option value="1">Waiting for approval</option>
                                            <option value="2">Denied</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="profile-detail border-radius-last-child border-radius">
                                    <label for="">
                                        <div class="profile-title">
                                            <h3>Name of Operation</h3>
                                        </div>
                                    </label>
                                    <div class="input-div">
                                        <input type="text" placeholder="" id="Lorem Ipsum">
                                    </div>
                                </div>
                            </div>
                            <div class="profile-data-area">

                                <div class="profile-detail ">
                                    <label for="">
                                        <div class="profile-title">
                                            <h3>Type Of Service (Account)</h3>
                                        </div>
                                    </label>
                                    <div class="input-div">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Guiding Service</option>
                                            <option value="1">Lodge</option>
                                            <option value="2">Single Guide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="profile-detail border-radius-last-child border-radius">
                                    <label for="">
                                        <div class="profile-title">
                                            <h3>Type of Operation</h3>
                                        </div>
                                    </label>
                                    <div class="input-div">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Resort</option>
                                            <option value="1">Bed n’ Breakfast</option>
                                            <option value="2">Lodge</option>
                                            <option value="3">Guiding Service</option>
                                            <option value="4">Single Guide</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-data-area">
                                <div class="profile-detail border-radius border-none">
                                    <label for="" class="border-none">
                                        <div class="profile-title">
                                            <h3>Fish Species</h3>
                                        </div>
                                    </label>
                                    <div class="input-div">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected value="1">Saltwater </option>
                                            <option value="2">Freshwater</option>
                                            <option value="3">Saltwater & Freshwater</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="edit-profile-button">
                                <button type="button">Search</button>
                                <button type="button">Reset</button>
                            </div>
                        </div>
                        <div class="search-opartion-area">
                            <div class="operatio-hd-ser">
                                <h2>Search Results</h2>
                            </div>
                            <div class="opertaion-detail-area">
                                <div class="opr-img">
                                    <img src="{{ asset('assets/admin/images/operation.png') }}" alt="">
                                </div>
                                <div class="op-dt-area">
                                    <div class="operation-detail">
                                        <div class="op-title">
                                            <h2>New Operation</h2>
                                            <p>testingoperation@gmail.com</p>
                                        </div>
                                        <div class="op-btn">
                                            <button>Not Published</button>
                                        </div>
                                    </div>
                                    <div class="operation-detail">
                                        <div class="op-btn">
                                            <button>Preview</button>
                                            <button>Edit</button>
                                        </div>
                                        <div class="op-btn">
                                            <button>Unpublish</button>
                                            <button class="trash-operation"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="opertaion-detail-area">
                                <div class="opr-img">
                                    <img src="{{ asset('assets/admin/images/operation.png') }}" alt="">
                                </div>
                                <div class="op-dt-area">
                                    <div class="operation-detail">
                                        <div class="op-title">
                                            <h2>New Operation</h2>
                                            <p>testingoperation@gmail.com</p>
                                        </div>
                                        <div class="op-btn-publish">
                                            <button>Published</button>
                                        </div>
                                    </div>
                                    <div class="operation-detail">
                                        <div class="op-btn">
                                            <button>Preview</button>
                                            <button>Edit</button>
                                        </div>
                                        <div class="op-btn">
                                            <button>Unpublish</button>
                                            <button class="trash-operation"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </div>
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
