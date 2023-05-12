<div class="fancy-title title-border title-center text-uppercase">
    <h3 class="fw-bold" style="color:var(--cnvs-themecolor)">Berita Terbaru</h3>
</div>
<div class="row posts-md col-mb-30">
    @foreach ($collections as $item)
    <div class="col-lg-3 col-md-6">
        <div class="entry">
            <div class="entry-image">
                <a href="{{ route('posts.show',$item->slug) }}"><img src="{{ url('storage/'.$item->thumbnail) }}" alt="{{ $item->name }}" class="rounded"></a>
            </div>
            <div class="entry-title title-xs text-transform-none px-2">
                <h3><a href="{{ route('posts.show',$item->slug) }}">{{ $item->name }}</a></h3>
            </div>
            <div class="entry-meta px-2">
                <ul>
                    <li><i class="uil uil-schedule"></i> {{ $item->published_at->format('d M Y') }}</li>
                    <!-- <li><a href="{{ route('posts.show',$item->slug) }}"><i class="uil uil-eye"></i> 53</a></li> -->
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="text-center mt-4">
    <a href="{{ route('posts.index') }}" class="button button-border button-small button-red button-circle text-uppercase">Index Berita <i class="fa-sharp fa-solid fa-chevron-right"></i></a>
</div>