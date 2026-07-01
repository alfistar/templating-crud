<?php
$title = "Input Mahasiswa";

include "koneksi.php";

if(isset($_POST['simpan'])){

    $nama = trim($_POST['nama_mahasiswa']);
    $npm  = trim($_POST['npm']);

    if($nama != "" && $npm != ""){

        $query = mysqli_query($koneksi,
        "INSERT INTO mahasiswa(npm,nama_mahasiswa)
        VALUES('$npm','$nama')");

        if($query){
            echo "<script>
                    window.location='data_mahasiswa.php';
                  </script>";
        }else{
            echo "<script>
                    alert('Gagal menyimpan data');
                  </script>";
        }

    }else{
        echo "<script>
                alert('Semua data harus diisi');
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
                <h3 class="mb-0">Input Data</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Input Mahasiswa</li>
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
                    <div class="card-title">Input Data Mahasiswa</div>
                  </div>
                  <form method="POST" class="needs-validation" novalidate>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-md-6">
                          <label for="nama_mahasiswa" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_mahasiswa" required/>
                          <div class="invalid-feedback">Nama mahasiswa wajib diisi.</div>
                        </div>
                        <div class="col-md-6">
                          <label for="npm" class="form-label">NPM</label>
                          <input type="text" class="form-control" name="npm" required/>
                          <div class="invalid-feedback">NPM wajib diisi.</div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-info" type="submit" name="simpan">Simpan Data</button>
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