@extends('layouts.web.app')

@push('styles')

@endpush

@section('content')
    @php
        $galleryImages = [];
        $banner_text = '';
        $banner_image = '';

        foreach ($galleryContent->cmsMeta as $item) {

            if($item->meta_key == 'hero_section_gallery_image'){
                $galleryImages[] = $item;
            }
            elseif($item->meta_key == 'hero_section_banner_text'){
                $banner_text = $item->meta_value;
            }
            elseif($item->meta_key == 'hero_section_banner_image'){
                $banner_image = $item->meta_value;
            }
        }

    @endphp
    <main>
        <section class="inner-section inner-section-2" style="background-image: url({{ asset('storage/'.$banner_image ?? '') }});">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="inner-hd">{{  $banner_text ?? 'Imaga Gallery' }}</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="galler-section">
            <div class="container">
                <div class="row row-gap-3">
                    @foreach ($galleryImages as $image )
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid" src="{{ asset('storage/'.$image->meta_value) }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')

@endpush



