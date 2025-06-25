@extends('layout.app-pb')
@section('title', 'Add Person')
@section('content')
<style>

</style>
<div class="container">

    <div class="row justify-content-center" style="margin-top: 10px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class="bolder text-decoration-underline">Add New Person</h2>
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
                    <form action="{{ url('/pb-store-person') }}" method="post">
                        @csrf
                        <div class="row py-3">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="s_no">S/L</label>
                                    <input type="text" name="s_no" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bdno">BD No</label>
                                    <input type="text" name="bdno" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="rank">Rank</label>
                                    <select type="text" name="rank" id="" class="form-control" value="">
                                        <option value="" disabled selected>Select Rank</option>
                                        @foreach ($ranks as $rank)
                                        <option value="{{$rank->short_name}}">{{$rank->short_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="" class="form-control" value="">
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="trade">Trade</label>
                                    <select type="text" name="trade" id="" class="form-control" value="">
                                        <option value="" disabled selected>Select trade</option>
                                        @foreach ($trades as $trade)
                                        <option value="{{$trade->trade}}">{{$trade->trade}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="basic_trade">Basic Trade</label>
                                    <input type="text" name="basic_trade" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="entry_no">Entry No</label>
                                    <input type="text" name="entry_no" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="avg_par">PAR (AVG)</label>
                                    <input type="text" name="avg_par" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="career_marks">Career Marks</label>
                                    <input type="text" name="career_marks" id="" class="form-control" value="">
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="total_score">Total Score</label>
                                    <input type="text" name="total_score" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="es">ES</label>
                                    <input type="text" name="es" id="" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cs">CS</label>
                                    <input type="text" name="cs" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="conduct_sheet">condunct_sheet</label>
                                    <input type="text" name="conduct_sheet" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="weight">Over Weight (lbs)</label>
                                    <input type="text" name="weight" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="base_unit">Base Unit</label>
                                    <input type="text" name="base_unit" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="base">Under Base</label>
                                    <input type="text" name="base" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="sheet_no">Sheet No</label>
                                    <input type="number" name="sheet_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="rmks_by_ro">Remarks By Ro/D Pers</label>
                                    <textarea name="rmks_by_ro" id="" cols="" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="rmks_by_board">Remarks By Board</label>
                                    <textarea name="rmks_by_board" id="" cols="" rows="3" class="form-control"></textarea>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer gap-2">
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
@endsection
