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

  <title>SEAS Notifications</title>

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
              <a href="reports.php" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>Reports</p>
              </a>
            </li>



            <li class="nav-item">
              <a href="notification.php" class="nav-link active">
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
          <!-- <div class="row">

            <div class="col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Messages</span>
                  <span class="info-box-number">1,410</span>
                </div>
              </div>
            </div>


            <div class="col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Messages</span>
                  <span class="info-box-number">1,410</span>
                </div>
              </div>
            </div>


            <div class="col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Messages</span>
                  <span class="info-box-number">1,410</span>
                </div>
              </div>
            </div>



            <div class="col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Messages</span>
                  <span class="info-box-number">1,410</span>
                </div>
              </div>
            </div>
          </div> -->


          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-info">
              <i class="far fa-calendar"></i>
              &nbsp;&nbsp;&nbsp;
              Attendance
              </h3>
            </div>
            <div class="card-body">
              <div id="jsGrid" class="text-sm"></div>
            </div>
          </div>
          <!-- /.card -->



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
  <!-- AdminLTE App -->
  <script src="../template/dist/js/adminlte.min.js"></script>
  <script src="../template/plugins/jsgrid/jsgrid.min.js"></script>


  <script>
    var employees = [
      {
        "sn": 1,
        "name": "Musa Adam Mtuya",
        "title": "IT Marketing Officer",
        "check-in": "06:20",
        "check-out": "16:20",
        "status": "ON-TIME"
      },
      {
        "sn": 2,
        "name": "Amadeus George Mari",
        "title": "System Adminstrator",
        "check-in": "06:20",
        "check-out": "16:20",
        "status": "ON-TIME"
      },
      {
        "sn": 3,
        "name": "Philips Anord Mlay",
        "title": "Assistance Branch Manager",
        "check-in": "06:20",
        "check-out": "16:20",
        "status": "ON-TIME"
      },
      {
        "sn": 4,
        "name": "Samwel Samwel Mangi",
        "title": "Branch Manager",
        "check-in": "06:20",
        "check-out": "16:20",
        "status": "ON-TIME"
      },
      {
        "sn": 5,
        "name": "Franko Mali Nyingi",
        "title": "Marketing Officer",
        "check-in": "06:20",
        "check-out": "16:20",
        "status": "ON-TIME"
      },
      {
        "sn": 6,
        "name": "Carene Samwel Mbengo",
        "title": "Marketing Officer",
        "check-in": "06:20",
        "check-out": "16:20",
        "status": "ON-TIME",
      }
    ];


    $("#jsGrid").jsGrid({
      width: "100%",
      height: "auto",

      sorting: true,
      paging: true,

      data: employees,

      fields: [
        {
          name: "sn",
          type: "number",
          width: 30,
          title: "SN",
          css: "text-center"
        },
        {
          name: "name",
          type: "text",
          title: "NAME"
        },
        {
          name: "title",
          type: "text",
          title: "TITLE",
          width: 200
        },
        {
          name: "check-in",
          type: "text",
          width: 70,
          title: "CHECK-IN",
          css: "text-center"
        },
        {
          name: "check-out",
          type: "text",
          width: 70,
          title: "CHECK-OUT",
          css: "text-center"
        },
        {
          name: "status",
          type: "text",
          width: 50,
          title: "STATUS",
          css: "text-center"
        }
      ]
    });
  </script>


</body>

</html>