@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-1 bg-info">
            @include('layouts.partials.sidebarMain')
        </div>
        <div class="col-md-11 mt-3">
            <div class="card" >
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                +Add New
                            </button>
                            <button type="button" class="btn btn-success" >
                                <a href="{{ url('users-download') }}" style="color:white; text-decoration:none;"> Download</a>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Users</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                        <form method="POST" action="{{url('/admin/user/store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label class="form-lavel">User Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter user name">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-lavel">Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-lavel">Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Enter password">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-lavel">User Type</label>
                                               <select name="type" id="" class="form-select" aria-label="Default select example">
                                                    <option value="" desable>Selected One</option>
                                                    <option value="1">Admin</option>
                                                    <option value="0">Promotion Board</option>
                                                    <option value="2">Evaluation Board</option>
                                                    <option value="3">Mission Selection</option>
                                               </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-lavel">Profile</label>
                                                <input type="file" name="profile" class="form-control" placeholder="Enter Image">
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
                            <h3>All Users</h3>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>

                </div>
                <div class="card-body">
                    <table id="customers" class="table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 5%">S/No</th>
                                <th style="width: 10%">Profile</th>
                                <th style="width: 10%">user Name</th>
                                <th style="width: 15%">Email Address</th>
                                <th style="width: 30%">password</th>
                                <th style="width: 5%">User Type</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($policies) --}}
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$count++}}</td>
                                    <td>{{ $user->profile }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    {{-- <td>
                                        @php
                                            $pass =$user->password;
                                            echo Crypt::decrypt($pass);
                                        @endphp
                                    </td> --}}
                                    <td>
                                        </td>
                                    <td style="text-align: center;">
                                        {{-- <a href="{{asset('users')}}/{{ $user->profile }}" target="_blank" class="btn btn-success"><i class="fa-solid fa-eye"></i></a> --}}

                                         <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModel{{$user->id}}">
                                            <i class="fa-solid fa-edit"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editModel{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                                    <form method="POST" action="{{url('/admin/user/edit', $user->id) }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="{{$user->id}}">
                                                            <label class="form-lavel">user Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Enter user name" value="{{$user->name}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-lavel">email</label>
                                                            <input type="eamil" name="email" class="form-control" placeholder="Enter Email Address" value="{{$user->email}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-lavel">password</label>
                                                            <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{$user->password}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-lavel">User Type</label>
                                                            <select name="type" id="" class="form-select" aria-label="Default select example" >
                                                                    <option value="" desable>Selected One</option>
                                                                    <option value="1"
                                                                        @if ($user->type=="1")
                                                                            {{'selected'}}
                                                                        @endif
                                                                    >Admin</option>
                                                                    <option value="0"
                                                                        @if ($user->type=="0")
                                                                            {{'selected'}}
                                                                        @endif
                                                                    >Promotion Board</option>
                                                                    <option value="2"
                                                                        @if ($user->type=="2")
                                                                            {{"selected"}}
                                                                        @endif
                                                                    >Evaluation Board</option>
                                                                    <option value="3"
                                                                        @if ($user->type=="3")
                                                                            {{"selected"}}
                                                                        @endif
                                                                    >Mission Selection</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-lavel">Profile</label>
                                                            <input type="file" name="profile" class="form-control" placeholder="Enter File" value="{{$user->profile}}">
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
                                        <a href="{{Route('user.delete', $user->id)}}"  class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S/No</th>
                                <th>profile</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>user Type</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
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
