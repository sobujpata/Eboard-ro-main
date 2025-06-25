@extends('layout.app-eb')
@section('title', 'Retd After Completion of 25 Yrs or More Svc')
@section('content')
    <div class="container-fluid mt-6">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-decoration-underline">Evaluation Board - @php
                            $year = date('Y');
                            echo $year;
                        @endphp</h3>
                        <p class="text-center">Copy This Bd No by clicking Button</p>
                        {{-- bdno show --}}
                        <P id="bdnoList">
                            @foreach ($bdnos as $bdno)
                                {{ $bdno }},
                            @endforeach
                        </P>
                        <button class="btn btn-primary" onclick="copyBdnos()">Copy</button>
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
                    alert('BD Nos copied to clipboard!');
                })
                .catch(err => {
                    alert('Failed to copy text: ' + err);
                });
        }
    </script>

@endsection
