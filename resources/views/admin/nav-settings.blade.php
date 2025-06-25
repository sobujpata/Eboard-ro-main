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
                                                    <label class="form-lavel">User Name</label>
                                                    <input type="text" name="name" class="form-control"
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
                                                    <label class="form-lavel">User Type</label>
                                                    <select name="type" id="" class="form-select"
                                                        aria-label="Default select example">
                                                        <option value="" desable>Selected One</option>
                                                        <option value="1">Admin</option>
                                                        <option value="0">Promotion Board</option>
                                                        <option value="2">Evaluation Board</option>
                                                        <option value="3">Mission Selection</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-lavel">Profile</label>
                                                    <input type="file" name="profile" class="form-control"
                                                        placeholder="Enter Image">
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
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            @foreach ($trades as $trade)
                                <button class="nav-link @if ($loop->first) active @endif"
                                    id="v-pills-tab-{{ $trade->id }}" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-{{ $trade->id }}" type="button" role="tab"
                                    aria-controls="v-pills-{{ $trade->id }}"
                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                    {{ $trade->trade }}
                                </button>
                            @endforeach
                        </div>

                        <div class="tab-content" id="v-pills-tabContent">
                            @foreach ($trades as $trade)
                                <div class="tab-pane fade @if ($loop->first) show active @endif"
                                    id="v-pills-{{ $trade->id }}" role="tabpanel"
                                    aria-labelledby="v-pills-tab-{{ $trade->id }}" tabindex="0">

                                    {{-- <ul class="list-group">
                                    @forelse ($trade->navbars as $navbar)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $navbar->name }}
                                            <small class="text-muted">{{ $navbar->url }}</small>
                                        </li>
                                    @empty
                                        <li class="list-group-item text-muted">No navbar items found.</li>
                                    @endforelse
                                </ul> --}}
                                    <div class="card">
                                        <div class="card-body">
                                            <h3>Navbar list For {{$trade->trade}}</h3>
                                            <table class="table table-striped table-bordered"
                                                style="width: 100% !important">
                                                <thead>
                                                    <tr>
                                                        <th>S/L</th>
                                                        <th>Nav Name</th>
                                                        <th>Page No</th>
                                                        <th>Url</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($trade->navbars as $navbar)
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{ $navbar->name }}</td>
                                                            <td>{{ $navbar->page_no }}</td>
                                                            <td>{{ $navbar->url }}</td>
                                                            <td>{{ $navbar->status }}</td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal{{ $navbar->id }}">
                                                                    Edit
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade"
                                                                    id="exampleModal{{ $navbar->id }}" tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5"
                                                                                    id="exampleModalLabel">Navbar For
                                                                                    {{ $trade->trade }}</h1>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <form action="" method="post">
                                                                                    <div class="row">
                                                                                        <div class="col-md-3">
                                                                                            <div class="form-group">
                                                                                                <label for="name">Nav
                                                                                                    Name</label>
                                                                                                <input type="text"
                                                                                                    name="name"
                                                                                                    value="{{ $navbar->name }}"
                                                                                                    class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <div class="form-group">
                                                                                                <label for="page_no">Nav
                                                                                                    Page no</label>
                                                                                                <input type="text"
                                                                                                    name="page_no"
                                                                                                    value="{{ $navbar->page_no }}"
                                                                                                    class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <div class="form-group">
                                                                                                <label for="url">Nav
                                                                                                    url</label>
                                                                                                <input type="text"
                                                                                                    name="url"
                                                                                                    value="{{ $navbar->url }}"
                                                                                                    class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <div class="form-group">
                                                                                                <label for="status">Nav
                                                                                                    status</label>
                                                                                                <input type="text"
                                                                                                    name="status"
                                                                                                    value="{{ $navbar->status }}"
                                                                                                    class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="button"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty

                                                        <td colspan="5" class="list-group-item text-muted">No navbar
                                                            items found.</td>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
@push('other_script')
    </script>
@endpush
