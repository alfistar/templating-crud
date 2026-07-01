<?php
$title = "Edit mahasiswa";

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'");
$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

    $npm  = $_POST['npm'];
    $nama = $_POST['nama_mahasiswa'];

    $update = mysqli_query($koneksi, "UPDATE mahasiswa SET
                    npm='$npm',
                    nama_mahasiswa='$nama'
                    WHERE id_mahasiswa='$id'");

    if($update){
        echo "<script>
                window.location='data_mahasiswa.php';
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
                  <li class="breadcrumb-item active" aria-current="page">Edit Mahasiswa</li>
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
                    <div class="card-title">Edit Data Mahasiswa</div>
                  </div>
                  <form method="POST" class="needs-validation" novalidate>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-md-6">
                          <label for="nama_mahasiswa" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_mahasiswa" value="<?= $data['nama_mahasiswa']; ?>" required/>
                          <div class="invalid-feedback">Nama mahasiswa wajib diisi.</div>
                        </div>
                        <div class="col-md-6">
                          <label for="npm" class="form-label">NPM</label>
                          <input type="text" class="form-control" name="npm" value="<?= $data['npm']; ?>" required/>
                          <div class="invalid-feedback">NPM wajib diisi.</div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-warning" type="submit" name="update">Simpan Data</button>
                      <a href="data_mahasiswa.php" class="btn btn-secondary"> Kembali </a>
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