<!-- Modal -->
<div class="modal fade" id="editModel{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 10px 30px 10px 30px;">
                <form method="POST" action="{{ url('/admin/user/edit', $user->id) }}">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <label class="form-lavel text-left">Name</label>
                        <input type="text" name="firstName" class="form-control" placeholder="Enter user name"
                            value="{{ $user->firstName }}">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <label class="form-lavel text-left">User Name</label>
                        <input type="text" name="userName" class="form-control" placeholder="Enter user name"
                            value="{{ $user->userName }}">
                    </div>
                    <div class="form-group">
                        <label class="form-lavel">Email</label>
                        <input type="eamil" name="email" class="form-control" placeholder="Enter Email Address"
                            value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label class="form-lavel">password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password"
                            value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <label class="form-lavel">Project For</label>
                        <select name="lastName" id="" class="form-control form-select">
                            <option value="" disabled selected>Select One</option>
                            <option value="pb" @if ($user->lastName == 'pb') {{ 'selected' }} @endif>Promotion board</option>
                            <option value="eb" @if ($user->lastName == 'eb') {{ 'selected' }} @endif>Evaluation board</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-lavel">User Type</label>
                        <select name="type" id="" class="form-select" aria-label="Default select example">
                            <option value="" desable>Selected One</option>
                            <option value="1"  @if ($user->type == '1') {{ 'selected' }} @endif>Supper Admin</option>
                            <option value="2"  @if ($user->type == '2') {{ 'selected' }} @endif>PB Admin/User</option>
                            <option value="7"  @if ($user->type == '7') {{ 'selected' }} @endif>PB Base/Unit</option>
                            <option value="6"  @if ($user->type == '6') {{ 'selected' }} @endif>Evaluation Board</option>
                        </select>
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
