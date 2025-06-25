<!-- Modal -->
<div class="modal fade" id="next_2yrs{{ $vacNextYear->id }}"  data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="next_2yrsLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content bg-success">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="next_2yrsLabel">Next 2 Yrs Vac</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('/admin/pb/PbNextVac/edit', $vacNextYear->id) }}"
                    style="text-align: left !important">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label class="form-lavel">Trade</label>
                                <select name="trade" id="" class="form-select"
                                    aria-label="Default select example">
                                    <option value="" desable>Selected One</option>
                                    @foreach ($trades as $trade)
                                        <option value="{{ $trade->trade }}"
                                            @if ($trade->trade == $vacNextYear->trade) {{ 'selected' }} @endif>
                                            {{ $trade->trade }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label class="form-lavel">Rank</label>
                                <select name="rank" id="" class="form-select"
                                    aria-label="Default select example">
                                    <option value="" desable>Selected One</option>
                                    @foreach ($ranks as $rank)
                                        <option value="{{ $rank->short_name }}"
                                            @if ($rank->short_name == $vacNextYear->rank) {{ 'selected' }} @endif>
                                            {{ $rank->short_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label class="form-lavel">Next Year</label>
                                <input type="text" name="next_yr" class="form-control" placeholder="Enter Next year"
                                    value="{{ $vacNextYear->next_yr }}">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">

                            <div class="form-group">
                                <label class="form-lavel">Nexr 2 yrs</label>
                                <input type="text" name="next_2yrs" class="form-control" placeholder="Enter next_2yrs"
                                    value="{{ $vacNextYear->next_2yrs }}">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label class="form-lavel">Sheet No</label>
                                <input type="text" name="sheetNo" class="form-control" placeholder="Enter Sheet No"
                                    value="{{ $vacNextYear->sheetNo }}">
                            </div>
                        </div>

                    </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>
