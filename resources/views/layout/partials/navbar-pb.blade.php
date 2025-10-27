<style>
    .nav-link {
        color: white;
    }

    .bg-info {
        background: #1cc88a !important;
    }
</style>
<nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/pb/pb-home') }}">
            {{-- {{ config('APP_NAME', 'BAF RO') }} --}}
            <table style="margin-top: -12px;margin-bottom: -12px;">
                <tr>
                    <td rowspan="2"><img src="{{ asset('logo/baf-log.png') }}" width='60px' alt="ro" /></td>
                    <td>
                        <h3 style="margin-bottom: 0px; font-weight: 900;">Bangladesh Air Force</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6 style="font-weight: 800">Airmen Promotion Board-24</h6>
                    </td>
                </tr>
            </table>
            {{-- <div style="margin-top: -12px;margin-bottom: -12px; float: left;">

            </div>
            <div>

            </div> --}}

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @foreach ($menus as $parent)
                    <li class="nav-item dropdown {{ $parent->children->count() ? 'dropdown' : '' }}">
                        <a id="navbarDropdown"
                            class="nav-link {{ $parent->childrenRecursive->isNotEmpty() ? 'dropdown-toggle aria-haspopup="true"
                            aria-expanded="false" ' : '' }}" {!! $parent->childrenRecursive->isNotEmpty() ? 'data-bs-toggle=dropdown aria-haspopup="true" aria-expanded="false" v-pre' : '' !!}
                            href="{{url($parent->url)}}" role="button">
                            {{ $parent->title }}
                        </a>

                        @if ($parent->children->count())
                            <ul class="dropdown-menu bg-info">
                                @foreach ($parent->children as $child)
                                    @if ($child->children->count())
                                        <li>
                                            <a class="dropdown-item" href="{{url($child->url)}}">{!! $child->title !!}</a>
                                            <ul class="submenu dropdown-menu bg-info">
                                                @foreach ($child->children as $subchild)
                                                    <li><a class="dropdown-item nav-link"
                                                            href="{{ url($subchild->url) }}">{{ $subchild->title }}</a>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                    @else
                                        <li><a class="dropdown-item nav-link"
                                                href="{{ url($child->url) }}">{!! $child->title !!}</a></li>
                                        <div class="dropdown-divider"></div>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach

                {{-- @foreach ($menus as $menu)
                    @include('layout.partials.menu-item', ['menu' => $menu])
                @endforeach --}}
                <li class="nav-item dropdown"
                    style="display:@php if($user->userName !== 'pbedit'){ echo 'none;'; } @endphp">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Admin</a>
                    <ul class="dropdown-menu bg-info">
                        <li><a class="dropdown-item nav-link" href="{{ url('/pb-add-new-person') }}">Add New Person</a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{ url('/pb-person-upload-ecxel') }}">Add New Person By Upload Excel</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{ url('/pb-conduct-sheet-upload-ecxel') }}">Add Conduct Sheet By Upload Excel</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{ url('/pb-image') }}">Profile Image Upload</a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{ url('/pb-Profile') }}">Profile Upload</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{ url('/pb-conduct-sheet') }}">Contduct Sheet
                                Upload</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{ url('/pb-bdno') }}">All BD NO</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{ url('/booklets') }}">Booklets</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{ url('/instraction') }}">Instraction</a></li>
                    </ul>
                </li>
                <li class="nav-item"
                    style="display:@php if($user->userName !== 'pbedit'){ echo 'none;'; } @endphp">
                    <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
        </div>
    </div>
</nav>
@push('other_script')
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            let currentLocation = window.location.href;
            let navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                if (link.href === currentLocation) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });
    </script>
@endpush
