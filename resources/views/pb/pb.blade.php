@extends('layout.app-pb')
@section('title',$trade.'-'.$rank->rank)
@section('content')
    <div class="container-fluid p-0 mt-4">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @php
            if ($sheetNo == 1) {
                $booklateRank = 'SWO';
            } elseif ($sheetNo == 2) {
                $booklateRank = 'WO';
            } else {
                $booklateRank = 'Sgt';
            }
        @endphp
        <div class="col-lg-12 text-center text-decoration-underline fw-bolder fs-3 mb-4">
            @php
                if ($sheetNo == 1) {
                    echo 'SWO - MWO';
                } elseif ($sheetNo == 2) {
                    echo 'WO - SWO';
                } else {
                    echo 'Sgt - WO';
                }
            @endphp
            : {{ $trade }}
        </div>
        <div class="row">
            {{-- Previous promotion board summary --}}
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
                                <td align="center" colspan="{{ $sheetNo == 1 ? 4 : 5 }}">
                                    <b><u>Vac-{{ date('Y') - 1 }}</u></b>
                                </td>

                                <td align="center"><b><u>Score</u></b></td>
                                <td align="center" rowspan="2"
                                    style="display:@php if($user->userName !== 'pbedit'){ echo 'none;'; } @endphp">
                                    <b><u>Action</u></b>
                                </td>
                            </tr>
                            @foreach ($previousPb as $prePb)
                                @php
                                    $preExist = $prePb->exist;
                                        if(strpos($preExist,'-')===0){
                                            $preExistResult = ltrim($preExist, '-')." Surp";
                                        }else{
                                            $preExistResult = $preExist;
                                        }
                                @endphp
                                <tr>
                                    <td align="center"><b>Estb</b></td>
                                    <td align="center"><b>Str</b></td>
                                    <td align="center"><b>Exist</b></td>
                                    <td align="center"><b>Retd</b></td>
                                    <td align="center" style="display: {{ $sheetNo == 1 ? 'none' : '' }};" class="">
                                        <b>P</b>
                                    </td>
                                    <td align="center"><b>Vac</b></td>
                                    <td align="center"><b>Promo</b></td>
                                    <td align="center"><b>{{ $prePb->score_max }}</b></td>
                                </tr>
                                <tr>
                                    <td align="center"><b>{{ $prePb->estb }}</b></td>
                                    <td align="center"><b>{{ $prePb->str }}</b></td>
                                    <td align="center"><b>{{ $preExistResult }}</b></td>
                                    <td align="center"><b>{{ $prePb->retd }}</b></td>
                                    <td align="center" style="display: {{ $sheetNo == 1 ? 'none' : '' }};">
                                        <b>{{ $prePb->promoted_pre_pb }}</b>
                                    </td>
                                    <td align="center"><b>{{ $prePb->ttl }}</b></td>
                                    <td align="center"><b>{{ $prePb->promotion }}</b></td>
                                    <td align="center"><b>{{ $prePb->score_min }}</b></td>
                                    <td align="center"
                                        style="display:@php if($user->userName !== 'pbedit'){ echo 'none;'; } @endphp">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#previous_pb{{ $prePb->id }}">
                                            Edit
                                        </button>
                                        @include('pb.previouse_pb')
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            {{-- Next 2yrs expected Vacency --}}
            <div class="col-xl-3 col-md-6">
                <div class="card text-white" style="background-color: #28a745 !important;">
                    <div class="container-md" style="padding:.71rem">
                        <table class="table-bordered text-white border-white" style="width:100%">
                            <tr>
                                <td align="center"><b>Entry</b></td>
                                <td align="center"><b>Pers</b></td>
                                <td align="center"><b>Retd</b></td>
                                <td align="center" style="vertical-align: top; background-color:#007bff!important;">
                                    <b>Vac</b>
                                </td>
                                <td align="center"><b>Entry</b></td>
                                <td align="center"><b>Recom</b></td>
                                <td align="center"
                                    style="display:@php if($user->userName !== 'pbedit'){ echo 'none;'; } @endphp">
                                    <b>Action</b>
                                </td>
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
                                    @foreach ($totalEntry as $singleEntry)
                                        {{ retairedYear($singleEntry->sample_doe, $singleEntry->sample_rank) }}<br>
                                    @endforeach
                                </b>
                            </td>
                            <td align="center" style="vertical-align: top !important; background-color:#007bff!important;">
                                <b>
                                    {{-- @dd($vacNextYear) --}}
                                    {{ 'PB-' . substr(date('Y') + 1, -2) . ': ' . ($vacNextYear->next_yr ?? 'N/A') }}<br>
                                    {{ 'PB-' . substr(date('Y') + 2, -2) . ': ' . ($vacNextYear->next_2yrs ?? 'N/A') }}
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
                            {{-- @dd($vacNextYear) --}}
                            <td align="center"
                                style="display:@php if($user->userName !== 'pbedit'){ echo 'none;'; } @endphp">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#next_2yrs{{ $vacNextYear->id }}">
                                    Edit
                                </button>
                                @include('pb.next_2yrs')
                            </td>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Score wise promotion --}}
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
            <!-- current promotion board -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary ">
                    <div class="container-md" style="padding:.5rem">
                        <table class="table-bordered text-white border-white" style="width:100%">
                            <tr>
                                <td align="center" colspan="2">
                                    <b><u>PB-@php
                                        $year = date('Y');
                                        echo $year;
                                    @endphp</u></b>
                                </td>
                                <td align="center"
                                    colspan="@if ($currentPb->rank == 'MWO') {{ '3' }} @else {{ '4' }} @endif">
                                    <b><u>Vac-@php
                                        $year = date('Y');
                                        echo $year;
                                    @endphp</u></b>
                                </td>
                                <td align="center"colspan="2"><b><u>Decision</u></b></td>
                                <td align="center" rowspan="2"
                                    style="display:@php if($user->userName !== 'pbedit'){ echo 'none;'; } @endphp">
                                    <b>Action</b>
                                </td>
                            </tr>
                            <tr>
                                <td align="center"><b>Estb</b></td>
                                <td align="center"><b>Str</b></td>
                                <td align="center"><b>Exist</b></td>
                                <td align="center"><b>Retd</b></td>
                                <td align="center"
                                    style="display:@if ($sgtSheet == '1') {{ 'none' }} @endif"><b>CD</b>
                                </td>
                                <td align="center"><b>Vac</b></td>
                                <td align="center"><b>Recom</b></td>
                                <td align="center"><b>Left</b></td>
                            </tr>
                            @php
                                $currentExist = $currentPb->exist;
                                    if(strpos($currentExist,'-')===0){
                                        $currentExistResult = ltrim($currentExist, '-')." Surp";
                                    }else{
                                        $currentExistResult = $currentExist;
                                    }
                            @endphp
                            <tr>
                                <td align="center"><b>{{ $currentPb->estb }}</b></td>
                                <td align="center"><b>{{ $currentPb->str }}</b></td>
                                <td align="center"><b>{{ $currentExistResult }}</b></td>
                                <td align="center">
                                    <b>
                                        {{-- @dd($sgtSheet) --}}
                                        @if ($sgtSheet == '1')
                                            {{ $currentPb->retd }}
                                        @elseif($sgtSheet == '2')
                                            {{ $currentPb->retd - $lastEntrySwo }}
                                        @elseif($sgtSheet == '3')
                                            {{ $currentPb->retd - $lastEntryWo }}
                                        @endif
                                    </b>
                                </td>
                                {{-- @dd() --}}
                                <td align="center"
                                    style="display: @if ($sgtSheet == '1') {{ 'none' }} @endif">
                                    <b>
                                        @if ($sgtSheet == '2')
                                            {{ $recomMwo }}
                                        @elseif($sgtSheet == '3')
                                            {{ $recomSwo }}
                                        @endif

                                    </b>
                                </td>
                                <td align="center">
                                    <b>
                                        @php
                                            $vac = 0;
                                        @endphp
                                        @php
                                            if ($sgtSheet == '1') {
                                                $vac = $currentPb->ttl;
                                                echo $vac;
                                            } elseif ($sgtSheet == '2') {
                                                $exist = $currentPb->exist;
                                                $retd = $currentPb->retd - $lastEntrySwo;
                                                $vac = $currentPb->exist + $retd + $recomMwo;
                                                echo $vac;
                                            } elseif ($sgtSheet == '3') {
                                                $exist = $currentPb->exist;
                                                $retd = $currentPb->retd - $lastEntryWo;
                                                $vac = $exist + $retd + $recomSwo;
                                                echo $vac;
                                            }
                                        @endphp
                                    </b>
                                </td>
                                <td align="center" id="total-recom">
                                    <span><b class="blinking fs-5" id="checkId1">{{ $recompers }}</b></span>
                                </td>
                                <td align="center">
                                    <span class="blinking fs-5">
                                        <b id="minCheck1">
                                            {{ $vac - $recompers }}
                                        </b>
                                    </span>
                                </td>
                                <td align="center"
                                    style="display:@php if($user->userName !== 'pbedit'){ echo 'none;'; } @endphp">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#currentPb{{ $currentPb->id }}">
                                        Edit
                                    </button>
                                    @include('pb.current_pb')
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="recom-display" class="sticky-top"
            style="width:450px; background-color:blue; color:white; border-radius: 50%; text-align:center; overflow:visible; float:right; top:60px; display:none;">
            <div class="card bg-primary ">
                <!-- previouse promotion board -->
                <div class="container-md" style="padding:.5rem">
                    <table class="table-bordered text-white border-white" style="width:100%">
                        <tr>
                            <td align="center" colspan="2"><b><u>PB-@php
                                $year = date('Y');
                                echo $year;
                            @endphp</u></b></td>
                            <td align="center"
                                colspan="@if ($sgtSheet == '1') {{ '3' }} @else {{ '4' }} @endif">
                                <b><u>VAC-@php
                                    $year = date('Y');
                                    echo $year;
                                @endphp</u></b>
                            </td>
                            <td align="center" colspan="2"><b><u>Decision</u></b></td>
                        </tr>
                        <tr>
                            <td align="center"><b>Estb</b></td>
                            <td align="center"><b>Str</b></td>
                            <td align="center"><b>Exist</b></td>
                            <td align="center"><b>Retd</b></td>
                            <td align="center"
                                style="display:@if ($sgtSheet == '1') {{ 'none' }} @endif">
                                <b>CD</b>
                            </td>
                            <td align="center"><b>Vac</b></td>
                            <td align="center"><b>Recom</b></td>
                            <td align="center"><b>Left</b></td>
                        </tr>
                        <tr>
                            <td align="center"><b>{{ $currentPb->estb }}</b></td>
                            <td align="center"><b>{{ $currentPb->str }}</b></td>
                            <td align="center"><b>{{ $currentPb->exist }}</b></td>
                            <td align="center">
                                <b>
                                    @if ($sgtSheet == '1')
                                        {{ $currentPb->retd }}
                                    @elseif($sgtSheet == '2')
                                        {{ $currentPb->retd - $lastEntrySwo }}
                                    @elseif($sgtSheet == '3')
                                        {{ $currentPb->retd - $lastEntryWo }}
                                    @endif

                                </b>
                            </td>
                            <td align="center" style="display: @if ($sgtSheet == '1') {{ 'none' }} @endif">
                                <b>
                                    @if ($sgtSheet == '2')
                                        {{ $recomMwo }}
                                    @elseif($sgtSheet == '3')
                                        {{ $recomSwo }}
                                    @endif
                                </b>
                            </td>
                            <td align="center">
                                <b>
                                    @php
                                        if ($sgtSheet == '1') {
                                            $vac = $currentPb->ttl ?? 0;
                                        } elseif ($sgtSheet == '2') {
                                            $exist = $currentPb->exist ?? 0;
                                            $retd = ($currentPb->retd ?? 0) - ($lastEntrySwo ?? 0);
                                            $vac = $exist + $retd + ($recomMwo ?? 0);
                                        } elseif ($sgtSheet == '3') {
                                            $exist = $currentPb->exist ?? 0;
                                            $retd = ($currentPb->retd ?? 0) - ($lastEntryWo ?? 0);
                                            $vac = $exist + $retd + ($recomSwo ?? 0);
                                        }
                                    @endphp
                                    {{ $vac }}
                                </b>
                            </td>
                            <td align="center" id="total-recom">
                                <b class="blinking fs-5" id="checkId">
                                    {{ $recompers }}
                                </b>
                            </td>
                            <td align="center">
                                <span class="blinking fs-5">
                                    <b id="minCheck">
                                        {{ $vac - $recompers }}
                                    </b>
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="page-header mt-2 mb-2">
            <div class='row'>
                <div class='col-md-3 text-right'></div>
                <div class='col-md-3 text-right'><b>
                        <h4 id="rcorners1" class="text-end">Please Select Entry No ></h4>
                    </b></div>
                <div class='col-md-3'>
                    <select id="positionFilter" class="form-control" name="entry_no">
                        <option value="" selected='selected' id="allShow">All Entry</option>
                    </select>
                </div>
                <div class='col-md-3 text-right'></div>
            </div>
        </div>
        <table id="tableData" class="table table-striped table-bordered table-responsive-lg table-hover"
            style="width:100%">
            <thead>
                <tr align="center" style="background:#33a8ff;">
                    <th rowspan="2" style="vertical-align: middle; width: 2% !important;">SL No</th>
                    <th rowspan="2" style="vertical-align: middle; width: 5% !important;">Photo</th>
                    <th rowspan="2" style="vertical-align: middle; width: 4% !important;">BD No</th>
                    <th rowspan="2" style="vertical-align: middle; width: 3% !important;">Rank</th>
                    <th rowspan="2" style="vertical-align: middle; width: 15% !important;">Name & Basic Trade</th>
                    <th rowspan="2" style="vertical-align: middle; width: 3% !important;">Entry No</th>
                    <th rowspan="2" style="vertical-align: middle; width: 5% !important;">DOE & DOR within yr 26</th>
                    <th rowspan="2" style="vertical-align: middle; width: 5% !important; font-size: 13px;">Date of present rk & Svc Length</th>
                    <th colspan="2" style="vertical-align: middle; width: 9% !important;">POINTS</th>
                    <th rowspan="2" style="vertical-align: middle; width: 5% !important;">Total Score</th>
                    <th colspan="2" style="vertical-align: middle; width: 5% !important; font-size: 10px;">Sr posn as per merit</th>
                    <th rowspan="2" style="vertical-align: middle; width: 7% !important;">Conduct Sheet<br>(Last
                        3yrs)</th>
                    <th rowspan="2" style="vertical-align: middle; width: 3% !important;">Weight (lbs)</th>
                    <th rowspan="2" style="vertical-align: middle; width: 4% !important;">Base/ Unit</th>
                    <th rowspan="2" style="vertical-align: middle; width: 5% !important;">Recom</th>
                    <th rowspan="2" style="vertical-align: middle; width: 15% !important;">Remarks</th>
                    <th rowspan="2" style="vertical-align: middle; width: 10% !important;">Remarks By PB</th>
                    <th rowspan="2"
                        style="vertical-align: middle; width: 2% !important; display:@php if($user->userName == 'pbuser'){ echo 'none;'; } @endphp">
                        Decision</th>
                </tr>
                <tr align="center" style="background:#33a8ff;">
                    <th>Avg PAR</th>
                    <th style="font-size: 10px">Mks of career courses Bas-40% Adv-40% ST-20%</th>
                    <th>ES</th>
                    <th>CS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($persons as $index => $item)
                    @php
                        $entry_count = $entryCounts[$item->entry_no] ?? 0;
                        $avg_acr = number_format($item->avg_par, 2);
                        $resutls = number_format($item->career_marks, 2);
                        $total_scrore = str_pad($avg_acr + $resutls, 2, 0, STR_PAD_RIGHT);

                    @endphp
                    <tr id="tr{{ $item->id }}"
                        class= "{{ $item->decision == 'true' ? 'tr-row-bg-select' : ($item->decision == 'false' ? 'tr-row-bg-stanby' : 'inherit') }}">
                        <td class="text-center">{{ $index += 1 }}</td>
                        <td align='center'>
                            @php
                                $imagePath = public_path("promotionBoard/image/{$item->bdno}.gif");
                            @endphp
                            @if (file_exists($imagePath))
                                <img src='{{ asset('promotionBoard/image') }}/{{ $item->bdno }}.gif'
                                    style='height: 90px; width: 80px; border:3px solid #B2B8B7; border-radius: 3px;'
                                    alt='Photo N/A' class="zoom">
                            @else
                                <img src='{{ asset('icon/avater.jpg') }}'
                                    style='height: 90px; width: 80px; border:3px solid #B2B8B7; border-radius: 3px;'
                                    alt='Photo N/A' class="zoom">
                            @endif
                        </td>
                        <td align='center' style="vertical-align: middle">
                            @php
                                $filePath = public_path("promotionBoard/bioData/{$item->bdno}.pdf");
                            @endphp
                            @if (file_exists($filePath))
                                <a href="{{ asset('promotionBoard/bioData/' . $item->bdno . '.pdf') }}" target="_blank"
                                    style="text-decoration: none">
                                    <b>{{ $item->bdno }}</b>
                                </a>
                            @else
                                <b class="text-danger">{{ $item->bdno }}</b>
                            @endif
                        </td>
                        <td align='left' style="vertical-align: middle">{{ $item->rank }}</td>
                        <td align='left' style="vertical-align: middle">{{ $item->name }} <br>
                            <span class="text-primary">{{ $item->basic_trade ?? '' }}</span>
                        </td>
                        <td class="text-center" style="vertical-align: middle">{{ $item->entry_no }}</td>
                        <td class="text-center" style="vertical-align: middle; line-height: 1;"><span class="text-decoration-underline">{{formatDateCustom($item->doe)}}</span><br>{{ retairedDate($item->doe,$item->rank) }}</td>
                        <td class="text-center" style="vertical-align: middle; line-height: 1;"><span class="text-decoration-underline">{{ formatDateCustom($item->promotion_dt) }}<br></span>{{ serviceLength($item->doe) }}</td>
                        <td class="text-center" style="vertical-align: middle">
                            @php
                                $filePath = public_path("promotionBoard/acr-forms/{$item->bdno}.pdf");
                            @endphp
                            @if (file_exists($filePath))
                                <a href="{{ asset('promotionBoard/acr-forms/' . $item->bdno . '.pdf') }}" target="_blank"
                                    style="text-decoration: none; color:rgb(255, 0, 0);" title="Advers ACR/ Setisfactory ACR">
                                    <b>
                                        {{ $avg_acr }}
                                    </b>
                                </a>
                            @else
                                <b>
                                    {{ $avg_acr }}
                                </b>
                            @endif
                        </td>
                        <td class="text-center" style="vertical-align: middle">
                            <b>{{ $resutls }}</b>
                        </td>
                        <td class="text-center" style="vertical-align: middle">
                            <b>{{ $total_scrore }}</b></td>
                        <td class="text-center" style="vertical-align: middle; line-height: 1;"><b><span
                                    class="text-decoration-underline">{{ $item->rank2 }}</span><br><span
                                    class="text-success">{{ $entry_count }}</span></b></td>
                        <td class="text-center" style="vertical-align: middle; line-height: 1;"><b><span
                                    class="text-decoration-underline">{{ $item->rank1 }}</span><br><span
                                    class="text-success">{{ $totalPersons }}</span></b></td>

                        <td class="text-center">
                            @if ($item->conduct_sheet)
                                <a style="height: 35px;" class="text-danger mt-2 text-decoration-none conductSheetBtn btn"
                                data-bs-toggle="modal" data-id="{{ $item->id }}" data-bdno="{{ $item->bdno }}"
                                data-rank="{{ $item->rank }}" data-name="{{ $item->name }}"
                                data-trade="{{ $item->trade }}">
                                    {!! $item->conduct_sheet !!}
                                </a>
                                @else
                                N/A
                            @endif

                        </td>
                        <td class="text-center">
                            @if ($item->weight < 0)
                                <span class="text-danger">{{ $item->weight * -1 }}</span>
                            @elseif ($item->weight > 0)
                                <span class="text-danger fw-bold">+{{ $item->weight }}</span>
                            @else
                                &plusmn;
                                {{ $item->weight }}
                            @endif
                        </td>
                        <td class="text-center">{{ $item->base_unit }}</td>
                        <td class="text-center tr-row-yes-or-no-select{{ $item->id }}"
                            style="vertical-align: middle">
                            @if ($item->decision == 'true')
                                Yes
                            @else
                                NO
                            @endif
                        </td>
                        <td style="vertical-align: middle; text-align:left;"><b>{!! $item->other_rmks !!}</b></td>
                        <td align='left' style="vertical-align: middle; text-align:left;">
                            <b>{!! $item->rmks !!}<br>{{ $item->rmks_1 }}</b>
                        </td>
                        <td class="text-center"
                            style="vertical-align: middle; display:@php if($user->userName == 'pbuser'){ echo 'none;'; } @endphp">
                            {{-- <td class="text-center" style="vertical-align: middle; " > --}}
                            @if ($item->decision == 'true')
                                <img src="{{ asset('icon/ok.png') }}" style="border-radius: 7px;">
                            @elseif ($item->decision == 'false')
                                <img src="{{ asset('icon/not.png') }}" style="border-radius: 7px;">
                            @else
                                <label class='container1'>
                                    <input type="checkbox" data-column_name="decision" {{-- <!-- Data attribute for column name --> --}}
                                        data-id="{{ $item->id }}" {{-- <!-- Data attribute for item ID --> --}}
                                        {{ $item->decision ? 'checked' : '' }}>
                                    <!-- Blade syntax to conditionally add 'checked' attribute -->
                                    <span class="checkmark"></span>
                                    <!-- This is likely the styling for the checkbox -->
                                </label>
                            @endif
                            <br>
                            <button style="height: 35px;" type="button" class="btn btn-success mt-2"
                                data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                <img style="width: 14px;" src='{{ asset('icon/edit.png') }}'>
                            </button>
                            <button
                                style="height: 35px; display:@php if($user->userName !== 'pbedit'){ echo 'none;'; } @endphp"
                                type="button" class="btn btn-primary mt-2 editBtn" data-id="{{ $item->id }}"
                                data-image="promotionBoard/image/{{ $item->bdno }}.gif">
                                <img style="width: 14px;" src='{{ asset('icon/edit.png') }}'>
                            </button>
                            @include('pb.pb-recom-edit')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row sticky-bottom">
            <div class="col-4 d-flex gap-2">
                <form action="{{ route('booklets.download') }}" method="post" enctype="multipart/form-data"
                    target="_blank">
                    @csrf
                    <input type="hidden" name="trade" value="{{ $trade }}">
                    <input type="hidden" name="sheet_no" value="{{ $sheetNo }}">
                    <button type="submit" class="btn btn-secondary"><img src="{{ asset('icon/download.svg') }}" alt="refresh" style="width: 20px; margin-right: 10px;">Booklet Download</button>
                </form>
                <form action="{{ route('recomBooklets.download') }}" method="post" enctype="multipart/form-data"
                    target="_blank">
                    @csrf
                    <input type="hidden" name="trade" value="{{ $trade }}">
                    <input type="hidden" name="sheet_no" value="{{ $sheetNo }}">
                    <button type="submit" class="btn btn-success"><img src="{{ asset('icon/download.svg') }}" alt="refresh" style="width: 20px; margin-right: 10px;">Recom Download</button>
                </form>
            </div>
            <div class="col-4 text-center">
                <a href=""><button type="submit" class="btn btn-primary"><img
                            src="{{ asset('icon/refresh.svg') }}" alt="refresh"
                            style="width: 20px; margin-right: 10px;">Page Refresh</button></a>
            </div>
            <div class="col-4"></div>
        </div>

    </div>
    @include('pb.pb-person-edit')
    @include('pb.conduct-sheet-modal')
@endsection
@push('other_script')
    <script>
        $('.editBtn').on('click', async function() {
            let id = $(this).data('id');
            let image = $(this).data('image');
            console.log(image)
            await FillUpUpdateForm(id, image)
            $("#persEdit").modal('show');
        })
        $('.conductSheetBtn').on('click', async function() {
            let id = $(this).data('id');
            let bdno = $(this).data('bdno');
            let rank = $(this).data('rank');
            let name = $(this).data('name');
            let trade = $(this).data('trade');
            await FillUpConductSheetForm(id, bdno, rank, name, trade)
            $("#staticBackdropConductSheet").modal('show');
        })
    </script>
    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').change(function() {
                var id = $(this).data('id');
                var column_name = $(this).data('column_name');
                var decision = $(this).is(':checked');

                // Update row background
                var $row = $("#tr" + id);
                $row.removeClass('tr-row-bg-select tr-row-bg-stanby'); // remove both first
                if (decision) {
                    $row.addClass('tr-row-bg-select');
                    $(".tr-row-yes-or-no-select" + id).html("Yes");
                } else {
                    $row.addClass('tr-row-bg-stanby');
                    $(".tr-row-yes-or-no-select" + id).html("No");
                }

                // Send AJAX request to update decision status
                $.ajax({
                    type: 'GET',
                    url: '/items/' + id + '/update-decision',
                    data: {
                        decision: decision,
                        column_name: column_name
                    },
                    success: function(response) {
                        flasher.success(response.success);
                    },
                    error: function(xhr) {
                        flasher.error(xhr.responseJSON?.error || "Something went wrong");
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

                    if (min < 0) {
                        document.getElementById("minCheck1").style.color = 'red';
                        document.getElementById("minCheck").style.color = 'red';
                    } else {
                        document.getElementById("minCheck1").style.color = 'white';
                        document.getElementById("minCheck").style.color = 'white';
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
                    document.getElementById("checkId1").innerHTML = sum;
                    document.getElementById("minCheck").innerHTML = min;
                    document.getElementById("minCheck1").innerHTML = min;
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
                table.column(5).data().each(function(value, index) {
                    if (uniquePositions.indexOf(value) === -1) {
                        uniquePositions.push(value); // Add unique values

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
                    table.column(5).search('').draw(); // Reset filter for "All Entry"
                    table.order([0, 'asc']).draw(); // Sort column index 1 in ascending order
                } else {
                    table.column(5).search(selectedValue).draw(); // Filter by selected value
                    table.order([11, 'asc']).draw(); // Sort column index 8 in ascending order
                }
            });

        });

        $(document).ready(function() {
            window.addEventListener('scroll', function() {
                if (window.pageYOffset >= 250) {
                    document.getElementById('recom-display').style.display = 'block';
                } else {
                    document.getElementById('recom-display').style.display = 'none';
                }
            });

            let leftValue = document.getElementById('minCheck1').innerHTML;
            // console.log(leftValue);
            if (leftValue < 0) {
                document.getElementById("minCheck1").style.color = 'red';
                document.getElementById("minCheck").style.color = 'red';
            } else {
                document.getElementById("minCheck1").style.color = 'white';
                document.getElementById("minCheck").style.color = 'white';
            }
        })
    </script>
@endpush
