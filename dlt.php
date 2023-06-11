<?php
session_start();
 
if(empty($_SESSION)){
    header("Location:in.php");
}
if($_SESSION['level'] != 'admin'){
    header("Location:index.php");
}

require 'functions.php';

$id_pinjam  = $_GET["id_pinjam"];

$sql = "DELETE siswa, peminjaman, data_laptop
        FROM siswa
        INNER JOIN peminjaman ON peminjaman.id_pinjam = siswa.id_siswa
        INNER JOIN data_laptop ON peminjaman.id_pinjam = data_laptop.id_laptop
        WHERE peminjaman.id_pinjam = $id_pinjam";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Data berhasil dihapus";
} else {
    echo "Data gagal dihapus";
}

mysqli_close($conn);
?>

?>