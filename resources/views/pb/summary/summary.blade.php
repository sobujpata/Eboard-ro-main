@extends('layout.app-pb')
@section('title', 'Summary')
@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center text-decoration-underline">
                        <h3>Summary : Promotion Board-{{ date('y') }}</h3>
                    </div>
                    <div class="card-body">
                        @php
                            $totalSWO = $data->sum('SWO');
                            $totalWO = $data->sum('WO');
                            $totalSgt = $data->sum('Sgt');
                            $grandTotal = $data->sum('Total');
                        @endphp

                        <table class="table table-bordered table-striped">
                            <thead class="text-center bg-success">
                                <tr>
                                    <th class="text-white">Trade</th>
                                    <th class="text-white">MWO</th>
                                    <th class="text-white">SWO</th>
                                    <th class="text-white">WO</th>
                                    <th class="text-white">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr class="text-center">
                                        <td class="text-start">{{ $row->trade }}</td>
                                        <td>
                                            <button class="btn btn-primary viewBtn" data-trade="{{ $row->trade }}" data-rank="SWO">{{ $row->SWO }}</button>
                                            </td>
                                        <td>
                                            <button class="btn btn-success viewBtn" data-trade="{{ $row->trade }}" data-rank="WO">{{ $row->WO }}</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary viewBtn" data-trade="{{ $row->trade }}" data-rank="Sgt">{{ $row->Sgt }}</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-info viewTotalBtn" data-trade="{{ $row->trade }}"><strong>{{ $row->Total }}</strong></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="text-center fw-bold bg-light">
                                <tr>
                                    <td class="text-start">Total</td>
                                    <td>{{ $totalSWO }}</td>
                                    <td>{{ $totalWO }}</td>
                                    <td>{{ $totalSgt }}</td>
                                    <td>{{ $grandTotal }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pb.summary.recom-modal')
    @include('pb.summary.all-recom-modal')
    <script>
        $('.viewBtn').on('click', async function() {
            let trade = $(this).data('trade');
            let rank = $(this).data('rank');
            // console.log(trade, rank)
            await FillUpDataTable(trade, rank);
            $("#RecomList").modal('show');
        })
    </script>
    <script>
        $('.viewTotalBtn').on('click', async function() {
            let trade = $(this).data('trade');
            console.log(trade);
            await FillUpAllDataTable(trade);
            $("#AllRecomList").modal('show');
        })
    </script>
@endsection
