<?php include("koneksi.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <a href="index.php" type="button" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <header>
                            <h3>Data yang sudah ada</h3>
                        </header>

                        <nav>
                            <a href="tambah_data.php">[+] Tambah Baru</a>
                        </nav>

                        <br>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>kode_buku</th>
                                    <th>nama_buku</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT * FROM tb_perpustakaan";
                                $query = mysqli_query($db, $sql);

                                while ($buku = mysqli_fetch_array($query)) {
                                    echo "<tr>";

                                    echo "<td>" . $buku['kode_buku'] . "</td>";
                                    echo "<td>" . $buku['nama_buku'] . "</td>";


                                    echo "<td>";
                                    echo "<a href='formedit.php?id=" . $buku['id'] . "'>Edit</a> | ";
                                    echo "<a href='hapus.php?id=" . $buku['id'] . "'>Hapus</a>";
                                    echo "</td>";

                                    echo "</tr>";
                                }
                                ?>

                            </tbody>
                        </table>

                        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
                    </div>
                </div>
            </div>
        </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>


</html>