@extends('layout.app-eb')
@section('title','Multi Conduct sheet Upload by Drag and Dop.')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .dropzone {
        border: 2px dashed #0087F7;
        background: #f9f9f9;
        padding: 20px;
        text-align: center;
    }
</style>
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center" style="margin-top: 10px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class="bolder text-decoration-underline">Multi Conduct Sheet Upload by Drag and Dop.</h2>
                    <h5 class="text-danger"><strong>Note : Conduct Sheet name will be BD No and extention .jpg</strong></h5>

                </div>
                <div class="card-body">
                    <form action="{{ url('/eb-conduct-sheet-upload') }}" class="dropzone" id="file-dropzone">
                        @csrf
                    </form>
                    <div class="container mt-5">
                        <strong class="mx-3">Note: "If you want to delete all file for new project then you click delete button".</strong>
                        <button id="delete-files" class="btn btn-danger">
                            Delete All Files
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('other_script')
<script>
    Dropzone.options.fileDropzone = {
        paramName: "files[]",
        maxFilesize: 5,
        acceptedFiles: "image/*,application/pdf",
        success: function(file, response) {
            console.log(response.message);
        },
        error: function(file, response) {
            console.log("Upload failed: " + response.message);
        }
    };
</script>
<script>
    document.getElementById('delete-files').addEventListener('click', function() {
        fetch("{{ url('/delete-all-conduct-sheet') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json"
            }
        }).then(response => response.json())
          .then(data => alert(data.message));
    });
</script>

@endpush
