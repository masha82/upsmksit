<?php

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../index.php");
}

?>

<?php include '../layout/header.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://cdn.tiny.cloud/1/adzervpztsbosy207x3us80ycn3c6ic8n4i74l1lwrln5b20/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>



  <div class="container-fluid">
    <div class="row">

      <?php include '../layout/menu.php'; ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar" class="align-text-bottom"></span>
              This week
            </button>
          </div>
        </div>

        <h5>Selamat Datang, &nbsp;<?php echo $_SESSION['nama']; ?></h5>
   

        <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

        <!-- HITUNG JUMLAH DATA DI TABEL -->
        <?php
        include_once("../conf/config.php");

        // mengambil data barang
        $idaktif = $_SESSION['id'];
        $data_posts = mysqli_query($mysqli, "SELECT * FROM kelulusan");


        // menghitung data barang
        $datas = mysqli_num_rows($data_posts);



        ?>


        <!--Row-->
        <div class="row row-sm">
          <div class="col-sm-12 col-xl-12">




            <!--Row-->
            <div class="row row-sm">
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card custom-card">
                  <div class="card-body">
                    <div class="card-item">
                      <div class="card-item-icon card-icon">
                        <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
                          <g>
                            <rect height="14" opacity=".3" width="14" x="5" y="5" />
                            <g>
                              <rect fill="none" height="24" width="24" />
                              <g>
                                <path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z" />
                                <rect height="5" width="2" x="7" y="12" />
                                <rect height="10" width="2" x="15" y="7" />
                                <rect height="3" width="2" x="11" y="14" />
                                <rect height="2" width="2" x="11" y="10" />
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="card-item-title mb-2">
                        <label class="main-content-label tx-13 font-weight-bold mb-1">Data Peserta Didik</label>
                        <span class="d-block tx-12 mb-0 text-muted">Jumlah peserta didik kelulusan</span>
                      </div>
                      <div class="card-item-body">
                        <div class="card-item-stat">
                          <h1 class="font-weight-bold"><?php echo $datas; ?></h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              

            </div>
            <!--End row-->


          </div><!-- col end -->

        </div><!-- Row end -->


      </main>
    </div>
  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>
</body>

</html>