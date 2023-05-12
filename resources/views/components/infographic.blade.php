@foreach ($collections as $item)
<div class="oc-item">
    <a href="{{ $item->url }}"><img src="{{ url('storage/'.$item->thumbnail) }}" alt="{{ $item->name }}"></a>
</div>
@endforeach