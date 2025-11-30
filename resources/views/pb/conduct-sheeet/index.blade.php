@extends('layout.app-pb')
@section('title', 'Conduct sheet List.')
@section('content')
    @include('pb.conduct-sheeet.create')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .dropzone {
            border: 2px dashed #0087F7;
            background: #f9f9f9;
            padding: 20px;
            text-align: center;
        }
    </style>
    <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 text-center">
                                <h2 class="bolder text-decoration-underline">All Conduct Sheet</h2>
                            </div>
                            <div class="col-md-4">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Create a Conduct Sheet</button>

                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table w-100" id="tableDataConductSheet">
                            <thead class="table-dark">
                                <tr>
                                    <th>S/L</th>
                                    <th>BD No</th>
                                    <th>Base or Unit</th>
                                    <th>Dt Offense</th>
                                    <th>Rank</th>
                                    <th>Offense</th>
                                    <th>Dt of Punishment</th>
                                    <th>Awarded</th>
                                    <th>Entry Type</th>
                                    <th>Moral Trupituede</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableList">
                                @foreach ($conductSheets as $item)
                                    <tr>
                                        <td style="vertical-align: top;">{{ $loop->iteration }}</td>
                                        <td style="vertical-align: top;">{{ $item->bdno }}</td>
                                        <td style="vertical-align: top;">{{ $item->base_unit }}</td>
                                        <td style="vertical-align: top;">{{ formatDate($item->date_of_offense) }}</td>
                                        <td style="vertical-align: top;">{{ $item->rank }}</td>
                                        <td style="text-align:justify;">{!! $item->offense !!}</td>
                                        <td style="vertical-align: top;">{{ formatDate($item->date_of_punishment) }}</td>
                                        <td style="vertical-align: top;">{{ $item->awarded }}</td>
                                        <td style="vertical-align: top;">{{ $item->entry }}</td>
                                        <td style="vertical-align: top;">{{ $item->moral_trupitude }}</td>
                                        <td style="vertical-align: top;">
                                            <button
                                                style="height: 35px; display:@php if($user->userName !== 'pbedit'){ echo 'none;'; } @endphp"
                                                type="button" class="btn btn-primary mt-2 editBtn"
                                                data-id="{{ $item->id }}">
                                                <img style="width: 14px;" src='{{ asset('icon/edit.png') }}'>
                                            </button>


                                            <button type="button" class="btn btn-danger mt-2" style="height: 35px;"
                                                onclick="confirmDelete('{{ url('/conduct-sheet-delete/' . $item->id) }}')">
                                                <i class="fa fa-trash"></i>
                                            </button>


                                            <script>
                                                function confirmDelete(deleteUrl) {
                                                    if (confirm("Are you sure you want to delete this record?")) {
                                                        window.location.href = deleteUrl;
                                                    }
                                                }
                                            </script>
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
    @include('pb.conduct-sheeet.update')
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
@endsection
@push('other_script')
    <script>
        $('.editBtn').on('click', async function() {
            let id = $(this).data('id');
            await FillUpUpdateForm(id)
            $("#conductSheetEdit").modal('show');
        })
    </script>
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            let table = new DataTable('#tableDataConductSheet', {
                info: true,
                ordering: true,
                paging: true,
                layout: {
                    topStart: 'pageLength',
                    //topEnd: 'search',
                    // topStart: 'info',
                    bottomEnd: 'paging'
                }
            });
        });
    </script>
@endpush
