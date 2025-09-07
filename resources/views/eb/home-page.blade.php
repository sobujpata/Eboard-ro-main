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
                                $i = 1;
                            @endphp
                            <tbody>
                                @foreach ($policies as $policy)
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td>{{ $policy->name }}</td>
                                        <td>{{ $policy->subject }}</td>
                                        <td>{{ $policy->published_on }}</td>
                                        <td class="text-center">
                                            <a href="{{ asset($policy->file) }}" class="btn btn-success"
                                                target="_blank">View</a>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop_{{ $policy->id }}" style="display:@if ($userName == 'eb') none @endif">
                                                Edit
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop_{{ $policy->id }}"
                                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Policy Edit</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{url('/admin/update/'.$policy->id)}}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label float-start">Policy Name</label>
                                                                    <input type="text" class="form-control" id="name"
                                                                        name="name" value="{{ $policy->name }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="subject" class="form-label float-start">Subject</label>
                                                                    <input type="text" class="form-control" id="subject"
                                                                        name="subject" value="{{ $policy->subject }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="published_on"
                                                                        class="form-label float-start">Published
                                                                        On</label>
                                                                    <input type="text" class="form-control"
                                                                        id="published_on" name="published_on"
                                                                        value="{{ $policy->published_on }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="file" class="form-label float-start">Upload
                                                                        File</label>
                                                                    <input type="file" class="form-control" id="policyFile"
                                                                        name="policyFile">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="policy_for" class="form-label float-start">Policy For
                                                                        </label>
                                                                        <select class="form-control form-select" name="policy_for" id="policy_for">
                                                                            <option value="" disabled>Select Policy for</option>
                                                                            <option value="pb" @if ($policy->policy_for == 'pb') selected

                                                                            @endif>Promotion Board</option>
                                                                            <option value="eb" @if ($policy->policy_for == 'eb') selected

                                                                            @endif>Evaluation Board</option>
                                                                        </select>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary mt-3">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
