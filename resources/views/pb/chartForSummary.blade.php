@extends('layout.app-pb')

@section('content')
    <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row justify-content-center" style="margin-top: 10px;" class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>MWO, SWO and WO Trade wise Recom</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="highcharts-figure">
                                <div id="container"></div>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <figure class="highcharts-figure">
                                <div id="tech-b"></div>
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <figure class="highcharts-figure">
                                <div id="non-tech"></div>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure class="highcharts-figure">
                                <div id="air-crw"></div>
                            </figure>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('other_script')
    <script src=" https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        $(document).ready(function() {
            $("#target").on("click", function() {
                alert("Handler for `click` called.");
            });
        })
    </script>
     <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Tech-A',
                align: 'Center'
            },
            subtitle: {
                text: 'PB-24',
                align: 'Center'
            },
            xAxis: {
                categories: ['AC Fitt', 'E&I Fitt', 'Armt Fitt', 'LSEW', 'Photo', 'Radio Fitt'],
                crosshair: true,
                accessibility: {
                    description: 'Trade'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total Recom'
                }
            },
            tooltip: {
                valueSuffix: ''

            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },

            series: [{
                    name: 'MWO',
                    data: [{{$recomList[0]}}, {{$recomList[3]}}, {{$recomList[6]}}, {{$recomList[9]}}, {{$recomList[12]}}, {{$recomList[15]}}]
                },
                {
                    name: 'SWO',
                    data: [{{$recomList[1]}}, {{$recomList[4]}}, {{$recomList[7]}}, {{$recomList[10]}}, {{$recomList[13]}}, {{$recomList[16]}}]
                },
                {
                    name: 'WO',
                    data: [{{$recomList[2]}}, {{$recomList[5]}}, {{$recomList[8]}}, {{$recomList[11]}}, {{$recomList[14]}}, {{$recomList[17]}}]
                }

            ],
            dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    inside: true,
                    verticalAlign: 'top',
                    format: '{point.y:1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '11px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }


        });
        Highcharts.chart('tech-b', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Tech-B',
                align: 'Center'
            },
            subtitle: {
                text: 'PB-24',
                align: 'Center'
            },
            xAxis: {
                categories: ['Gen Engg', 'MTF', 'MTO', 'GS', 'Rad Optr', 'ATCA', 'Met Asst', 'Med Asst', 'Log Asst'],
                crosshair: true,
                accessibility: {
                    description: 'Trade'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total Recom'
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },

            series: [{
                    name: 'MWO',
                    data: [{{$recomList[18]}}, {{$recomList[21]}}, {{$recomList[24]}}, {{$recomList[27]}}, {{$recomList[30]}}, {{$recomList[33]}}, {{$recomList[36]}}, {{$recomList[39]}}, {{$recomList[42]}}]
                },
                {
                    name: 'SWO',
                    data: [{{$recomList[19]}}, {{$recomList[22]}}, {{$recomList[25]}}, {{$recomList[28]}}, {{$recomList[31]}}, {{$recomList[34]}}, {{$recomList[37]}}, {{$recomList[40]}}, {{$recomList[43]}}]
                },
                {
                    name: 'WO',
                    data: [{{$recomList[20]}}, {{$recomList[23]}}, {{$recomList[26]}}, {{$recomList[29]}}, {{$recomList[32]}}, {{$recomList[35]}}, {{$recomList[38]}}, {{$recomList[41]}}, {{$recomList[44]}}]
                }

            ]


        });
        Highcharts.chart('non-tech', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Non- Tech',
                align: 'Center'
            },
            subtitle: {
                text: 'PB-24',
                align: 'Center'
            },
            xAxis: {
                categories: ['Sec Asst (GD)', 'Admin Asst', 'Cat Asst', 'Sec Asst (A)', 'PF&DI', 'Music', 'GC', 'Provost', 'Cy Asst', 'Edn Instr'],
                crosshair: true,
                accessibility: {
                    description: 'Trade'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total Recom'
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },

            series: [{
                    name: 'MWO',
                    data: [{{$recomList[45]}}, {{$recomList[48]}}, {{$recomList[51]}}, {{$recomList[54]}}, {{$recomList[57]}}, {{$recomList[60]}}, {{$recomList[63]}}, {{$recomList[66]}}, {{$recomList[69]}}, {{$recomList[71]}}]
                },
                {
                    name: 'SWO',
                    data: [{{$recomList[46]}}, {{$recomList[49]}}, {{$recomList[52]}}, {{$recomList[55]}}, {{$recomList[58]}}, {{$recomList[61]}}, {{$recomList[64]}}, {{$recomList[67]}}, {{$recomList[70]}}, {{$recomList[72]}}]
                },
                {
                    name: 'WO',
                    data: [{{$recomList[47]}}, {{$recomList[50]}}, {{$recomList[53]}}, {{$recomList[56]}}, {{$recomList[59]}}, {{$recomList[62]}}, {{$recomList[65]}}, {{$recomList[68]}}, , ]
                }

            ]


        });
        Highcharts.chart('air-crw', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Air Crew',
                align: 'Center'
            },
            subtitle: {
                text: 'PB-24',
                align: 'Center'
            },
            xAxis: {
                categories: ['Flt Engr', 'LM', 'AG', 'Air Std'],
                crosshair: true,
                accessibility: {
                    description: 'Trade'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total Recom'
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },

            series: [{
                    name: 'MWO',
                    data: [{{$recomList[73]}}, {{$recomList[76]}}, {{$recomList[79]}}, {{$recomList[82]}}]
                },
                {
                    name: 'SWO',
                    data: [{{$recomList[74]}}, {{$recomList[77]}}, {{$recomList[80]}}, {{$recomList[83]}}]
                },
                {
                    name: 'WO',
                    data: [{{$recomList[75]}}, {{$recomList[78]}}, {{$recomList[81]}}, {{$recomList[84]}}]
                }

            ]


        });
    </script>
@endpush
