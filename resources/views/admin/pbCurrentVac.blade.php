@extends('layout.sidenav-layout')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="card">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                +Add New
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add PB Current Vacancy</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                            <form method="POST" action="{{ url('/admin/pb/CurrentVac/store') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Trade</label>
                                                            <select name="trade" id="" class="form-select"
                                                                aria-label="Default select example">
                                                                <option value="" desable>Selected One</option>
                                                                @foreach ($trades as $trade)
                                                                    <option value="{{ $trade->trade }}">{{ $trade->trade }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Rank</label>
                                                            <select name="rank" id="" class="form-select"
                                                                aria-label="Default select example">
                                                                <option value="" desable>Selected One</option>
                                                                @foreach ($ranks as $rank)
                                                                    <option value="{{ $rank->short_name }}">
                                                                        {{ $rank->short_name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Estb</label>
                                                            <input type="text" name="estb" class="form-control"
                                                                placeholder="Enter estb">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Str</label>
                                                            <input type="text" name="str" class="form-control"
                                                                placeholder="Enter str">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Exist Vac</label>
                                                            <input type="text" name="exist" class="form-control"
                                                                placeholder="Enter exist">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Retd Vac</label>
                                                            <input type="text" name="retd" class="form-control"
                                                                placeholder="Enter retd">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Promoted previuse Rank</label>
                                                            <input type="text" name="promoted_pre_pb"
                                                                class="form-control" placeholder="Enter promoted pre pb">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Total Vac</label>
                                                            <input type="text" name="ttl" class="form-control"
                                                                placeholder="Enter total">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Sheet No</label>
                                                            <input type="number" name="sheetNo" class="form-control"
                                                                placeholder="Enter sheet no">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name=""
                                                        class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h3>All Current Vacancies</h3>
                        </div>
                        <div class="col-sm-4">
                            <form action="{{ route('PbCurrentVac.index') }}" method="get">
                                <div class="row">
                                    <div class="col-9">
                                        <input type="search" name="search" class="form-control"
                                            placeholder="Search Trade"
                                            value="{{ request('search') }}">
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="customers" class="table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead class="table-dark">
                            <tr>
                                <th style="vertical-align: middle; text-align: center;">S/No</th>
                                <th style="vertical-align: middle; text-align: center;">Trade</th>
                                <th style="vertical-align: middle; text-align: center;">Rank</th>
                                <th style="vertical-align: middle; text-align: center;">Estb</th>
                                <th style="vertical-align: middle; text-align: center;">Str</th>
                                <th style="vertical-align: middle; text-align: center;">Exist</th>
                                <th style="vertical-align: middle; text-align: center;">Retd</th>
                                <th style="vertical-align: middle; text-align: center;">promoted pre PB</th>
                                <th style="vertical-align: middle; text-align: center;">Ttl</th>
                                <th style="vertical-align: middle; text-align: center;">Sheet No</th>
                                <th style="vertical-align: middle; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($policies) --}}
                            @foreach ($results as $index => $pbCurrentVac)
                                <tr>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $results->firstItem() + $index }}</td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbCurrentVac->trade }}</td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbCurrentVac->rank }}</td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbCurrentVac->estb }}</td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbCurrentVac->str }}</td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbCurrentVac->exist }}
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbCurrentVac->retd }}</td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $pbCurrentVac->promoted_pre_pb }}</td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbCurrentVac->ttl }}</td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbCurrentVac->sheetNo }}
                                    </td>
                                    <td style="text-align: center;">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success text-dark" data-bs-toggle="modal"
                                            data-bs-target="#editModel{{ $pbCurrentVac->id }}">
                                            Edit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editModel{{ $pbCurrentVac->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit PB
                                                            Current Vac</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                                        <form method="POST"
                                                            action="{{ url('/admin/pb/CurrentVac/edit', $pbCurrentVac->id) }}"
                                                            style="text-align: left !important">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Trade</label>
                                                                        <select name="trade" id=""
                                                                            class="form-select"
                                                                            aria-label="Default select example">
                                                                            <option value="" desable>Selected One
                                                                            </option>
                                                                            @foreach ($trades as $trade)
                                                                                <option value="{{ $trade->trade }}"
                                                                                    @if ($trade->trade == $pbCurrentVac->trade) {{ 'selected' }} @endif>
                                                                                    {{ $trade->trade }}</option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Rank</label>
                                                                        <select name="rank" id=""
                                                                            class="form-select"
                                                                            aria-label="Default select example">
                                                                            <option value="" desable>Selected One
                                                                            </option>
                                                                            @foreach ($ranks as $rank)
                                                                                <option value="{{ $rank->short_name }}"
                                                                                    @if ($rank->short_name == $pbCurrentVac->rank) {{ 'selected' }} @endif>
                                                                                    {{ $rank->short_name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Estb</label>
                                                                        <input type="text" name="estb"
                                                                            class="form-control" placeholder="Enter estb"
                                                                            value="{{ $pbCurrentVac->estb }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Str</label>
                                                                        <input type="text" name="str"
                                                                            class="form-control" placeholder="Enter str"
                                                                            value="{{ $pbCurrentVac->str }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Exist</label>
                                                                        <input type="text" name="exist"
                                                                            class="form-control" placeholder="Enter exist"
                                                                            value="{{ $pbCurrentVac->exist }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Retd</label>
                                                                        <input type="text" name="retd"
                                                                            class="form-control" placeholder="Enter retd"
                                                                            value="{{ $pbCurrentVac->retd }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Promoted pre pb</label>
                                                                        <input type="text" name="promoted_pre_pb"
                                                                            class="form-control"
                                                                            placeholder="Enter promoted pre pb"
                                                                            value="{{ $pbCurrentVac->promoted_pre_pb }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Total</label>
                                                                        <input type="text" name="ttl"
                                                                            class="form-control" placeholder="Enter total"
                                                                            value="{{ $pbCurrentVac->ttl }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Sheet No</label>
                                                                        <input type="text" name="sheetNo"
                                                                            class="form-control"
                                                                            placeholder="Enter Sheet No"
                                                                            value="{{ $pbCurrentVac->sheetNo }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" name=""
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ Route('PbCurrentVac.delete', $pbCurrentVac->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $results->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
