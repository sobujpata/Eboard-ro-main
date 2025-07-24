@extends('layout.sidenav-layout')

@section('content')
<div class="container">
    <h3>Menu List</h3>
    <a href="{{ route('admin.menus.create') }}" class="btn btn-primary mb-3">+ Add Menu</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Parent</th>
                <th>URL</th>
                <th>Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Nav_menus as $menu)
                <tr>
                    <td>{{ $menu->title }}</td>
                    <td>{{ $menu->parent->title ?? '—' }}</td>
                    <td>{{ $menu->url }}</td>
                    <td>{{ $menu->order }}</td>
                    <td>
                        <a href="{{ route('admin.menus.edit', $menu->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Delete this?')" class="btn btn-sm btn-danger">Del</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
