<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <body>
    <center><header>
            <h1>Aplikasi Perpustakaan</h1>
        </header>

        <h4>Menu</h4>
        <nav>
            <?php if (isset($_GET['status'])) : ?>
                <p>
                    <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "Data berhasil di tambahkan!";
                    } else {
                        echo "Penambahan data gagal!";
                    }
                    ?>
                </p>
            <?php endif; ?>
            <ul>
            <a href="tambah_data.php" type="button" class="btn btn-success">Tambah data</a>
            <a href="list_data.php" type="button" class="btn btn-success">List data</a>
            </ul>
        </nav>
        </center>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>