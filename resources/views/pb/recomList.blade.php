@extends('layout.app-pb')

@section('content')
    <div class="container-fluid p-0">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @include('layout.partials.modal.pbRecom')
        <p class="ex1"></p>
        <p class="ex1"></p>
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h3 align="center"><b>Summary of Airmen Promotion Board-<?php $year = date('Y');
                    echo $year = substr($year, -2); ?></b></h3>
                </div>
                <div class="col-md-4">
                    <div align="right">
                        {{-- <a href="#eifitt_swo" class="btn btn-success"><span class="glyphicon glyphicon-edit"><b>{{ "Export Summary" }}</b></span> --}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
            <div class="conainer-flued">
                <table class="table table-striped table-border display" >
                    <thead bgcolor="#33a8ff" class="table table-striped table-bordered">
                        <tr align="center" bgcolor="#1cc88a">
                            <th style="vertical-align: middle; width: 2%;">Serial No</th>
                            <th style="vertical-align: middle; width: 5%;">Trade</th>
                            <th style="vertical-align: middle; width: 3%;">MWO</th>
                            <th style="vertical-align: middle; width: 3%;">SWO</th>
                            <th style="vertical-align: middle; width: 3%;">WO</th>
                            <th style="vertical-align: middle; width: 3%;">Total</th>
                            <th style="vertical-align: middle; width: 7%; border-right: 2px solid black;">Remarks</th>

                            <th style="vertical-align: middle; width: 2%;">Serial No</th>
                            <th style="vertical-align: middle; width: 5%;">Trade</th>
                            <th style="vertical-align: middle; width: 3%;">MWO</th>
                            <th style="vertical-align: middle; width: 3%;">SWO</th>
                            <th style="vertical-align: middle; width: 3%;">WO</th>
                            <th style="vertical-align: middle; width: 3%;">Total</th>
                            <th style="vertical-align: middle; width: 7%;">Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td><b>Ac Fitt</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                    {{ $recomList[0] }}
                                </a>

                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2"><b>{{ $recomList[1] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal3"><b>{{ $recomList[2] }}</b></a>
                            </td>

                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal4"><span
                                        class="glyphicon glyphicon-edit">{{ $recomList[0] + $recomList[1] + $recomList[2] }}</span></b></a>
                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">16</td>
                                    <td><b>Sec Asst (GD)</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal65"><b>
                                                    {{ $recomList[45] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal66"><b>
                                                    {{ $recomList[46] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal67"><b>
                                                    {{ $recomList[47] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal68"><b>
                                                    {{ $recomList[46]+$recomList[45]+$recomList[47] }}</b></a>

                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td><b>E&I Fitt</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal9"><b>
                                    {{ $recomList[3] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal10"><b>{{ $recomList[4] }}</b>
                                </a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal11"><b>{{ $recomList[5] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal12"><b>{{ $recomList[3] + $recomList[4] + $recomList[5] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">17</td>
                                    <td><b>Admin Asst</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal69"><b>
                                                    {{ $recomList[48] }}</b></a>

                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal70"><b>
                                                    {{ $recomList[49] }}</b></a>

                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal71"><b>
                                                    {{ $recomList[50] }}</b></a>

                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal72"><b>
                                                    {{ $recomList[48]+$recomList[49]+$recomList[50] }}</b></a>

                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">3</td>
                            <td><b>Armt Fitt</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal13"><b>
                                            {{ $recomList[6] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal14"><b>
                                            {{ $recomList[7] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal15"><b>
                                            {{ $recomList[8] }}</b></a>
                            </td>

                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal16"><b>
                                            {{ $recomList[6]+$recomList[7]+$recomList[8] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">18</td>
                                    <td><b>Cat Asst</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal73"><b>
                                                    {{ $recomList[51] }}</b></a>

                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal74"><b>
                                                    {{ $recomList[52] }}</b></a>

                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal75"><b>
                                                    {{ $recomList[53] }}</b></a>

                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal76"><b>
                                                    {{ $recomList[52]+$recomList[53]+ $recomList[51] }}</b></a>


                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">4</td>
                            <td><b>LSEW</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal17"><b>
                                        {{ $recomList[9] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal18"><b>
                                        {{ $recomList[10] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal19"><b>
                                        {{ $recomList[11] }}</b></a>
                            </td>

                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal20"><b>
                                        {{ $recomList[9] + $recomList[10] + $recomList[11] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">19</td>
                                    <td><b>Sec Asst (A)</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal77"><b>
                                                    {{ $recomList[54] }}</b></a>

                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal78"><b>
                                                    {{ $recomList[55] }}</b></a>

                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal79"><b>
                                                    {{ $recomList[56] }}</b></a>

                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal80"><b>
                                                    {{ $recomList[55]+$recomList[56]+ $recomList[54] }}</b></a>


                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">5</td>
                            <td><b>Photo</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal21"><b>
                                            {{ $recomList[12] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal22"><b>
                                            {{ $recomList[13] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal23"><b>
                                            {{ $recomList[14] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal24"><b>
                                            {{ $recomList[12]+$recomList[13]+$recomList[14] }}</b></a>
                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">20</td>
                                    <td><b>PF&DI </b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal81"><b>
                                                    {{ $recomList[57] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal82"><b>
                                                    {{ $recomList[58] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal83"><b>
                                                    {{ $recomList[59] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal84"><b>
                                                    {{ $recomList[58]+$recomList[59]+ $recomList[57] }}</b></a>

                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">6</td>
                            <td><b>Radio Fitt</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal25"><b>
                                            {{ $recomList[15] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal26"><b>
                                            {{ $recomList[16] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal27"><b>
                                            {{ $recomList[17] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal28"><b>
                                            {{ $recomList[15]+$recomList[16]+$recomList[17] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">21</td>
                                    <td><b>Music</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal85"><b>
                                                    {{ $recomList[60] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal86"><b>
                                                    {{ $recomList[61] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal87"><b>
                                                    {{ $recomList[62] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal88"><b>
                                                    {{ $recomList[61] + $recomList[62] + $recomList[60] }}</b></a>

                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">7</td>
                            <td><b>Gen Engg</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal29"><b>
                                    {{ $recomList[18] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal30"><b>
                                    {{ $recomList[19] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal31"><b>
                                        {{ $recomList[20] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal32"><b>
                                    {{ $recomList[18] + $recomList[19] + $recomList[20] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">22</td>
                                    <td><b>GC</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal89"><b>
                                                    {{ $recomList[63] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal90"><b>
                                                    {{ $recomList[64] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal91"><b>
                                                    {{ $recomList[65] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal92"><b>
                                                    {{ $recomList[64]+$recomList[65]+ $recomList[63] }} </b></a>

                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">8</td>
                            <td><b>MT Fitt</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal33"><b>
                                        {{ $recomList[21] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal34"><b>
                                        {{ $recomList[22] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal35"><b>
                                        {{ $recomList[23] }}</b></a>
                            </td>

                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal36"><b>
                                        {{ $recomList[21] + $recomList[22] + $recomList[23] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">23</td>
                                    <td><b>Provost</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal93"><b>
                                                    {{ $recomList[66] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal94"><b>
                                                    {{ $recomList[67] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal95"><b>
                                                    {{ $recomList[68] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal96"><b>
                                                    {{ $recomList[67]+$recomList[68]+ $recomList[66] }}</b></a>

                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">9</td>
                            <td><b>MT Optr</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal37"><b>
                                            {{ $recomList[24] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal38"><b>
                                            {{ $recomList[25] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal39"><b>
                                            {{ $recomList[26] }}</b></a>
                            </td>

                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal40"><b>
                                            {{ $recomList[24]+$recomList[25]+$recomList[26] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">24</td>
                                    <td><b>Cy Asst</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal97"><b>
                                                    {{ $recomList[69] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal98"><b>
                                                    {{ $recomList[70] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="#" data-toggle="modal" class="btn btn-success btn-width"><span
                                                class="glyphicon glyphicon-edit"></span><b>
                                                    -</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal100"><b>
                                                    {{ $recomList[70]+$recomList[69] }}</b></a>

                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">10</td>
                            <td><b>Grd Sig</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal41"><b>
                                            {{ $recomList[27] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal42"><b>
                                            {{ $recomList[28] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal43"><b>
                                            {{ $recomList[29] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal44"><b>
                                            {{ $recomList[27]+$recomList[28]+$recomList[29] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">25</td>
                                    <td><b>Edn Instr</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal101"><b>
                                                    {{ $recomList[71] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal102"><b>
                                                    {{ $recomList[72] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="#" data-toggle="modal" class="btn btn-success btn-width"><span
                                                class="glyphicon glyphicon-edit"></span><b>
                                                    -</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal104"><b>
                                                {{ $recomList[71]+$recomList[72] }} </b></a>

                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">11</td>
                            <td><b>Radar Optr</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal45"><b>
                                            {{ $recomList[30] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal46"><b>
                                            {{ $recomList[31] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal47"><b>
                                            {{ $recomList[32] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal48"><b>
                                            {{ $recomList[30]+$recomList[31]+$recomList[32] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">26</td>
                            <td><b>Flt Engr</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal105"><b>
                                            {{ $recomList[73] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal106"><b>
                                            {{ $recomList[74] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal107"><b>
                                            {{ $recomList[75] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal108"><b>
                                            {{ $recomList[74]+$recomList[75]+ $recomList[73] }} </b></a>

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">12</td>
                            <td><b>ATCA</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal49"><b>
                                            {{ $recomList[33] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal50"><b>
                                            {{ $recomList[34] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal51"><b>
                                            {{ $recomList[35] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal52"><b>
                                            {{ $recomList[33]+$recomList[34]+$recomList[35] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">27</td>
                                    <td><b>LM</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal109"><b>
                                                    {{ $recomList[76] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal110"><b>
                                                    {{ $recomList[77] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal111"><b>
                                                    {{ $recomList[78] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal112"><b>
                                                    {{ $recomList[77]+$recomList[78]+ $recomList[76] }} </b></a>

                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">13</td>
                            <td><b>Met Asst</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal53"><b>
                                            {{ $recomList[36] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal54"><b>
                                            {{ $recomList[37] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal55"><b>
                                            {{ $recomList[38] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal56"><b>
                                            {{ $recomList[36]+$recomList[37]+$recomList[38] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">28</td>
                                    <td><b>Air Gunner</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal113"><b>
                                                    {{ $recomList[79] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal114"><b>
                                                    {{ $recomList[80] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal115"><b>
                                                    {{ $recomList[81] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal116"><b>
                                                    {{ $recomList[79]+$recomList[81]+ $recomList[80] }} </b></a>

                                    </td>
                                    <td></td>

                        </tr>
                        <tr>
                            <td align="center">14</td>
                            <td><b>Med Asst</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal57"><b>
                                            {{ $recomList[39] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal58"><b>
                                            {{ $recomList[40] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal59"><b>
                                            {{ $recomList[41] }}</b></a>
                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal60"><b>
                                            {{ $recomList[39]+$recomList[40]+$recomList[41] }}</b></a>

                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center">29</td>
                                    <td><b>Air Std</b></td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal117"><b>
                                                    {{ $recomList[82] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal118"><b>
                                                    {{ $recomList[83] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal119"><b>
                                                    {{ $recomList[84] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal120"><b>
                                                    {{ $recomList[83]+$recomList[84]+$recomList[82] }} </b></a>

                                    </td>
                                    <td></td>
                        </tr>
                        <tr>
                            <td align="center">15</td>
                            <td><b>Log Asst</b></td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal61"><b>
                                            {{ $recomList[42] }}</b></a>

                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal62"><b>

                                            {{ $recomList[43] }}</b></a>

                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal63"><b>
                                            {{ $recomList[44] }}</b></a>

                            </td>
                            <td align="center">
                                <a href="" class="btn btn-success btn-width" data-bs-toggle="modal"
                                data-bs-target="#exampleModal64"><b>
                                            {{ $recomList[42]+$recomList[43]+$recomList[44] }}</b></a>


                            </td>
                            <td style="border-right: 2px solid black;"></td>
                            <td align="center"></td>
                                    <td><b>Grand Total</b></td>
                                    <td align="center">
                                        <a href="#" data-toggle="modal" class="btn btn-primary btn-width"><span
                                                class="glyphicon glyphicon-edit"></span><b>
                                                    {{ $recomList[85] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="#" data-toggle="modal" class="btn btn-primary btn-width"><span
                                                class="glyphicon glyphicon-edit"></span><b>
                                                    {{ $recomList[86] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="#" data-toggle="modal" class="btn btn-primary btn-width"><span
                                                class="glyphicon glyphicon-edit"></span><b>
                                                    {{ $recomList[87] }}</b></a>
                                    </td>
                                    <td align="center">
                                        <a href="#" data-toggle="modal" class="btn btn-primary btn-width"><span
                                                class="glyphicon glyphicon-edit"></span><b>
                                                    {{ $recomList[88] }}</b></a>
                                    </td>
                                    <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>




    @endsection

    @push('other_script')

    <script>
        let table = new DataTable('table.display', {
        info: false,
        ordering: false,
        paging: false,
        search:true,
        layout: {
            topStart: {
                    buttons: [ 'excel']
                }
            // topStart: 'pageLength',
            // topEnd: 'search',
            // topStart: 'info',
            // bottomEnd: 'paging'
        }


        });
    </script>
    @endpush

    @push('other_script')
    @endpush

    </body>

    </html>
