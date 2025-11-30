<!-- Person Edit Modal -->
<div class="modal fade" id="AllRecomList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" style="background-color: #06c5f0;">
            <div class="modal-header">
                <h3 class="modal-title text-decoration-underline" id="myModalLabel" style="width:100%;"><span id="tradeHeaderAll"></span> <span id="rankHeader"></span> Recom List</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <table class="table table-stript table-dark" id="tableData">
                        <thead>
                            <tr>
                                <th>Ser No</th>
                                <th>Photo</th>
                                <th>BD No</th>
                                <th>Rank</th>
                                <th>Name</th>
                                <th>Trade</th>
                                <th>Entry No</th>
                                <th>Ttl Score</th>
                            </tr>
                        </thead>
                        <tbody id="allRecomTbody">
                            <!-- Dynamic rows will be appended here -->
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
        async function FillUpAllDataTable(trade){
            document.getElementById('tradeHeaderAll').innerHTML = trade;
            showLoader()
            let res = await axios.post('/summery-dynamic-all', {trade:trade})
            hideLoader()
            console.log(res.data)
            let tbody = document.getElementById('allRecomTbody');
            tbody.innerHTML = ''; // Clear existing rows
            res.data.forEach((item, index) => {
                    let avg_acr = Number(item.avg_par) || 0;
                    let career = Number(item.career_marks) || 0;

                    // Always 2 digits after decimal
                    avg_acr = avg_acr.toFixed(2);
                    career = career.toFixed(2);

                    let total_score = (Number(avg_acr) + Number(career)).toFixed(2);

                let row = `<tr>
                    <td class="text-center">${index + 1}</td>
                    <td><img src="/promotionBoard/image/${item.bdno}.gif" alt="Photo" width="60" height="70"></td>
                    <td>${item.bdno}</td>
                    <td>${item.rank}</td>
                    <td>${item.name}</td>
                    <td>${item.trade}</td>
                    <td>${item.entry_no}</td>
                    <td>${total_score}</td>
                </tr>`;
                tbody.insertAdjacentHTML('beforeend', row);
            });

        }
    </script>

@endpush
