<?php
$title = "Edit Dosen";

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM dosen WHERE id_dosen='$id'");
$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

    $nip  = $_POST['nip'];
    $nama = $_POST['nama_dosen'];

    $update = mysqli_query($koneksi, "UPDATE dosen SET
                    nip='$nip',
                    nama_dosen='$nama'
                    WHERE id_dosen='$id'");

    if($update){
        echo "<script>
                window.location='data_dosen.php';
              </script>";
    }else{
        echo "<script>
                alert('Data gagal ditambahkan');
              </script>";
    }

}

include "template/header.php";
include "template/sidebar.php";
?>

      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Edit Data</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Dosen</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-lg-12">
                <div class="card card-info card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Edit Data Dosen</div>
                  </div>
                  <form method="POST" class="needs-validation" novalidate>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-md-6">
                          <label for="nama_dosen" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_dosen" value="<?= $data['nama_dosen']; ?>" required/>
                          <div class="invalid-feedback">Nama dosen wajib diisi.</div>
                        </div>
                        <div class="col-md-6">
                          <label for="nip" class="form-label">NIP</label>
                          <input type="text" class="form-control" name="nip" value="<?= $data['nip']; ?>" required/>
                          <div class="invalid-feedback">NIP wajib diisi.</div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-warning" type="submit" name="update">Simpan Data</button>
                      <a href="data_dosen.php" class="btn btn-secondary"> Kembali </a>
                    </div>
                  </form>
                </div>
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->

<?php
include "template/footer.php";
?>