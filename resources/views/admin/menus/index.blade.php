@extends('layout.sidenav-layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('admin.menus.create') }}" class="btn btn-primary mb-3">+ Add Menu</a>
        </div>
        <div class="col-md-4 text-center text-decoration-underline">
            <h3>PB Menu List</h3>
        </div>
        <div class="col-md-4">
            <form action="{{ route('admin.menus.index') }}" method="get">
                @csrf
                <div class="row">
                <div class="col-9">
                    <input type="search" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search BD No....">
                </div>
                <div class="col-3">
                    <input type="submit" value="Search" class="btn btn-primary">
                </div>
            </div>
            </form>

        </div>
    </div>



    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Ser No</th>
                <th>Title</th>
                <th>Parent</th>
                <th>URL</th>
                <th>Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Nav_menus as $key=>$menu)
                <tr @if(request('edited_id') == $menu->id) class="table-success" id="edited-row" @endif>
                    <td>{{ $Nav_menus->firstItem() + $key }}</td>
                    <td>{{ $menu->title }}</td>
                    <td>{{ $menu->parent->title ?? '—' }}</td>
                    <td>{{ $menu->url }}</td>
                    <td>{{ $menu->order }}</td>
                    <td>
                        <a href="{{ route('admin.menus.edit', $menu->id) }}" class="btn btn-sm btn-warning mb-0">Edit</a>
                        <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Delete this?')" class="btn btn-sm btn-danger mb-0">Del</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-3">
    {{ $Nav_menus->withQueryString()->links() }}
    </div>
</div>
@endsection
