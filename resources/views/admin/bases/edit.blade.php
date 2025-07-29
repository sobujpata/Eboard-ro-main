@extends('layout.sidenav-layout')
@section('content')
<div class="container">
    <h3>Edit Base</h3>
    <form method="POST" action="{{ route('admin.bases.update', $base->id) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Base Name</label>
            <input type="text" name="name" class="form-control" value="{{ $base->name }}" required>
        </div>
        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="full_name" class="form-control" value="{{ $base->full_name }}">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.bases.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
