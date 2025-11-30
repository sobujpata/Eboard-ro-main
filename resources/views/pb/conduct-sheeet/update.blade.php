<!-- Modal -->
<div class="modal fade" id="conductSheetEdit" tabindex="-1" aria-labelledby="conductSheetEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-black" id="conductSheetEditLabel">Offense</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('conductSheet.update') }}" method="post">
                    @csrf
                    <input type="text" name="updateId" id="updateId">
                    <div class="row gap-y-4">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="bdno">BD No</label>
                                <input type="text" name="bdnoUpdate" id="bdnoUpdate" class="form-control"
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="rank">Present Rank</label>
                                <input type="text" name="present_rankUpdate" id="present_rankUpdate"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="nameUpdate" id="nameUpdate" class="form-control"
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="trade">Trade</label>
                                <input type="text" name="tradeUpdate" id="tradeUpdate" class="form-control"
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="base_or_unit">Base or Unit</label>
                                <input type="text" name="base_or_unitUpdate" id="base_or_unitUpdate"
                                    class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date_of_offense">Date of Offense</label>
                                <input type="date" name="date_of_offenseUpdate" id="date_of_offenseUpdate"
                                    class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="rank">Rank</label>
                                <input type="text" name="rankUpdate" id="rankUpdate" class="form-control"
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date_of_punishment">Date of Punishment</label>
                                <input type="date" name="date_of_punishmentUpdate" id="date_of_punishmentUpdate"
                                    class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="awarded">Awarded</label>
                                <input type="text" name="awardedUpdate" id="awardedUpdate" class="form-control"
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="entry">Entry</label>
                                <input type="text" name="entryUpdate" id="entryUpdate" class="form-control"
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="moral_trapitude">Moral Trupitude</label>
                                <input type="text" name="moral_trapitudeUpdate" id="moral_trapitudeUpdate"
                                    class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="offense">Offense</label>
                                <textarea class="form-control" name="summernoteUpdate" id="summernoteUpdate" rows="10"></textarea>
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
    async function FillUpUpdateForm(id) {
        document.getElementById('updateId').value = id;
        showLoader()
        let res = await axios.post('/conduct-sheet-by-id', {
            id: id
        })
        hideLoader()
        console.log(res)
        document.getElementById('bdnoUpdate').value = res.data.bdno;
        document.getElementById('present_rankUpdate').value = res.data.present_rank;
        document.getElementById('nameUpdate').value = res.data.name;
        document.getElementById('tradeUpdate').value = res.data.trade;
        document.getElementById('base_or_unitUpdate').value = res.data.base_or_unit;
        document.getElementById('date_of_offenseUpdate').value = res.data.date_of_offense;
        document.getElementById('rankUpdate').value = res.data.rank;
        document.getElementById('date_of_punishmentUpdate').value = res.data.date_of_punishment;
        document.getElementById('awardedUpdate').value = res.data.awarded;
        document.getElementById('entryUpdate').value = res.data.entry;
        document.getElementById('moral_trapitudeUpdate').value = res.data.moral_trapitude;
        $('#summernoteUpdate').summernote('code', res.data.offense);
    }
</script>
<script>
    $(document).ready(function() {
        $('#summernoteUpdate').summernote({
            placeholder: 'Enter Conduct Sheet',
            tabsize: 2,
            height: 200
        });
    });
</script>
