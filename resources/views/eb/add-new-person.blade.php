@extends('layout.app-eb')
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
                    <form action="{{ url('/eb-store-person') }}" method="post">
                        @csrf
                        <div class="row">
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
                                    <input type="text" name="rank" id="" class="form-control" value="">
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
                                    <input type="text" name="trade" id="" class="form-control" value="">
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
                                    <label for="doe">Dt of Enrollment</label>
                                    <input type="text" name="doe" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="dor">Dt of Retd</label>
                                    <input type="text" name="dor" id="" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="conduct_sheet">Conduct Sheet</label>
                                    <input type="text" name="conduct_sheet" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="base_unit">Base Unit</label>
                                    <input type="text" name="base_unit" id="" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rmks_by_ro">Remarks By Ro/D Pers</label>
                                    <textarea name="rmks_by_ro" id="" cols="" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rmks_by_board">Remarks By Board</label>
                                    <textarea name="rmks_by_board" id="" cols="" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salient_points">Salient Points</label>
                                    <textarea name="salient_points" id="" cols="" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="type">Pers Type</label>
                                    <select name="type" id="" class="form-control form-select">
                                        <option value="" disabled selected>Select Type</option>
                                        <option value="0">Applied Pers</option>
                                        <option value="1">Screening Pers</option>
                                    </select>
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
