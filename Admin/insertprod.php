<?php session_start();
if(!isset($_SESSION['user']))
{
header("Location:login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-blue sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sahil Batra </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
       Products
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="categories.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Categories</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="sub categories.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Sub Categories</span>
        </a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link collapsed" href="products.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Products</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
       Account Details:
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="user.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>User</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="orders.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Orders</span>
        </a>
      </li>

      <!-- Nav Item - Logout -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Logout</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
 <!-- Topbar -->
 
        <nav class="navbar navbar-expand navbar-light bg-new topbar mb-4 static-top shadow">

    <b class="navbar-brand" style="font-size:36px;"><font class="text-primary">Shop<font class="text-danger">kart</font><font class="text-success">.com</font></font></b>       

</nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
<div class="container-fluid">
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">
<b><p  class="text-success text-center" style="font-size:36px">Insert Product</p></b>
  <form class="user" method="post" action="insertprod_p.php" enctype="multipart/form-data" >
  <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="s_id" name="s_id" aria-describedby="emailHelp" placeholder="Enter sub category id">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="pname" name="pname" aria-describedby="emailHelp" placeholder="Enter product name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="pbrand" name="pbrand" aria-describedby="emailHelp" placeholder="Enter product brand">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="pdesc" name="pdesc" aria-describedby="emailHelp" placeholder="Enter product description">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="pprice" name="pprice" aria-describedby="emailHelp" placeholder="Enter product price">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="pstock" name="pstock" aria-describedby="emailHelp" placeholder="Enter product stock">
                    </div>
                         <div class="form-group">                     
                         <input type="file" name="file" ></div>
                          <div class="form-group">
                    <input type="submit" value="Insert" name="submit" class="btn btn-primary btn-user btn-block"> 
                          </div>          
              

</form>
</div>
<div class="col-lg-3"></div>   
</div>
        </div>
        </div>
        </div>

<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
