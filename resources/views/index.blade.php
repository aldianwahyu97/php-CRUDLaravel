<html>
    <head>
        <title>Belajar CRUD dengan Laravel</title>
    </head>

    <body>
        <h3>Data Pegawai</h3>
        <a href="/pegawai/tambah">+ Tambah Data</a>

        <table border="1">
            <thead>
                <tr>
                    <td> <b> ID </b> </td>
                    <td> <b> Nama </b> </td>
                    <td> <b> Jabatan </b> </td>
                    <td> <b> Umur </b> </td>
                    <td> <b> Alamat </b> </td>
                    <td> <b> Aksi </b> </td>
                </tr>
            </thead>
            @foreach($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_id }}</td>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td><a href="/pegawai/edit/{{$p->pegawai_id}}">EDIT</a>
                        <a href="/pegawai/delete/{{$p->pegawai_id}}">HAPUS</a></td>
                </tr>
            @endforeach
        </table>
    </body>
</html>