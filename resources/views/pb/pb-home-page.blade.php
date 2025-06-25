@extends('layout.app-pb')

@section('content')
<div class="container">

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-success" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="row justify-content-center" style="margin-top: 10px;">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header text-center">
                    <h3>Promotion Policy</h3>
                </div>
                <div class="card-body">
                    <table class="example1 table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead class="bg-success">
                            <tr >
                                <th class="text-center text-white w-10">S/No</th>
                                <th class="text-center text-white w-20">Policy Name</th>
                                <th class="text-center text-white w-30">Subject</th>
                                <th class="text-center text-white w-20">Date</th>
                                <th class="text-center text-white w-10">View</th>
                            </tr>
                        </thead>
                        {{-- @dd($user->userName) --}}
                        @php
                            $i=1;
                        @endphp
                        <tbody>
                            @foreach ($policies as $policy)
                                <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td>{{$policy->name}}</td>
                                    <td>{{$policy->subject}}</td>
                                    <td>{{$policy->published_on}}</td>
                                    <td class="text-center">
                                        <a href="{{asset($policy->file)}}" class="btn btn-success" target="_blank">View</a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModel{{$policy->id}}" style="{{ $user->userName == 'pbuser' ? 'display: none;' : '' }}">
                                            Edit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editModel{{$policy->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Policy</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                                    <form method="POST" action="{{url('/admin/update', $policy->id) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group pb-3">
                                                            <input type="hidden" name="id" value="{{$policy->id}}">
                                                            <label class="form-lavel" style="float: left !important">Policy Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Enter policy name" value="{{$policy->name}}">
                                                        </div>
                                                        <div class="form-group pb-3">
                                                            <label class="form-lavel" style="float: left !important">Subject</label>
                                                            <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="{{$policy->subject}}">
                                                        </div>
                                                        <div class="form-group pb-3">
                                                            <label class="form-lavel" style="float: left !important">Published Date</label>
                                                            <input type="text" name="published_on" class="form-control" placeholder="Enter Published Date" value="{{$policy->published_on}}">
                                                        </div>
                                                        <div class="form-group pb-3">
                                                            <label class="form-lavel" style="float: left !important">Policy For</label>
                                                            <select name="policy_for" id="" class="form-select" aria-label="Default select example" >
                                                                    <option value="" desable>Selected One</option>
                                                                    <option value="pb"
                                                                        @if ($policy->policy_for=="pb")
                                                                            {{'selected'}}
                                                                        @endif
                                                                    >Promotion</option>

                                                                    <option value="eb"
                                                                        @if ($policy->policy_for=="eb")
                                                                            {{"selected"}}
                                                                        @endif
                                                                    >Evaluation Board</option>

                                                            </select>
                                                        </div>
                                                        <div class="form-group pb-3">
                                                            <label class="form-lavel" style="float: left !important">Include File</label>
                                                            <input type="file" name="policyFile" class="form-control" placeholder="Enter File" value="{{$policy->file}}">
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
                                        <a href="{{Route('policy.delete', $policy->id)}}"  class="btn btn-danger" style="{{ $user->userName == 'pbuser' ? 'display: none;' : '' }}">Delete</a>

                                    </td>
                                </tr>
                            @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
