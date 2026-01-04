<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h5 class="mb-0 text-capitalize font-weight-bold">
                                    <span id="pbpers"></span>
                                </h5>
                                <p class="mb-0 text-sm">PB Persons</p>
                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                <img class="w-100 " src="{{ asset('images/icon.svg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h5 class="mb-0 text-capitalize font-weight-bold">
                                    <span id="pbrecom"></span>
                                </h5>
                                <p class="mb-0 text-sm">PB Recom Persons</p>
                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                <img class="w-100 " src="{{ asset('images/icon.svg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h5 class="mb-0 text-capitalize font-weight-bold">
                                    <span id="users"></span>
                                </h5>
                                <p class="mb-0 text-sm">Users</p>
                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                <img class="w-100 " src="{{ asset('images/icon.svg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <h5>Trade Wise Recom Chart</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <figure class="highcharts-figure">
                                <div id="container"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <figure class="highcharts-figure">
                                <div id="tech-b"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <figure class="highcharts-figure">
                                <div id="non-tech"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <figure class="highcharts-figure">
                                <div id="air-crw"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <h5>Rank Wise Recom Chart</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Rank wise --}}
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <figure class="highcharts-figure">
                                <div id="container_rank"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <figure class="highcharts-figure">
                                <div id="SWO-chart"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
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
<script>
    getList();
    async function getList() {
        showLoader();
        let res = await axios.get("/summary");
        console.log(res);
        document.getElementById('pbpers').innerText = res.data['pbpers']
        document.getElementById('pbrecom').innerText = res.data['pbrecom']
        document.getElementById('users').innerText = res.data['users']



        hideLoader();
    }
</script>
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
            text: 'PB-{{$pb_setting->year}}',
            align: 'Center'
        },
        xAxis: {
            categories: ['AC Fitt', 'E&I Fitt', 'Armt Fitt', 'LSEW', 'Photo', 'Radio Fitt', 'Gen Engg'],
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
                data: [{{ $recomList[0] }}, {{ $recomList[3] }}, {{ $recomList[6] }}, {{ $recomList[9] }},
                    {{ $recomList[12] }}, {{ $recomList[15] }},{{ $recomList[18] }}
                ]
            },
            {
                name: 'SWO',
                data: [{{ $recomList[1] }}, {{ $recomList[4] }}, {{ $recomList[7] }},
                    {{ $recomList[10] }}, {{ $recomList[13] }}, {{ $recomList[16] }}, {{ $recomList[19] }}
                ]
            },
            {
                name: 'WO',
                data: [{{ $recomList[20] }}, {{ $recomList[2] }}, {{ $recomList[5] }}, {{ $recomList[8] }},
                    {{ $recomList[11] }}, {{ $recomList[14] }}, {{ $recomList[17] }}
                ]
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
            text: 'PB-{{$pb_setting->year}}',
            align: 'Center'
        },
        xAxis: {
            categories: ['GS', 'MTF', 'MTO', 'Rad Optr', 'ATCA', 'Met Asst', 'Med Asst',
                'Log Asst'
            ],
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
                data: [{{ $recomList[27] }}, {{ $recomList[21] }}, {{ $recomList[24] }},
                    {{ $recomList[30] }}, {{ $recomList[33] }},
                    {{ $recomList[36] }}, {{ $recomList[39] }}, {{ $recomList[42] }}
                ]
            },
            {
                name: 'SWO',
                data: [{{ $recomList[28] }}, {{ $recomList[22] }}, {{ $recomList[25] }},
                    {{ $recomList[31] }}, {{ $recomList[34] }},
                    {{ $recomList[37] }}, {{ $recomList[40] }}, {{ $recomList[43] }}
                ]
            },
            {
                name: 'WO',
                data: [{{ $recomList[29] }}, {{ $recomList[23] }}, {{ $recomList[26] }},
                    {{ $recomList[32] }}, {{ $recomList[35] }},
                    {{ $recomList[38] }}, {{ $recomList[41] }}, {{ $recomList[44] }}
                ]
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
            text: 'PB-{{$pb_setting->year}}',
            align: 'Center'
        },
        xAxis: {
            categories: ['Sec Asst (GD)', 'Admin Asst', 'Cat Asst', 'Sec Asst (A)', 'PF&DI', 'Music', 'GC',
                'Provost', 'Cy Asst', 'Edn Instr'
            ],
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
                data: [{{ $recomList[45] }}, {{ $recomList[48] }}, {{ $recomList[51] }},
                    {{ $recomList[54] }}, {{ $recomList[57] }}, {{ $recomList[60] }},
                    {{ $recomList[63] }}, {{ $recomList[66] }}, {{ $recomList[69] }},
                    {{ $recomList[71] }}
                ]
            },
            {
                name: 'SWO',
                data: [{{ $recomList[46] }}, {{ $recomList[49] }}, {{ $recomList[52] }},
                    {{ $recomList[55] }}, {{ $recomList[58] }}, {{ $recomList[61] }},
                    {{ $recomList[64] }}, {{ $recomList[67] }}, {{ $recomList[70] }},
                    {{ $recomList[72] }}
                ]
            },
            {
                name: 'WO',
                data: [{{ $recomList[47] }}, {{ $recomList[50] }}, {{ $recomList[53] }},
                    {{ $recomList[56] }}, {{ $recomList[59] }}, {{ $recomList[62] }},
                    {{ $recomList[65] }}, {{ $recomList[68] }}, ,
                ]
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
            text: 'PB-{{$pb_setting->year}}',
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
                data: [{{ $recomList[73] }}, {{ $recomList[76] }}, {{ $recomList[79] }},
                    {{ $recomList[82] }}
                ]
            },
            {
                name: 'SWO',
                data: [{{ $recomList[74] }}, {{ $recomList[77] }}, {{ $recomList[80] }},
                    {{ $recomList[83] }}
                ]
            },
            {
                name: 'WO',
                data: [{{ $recomList[75] }}, {{ $recomList[78] }}, {{ $recomList[81] }},
                    {{ $recomList[84] }}
                ]
            }

        ]


    });
</script>

<script>
    $(document).ready(function() {
        $("#target").on("click", function() {
            alert("Handler for `click` called.");
        });
    })
</script>
<script>
    Highcharts.chart('container_rank', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Rank: MWO'
        },
        subtitle: {
            text: 'Source: PB-{{$pb_setting->year}}'
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
                '#03c69b', '#00f194', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf', '#4c46db',
            ],
            colorByPoint: true,
            groupPadding: 0,
            data: [
                ['AC Fitt', {{ $recomList[0] }}],
                ['E&I Fitt', {{ $recomList[3] }}],
                ['Armt Fitt', {{ $recomList[6] }}],
                ['LSEW', {{ $recomList[9] }}],
                ['Photo ', {{ $recomList[12] }}],
                ['Redio Fitt', {{ $recomList[15] }}],
                ['Gen Engg', {{ $recomList[18] }}],
                ['GS', {{ $recomList[27] }}],
                ['MTF', {{ $recomList[21] }}],
                ['MTO', {{ $recomList[24] }}],
                ['Rad Optr', {{ $recomList[30] }}],
                ['ATCA', {{ $recomList[33] }}],
                ['Met Asst', {{ $recomList[36] }}],
                ['Med Asst', {{ $recomList[39] }}],
                ['Log Asst', {{ $recomList[42] }}],
                ['Sec Asst (GD)', {{ $recomList[45] }}],
                ['Admin Asst', {{ $recomList[48] }}],
                ['Cat Asst', {{ $recomList[51] }}],
                ['Sec Asst (A)', {{ $recomList[54] }}],
                ['PF&DI', {{ $recomList[57] }}],
                ['Music', {{ $recomList[60] }}],
                ['GC', {{ $recomList[63] }}],
                ['Provost', {{ $recomList[66] }}],
                ['Cy Asst', {{ $recomList[69] }}],
                ['Edn Instr', {{ $recomList[71] }}],
                ['Flt Engr', {{ $recomList[73] }}],
                ['LM ', {{ $recomList[76] }}],
                ['AG', {{ $recomList[79] }}],
                ['Air Crew', {{ $recomList[82] }}],
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
            text: 'Source: PB-{{$pb_setting->year}}'
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
                '#03c69b', '#00f194', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf', '#4c46db',
            ],
            colorByPoint: true,
            groupPadding: 0,
            data: [
                ['AC Fitt', {{ $recomList[1] }}],
                ['E&I Fitt', {{ $recomList[4] }}],
                ['Armt Fitt', {{ $recomList[7] }}],
                ['LSEW', {{ $recomList[10] }}],
                ['Photo ', {{ $recomList[13] }}],
                ['Redio Fitt', {{ $recomList[16] }}],
                ['Gen Engg', {{ $recomList[19] }}],
                ['GS', {{ $recomList[28] }}],
                ['MTF', {{ $recomList[22] }}],
                ['MTO', {{ $recomList[25] }}],
                ['Rad Optr', {{ $recomList[31] }}],
                ['ATCA', {{ $recomList[34] }}],
                ['Met Asst', {{ $recomList[37] }}],
                ['Med Asst', {{ $recomList[40] }}],
                ['Log Asst', {{ $recomList[43] }}],
                ['Sec Asst (GD)', {{ $recomList[46] }}],
                ['Admin Asst', {{ $recomList[49] }}],
                ['Cat Asst', {{ $recomList[52] }}],
                ['Sec Asst (A)', {{ $recomList[55] }}],
                ['PF&DI', {{ $recomList[58] }}],
                ['Music', {{ $recomList[61] }}],
                ['GC', {{ $recomList[64] }}],
                ['Provost', {{ $recomList[67] }}],
                ['Cy Asst', {{ $recomList[70] }}],
                ['Edn Instr', {{ $recomList[72] }}],
                ['Flt Engr', {{ $recomList[74] }}],
                ['LM ', {{ $recomList[77] }}],
                ['AG', {{ $recomList[80] }}],
                ['Air Crew', {{ $recomList[83] }}],
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
            text: 'Source: PB-{{$pb_setting->year}}'
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
            pointFormat: 'WO: <b>{point.y:1f}</b>'
        },
        series: [{
            name: 'Population',
            colors: [
                '#9b20d9', '#9215ac', '#861ec9', '#7a17e6', '#7010f9', '#691af3',
                '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf',
                '#3667c9', '#2f72c3', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                '#03c69b', '#00f194', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf', '#4c46db',
            ],
            colorByPoint: true,
            groupPadding: 0,
            data: [
                ['AC Fitt', {{ $recomList[2] }}],
                ['E&I Fitt', {{ $recomList[5] }}],
                ['Armt Fitt', {{ $recomList[8] }}],
                ['LSEW', {{ $recomList[11] }}],
                ['Photo ', {{ $recomList[14] }}],
                ['Redio Fitt', {{ $recomList[17] }}],
                ['Gen Engg', {{ $recomList[20] }}],
                ['GS', {{ $recomList[29] }}],
                ['MTF', {{ $recomList[23] }}],
                ['MTO', {{ $recomList[26] }}],
                ['Rad Optr', {{ $recomList[32] }}],
                ['ATCA', {{ $recomList[35] }}],
                ['Met Asst', {{ $recomList[38] }}],
                ['Med Asst', {{ $recomList[41] }}],
                ['Log Asst', {{ $recomList[44] }}],
                ['Sec Asst (GD)', {{ $recomList[47] }}],
                ['Admin Asst', {{ $recomList[50] }}],
                ['Cat Asst', {{ $recomList[53] }}],
                ['Sec Asst (A)', {{ $recomList[56] }}],
                ['PF&DI', {{ $recomList[59] }}],
                ['Music', {{ $recomList[62] }}],
                ['GC', {{ $recomList[65] }}],
                ['Provost', {{ $recomList[68] }}],
                ['Cy Asst', , ],
                ['Edn Instr', ],
                ['Flt Engr', {{ $recomList[75] }}],
                ['LM ', {{ $recomList[78] }}],
                ['AG', {{ $recomList[81] }}],
                ['Air Crew', {{ $recomList[84] }}],
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
