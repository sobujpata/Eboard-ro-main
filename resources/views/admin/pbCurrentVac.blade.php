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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add PB Current Vacancy</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                    <form method="POST" action="{{url('/admin/pb/CurrentVac/store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-lavel">Trade</label>
                                            <select name="trade" id="" class="form-select" aria-label="Default select example">
                                                <option value="" desable>Selected One</option>
                                                @foreach ($trades as $trade)
                                                    <option value="{{$trade->trade}}">{{$trade->trade}}</option>
                                                @endforeach

                                            </select>
                                            {{-- <input type="text" name="trade" class="form-control" placeholder="Enter Trade"> --}}
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
                                            <label class="form-lavel">Estb</label>
                                            <input type="text" name="estb" class="form-control" placeholder="Enter estb">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">Str</label>
                                            <input type="text" name="str" class="form-control" placeholder="Enter str">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">Exist</label>
                                            <input type="text" name="exist" class="form-control" placeholder="Enter exist">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">Retd</label>
                                            <input type="text" name="retd" class="form-control" placeholder="Enter retd">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">Promoted pre pb</label>
                                            <input type="text" name="promoted_pre_pb" class="form-control" placeholder="Enter promoted pre pb">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-lavel">Total</label>
                                            <input type="text" name="ttl" class="form-control" placeholder="Enter total">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">Sheet No</label>
                                            <input type="number" name="sheetNo" class="form-control" placeholder="Enter sheet no">
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
                        <h3>All pbCurrentVacs</h3>
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
                            <th>Estb</th>
                            <th>Str</th>
                            <th>Exist</th>
                            <th>Retd</th>
                            <th>promoted pre PB</th>
                            <th>Ttl</th>
                            <th>Sheet No</th>
                            <th style="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($policies) --}}
                        @foreach ($pbCurrentVacs as $pbCurrentVac)
                            <tr>
                                <td>{{$count++}}</td>
                                <td>{{ $pbCurrentVac->trade }}</td>
                                <td>{{ $pbCurrentVac->rank }}</td>
                                <td>{{ $pbCurrentVac->estb }}</td>
                                <td>{{ $pbCurrentVac->str }}</td>
                                <td>{{ $pbCurrentVac->exist }}</td>
                                <td>{{ $pbCurrentVac->retd }}</td>
                                <td>{{ $pbCurrentVac->promoted_pre_pb}}</td>
                                <td>{{ $pbCurrentVac->ttl}}</td>
                                <td>{{ $pbCurrentVac->sheetNo}}</td>
                                <td style="text-align: center;">
                                        <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModel{{$pbCurrentVac->id}}">
                                        <i class="fa-solid fa-edit"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editModel{{$pbCurrentVac->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit PB Current Vac</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                                <form method="POST" action="{{url('/admin/pb/CurrentVac/edit', $pbCurrentVac->id) }}" style="text-align: left !important">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="form-lavel">Trade</label>
                                                        <select name="trade" id="" class="form-select" aria-label="Default select example">
                                                            <option value="" desable>Selected One</option>
                                                            @foreach ($trades as $trade)
                                                                <option value="{{$trade->trade}}" @if ($trade->trade==$pbCurrentVac->trade)
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
                                                                <option value="{{$rank->rank}}" @if ($rank->rank==$pbCurrentVac->rank)
                                                                    {{'selected'}}
                                                                @endif>{{$rank->rank}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Estb</label>
                                                        <input type="text" name="estb" class="form-control" placeholder="Enter estb" value="{{$pbCurrentVac->estb}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-lavel">Str</label>
                                                        <input type="text" name="str" class="form-control" placeholder="Enter str" value="{{$pbCurrentVac->str}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Exist</label>
                                                        <input type="text" name="exist" class="form-control" placeholder="Enter exist" value="{{$pbCurrentVac->exist}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Retd</label>
                                                        <input type="text" name="retd" class="form-control" placeholder="Enter retd" value="{{$pbCurrentVac->retd}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Promoted pre pb</label>
                                                        <input type="text" name="promoted_pre_pb" class="form-control" placeholder="Enter promoted pre pb" value="{{$pbCurrentVac->promoted_pre_pb}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-lavel">Total</label>
                                                        <input type="text" name="ttl" class="form-control" placeholder="Enter total" value="{{$pbCurrentVac->ttl}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Sheet No</label>
                                                        <input type="text" name="sheetNo" class="form-control" placeholder="Enter Sheet No" value="{{$pbCurrentVac->sheetNo}}">
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
                                    <a href="{{Route('PbCurrentVac.delete', $pbCurrentVac->id)}}"  class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>S/No</th>
                            <th>Trade</th>
                            <th>Rank</th>
                            <th>Estb</th>
                            <th>Str</th>
                            <th>Exist</th>
                            <th>Retd</th>
                            <th>promoted pre PB</th>
                            <th>Ttl</th>
                            <th>Sheet No</th>
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
