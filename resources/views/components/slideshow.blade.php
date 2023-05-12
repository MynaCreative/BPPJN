<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                @foreach ($collections as $item)
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption slider-caption-center">
                            {!! $item->description !!}
                        </div>
                    </div>
                    @if ($item->type == 'image')
                    <div class="swiper-slide-bg img-darker" style="background-image: url('{{ url('storage/'.$item->thumbnail) }}');"></div>
                    @else
                    <div class="video-wrap no-placeholder">
                        <video id="slide-video" poster="{{ url('storage/'.$item->thumbnail) }}" preload="auto" loop autoplay muted playsinline>
                            <source src='{{ url('storage/'.$item->video) }}' type='video/mp4'>
                        </video>
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
            <div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>
        </div>
        <a href="#" data-scrollto="#content" class="one-page-arrow dark"><i class="bi-chevron-down infinite animated fadeInDown"></i></a>
    </div>
</section>