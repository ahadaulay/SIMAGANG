@extends('Layout.master')

@section('content')

<h4 class="mb-3">SELAMAT DATANG PADA WEBSITE PENDATAAN ANAK MAGANG</h4>

<div class="row">
    <div class="col-3 mb-4">
        <a href="/peserta/durasi/1/31">
            <div class="card text-white bg-primary mt-3">
                <div class="card-body">
                    <h5 class="card-title text-white"> Durasi (1 bulan)</h5>
                    <p class="card-text">{{$jumlahPesertaDurasi30}} Orang</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-3 mb-4">
        <a href="/peserta/durasi/31/62">
        <div class="card text-white bg-success mt-3">
            <div class="card-body">
                <h5 class="card-title text-white">Durasi (2 bulan)</h5>
                <p class="card-text">{{$jumlahPesertaDurasi60}} Orang</p>
            </div>
        </div>
        </a>
    </div>

    <div class="col-3 mb-4">
        <a href="/peserta/durasi/62/93">
        <div class="card text-white bg-warning mt-3">
            <div class="card-body">
                <h5 class="card-title text-white">Durasi (3 bulan)</h5>
                <p class="card-text">{{$jumlahPesertaDurasi90}} Orang</p>
            </div>
        </div>
        </a>
    </div>

    <div class="col-3 mb-4">
        <a href="/peserta/durasi/93/124">
        <div class="card text-white bg-danger mt-3">
            <div class="card-body">
                <h5 class="card-title text-white">Durasi (4 bulan)</h5>
                <p class="card-text">{{$jumlahPesertaDurasi120}} Orang</p>
            </div>
        </div>
        </a>
    </div>
</div>

<div class="card p-3 bg-white mt-3 mb-3">
    <div class="row">
        <div class="col-12 mr-3">
            <div>
                <h4>FUNGSI</h4>
                <canvas id="fungsiDoughnutChart"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="card p-3 bg-white mt-3 mb-3">
    <div class="row">
        <div class="col-6 ml-4">
            <div>
                <h4>INSTANSI</h4>
                <canvas id="instansiPieChart"></canvas>
            </div>
        </div>

        <div class="col-6 ml-4">
            <div>
                <h4>DURASI</h4>
                <canvas id="durasiBarChart"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card mb-3">
            <div class="card-header bg-info">
                <h4 class="card-title text-white ">Fungsi</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <a href="/generate-fungsi">
                        <button type="button" class="btn btn-success m-3 ml-3" >Export</button>
                      </a>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Fungsi</th>
                                <th>Jumlah Peserta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp

                            @foreach ($dataFungsiDanJumlahPeserta as $data)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->jumlah_peserta }} Orang</td>
                                </tr>
                                @php
                                $no++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3" id="table-hover-row">
    <div class="col-12 mb-3">
        <div class="card">
            <div class="card-header bg-dark">
                <h4 class="card-title text-white ">Asal Instansi</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <a href="/generate-asal">
                        <button type="button" class="btn btn-success m-3 ml-3" >Export</button>
                      </a>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Asal Instansi</th>
                                <th>Jumlah Peserta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp

                            @foreach ($dataAsalInstansiDanJumlahPeserta as $data)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->jumlah_peserta }} Orang</td>
                                </tr>
                                @php
                                $no++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('fungsiDoughnutChart').getContext('2d');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($fungsiLabels) !!},
            datasets: [{
                label: 'FUNGSI',
                data: {!! json_encode($fungsiCounts) !!},
                backgroundColor: [
                    'rgba(135, 206, 235, 1)', // Warna biru lembut
    'rgba(255, 235, 205, 1)', // Warna peach lembut
    'rgba(221, 160, 221, 1)', // Warna ungu lembut
    'rgba(152, 251, 152, 1)', // Warna hijau lembut
    'rgba(240, 128, 128, 1)', // Warna merah lembut
    'rgba(173, 216, 230, 1)'

                ],
                borderColor: [
                    'rgba(135, 206, 235, 1)', // Warna biru lembut
    'rgba(255, 235, 205, 1)', // Warna peach lembut
    'rgba(221, 160, 221, 1)', // Warna ungu lembut
    'rgba(152, 251, 152, 1)', // Warna hijau lembut
    'rgba(240, 128, 128, 1)', // Warna merah lembut
    'rgba(173, 216, 230, 1)'

                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<script>
    const ctxInstansi = document.getElementById('instansiPieChart').getContext('2d');

    new Chart(ctxInstansi, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($instansiLabels) !!},
            datasets: [{
                label: '# of Peserta',
                data: {!! json_encode($instansiCounts) !!},
                backgroundColor: [
                    'rgba(135, 206, 235, 1)', // Warna biru lembut
    'rgba(255, 235, 205, 1)', // Warna peach lembut
    'rgba(221, 160, 221, 1)', // Warna ungu lembut
    'rgba(152, 251, 152, 1)', // Warna hijau lembut
    'rgba(240, 128, 128, 1)', // Warna merah lembut
    'rgba(173, 216, 230, 1)'
                ],
                borderColor: [
                    'rgba(135, 206, 235, 1)', // Warna biru lembut
    'rgba(255, 235, 205, 1)', // Warna peach lembut
    'rgba(221, 160, 221, 1)', // Warna ungu lembut
    'rgba(152, 251, 152, 1)', // Warna hijau lembut
    'rgba(240, 128, 128, 1)', // Warna merah lembut
    'rgba(173, 216, 230, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<script>
    const ctxDurasi = document.getElementById('durasiBarChart').getContext('2d');

    new Chart(ctxDurasi, {
        type: 'pie',
        data: {
            labels: {!! json_encode($durasiLabels) !!},
            datasets: [{
                label: '# of Peserta',
                data: {!! json_encode($durasiCounts) !!},
                backgroundColor: [
                    'rgba(135, 206, 235, 1)', // Warna biru lembut
    'rgba(255, 235, 205, 1)', // Warna peach lembut
    'rgba(221, 160, 221, 1)', // Warna ungu lembut
    'rgba(152, 251, 152, 1)', // Warna hijau lembut
    'rgba(240, 128, 128, 1)', // Warna merah lembut
    'rgba(173, 216, 230, 1)'
                ],
                borderColor: [
                    'rgba(135, 206, 235, 1)', // Warna biru lembut
    'rgba(255, 235, 205, 1)', // Warna peach lembut
    'rgba(221, 160, 221, 1)', // Warna ungu lembut
    'rgba(152, 251, 152, 1)', // Warna hijau lembut
    'rgba(240, 128, 128, 1)', // Warna merah lembut
    'rgba(173, 216, 230, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection
