@extends('layout.app-pb')
@section('title','Person Excel list Upload')
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
                            <table class="table-bordered">
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
                                <div class="form-group">
                                    <label for="file_upload" class="form-label">Excel File Upload</label>
                                    <input type="file" name="file_upload" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Save</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
