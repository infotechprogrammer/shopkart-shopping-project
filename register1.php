<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Create Account</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<script src="script.js" type="text/javascript"> </script>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0" align="center">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-3 d-none d-lg-block"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h3 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" onSubmit="return checkreg()" action="insertuser_p1.php">
                    <div class="form-group">
                    <center><font id="namev" style="color:#F00; font-size:15px"></font></center>
                      <input type="text" class="form-control form-control-user" id="name" name="user" aria-describedby="emailHelp" placeholder="Enter user name">  
                    </div>
                    <div class="form-group">
                     <center><font id="emailv"style="color:#F00; font-size:15px"></font> </center>
                      <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                    <center><font id="passv" style="color:#F00; font-size:15px"></font> </center>
                      <input type="password" class="form-control form-control-user" id="pass" name="pass" aria-describedby="emailHelp" placeholder="Enter password"> 
                    </div>
                    <div class="form-group">
                    <center> <font id="nov" style="color:#F00; font-size:15px"></font></center>
                      <input type="text" class="form-control form-control-user" id="no" onKeyPress="return contactnumonly(event)" name="cno" maxlength="10" aria-describedby="emailHelp" placeholder="Enter contact no"> 
                    </div>
                    
                    <div class="form-group">
                    <center><font id="pincodev" style="color:#F00; font-size:15px"></font> </center>
                      <input type="text" class="form-control form-control-user" id="pincode" onKeyPress="return pincodenumonly(event)" name="pcode" maxlength="6" aria-describedby="emailHelp" placeholder="Enter pincode"> 
                    </div>
                    
                    <div class="form-group">
                    <center> <font id="addv" style="color:#F00; font-size:15px"></font></center>
                      <input type="text" class="form-control form-control-user" id="add" name="add" aria-describedby="emailHelp" placeholder="Enter user address"> 
                    </div>
                    <div class="form-group">
                    <center><font id="cityv" style="color:#F00; font-size:15px"></font> </center>
                      <input type="text" class="form-control form-control-user" id="city" name="city" aria-describedby="emailHelp" placeholder="Enter city">
                    
                    </div>
                    <div class="form-group">
                     <center><font id="statev" style="color:#F00; font-size:15px"></font> </center>
                      <input type="text" class="form-control form-control-user" id="state" name="state" aria-describedby="emailHelp" placeholder="Enter state"> 
                      <input type="hidden" id="type" name="type">
                    </div>
                    <div class="form-group" >
                    <input type="submit" value="Create Account" class="btn btn-primary btn-user btn-block">
                  </div>
                    </form>
              <hr>
              <div class="text-center">
                <a class="h5" style="color:#00F" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
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
