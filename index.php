<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h2>Simpan file ke dalam PHP</h2>
    <table>
        <form method="post" action="">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" style="width=300px"></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td><textarea name="data" style="width=300px"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="ok" value="Simpan"></td>
            </tr>
        </form>
    </table>

    <?php
if(isset($_POST['ok'])){
    if(empty($_POST['nama']) || empty($_POST['data'])) {
        print"Lengkapi form";
    }
       
    else{
        $nama=$_POST['nama'];
        $data=$_POST['data'];
        $tanggal=date("Y/m/d H:i:s");
        $buka=fopen("hasil.html", 'a');
        fwrite($buka, "nama : ${nama} <br> ");
        fwrite($buka, "dibuat : ${tanggal} <br> ");
        fwrite($buka, "isi : ${data} <br> ");
        fwrite($buka, "<hr>");
        fclose($buka);
        print"Data berhasil disimpan";
    }
}
?>
</body>
</html>