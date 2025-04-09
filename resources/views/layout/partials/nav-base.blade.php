<style>
    .nav-link{
        color: white;
    }
    .bg-info{
        background:#1cc88a !important;
    }
</style>
<nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/pb/pb-home') }}">
            {{-- {{ config('APP_NAME', 'BAF RO') }} --}}
            <table style="margin-top: -12px;margin-bottom: -12px;">
                <tr>
                    <td rowspan="2"><img src="{{ asset('logo/baf-log.png') }}" width='60px'  alt="ro"  /></td>
                    <td><h3 style="margin-bottom: 0px; font-weight: 900;">Bangladesh Air force</h3></td>
                </tr>
                <tr>
                    <td><h6 style="font-weight: 800">Airman Promotion Board-24</h6></td>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pb/pb-home') }}">Policy</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Tech A</a>
                    <ul class="dropdown-menu bg-info">
                        <li><a class="dropdown-item" href="">AC Fitt &raquo</a>
                            <ul class="submenu bg-info dropdown-menu" >
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/AC Fitt/1') }}">SWO - MWO : AC Fitt (Page No: 01-12)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/AC Fitt/2') }}">WO - SWO : AC Fitt (Page No: 13-15)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/AC Fitt/3') }}">Sgt - WO : AC Fitt (Page No: 16-23)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/AC Fitt/4') }}">Sgt - WO : AC Fitt (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/AC Fitt') }}">Download Summary : AC Fitt</a></li>
                            </ul>
                        </li>

                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="">E&I Fitt &raquo</a>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/E&I Fitt/1') }}">SWO - MWO : E&I Fitt (Page No: 24-32)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/E&I Fitt/2') }}">WO - SWO : E&I Fitt (Page No: 33-34)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/E&I Fitt/3') }}">Sgt - WO : E&I Fitt (Page No: 35-37)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/E&I Fitt/4') }}">Sgt - WO : E&I Fitt (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/E&I Fitt') }}">Download Summary :E&I Fitt</a></li>
                            </ul>
                        </li>

                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="">Armt Fitt &raquo</a>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Armt Fitt/1') }}">SWO - MWO : Armt Fitt (Page No: 54-59)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Armt Fitt/2') }}">WO - SWO : Armt Fitt (Page No: 60-62)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Armt Fitt/3') }}">Sgt - WO : Armt Fitt (Page No: 63-65)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="basewise/pb-base/Armt Fitt/4">Sgt - WO : Armt Fitt (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Armt Fitt') }}">Download Summary :Armt Fitt</a></li>
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="#">LSEW &raquo</a>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/LSEW/1') }}">SWO - MWO : LSEW (Page No: 71)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/LSEW/2') }}">WO - SWO : LSEW (Page No: 72)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/LSEW/3') }}">Sgt - WO : LSEW (Page No: 73-74)</a></li>
                                <div class="dropdown-divider"></div>
                                <!-- <li><a class="dropdown-item nav-link" href="lsew_wo_29.php">Sgt - WO : LSEW (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div> -->
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/LSEW') }}">Download Summary : LSEW</a></li>
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="#">Photo &raquo</a>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Photo/1') }}">SWO - MWO : Photo (Page No: 66-67)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Photo/2') }}">WO - SWO : Photo (Page No: 68)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Photo/3') }}">Sgt - WO : Photo (Page No: 88-89)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Photo/4') }}">Sgt - WO : Photo (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Photo') }}">Download Summary : Photo</a></li>
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a class="dropdown-item" href="#">Radio Fitt &raquo</a>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Radio Fitt/1') }}">SWO - MWO : Radio Fitt (Page No: 38-46)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Radio Fitt/2') }}">WO - SWO : Radio Fitt (Page No: 47)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Radio Fitt/3') }}">Sgt - WO : Radio (Page No: 69-70)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Radio Fitt/4') }}">Sgt - WO : Radio (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Radio Fitt') }}">Download Summary : Radio Fitt</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown active">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Tech B</a>
                    <ul class="dropdown-menu bg-info">
                        <li>
                            <a class="dropdown-item" href="#">Gen Engg &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Gen Engg/1') }}">SWO - MWO : Gen Engg (Page No: 75-76)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Gen Engg/2') }}">WO - SWO : Gen Engg (Page No: 77-78)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Gen Engg/3') }}">Sgt - WO : Gen Engg (Page No: 79)</a></li>
                                <div class="dropdown-divider"></div>
                                <!-- <li><a class="dropdown-item nav-link" href="ge_wo_29.php">Sgt - WO : Gen Engg (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div> -->
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Gen Engg') }}">Download Summary : Gen Engg</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">MT Fitt &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/MTOF/1') }}">SWO - MWO : MT Fitt (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/MTOF/2') }}">WO - SWO : MT Fitt (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/MTOF/3') }}">Sgt - WO : MT Fitt (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/MTOF/4') }}">Sgt - WO : MT Fitt (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/MTOF') }}">Download Summary : MT Fitt</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">MT Optr &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/MTO/1') }}">SWO - MWO : MT Fitt (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/MTO/2') }}">WO - SWO : MT Fitt (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/MTO/3') }}">Sgt - WO : MT Fitt (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/MTO/4') }}">Sgt - WO : MT Fitt (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/MTO') }}">Download Summary : MT Fitt</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">GS &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/GS/1') }}">SWO - MWO : GS (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/GS/2') }}">WO - SWO : GS (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/GS/3') }}">Sgt - WO : GS (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/GS/4') }}">Sgt - WO : GS (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/GS') }}">Download Summary : GS</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">Radar Optr &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Radar Optr/1') }}">SWO - MWO : Radar Optr (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Radar Optr/2') }}">WO - SWO : Radar Optr (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Radar Optr/3') }}">Sgt - WO : Radar Optr (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Radar Optr/4') }}">Sgt - WO : Radar Optr (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Radar Optr') }}">Download Summary : Radar Optr</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">ATCA &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/ATCA/1') }}">SWO - MWO : ATCA (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/ATCA/2') }}">WO - SWO : ATCA (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/ATCA/3') }}">Sgt - WO : ATCA (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/ATCA/4') }}">Sgt - WO : ATCA (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/ATCA') }}">Download Summary : ATCA</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">Met Asst &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Met Asst/1')}}">SWO - MWO : Met Asst (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Met Asst/2')}}">WO - SWO : Met Asst (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Met Asst/3')}}">Sgt - WO : Met Asst (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Met Asst/4')}}">Sgt - WO : Met Asst (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Met Asst') }}">Download Summary : Met Asst</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">Med Asst &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Med Asst/1') }}">SWO - MWO : Med Asst (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Med Asst/2') }}">WO - SWO : Med Asst (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Med Asst/3') }}">Sgt - WO : Med Asst (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Med Asst/4') }}">Sgt - WO : Med Asst (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Med Asst') }}">Download Summary : Med Asst</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Log Asst &raquo</a>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Log Asst/1')}}">SWO - MWO : Log Asst (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Log Asst/2')}}">WO - SWO : Log Asst (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Log Asst/3')}}">Sgt - WO : Log Asst (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Log Asst/4')}}">Sgt - WO : Log Asst (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Log Asst') }}">Download Summary : Log Asst</a></li>
                             </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown active">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Non Tech</a>
                    <ul class="dropdown-menu bg-info">
                        <li>
                            <a class="dropdown-item " href="#">Sec Asst (GD) &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Sec Asst (GD)/1') }}">SWO - MWO : Log Asst (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Sec Asst (GD)/2') }}">WO - SWO : Log Asst (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Sec Asst (GD)/3') }}">Sgt - WO : Log Asst (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Sec Asst (GD)/4') }}">Sgt - WO : Log Asst (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Sec Asst (GD)') }}">Download Summary : Log Asst</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">Admin Asst &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Admin Asst/1') }}">SWO - MWO : Admin Asst (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Admin Asst/2') }}">WO - SWO : Admin Asst (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Admin Asst/3') }}">Sgt - WO : Admin Asst (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Admin Asst/4') }}">Sgt - WO : Admin Asst (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Admin Asst') }}">Download Summary : Admin Asst</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">Cat Asst &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Cat Asst/1') }}">SWO - MWO : Cat Asst (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Cat Asst/2') }}">WO - SWO : Cat Asst (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Cat Asst/3') }}">Sgt - WO : Cat Asst (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Cat Asst/4') }}">Sgt - WO : Cat Asst (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Cat Asst') }}">Download Summary : Cat Asst</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">Sec Asst (A) &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Sec Asst (A)/1') }}">SWO - MWO : Sec Asst (A) (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Sec Asst (A)/2') }}">WO - SWO : Sec Asst (A) (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Sec Asst (A)/3') }}">Sgt - WO : Sec Asst (A) (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Sec Asst (A)/4') }}">Sgt - WO : Sec Asst (A) (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Sec Asst (A)') }}">Download Summary : Sec Asst (A)</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">PF&DI &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/PF&DI/1') }}">SWO - MWO : PF&DI (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/PF&DI/2') }}">WO - SWO : PF&DI (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/PF&DI/3') }}">Sgt - WO : PF&DI (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/PF&DI/4') }}">Sgt - WO : PF&DI (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/PF&DI') }}">Download Summary : PF&DI</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">Music &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Music/1') }}">SWO - MWO : Music (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Music/2') }}">WO - SWO : Music (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Music/3') }}">Sgt - WO : Music (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Music/4') }}">Sgt - WO : Music (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Music') }}">Download Summary : Music</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">GC &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/GC/1') }}">SWO - MWO : GC (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/GC/2') }}">WO - SWO : GC (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/GC/3') }}">Sgt - WO : GC (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/GC/4') }}">Sgt - WO : GC (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/GC') }}">Download Summary : GC</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">Provost &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Provost/1') }}">SWO - MWO : Provost (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Provost/2') }}">WO - SWO : Provost (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Provost/3') }}">Sgt - WO : Provost (Page No: 113-119)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Provost/4') }}">Sgt - WO : Provost (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Provost') }}">Download Summary : Provost</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Cy Asst &raquo</a>
                            <div class="dropdown-divider"></div>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Cy Asst/1') }}">SWO - MWO : Cy Asst (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Cy Asst/2') }}">WO - SWO : Cy Asst (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Cy Asst') }}">Download Summary : Cy Asst</a></li>
                             </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Edn Instr &raquo</a>
                            <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Edn Instr/1') }}">SWO - MWO : Edn Instr (Page No: 107-109)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Edn Instr/2') }}">WO - SWO : Edn Instr (Page No: 110-112)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Edn Instr') }}">Download Summary : Edn Instr</a></li>
                             </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown active">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Aircrew</a>
                    <ul class="dropdown-menu bg-info">
                        <li>
                            <a class="dropdown-item" href="#"> Flt Engr &raquo </a>
                            <div class="dropdown-divider"></div>
                               <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/FE/1') }}">SWO - MWO : Flt Engr (Page No: 223)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/FE/2') }}">WO - SWO : Flt Engr (Page No: 224)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/FE/3') }}">Sgt - WO : Flt Engr (Page No: 225-226)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/FE/4') }}">Sgt - WO : Flt Engr (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/FE') }}">Download Summary : Flt Engr</a></li>
                             </ul>
                          </li>
                        <li>
                            <a class="dropdown-item " href="#">Load Master &raquo </a>
                            <div class="dropdown-divider"></div>
                               <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/LM/1') }}">SWO - MWO : Load Master (Page No: 223)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/LM/2') }}">WO - SWO : Load Master (Page No: 224)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/LM/3') }}">Sgt - WO : Load Master (Page No: 225-226)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/LM/4') }}">Sgt - WO : Load Master (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/LM') }}">Download Summary : Load Master</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">Air Gunner &raquo </a>
                            <div class="dropdown-divider"></div>
                               <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/AG/1') }}">SWO - MWO : Air Gunner (Page No: 223)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/AG/2') }}">WO - SWO : Air Gunner (Page No: 224)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/AG/3') }}">Sgt - WO : Air Gunner (Page No: 225-226)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/AG/4') }}">Sgt - WO : Air Gunner (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/AG') }}">Download Summary : Air Gunner</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">Air Std &raquo </a>
                               <ul class="submenu bg-info dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Air Std/1') }}">SWO - MWO : Air Std (Page No: 223)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Air Std/2') }}">WO - SWO : Air Std (Page No: 224)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Air Std/3') }}">Sgt - WO : Air Std (Page No: 225-226)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('/basewise/pb-base/Air Std/4') }}">Sgt - WO : Air Std (Booklet-2)</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item nav-link" href="{{ url('Export/Air Std') }}">Download Summary : Air Std</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                {{-- <li class="nav-item dropdown active">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Summary</a>
                        <ul class="dropdown-menu bg-info">
                            <li><a class="dropdown-item nav-link" href="{{url('/pb/recomList')}}"> Summary of Recom List : pb-<?php $year = date("y");
                                      echo $year; ?> </a>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item nav-link" href="{{url('/pb/summary')}}">TradeWise Recom Chart</a>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item nav-link" href="{{url('/pb/rank-wise-summary')}}"> Rankwise Recom Chart</a>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item nav-link" href="{{url('/pb/summary-demo')}}"> Rankwise Recom Chart</a>
                          </ul>
                </li>
                <li class="nav-item dropdown active">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Report</a>
                    <ul class="dropdown-menu bg-info">
                        <li><a class="dropdown-item nav-link" href="#">Selection List</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item nav-link" href="#">Stanby List</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item active">
                    <a id="" class="nav-link " href="{{url("/logout")}}">Logout</a>

                </li>


                {{-- <div class=" h-auto d-flex">
                    <div class="user-dropdown">
                        <a href="#">Logout</a>
                        <div class="user-dropdown-content ">
                            <div class="text-center">
                                <h6>User Name</h6>
                                <hr class="user-dropdown-divider  p-0"/>
                            </div>
                            <a href="{{url('/userProfile')}}" class="side-bar-item">
                                <span class="side-bar-item-caption">Profile</span>
                            </a>
                            <a href="{{url("/logout")}}" class="side-bar-item">
                                <span class="side-bar-item-caption">Logout</span>
                            </a>
                        </div>
                    </div>
                </div> --}}
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
