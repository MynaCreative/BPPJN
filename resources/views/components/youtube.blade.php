@foreach ($collections as $index => $item)
<div class="col-{{ $index == 0 ? '12' : '4' }}">
    <div class="video-facade position-relative" data-video-html='<iframe width="560" height="315" src="{{ $item->body }}" allowfullscreen></iframe>'>
        <div class="video-facade-preview">
            <img src="{{ url('storage/'.$item->thumbnail) }}" alt="{{ $item->name }}" class="w-100">
            <div class="bg-overlay">
                <div class="bg-overlay-content dark">
                    <a href="#" class="overlay-trigger-icon size-lg op-ts op-07 bg-light text-dark" data-hover-animate="op-1" data-hover-animate-out="op-07"><i class="bi-play-fill fs-2 position-relative" style="left:1px"></i></a>
                </div>
            </div>
        </div>
        <div class="video-facade-content"></div>
    </div>
</div>
@endforeach