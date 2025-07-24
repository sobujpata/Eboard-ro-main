@extends('layout.sidenav-layout')
@section('content')
<div class="container">
    <h3>Edit Menu</h3>
    <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $menu->title }}" required>
        </div>
        <div class="mb-3">
            <label>URL</label>
            <input type="text" name="url" class="form-control" value="{{ $menu->url }}">
        </div>
        <div class="mb-3">
            <label>Parent Menu</label>
            <select name="parent_id" class="form-control">
                <option value="">None</option>
                @foreach ($parents as $id => $title)
                    <option value="{{ $id }}" {{ $menu->parent_id == $id ? 'selected' : '' }}>{{ $title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Order</label>
            <input type="number" name="order" class="form-control" value="{{ $menu->order }}">
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
