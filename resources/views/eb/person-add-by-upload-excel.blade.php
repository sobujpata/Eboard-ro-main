@extends('layout.app-eb')
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
                    <h5><strong>Note : </strong>The Excel file should be arranged as shown in the table below. 'type' = 0 or 1.<br> 'decision' and 'salient_points' will be blank.</h5>
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
                            <table class="table table-bordered table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>s_no</th>
                                        <th>bdno</th>
                                        <th>rank</th>
                                        <th>name</th>
                                        <th>trade</th>
                                        <th>base_unit</th>
                                        <th>doe</th>
                                        <th>entry_no</th>
                                        <th>avg_par</th>
                                        <th>career_marks</th>
                                        <th>conduct_sheet</th>
                                        <th>dor</th>
                                        <th>rmks_by_ro</th>
                                        <th>rmks_by_board</th>
                                        <th>type</th>
                                        <th>decision</th>
                                        <th>salient_points</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-4 border-2">
                        <div class="col-md-6 offset-3">
                            <form action="{{ url('/eb-upload-excel') }}" method="post" enctype="multipart/form-data">
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
