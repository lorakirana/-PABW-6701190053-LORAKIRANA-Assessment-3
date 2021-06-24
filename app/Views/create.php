<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
</head>

<body style="background-color: #F7DAD9;">
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <div class="container">
        <h3>Form Tambah Artikel</h3>

        <form action="/home/save" method="post">
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="judul_artikel" class="col-sm-2 col-form-label">Judul Artikel</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="Masukkan Judul Artikel" autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penulis" name="stok" placeholder="Masukkan Nama Penulis">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Deskripsi" name="Deskripsi" placeholder="Masukkan Deskripsi Artikel">
                </div>
            </div>

            <button type="submit" class="btn btn-danger">Tambah Data Artikel</button>
        </form>

    </div>

</body>

</html>