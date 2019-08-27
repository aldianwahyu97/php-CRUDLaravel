<html>
    <head>
        <title>Belajar CRUD dengan Laravel</title>
    </head>

    <body>
        <h3>Data Pegawai</h3>
        <a href="/pegawai">Kembali</a>

        <hr>
        <hr>

        @foreach($pegawai as $p)

        <form action="/pegawai/update" method = "post">
        {{ csrf_field() }}
            <table border="1">
                <input type="hidden" name="id" value="{{$p->pegawai_id}}">
                <tr>
                    <td>Nama: </td>
                    <td><input type="text" name="nama" value="{{$p->pegawai_nama}}"></td>
                </tr>
                <tr>
                    <td>Umur: </td>
                    <td><input type="text" name="umur" value="{{$p->pegawai_umur}}"></td>
                </tr>
                <tr>
                    <td>Jabatan: </td>
                    <td><input type="text" name="jabatan" value="{{$p->pegawai_jabatan}}"></td>
                </tr>
                <tr>
                    <td>Alamat: </td>
                    <td><input type="text" name="alamat" value="{{$p->pegawai_alamat}}"></td>
                </tr>
            </table>
        <input type="submit" value="Simpan">
        </form>
        @endforeach
    </body>
</html>