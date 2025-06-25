<!-- Modal -->
<div class="modal fade" id="currentPb{{ $currentPb->id }}"  data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="currentPbLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content bg-success">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="currentPbLabel">Next 2 Yrs Vac</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('/admin/pb/CurrentVac/edit', $currentPb->id) }}"
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
                                            @if ($trade->trade == $currentPb->trade) {{ 'selected' }} @endif>
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
                                            @if ($rank->short_name == $currentPb->rank) {{ 'selected' }} @endif>
                                            {{ $rank->short_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label class="form-lavel">Estb</label>
                                <input type="text" name="estb" class="form-control" placeholder="Enter estb"
                                    value="{{ $currentPb->estb }}">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">

                            <div class="form-group">
                                <label class="form-lavel">Str</label>
                                <input type="text" name="str" class="form-control" placeholder="Enter str"
                                    value="{{ $currentPb->str }}">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label class="form-lavel">Exist</label>
                                <input type="text" name="exist" class="form-control" placeholder="Enter exist"
                                    value="{{ $currentPb->exist }}">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label class="form-lavel">Retd</label>
                                <input type="text" name="retd" class="form-control" placeholder="Enter retd"
                                    value="{{ $currentPb->retd }}">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">

                            <div class="form-group">
                                <label class="form-lavel">Total Vac</label>
                                <input type="text" name="ttl" class="form-control" placeholder="Enter total"
                                value="{{ $currentPb->ttl }}">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label class="form-lavel">Sheet No</label>
                                <input type="text" name="sheetNo" class="form-control" placeholder="Enter Sheet No"
                                    value="{{ $currentPb->sheetNo }}">
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
