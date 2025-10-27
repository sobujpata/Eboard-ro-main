<!-- Person Edit Modal -->
<div class="modal fade" id="persEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" style="background-color: #06c5f0;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%;">Update
                    Person</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="{{ route('pb.edit') }}" enctype="multipart/form-data" style="text-align: left;">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="s_no">S/L</label>
                                    <input type="text" name="s_no" id="s_no" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bdno">BD No</label>
                                    <input type="text" name="bdno" id="bdno" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="rank">Rank</label>
                                    <input type="text" name="rank" id="rank" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="trade">Trade</label>
                                    <input type="text" name="trade" id="trade" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="entry_no">Entry No</label>
                                    <input type="text" name="entry_no" id="entry_no" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="avg_par">PAR (AVG)</label>
                                    <input type="text" name="avg_par" id="avg_par" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="career_marks">Career Marks</label>
                                    <input type="text" name="career_marks" id="career_marks" class="form-control"
                                        value="">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="ttl_score">Total Score</label>
                                    <input type="text" name="ttl_score" id="ttl_score" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="es">Entry Sr</label>
                                    <input type="text" name="es" id="es" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cs">Command Sr</label>
                                    <input type="text" name="cs" id="cs" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="conduct_sheet">Conduct Sheet</label>
                                    <input type="text" name="conduct_sheet" id="conduct_sheet" class="form-control"
                                        value="">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="weight">Weight (Lbp)</label>
                                    <input type="text" name="weight" id="weight" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="base_unit">Base Unit</label>
                                    <input type="text" name="base_unit" id="base_unit" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sheetNo">Sheet No</label>
                                    <select name="sheetNo" id="sheetNo" class="form-control form-select" required>
                                        <option value="" disabled selected>Select
                                            Sheet No</option>
                                        <option value="1">
                                            SWO - MWO</option>
                                        <option value="2">
                                            WO - SWO</option>
                                        <option value="3">
                                            Sgt - WO</option>
                                        <option value="4">
                                            Sgt - WO (Booklet-2)</option>
                                        <option value="5">
                                            Sgt - WO (Booklet-3)</option>
                                        <option value="6">
                                            Sgt - WO (Booklet-4)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="base">Under Base</label>
                                    <select name="base" id="" class="form-control form-select">
                                        <option value="" disabled selected>Select Base</option>
                                        @foreach ($bases as $base)
                                            <option value="{{ $base->name }}"
                                                @if ($item->base == $base->name) selected @endif>{{ $base->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="other_rmks">Remarks by RO / D Pers</label>
                                    <textarea name="other_rmks" id="summernote" cols="" rows="3" class="form-control"></textarea>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="" id="image" class="mt-4 mb-2" alt="" style="width: 90px; border-radius: 8px;">
                                <input type="file" name="image" id="" value="">
                            </div>
                        </div>
                        <input type="hidden" id="updateId" name="updateId">

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
@push('other_script')
    <script>
        async function FillUpUpdateForm(id, image){
            document.getElementById('updateId').value = id;
            document.getElementById('image').src = document.getElementById('image').src = window.location.origin + '/' +image;
            showLoader()
            let res = await axios.post('/pb-pers-by-id', {id:id})
            hideLoader()
            console.log(res)
            document.getElementById('s_no').value =res.data.s_no;
            document.getElementById('bdno').value =res.data.bdno;
            document.getElementById('rank').value =res.data.rank;
            document.getElementById('name').value =res.data.name;
            document.getElementById('trade').value =res.data.trade;
            document.getElementById('entry_no').value =res.data.entry_no;
            document.getElementById('avg_par').value =res.data.avg_par;
            document.getElementById('career_marks').value =res.data.career_marks;
            document.getElementById('ttl_score').value =res.data.ttl_score;
            document.getElementById('es').value =res.data.es;
            document.getElementById('cs').value =res.data.cs;
            document.getElementById('conduct_sheet').value =res.data.conduct_sheet;
            document.getElementById('weight').value =res.data.weight;
            document.getElementById('base_unit').value =res.data.base_unit;
            document.getElementById('sheetNo').value =res.data.sheetNo;
            $('#summernote').summernote('code', res.data.other_rmks);

        }
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter Remarks by RO/D Pers',
                tabsize: 2,
                height: 200
            });
        });
    </script>
@endpush
