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
                                                    <option value="{{$rank->short_name}}">{{$rank->short_name}}</option>
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
                    <div class="col-sm-4 text-center text-decoration-underline">
                        <h3>Vacencys For {{substr(date('Y') + 1, -2)}} & {{substr(date('Y') + 2, -2)}}</h3>
                    </div>
                    <div class="col-sm-4"></div>
                </div>

            </div>
            <div class="card-body">
                <table id="customers" class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th style="">S/No</th>
                            <th>Trade</th>
                            <th>Rank</th>
                            <th>Vac-{{substr(date('Y') + 1, -2)}}</th>
                            <th>Vac-{{substr(date('Y') + 2, -2)}}</th>
                            {{-- <th>score_min</th> --}}
                            <th>sheetNo</th>
                            <th style="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($PbNextVacs as $key => $PbNextVac)
                            <tr>
                                <td class="text-center">{{$PbNextVacs->firstItem() + $key}}</td>
                                <td class="text-center">{{ $PbNextVac->trade }}</td>
                                <td class="text-center">{{ $PbNextVac->rank }}</td>
                                <td class="text-center">{{ $PbNextVac->next_yr }}</td>
                                <td class="text-center">{{ $PbNextVac->next_2yrs }}</td>
                                <td class="text-center">{{ $PbNextVac->sheetNo }}</td>
                                <td style="text-align: center;">
                                        <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModel{{$PbNextVac->id}}">
                                        Edit
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

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Rank</label>
                                                        <select name="rank" id="" class="form-select" aria-label="Default select example">
                                                            <option value="" desable>Selected One</option>
                                                            @foreach ($ranks as $rank)
                                                                <option value="{{$rank->short_name}}" @if ($rank->short_name==$PbNextVac->rank)
                                                                    {{'selected'}}
                                                                @endif>{{$rank->short_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Vac- {{substr(date('Y') + 1, -2)}}</label>
                                                        <input type="text" name="next_yr" class="form-control" placeholder="Enter next_yr" value="{{$PbNextVac->next_yr}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-lavel">Vac- {{substr(date('Y') + 2, -2)}}</label>
                                                        <input type="text" name="next_2yrs" class="form-control" placeholder="Enter next_2yrs" value="{{$PbNextVac->next_2yrs}}">
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <label class="form-lavel">score_min</label>
                                                        <input type="text" name="score_min" class="form-control" placeholder="Enter score_min" value="{{$PbNextVac->score_min}}">
                                                    </div> --}}
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
                                    <a href="{{Route('PbNextVac.delete', $PbNextVac->id)}}"  class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $PbNextVacs->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
@push('other_script')
    <script>
        // let table = new DataTable('#customers', {
        //     info: true,
        //     ordering: false,
        //     paging: false,
        //     layout: {
        //         // topStart: 'pageLength',
        //         // topEnd: 'search',
        //         topStart: 'info',
        //         // bottomEnd: 'paging'
        //     }


        // });
    </script>
@endpush
