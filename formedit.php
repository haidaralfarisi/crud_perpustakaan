<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list_data.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tb_perpustakaan WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Penambahan data | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Penambahan data perpustakaan</h3>
    </header>

    <form action="prosesedit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

        <p>
            <label for="kode_buku">Kode buku: </label>
            <input type="text" name="kode_buku" placeholder="Kode buku" value="<?php echo $data['kode_buku'] ?>" />
        </p>
        <p>
            <label for="nama_buku">Nama buku: </label>
            <textarea name="nama_buku"><?php echo $data['nama_buku'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>