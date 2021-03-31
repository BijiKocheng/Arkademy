<?php 

    require "functions.php";

    if (isset($_POST['submit'])) {
        if (tambahProduk() > 0) {
            echo "<script>
                alert('Data produk berhasil di tambahkan');
                window.location.href='index.php';
            </script>";
        }else{
            echo "<script>
                alert('Data produk gagak di tambahkan');
                window.location.href='tambah.php';
            </script>";
        }
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
<title>Arkademy | Tambah Produk</title>
</head>
<body>
    <div class="container p-3">
        <h2>Tambah Produk</h2>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama produk</label>
                        <input id="nama" class="form-control" required autofocus autocomplete="off" placeholder="Masukan nama produk" type="text" name="nama_produk">
                    </div>
                    <div class="form-group">
                        <label for="ket">Keterangan produk</label>
                        <textarea class="form-control" id="ket" required name="keterangan" placeholder="Masukan keterangan produk" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="harga">Haga produk</label>
                        <input id="harga" class="form-control" required  autocomplete="off" placeholder="Masukan harga produk IDR" type="number" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah produk</label>
                        <input id="jumlah" class="form-control" required  autocomplete="off" placeholder="Masukan jumlah produk" type="number" name="jumlah">
                    </div>
                    <input type="submit" value="Tambahkan" name="submit" class="btn btn-primary">
                    <a href="index.php" class="btn btn-danger">Kembali</a> 
                </form>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>