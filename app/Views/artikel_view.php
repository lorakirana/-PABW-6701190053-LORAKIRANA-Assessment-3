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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <div class="container">
        <h3>List Artikel</h3>
        <a href="/home/create" class="btn btn-primary mb-3">Tambah Data Artikel</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Artikel</th>
                    <th>Judul Artikel</th>
                    <th>Penulis</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artikel as $row) : ?>
                    <tr>
                        <td><?= $row['id_artikel']; ?></td>
                        <td><?= $row['judul_artikel']; ?></td>
                        <td><?= $row['penulis']; ?></td>
                        <td><?= $row['Deskripsi']; ?></td>
                        <td>
                            <a href="/home/edit/<?= $row['id_artikel']; ?>" class="btn btn-sm btn-success mb-2">Edit</a>
                            <a href="/home/delete/<?= $row['id_artikel']; ?>" class="btn btn-sm btn-danger mb-2">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <!-- Modal Add Artikel-->
    <!-- <form action="/artikel/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Artikel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>ID Artikel</label>
                            <input type="int" class="form-control" name="id_artikel" placeholder="ID Artikel">
                        </div>

                        <div class="form-group">
                            <label>Judul Artikel</label>
                            <input type="text" class="form-control" name="judul_artikel" placeholder="Judul Artikel">
                        </div>

                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" name="penulis" placeholder="Penulis">
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="Deskripsi" placeholder="Deskripsi">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form> -->
    <!-- End Modal Add Artikel-->

    <!-- Modal Edit Artikel-->
    <!-- <form action="/product/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Artikel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>ID Artikel</label>
                            <input type="int" class="form-control" name="id_artikel" placeholder="ID Artikel">
                        </div>

                        <div class="form-group">
                            <label>Judul Artikel</label>
                            <input type="text" class="form-control" name="judul_artikel" placeholder="Judul Artikel">
                        </div>

                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" name="penulis" placeholder="Penulis">
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="Deskripsi" placeholder="Deskripsi">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_artikel" class="id_artikel">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form> -->
    <!-- End Modal Edit Artikel-->

    <!-- Modal Delete Artikel-->
    <!-- <form action="/artikel/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Artikel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <h4>Apakah anda yakin ingin menghapus Artikel?</h4>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_artikel" class="id_artikel">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form> -->
    <!-- End Modal Delete Artikel-->

    <!-- <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {

            // get Edit Artikel
            $('.btn-edit').on('click', function() {
                // get data from button edit
                const id = $(this).data('id');
                const judul = $(this).data('judul');
                const penulis = $(this).data('penulis');
                const deskripsi = $(this).data('deskripsi');
                // Set data to Form Edit
                $('.artikel_id').val(id);
                $('.artikel_judul').val(judul);
                $('.artikel_penulis').val(penulis);
                $('.artikel_deskripsi').val(deskripsi);
                // Call Modal Edit
                $('#editModal').modal('show');
            });

            // get Delete Product
            $('.btn-delete').on('click', function() {
                // get data from button edit
                const id = $(this).data('id');
                // Set data to Form Edit
                $('.ArtikelID').val(id);
                // Call Modal Edit
                $('#deleteModal').modal('show');
            });

        });
    </script> -->
</body>

</html>