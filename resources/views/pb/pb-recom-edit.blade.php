<!-- Recom Edit -->
<div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #06c5f0;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%;">Remarks
                    Edit</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    @php

                        $id = $item->id;
                    @endphp
                    <form method="POST" action="{{ route('pb.update', $item->id) }}">
                        @csrf
                        <h4 style="text-align: left;">Remarks By Board:</h4>
                        <div class="form-check" style="text-align:left; font-size: 18px;">
                            @php
                                $rmks = $item->rmks;
                                $rmk = explode(',', $rmks);
                            @endphp
                            <input style="height:15px; width:15px; vertical-align: middle;" class="form-check-input"
                                type="checkbox" name="rmks[]" value="Not Cleared By PB" id="flexCheckDefault"
                                @if (in_array('Not Cleared By PB', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>

                            <label class="form-check-label" for="flexCheckDefault">
                                Not Cleared By PB.
                            </label>
                        </div>
                        <div class="form-check" style="text-align:left; font-size: 18px;">
                            @php
                                $rmks = $item->rmks;
                                $rmk = explode(',', $rmks);
                            @endphp
                            <input style="height:15px; width:15px; vertical-align: middle;" class="form-check-input"
                                type="checkbox" name="rmks[]" value="No Trade Vacancy" id="flexCheckDefault"
                                @if (in_array('No Trade Vacancy', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>

                            <label class="form-check-label" for="flexCheckDefault">
                                No Trade Vacancy.
                            </label>
                        </div>
                        <div class="form-check" style="text-align:left; font-size: 18px;">
                            <input style="height:15px; width:15px; vertical-align: middle;" class="form-check-input"
                                type="checkbox" name="rmks[]" value="Low Score" id="flexCheckDefault"
                                @if (in_array('Low Score', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>
                            <label class="form-check-label" for="flexCheckDefault">
                                Low Score.
                            </label>
                        </div>
                        <div class="form-check" style="text-align:left; font-size: 18px;">
                            <input style="height:15px; width:15px; vertical-align: middle;" class="form-check-input"
                                type="checkbox" name="rmks[]" value="Low Medical Cat." id="flexCheckDefault"
                                @if (in_array('Low Medical Cat.', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>
                            <label class="form-check-label" for="flexCheckDefault">
                                Low Medical Cat..
                            </label>
                        </div>

                        <div class="form-check" style="text-align:left; font-size: 18px;">
                            <input style="height:15px; width:15px; vertical-align: middle;" class="form-check-input"
                                type="checkbox" name="rmks[]" value="Deferred For 1 Year" id="flexCheckDefault"
                                @if (in_array('Deferred For 1 Year', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>
                            <label class="form-check-label" for="flexCheckDefault">
                                Deferred For 1 Year.
                            </label>
                        </div>
                        <div class="form-check" style="text-align:left; font-size: 18px;">
                            <input style="height:15px; width:15px; vertical-align: middle;" class="form-check-input"
                                type="checkbox" name="rmks[]" value="No Further Promotion" id="flexCheckDefault"
                                @if (in_array('No Further Promotion', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>
                            <label class="form-check-label" for="flexCheckDefault">
                                No Further Promotion.
                            </label>
                        </div>
                        <div class="form-check" style="text-align:left; font-size: 18px;">
                            <input style="height:15px; width:15px; vertical-align: middle;" class="form-check-input"
                                type="checkbox" name="rmks[]" value="Decision Pending" id="flexCheckDefault"
                                @if (in_array('Decision Pending', $rmk)) {
                                                                    {{ 'Checked' }}
                                                                } @endif>
                            <label class="form-check-label" for="flexCheckDefault">
                                Decision Pending.
                            </label>
                        </div>
                        <hr>
                        <div class="form-group" style="text-align:left; font-size: 18px;">
                            <label class="" for="flexCheckDefault">OtherRemarks:
                            </label>
                            <textarea name="rmks_1" class="form-control" id="validationTextarea" placeholder="Remarks">{{ $item->rmks_1 }}</textarea>
                        </div>
                        <hr>
                        <h4 style="text-align: left;">Please Select Your Decision:
                        </h4>
                        <div class="form-check" style="text-align:left; font-size: 18px;">
                            <input style="height:15px; width:15px; vertical-align: middle;" type="radio"
                                class="form-check-input" id="final" name="decision" value="true"
                                @if ($item->decision == 'true') {{ 'checked' }} @endif>
                            <label class="form-check-label" for="final">Recommended</label><br>
                            <input style="height:15px; width:15px;" type="radio" class="form-check-input"
                                id="pending" name="decision" value="false"
                                @if ($item->decision == 'false') {{ 'checked' }} @endif>
                            <label class="form-check-label" for="pending">Not
                                Recommended</label><br>
                            <input style="height:15px; width:15px;" type="radio" class="form-check-input"
                                id="no_decision" name="decision" value=""
                                @if ($item->decision == ' ') {{ 'checked' }} @endif>
                            <label class="form-check-label" for="no_decision">Clear
                                Decision</label>
                        </div>
                        <input type="hidden" name="trade" value="{{ $item->trade }}">
                        <input type="hidden" name="sheetNo" value="{{ $item->sheetNo }}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="update_data">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
