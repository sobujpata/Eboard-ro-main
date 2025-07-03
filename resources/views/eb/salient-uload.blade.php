@extends('layout.app-eb')
@section('title', 'Salient Upload.')
@section('content')

    <div class="container">

        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="bolder text-decoration-underline">Salient Upload</h2>
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/eb-salient-upload') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" name="bdno" id="bdno" class="form-control" placeholder="Insert BD No"
                                            required style="width: 70%; float: left;">
                                        <input type="button" onclick="searchBtn()" value="Search"
                                                class="btn btn-primary mb-0">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    Rank : <span class="badge bg-secondary" id="rank">N/A</span>
                                </div>
                                <div class="col-md-3">
                                    Nane : <span class="badge bg-secondary" id="name">N/A</span>
                                </div>
                                <div class="col-md-3">
                                    trade : <span class="badge bg-secondary" id="trade">N/A</span>
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <label for="salient_point" class="form-label">Salient Point :</label>
                                <textarea name="salient_point" class="form-control" id="salient_points" rows="10"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Save</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
        $('#salient_points').summernote({
            placeholder: 'Enter Salient Points',
            tabsize: 2,
            height: 200
        });
    });

        async function searchBtn() {
            let bdno = document.getElementById('bdno').value;
            showLoader();


                let res = await axios.post("/eb-pers-for-saliant-point-by-bdno", {
                    bdno
                });

                hideLoader();
                console.log("API Response:", res.data.person);

                let data = res.data.person; // 👈 Fix: Access nested data

                if (data) {
                    document.getElementById('rank').innerText = data.rank || 'N/A';
                    document.getElementById('name').innerText = data.name || 'N/A';
                    document.getElementById('trade').innerText = data.trade || 'N/A';
                     $('#salient_points').summernote('code', data.salient_points || 'N/A');
                } else {
                    document.getElementById('rank').innerText = 'N/A';
                    document.getElementById('name').innerText = 'N/A';
                    document.getElementById('trade').innerText = 'N/A';
                    $('#salient_points').summernote('code', 'N/A');
                }
        }
    </script>
@endsection
