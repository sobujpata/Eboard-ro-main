<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Offense</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('conductSheet.update',$item->id ) }}" method="post">
            @csrf
            @method('put')
            <div class="row gap-y-4">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="bdno">BD No</label>
                        <input type="text" name="bdnoUpdate" class="form-control" value="{{ $item->bdno }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="rank">Present Rank</label>
                        <input type="text" name="present_rankUpdate" class="form-control" value="{{ $item->rank }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="nameUpdate" class="form-control" value="{{ $item->name }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="trade">Trade</label>
                        <input type="text" name="tradeUpdate" class="form-control" value="{{ $item->trade }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="base_or_unit">Base or Unit</label>
                        <input type="text" name="base_or_unitUpdate" class="form-control" value="{{ $item->base_or_unit }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="date_of_offense">Date of Offense</label>
                        <input type="date" name="date_of_offenseUpdate" class="form-control" value="{{ $item->date_of_offense }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="rank">Rank</label>
                        <input type="text" name="rankUpdate" class="form-control" value="{{ $item->rank }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="date_of_punishment">Date of Punishment</label>
                        <input type="date" name="date_of_punishmentUpdate" class="form-control" value="{{ $item->date_of_punishment }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="awarded">Awarded</label>
                        <input type="text" name="awardedUpdate" class="form-control" value="{{ $item->awarded }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="entry">Entry</label>
                        <input type="text" name="entryUpdate" class="form-control" value="{{ $item->entry }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="moral_trupitude">Moral Trupitude</label>
                        <input type="text" name="moral_trupitudeUpdate" class="form-control" value="{{ $item->moral_trupitude }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="offense">Offense</label>
                        <textarea name="offenseUpdate" class="form-control" id="summernoteUpdate{{ $item->id }}" rows="10">{!! $item->offense  !!}</textarea>
                    </div>
                </div>

            </div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
        $(document).ready(function() {
            $('#summernoteUpdate{{ $item->id }}').summernote({
                placeholder: 'Enter Remarks by RO/D Pers',
                tabsize: 2,
                height: 200
            });
        });
</script>
