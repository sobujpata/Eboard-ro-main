@extends('layout.sidenav-layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('admin.bases.create') }}" class="btn btn-primary mb-3">+ Add Menu</a>
        </div>
        <div class="col-md-4 text-center text-decoration-underline">
            <h3>Base List</h3>
        </div>
        <div class="col-md-4">
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Ser No</th>
                <th>Short Name</th>
                <th>Full Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bases as $key=>$base)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $base->name }}</td>
                    <td>{{ $base->full_name }}</td>
                    <td>
                        <a href="{{ route('admin.bases.edit', $base->id) }}" class="btn btn-sm btn-warning mb-0">Edit</a>
                        <form action="{{ route('admin.bases.destroy', $base->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Delete this?')" class="btn btn-sm btn-danger mb-0">Del</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-3">

    </div>
</div>
@endsection
