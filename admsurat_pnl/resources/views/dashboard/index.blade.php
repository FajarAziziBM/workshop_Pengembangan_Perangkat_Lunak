@extends('dashboard.layouts.main')
@section('page-heading', 'Dashboard')

@section('content')
    <div class="row d-flex justify-content-between mt-4">
        <div class="col">
            <p id="tgl" class=" mb-0 fs-4 fw-medium"></p>
        </div>
        <div class="col ms-auto">
            <p id="waktu" class=" fs-4 float-end fw-medium"></p>
        </div>
    </div>


    <div class="row mb-5">
        <div class="col-sm-6 col-md-12 col-xl-9 mb-3 mb-xl-0">
            <div class="card">
                <div class="card-body">
                    <div class="row flex-col row-cols-1">
                        <div class="col mb-3">
                            <h3 class="fw-semibold">Grafik Surat</h3>
                        </div>
                        <div class="col">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-12 col-xl-3">
            <div class="row row-cols-1 gap-3 flex-col">
                <div class="col">
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Surat Ket. Aktif Kuliah</h4>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h5 class="fw-bold h3">1</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Surat Ket. Cuti</h4>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h5 class="fw-bold h3">2</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Surat Ket. Mengulang</h4>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h5 class="fw-bold h3">3</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-1 mb-13">
        <p>Download form permohonan surat di bawah ini untuk pengajuan pembuatan surat!</p>

        <button class="btn btn-primary" onclick="location.href='{{ url('downloadForm/Form Surat Keterangan Cuti.pdf') }}'"
            target="_blank">
            <i class="fa-solid fa-download pe-1"></i>
            Form Surat Ket. Cuti
        </button>

        <button class="btn btn-primary ms-3"
            onclick="location.href='{{ url('downloadForm/Form Surat Keterangan Aktif Kuliah.pdf') }}'" target="_blank"><i
                class="fa-solid fa-download pe-1"></i>
            Form Surat Ket. Aktif Kuliah
        </button>

        <button class="btn btn-primary ms-3"
            onclick="location.href='{{ url('downloadForm/Form Surat Keterangan Mengulang.pdf') }}'" target="_blank">
            <i class="fa-solid fa-download pe-1"></i>
            Form Surat Ket. Mengulang
        </button>
    </div>

    <script>
        const zeroFill = n => {
            return ('0' + n).slice(-2);
        }

        // Creates interval
        const interval = setInterval(() => {
            // Get current time
            const now = new Date();

            // Format date as in mm/dd/aaaa hh:ii:ss
            const dateTime = zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now
                .getSeconds());
            const date = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + now
                .getFullYear();
            // Display the date and time on the screen using div#date-time
            document.getElementById('waktu').innerHTML = dateTime;
            document.getElementById('tgl').innerHTML = date;
        }, 1000);


        const ctx = document.getElementById('myChart');
        var chart = document.getElementById('myChart').getContext('2d'),
            gradient = chart.createLinearGradient(0, 0, 0, 450);

        gradient.addColorStop(0, 'rgba(255, 0,0, 0.5)');
        gradient.addColorStop(0.5, 'rgba(255, 0, 0, 0.25)');
        gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Surat Ket. Aktif', 'Surat Ket. Cuti', 'Surat Ket. Mengulang'],
                datasets: [{
                    label: 'Bobot',
                    data: [40, 70, 23],
                    borderWidth: 1,
                    backgroundColor: gradient,
                    borderColor: 'rgba(255, 0, 0, 0.25)',
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        drawTick: true
                    }
                },
                elements: {
                    point: {
                        radius: 6,
                        hoverRadius: 6,
                        borderWidth: 0,
                    },
                    line: {
                        tension: 0.4
                    }
                }
            }
        });

        // function DataChart() {
        //     $.ajax({
        //         url: '/dashboard/home/DataChart',
        //         type: 'GET',
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         dataType: 'json',
        //         success: function(cm) {
        //             data.push(cm.)
        //             renderChart(cm, labels);
        //         },
        //         error: function(cm) {
        //             console.log(cm);
        //         }
        //     })
        // }
    </script>

@endsection
