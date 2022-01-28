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
        <div class="sidebar-brand-icon">
          <img class="rounded-circle" src="uploads/sahil1.jpg" height="35px" width="35px">
        </div>
        <div class="sidebar-brand-text mx-3">Sahil Batra </div>
      </a>
      
      <!-- Divider -->
      <hr class="sidebar-divider my-0 bg-primary">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider bg-primary">

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
      <hr class="sidebar-divider bg-primary">

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

      <!-- Nav Item -  -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Logout</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block bg-primary">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column bg-new1">
 <!-- Topbar -->
 
        <nav class="navbar navbar-expand navbar-light bg-new topbar mb-4 static-top shadow">

    <b class="navbar-brand" style="font-size:36px;"><font class="text-primary">Shop<font class="text-danger">kart</font><font class="text-success">.com</font></font></b>       
<div class="spinner-grow text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>
</nav>

        <!-- End of Topbar -->
          <div class="card shadow mb-4 bg-warning">
            <div class="card-body">
                
        <?php

$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="SELECT * FROM category";

$result=mysqli_query($connection,$query)or die("Error in query:$query");
 $rowcount=mysqli_num_rows($result);
if(mysqli_num_rows($result)>0)
{
?>



        <!-- Begin Page Content -->
<div class="container-fluid bg-warning" >
 <div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12">
<h2 align="center" class="text-danger"><b>Welcome to SB Admin</b></h2>
        </div>
        </div>
   <div class="row" align="center">
 <div class="col-lg-4 col-md-4 col-sm-12">
 <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header bg-primary font-weight-bold" align="center" style="font-size:24px; font-family:Bondani MT"><a href="categories.php" style="color:#FFF">Categories</a></div>
  <div class="card-body">
    <h1 class="card-title" align="center" style="font-family:'Times New Roman', Times, serif"><?php printf("%d",$rowcount); }?></h1>
   </div>
<?php   
   $query1="SELECT * FROM sub_category";

$result1=mysqli_query($connection,$query1)or die("Error in query:$query1");
 $rowcount1=mysqli_num_rows($result1);
if(mysqli_num_rows($result1)>0)
{
?>
   
</div>
 </div>
 <div class="col-lg-4 col-md-4 col-sm-12">
 <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-primary font-weight-bold" align="center" style="font-size:24px; font-family:Bondani MT"><a href="sub categories.php" style="color:#FFF">Sub Categories</a></div>
  <div class="card-body">
    <h1 class="card-title" align="center" style="font-family:'Times New Roman', Times, serif"><?php printf("%d",$rowcount1); }?></h1>
   </div>
 <?php  
  $query2="SELECT * FROM products";

$result2=mysqli_query($connection,$query2)or die("Error in query:$query2");
 $rowcount2=mysqli_num_rows($result2);
if(mysqli_num_rows($result2)>0)
{
?> 
   
</div>
 </div>
 <div class="col-lg-4 col-md-4 col-sm-12">
 <div class="card text-white bg-warn  mb-3" style="max-width: 18rem;">
  <div class="card-header bg-primary font-weight-bold" align="center" style="font-size:24px; font-family:Bondani MT"><a href="products.php" style="color:#FFF">Products</a></div>
  <div class="card-body">
    <h1 class="card-title" align="center" style="font-family:'Times New Roman', Times, serif"><?php printf("%d",$rowcount2); }?></h1>
   </div>
      
</div>
</div></div> 

 <?php  
  $query3="SELECT * FROM user";

$result3=mysqli_query($connection,$query3)or die("Error in query:$query3");
 $rowcount3=mysqli_num_rows($result3);
if(mysqli_num_rows($result3)>0)
{
?> 
  <div class="row" align="center">
 <div class="col-lg-6 col-md-6 col-sm-12">
  <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header bg-primary font-weight-bold" align="center" style="font-size:24px; font-family:Bondani MT"><a href="user.php" style="color:#FFF">Users</a></div>
  <div class="card-body">
    <h1 class="card-title" align="center" style="font-family:'Times New Roman', Times, serif"><?php printf("%d",$rowcount3); }?></h1>
   </div>
    <?php  
  $query4="SELECT * FROM orders";

$result4=mysqli_query($connection,$query4)or die("Error in query:$query4");
 $rowcount4=mysqli_num_rows($result4);
if(mysqli_num_rows($result4)>0)
{
?> 
   
</div>
 </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
  <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header bg-primary font-weight-bold" align="center" style="font-size:24px; font-family:Bondani MT"><a href="orders.php" style="color:#FFF">Orders</a></div>
  <div class="card-body">
    <h1 class="card-title" align="center" style="font-family:'Times New Roman', Times, serif"><?php printf("%d",$rowcount4); }?></h1>
   </div>
</div>
 </div></div>   
 </div></div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>   
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
