<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Biodata Peserta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 20px;
        }
        .content img {
            display: block;
            margin: 0 auto 20px;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        .content table {
            width: 100%;
            border-collapse: collapse;
        }
        .content table th, .content table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .content table th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Biodata Peserta</h1>
        </div>
        <div class="content">
            <center><img src="{{asset('storage/fotopeserta/'.$data->foto)}}" alt="Foto Peserta"></center>
            <table>
                <tr>
                    <th>Nama</th>
                    <td>{{ $data->nama }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $data->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $data->alamat }}</td>
                </tr>
                <tr>
                    <th>Asal Instansi</th>
                    <td>{{ $data->asalInstansi->nama }}</td>
                </tr>
                <tr>
                    <th>Fungsi</th>
                    <td>{{ $data->fungsi->nama }}</td>
                </tr>
                <tr>
                    <th>Tanggal Masuk</th>
                    <td>{{ $data->tanggal_masuk }}</td>
                </tr>
                <tr>
                    <th>Tanggal Keluar</th>
                    <td>{{ $data->tanggal_keluar }}</td>
                </tr>
                <tr>
                    <th>Durasi Magang</th>
                    <td>{{ $data->durasi }} hari</td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td>{{ $data->telepon }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $data->email }}</td>
                </tr>
            </table>
        </div>

    </div>
</body>
</html>
