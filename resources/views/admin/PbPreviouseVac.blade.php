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
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add
                                                PB-{{ substr(date('Y') - 1, -2) }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                            <form method="POST" action="{{ url('/admin/pb/PreviouseVac/store') }}">
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
                                                                        {{ $rank->short_name }}
                                                                    </option>
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
                                                            <label class="form-lavel">Exist</label>
                                                            <input type="text" name="exist" class="form-control"
                                                                placeholder="Enter exist">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Retd</label>
                                                            <input type="text" name="retd" class="form-control"
                                                                placeholder="Enter retd">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-lavel">Exp Vac on Promo(Except
                                                                SWO-MWO)</label>
                                                            <input type="text" name="promoted_pre_pb"
                                                                class="form-control" placeholder="Enter Exp Vac on Promo"
                                                                value="">
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
                                                            <label class="form-lavel">Recom</label>
                                                            <input type="text" name="promotion" class="form-control"
                                                                placeholder="Enter promotion">
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
                        <div class="col-sm-4 text-center text-decoration-underline">
                            <h3>PB-{{ substr(date('Y') - 1, -2) }}</h3>
                        </div>
                        <div class="col-sm-4">

                            <form action="{{ route('PreviouseVac.index') }}" method="get">
                                <div class="row">
                                    <div class="col-9">
                                        <input type="search" name="search" class="form-control"
                                            placeholder="Search Trade" value="{{ request('search') }}">
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
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table id="customers" class="table table-bordered table-striped " width="100%" cellspacing="0">
                        <thead class="table-dark">
                            <tr>
                                <th style="vertical-align: middle; text-align: center;">S/No</th>
                                <th style="vertical-align: middle; text-align: center;">Trade</th>
                                <th style="vertical-align: middle; text-align: center;">Rank</th>
                                <th style="vertical-align: middle; text-align: center;">Estb</th>
                                <th style="vertical-align: middle; text-align: center;">Str</th>
                                <th style="vertical-align: middle; text-align: center;">Exist</th>
                                <th style="vertical-align: middle; text-align: center;">Retd</th>
                                <th style="vertical-align: middle; text-align: center;">Exp Vac Promo</th>
                                <th style="vertical-align: middle; text-align: center;">Ttl vac</th>
                                <th style="vertical-align: middle; text-align: center;">Recom</th>
                                <th style="vertical-align: middle; text-align: center;">Max score</th>
                                <th style="vertical-align: middle; text-align: center;">Min score</th>
                                <th style="vertical-align: middle; text-align: center;">Sheet No</th>
                                <th style="vertical-align: middle; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($policies) --}}
                            @foreach ($results as $index => $pbPreviouseVac)
                                <tr>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $results->firstItem() + $index }}</td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbPreviouseVac->trade }}
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbPreviouseVac->rank }}
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbPreviouseVac->estb }}
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbPreviouseVac->str }}
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbPreviouseVac->exist }}
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbPreviouseVac->retd }}
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $pbPreviouseVac->promoted_pre_pb }}
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbPreviouseVac->ttl }}
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $pbPreviouseVac->promotion }}</td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $pbPreviouseVac->score_max }}</td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $pbPreviouseVac->score_min }}</td>
                                    <td style="vertical-align: middle; text-align: center;">{{ $pbPreviouseVac->sheetNo }}
                                    </td>

                                    <td style="text-align: center;">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn-sm px-2 my-2 btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#editModel{{ $pbPreviouseVac->id }}">
                                            Edit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editModel{{ $pbPreviouseVac->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update
                                                            PB-{{ substr(date('Y') - 1, -2) }}, Ranks :
                                                            {{ $pbPreviouseVac->rank }}</h1>
                                                        <button type="button" class="btn-close bg-primary"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body bg-secondary"
                                                        style="padding: 10px 30px 10px 30px;">
                                                        <form method="POST"
                                                            action="{{ url('/admin/pb/PreviouseVac/edit', $pbPreviouseVac->id) }}"
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
                                                                                    @if ($trade->trade == $pbPreviouseVac->trade) {{ 'selected' }} @endif>
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
                                                                                    @if ($rank->short_name == $pbPreviouseVac->rank) {{ 'selected' }} @endif>
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
                                                                            value="{{ $pbPreviouseVac->estb }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Str</label>
                                                                        <input type="text" name="str"
                                                                            class="form-control" placeholder="Enter str"
                                                                            value="{{ $pbPreviouseVac->str }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Existing Vac</label>
                                                                        <input type="text" name="exist"
                                                                            class="form-control" placeholder="Enter exist"
                                                                            value="{{ $pbPreviouseVac->exist }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Retd Vac</label>
                                                                        <input type="text" name="retd"
                                                                            class="form-control" placeholder="Enter retd"
                                                                            value="{{ $pbPreviouseVac->retd }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Exp Vac on Promo(Except
                                                                            SWO-MWO)</label>
                                                                        <input type="text" name="promoted_pre_pb"
                                                                            class="form-control"
                                                                            placeholder="Enter Exp Vac on Promo"
                                                                            value="{{ $pbPreviouseVac->promoted_pre_pb }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Total Vac</label>
                                                                        <input type="text" name="ttl"
                                                                            class="form-control" placeholder="Enter total"
                                                                            value="{{ $pbPreviouseVac->ttl }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Recom</label>
                                                                        <input type="text" name="promotion"
                                                                            class="form-control"
                                                                            placeholder="Enter promotion"
                                                                            value="{{ $pbPreviouseVac->promotion }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Max Score</label>
                                                                        <input type="text" name="score_max"
                                                                            class="form-control"
                                                                            placeholder="Enter score_max"
                                                                            value="{{ $pbPreviouseVac->score_max }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Min Score</label>
                                                                        <input type="text" name="score_min"
                                                                            class="form-control"
                                                                            placeholder="Enter score_min"
                                                                            value="{{ $pbPreviouseVac->score_min }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-lavel">Sheet No</label>
                                                                        <input type="text" name="sheetNo"
                                                                            class="form-control"
                                                                            placeholder="Enter Sheet No"
                                                                            value="{{ $pbPreviouseVac->sheetNo }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" name=""
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('PbPreviouseVac.delete', $pbPreviouseVac->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm px-2 my-1"
                                                onclick="return confirm('Are you sure you want to delete this record?')">
                                                Delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-4 text-start">
                            Total : {{ $results->total() }}
                        </div>
                        {{-- <div class="col-md-4"></div> --}}
                        <div class="col-md-8">
                            {{ $results->links() }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
@push('other_script')
    <script>
        // let table = new DataTable('#customers');
    </script>
@endpush
