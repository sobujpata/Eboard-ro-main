@extends('layout.app-pb')

@section('content')
    <div class="container-fluid p-0">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <p class="ex1"></p>
        <p class="ex1"></p>
        <div align="center" class="col-lg-12" style="background:#33a8ff;">
            <h3 align="center" class="trade_header"><b>
                    @php
                        if ($sheetNo == 1) {
                            echo 'SWO - MWO';
                        } elseif ($sheetNo == 2) {
                            echo 'WO - SWO';
                        } else {
                            echo 'Sgt - WO';
                        }
                    @endphp
                    : {{ $trade }}</b></h3>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white">
                    <!-- previouse promotion board -->
                    <div class="container-md" style="padding:.5rem">
                        <table class="table-bordered bg-primary text-white border-white" style="width:100%">
                            <tr>
                                <td align="center" colspan="2"><b><u>PB-@php
                                    $year = date('Y') - 1;
                                    echo $year;
                                @endphp</u></b></td>
                                <td align="center" colspan="4"><b><u>VAC-@php
                                    $year = date('Y') - 1;
                                    echo $year;
                                @endphp</u></b></td>
                                <td align="center"><b><u>Score</u></b></td>
                            </tr>
                            @foreach ($previousPb as $prePb)
                                <tr>
                                    <td align="center"><b>Estb</b></td>
                                    <td align="center"><b>Str</b></td>
                                    <td align="center"><b>Exist</b></td>
                                    <td align="center"><b>Retd</b></td>
                                    <td align="center"><b>Vac</b></td>
                                    <td align="center"><b>Promo</b></td>
                                    <td align="center"><b>{{ $prePb->score_max }}</b></td>
                                </tr>
                                <tr>
                                    <td align="center"><b>{{ $prePb->estb }}</b></td>
                                    <td align="center"><b>{{ $prePb->str }}</b></td>
                                    <td align="center"><b>{{ $prePb->exist }}</b></td>
                                    <td align="center"><b>{{ $prePb->retd }}</b></td>
                                    <td align="center"><b>{{ $prePb->ttl }}</b></td>
                                    <td align="center"><b>{{ $prePb->promotion }}</b></td>
                                    <td align="center"><b>{{ $prePb->score_min }}</b></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card text-white" style="background-color: #28a745 !important;">
                    <div class="container-md" style="padding:.71rem">
                        <table class="table-bordered text-white border-white" style="width:100%">
                            <tr>
                                <td align="center"><b>Entry</b></td>
                                <td align="center"><b>Pers</b></td>
                                <td align="center"><b>Retd</b></td>
                                <td align="center" style="vertical-align: top; background-color:#007bff!important;">
                                    <b>VAC</b></td>
                                <td align="center"><b>Entry</b></td>
                                <td align="center"><b>Recom</b></td>
                            </tr>

                            <td align="center" style="vertical-align: top;">
                                <b>
                                    @foreach ($totalEntry as $singleEntry)
                                        {{ $singleEntry->entry_no }}<br>
                                    @endforeach
                                </b>
                            </td>
                            <td align="center" style="vertical-align: top;">
                                <b>
                                    @foreach ($totalEntry as $singleEntry)
                                        {{ $singleEntry->pers_count }}<br>
                                    @endforeach
                                </b>
                            </td>

                            <td align="center" style="vertical-align: middle;">
                                <b>
                                    {{-- @dd($rank) --}}
                                    @foreach ($totalEntry as $singleEntry)
                                        @if ($sheetNo == 1)
                                            @if($trade == 'Cy Asst')
                                                {{ $singleEntry->entry_no + 2020 }}<br>
                                            @elseif($trade == 'Edn Instr')
                                                {{ $singleEntry->entry_no + 2015 }}<br>
                                            @else
                                                {{ $singleEntry->entry_no + 2003 }}<br>
                                            @endif
                                        @elseif($sheetNo == 2)
                                            @if($trade == 'Cy Asst')
                                                {{ $singleEntry->entry_no + 2024 }}<br>
                                            @elseif($trade == 'Edn Instr')
                                                {{ $singleEntry->entry_no + 2014 }}<br>
                                            @else
                                                {{ $singleEntry->entry_no + 2001 }}<br>
                                            @endif
                                        @else
                                            {{ $singleEntry->entry_no + 1999 }}<br>
                                        @endif
                                    @endforeach
                                </b>
                            </td>
                            <td align="center" style="vertical-align: top !important; background-color:#007bff!important;">
                                <b>
                                    @foreach ($vacNextYear as $vacYear)
                                        {{ 'PB-' . substr(date('Y') + 1, -2) . ': ' . $vacYear->next_yr }}<br>
                                        {{ 'PB-' . substr(date('Y') + 2, -2) . ': ' . $vacYear->next_2yrs }}
                                    @endforeach
                                </b>
                            </td>
                            <td align="center" style="vertical-align: top;">
                                <b>
                                    @foreach ($totalEntry as $singleEntry)
                                        {{ $singleEntry->entry_no }}<br>
                                    @endforeach
                                </b>
                            </td>
                            <td align="center" style="vertical-align: top;">
                                <b>
                                    @foreach ($countRecom as $recom)
                                        {{ $recom->pers_recom }}<br>
                                    @endforeach
                            </td>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card" style="background-color: #28a745 !important;">
                    <div class="container-md" style="padding:.5rem">
                        <table class="table-bordered text-white border-white" style="width:100%">
                            <tr>
                                <td align="center"><b><u>Score</u></b></td>
                                <td align="center"><b><u>Booklet</u></b></td>
                                <td align="center"><b><u>Range</u></b></td>
                                <td align="center"><b><u>Recom Score</u></b></td>
                            </tr>
                            <tr>
                                <td><b>Max</b></td>
                                <td align="center">
                                    <b>
                                        {{ $scoreMAxMin->max_score }}
                                    </b>
                                </td>
                                <td align="center"><b>(150+)={{ $aboveScore }}</b></td>
                                <td align="center">
                                    <b>
                                        {{ $recomScore->max_recom }}
                                    </b>
                                </td>

                            </tr>
                            <td><b>Min</b></td>

                            <td align="center">
                                <b>
                                    {{ $scoreMAxMin->min_score }}
                                </b>
                            </td>
                            <td align="center"><b>(150-)={{ $bellowScore }}</b></td>
                            <td align="center">
                                <b>
                                    {{ $recomScore->min_recom }}
                                </b>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary ">
                    <!-- previouse promotion board -->
                    <div class="container-md" style="padding:.5rem">

                        <table class="table-bordered text-white border-white" style="width:100%">
                            <tr>
                                <td align="center" colspan="2"><b><u>PB-@php
                                    $year = date('Y');
                                    echo $year;
                                @endphp</u></b></td>
                                <td align="center" colspan="3"><b><u>VAC-@php
                                    $year = date('Y');
                                    echo $year;
                                @endphp</u></b></td>
                                <td align="center"colspan="2"><b><u>Decision</u></b></td>
                            </tr>
                            <tr>
                                <td align="center"><b>Estb</b></td>
                                <td align="center"><b>Str</b></td>
                                <td align="center"><b>Exist</b></td>
                                <td align="center"><b>Retd</b></td>
                                <td align="center" style="display:@foreach($rank as $rk) @if( $rk->rank =='SWO' ) {{'none'}} @endif  @endforeach"><b></b> CD</td>
                                <td align="center"><b>Vac</b></td>
                                <td align="center"><b>Recom</b></td>
                                <td align="center"><b>Left</b></td>
                            </tr>

                            @if ($currentPb)
                                <tr>
                                    <td align="center"><b>{{ $currentPb->estb }}</b></td>
                                    <td align="center"><b>{{ $currentPb->str }}</b></td>
                                    <td align="center"><b>{{ $currentPb->exist }}</b></td>
                                    <td align="center"><b>
                                        @foreach($rank as $rk)
                                            @if($rk->rank=='SWO')
                                                {{ $currentPb->retd }}
                                            @elseif($rk->rank=='WO')
                                                {{ $currentPb->retd - $lastEntrySwo }}
                                            @elseif($rk->rank=='Sgt')
                                                {{ $currentPb->retd - $lastEntryWo }}
                                            @endif
                                        @endforeach
                                        </b></td>
                                    <td align="center" style="display: @foreach($rank as $rk) @if( $rk->rank =='SWO' ) {{'none'}} @endif  @endforeach"><b>
                                        @foreach($rank as $rk)
                                            @if($rk->rank=='WO')
                                                {{ $recomMwo }}
                                            @elseif($rk->rank=='Sgt')
                                                {{ $recomSwo }}
                                            @endif
                                        @endforeach
                                    </b></td>
                                    <td align="center"><b>
                                        @foreach($rank as $rk)
                                            @php
                                                if($rk->rank=='SWO'){
                                                    $vac=$currentPb->ttl;
                                                    echo $vac;
                                                }elseif($rk->rank=='WO'){
                                                    $exist = $currentPb->exist;
                                                    $retd=$currentPb->retd - $lastEntrySwo;
                                                    $vac =  $currentPb->exist + $retd + $recomMwo;
                                                    echo $vac;
                                                }elseif($rk->rank=='Sgt'){
                                                    $exist = $currentPb->exist;
                                                    $retd = $currentPb->retd - $lastEntryWo;
                                                    $vac = $exist+$retd+$recomSwo;
                                                    echo $vac;
                                                }
                                            @endphp
                                        {{-- @dd($vac) --}}
                                        @endforeach
                                    </b></td>
                                    <td align="center" id="total-recom">
                                        <h5><span><b class="blinking" id="checkId1">{{ $recompers }}</b></h5></span>
                                    </td>
                                    <td align="center">
                                        <h5><span class="blinking">
                                            <b id="minCheck1">
                                                {{ $vac - $recompers }}
                                            </b>
                                        </h5></span>
                                    </td>
                                </tr>
                            @else
                                Property not found or variable is null
                            @endif


                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div id="recom-display" class="sticky-top" style="width:450px; background-color:blue; color:white; border-radius: 50%; text-align:center; overflow:visible; float:right; top:60px; display:none;">
            <div class="card bg-primary ">
                <!-- previouse promotion board -->
                <div class="container-md" style="padding:.5rem">

                    <table class="table-bordered text-white border-white" style="width:100%">
                        <tr>
                            <td align="center" colspan="2"><b><u>PB-@php
                                $year = date('Y');
                                echo $year;
                            @endphp</u></b></td>
                            <td align="center" colspan="3"><b><u>VAC-@php
                                $year = date('Y');
                                echo $year;
                            @endphp</u></b></td>
                            <td align="center"colspan="2"><b><u>Decision</u></b></td>
                        </tr>
                        <tr>
                            <td align="center"><b>Estb</b></td>
                            <td align="center"><b>Str</b></td>
                            <td align="center"><b>Exist</b></td>
                            <td align="center"><b>Retd</b></td>
                            <td align="center" style="display:@foreach($rank as $rk) @if( $rk->rank =='SWO' ) {{'none'}} @endif  @endforeach"><b></b> CD</td>
                            <td align="center"><b>Vac</b></td>
                            <td align="center"><b>Recom</b></td>
                            <td align="center"><b>Left</b></td>
                        </tr>

                        @if ($currentPb)
                            <tr>
                                <td align="center"><b>{{ $currentPb->estb }}</b></td>
                                <td align="center"><b>{{ $currentPb->str }}</b></td>
                                <td align="center"><b>{{ $currentPb->exist }}</b></td>
                                <td align="center"><b>
                                    @foreach($rank as $rk)
                                        @if($rk->rank=='SWO')
                                            {{ $currentPb->retd }}
                                        @elseif($rk->rank=='WO')
                                            {{ $currentPb->retd - $lastEntrySwo }}
                                        @elseif($rk->rank=='Sgt')
                                            {{ $currentPb->retd - $lastEntryWo }}
                                        @endif
                                    @endforeach
                                    </b></td>
                                <td align="center" style="display: @foreach($rank as $rk) @if( $rk->rank =='SWO' ) {{'none'}} @endif  @endforeach"><b>
                                    @foreach($rank as $rk)
                                        @if($rk->rank=='WO')
                                            {{ $recomMwo }}
                                        @elseif($rk->rank=='Sgt')
                                            {{ $recomSwo }}
                                        @endif
                                    @endforeach
                                </b></td>
                                <td align="center"><b>
                                    @foreach($rank as $rk)
                                        @php
                                            if($rk->rank=='SWO'){
                                                $vac=$currentPb->ttl;
                                                echo $vac;
                                            }elseif($rk->rank=='WO'){
                                                $exist = $currentPb->exist;
                                                $retd=$currentPb->retd - $lastEntrySwo;
                                                $vac =  $currentPb->exist + $retd + $recomMwo;
                                                echo $vac;
                                            }elseif($rk->rank=='Sgt'){
                                                $exist = $currentPb->exist;
                                                $retd = $currentPb->retd - $lastEntryWo;
                                                $vac = $exist+$retd+$recomSwo;
                                                echo $vac;
                                            }
                                        @endphp
                                    {{-- @dd($vac) --}}
                                    @endforeach
                                </b></td>
                                <td align="center" id="total-recom">
                                    <h5><span><b class="blinking" id="checkId">{{ $recompers }}</b></h5></span>
                                </td>
                                <td align="center">
                                    <h5><span class="blinking">
                                        <b id="minCheck">
                                            {{ $vac - $recompers }}
                                        </b>
                                    </h5></span>
                                </td>
                            </tr>
                        @else
                            Property not found or variable is null
                        @endif


                    </table>

                </div>
            </div>
        </div>
        <div class="page-header mt-2 mb-2">
            <div class='row'>
                <div class='col-md-4 text-right'></div>
                <div class='col-md-2 text-right'><b><h4 id="rcorners1">Please Select Entry No ></h4></b></div>
                <div class='col-md-2'>
                    <select id="positionFilter" class="form-control" name="entry_no">
                        <option value="" selected='selected' id="allShow">All Entry</option>
                    </select>
                </div>
                <div class='col-md-4 text-right'></div>
            </div>
        </div>
        {{-- {{ $userName->userName }} --}}
        <div class="container-fluid">
            <table id="tableData" class="table table-striped table-bordered table-responsive-lg table-hover" style="width:100%">
                <thead>
                    <tr align="center" style="background:#33a8ff;">
                        <th style="vertical-align: middle; width: 2% !important;">SL No</th>
                        <th style="vertical-align: middle; width: 5% !important;">Image</th>
                        <th style="vertical-align: middle; width: 4% !important;">BD No</th>
                        <th style="vertical-align: middle; width: 15% !important;">Rank & Name</th>

                        <th style="vertical-align: middle; width: 3% !important;" >Entry No</th>

                        <th style="vertical-align: middle; width: 5% !important;">PAR (Avg)</th>
                        <th style="vertical-align: middle; width: 5% !important;">Marks(TTB, TTA, ST) (Avg)</th>
                        <th style="vertical-align: middle; width: 5% !important;">Total Score</th>
                        <th style="vertical-align: middle; width: 3% !important;">Entry Sr</th>
                        <th style="vertical-align: middle; width: 3% !important;">Comd Sr</th>
                        <th style="vertical-align: middle; width: 5% !important;">Conduct Sheet</th>
                        <th style="vertical-align: middle; width: 3% !important;">Weight (lbs)</th>
                        <th style="vertical-align: middle; width: 4% !important;">Base/ Unit</th>
                        <th style="vertical-align: middle; width: 5% !important;">Recom</th>
                        <th style="vertical-align: middle; width: 15% !important;">Remarks</th>
                        <th style="vertical-align: middle; width: 10% !important;">Remarks By PB</th>
                        {{-- <th style="vertical-align: middle; width: 2% !important; ">Decision</th> --}}
                        <th style="vertical-align: middle; width: 2% !important; display:@php if($userName->userName == 'pbuser'){ echo 'none;'; } @endphp">Decision</th>
                        {{-- <th style="vertical-align: middle; width: 2% !important;">Edit</th> --}}
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $item)
                        <tr id="tr{{ $item->id }}"
                            class= "{{ $item->decision == 'true' ? 'tr-row-bg-select' : ($item->decision == 'false' ? 'tr-row-bg-stanby' : 'inherit') }}">
                            <td class="text-center">{{ $i++ }}</td>
                            <td align='center'><img src='{{ asset('promotionBoard/image') }}/{{ $item->bdno }}.gif'
                                    style='height: 90px; width: 80px; border:3px solid #B2B8B7; border-radius: 3px;'
                                    alt='Photo N/A' class="zoom"></td>
                            <td align='center' style="vertical-align: middle"><a
                                    href='{{ asset('promotionBoard/bioData') }}/{{ $item->bdno }}.pdf' target='_blank'
                                    style="text-decoration: none"><b>{{ $item->bdno }}</b></a></td>
                            <td align='left' style="vertical-align: middle">{{ $item->rank }} {{ $item->name }}
                            </td>
                            <td class="text-center" style="vertical-align: middle">{{ $item->entry_no }}</td>
                            <td class="text-center" style="vertical-align: middle"><b>{{ $item->avg_par }}</b></td>
                            <td class="text-center" style="vertical-align: middle"><b>{{ $item->career_marks }}</b></td>
                            <td class="text-center" style="vertical-align: middle"><b>{{ $item->ttl_score }}</b></td>
                            <td class="text-center" style="vertical-align: middle"><b>{{ $item->es }}</b></td>
                            <td class="text-center" style="vertical-align: middle"><b>{{ $item->cs }}</b></td>
                            <td class="text-center" style="vertical-align: middle"><b>{{ $item->conduct_sheet }}</b></td>
                            <td class="text-center">{{ $item->weight }}</td>
                            <td class="text-center">{{ $item->base_unit }}</td>
                            <td class="text-center" style="vertical-align: middle">
                                @if ($item->decision == 'true')
                                    Yes
                                @else
                                    NO
                                @endif
                            </td>
                            <td class="text-center" style="vertical-align: middle; text-align:left;">
                                <b>{!!  $item->other_rmks !!}</b></td>
                            <td align='left' style="vertical-align: middle; text-align:left;">
                                <b>{!! $item->rmks !!}<br>{{ $item->rmks_1 }}</b></td>
                            <td class="text-center" style="vertical-align: middle; display:@php if($userName->userName == 'pbuser'){ echo 'none;'; } @endphp" >
                            {{-- <td class="text-center" style="vertical-align: middle; " > --}}
                                @if ($item->decision == 'true')
                                    <img src="{{ asset('icon/ok.png') }}" style="border-radius: 7px;">
                                @elseif ($item->decision == 'false')
                                    <img src="{{ asset('icon/not.png') }}" style="border-radius: 7px;">
                                @else
                                    <label class='container1'>
                                        <input type="checkbox"
                                            data-column_name="decision"
                                            {{-- <!-- Data attribute for column name --> --}}
                                            data-id="{{ $item->id }}"
                                            {{-- <!-- Data attribute for item ID --> --}}
                                            {{ $item->decision ? 'checked' : '' }}> <!-- Blade syntax to conditionally add 'checked' attribute -->
                                        <span class="checkmark"></span> <!-- This is likely the styling for the checkbox -->
                                    </label>
                                @endif
                                    <br>
                                <button style="height: 35px;" type="button" class="btn btn-success mt-2" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $item->id }}">
                                    <img style="width: 14px;" src='{{ asset('icon/edit.png') }}'>
                                </button>
                                {{-- <button style="height: 35px; " type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" --}}
                                <button style="height: 35px; display:@php if($userName->userName !== 'pbedit'){ echo 'none;'; } @endphp" type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                                    data-bs-target="#persEdit{{ $item->id }}">
                                    <img style="width: 14px;" src='{{ asset('icon/edit.png') }}'>
                                </button>

                                <!-- Recom Edit -->
                                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background-color: #06c5f0;">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="myModalLabel" style="width:100%;">Remarks
                                                    Edit</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    @php

                                                        $id = $item->id;
                                                    @endphp
                                                    <form method="POST" action="{{ route('pb.update', $item->id) }}">
                                                        @csrf
                                                        <h4 style="text-align: left;">Remarks By Board:</h4>
                                                        <div class="form-check" style="text-align:left; font-size: 18px;">
                                                            @php
                                                                $rmks = $item->rmks;
                                                                $rmk = explode(',', $rmks);
                                                            @endphp
                                                            <input style="height:15px; width:15px; vertical-align: middle;"
                                                                class="form-check-input" type="checkbox" name="rmks[]"
                                                                value="Not Cleared By PB" id="flexCheckDefault"
                                                                @if (in_array('Not Cleared By PB', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>

                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Not Cleared By PB.
                                                            </label>
                                                        </div>
                                                        <div class="form-check" style="text-align:left; font-size: 18px;">
                                                            @php
                                                                $rmks = $item->rmks;
                                                                $rmk = explode(',', $rmks);
                                                            @endphp
                                                            <input style="height:15px; width:15px; vertical-align: middle;"
                                                                class="form-check-input" type="checkbox" name="rmks[]"
                                                                value="No Trade Vacancy" id="flexCheckDefault"
                                                                @if (in_array('No Trade Vacancy', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>

                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                No Trade Vacancy.
                                                            </label>
                                                        </div>
                                                        <div class="form-check" style="text-align:left; font-size: 18px;">
                                                            <input style="height:15px; width:15px; vertical-align: middle;"
                                                                class="form-check-input" type="checkbox" name="rmks[]"
                                                                value="Low Score" id="flexCheckDefault"
                                                                @if (in_array('Low Score', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Low Score.
                                                            </label>
                                                        </div>
                                                        <div class="form-check" style="text-align:left; font-size: 18px;">
                                                            <input style="height:15px; width:15px; vertical-align: middle;"
                                                                class="form-check-input" type="checkbox" name="rmks[]"
                                                                value="Low Medical Cat." id="flexCheckDefault"
                                                                @if (in_array('Low Medical Cat.', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Low Medical Cat..
                                                            </label>
                                                        </div>

                                                        <div class="form-check" style="text-align:left; font-size: 18px;">
                                                            <input style="height:15px; width:15px; vertical-align: middle;"
                                                                class="form-check-input" type="checkbox" name="rmks[]"
                                                                value="Deferred For 1 Year" id="flexCheckDefault"
                                                                @if (in_array('Deferred For 1 Year', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Deferred For 1 Year.
                                                            </label>
                                                        </div>
                                                        <div class="form-check" style="text-align:left; font-size: 18px;">
                                                            <input style="height:15px; width:15px; vertical-align: middle;"
                                                                class="form-check-input" type="checkbox" name="rmks[]"
                                                                value="No Further Promotion" id="flexCheckDefault"
                                                                @if (in_array('No Further Promotion', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                No Further Promotion.
                                                            </label>
                                                        </div>
                                                        <div class="form-check" style="text-align:left; font-size: 18px;">
                                                            <input style="height:15px; width:15px; vertical-align: middle;"
                                                                class="form-check-input" type="checkbox" name="rmks[]"
                                                                value="Decision Pending" id="flexCheckDefault"
                                                                @if (in_array('Decision Pending', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Decision Pending.
                                                            </label>
                                                        </div>


                                                        <hr>
                                                        <div class="form-group" style="text-align:left; font-size: 18px;">
                                                            <label class="" for="flexCheckDefault">OtherRemarks:
                                                            </label>
                                                            <textarea name="rmks_1" class="form-control" id="validationTextarea" placeholder="Remarks">{{ $item->rmks_1 }}</textarea>

                                                        </div>
                                                        <hr>
                                                        <h4 style="text-align: left;">Please Select Your Decision:
                                                        </h4>
                                                        <div class="form-check" style="text-align:left; font-size: 18px;">

                                                            <input style="height:15px; width:15px; vertical-align: middle;"
                                                                type="radio" class="form-check-input" id="final"
                                                                name="decision" value="true"
                                                                @if ($item->decision == 'true') {{ 'checked' }} @endif>
                                                            <label class="form-check-label"
                                                                for="final">Recommended</label><br>
                                                            <input style="height:15px; width:15px;" type="radio"
                                                                class="form-check-input" id="pending" name="decision"
                                                                value="false"
                                                                @if ($item->decision == 'false') {{ 'checked' }} @endif>
                                                            <label class="form-check-label" for="pending">Not
                                                                Recommended</label><br>
                                                            <input style="height:15px; width:15px;" type="radio"
                                                                class="form-check-input" id="no_decision" name="decision"
                                                                value=""
                                                                @if ($item->decision == ' ') {{ 'checked' }} @endif>
                                                            <label class="form-check-label" for="no_decision">Clear
                                                                Decision</label>
                                                        </div>
                                                        <input type="hidden" name="trade"
                                                            value="{{ $item->trade }}">
                                                        <input type="hidden" name="sheetNo"
                                                            value="{{ $item->sheetNo }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success"
                                                                name="update_data">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
                                <!-- Person Edit Modal -->
                                <div class="modal fade" id="persEdit{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content" style="background-color: #06c5f0;">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="myModalLabel" style="width:100%;">Update Person</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    @php

                                                        $id = $item->id;
                                                    @endphp
                                                    <form method="POST" action="{{ route('pb.edit', $item->id) }}" style="text-align: left;">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="s_no">S/L</label>
                                                                    <input type="text" name="s_no" id="" class="form-control" value="{{$item->s_no}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="bdno">BD No</label>
                                                                    <input type="text" name="bdno" id="" class="form-control" value="{{$item->bdno}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="rank">Rank</label>
                                                                    <input type="text" name="rank" id="" class="form-control" value="{{$item->rank}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" name="name" id="" class="form-control" value="{{$item->name}}">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="trade">Trade</label>
                                                                    <input type="text" name="trade" id="" class="form-control" value="{{$item->trade}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="entry_no">Entry No</label>
                                                                    <input type="text" name="entry_no" id="" class="form-control" value="{{$item->entry_no}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="avg_par">PAR (AVG)</label>
                                                                    <input type="text" name="avg_par" id="" class="form-control" value="{{$item->avg_par}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="career_marks">Career Marks</label>
                                                                    <input type="text" name="career_marks" id="" class="form-control" value="{{$item->career_marks}}">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="ttl_score">Total Score</label>
                                                                    <input type="text" name="ttl_score" id="" class="form-control" value="{{$item->ttl_score}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="es">Entry Sr</label>
                                                                    <input type="text" name="es" id="" class="form-control" value="{{$item->es}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cs">Command Sr</label>
                                                                    <input type="text" name="cs" id="" class="form-control" value="{{$item->cs}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="conduct_sheet">Conduct Sheet</label>
                                                                    <input type="text" name="conduct_sheet" id="" class="form-control" value="{{$item->conduct_sheet}}">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="weight">Weight (Lbp)</label>
                                                                    <input type="text" name="weight" id="" class="form-control" value="{{$item->weight}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="base_unit">Base Unit</label>
                                                                    <input type="text" name="base_unit" id="" class="form-control" value="{{$item->base_unit}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="sheetNo">Sheet No</label>
                                                                    <input type="text" name="sheetNo" id="" class="form-control" value="{{$item->sheetNo}}">
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="other_rmks">Remarks</label>
                                                                    <textarea name="other_rmks" id="" cols="" rows="3" class="form-control">{{$item->other_rmks}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('promotionBoard/image') }}/{{ $item->bdno }}.gif" class="" alt="" style="width: 70px">
                                                                <input type="file" name="image" id="" value="">
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success"
                                                                name="update_data">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="text-center sticky-bottom">
                <a href="">
                    <button type="submit" class="btn btn-primary btn-lg" style="width:200px">Confirm</button>
                </a>
            </p>
        </div>
    </div>
@endsection


@push('other_script')
    <script>
        $(document).ready(function() {
            // Attach change event handler to checkboxes
            $('input[type="checkbox"]').change(function() {
                // Get the column name and ID from data attributes
                var column_name = $(this).data('column_name');
                var id = $(this).data('id');

                // Determine the new value of the decision based on checkbox state
                var decision = $(this).is(':checked');
                // console.log(decision);
                if(decision==true){
                    $("#tr"+id).addClass('tr-row-bg-select');
                }
                if(decision==false){
                    $("#tr"+id).addClass('tr-row-bg-stanby');
                }
                // Send AJAX request to update decision status
                $.ajax({
                type: 'get',
                url: '/items/' + id + '/update-decision',
                data: {
                    'decision': decision // Example decision value
                },
                success: function(response) {
                    // alert(response.success);
                },
                error: function(response) {

                }
            });
            });
        });

        $(function() {
            var test = localStorage.input === 'true' ? true : false;
            $('input').prop('unchecked', test || True);
        });

        $('input').on('change', function() {
            localStorage.input = $(this).is(':checked');
            // console.log($(this).is(':checked'));
            let result = ($(this).is(':checked'));
            // console.log(result);
            //document.getElementById("demo").innerHTML=result
        });
        $(document).ready(function() {
		// Initialize the sum variable with your starting number
		let sum = {{ $recompers }} // Example initial value
        // console.log(sum)
		let min = {{ $vac - $recompers }} // Example initial value

		$('input').on('change', function() {
			// Get the checked state
			if (localStorage.input === 'true') {
				let isChecked = $(this).is(':checked') ? 1 : 0;

				// Store the checked state in localStorage
				localStorage.setItem('input', isChecked);

				// Log the checked state to the console
				// console.log(isChecked);

				// Add the isChecked value to the sum
				sum += isChecked;
				min -= isChecked;

                if(min < 0){
                    document.getElementById("minCheck1").style.color='red';
                    document.getElementById("minCheck").style.color='red';
                }else{
                    document.getElementById("minCheck1").style.color='white';
                    document.getElementById("minCheck").style.color='white';
                }

				// Log the updated sum to the console
				// console.log('Updated sum:', sum);
				// console.log('Updated min:', min);

				document.getElementById("checkId1").innerHTML = sum;
				document.getElementById("minCheck1").innerHTML = min;
				document.getElementById("checkId").innerHTML = sum;
				document.getElementById("minCheck").innerHTML = min;
				// document.getElementById("rowColor").innerHTML= isChecked.style.backgroundColor='red';


				// Optionally update the DOM element with the sum
				// document.getElementById("sumId").innerHTML = sum;
			} else {
				let isUnChecked = $(this).is(':checked') ? 0 : 1;
				// Store the checked state in localStorage
				localStorage.setItem('input', isUnChecked);

				// Log the checked state to the console
				// console.log(isUnChecked);

				// Add the isUnChecked value to the sum
				sum -= isUnChecked;
				min += isUnChecked;


				// Log the updated sum to the console
				// console.log('Updated sum:', sum);
				// console.log('Updated min:', min);
				document.getElementById("checkId").innerHTML = sum;
				document.getElementById("minCheck").innerHTML = min;
			}
		});
    });

        $(document).ready(function() {
        // Initialize DataTable
        let table = new DataTable('#tableData', {
            info: true,
            ordering: true,
            paging: false,
            layout: {
                // topStart: 'pageLength',
                // topEnd: 'search',
                topStart: 'info',
                // bottomEnd: 'paging'
            }
        });

        // Function to populate dropdown with unique options from a column
        function populateDropdown() {
            // Get unique values from the Position column (index 2)
            var uniquePositions = [];
            table.column(4).data().each(function(value, index) {
                if (uniquePositions.indexOf(value) === -1) {
                    uniquePositions.push(value);  // Add unique values

                }
            });

            // Populate the dropdown with unique values
            var dropdown = $('#positionFilter');
            uniquePositions.forEach(function(position) {
                dropdown.append('<option value="' + position + '">' + position + '</option>');
            });
        }

        // Call the populateDropdown function after DataTable initialization
        populateDropdown();

         // Apply dropdown filter on Position column (index 4)
        $('#positionFilter').on('change', function() {
            var selectedValue = $(this).val();
            if (selectedValue === "") {
                table.column(4).search('').draw();  // Reset filter for "All Entry"
                table.order([0, 'asc']).draw();     // Sort column index 1 in ascending order
            } else {
                table.column(4).search(selectedValue).draw();  // Filter by selected value
                table.order([8, 'asc']).draw();     // Sort column index 8 in ascending order
            }
        });

    });

        $(document).ready(function(){
            window.addEventListener('scroll', function() {
            if (window.pageYOffset >= 250) {
                document.getElementById('recom-display').style.display = 'block';
            } else {
                document.getElementById('recom-display').style.display = 'none';
            }
            });

            let leftValue = document.getElementById('minCheck1').innerHTML;
            // console.log(leftValue);
            if(leftValue < 0){
                    document.getElementById("minCheck1").style.color='red';
                    document.getElementById("minCheck").style.color='red';
                }else{
                    document.getElementById("minCheck1").style.color='white';
                    document.getElementById("minCheck").style.color='white';
                }
        })
    </script>
@endpush
