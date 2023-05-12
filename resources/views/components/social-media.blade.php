@foreach ($collections as $item)
<a href="{{ $item->url }}" target="_blank" style="margin-right: 5px;"><img src="{{ url('storage/'.$item->thumbnail) }}" alt="{{ $item->name }}" style="max-width: 12%;"></a>
@endforeach