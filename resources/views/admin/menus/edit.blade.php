<!-- Modal -->
<div class="modal fade" id="editModel{{ $menu->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit PB Next Year Vac</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}"
                    style="text-align: left !important">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $menu->title }}"
                                required>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>URL</label>
                            <input type="text" name="url" class="form-control" value="{{ $menu->url }}">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>Parent Menu</label>
                            <select name="parent_id" class="form-control">
                                <option value="">None</option>
                                @foreach ($parents as $id => $title)
                                    <option value="{{ $id }}" {{ $menu->parent_id == $id ? 'selected' : '' }}>
                                        {{ $title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>Order</label>
                            <input type="number" name="order" class="form-control" value="{{ $menu->order }}">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control form-select">
                                <option value="1" {{ $menu->status == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $menu->status == '0' ? 'selected' : '' }}>Disable</option>
                            </select>
                        </div>
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
