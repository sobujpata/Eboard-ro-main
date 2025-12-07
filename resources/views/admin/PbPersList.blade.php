@extends('layout.sidenav-layout')

@section('content')
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="row">
                <div class="col-sm-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPers">
                        +Add New
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="addPers" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
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
                                                        <input type="text" name="s_no" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="bdno">BD No</label>
                                                        <input type="text" name="bdno" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="rank">Rank</label>
                                                        <input type="text" name="rank" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="trade">Trade</label>
                                                        <input type="text" name="trade" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="entry_no">Entry No</label>
                                                        <input type="text" name="entry_no" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="avg_par">PAR (AVG)</label>
                                                        <input type="text" name="avg_par" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="career_marks">Career Marks</label>
                                                        <input type="text" name="career_marks" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="ttl_score">Total Score</label>
                                                        <input type="text" name="ttl_score" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="es">Entry Sr</label>
                                                        <input type="text" name="es" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="cs">Command Sr</label>
                                                        <input type="text" name="cs" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="conduct_sheet">Conduct Sheet</label>
                                                        <input type="text" name="conduct_sheet" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="weight">Weight (Lbp)</label>
                                                        <input type="text" name="weight" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="base_unit">Base Unit</label>
                                                        <input type="text" name="base_unit" id=""
                                                            class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="sheetNo">Sheet No</label>
                                                        <input type="text" name="sheetNo" id=""
                                                            class="form-control" value="">
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
                                                    <input type="file" name="image" id="" value=""
                                                        class="form-control">
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
                <div class="col-sm-4 text-center text-decoration-underline">
                    <h3>ALL PB PERSONNEL</h3>
                </div>
                <div class="col-sm-4">
                    <form action="{{ route('PersList.index') }}" method="get">
                        <div class="row">
                            <div class="col-9">
                                <input type="search" name="search" class="form-control"
                                    placeholder="Search by BD No, Name, Rank, Entry No, Base/unit, Base" value="{{ request('search') }}">
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-striped p-0">
                <thead>
                    <tr class="text-center table-dark p-0">
                        <th style="vertical-align: middle; width: 2% !important;" class="px-1">SL No</th>
                        <th style="vertical-align: middle; width: 5% !important;" class="px-1">Image</th>
                        <th style="vertical-align: middle; width: 5% !important;" class="px-1">BD No</th>
                        <th style="vertical-align: middle; width: 10% !important;" class="px-1">Rank & Name</th>
                        <th style="vertical-align: middle; width: 3% !important;" class="px-1">Entry No</th>
                        <th style="vertical-align: middle; width: 5% !important;" class="px-1">PAR (Avg)</th>
                        <th style="vertical-align: middle; width: 5% !important;" class="px-1">Marks(TTB, TTA, ST) (Avg)
                        </th>
                        <th style="vertical-align: middle; width: 5% !important;" class="px-1">Total Score</th>
                        <th style="vertical-align: middle; width: 3% !important;" class="px-1">Entry Sr</th>
                        <th style="vertical-align: middle; width: 3% !important;" class="px-1">Comd Sr</th>
                        <th style="vertical-align: middle; width: 7% !important;" class="px-1">Conduct Sheet</th>
                        <th style="vertical-align: middle; width: 3% !important;" class="px-1">Weight (lbs)</th>
                        <th style="vertical-align: middle; width: 5% !important;" class="px-1">Base/ Unit</th>
                        <th style="vertical-align: middle; width: 5% !important;" class="px-1">Base</th>
                        <th style="vertical-align: middle; width: 10% !important;" class="px-1">Remarks</th>
                        <th style="vertical-align: middle; width: 2% !important;" class="px-1">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($results as $key => $item)
                        <tr class= "{{ $item->decision == '1' ? 'tr-row-bg-select' : ($item->decision == '0' ? 'tr-row-bg-stanby' : 'inherit') }}">
                            <td style="vertical-align: middle; width: 2% !important;">{{ $results->firstItem() + $key }}</td>
                            <td align='center'><img src='{{ asset('promotionBoard/image') }}/{{ $item->bdno }}.gif'
                                    style='height: 90px; width: 80px; border:3px solid #B2B8B7; border-radius: 3px;'
                                    alt='Photo N/A'></td>
                            <td align='center' style="vertical-align: middle">
                                @php
                                    $filePath = public_path("promotionBoard/bioData/{$item->bdno}.pdf");
                                @endphp

                                @if (file_exists($filePath))
                                    <a href="{{ asset('promotionBoard/bioData/' . $item->bdno . '.pdf') }}" target="_blank" style="text-decoration: none;">
                                        <b>{{ $item->bdno }}</b>
                                    </a>
                                @else
                                    <b class="text-danger">{{ $item->bdno }}</b>
                                @endif
                            </td>
                            <td align='left' style="vertical-align: middle">{{ $item->rank }} {{ $item->name }} <br> {{ $item->basic_trade }}
                            </td>
                            <td align='center' style="vertical-align: middle">{{ $item->entry_no }}</td>
                            <td align='center' style="vertical-align: middle"><b>{{ number_format($item->avg_par,2) }}</b></td>
                            <td align='center' style="vertical-align: middle"><b>{{ number_format($item->career_marks,2) }}</b></td>
                            <td align='center' style="vertical-align: middle"><b>{{ number_format($item->ttl_score, 2) }}</b></td>
                            <td align='center' style="vertical-align: middle"><b>{{ $item->es }}</b></td>
                            <td align='center' style="vertical-align: middle"><b>{{ $item->cs }}</b></td>
                            <td align='center' style="vertical-align: middle"><b>{{ $item->conduct_sheet }}</b></td>
                            <td align='center' style="vertical-align: middle">{{ $item->weight }}</td>
                            <td align='center' style="vertical-align: middle">{{ $item->base_unit }}</td>
                            <td align='center' style="vertical-align: middle">
                                {{ $item->base }}
                            </td>
                            <td align='center' style="vertical-align: middle; text-align:left;">
                                <b>{!! $item->other_rmks !!}</b>
                            </td>


                            <td align='center' style="vertical-align: middle; ">
                                <button title="Edit" style="height: 35px;" type="button" class="btn btn-success p-2 mt-2 editBtn" data-id="{{ $item->id }}"
                                data-image="promotionBoard/image/{{ $item->bdno }}.gif">
                                <img style="width: 14px;" src='{{ asset('icon/edit.png') }}'>
                            </button>

                                <form action="{{ route('PersList.delete', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button title="delete" onclick="return confirm('Delete this?')" class="btn btn-sm btn-danger mb-0 p-2"><img style="width: 14px;" src='{{ asset('icon/not.png') }}'></button>
                                </form>


                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{-- pagination --}}
            {{ $results->onEachSide(1)->appends(['search' => request('search')])->links('pagination::bootstrap-5') }}

        </div>
    </div>
    @include('admin.edit-person')
@endsection
@push('other_script')
<script>
    $('.editBtn').on('click', async function() {
            let id = $(this).data('id');
            let image = $(this).data('image');
            // console.log(image)
            await FillUpUpdateForm(id, image)
            $("#persEdit").modal('show');
        })
    function confirmDelete(url) {
        if (confirm('Are you sure you want to delete this record?')) {
            // Create and submit a form dynamically
            const form = document.createElement('form');
            form.action = url;
            form.method = 'POST';
            // Add CSRF token
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = csrfToken;
            form.appendChild(csrfInput);
            // Add DELETE method spoofing
            const methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            methodInput.value = 'DELETE';
            form.appendChild(methodInput);
            document.body.appendChild(form);
            form.submit();
        }
    }
</script>

@endpush
