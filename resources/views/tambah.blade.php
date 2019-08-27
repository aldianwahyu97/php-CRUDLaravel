<html>
    <head>
        <title>Belajar CRUD dengan Laravel</title>
    </head>

    <body>
        <h3>Data Pegawai</h3>
        <a href="/pegawai">Kembali</a>

        <hr>
        <hr>

        <form action="/pegawai/store" method = "post">
        {{ csrf_field() }}
            <table border="1">
                <tr>
                    <td>Nama: </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Umur: </td>
                    <td><input type="text" name="umur"></td>
                </tr>
                <tr>
                    <td>Jabatan: </td>
                    <td><input type="text" name="jabatan"></td>
                </tr>
                <tr>
                    <td>Alamat: </td>
                    <td><input type="text" name="alamat"></td>
                </tr>
            </table>
        <input type="submit" value="Simpan">
        </form>
    </body>
</html>