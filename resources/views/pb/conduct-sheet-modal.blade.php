<!-- Salient points -->

<div class="modal fade" id="staticBackdropConductSheet" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-center text-decoration-underline" id="myModalLabel" style="width:100%;">Conduct Sheet</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <input type="hidden" id="conductId">
                    <div class="row mb-3">
                        <div class="col-md-12 fs-5">
                            BD/<span style="font-weight:bold;" id="bdnoCS"></span> Rank : <span id="rankCS" style="font-weight:bold;"></span> Name : <span id="nameCS" style="font-weight:bold;"></span> Trade : <span style="font-weight:bold;" id="tradeCS"></span>
                        </div>

                    </div>
                    <table class="table table-bordered w-100">
                        <thead class="table-info">
                            <tr>
                                <th width="10%" style="text-align:center;">Base Or Unit</th>
                                <th width="10%" style="text-align:center;">Date Of Offense</th>
                                <th width="5%" style="text-align:center;">Rank</th>
                                <th width="50%" style="text-align:center;">Offense</th>
                                <th width="10%" style="text-align:center;">Date Of Punishment</th>
                                <th width="10%" style="text-align:center;">Awarded</th>
                                <th width="5%" style="text-align:center;">Entry</th>
                            </tr>
                        </thead>
                        <tbody id="coductSheetList">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

@push('other_script')
    <script>
        async function FillUpConductSheetForm(id, bdno, rank, name, trade) {
            document.getElementById('conductId').value = id;
            document.getElementById('bdnoCS').innerHTML = bdno;
            document.getElementById('rankCS').innerHTML = rank;
            document.getElementById('nameCS').innerHTML = name;
            document.getElementById('tradeCS').innerHTML = trade;

            showLoader()
            let res = await axios.post('/conduct-sheet-by-person', {
                id: id
            })
            hideLoader()
            console.log(res)
            let tableList = $("#coductSheetList");
            tableList.empty();

            res.data.forEach(function(item, index) {
                function formatDate(dateString) {
                    const date = new Date(dateString);

                    const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                                    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

                    const day = String(date.getDate()).padStart(2, '0');
                    const month = months[date.getMonth()];
                    const year = date.getFullYear();

                    return `${day} ${month} ${year}`;
                }


                function rankShortForm(rank) {
                    if (rank.includes('(')) {
                        return rank.split('(')[1].split(')')[0];
                    } else {
                        return rank;
                    }
                    }

                let row = `
                <tr>
                    <td style="vertical-align: top; text-align:center;">${item.base_or_unit ?? ''}</td>
                    <td style="vertical-align: top; text-align:center;">${formatDate(item.date_of_offense) ?? ''}</td>
                    <td style="vertical-align: top; text-align:center;">${rankShortForm(item.rank) ?? ''}</td>
                    <td style="text-align:justify;">${item.offense ?? ''}</td>
                    <td style="vertical-align: top; text-align:center;">${formatDate(item.date_of_punishment) ?? ''}</td>
                    <td style="vertical-align: top; text-align:center;">${item.awarded ?? ''}</td>
                    <td style="vertical-align: top; text-align:center;">${item.entry ?? ''}</td>

                </tr>`;
                tableList.append(row);
            });
        }
    </script>
@endpush
