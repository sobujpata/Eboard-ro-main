@extends('layout.sidenav-layout')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="card" >
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-4">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            +Add New
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Pb Next Year Vacancy</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                    <form method="POST" action="{{url('/admin/pb/PbNextVac/store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-lavel">Trade</label>
                                            <select name="trade" id="" class="form-select" aria-label="Default select example">
                                                <option value="" desable>Selected One</option>
                                                @foreach ($trades as $trade)
                                                    <option value="{{$trade->trade}}">{{$trade->trade}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">Rank</label>
                                            <select name="rank" id="" class="form-select" aria-label="Default select example">
                                                <option value="" desable>Selected One</option>
                                                @foreach ($ranks as $rank)
                                                    <option value="{{$rank->rank}}">{{$rank->rank}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">next_yr</label>
                                            <input type="text" name="next_yr" class="form-control" placeholder="Enter next_yr">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">next_2yrs</label>
                                            <input type="text" name="next_2yrs" class="form-control" placeholder="Enter next_2yrs">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">score_min</label>
                                            <input type="text" name="score_min" class="form-control" placeholder="Enter score_min">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">sheetNo</label>
                                            <input type="text" name="sheetNo" class="form-control" placeholder="Enter sheetNo">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <h3>All pb Next Year Vacencys</h3>
                    </div>
                    <div class="col-sm-4"></div>
                </div>

            </div>
            <div class="card-body">
                <table id="customers" class="table table-bordered table-striped table-dark" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="">S/No</th>
                            <th>Trade</th>
                            <th>Rank</th>
                            <th>next_yr</th>
                            <th>next_2yrs</th>
                            <th>score_min</th>
                            <th>sheetNo</th>
                            <th>Insert time</th>
                            <th>update_at</th>
                            <th style="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($policies) --}}
                        @foreach ($PbNextVacs as $PbNextVac)
                            <tr>
                                <td>{{$count++}}</td>
                                <td>{{ $PbNextVac->trade }}</td>
                                <td>{{ $PbNextVac->rank }}</td>
                                <td>{{ $PbNextVac->next_yr }}</td>
                                <td>{{ $PbNextVac->next_2yrs }}</td>
                                <td>{{ $PbNextVac->score_min }}</td>
                                <td>{{ $PbNextVac->sheetNo }}</td>
                                <td>{{ $PbNextVac->insert_time}}</td>
                                <td>{{ $PbNextVac->update_at}}</td>
                                <td style="text-align: center;">
                                        <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModel{{$PbNextVac->id}}">
                                        <i class="fa-solid fa-edit"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editModel{{$PbNextVac->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit PB Next Year Vac</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                                <form method="POST" action="{{url('/admin/pb/PbNextVac/edit', $PbNextVac->id) }}" style="text-align: left !important">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="form-lavel">Trade</label>
                                                        <select name="trade" id="" class="form-select" aria-label="Default select example">
                                                            <option value="" desable>Selected One</option>
                                                            @foreach ($trades as $trade)
                                                                <option value="{{$trade->trade}}" @if ($trade->trade==$PbNextVac->trade)
                                                                    {{'selected'}}
                                                                @endif>{{$trade->trade}}</option>
                                                            @endforeach

                                                        </select>
                                                        {{-- <input type="text" name="trade" class="form-control" placeholder="Enter Trade"> --}}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Rank</label>
                                                        <select name="rank" id="" class="form-select" aria-label="Default select example">
                                                            <option value="" desable>Selected One</option>
                                                            @foreach ($ranks as $rank)
                                                                <option value="{{$rank->rank}}" @if ($rank->rank==$PbNextVac->rank)
                                                                    {{'selected'}}
                                                                @endif>{{$rank->rank}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">next_yr</label>
                                                        <input type="text" name="next_yr" class="form-control" placeholder="Enter next_yr" value="{{$PbNextVac->next_yr}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-lavel">next_2yrs</label>
                                                        <input type="text" name="next_2yrs" class="form-control" placeholder="Enter next_2yrs" value="{{$PbNextVac->next_2yrs}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">score_min</label>
                                                        <input type="text" name="score_min" class="form-control" placeholder="Enter score_min" value="{{$PbNextVac->score_min}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">sheetNo</label>
                                                        <input type="text" name="sheetNo" class="form-control" placeholder="Enter sheetNo" value="{{$PbNextVac->sheetNo}}">
                                                    </div>


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                        </div>
                                    </div>
                                    <a href="{{Route('PbNextVac.delete', $PbNextVac->id)}}"  class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>S/No</th>
                            <th>Trade</th>
                            <th>Rank</th>
                            <th>next_yr</th>
                            <th>next_2yrs</th>
                            <th>score_min</th>
                            <th>sheetNo</th>
                            <th>Insert time</th>
                            <th>update_at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('other_script')
    <script>
        let table = new DataTable('#customers', {
            info: true,
            ordering: false,
            paging: false,
            layout: {
                // topStart: 'pageLength',
                // topEnd: 'search',
                topStart: 'info',
                // bottomEnd: 'paging'
            }


        });
        // table.on('click', 'tbody tr', function () {
        //         let data = table.row(this).data();

        //         alert('You clicked on ' + data[0] + "'s row");
        //     });
        // table.on('click', 'tbody tr', function (e) {
        //     e.currentTarget.classList.toggle('selected');
        // });

        // document.querySelector('#button').addEventListener('click', function () {
        //     alert(table.rows('.selected').data().length + ' row(s) selected');
        // });
    </script>
@endpush
