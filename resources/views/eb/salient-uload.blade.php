@extends('layout.app-eb')
@section('title','Multi Salient Upload by Drag and Dop.')
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
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="bdno" class="form-label bolder">BD no :</label>
                                    <input type="text" name="bdno" class="form-control" placeholder="Insert BD No" required>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="mt-3"><strong>Note :</strong> If you want to number with text then copy bellow code and follow this code.</div>

                                &lt;ol&gt;<br>
                                    &lt;li&gt;Hello World&lt;/li&gt;<br>
                                    &lt;li&gt;Hello World&lt;/li&gt;<br>
                                    &lt;li&gt;Hello World&lt;/li&gt;<br>
                                &lt;/ol&gt;
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="salient_point" class="form-label">Salient Point :</label>
                            <textarea name="salient_point" class="form-control" id="" rows="9">

                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Save</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
