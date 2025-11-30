<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Promotion Board - {{ date('y') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logo/ro.png') }}" />
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/toastify.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/toastify-js.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net"> --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet" />
    {{-- Summernote --}}
    <link href="{{ asset('summernote/summernote-lite.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('summernote/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('summernote/summernote-lite.min.js') }}"></script>
</head>
<body>
    <div id="loader" class="LoadingOverlay d-none">
        <div class="Line-Progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="main-content">
        @include('layout.partials.navbar-pb')
        @yield('content')
        @include('layout.partials.footer')
    </div>
    <script src="{{ asset('js/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/dropzone.min.js') }}"></script>
    @stack('other_script')
</body>

</html>
