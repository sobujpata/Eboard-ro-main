@extends('layout.app-pb')
@section('title', 'Person Excel list Upload')
@section('content')
    <style>

    </style>
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="bolder text-decoration-underline">Person Excel list Upload</h2>
                        <h5><strong>Note : </strong>The Excel file should be arranged as shown in the table below.</h5>
                        <p>Note : SheetNo will be SWO-MWO = 1, WO-SWO = 2, Sgt-WO = 3, Sgt-WO (Booklet-2) = 4 and Sgt-WO (Booklet-3) = 5</p>
                        <p class="text-danger text-bolder">Note : CS Count for Excel sheet is =RANK.EQ(P2, $P$2:$P$100, 0)+COUNTIF($P$2:P2, P2)-1</p>
                        <p>Base will be this parson where under base.</p>
                        <p>This is table header copy and setup excel header top.</p>
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <strong>Excel Table</strong>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="">
                                    <thead>
                                        <tr>
                                            <th>s_no</th>
                                            <th>bdno</th>
                                            <th>rank</th>
                                            <th>name</th>
                                            <th>trade</th>
                                            <th>basic_trade</th>
                                            <th>dob</th>
                                            <th>doe</th>
                                            <th>dor</th>
                                            <th>entry_no</th>
                                            <th>promotion_dt</th>
                                            <th>svc_length</th>
                                            <th>svc_left</th>
                                            <th>avg_par</th>
                                            <th>career_marks</th>
                                            <th>ttl_score</th>
                                            <th>es</th>
                                            <th>cs</th>
                                            <th>base_unit</th>
                                            <th>weight</th>
                                            <th>madical_category</th>
                                            <th>conduct_sheet</th>
                                            <th>punishment_date</th>
                                            <th>morale_turpitude</th>
                                            <th>other_rmks</th>
                                            <th>sheetNo</th>
                                            <th>base</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-4 border-2">
                            <div class="col-md-6 offset-3">
                                <form action="{{ url('/pb-upload-excel') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="form-group">

                                                <input type="file" name="file_upload" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn btn-primary">Upload Excel File</button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
