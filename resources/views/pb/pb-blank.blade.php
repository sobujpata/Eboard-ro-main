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
        <table id="tableData" class="table table-striped table-bordered table-responsive-lg table-hover" style="width:100%">
            <thead>
                <tr align="center" style="background:#33a8ff;">
                    <th style="vertical-align: middle; width: 2% !important;">SL No</th>
                    <th style="vertical-align: middle; width: 5% !important;">Image</th>
                    <th style="vertical-align: middle; width: 4% !important;">BD No</th>
                    <th style="vertical-align: middle; width: 15% !important;">Rank & Name</th>
                    <th style="vertical-align: middle; width: 3% !important;">Entry No</th>
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
                    {{-- <th style="vertical-align: middle; width: 2% !important; display:@php if($userName->userName == 'pbuser'){ echo 'none;'; } @endphp">Decision</th> --}}
                    {{-- <th style="vertical-align: middle; width: 2% !important;">Edit</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="17" class="text-center">No Data Found</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection


</body>

</html>
