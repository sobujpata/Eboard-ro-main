<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Vac On Retd</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Trade</label>
                                <select type="text" class="form-control form-select" id="tradeUpdate">
                                    <option value="">Select Trade</option>
                                </select>
                                <label class="form-label mt-2">Booklate</label>
                                <select id="sheet_noUpdate" class="form-control form-select">
                                    <option value="" disabled selected>Select Booklate</option>
                                    <option value="1">SWO-MWO</option>
                                    <option value="2">WO-SWO</option>
                                    <option value="3">Sgt-WO (Booklate-1)</option>
                                    <option value="4">Sgt-WO (Booklate-2)</option>
                                    <option value="5">Sgt-WO (Booklate-3)</option>
                                </select>
                                {{-- <input type="text" class="form-control" id="sheet_noUpdate"> --}}

                                <label class="form-label mt-2">Entry No</label>
                                <input type="text" class="form-control" id="entry_noUpdate">

                                <label class="form-label mt-2">Vac on retd</label>
                                <input type="text" class="form-control" id="vac_on_retdUpdate">

                                <label class="form-label mt-2">Remarks</label>
                                <input type="text" class="form-control" id="remarksUpdate">

                                <input type="text" class="d-none" id="updateID">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button id="update-modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal"
                    aria-label="Close">Close</button>
                <button onclick="update()" type="submit" id="update-btn"
                    class="btn bg-gradient-success">Update</button>
            </div>

        </div>
    </div>
</div>


<script>
    UpdateFillTradeDropDown();
    async function UpdateFillTradeDropDown() {
        let res = await axios.get("/trades");
        res.data.forEach(function(item, i) {
            let option = `<option value="${item['trade']}">${item['trade']}</option>`
            $("#tradeUpdate").append(option);
        })
    }



    async function FillUpUpdateForm(id) {
        document.getElementById('updateID').value = id;
        showLoader();
        let res = await axios.post("/vac-on-retd-by-id", {
            id: id
        })
        hideLoader();
        console.log(res);

        document.getElementById('tradeUpdate').value = res.data.data['trade'];
        document.getElementById('sheet_noUpdate').value = res.data.data['sheet_no'];
        document.getElementById('entry_noUpdate').value = res.data.data['entry_no'];
        document.getElementById('vac_on_retdUpdate').value = res.data.data['vac_on_retd'];
        document.getElementById('remarksUpdate').value = res.data.data['remarks'];
    }


    async function update() {
        let updateID = document.getElementById('updateID').value;
        let tradeUpdate = document.getElementById('tradeUpdate').value;
        let sheet_noUpdate = document.getElementById('sheet_noUpdate').value;
        let entry_noUpdate = document.getElementById('entry_noUpdate').value;
        let vac_on_retdUpdate = document.getElementById('vac_on_retdUpdate').value;
        let remarksUpdate = document.getElementById('remarksUpdate').value;

        // Validation
        if (tradeUpdate.length === 0) {
            errorToast("Product Category Required !");
            return;
        } else if (sheet_noUpdate.length === 0) {
            errorToast("Product Cost Required !");
            return;
        } else {
            document.getElementById('update-modal-close').click(); // Close modal if form is valid

            let formData = new FormData();
            formData.append('id', updateID);
            formData.append('trade', tradeUpdate);
            formData.append('sheet_no', sheet_noUpdate);
            formData.append('entry_no', entry_noUpdate);
            formData.append('vac_on_retd', vac_on_retdUpdate);
            formData.append('remarks', remarksUpdate);

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            };

            try {
                showLoader();
                let res = await axios.post(`/vac-on-retd-update/${updateID}`, formData, config);
                hideLoader();
                if (res.status === 200) {
                    successToast('Request completed');
                    document.getElementById("update-form").reset();
                    await getList();
                } else {
                    errorToast("Request failed!");
                }
            } catch (error) {
                hideLoader();
                if (error.response) {
                    console.error("Validation errors:", error.response.data.errors);
                    console.error("Full Response:", error.response.data); // Log full response for more details
                    if (error.response.status === 422) {
                        let validationErrors = error.response.data.errors;
                        for (const key in validationErrors) {
                            if (validationErrors.hasOwnProperty(key)) {
                                errorToast(validationErrors[key][0]);
                            }
                        }
                    } else {
                        errorToast("An error occurred while processing the request.");
                    }
                }
            }
        }
    }
</script>
