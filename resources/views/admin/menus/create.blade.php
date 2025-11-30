@extends('layout.sidenav-layout')

@section('content')
<div class="container">
    <h3>Create New Menu</h3>
    <form method="POST" action="{{ route('admin.menus.store') }}">
        @csrf
        <div class="row">
            <div class="mb-3 col-md-4">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3 col-md-4">
                <label>URL</label>
                <input type="text" name="url" class="form-control">
            </div>
            <div class="mb-3 col-md-4">
                <label>Parent Menu</label>
                <select name="parent_id" class="form-control">
                    <option value="">None</option>
                    @foreach ($parents as $id => $title)
                        <option value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 col-md-4">
                <label>Order</label>
                <input type="number" name="order" class="form-control" value="0">
            </div>
            <div class="mb-3 col-md-4">
                <label>Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" selected>Active</option>
                    <option value="0">Disable</option>
                </select>
            </div>
        </div>
        <button class="btn btn-success">Create</button>
        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
