@extends('layout.app-eb')
@section('title','Person Excel list Upload')
@section('content')
<style>

</style>
<div class="container-fluid">

    <div class="row justify-content-center" style="margin-top: 10px;">
        <div class="col-md-6 offset">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Pdf Downloader</h3>
                    <div class="d-grid gap-2">
                        <form action="{{url('/eb-all-pers-pdf')}}" method="get" target="_blank">
                            @csrf
                            <div class="form-group">
                                <label for="type">List For</label>
                                <select name="decision" id="" class="form-control" required>
                                    <option value="" disabled selected>Select Type</option>
                                    <option value="1">All Persons</option>
                                    <option value="2">Retd After 25Yrs +</option>
                                    <option value="3">Screening From Svc(21Yrs)</option>
                                    <option value="4">Recom Retd 25Yrs+</option>
                                    <option value="5">Recom Retd 21Yrs</option>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-success mt-5 float-end" value="Generate">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
