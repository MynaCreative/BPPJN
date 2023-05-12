<li class="menu-item mega-menu-title sub-menu {{ request()->routeIs('profile') ? 'current' : '' }}">
    <a class="menu-link fw-bold" href="#">
        <div>Tentang Kami</div>
    </a>
    <ul class="sub-menu-container" style="box-sizing: border-box;">
        @foreach ($collections as $item)
        <li class="menu-item">
            <a class="menu-link" href="{{ route('posts.show', $item->slug) }}">
                <div>{{ $item->name }}</div>
            </a>
        </li>
        @endforeach
        <li class="menu-item">
            <a class="menu-link" href="{{ route('persons.index') }}">
                <div>Informasi Pejabat</div>
            </a>
        </li>
    </ul>
</li>