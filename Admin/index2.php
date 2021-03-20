<!-- Navbar -->
<?php include "nav.php" ?>
<?php include "nav2.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pembagian Vaksin</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Bekasi Barat</span>
              <span class="info-box-number">
                22.000
              </span>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">

            <div class="carousel-item">
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Bekasi Timur</span>
                    <span class="info-box-number">41.410</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Bekasi Selatan</span>
                    <span class="info-box-number">760.000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
    </div>
    <!-- /.col -->
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Masukan Jumlah Vaksin</h5>
          </div>
          <div class="card-footer">
            <form action="#" method="post">
              <div class="input-group">
                <input type="text" name="message" placeholder="100000" class="form-control">
                <span class="input-group-append">
                  <button type="button" class="btn btn-warning">bagi</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- TABLE: LATEST ORDERS -->
  <div class="container-fluid">
    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title">Status pengiriman</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table m-0">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Kecamatan</th>
                <th>Status</th>
                <th>Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                <td>Bekasi Barat</td>
                <td><span class="badge badge-success">Diperjalanan</span></td>
                <td>
                  <div class="sparkbar" data-color="#00a65a" data-height="20">24.000</div>
                </td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                <td>Bekasi Utara</td>
                <td><span class="badge badge-warning">Telah tiba</span></td>
                <td>
                  <div class="sparkbar" data-color="#f39c12" data-height="20">90.000</div>
                </td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>Bekasi Selatan</td>
                <td><span class="badge badge-danger">Telah tiba</span></td>
                <td>
                  <div class="sparkbar" data-color="#f56954" data-height="20">70.000</div>
                </td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>Bantargebang</td>
                <td><span class="badge badge-info">Diperjalanan</span></td>
                <td>
                  <div class="sparkbar" data-color="#00c0ef" data-height="20">63.000</div>
                </td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                <td>Pondok Gede</td>
                <td><span class="badge badge-warning">Diperjalanan</span></td>
                <td>
                  <div class="sparkbar" data-color="#f39c12" data-height="20">80.000</div>
                </td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>Margahayu</td>
                <td><span class="badge badge-danger">Telah tiba</span></td>
                <td>
                  <div class="sparkbar" data-color="#f56954" data-height="20">60.000</div>
                </td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                <td>Jati Asih</td>
                <td><span class="badge badge-success">Diperjalanan</span></td>
                <td>
                  <div class="sparkbar" data-color="#00a65a" data-height="20">70.000</div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card -->
</div>

<!-- Main Footer -->
<?php include "footer.php" ?>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>