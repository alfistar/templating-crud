<?php
include "koneksi.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa='$id'");

    if($hapus){
        echo "<script>
                alert('Data mahasiswa berhasil dihapus');
                window.location='data_mahasiswa.php';
              </script>";
    }else{
        echo "<script>
                alert('Data mahasiswa gagal dihapus');
                window.location='data_mahasiswa.php';
              </script>";
    }

}else{

    echo "<script>
            alert('ID tidak ditemukan');
            window.location='data_mahasiswa.php';
          </script>";

}
?>