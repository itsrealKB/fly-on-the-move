@extends('layouts.admin.app')

@push('styles')
    <style>
        .video-add-btn, .video-toggle-btn {
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
@endpush

@section('content')
    <main>
        <section>
            <div class="container-fluid">
                <div class="row my-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        @if(session('msg'))
                            <div class="alert alert-{{ session('type') }} alert-dismissible" role="alert">
                                <div> {{ session('msg') }}</div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-12">
                        <div class="index-hi-msg">
                            <h2>Add Your Salt Water Videos</h2>
                        </div>
                        <form action="{{ route('video.saltwater.post') }}" method="POST" enctype="multipart/form-data">
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
                                            @error('banner_image')
                                                <small class="fw-bold fst-italic text-danger">{{ $message }}</small>
                                            @enderror
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
                                            @error('banner_text')
                                                <small class="fw-bold fst-italic text-danger">{{ $message }}</small>
                                            @enderror
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
                                                    <h3>Video & Thumbnail</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" name="video_link[]" class="video-input" placeholder="Enter video Link"/>
                                                @if($errors->has('video_link*'))
                                                    <small class="fw-bold fst-italic text-danger">{{ $errors->first('video_link*') }}</small>
                                                @elseif($errors->has('video_file*'))
                                                    <small class="fw-bold fst-italic text-danger">{{ $errors->first('video_file*') }}</small>
                                                @endif
                                                <div class="video-btn d-flex justify-content-between">
                                                    <button type="button" class="video-toggle-btn">Switch To Video</button>
                                                    <button type="button" class="video-remove-btn" style="display:none;">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-profile-button">
                                    <button>Save</button>
                                    <button type="reset">Reset</button>
                                </div>
                            </div>
                        </form>

                        {{-- <div class="search-opartion-area">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
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

        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("video-toggle-btn")) {
                const btn = e.target;
                const inputDiv = btn.closest(".input-div");
                const videoInput = inputDiv.querySelector(".video-input");

                if (!videoInput) return;

                if (videoInput.type === "text") {
                    videoInput.type = "file";
                    videoInput.name = "video_file[]";
                    videoInput.placeholder = "";
                    btn.textContent = "Switch To Link";

                    const thumbWrapper = document.createElement("div");
                    thumbWrapper.classList.add("thumbnail-wrapper", "w-100");
                    thumbWrapper.innerHTML = `
                        <input type="file" name="video_thumbnail[]" class="video-thumbnail-input"/>
                        @if($errors->has('video_thumbnail*'))
                            <small class="fw-bold fst-italic text-danger">{{ $errors->first('video_thumbnail*') }}</small>
                        @endif
                    `;
                    inputDiv.insertBefore(thumbWrapper, videoInput);

                } else {

                    const existingThumb = inputDiv.querySelector(".thumbnail-wrapper");
                    if(existingThumb) existingThumb.remove();

                    videoInput.type = "text";
                    videoInput.name = "video_link[]";
                    videoInput.placeholder = "Enter video link";
                    btn.textContent = "Switch To Video";
                }
            }
        });
    </script>
@endpush


