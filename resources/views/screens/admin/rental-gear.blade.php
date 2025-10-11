@extends('layouts.admin.app')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
        ol {
            list-style: decimal;
        }

        ul {
            list-style: circle;
        }

        b {
            font-weight: 800;
        }

        .note-resizebar {
            display: none;
        }

        .note-editable {
            height: 250px !important;
        }

        .side-bar-drop .chec-li {
            list-style: none;
        }

        .note-editable>h1 {
            font-size: 32px !important;
        }

        .note-editable>h2 {
            font-size: 24px !important;
        }

        .note-editable>h3 {
            font-size: 18.72px !important;
        }

        .note-editable>h4 {
            font-size: 16px !important;
        }

        .note-editable>h5 {
            font-size: 13.28px !important;
        }

        .note-editable>h6 {
            font-size: 10.72px !important;
        }

        .note-editable>p {
            font-size: 16px !important;
        }

        .note-editable>h1,
        .note-editable>h2,
        .note-editable>h3,
        .note-editable>h4,
        .note-editable>h5,
        .note-editable>h6 {
            font-weight: bold;
        }

        .note-modal {
            position: absolute !important;
            transition: 0.5s;
        }

        .note-modal-content {
            padding: 40px 20px;
        }

        .note-modal-header {
            border: none !important;
        }

        .note-modal-footer input {
            background: #16afaf !important;
            text-align: center;
            border-radius: 5px;
            padding: 14px 30px;
            text-decoration: none;
            color: white !important;
            border: none;
            cursor: pointer !important;
        }

        .note-modal-footer input:hover {
            background: #16afaf !important;
            text-align: center;
            border-radius: 5px;
            padding: 14px 30px;
            text-decoration: none;
            color: white !important;
            border: none;
            cursor: pointer !important;
        }

        .note-dropdown-item blockquote,
        .note-dropdown-item pre {
            display: none;
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
                            <h2>Add Your Rental Gear</h2>
                        </div>
                        <form action="{{ route('rental.gear.post') }}" method="POST" enctype="multipart/form-data"
                            id="freshwater-form">
                            @csrf
                            <div class="profile-data-area">
                                <div class="profile-data-area">
                                    <div class="profile-detail ">
                                        <label for="banner_image">
                                            <div class="profile-title">
                                                <h3>Rental Gear Image</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="file" name="banner_image" id="banner-image" />
                                            <small class="fw-bold fst-italic text-danger" id="banner-error"></small>
                                        </div>
                                        <input type="hidden" name="content" id="content-input"/>
                                    </div>
                                </div>
                                <div class="profile-data-area">
                                    <div id="summernote"></div>
                                    <br/>
                                    <small class="fw-bold fst-italic text-danger mt-2" id="content-error"></small>
                                </div>
                                <div class="edit-profile-button">
                                    <button>Save</button>
                                    <button type="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Write something...',
            // tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                // ['table', ['table']],
                ['insert', ['link']],
                // ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $('#freshwater-form').on('submit', function (e) {
            e.preventDefault();
            const form = document.querySelector('#freshwater-form');
            const bannerImage = document.querySelector('#banner-image').files[0];
            const contentInput = document.querySelector('#content-input');
            const bannerError = document.querySelector('#banner-error');
            const contentError = document.querySelector('#content-error');
            let flag = true;
            const types = ['image/jpg', 'image/bmp', 'image/png', 'image/jpeg', 'image/gif', 'image/webp'];
            bannerError.textContent = '';
            contentError.textContent = '';

            if (!bannerImage) {
                flag = false;
                bannerError.textContent = "Please Upload Banner Image";
            }
            else if (!types.includes(bannerImage.type)) {
                flag = false;
                bannerError.textContent = "Banner Image Must Be JPG, PNG, JPEG, BMP, GIF, or WEBP.";
            }
            else if ($('#summernote').summernote('isEmpty')) {
                flag = false;
                contentError.textContent = "Please Enter Content In The Text Editor";
            }

            if (flag) {
                const content = $('#summernote').summernote('code');
                contentInput.value = JSON.stringify(content);
                form.submit();
            }

        });

    </script>
@endpush
