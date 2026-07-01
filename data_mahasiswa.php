<?php
$title = "Data Mahasiswa";

include "template/header.php";
include "template/sidebar.php";
include "koneksi.php";

$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$no = 1;
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
                <h3 class="mb-0">Data</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
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
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Data Mahasiswa</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NAMA</th>
                          <th>NPM</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($data = mysqli_fetch_assoc($mahasiswa)){ ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_mahasiswa']; ?></td>
                            <td><?= $data['npm']; ?></td>
                            <td>
                                <a href="edit_mahasiswa.php?id=<?= $data['id_mahasiswa']; ?>"
                                  class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <a href="hapus_mahasiswa.php?id=<?= $data['id_mahasiswa']; ?>"
                                  class="btn btn-danger btn-sm"
                                  onclick="return confirm('Yakin ingin menghapus data?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item">
                        <a class="page-link" href="#">&laquo;</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">&raquo;</a>
                      </li>
                    </ul>
                  </div>
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