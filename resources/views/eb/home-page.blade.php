@extends('layout.app-eb')
@section('title', 'Policies')
@section('content')
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
                    <h3>Evaluation Policy</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead>
                            <tr class="bg-success">
                                <th class="text-center text-white w-10">S/No</th>
                                <th class="text-center text-white w-20">Policy Name</th>
                                <th class="text-center text-white w-30">Subject</th>
                                <th class="text-center text-white w-20">Date</th>
                                <th class="text-center text-white w-10">View</th>
                            </tr>
                        </thead>
                        {{-- @dd($policies) --}}
                        @php
                            $i=1;
                        @endphp
                        <tbody>
                            @foreach ($policies as $policy)
                                <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td>{{$policy->name}}</td>
                                    <td>{{$policy->subject}}</td>
                                    <td>{{$policy->published_on}}</td>
                                    <td class="text-center">
                                        <a href="{{asset($policy->file)}}" class="btn btn-success" target="_blank">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
