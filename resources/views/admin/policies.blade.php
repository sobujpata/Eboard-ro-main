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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Policy</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                    <form method="POST" action="{{url('/admin/create') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-lavel">Policy Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter policy name">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">Subject</label>
                                            <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">Published Date</label>
                                            <input type="date" name="published_on" class="form-control" placeholder="Enter Published Date">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">Policy For</label>
                                            <select name="policy_for" id="" class="form-select" aria-label="Default select example">
                                                <option value="" desable>Selected One</option>
                                                <option value="Promotion">Promotion</option>
                                                <option value="UN Mission">UN Mission</option>
                                                <option value="Evaluation Board">Evaluation Board</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-lavel">Include File</label>
                                            <input type="file" name="policyFile" class="form-control" placeholder="Enter File">
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
                        <h3>All Policies</h3>
                    </div>
                    <div class="col-sm-4"></div>
                </div>

            </div>
            <div class="card-body">
                <table id="customers" class="example1 table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">S/No</th>
                            <th class="text-center">Policy Name</th>
                            <th class="text-center">Subject</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($policies) --}}
                        @foreach ($policies as $policy)
                            <tr>
                                <td class="text-center">{{$count++}}</td>
                                <td class="text-center">{{ $policy->name }}</td>
                                <td class="text-left">{{ $policy->subject }}</td>
                                <td class="text-center">{{ $policy->published_on }}</td>
                                <td  class="text-center"style="text-align: center">
                                    <a href="{{asset('policies')}}/{{ $policy->file}}" target="_blank" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModel{{$policy->id}}">
                                        <i class="fa-solid fa-edit"></i>
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
                                                <form method="POST" action="{{url('/admin/update', $policy->id) }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="{{$policy->id}}">
                                                        <label class="form-lavel">Policy Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Enter policy name" value="{{$policy->name}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Subject</label>
                                                        <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="{{$policy->subject}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Published Date</label>
                                                        <input type="date" name="published_on" class="form-control" placeholder="Enter Published Date" value="{{$policy->published_on}}">>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Policy For</label>
                                                        <select name="policy_for" id="" class="form-select" aria-label="Default select example" >
                                                                <option value="" desable>Selected One</option>
                                                                <option value="Promotion"
                                                                    @if ($policy->policy_for=="Promotion")
                                                                        {{'selected'}}
                                                                    @endif
                                                                >Promotion</option>
                                                                <option value="UN Mission"
                                                                    @if ($policy->policy_for=="UN Mission")
                                                                        {{'selected'}}
                                                                    @endif
                                                                >UN Mission</option>
                                                                <option value="Evaluation Board"
                                                                    @if ($policy->policy_for=="Evaluation Board")
                                                                        {{"selected"}}
                                                                    @endif
                                                                >Evaluation Board</option>
                                                                <option value="Others"
                                                                    @if ($policy->policy_for=="Others")
                                                                        {{"selected"}}
                                                                    @endif
                                                                >Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-lavel">Include File</label>
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
                                    <a href="{{Route('policy.delete', $policy->id)}}"  class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
