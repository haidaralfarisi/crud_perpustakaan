<!DOCTYPE html>
<html>

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
                            <h3>Penambahan data</h3>
                        </header>
                        <form action="proses_tambah.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
                                <input type="text" name="kode_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
                                <input type="text" name="nama_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" value="Tambah" name="tambah" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>