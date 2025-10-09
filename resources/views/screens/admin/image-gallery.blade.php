@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    @php
        $galleryImages = [];
        $banner_text = '';
        $banner_image = '';

        foreach ($galleryContent->cmsMeta as $item) {

            if($item->meta_key == 'hero_section_gallery_image')
            {
                $galleryImages[] = $item;
            }
            elseif($item->meta_key == 'hero_section_banner_text')
            {
                $banner_text = $item->meta_value;
            }
            elseif($item->meta_key == 'hero_section_banner_image')
            {
                $banner_image = $item->meta_value;
            }
        }
    @endphp
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
                    <div class="col-xl-9 col-12">
                        <div class="index-hi-msg">
                            <h2>Add Your Image Gallery</h2>
                        </div>
                        <div class="profile-data-area">
                            <form action="{{ route('image.gallery.post') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="profile-data-area">
                                    <div class="profile-detail ">
                                        <label for="banner-image">
                                            <div class="profile-title">
                                                <h3>Banner Image</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="file" name="banner_image" id="banner-image"/>
                                             @error('banner_image')
                                                <small class="fw-bold fst-italic text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="profile-detail border-radius-last-child border-radius">
                                        <label for="banner-text">
                                            <div class="profile-title">
                                                <h3>Banner Text</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="text" name="banner_text"  id="banner-text"/>
                                            @error('banner_text')
                                                <small class="fw-bold fst-italic text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-data-area">
                                    <div class="profile-detail ">
                                        <label for="image-gallery">
                                            <div class="profile-title">
                                                <h3>Image Gallery</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="file" name="image_gallery[]" id="image-gallery" multiple/>
                                            @if($errors->has('image_gallery*'))
                                                <small class="fw-bold fst-italic text-danger">{{ $errors->first('image_gallery*') }}</small>
                                            @endif
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
                            </form>
                        </div>

                        @if(count($galleryImages) > 0)
                            <div class="search-opartion-area">
                                <div class="operatio-hd-ser">
                                    <h2>Preview</h2>
                                </div>
                                @foreach ($galleryImages as $image )
                                    <div class="opertaion-detail-area">
                                        <div class="opr-img">
                                            <img src="{{ asset('storage/'.$image->meta_value) }}" alt="">
                                        </div>
                                            <div class="op-dt-area">
                                                <div class="operation-detail">
                                                    <div class="op-title mt-5">
                                                        <h2>Gallery Image</h2>
                                                        {{-- <p>testingoperation@gmail.com</p> --}}
                                                    </div>
                                                    {{-- <div class="op-btn">
                                                        <button>Not Published</button>
                                                    </div> --}}
                                                </div>
                                                <div class="operation-detail">
                                                    <div class="op-btn">
                                                        <button><a href="{{ route('view.gallery.image',$image->id) }}" style="text-decoration:none;color:inherit;">Preview</a></button>
                                                        <button><a href="{{ route('edit.gallery.image',$image->id) }}" style="text-decoration:none;color:inherit;">Edit</a></button>
                                                    </div>
                                                    <div class="op-btn">
                                                        {{-- <button>Unpublish</button> --}}
                                                        <button class="trash-operation"><i class="fa-solid fa-trash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                @endforeach
                                {{-- <div class="opertaion-detail-area">
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
                                </div> --}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
