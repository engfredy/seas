<?php include 'session.php';?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SEAS Reports</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template/dist/css/adminlte.min.css">
  <!-- Jsgrid -->
  <link rel="stylesheet" href="../template/plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="../template/plugins/jsgrid/jsgrid-theme.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-fixed layout-navbar-fixed sidebar-mini">
  <div class="wrapper">
  <?php include 'header.php';?>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-navy elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="../template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light"><b>ADMIN PANEL</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="records.php" class="nav-link">
                <i class="nav-icon fas fa-database"></i>
                <p>Attendance Records</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="reports.php" class="nav-link active">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>Reports</p>
              </a>
            </li>



            <li class="nav-item">
              <a href="notification.php" class="nav-link">
                <i class="nav-icon fas fa-bell"></i>
                <p>Notifications</p>
              </a>
            </li>



            <li class="nav-item">
              <a href="settings.php" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>Settings</p>
              </a>
            </li>




          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"><small style="display: none;">Dashboard</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right" style="display: none;">
                <li class="breadcrumb-item"><a href="#"><small>Home</small></a></li>
                <li class="breadcrumb-item active"><small>Starter Page</small></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-navy"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Best attendance</span>
                  <span class="info-box-number">5</span>
                </div>
              </div>
            </div>


            <div class="col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-navy"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Worst attendance</span>
                  <span class="info-box-number">4</span>
                </div>
              </div>
            </div>


            <div class="col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-navy"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Employees</span>
                  <span class="info-box-number">76</span>
                </div>
              </div>
            </div>



            <div class="col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-navy"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Branch (es)</span>
                  <span class="info-box-number">2</span>
                </div>
              </div>
            </div>
          </div>



          <!-- BAR CHART -->
          <div class="card mt-4">
              <div class="card-header">
              <h3 class="card-title text-info">
              <i class="fas fa-chart-bar"></i>
              &nbsp;&nbsp;&nbsp;
                Branch Attendance overtime
              </h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          <div class="row mt-5 mb-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    <div class="card-title text-success text-sm">
                    <i class="far fa-arrow-alt-circle-up"></i>
                    &nbsp;&nbsp;&nbsp;
                    Best Attendance
                    </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-borderless text-sm">
                            <tr>
                                <th>SN</th>
                                <th>DATE</th>
                                <th>NAME</th>
                                <th>CHECK-IN</th>
                                <th>CHECK-OUT</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>01-03-2020</td>
                                <td>ABUBAKAL J ABOUD</td>
                                <td>06:00</td>
                                <td>16:00</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>01-03-2020</td>
                                <td>ANGEL C ADAM</td>
                                <td>06:00</td>
                                <td>16:00</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>01-03-2020</td>
                                <td>JACKLINE J MWINGILO</td>
                                <td>06:00</td>
                                <td>16:00</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>01-03-2020</td>
                                <td>ANASTAZIA S DAVID</td>
                                <td>06:00</td>
                                <td>16:00</td>
                            </tr>


                            <tr>
                                <td>5</td>
                                <td>01-03-2020</td>
                                <td>SAMWEL P. PAUL</td>
                                <td>06:00</td>
                                <td>16:00</td>
                            </tr>

                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>


            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    <div class="card-title text-warning text-sm">
                    <i class="far fa-arrow-alt-circle-down"></i>
                    &nbsp;&nbsp;&nbsp;
                    Worst Attendance
                    </div>
                    </div>
                    <div class="card-body">
                    <table class="table table-hover table-borderless text-sm">
                            <tr>
                                <th>SN</th>
                                <th>DATE</th>
                                <th>NAME</th>
                                <th>CHECK-IN</th>
                                <th>CHECK-OUT</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>01-03-2020</td>
                                <td>MUSA A. MTUYA</td>
                                <td>06:00</td>
                                <td>16:00</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>01-03-2020</td>
                                <td>STAN N SMITH</td>
                                <td>06:00</td>
                                <td>16:00</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>01-03-2020</td>
                                <td>ALPHONE A MALEKO</td>
                                <td>06:00</td>
                                <td>16:00</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>01-03-2020</td>
                                <td>SHABANI D ATHUMANI</td>
                                <td>06:00</td>
                                <td>16:00</td>
                            </tr>


                            <tr>
                                <td>5</td>
                                <td>01-03-2020</td>
                                <td>ABDALA M JUMA</td>
                                <td>06:00</td>
                                <td>16:00</td>
                            </tr>

                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
          </div>


          <!-- <div>
            <div id="jsGrid" class="text-sm"></div>
          </div> -->

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../template/plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../template/dist/js/adminlte.min.js"></script>
  <script src="../template/plugins/jsgrid/jsgrid.min.js"></script>

  <script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Company Branch A',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Company Branch B',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }


    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

  })
</script>


</body>

</html>