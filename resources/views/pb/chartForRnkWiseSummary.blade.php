@extends('layout.app-pb')

@section('content')
    <div class="container">
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
                        <div class="col-md-12">
                            <figure class="highcharts-figure">
                                <div id="container"></div>
                            </figure>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <figure class="highcharts-figure">
                                <div id="SWO-chart"></div>
                            </figure>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <figure class="highcharts-figure">
                                <div id="WO-chart"></div>
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
                text: 'Rank: MWO'
            },
            subtitle: {
                text: 'Source: PB-24'
            },
            xAxis: {
                type: 'category',
                labels: {
                    autoRotation: [-45, -90],
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total Range'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'MWO: <b>{point.y:1f}</b>'
            },
            series: [{
                name: 'Population',
                colors: [
                    '#9b20d9', '#9215ac', '#861ec9', '#7a17e6', '#7010f9', '#691af3',
                    '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf',
                    '#3667c9', '#2f72c3', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                    '#03c69b',  '#00f194', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                    '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf','#4c46db',
                ],
                colorByPoint: true,
                groupPadding: 0,
                data: [
                    ['AC Fitt', {{$recomList[0]}}],
                    ['E&I Fitt', {{$recomList[3]}}],
                    ['Armt Fitt', {{$recomList[6]}}],
                    ['LSEW', {{$recomList[9]}}],
                    ['Photo ', {{$recomList[12]}}],
                    ['Redio Fitt', {{$recomList[15]}}],
                    ['Gen Engg', {{$recomList[18]}}],
                    ['MTF', {{$recomList[21]}}],
                    ['MTO', {{$recomList[24]}}],
                    ['GS', {{$recomList[27]}}],
                    ['Rad Optr', {{$recomList[30]}}],
                    ['ATCA', {{$recomList[33]}}],
                    ['Met Asst', {{$recomList[36]}}],
                    ['Med Asst', {{$recomList[39]}}],
                    ['Log Asst', {{$recomList[42]}}],
                    ['Sec Asst (GD)', {{$recomList[45]}}],
                    ['Admin Asst', {{$recomList[48]}}],
                    ['Cat Asst', {{$recomList[51]}}],
                    ['Sec Asst (A)', {{$recomList[54]}}],
                    ['PF&DI', {{$recomList[57]}}],
                    ['Music', {{$recomList[60]}}],
                    ['GC', {{$recomList[63]}}],
                    ['Provost', {{$recomList[66]}}],
                    ['Cy Asst', {{$recomList[69]}}],
                    ['Edn Instr', {{$recomList[71]}}],
                    ['Flt Engr', {{$recomList[73]}}],
                    ['LM ', {{$recomList[76]}}],
                    ['AG', {{$recomList[79]}}],
                    ['Air Crew', {{$recomList[82]}}],
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
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
       Highcharts.chart('SWO-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Rank: SWO'
            },
            subtitle: {
                text: 'Source: PB-24'
            },
            xAxis: {
                type: 'category',
                labels: {
                    autoRotation: [-45, -90],
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total Range'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'MWO: <b>{point.y:1f}</b>'
            },
            series: [{
                name: 'Population',
                colors: [
                    '#9b20d9', '#9215ac', '#861ec9', '#7a17e6', '#7010f9', '#691af3',
                    '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf',
                    '#3667c9', '#2f72c3', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                    '#03c69b',  '#00f194', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                    '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf','#4c46db',
                ],
                colorByPoint: true,
                groupPadding: 0,
                data: [
                    ['AC Fitt', {{$recomList[1]}}],
                    ['E&I Fitt', {{$recomList[4]}}],
                    ['Armt Fitt', {{$recomList[7]}}],
                    ['LSEW', {{$recomList[10]}}],
                    ['Photo ', {{$recomList[13]}}],
                    ['Redio Fitt', {{$recomList[16]}}],
                    ['Gen Engg', {{$recomList[19]}}],
                    ['MTF', {{$recomList[22]}}],
                    ['MTO', {{$recomList[25]}}],
                    ['GS', {{$recomList[28]}}],
                    ['Rad Optr', {{$recomList[31]}}],
                    ['ATCA', {{$recomList[34]}}],
                    ['Met Asst', {{$recomList[37]}}],
                    ['Med Asst', {{$recomList[40]}}],
                    ['Log Asst', {{$recomList[43]}}],
                    ['Sec Asst (GD)', {{$recomList[46]}}],
                    ['Admin Asst', {{$recomList[49]}}],
                    ['Cat Asst', {{$recomList[52]}}],
                    ['Sec Asst (A)', {{$recomList[55]}}],
                    ['PF&DI', {{$recomList[58]}}],
                    ['Music', {{$recomList[61]}}],
                    ['GC', {{$recomList[64]}}],
                    ['Provost', {{$recomList[67]}}],
                    ['Cy Asst', {{$recomList[70]}}],
                    ['Edn Instr', {{$recomList[72]}}],
                    ['Flt Engr', {{$recomList[74]}}],
                    ['LM ', {{$recomList[77]}}],
                    ['AG', {{$recomList[80]}}],
                    ['Air Crew', {{$recomList[83]}}],
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
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
       Highcharts.chart('WO-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Rank: WO'
            },
            subtitle: {
                text: 'Source: PB-24'
            },
            xAxis: {
                type: 'category',
                labels: {
                    autoRotation: [-45, -90],
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total Range'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'MWO: <b>{point.y:1f}</b>'
            },
            series: [{
                name: 'Population',
                colors: [
                    '#9b20d9', '#9215ac', '#861ec9', '#7a17e6', '#7010f9', '#691af3',
                    '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf',
                    '#3667c9', '#2f72c3', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                    '#03c69b',  '#00f194', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                    '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf','#4c46db',
                ],
                colorByPoint: true,
                groupPadding: 0,
                data: [
                    ['AC Fitt', {{$recomList[2]}}],
                    ['E&I Fitt', {{$recomList[5]}}],
                    ['Armt Fitt', {{$recomList[8]}}],
                    ['LSEW', {{$recomList[11]}}],
                    ['Photo ', {{$recomList[14]}}],
                    ['Redio Fitt', {{$recomList[17]}}],
                    ['Gen Engg', {{$recomList[20]}}],
                    ['MTF', {{$recomList[23]}}],
                    ['MTO', {{$recomList[26]}}],
                    ['GS', {{$recomList[29]}}],
                    ['Rad Optr', {{$recomList[32]}}],
                    ['ATCA', {{$recomList[35]}}],
                    ['Met Asst', {{$recomList[38]}}],
                    ['Med Asst', {{$recomList[41]}}],
                    ['Log Asst', {{$recomList[44]}}],
                    ['Sec Asst (GD)', {{$recomList[47]}}],
                    ['Admin Asst', {{$recomList[50]}}],
                    ['Cat Asst', {{$recomList[53]}}],
                    ['Sec Asst (A)', {{$recomList[56]}}],
                    ['PF&DI', {{$recomList[59]}}],
                    ['Music', {{$recomList[62]}}],
                    ['GC', {{$recomList[65]}}],
                    ['Provost', {{$recomList[68]}}],
                    ['Cy Asst', ,],
                    ['Edn Instr', ],
                    ['Flt Engr', {{$recomList[75]}}],
                    ['LM ', {{$recomList[78]}}],
                    ['AG', {{$recomList[81]}}],
                    ['Air Crew', {{$recomList[84]}}],
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
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

    </script>
@endpush
