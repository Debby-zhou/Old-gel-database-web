<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Biomimicry Database</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Biomimicry Gel Database</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">
    <?php
		$dbms = 'mariadb';
		$dbName = 'parameter';
		$user = 'root';
		$pwd = 'qaz123456789';
    $connect = new mysqli($dbms,$user,$pwd,$dbName);
    //確認是否成功連線mariadb
    if(!$connect) {
        die("Error!: " . mysqli_connect_error());
    }
    //全表
    $sql1 = "select * from `200317 CT values`;";
    $r = dbquery($sql1,$connect);
    //詳細資訊


    function dbquery($sql,$connect){
        $result = mysqli_query($connect,$sql)
            or die("Error: " . mysqli_error($connect).PHP_EOL);
        return $result;
    }
    ?>
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
	      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cubes"></i>
          <span>Parameter</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="parameter.php">Parameter</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="score.php">Score</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="ctvalues.php">CT values</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="foldchange.php">Fold change</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="simulation.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Simulation</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_analysis.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data analysis</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cell_images.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Cell images</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Parameter</a>
          </li>
          <li class="breadcrumb-item active">CT values</li>
        </ol>
        <div class="dropdown">
          <div class="container">
            <span><h4>Please choose the category.</h4><br></span>
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Category</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="controls.php">Controls</a>
              <a class="dropdown-item" href="ectoderm.php">Ectoderm</a>
              <a class="dropdown-item" href="endoderm.php">Endoderm</a>
              <a class="dropdown-item" href="#">Mesendoderm</a>
              <a class="dropdown-item" href="#">Mesoderm</a>              
              <a class="dropdown-item" href="#">Other</a>
              <a class="dropdown-item" href="#">Self-renewal</a>
            </div>
          </div>
        </div>
  <!-- DataTables Example 
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            CT values</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-dark">
                  <tr>
                    <th>Target name</th>
                    <th>Category</th>
                    <th>10G_0.25L_30S</th>
                    <th>10G_0.25L_90S</th>
                    <th>12.5G_0.25L_30S</th>
                    <th>12.5G_0.25L_90S</th>
                    <th>15G_0.25L_30S</th>
                    <th>15G_0.25L_90S</th>
                    <th>17.5G_0.25L_30S</th>
                    <th>17.5G_0.25L_90S</th>
                    <th>10G_0.5L_30S</th>
                    <th>10G_0.5L_90S</th>
                    <th>12.5G_0.5L_30S</th>
                    <th>12.5G_0.5L_90S</th>
                    <th>15G_0.5L_30S</th>
                    <th>15G_0.5L_90S</th>
                    <th>17.5G_0.5L_30S</th>
                    <th>17.5G_0.5L_90S</th>
                    <th>10G_0.25L_50S</th>
                    <th>10G_0.25L_70S</th>
                    <th>12.5G_0.25L_50S</th>
                    <th>12.5G_0.25L_70S</th>
                    <th>15G_0.25L_50S</th>
                    <th>15G_0.25L_70S</th>
                    <th>17.5G_0.25L_50S</th>
                    <th>17.5G_0.25L_70S</th>
                    <th>10G_0.5L_50S</th>
                    <th>10G_0.5L_70S</th>
                    <th>12.5G_0.5L_50S</th>
                    <th>12.5G_0.5L_70S</th>
                    <th>15G_0.5L_50S</th>
                    <th>15G_0.5L_70S</th>
                    <th>17.5G_0.5L_50S</th>
                    <th>17.5G_0.5L_70S</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  while($row = mysqli_fetch_array($r)){
                      echo "<tr>";
                        for($i=0;$i<34;$i++){
                          echo "<td>$row[$i]</td>";
                        }                                               
                      echo "</tr>";
                  }
                  ?>
                  </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated Tody at 11:00 PM</div>
        </div>
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Debby 2020</span>
          </div>
        </div>
      </footer>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
    <?php
        mysqli_close($connect);
    ?>
</body>

</html>
