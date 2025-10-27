<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <div class="row justify-content-between ">
                        <div class="align-items-center col">
                            <h4>Vac On Retd</h4>
                            <span>Only For Cy Asst and Edn Instr</span>
                        </div>
                        <div class="align-items-center col">
                            <button data-bs-toggle="modal" data-bs-target="#create-modal"
                                class="float-end btn m-0  bg-gradient-primary">Create</button>
                        </div>
                    </div>


                    <hr />
                    <div class="container-fluid m-0 p-0">
                        <table class="table table-striped w-100" id="tableData">
                            <thead>
                                <tr>
                                    <th class="text-center">S/No</th>
                                    <th>Trade</th>
                                    <th>Sheet No</th>
                                    <th>Entry No</th>
                                    <th>Vac On Retd</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableList"></tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    getList();

    async function getList() {
        showLoader();
        let res = await axios.get('/vac-on-retd-list');
        hideLoader();
        let tableList = $("#tableList");
        let tableData = $("#tableData");
        // Destroy DataTable safely if already initialized
        if ($.fn.DataTable.isDataTable(tableData)) {
            tableData.DataTable().destroy();
        }
        tableList.empty();

        res.data.data.forEach(function (item, index) {
            if(item.sheet_no === 1){
                item.sheet_no = "SWO-MWO";
            }
            else if(item.sheet_no === 2){
                item.sheet_no = "WO-SWO";
            }
            else if(item.sheet_no === 3){
                item.sheet_no = "Sgt-WO (Booklate-1)";
            }
            else if(item.sheet_no === 4){
                item.sheet_no = "Sgt-WO (Booklate-2)";
            }
            else if(item.sheet_no === 5){
                item.sheet_no = "Sgt-WO (Booklate-3)";
            }
            let row = `
                <tr>
                    <td class="text-center">${index + 1}</td>
                    <td>${item.trade ?? ''}</td>
                    <td>${item.sheet_no ?? ''}</td>
                    <td>${item.entry_no ?? ''}</td>
                    <td>${item.vac_on_retd ?? ''}</td>
                    <td>${item.remarks ?? ''}</td>
                    <td>
                        <button data-id="${item.id}" class="btn editBtn btn-sm btn-outline-success mb-0">
                            <i class="fa text-sm fa-pen"></i>
                        </button>
                        <button data-id="${item.id}" class="btn deleteBtn btn-sm btn-outline-danger mb-0">
                            <i class="fa text-sm fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>`;
            tableList.append(row);
        });

        // Attach event listeners
        $('.editBtn').on('click', async function () {
            let id = $(this).data('id');
            await FillUpUpdateForm(id);
            $("#update-modal").modal('show');
        });

        $('.deleteBtn').on('click', function () {
            let id = $(this).data('id');
            $("#delete-modal").modal('show');
            $("#deleteID").val(id);
        });

        // Initialize DataTable
        new DataTable('#tableData', {
            lengthMenu: [10, 30, 50, 100, 500],
            order: [[0, 'asc']]
        });
    }
</script>

