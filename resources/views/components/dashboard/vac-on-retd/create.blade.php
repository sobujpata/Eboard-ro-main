
<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
                </div>
                <div class="modal-body">
                    <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                                <label class="form-label">Trade</label>
                                <select type="text" class="form-control form-select" id="trade">
                                    <option value="">Select Trade</option>
                                </select>

                                <label class="form-label mt-2">Booklate</label>
                                <select name="sheet_no" id="sheet_no" class="form-control form-select">
                                    <option value="" disabled selected>Select Booklate</option>
                                    <option value="1">SWO-MWO</option>
                                    <option value="2">WO-SWO</option>
                                    <option value="3">Sgt-WO (Booklate-1)</option>
                                    <option value="4">Sgt-WO (Booklate-2)</option>
                                    <option value="5">Sgt-WO (Booklate-3)</option>
                                </select>

                                <label class="form-label mt-2">Entry No</label>
                                <input type="number" class="form-control" id="entry_no">

                                <label class="form-label mt-2">Vac On Retd</label>
                                <input type="number" class="form-control" id="vac_on_retd">

                                <label class="form-label mt-2">Remarks</label>
                                <input type="text" class="form-control" id="remarks">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="modal-close" class="btn bg-gradient-primary mx-2" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="Save()" id="save-btn" class="btn bg-gradient-success" >Save</button>
                </div>
            </div>
    </div>
</div>
<script>
    FillTradeDropDown();
    async function FillTradeDropDown(){
        let res = await axios.get("/trades");
        res.data.forEach(function (item,i) {
            let option=`<option value="${item['trade']}">${item['trade']}</option>`
            $("#trade").append(option);
        })
    }
    async function Save() {
        let trade=document.getElementById('trade').value;
        let sheet_no = document.getElementById('sheet_no').value;
        let entry_no = document.getElementById('entry_no').value;
        let vac_on_retd = document.getElementById('vac_on_retd').value;
        let remarks = document.getElementById('remarks').value;

        if (trade.length === 0) {
            errorToast("Trade Required !")
        }else if(sheet_no.length===0){
            errorToast("Booklate Required !")
        }else if(entry_no.length===0){
            errorToast("Entry No Required !")
        }else if(vac_on_retd.length===0){
            errorToast("Vac on retd Required !")
        }else {
            document.getElementById('modal-close').click();
            let formData=new FormData();
            formData.append('sheet_no',sheet_no)
            formData.append('entry_no',entry_no)
            formData.append('vac_on_retd',vac_on_retd)
            formData.append('remarks',remarks)
            formData.append('trade',trade)
            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }
            showLoader();
            let res = await axios.post("/vac-on-retd-create",formData,config)
            hideLoader();
            if(res.status===201){
                successToast('Request completed');
                document.getElementById("save-form").reset();
                await getList();
            }
            else{
                errorToast("Request fail !")
            }
        }
    }
</script>
