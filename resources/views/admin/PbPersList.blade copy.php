@extends('layout.sidenav-layout')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-1 bg-info">
            {{-- @include('layouts.partials.sidebarMain') --}}
        </div>
        <div class="col-md-11 mt-3">
            <div class="card" >
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPers">
                                +Add New
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="addPers" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content" style="background-color: #06c5f0;">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="myModalLabel" style="width:100%;">Add Person</h3>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">                                                
                                                <form method="POST" action="" style="text-align: left;">
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

                                                    </div>
                                                    <div class="row">
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

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="ttl_score">Total Score</label>
                                                                <input type="text" name="ttl_score" id="" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="es">Entry Sr</label>
                                                                <input type="text" name="es" id="" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="cs">Command Sr</label>
                                                                <input type="text" name="cs" id="" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="conduct_sheet">Conduct Sheet</label>
                                                                <input type="text" name="conduct_sheet" id="" class="form-control" value="">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="weight">Weight (Lbp)</label>
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
                                                                <label for="sheetNo">Sheet No</label>
                                                                <input type="text" name="sheetNo" id="" class="form-control" value="">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="other_rmks">Remarks</label>
                                                                <textarea name="other_rmks" id="" cols="" rows="3" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-4">
                                                            <input type="file" name="image" id="" value="" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
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
                            <!-- /.modal -->
                        </div>
                        <div class="col-sm-4 text-center">
                            <h3>ALL PB PERSONS</h3>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>

                </div>
                <div class="card-body">
                    <table id="tableData" class="table table-striped table-bordered table-responsive-lg" style="width:100%">
                        <thead>
                            <tr align="center" style="background:#33a8ff;">
                                <th style="vertical-align: middle; width: 2% !important;">SL No</th>
                                <th style="vertical-align: middle; width: 5% !important;">Image</th>
                                <th style="vertical-align: middle; width: 4% !important;">BD No</th>
                                <th style="vertical-align: middle; width: 15% !important;">Rank & Name</th>
                                <th style="vertical-align: middle; width: 3% !important;">Entry No</th>
                                <th style="vertical-align: middle; width: 5% !important;">PAR (Avg)</th>
                                <th style="vertical-align: middle; width: 5% !important;">Marks(TTB, TTA, ST) (Avg)</th>
                                <th style="vertical-align: middle; width: 5% !important;">Total Score</th>
                                <th style="vertical-align: middle; width: 3% !important;">Entry Sr</th>
                                <th style="vertical-align: middle; width: 3% !important;">Comd Sr</th>
                                <th style="vertical-align: middle; width: 5% !important;">Conduct Sheet</th>
                                <th style="vertical-align: middle; width: 3% !important;">Weight (lbs)</th>
                                <th style="vertical-align: middle; width: 3% !important;">Base/ Unit</th>
                                <th style="vertical-align: middle; width: 5% !important;">Recom</th>
                                <th style="vertical-align: middle; width: 15% !important;">Remarks</th>
                                <th style="vertical-align: middle; width: 2% !important;">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle">SL No</th>
                                <th style="vertical-align: middle">Image</th>
                                <th style="vertical-align: middle">BD No</th>
                                <th style="vertical-align: middle">Rank & Name</th>
                                <th style="vertical-align: middle">Entry No</th>
                                <th style="vertical-align: middle">PAR (Avg)</th>
                                <th style="vertical-align: middle; width: 5%;">Marks(TTB, TTA, ST) (Avg)</th>
                                <th style="vertical-align: middle">Total Score</th>
                                <th style="vertical-align: middle">Entry Sr</th>
                                <th style="vertical-align: middle">Comd Sr</th>
                                <th style="vertical-align: middle">Conduct Sheet</th>
                                <th style="vertical-align: middle">Weight (lbs)</th>
                                <th style="vertical-align: middle">Base/Unit</th>
                                <th style="vertical-align: middle">Recom</th>
                                <th style="vertical-align: middle">Remarks</th>
                                <th style="vertical-align: middle">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class= "{{ $item->decision == '1' ? 'tr-row-bg-select' : ($item->decision == '0' ? 'tr-row-bg-stanby' : 'inherit') }}">
                                    <td align='center'>{{ $i++ }}</td>
                                    <td align='center'><img src='{{ asset('promotionBoard/image') }}/{{ $item->bdno }}.gif'
                                            style='height: 90px; width: 80px; border:3px solid #B2B8B7; border-radius: 3px;'
                                            alt='Photo N/A'></td>
                                    <td align='center' style="vertical-align: middle"><a href='{{ asset('promotionBoard/bioData') }}/{{ $item->bdno }}.pdf' target='_blank'
                                            style="text-decoration: none"><b>{{ $item->bdno }}</b></a></td>
                                    <td align='left' style="vertical-align: middle">{{ $item->rank }} {{ $item->name }}</td>
                                    <td align='center' style="vertical-align: middle">{{ $item->entry_no }}</td>
                                    <td align='center' style="vertical-align: middle"><b>{{ $item->avg_par }}</b></td>
                                    <td align='center' style="vertical-align: middle"><b>{{ $item->career_marks }}</b></td>
                                    <td align='center' style="vertical-align: middle"><b>{{ $item->ttl_score }}</b></td>
                                    <td align='center' style="vertical-align: middle"><b>{{ $item->es }}</b></td>
                                    <td align='center' style="vertical-align: middle"><b>{{ $item->cs }}</b></td>
                                    <td align='center' style="vertical-align: middle"><b>{{ $item->conduct_sheet }}</b></td>
                                    <td align='center'>{{ $item->weight }}</td>
                                    <td align='center'>{{ $item->base_unit }}</td>
                                    <td align='center' style="vertical-align: middle">
                                        @if ($item->decision == 1)
                                            Yes
                                        @else
                                            NO
                                        @endif
                                    </td>
                                    <td align='center' style="vertical-align: middle; text-align:left;">
                                        <b>{{ $item->other_rmks }}</b></td>

                                    <td align='center' style="vertical-align: middle; ">
                                        <button type="button" class="btn btn-success mt-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $item->id }}">
                                            <img style="width: 14px;" src='{{ asset('icon/edit.png') }}'>
                                        </button>
                                        <button type="button" class="btn btn-danger mt-2">
                                            <i class="fa-solid fa-trash fa-xl"></i>
                                        </button>
                                        <!-- Person Edit Modal -->
                                        <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content" style="background-color: #06c5f0;">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel" style="width:100%;">Update Person</h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            @php

                                                                $id = $item->id;
                                                            @endphp
                                                            <form method="POST" action="{{ route('PbPersList.edit', $item->id) }}" style="text-align: left;">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="s_no">S/L</label>
                                                                            <input type="text" name="s_no" id="" class="form-control" value="{{$item->s_no}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="bdno">BD No</label>
                                                                            <input type="text" name="bdno" id="" class="form-control" value="{{$item->bdno}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="rank">Rank</label>
                                                                            <input type="text" name="rank" id="" class="form-control" value="{{$item->rank}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="name">Name</label>
                                                                            <input type="text" name="name" id="" class="form-control" value="{{$item->name}}">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="trade">Trade</label>
                                                                            <input type="text" name="trade" id="" class="form-control" value="{{$item->trade}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="entry_no">Entry No</label>
                                                                            <input type="text" name="entry_no" id="" class="form-control" value="{{$item->entry_no}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="avg_par">PAR (AVG)</label>
                                                                            <input type="text" name="avg_par" id="" class="form-control" value="{{$item->avg_par}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="career_marks">Career Marks</label>
                                                                            <input type="text" name="career_marks" id="" class="form-control" value="{{$item->career_marks}}">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="ttl_score">Total Score</label>
                                                                            <input type="text" name="ttl_score" id="" class="form-control" value="{{$item->ttl_score}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="es">Entry Sr</label>
                                                                            <input type="text" name="es" id="" class="form-control" value="{{$item->es}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="cs">Command Sr</label>
                                                                            <input type="text" name="cs" id="" class="form-control" value="{{$item->cs}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="conduct_sheet">Conduct Sheet</label>
                                                                            <input type="text" name="conduct_sheet" id="" class="form-control" value="{{$item->conduct_sheet}}">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="weight">Weight (Lbp)</label>
                                                                            <input type="text" name="weight" id="" class="form-control" value="{{$item->weight}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="base_unit">Base Unit</label>
                                                                            <input type="text" name="base_unit" id="" class="form-control" value="{{$item->base_unit}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="sheetNo">Sheet No</label>
                                                                            <input type="text" name="sheetNo" id="" class="form-control" value="{{$item->sheetNo}}">
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="other_rmks">Remarks</label>
                                                                            <textarea name="other_rmks" id="" cols="" rows="3" class="form-control">{{$item->other_rmks}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <img src="{{ asset('promotionBoard/image') }}/{{ $item->bdno }}.gif" class="" alt="" style="width: 70px">
                                                                        <input type="file" name="image" id="" value="">
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
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
                                        <!-- /.modal -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('other_script')
    <script>
        let table = new DataTable('#tableData', {
            info: true,
            ordering: false,
            paging: true,
            layout: {
                topStart: 'pageLength',
                // topEnd: 'search',
                endStart: 'info',
                bottomEnd: 'paging'
            }


        });
       
    </script>
@endpush
