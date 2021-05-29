<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Siswa</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x:auto;">
    <table>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>SEMESTER</th>
                <th>KETERANGAN</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($mahasiswa0006 as $siswa)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$siswa->nis}}</td>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->id_kelas}}</td>
                <td>{{$siswa->id_semester}}</td>
                <td>{{$siswa->absen}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>