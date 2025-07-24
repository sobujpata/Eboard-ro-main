<li class="nav-item dropdown {{ $menu->childrenRecursive->isNotEmpty() ? 'dropdown' : '' }}">
    <a class="nav-link {{ $menu->childrenRecursive->isNotEmpty() ? 'dropdown-toggle' : '' }}"
       href="{{ $menu->url }}"
       {!! $menu->childrenRecursive->isNotEmpty() ? 'data-bs-toggle=dropdown aria-haspopup="true" aria-expanded="false" v-pre' : '' !!}>
       {!! $menu->title !!}
    </a>

    @if ($menu->childrenRecursive->isNotEmpty())
        <ul class="submenu bg-info dropdown-menu">
            @foreach ($menu->childrenRecursive as $child)
                @include('layout.partials.menu-item', ['menu' => $child])
            @endforeach
        </ul>
    @endif
</li>
