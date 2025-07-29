@extends('layout.app-pb')
@section('title', 'Retd After Completion of 25 Yrs or More Svc')
@section('content')
    <div class="container-fluid mt-6">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                Total BD NO : {{ $totalBdNos }}
                            </div>
                            <div class="col-md-4">
                                <h3 class="text-center text-decoration-underline">Promotion Board - @php
                                    $year = date('Y');
                                    echo $year;
                                @endphp</h3>

                            </div>

                            <div class="col-md-4">
                                <span class="text-center">Copy This Bd No by clicking Button</span>
                                <button class="btn btn-primary" onclick="copyBdnos()">Copy</button>
                            </div>
                        </div>
                        <hr>
                        {{-- bdno show --}}
                        <P id="bdnoList">
                            @foreach ($bdnos as $bdno)
                                {{ $bdno }},
                            @endforeach
                        </P>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyBdnos() {
            const bdnos = document.getElementById('bdnoList').innerText.trim();
            navigator.clipboard.writeText(bdnos)
                .then(() => {
                    alert('BD No copied to clipboard!');
                })
                .catch(err => {
                    alert('Failed to copy text: ' + err);
                });
        }
    </script>

@endsection
