@extends('layout.app-pb')

@section('title', 'Person Excel List Upload')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <h2 class="fw-bold text-decoration-underline text-center mt-3">Image URL Download</h2>

                <div class="row mt-4 mb-4">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ route('imageUrl.download') }}" method="GET">
                            @csrf

                            <div class="form-group mb-3">
                                <select class="form-control form-select" name="trade" required>
                                    <option value="" selected disabled>Select Trade</option>
                                    @foreach ($trades as $trade)
                                        <option value="{{ $trade->trade }}">{{ $trade->trade }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <select class="form-control form-select" name="sheetNo" required>
                                    <option value="" selected disabled>Select Sheet</option>
                                    <option value="1">SWO-MWO</option>
                                    <option value="2">WO-SWO</option>
                                    <option value="3">Sgt-WO (Booklet-1)</option>
                                    <option value="4">Sgt-WO (Booklet-2)</option>
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-4">Download</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
