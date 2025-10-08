@extends('layouts.web.app')

@push('styles')

@endpush

@section('content')
        @php
            $galleryImages = [];

            foreach ($galleryContent as $item) {

                $meta = $item->cmsMeta->pluck('meta_value', 'meta_key');

                $images = $item->cmsMeta
                    ->where('meta_key', 'hero_section_gallery_image')
                    ->pluck('meta_value');
            }

        @endphp
    <main>
        <section class="inner-section inner-section-2" style="background-image: url({{ asset('storage/'.$meta['hero_section_banner_image'] ?? '') }});">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="inner-hd">{{ $meta['hero_section_banner_text'] ?? 'Imaga Gallery' }}</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="galler-section">
            <div class="container">
                <div class="row row-gap-3">
                    @foreach ($images as $image )
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid" src="{{ asset('storage/'.$image) }}" alt="">
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/gallery-img-2.png') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/tabs-img-1.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/tabs-img-1.jpg') }}" alt="">
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/destination-img-2.png') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/gallery-5.png') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/gallery-8.png') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/tabs-img-4.jpg') }}" alt="">
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/tabs-img-5.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/tabs-img-6.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/tabs-img-7.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/tabs-img-8.jpg') }}" alt="">
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/tab-img-freshwater.png') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/gallery-6.png') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/gallery-7.png') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/gallery-2.png') }}" alt="">
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/tabs-img-3.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/web/images/view-deal-main.png') }}" alt="">
                    </div> --}}
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')

@endpush



