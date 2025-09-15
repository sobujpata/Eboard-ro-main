@extends('layout.app-pb')
@section('title', 'Person Excel list Upload')
@section('content')
    <style>

    </style>
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-md-12">
                <div class="card">
                    <h2 class="bolder text-decoration-underline text-center">Download Booklet</h2>
                    <div class="row mt-4 mb-4">
                        <div class="col-md-4 offset-4">
                            <form action="{{route('booklets.download')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group gap-3 mb-2">
                                    {{-- <label for="exampleFormControlSelect1">Select Trade</label> --}}
                                    <select class="form-control form-select" id="exampleFormControlSelect1" name="trade">
                                        <option value="" selected disabled>Select Trade</option>
                                        @foreach ($trades as $trade)
                                            <option value="{{$trade->trade}}">{{$trade->trade}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    {{-- <label for="rank">Select Rank</label> --}}
                                    <select class="form-control form-select" id="rank" name="sheet_no">
                                        <option value="" selected disabled>Select Rank</option>
                                        <option value="1">SWO-MWO</option>
                                        <option value="2">WO-SWO</option>
                                        <option value="3">Sgt-WO (Booklete-1)</option>
                                        <option value="4">Sgt-WO (Booklete-2)</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Download</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
