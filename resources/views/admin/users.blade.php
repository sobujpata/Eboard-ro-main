@extends('layout.sidenav-layout')

@section('content')
    <style>
        thead {
            background-color: #000;
            color: #fff;
        }
    </style>
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
                            <button type="button" class="btn btn-success">
                                <a href="{{ url('/admin/users-download') }}" style="color:white; text-decoration:none;">
                                    Download</a>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Users</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                            <form method="POST" action="{{ url('/admin/user/store') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="form-lavel">Name</label>
                                                    <input type="text" name="firstName" class="form-control"
                                                        placeholder="Enter user first name">
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-lavel">User Name</label>
                                                    <input type="text" name="userName" class="form-control"
                                                        placeholder="Enter user name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-lavel">Email</label>
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-lavel">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Enter password">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-lavel">Project For</label>
                                                    <select name="lastName" id="" class="form-control form-select">
                                                        <option value="" disabled selected>Select One</option>
                                                        <option value="pb">Promotion board</option>
                                                        <option value="eb">Evaluation board</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-lavel">User Type</label>
                                                    <select name="type" id="" class="form-select"
                                                        aria-label="Default select example">
                                                        <option value="" desable>Selected One</option>
                                                        <option value="1">Supper Admin</option>
                                                        <option value="2">PB Admin/User</option>
                                                        <option value="7">PB Base/Unit</option>
                                                        <option value="6">Evaluation Board</option>
                                                    </select>
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
                            <h3>All Users</h3>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="customers" class="table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S/No</th>
                                <th>Name</th>
                                <th>User Name</th>
                                <th>Email Address</th>
                                <th>Password</th>
                                 <th>Project for</th>
                                <th>User Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <td class="text-center">{{ $count++ }}</td>
                                    <td class="text-left">{{ $user->firstName }}</td>
                                    <td class="text-left">{{ $user->userName }}</td>
                                    <td class="text-left">{{ $user->email }}</td>
                                    <td class="text-center">{{ $user->password }}</td>
                                    <td class="text-left">{{ $user->lastName }}</td>
                                    <td class="text-center">{{ $user->type }}</td>
                                    <td class="text-left">
                                        <button type="button" class="btn btn-primary mb-0" data-bs-toggle="modal"
                                            data-bs-target="#editModel{{ $user->id }}">
                                            <i class="fa-solid fa-edit"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="editModel{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                                                        <form method="POST"
                                                            action="{{ url('/admin/user/edit', $user->id) }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="hidden" name="id"
                                                                    value="{{ $user->id }}">
                                                                <label class="form-lavel text-left">User Name</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    placeholder="Enter user name"
                                                                    value="{{ $user->userName }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-lavel">email</label>
                                                                <input type="eamil" name="email" class="form-control"
                                                                    placeholder="Enter Email Address"
                                                                    value="{{ $user->email }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-lavel">password</label>
                                                                <input type="password" name="password"
                                                                    class="form-control" placeholder="Enter password"
                                                                    value="{{ $user->password }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-lavel">User Type</label>
                                                                <select name="type" id="" class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option value="" desable>Selected One</option>
                                                                    <option value="1"
                                                                        @if ($user->type == '1') {{ 'selected' }} @endif>
                                                                        Super Admin</option>
                                                                    <option value="0"
                                                                        @if ($user->type == '2') {{ 'selected' }} @endif>
                                                                        PB Admin/User</option>
                                                                    <option value="2"
                                                                        @if ($user->type == '6') {{ 'selected' }} @endif>
                                                                        Evaluation Board</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-lavel">Profile</label>
                                                                <input type="file" name="profile" class="form-control"
                                                                    placeholder="Enter File"
                                                                    value="{{ $user->profile }}">
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
                                        <a href="{{ Route('user.delete', $user->id) }}" class="btn btn-danger mb-0"><i
                                                class="fa-solid fa-trash"></i></a>
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
@push('other_script')
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            let table = new DataTable('#customers', {
                info: true,
                ordering: true,
                paging: true,
                layout: {
                    // topStart: 'pageLength',
                    topEnd: 'search',
                    topStart: 'info',
                    // bottomEnd: 'paging'
                }
            });
        });
    </script>
@endpush
