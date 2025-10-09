@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <main>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-12">
                        <div class="index-hi-msg">
                            <h2>Add Your Video Gallery</h2>
                        </div>
                        <form action="{{ route('video.gallery.post') }}" method="POST" enctype="">
                            @csrf
                            <div class="profile-data-area">
                                <div class="profile-data-area">
                                    <div class="profile-detail ">
                                        <label for="banner_image">
                                            <div class="profile-title">
                                                <h3>Banner Image</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="file" name="banner_image" id="banner_image"/>
                                        </div>
                                    </div>
                                    <div class="profile-detail border-radius-last-child border-radius">
                                        <label for="banner_text">
                                            <div class="profile-title">
                                                <h3>Banner Text</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="text" name="banner_text" id="banner_text"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-data-area">
                                    <div class="d-flex justify-content-end align-items-center">
                                        <button class="video-add-btn">Add</button>
                                    </div>
                                    <div id="video-section-wrapper">
                                        <div class="profile-detail">
                                            <label>
                                                <div class="profile-title">
                                                    <h3>Video Gallery</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="file" name="video_thumbnail[]" multiple/>
                                                <input type="text" name="video_link[]" placeholder="Enter video Link"/>
                                                <div class="video-btn">
                                                    <button type="button" class="video-remove-btn"
                                                        style="display:none;">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="profile-detail border-radius-last-child border-radius">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Banner Text</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="text" placeholder="" id="Lorem Ipsum">
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="profile-data-area">

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
                                </div> --}}
                                {{-- <div class="profile-data-area">
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
                                </div> --}}
                                <div class="edit-profile-button">
                                    <button>Save</button>
                                    <button type="reset">Reset</button>
                                </div>
                            </div>
                        </form>

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

<style>
    .video-add-btn {
        width: fit-content;
        background: #16afaf;
        text-align: center;
        border-radius: 5px;
        padding: 14px 30px;
        text-decoration: none;
        color: white;
        border: none;
        display: flex;
        justify-content: end;
        align-items: center;
    }

    .profile-detail {
        margin-bottom: 30px;
    }

    .video-remove-btn {
        background: #0d6efd;
        color: #fff;
        border: none;
        padding: 14px 30px;
        border-radius: 6px;
        cursor: pointer;
        margin-top: 10px;
    }

    .video-remove-btn {
        background: #dc3545;
    }

    .video-btn {
        display: flex;
        justify-content: end;
        align-items: center;
        width: 100%;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const addBtn = document.querySelector(".video-add-btn");
        const wrapper = document.getElementById("video-section-wrapper");

        addBtn.addEventListener("click", function (e) {
            e.preventDefault();

            // Clone the first box
            const originalBox = wrapper.querySelector(".profile-detail");
            const clone = originalBox.cloneNode(true);

            // Clear inputs
            clone.querySelectorAll("input").forEach(input => input.value = "");

            // Show remove button in clone
            const removeBtn = clone.querySelector(".video-remove-btn");
            removeBtn.style.display = "inline-block";

            // Attach click event to remove button
            removeBtn.addEventListener("click", function () {
                clone.remove();
            });

            // Append the cloned box
            wrapper.appendChild(clone);
        });
    });
</script>
