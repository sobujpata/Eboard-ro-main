<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Offense</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('conductSheet.create') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="row gap-y-4">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="bdno">BD No</label>
                                <input type="text" name="bdno" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="rank">Present Rank</label>
                                <input type="text" name="present_rank" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="trade">Trade</label>
                                <input type="text" name="trade" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="base_or_unit">Base or Unit</label>
                                <input type="text" name="base_or_unit" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date_of_offense">Date of Offense</label>
                                <input type="date" name="date_of_offense" class="form-control" value="{">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="rank">Rank</label>
                                <input type="text" name="rank" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date_of_punishment">Date of Punishment</label>
                                <input type="date" name="date_of_punishment" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="awarded">Awarded</label>
                                <input type="text" name="awarded" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="entry">Entry</label>
                                <input type="text" name="entry" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="moral_trupitude">Moral Trupitude</label>
                                <input type="text" name="moral_trupitude" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="offense">Offense</label>
                                <textarea name="summernote" class="form-control" id="summernote" rows="10"></textarea>
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
        $('#summernote').summernote({
            placeholder: 'Enter Conduct Sheet',
            tabsize: 2,
            height: 200
        });
    });
</script>
