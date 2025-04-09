@extends('layout.app-eb')
@section('title', 'Summary')
@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center" style="margin-top: 10px;"
        <div class="col-md-12">
            <div class="card">

                <div class="card-header text-center">
                    <h3>
                        Summary : Evaluation Board-{{date('y')}}
                    </h3>
                </div>
                <div class="card-body">
                    <table id="tableData" class="example1 table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead>
                            <tr class="bg-primary">
                                <th class="text-center text-white">S/No</th>
                                <th class="text-center text-white">Category</th>
                                <th class="text-center text-white">Total Airmen</th>
                                <th class="text-center text-white">Retd Approved</th>
                                <th class="text-center text-white">Retd Not Approved</th>
                            </tr>
                        </thead>
                        @php
                            $i = 1;
                        @endphp
                        <tbody id="tableList">
                            @foreach ($counts as $count)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>
                                        @if ($count->type==0)
                                            Applied for Retd After 25 Yrs of Svc
                                        @else
                                            Screening from BAF After 21 Yrs of Svc
                                        @endif
                                    </td>
                                    <td class="text-center"><button class="btn btn-primary viewTotalPersonsBtn" data-type="{{ $count->type }}">{{ $count->ttl_prs ?? 0 }}</button></td> <!-- Ensure ttl_prs is available, else default to 0 -->
                                    <td class="text-center"><button class="btn btn-success viewSelectedPersonsBtn" data-type="{{ $count->type }}">{{ $count->selected_count ?? 0 }}</button></td> <!-- Ensure selected_count is available, else default to 0 -->
                                    <td class="text-center"><button class="btn btn-danger viewNotSelectedPersonsBtn" data-type="{{ $count->type }}">{{ $count->not_selected_count ?? 0 }}</button></td> <!-- Ensure not_selected_count is available, else default to 0 -->

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" style="text-align:right !important;">Grand Total : </td>
                                <td class="text-center">{{$grandTotal}}</td>
                                <td class="text-center">{{$grandTotalSelected}}</td>
                                <td class="text-center">{{$grandTotalNotSelected}}</td>
                            </tr>
                        </tfoot>
                    </table>

                    <!-- Modal for Total Persons -->
                    <div class="modal fade" id="totalPersonsModal" tabindex="-1" role="dialog" aria-labelledby="totalPersonsModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                            <div class="modal-content bg-dark text-white">
                                <div class="modal-header">
                                    <h3 class="modal-title text-center text-decoration-underline" id="myModalLabel" style="width:100%;">
                                        <span id="summaryDetails"></span>
                                    </h3>
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered table-dark table-striped" id="totalPersonsTable">
                                        <thead>
                                            <tr>
                                                <th style="vertical-align: middle; width: 4%;">S/No</th>
                                                <th style="vertical-align: middle; width: 4%;">Photo</th>
                                                <th style="vertical-align: middle; width: 5%;">BD No</th>
                                                <th style="vertical-align: middle; width: 5%;">Rank</th>
                                                <th style="vertical-align: middle; width: 15%;">Name</th>
                                                <th style="vertical-align: middle; width: 10%;">Trade</th>
                                                <th style="vertical-align: middle; width: 10%;">Base/Unit</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Selected Persons -->
                    <div class="modal fade" id="selectedPersonsModal" tabindex="-1" role="dialog" aria-labelledby="selectedPersonsModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                            <div class="modal-content bg-dark text-white">
                                <div class="modal-header">
                                    <h3 class="modal-title text-center text-decoration-underline" id="myModalLabel" style="width:100%;">
                                        <span id="summaryDetailsSelected"></span>

                                    </h3>
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered table-dark table-striped" id="selectedPersonsTable">
                                        <thead>
                                            <tr>
                                                <th style="vertical-align: middle; width: 4%;">S/No</th>
                                                <th style="vertical-align: middle; width: 4%;">Photo</th>
                                                <th style="vertical-align: middle; width: 5%;">BD No</th>
                                                <th style="vertical-align: middle; width: 5%;">Rank</th>
                                                <th style="vertical-align: middle; width: 15%;">Name</th>
                                                <th style="vertical-align: middle; width: 10%;">Trade</th>
                                                <th style="vertical-align: middle; width: 10%;">Base/Unit</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Not Selected Persons -->
                    <div class="modal fade" id="notSelectedPersonsModal" tabindex="-1" role="dialog" aria-labelledby="notSelectedPersonsModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                            <div class="modal-content bg-dark text-white">
                                <div class="modal-header">
                                    <h3 class="modal-title text-center text-decoration-underline" id="myModalLabel" style="width:100%;">
                                        <span id="summaryDetailsNotSelected"></span>

                                    </h3>
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered table-dark table-striped" id="notSelectedPersonsTable">
                                        <thead>
                                            <tr>
                                                <th style="vertical-align: middle; width: 4%;">S/No</th>
                                                <th style="vertical-align: middle; width: 4%;">Photo</th>
                                                <th style="vertical-align: middle; width: 5%;">BD No</th>
                                                <th style="vertical-align: middle; width: 5%;">Rank</th>
                                                <th style="vertical-align: middle; width: 15%;">Name</th>
                                                <th style="vertical-align: middle; width: 10%;">Trade</th>
                                                <th style="vertical-align: middle; width: 10%;">Base/Unit</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    // Fetch Total Persons data
    $(document).on('click', '.viewTotalPersonsBtn', function() {
        var type = $(this).data('type');
        if(type==0){
            document.getElementById('summaryDetails').innerHTML="Total Retd After 25 Yrs+";
        }else{
            document.getElementById('summaryDetails').innerHTML="Total Screening List";
        }
        $.ajax({
            url: '{{ route('fetchPersonsByType', ['category' => 'total']) }}',  // Route for total persons
            method: 'GET',
            data: { type: type },

            success: function(response) {
                $('#totalPersonsTable tbody').empty();
                $.each(response.persons, function(index, person) {
                    $('#totalPersonsTable tbody').append(`
                        <tr>
                            <td class="text-center">${index +=1}</td>
                            <td><img src="{{asset('evaluation-board/image/${person.bdno}.gif')}}" style="width:80px; border-radius:5px;"> </td>
                            <td>${person.bdno}</td>
                            <td>${person.rank}</td>
                            <td>${person.name}</td>
                            <td>${person.trade}</td>
                            <td>${person.base_unit}</td>
                        </tr>
                    `);
                });
                $('#totalPersonsModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    // Fetch Selected Persons data
    $(document).on('click', '.viewSelectedPersonsBtn', function() {
        var type = $(this).data('type');
        if(type==0){
            document.getElementById('summaryDetailsSelected').innerHTML="Finally Recom For Retd After 25 Yrs+ Svc";
        }else{
            document.getElementById('summaryDetailsSelected').innerHTML="Screening Approved List";
        }
        $.ajax({
            url: '{{ route('fetchPersonsByType', ['category' => 'selected']) }}',  // Route for selected persons
            method: 'GET',
            data: { type: type },
            success: function(response) {
                $('#selectedPersonsTable tbody').empty();
                $.each(response.persons, function(index, person) {
                    $('#selectedPersonsTable tbody').append(`
                        <tr>
                            <td class="text-center">${index +=1}</td>
                            <td><img src="{{asset('evaluation-board/image/${person.bdno}.gif')}}" style="width:80px; border-radius:5px;"> </td>
                            <td>${person.bdno}</td>
                            <td>${person.rank}</td>
                            <td>${person.name}</td>
                            <td>${person.trade}</td>
                            <td>${person.base_unit}</td>
                        </tr>
                    `);
                });
                $('#selectedPersonsModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    // Fetch Not Selected Persons data
    $(document).on('click', '.viewNotSelectedPersonsBtn', function() {
    var type = $(this).data('type');
    if(type==0){
            document.getElementById('summaryDetailsNotSelected').innerHTML="Recom For Retention in Svc";
        }else{
            document.getElementById('summaryDetailsNotSelected').innerHTML="Screening Not Approved List";
        }
    $.ajax({
        url: '{{ route('fetchPersonsByType', ['category' => 'not_selected']) }}',  // Route for not selected persons
        method: 'GET',
        data: { type: type },
        success: function(response) {
            $('#notSelectedPersonsTable tbody').empty();
            $.each(response.persons, function(index, person) {
                $('#notSelectedPersonsTable tbody').append(`
                    <tr>
                        <td class="text-center">${index +=1}</td>
                        <td><img src="{{asset('evaluation-board/image/${person.bdno}.gif')}}" style="width:80px; border-radius:5px;"> </td>
                        <td>${person.bdno}</td>
                        <td>${person.rank}</td>
                        <td>${person.name}</td>
                        <td>${person.trade}</td>
                        <td>${person.base_unit}</td>
                    </tr>
                `);
            });
            $('#notSelectedPersonsModal').modal('show');
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});

</script>
@endsection
