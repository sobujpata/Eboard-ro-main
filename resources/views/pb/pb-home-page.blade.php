@extends('layout.app-pb')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center" style="margin-top: 10px;"
        <div class="col-md-12">
            <div class="card">

                <div class="card-header text-center">
                    <h3>Promotion Policy</h3>
                </div>
                <div class="card-body">
                    <table class="example1 table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead class="bg-success">
                            <tr >
                                <th class="text-center text-white w-10">S/No</th>
                                <th class="text-center text-white w-20">Policy Name</th>
                                <th class="text-center text-white w-30">Subject</th>
                                <th class="text-center text-white w-20">Date</th>
                                <th class="text-center text-white w-10">View</th>
                            </tr>
                        </thead>
                        <tbody id="tableList">
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('other_script')

    <script>
        $(document).ready(function(){
            $( "#target" ).on( "click", function() {
                alert( "Handler for `click` called." );
            } );
        })
    </script>

   <script>
       getList();


async function getList() {


    showLoader();
    let res=await axios.get("/pb/pb-policy");
    hideLoader();

    let tableList=$("#tableList");
    // let tableData=$("#tableData");

    // tableData.DataTable().destroy();
    tableList.empty();

    res.data.data.forEach(function (item,index) {
        let row=`<tr>
                    <td class="text-center">${index+1}</td>
                    <td>${item['name']}</td>
                    <td>${item['subject']}</td>
                    <td>${item['published_on']}</td>
                    <td class="text-center">
                        <a href="{{asset('policies')}}/${item['file']}" target="_blank"><button type="button" class="btn btn-success">View</button></a>
                    </td>
                 </tr>`
        tableList.append(row)
    })
}
    </script>
@endpush
