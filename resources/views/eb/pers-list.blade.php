@extends('layout.app-eb')
@section('title', 'Retd After Completion of 25 Yrs or More Svc')
@section('content')
<style>
    ol>li {
        font-size:20px;
        font-weight: bold;
        text-align:justify;
        padding-left: 15px;
        padding-bottom: 15px;
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
            <div class="card p-0 m-0">
                <div class="card-header mt-6 bg-white">
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="text-decoration-underline text-center" style="font-weight: bold; vertical-align:middle; margin-top: 50px;">
                                @if ($type==0)
                                Airmen Applied For Retd After Completion of 25 Yrs or More Svc
                                @elseif ($type==1)
                                Screening From Svc After Completion of 21 Yrs of Svc
                                @endif
                            </h3>
                        </div>
                        <div class="col-md-3">
                            <table id="heading-table" class="table table-bordered ml-3 mt-3 table-striped">
                                <tr>
                                    <td><b>Total Application</b></td>
                                    <td align="center"><b>{{$TotalPersons}}</b></td>
                                </tr>
                                <tr>
                                    <td><b>Recom For Retd</b></td>
                                    <td align="center"><b>{{$SelectedPersons}}</b></td>
                                </tr>
                                <tr>
                                    <td><b>Not Recom</b></td>
                                    <td align="center"><blink><b>{{$NotSelectedPersons}}</b></blink></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table id="tableData" class="example1 table table-striped table-hover" width="100%" cellspacing="0">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">S/No</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">BD No</th>
                                <th class="text-center">Particulars</th>
                                <th class="text-center" style="vertical-align:middle;">Dt of Enrolment</th>
                                <th class="text-center" style="vertical-align:middle; writing-mode: vertical-rl; transform: rotate(180deg);">PAR(Avg of<br>Last 5yrs)</th>
                                <th class="text-center" style="vertical-align:middle; writing-mode: vertical-rl; transform: rotate(180deg);">Avg Mk of<br>Career Courses</th>
                                <th class="text-center" style="vertical-align:middle; writing-mode: vertical-rl; transform: rotate(180deg);">Punishment</th>
                                <th class="text-center" style="vertical-align:middle; writing-mode: vertical-rl; transform: rotate(180deg);">Dt of Retd <br>(If Considered)</th>
                                <th class="text-center" style="vertical-align:middle; writing-mode: vertical-rl; transform: rotate(180deg);">Svc Left in<br> Present Rank</th>
                                <th class="text-center" style="vertical-align:middle; writing-mode: vertical-rl; transform: rotate(180deg);">
                                    @if ($type==0)
                                        Self Explanatory<br> Appl
                                    @elseif ($type==1)
                                        Wng Ltr &<br> Recom
                                    @endif
                                </th>
                                <th class="text-center" style="vertical-align:middle; writing-mode: vertical-rl; transform: rotate(180deg);">
                                    @if ($type==0)
                                        Salient Pts<br>of Appl
                                    @elseif ($type==1)
                                        Salient Pts<br> of Wng Ltr
                                    @endif
                                </th>
                                <th class="text-center">Rmks By RO/D Pers</th>
                                <th class="text-center">Decision By Board</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        {{-- @dd($persons) --}}
                        <tbody id="tableList">
                            @foreach ($persons as $person)
                                <tr id="tr{{ $person->id }}"
                                    class= "{{ $person->decision == 'true' ? 'tr-row-bg-select' : ($person->decision == 'false' ? 'tr-row-bg-stanby' : 'inherit') }}">
                                    <td class="text-center">{{$person->s_no}}</td>
                                    <td align='center'><img src='{{ asset('evaluation-board/image') }}/{{ $person->bdno }}.gif'
                                        style='height: 90px; width: 80px; border:3px solid #B2B8B7; border-radius: 3px;'
                                        alt='Photo N/A' class="zoom">
                                    </td>
                                    <td align='center' style="vertical-align: middle">
                                        <a href='{{ asset('evaluation-board/bioData') }}/{{ $person->bdno }}.pdf' target='_blank'
                                            style="text-decoration: none"><b>{{ $person->bdno }}</b>
                                        </a>
                                    </td>
                                    <td>{{$person->rank}} {{$person->name}}<br> {{$person->trade}} <br>Entry No: {{$person->entry_no}} <br>{{$person->base_unit}}</td>
                                    <td>{{$person->doe}}</td>
                                    <td>{{$person->avg_par}}</td>
                                    <td>{{$person->career_marks}}</td>

                                    <td align='center' style="vertical-align:middle">
                                        <button style="height: 35px;" type="button" class="btn btn-white text-danger mt-2" data-bs-toggle="modal"
                                            data-bs-target="#conductSheet{{ $person->id }}">
                                            {!!$person->conduct_sheet!!}
                                        </button>

                                        <!-- Recom Edit -->
                                        <div class="modal fad" id="conductSheet{{ $person->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" style="max-width: 1260px !important;">
                                                <div class="modal-content" style="background-color: #06c5f0;">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel" style="width:100%;">Conduct Sheet</h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                        <img src="./conduct-sheet/{!!$person->bdno!!}.'.jpg'?>" style="width:1200px ; border: 2px solid blueviolet; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td>{{$person->dor}}</td>
                                    <td>{{$person->dor}}</td>
                                    <td class="text-center">
                                        <a href="{{asset('evaluation-board/indv_application/'.$person->bdno.'.pdf')}}" target='_blank' style='text-decoration:none' class="hover-container">
                                            <img src="{{asset('evaluation-board/appl.gif')}}" alt="" srcset="" style="width:40px">
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a style="height: 35px;" class="text-danger mt-2" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop{{ $person->id }}">
                                            <img src="{{asset('evaluation-board/salient_pts.jpg')}}" alt="" srcset="" style="width:40px">
                                        </a>

                                        <!-- Recom Edit -->
                                        <div class="modal fad" id="staticBackdrop{{ $person->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" style="max-width: 1260px !important;">
                                                <div class="modal-content" style="background-color: #06c5f0;">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel" style="width:100%;">Salient Pts of Appl</h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            {{-- <img class="w-100" src="{{asset('evaluation-board/Salient-Points/'.$person->bdno.'jpg')}}"> --}}
                                                            <div class="row">
                                                                <div class="col-3 bg-dark text-white pt-4 p-3">
                                                                    <h4>BD/{{ $person->bdno }}</h4>
                                                                    <h4>{{ $person->rank }} {{ $person->name }}</h4>
                                                                    <h4>{{ $person->trade }}</h4>
                                                                    <img src='{{ asset('evaluation-board/image') }}/{{ $person->bdno }}.gif'
                                                                    style='border:3px solid #B2B8B7; border-radius: 3px;'
                                                                    alt='Photo N/A' class="w-100">

                                                                </div>
                                                                <div class="col-9 bg-white pt-4">
                                                                    <p style="font-size:20px; font-weight: bold; text-align:justify; padding-left: 15px;">
                                                                        {!! $person->salient_points !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>

                                    <td class="text-left">{{$person->rmks_by_ro}}</td>
                                    <td class="text-center">{{$person->rmks_by_board}}</td>
                                    <td class="text-center">
                                        @if ($person->decision == 'true')
                                            <img src="{{ asset('icon/ok.png') }}" style="border-radius: 7px;">
                                        @elseif ($person->decision == 'false')
                                            <img src="{{ asset('icon/not.png') }}" style="border-radius: 7px;">
                                        @else
                                            <label class='container1'>
                                                <input type="checkbox"
                                                    data-column_name="decision"
                                                    {{-- <!-- Data attribute for column name --> --}}
                                                    data-id="{{ $person->id }}"
                                                    {{-- <!-- Data attribute for person ID --> --}}
                                                    {{ $person->decision ? 'checked' : '' }}> <!-- Blade syntax to conditionally add 'checked' attribute -->
                                                <span class="checkmark"></span> <!-- This is likely the styling for the checkbox -->
                                            </label>
                                        @endif
                                        <br>
                                        <button style="height: 35px;" type="button" class="btn btn-success mt-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $person->id }}">
                                            <img style="width: 14px;" src='{{ asset('icon/edit.png') }}'>
                                        </button>
                                        <button style="height: 35px; display:@if($userName=='eb') none @endif" type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                                            data-bs-target="#persEdit{{ $person->id }}">
                                            <img style="width: 14px;" src='{{ asset('icon/edit.png') }}'>
                                        </button>
                                        @if($userName != 'eb')
                                            <button
                                                type="button"
                                                class="btn btn-danger mt-2"
                                                style="height: 35px;"
                                                onclick="confirmDelete('{{ url('/eb-pers-delete/'.$person->id) }}')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endif

                                        <script>
                                            function confirmDelete(deleteUrl) {
                                                if (confirm("Are you sure you want to delete this record?")) {
                                                    window.location.href = deleteUrl;
                                                }
                                            }
                                        </script>

                                        <!-- Recom Edit -->
                                        <div class="modal fad" id="exampleModal{{ $person->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="background-color: #06c5f0;">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel" style="width:100%;">Remarks
                                                            Edit</h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            @php

                                                                $id = $person->id;
                                                            @endphp
                                                            <form method="POST" action="{{ route('eb.update', $person->id) }}">
                                                                @csrf
                                                                <h4 style="text-align: left;">Remarks By RO/D Pers:</h4>
                                                                <textarea name="rmks_by_ro" class="form-control" id="validationTextarea" placeholder="Remarks by RO/D Pers">{{ $person->rmks_by_ro }}</textarea>

                                                                <hr>
                                                                <div class="form-group" style="text-align:left; font-size: 18px;">
                                                                    <label class="" for="flexCheckDefault">OtherRemarks:
                                                                    </label>
                                                                    <textarea name="rmks_by_board" class="form-control" id="validationTextarea" placeholder="Remarks by Board">{{ $person->rmks_by_board }}</textarea>

                                                                </div>
                                                                <hr>
                                                                <h4 style="text-align: left;">Please Select Your Decision:
                                                                </h4>
                                                                <div class="form-check" style="text-align:left; font-size: 18px;">

                                                                    <input style="height:15px; width:15px; vertical-align: middle;"
                                                                        type="radio" class="form-check-input" id="final"
                                                                        name="decision" value="true"
                                                                        @if ($person->decision == 'true') {{ 'checked' }} @endif>
                                                                    <label class="form-check-label"
                                                                        for="final">Recommended</label><br>
                                                                    <input style="height:15px; width:15px;" type="radio"
                                                                        class="form-check-input" id="pending" name="decision"
                                                                        value="false"
                                                                        @if ($person->decision == 'false') {{ 'checked' }} @endif>
                                                                    <label class="form-check-label" for="pending">Not
                                                                        Recommended</label><br>
                                                                    <input style="height:15px; width:15px;" type="radio"
                                                                        class="form-check-input" id="no_decision" name="decision"
                                                                        value=""
                                                                        @if ($person->decision == '') {{ 'checked' }} @endif>
                                                                    <label class="form-check-label" for="no_decision">Clear
                                                                        Decision</label>
                                                                </div>
                                                                <input type="hidden" name="trade"
                                                                    value="{{ $person->trade }}">

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
                                        <!-- Person Edit Modal -->
                                        <div class="modal fade" id="persEdit{{ $person->id }}" tabindex="-1"
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

                                                                $id = $person->id;
                                                            @endphp
                                                            <form method="POST" action="{{ route('eb.edit', $person->id) }}" style="text-align: left;">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="s_no">S/L</label>
                                                                            <input type="text" name="s_no" id="" class="form-control" value="{{$person->s_no}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="bdno">BD No</label>
                                                                            <input type="text" name="bdno" id="" class="form-control" value="{{$person->bdno}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="rank">Rank</label>
                                                                            <input type="text" name="rank" id="" class="form-control" value="{{$person->rank}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="name">Name</label>
                                                                            <input type="text" name="name" id="" class="form-control" value="{{$person->name}}">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="trade">Trade</label>
                                                                            <input type="text" name="trade" id="" class="form-control" value="{{$person->trade}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="entry_no">Entry No</label>
                                                                            <input type="text" name="entry_no" id="" class="form-control" value="{{$person->entry_no}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="avg_par">PAR (AVG)</label>
                                                                            <input type="text" name="avg_par" id="" class="form-control" value="{{$person->avg_par}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="career_marks">Career Marks</label>
                                                                            <input type="text" name="career_marks" id="" class="form-control" value="{{$person->career_marks}}">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="doe">Dt of Enrollment</label>
                                                                            <input type="text" name="doe" id="" class="form-control" value="{{$person->doe}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="dor">Dt of Retd</label>
                                                                            <input type="text" name="dor" id="" class="form-control" value="{{$person->dor}}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="conduct_sheet">Conduct Sheet</label>
                                                                            <input type="text" name="conduct_sheet" id="" class="form-control" value="{{$person->conduct_sheet}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="base_unit">Base Unit</label>
                                                                            <input type="text" name="base_unit" id="" class="form-control" value="{{$person->base_unit}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="rmks_by_ro">Remarks By Ro/D Pers</label>
                                                                            <textarea name="rmks_by_ro" id="" cols="" rows="3" class="form-control">{{$person->rmks_by_ro}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="rmks_by_board">Remarks By Board</label>
                                                                            <textarea name="rmks_by_board" id="" cols="" rows="3" class="form-control">{{$person->rmks_by_board}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="salient_points">Salient Points</label>
                                                                            <textarea name="salient_points" id="" cols="" rows="4" class="form-control">{{$person->salient_points}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="type">Pers Type</label>
                                                                            <select name="type" id="" class="form-control form-select">
                                                                                <option value="" disabled>Select Type</option>
                                                                                <option value="0" @if ($person->type == 0)
                                                                                    selected
                                                                                @endif>Applied Pers</option>
                                                                                <option value="1" @if ($person->type == 1)
                                                                                    selected
                                                                                @endif>Screening Pers</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <img src="{{ asset('evaluation-board/image') }}/{{ $person->bdno }}.gif" class="mt-2" alt="" style="width: 70px">
                                                                        {{-- <input type="file" name="image" id="" value=""> --}}
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
        $(document).ready(function() {
            // Attach change event handler to checkboxes
            $('input[type="checkbox"]').change(function() {
                // Get the column name and ID from data attributes
                var column_name = $(this).data('column_name');
                var id = $(this).data('id');

                // Determine the new value of the decision based on checkbox state
                var decision = $(this).is(':checked');
                // console.log(decision);
                if(decision==true){
                    $("#tr"+id).addClass('tr-row-bg-select');
                }
                if(decision==false){
                    $("#tr"+id).addClass('tr-row-bg-stanby');
                }
                // Send AJAX request to update decision status
                $.ajax({
                type: 'get',
                url: '/eb/items/' + id + '/update-decision',
                data: {
                    'decision': decision // Example decision value
                },
                success: function(response) {
                    // alert(response.success);
                },
                error: function(response) {

                }
            });
            });
        });

        $(function() {
            var test = localStorage.input === 'true' ? true : false;
            $('input').prop('unchecked', test || True);
        });

        $('input').on('change', function() {
            localStorage.input = $(this).is(':checked');
            // console.log($(this).is(':checked'));
            let result = ($(this).is(':checked'));
            // console.log(result);
            //document.getElementById("demo").innerHTML=result
        });


        $(document).ready(function() {
        // Initialize DataTable
        let table = new DataTable('#tableData', {
            info: true,
            ordering: true,
            paging: false,
            layout: {
                // topStart: 'pageLength',
                // topEnd: 'search',
                topStart: 'info',
                // bottomEnd: 'paging'
            }
        });

        // Function to populate dropdown with unique options from a column
        function populateDropdown() {
            // Get unique values from the Position column (index 2)
            var uniquePositions = [];
            table.column(4).data().each(function(value, index) {
                if (uniquePositions.indexOf(value) === -1) {
                    uniquePositions.push(value);  // Add unique values

                }
            });

            // Populate the dropdown with unique values
            var dropdown = $('#positionFilter');
            uniquePositions.forEach(function(position) {
                dropdown.append('<option value="' + position + '">' + position + '</option>');
            });
        }

        // Call the populateDropdown function after DataTable initialization
        populateDropdown();

         // Apply dropdown filter on Position column (index 4)
        $('#positionFilter').on('change', function() {
            var selectedValue = $(this).val();
            if (selectedValue === "") {
                table.column(4).search('').draw();  // Reset filter for "All Entry"
                table.order([0, 'asc']).draw();     // Sort column index 1 in ascending order
            } else {
                table.column(4).search(selectedValue).draw();  // Filter by selected value
                table.order([8, 'asc']).draw();     // Sort column index 8 in ascending order
            }
        });

    });

        $(document).ready(function(){
            window.addEventListener('scroll', function() {
            if (window.pageYOffset >= 250) {
                document.getElementById('recom-display').style.display = 'block';
            } else {
                document.getElementById('recom-display').style.display = 'none';
            }
            });

            let leftValue = document.getElementById('minCheck1').innerHTML;
            // console.log(leftValue);
            if(leftValue < 0){
                    document.getElementById("minCheck1").style.color='red';
                    document.getElementById("minCheck").style.color='red';
                }else{
                    document.getElementById("minCheck1").style.color='white';
                    document.getElementById("minCheck").style.color='white';
                }
        })
    </script>
@endpush
