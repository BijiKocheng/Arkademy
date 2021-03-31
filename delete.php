<?php 

    require "functions.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (hapusProduk($id) > 0 ) {
            echo "<script>
                alert('Data produk berhasil di hapus');
                window.location.href='index.php';
            </script>";
        }else {
            echo "<script>
                alert('Data produk gagal di hapus');
                window.location.href='index.php';
            </script>";
        }
    }else {
        header("location: index.php");
    }



?>