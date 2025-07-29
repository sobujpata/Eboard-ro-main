@extends('layout.sidenav-layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-decoration-underline">Create New Base</h3>
                        <form method="POST" action="{{ route('admin.bases.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" name="full_name" class="form-control">
                            </div>

                            <button class="btn btn-success">Create</button>
                            <a href="{{ route('admin.bases.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
