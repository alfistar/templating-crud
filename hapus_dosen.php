<?php
include "koneksi.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $hapus = mysqli_query($koneksi, "DELETE FROM dosen WHERE id_dosen='$id'");

    if($hapus){
        echo "<script>
                alert('Data dosen berhasil dihapus');
                window.location='data_dosen.php';
              </script>";
    }else{
        echo "<script>
                alert('Data dosen gagal dihapus');
                window.location='data_dosen.php';
              </script>";
    }

}else{

    echo "<script>
            alert('ID tidak ditemukan');
            window.location='data_dosen.php';
          </script>";

}
?>