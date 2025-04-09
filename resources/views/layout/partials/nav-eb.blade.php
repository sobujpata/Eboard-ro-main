<style>
    .nav-link{
        color: white;
    }
    .bg-info{
        background:#1cc88a !important;
    }
    .active{
        background-color: white !important;
        border-radius: 5px;
        color:black !important;
    }
</style>
<nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/eb-home') }}">
            {{-- {{ config('APP_NAME', 'BAF RO') }} --}}
            <table style="margin-top: -12px;margin-bottom: -12px;">
                <tr>
                    <td rowspan="2"><img src="{{ asset('logo/baf-log.png') }}" width='60px'  alt="ro"  /></td>
                    <td><h4 style="margin-bottom: 0px; font-weight: 900;">Bangladesh Air Force</h4></td>
                </tr>
                <tr>
                    <td><h6 style="font-weight: 800">Evaluation Board-{{date('y')}}</h6></td>
                </tr>
            </table>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/eb-home') }}">Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/eb/0') }}">Retd After 25 Yrs+</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/eb/1') }}">Screening From Svc(21 Yrs)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/eb-summary') }}">Summary</a>
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Report</a>
                    <ul class="dropdown-menu bg-info">
                        <li><a class="dropdown-item nav-link" href="{{url('/eb-selection')}}">Selection List</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{url('/eb-stanby')}}">Stanby List</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{url('/eb-all-pers')}}">All Pers List</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown" style="display:@if($userName=='eb') none @endif">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Admin</a>
                    <ul class="dropdown-menu bg-info">
                        <li><a class="dropdown-item nav-link" href="{{url('/eb-add-new-person')}}">Add New Person</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{url('/eb-person-upload-ecxel')}}">Add New Person By Upload Excel</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{url('/eb-image')}}">Profile Image Upload</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{url('/eb-Profile')}}">Profile Upload</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{url('/eb-conduct-sheet')}}">Contduct Sheet Upload</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{url('/eb-application')}}">Application and Wornig Ltr</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="{{url('/eb-salient')}}">Salient Pts of Appl & Wornig Ltr</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="" class="nav-link " href="{{url("/logout")}}">Logout</a>

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
