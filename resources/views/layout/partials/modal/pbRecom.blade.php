{{-- Modal start --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas as $data)

                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas2 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas3 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas4 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas5 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas6 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas7 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas8 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas9 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas10 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas11 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas12 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas13 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas14 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas15 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas16 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas17 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas18 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas19 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas20 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas21 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas22 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas23 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas24 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas25 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas26 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas27 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas28 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas29 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal30" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas30 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal31" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas31 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal32" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas32 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal33" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas33 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal34" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas34 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal35" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas35 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal36" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas36 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal37" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas37 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal38" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas38 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal39" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas39 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal40" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas40 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal41" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas41 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal42" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas42 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal43" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas43 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal44" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas44 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal45" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas45 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal46" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas46 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal47" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas47 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal48" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas48 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal49" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas49 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal50" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas50 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal51" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas51 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal52" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas52 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal53" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas53 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal54" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas54 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal55" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas55 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal56" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas56 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal57" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas57 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal58" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas58 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal59" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas59 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal60" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas60 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal61" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas61 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal62" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas62 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal63" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas63 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal64" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas64 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal65" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas65 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal66" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas66 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal67" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas67 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal68" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas68 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal69" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas69 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal70" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas70 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal71" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas71 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal72" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas72 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal73" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas73 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal74" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas74 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal75" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas75 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal76" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas76 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal77" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas77 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal78" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas78 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal79" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas79 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal80" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas80 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal81" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas81 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal82" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas82 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal83" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas83 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal84" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas84 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal85" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas85 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal86" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas86 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal87" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas87 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal88" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas88 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal89" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas89 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal90" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas90 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal91" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas91 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal92" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas92 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal93" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas93 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal94" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas94 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal95" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas95 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal96" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas96 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal97" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas97 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal98" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas98 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal100" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas100 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal101" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas101 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal102" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas102 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal103" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas103 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal104" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas104 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal105" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas105 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal106" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas106 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal107" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas107 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal108" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas108 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal109" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas109 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal110" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas110 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal111" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas111 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal112" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas112 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal113" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas113 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal114" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas114 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal115" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas115 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal116" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas116 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal117" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas117 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal118" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas118 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal119" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas119 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
{{-- Modal start --}}
<div class="modal fade" id="exampleModal120" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content " style="background-color: #000000;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="width:100%; color:white;" >Trade and Rank Wise Recom List</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered" style="color:#ffffff;">
                        <thead>
                            <tr align="center" bgcolor="#1cc88a">
                                <th style="vertical-align: middle; width: 2%;">Ser No</th>
                                <th style="vertical-align: middle; width: 4%;">BD No</th>
                                <th style="vertical-align: middle; width: 3%;">Rank</th>
                                <th style="vertical-align: middle; width: 10%;">Name</th>
                                <th style="vertical-align: middle; width: 5%;">Trade</th>
                                <th style="vertical-align: middle; width: 2%;">Entry</th>
                                <th style="vertical-align: middle; width: 3%;">Total Score</th>
                                <th style="vertical-align: middle; width: 2%;">ES</th>
                                <th style="vertical-align: middle; width: 2%;">CS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($datas120 as $data)
                                <tr>
                                    <td style="color:white;">{{$i++}}</td>
                                    <td style="color:white;">{{$data->bdno}}</td>
                                    <td style="color:white;">{{$data->rank}}</td>
                                    <td style="color:white;">{{$data->name}}</td>
                                    <td style="color:white;">{{$data->trade}}</td>
                                    <td style="color:white;">{{$data->entry_no}}</td>
                                    <td style="color:white;">{{$data->ttl_score}}</td>
                                    <td style="color:white;">{{$data->es}}</td>
                                    <td style="color:white;">{{$data->cs}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
