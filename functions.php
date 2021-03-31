<?php 

    $conn = mysqli_connect("localhost", "root", "", "arkademy");  

    function listProduk(){
        global $conn;

        $sql = "SELECT * FROM produk";
        $query = mysqli_query($conn, $sql);

        return $query;
        
    }

    function cariProduk($data){
        global $conn;

        $sql = "SELECT * FROM produk WHERE nama_produk LIKE '%$data%'";
        $query = mysqli_query($conn, $sql);

        return $query;

    }

    function totalProduk(){
        global $conn;

        $sql = "SELECT id_produk FROM produk";
        $query = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($query);
        return $num;
    }

    function tambahProduk(){
        global $conn;

        $nama = $_POST['nama_produk'];
        $keterangan = $_POST['keterangan'];
        $harga = "IDR " .$_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $sql = "INSERT INTO produk VAlUES('', '$nama', '$keterangan', '$harga', '$jumlah')";
        $query = mysqli_query($conn, $sql);

        return mysqli_affected_rows($conn);
    }

    function getDataProduk($id){
        global $conn;

        $sql = "SELECT * FROM produk WHERE id_produk = $id";
        $query = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($query);

        return $row;
    }

    function updateProduk($id){
        global $conn;

        $nama = $_POST['nama_produk'];
        $keterangan = $_POST['keterangan'];
        $harga = "IDR " .$_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $sql = "UPDATE produk SET id_produk=$id, nama_produk='$nama', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id_produk=$id";
        $query = mysqli_query($conn, $sql);

        return mysqli_affected_rows($conn);

    }

    function hapusProduk($id){
        global $conn;

        $sql = "DELETE FROM produk WHERE id_produk=$id";
        $query = mysqli_query($conn, $sql);

        return mysqli_affected_rows($conn);

    }

?>