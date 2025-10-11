@extends('layouts.web.app')

@push('styles')
    <style>
        .video-container {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .backend-video {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover;
        }

        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #FF1333;
            color: white;
            border-radius: 10px;
            padding: 15px 28px;
            text-align: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .play-btn i {
            font-size: 20px;
        }
    </style>
@endpush

@section('content')
    @php
        $freshWaterVideos = null;
        $banner_text = '';
        $banner_image = '';

        foreach ($freshWaterContent->cmsMeta as $item) {

            switch ($item) {
                case ($item->meta_key == 'hero_section_freshwater_videos'):
                    $freshWaterVideos = json_decode($item->meta_value);
                    break;

                case ($item->meta_key == 'hero_section_banner_text'):
                    $banner_text = $item->meta_value;
                    break;

                case ($item->meta_key == 'hero_section_banner_image'):
                    $banner_image = $item->meta_value;
                    break;

                default:
                    # code...
                    break;
            }
        }
    @endphp
    <section class="inner-section" style="background-image: url({{ asset('storage/'.$banner_image) }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="inner-hd">{{ $banner_text }}</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="tearm-condi-sec">
        <div class="container">
            <div class="row gy-4">
                @foreach ($freshWaterVideos as $videoData)
                    @if($videoData->type == 1)
                        <div class="col-lg-6 col-md-6 col-12 video-wrapper">
                            <div class="video-container">
                                <img src="{{ asset('storage/'.$videoData->thumbnail) }}"
                                    class="backend-video video-thumb" alt="">
                                <video class="backend-video video-player" controls style="display:none;">
                                    <source src="{{ asset('storage/'.$videoData->video) }}">
                                </video>

                                <!-- YouTube style play button -->
                                <div class="play-btn"><i class="fa-solid fa-play"></i></div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6 col-md-6 col-12">
                            <iframe class="elementor-video-iframe" src="{{ $videoData->video }}"
                                title="Chile Patagonia Fly Fishing - La Posada de los Farios Lodge" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const playButtons = document.querySelectorAll(".play-btn");

            playButtons.forEach(btn => {
                btn.addEventListener("click", function () {
                    const container = btn.closest(".video-container");
                    const image = container.querySelector(".video-thumb");
                    const video = container.querySelector(".video-player");

                    image.style.display = "none";
                    btn.style.display = "none";
                    video.style.display = "block";

                    video.play();
                });
            });
        });
    </script>
@endpush
