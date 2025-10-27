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
                        <h2 class="bolder text-decoration-underline">Conduct Sheet Excel File Upload</h2>
                        <h5><strong>Note : </strong>The Excel file should be arranged as shown in the table below.</h5>
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
                                <table class="table-success table">
                                    <thead>
                                        <tr>
                                            <th>bdno</th>
                                            <th>present_rank</th>
                                            <th>name</th>
                                            <th>trade</th>
                                            <th>base_or_unit</th>
                                            <th>date_of_offense</th>
                                            <th>rank</th>
                                            <th>offense</th>
                                            <th>date_of_punishment</th>
                                            <th>awarded</th>
                                            <th>entry</th>
                                            <th>moral_trapitude</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-4 border-2">
                            <div class="col-md-6 offset-3">
                                <form action="{{ url('/conduct-sheet-upload-excel') }}" method="post" enctype="multipart/form-data">
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
