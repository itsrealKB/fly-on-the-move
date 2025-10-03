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
                                <div class="chrt-hd-area">
                                    <div class="profile-pg-hd">
                                        <h3>Contacts</h3>
                                        <p>Fields mark with an asterisk(*) are required</p>
                                    </div>
                                </div>
                                <div class="profile-data-area">
                                    <div class="profile-detail border-radius">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Type of service *</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Guide/Capt.</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>                                            
                                </div>   
                                <div class="profile-data-area">
                                    <div class="profile-detail ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>1st contact name *</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="text" placeholder="" id="Lorem Ipsum">
                                        </div>
                                    </div> 
                                    <div class="profile-detail ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Mobile Phone *</h3>
                                            </div>
                                        </label>
                                        <div class="input-div flex-no">
                                            <input type="number" placeholder="" id="Lorem Ipsum">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Owner</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profile-detail border-radius border-radius-last-child ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Email *</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="email" placeholder="" id="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>     
                                <div class="profile-data-area">
                                    <div class="profile-detail ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>2nd contact name *</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="text" placeholder="" id="Lorem Ipsum">
                                        </div>
                                    </div> 
                                    <div class="profile-detail ">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Mobile Phone *</h3>
                                            </div>
                                        </label>
                                        <div class="input-div flex-no">
                                            <input type="number" placeholder="" id="Lorem Ipsum">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Title</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profile-detail border-radius-last-child">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Email *</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="email" placeholder="" id="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="edit-profile-button">
                                        <button>Save</button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
        </form>
        
    </main>
@endsection


@push('scripts')
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
@endpush
