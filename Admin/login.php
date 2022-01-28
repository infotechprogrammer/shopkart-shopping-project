<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin-Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/cssfont.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center" align="center">
    
      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
      
          <div class="card-body p-0" align="center">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-3">  </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form method="post" class="user" action="login_process.php">
                  <div class="form-group">
                  <img src="uploads/sahil1.jpg" height="150px" width="150px">
                  </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="hidden" class="form-control form-control-user" id="type" name="type" placeholder="admin" value="admin">
                    </div>
                    
                      <div class="form-group">
                      <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">
                    </div>
                    </form>
                                 </div>
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
