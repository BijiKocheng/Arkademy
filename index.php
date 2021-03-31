<?php 

    require "functions.php";

    

    if (isset($_POST['cari'])) {
        $data = cariProduk($_POST['keyword']);
    }else {
        $data = listProduk();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Arkademy | List Produk</title>
</head>
<body>

    <div class="container p-3">
        <div class="row">
            <div class="col">
                <h1>List data produk</h1>
                <div class="row justify-content-between mb-3 mt-3">
                    <div class="col pl-5">
                        <a href="tambah.php" class="btn btn-success">Tambah Produk</a>
                    </div>
                    <div class="col-md-4">
                        <form action="" method="post" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" name="keyword" autofocus autocomplete="off" placeholder="Cari nama produk" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" name="cari" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <table class="table text-center table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Harga</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($data as $data) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $data['nama_produk']; ?></td>
                            <td><?= $data['keterangan']; ?></td>
                            <td><?= $data['harga']; ?></td>
                            <td><?= $data['jumlah']; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $data['id_produk']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?id=<?= $data['id_produk']; ?>" onclick="return confirm('Yakin ingin menghapus data produk ini?')" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col card pt-2">
                        <p>Total Produk : <?= totalProduk(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>