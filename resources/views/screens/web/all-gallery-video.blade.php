@extends('layouts.web.app')

@push('styles')

@endpush

@section('content')
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="inner-hd">Video gallery</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="tearm-condi-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" allowfullscreen="" title="vimeo Video Player"
                        src="https://player.vimeo.com/video/179474847?color&amp;autopause=0&amp;loop=0&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=1&amp;autoplay=1#t="></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" allowfullscreen="" title="youtube Video Player"
                        src="https://www.youtube.com/embed/0aZzEWJoTBY?feature=oembed&amp;color&amp;autopause=0&amp;loop=0&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=1"></iframe>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" allowfullscreen="" title="youtube Video Player"
                        src="https://www.youtube.com/embed/qCNVoWNUYz0?feature=oembed&amp;color&amp;autopause=0&amp;loop=0&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=1"></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" allowfullscreen="" title="youtube Video Player"
                        src="https://www.youtube.com/embed/86I4cSgpdsU?feature=oembed&amp;color&amp;autopause=0&amp;loop=0&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=1"></iframe>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" allowfullscreen="" title="youtube Video Player"
                        src="https://www.youtube.com/embed/0BtbkoXteQs?feature=oembed&amp;color&amp;autopause=0&amp;loop=0&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=1"></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" allowfullscreen="" title="youtube Video Player"
                        src="https://www.youtube.com/embed/2YfQV_kbOa4?feature=oembed&amp;color&amp;autopause=0&amp;loop=0&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=1"></iframe>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" src="https://www.youtube.com/embed/YeMW7XTqGK8"
                        title="Dry fly fishing at Tres Rios with TRO" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" src="https://www.youtube.com/embed/kZlC0b092kM"
                        title="Collon Cura" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" src="https://www.youtube.com/embed/Z0OTk1L6FWY"
                        title="Sightcast video fishing II" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" src="https://www.youtube.com/embed/PSK8pTnVCIs"
                        title="bestgolfandfishing.com" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" src="https://www.youtube.com/embed/zP5jDOiHGM4"
                        title="Chile Patagonia Fly Fishing - La Posada de los Farios Lodge" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <iframe class="elementor-video-iframe" src="https://www.youtube.com/embed/op3ZeVf0azw"
                        title="Abbie Marin Fights a Tarpon on the Flats" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 video-wrapper">
                    <div class="video-container">
                        <img src="https://images.unsplash.com/photo-1526779259212-939e64788e3c?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZnJlZSUyMGltYWdlc3xlbnwwfHwwfHx8MA%3D%3D"
                            class="backend-video video-thumb" alt="">
                        <video class="backend-video video-player" controls style="display:none;">
                            <source src="https://youtu.be/0aZzEWJoTBY" type="video/mp4">
                        </video>

                        <!-- YouTube style play button -->
                        <div class="play-btn"><i class="fa-solid fa-play"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 video-wrapper">
                    <div class="video-container">
                        <img src="https://media.istockphoto.com/id/517188688/photo/mountain-landscape.jpg?s=1024x1024&w=0&k=20&c=z8_rWaI8x4zApNEEG9DnWlGXyDIXe-OmsAyQ5fGPVV8="
                            class="backend-video video-thumb" alt="">
                        <video class="backend-video video-player" controls style="display:none;">
                            <source src="https://youtu.be/0aZzEWJoTBY" type="video/mp4">
                        </video>

                        <!-- YouTube style play button -->
                        <div class="play-btn"><i class="fa-solid fa-play"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')

@endpush
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
