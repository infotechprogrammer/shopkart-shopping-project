<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Shopkart</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/bootstrap.css" rel="stylesheet">   
    
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    


    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-dark bg-new"  role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
                      <!-- Left nav -->
            <ul class="nav navbar-nav">
             <li><b><font class="text-primary" style="font-size:24px">Shop<font class="text-danger">kart</font><font class="text-success">.com</font></font></b></li>
              
              <li><a href="index.php">Home</a></li>
                  
               <?php

$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="SELECT * FROM category";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_row($result)){
?>
              
              
              <li><a href="#"><?php echo $row[1]; ?><span class="caret"></span></a>
                <ul class="dropdown-menu">  
                
                <?php 
				
				$query1="SELECT * FROM sub_category  where c_id=$row[0] ";
//and status='active'
$result1=mysqli_query($connection,$query1)or die("Error in query:$query");

if(mysqli_num_rows($result1)>0)
{
while($row1=mysqli_fetch_row($result1)){        
?>      
                  <li><a href="product.php?sid=<?php echo $row1[0]?>"><?php echo $row1[2]?></a></li>
  <?php }}?>
  
                               </ul>
              </li>
  <?php }} ?>            
              
                           <?php if(!isset($_SESSION['user1']))
			 {

             echo "<li><a href='#'>Account<span class='caret'></span></a>";
              echo "<ul class='dropdown-menu'>";                
                   echo "<li><a href='login.php'>Login</a></li>";
                   echo "<li><a href='register.php'>Create Account</a></li>";
            
                 echo "</ul>";
			 
              echo"</li>";   
           
              
			 }
            			else{
							?>
				  <li><a href='logout.php'>Logout</a></li>    
				  <li><a><img src="img/user.png" height="25px" width="25px">&nbsp;<?php echo $_SESSION['user1']; ?></a></li>
              <li><a href='cart.php'><span class='fa fa-shopping-cart'></span>&nbsp;Cart</a>
              </li>
				

              <?php } ?> 
              </ul>
          </div><!--/.nav-collapse -->
          </div>
      </div>       
    </div>
  </section>
  
  
  
   <br><br>
  <div class="row">
  <div class="col-12">
   <nav class="navbar navbar-dark bg-info"> <font style="color:#FFF; font-size:35px">Product Description</font></nav>
  </div>
   <div class="col-12">
   <nav class="navbar "><marquee> <b><font class="text-primary" style="font-size:34px">Shop<font class="text-danger">kart</font></font></b></marquee> </nav>
  </div>
  </div>
 
  <!-- / menu -->  
 
  <!-- catg header banner section -->
 
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
             
                                <?php 
			$pid=$_GET['pid'];	
				$query2="SELECT * FROM products where p_id=$pid";

$result2=mysqli_query($connection,$query2)or die("Error in query:$query");

if(mysqli_num_rows($result2)>0)
{
while($row2=mysqli_fetch_row($result2)){        
?>  
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="Admin/uploads/<?php echo $row2[6];?>" class="simpleLens-lens-image"><img src="Admin/uploads/<?php echo $row2[6];?>" class="simpleLens-big-image"></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Modal view content -->
                

                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3 style="color:#00F"><b><font size="+3"><?php echo $row2[2]?></font></b></h3>
                    <p class="aa-prod-category">
                      Brand: <font color="#0099CC" size="+1"><?php echo $row2[3]?></font>
                      </p>
                           
                  
                    <p> <?php echo $row2[4]?>
                   </p>
                   
                      <div class="aa-price-block">
                      <font color="#009900" size="+1"><span class="aa-product-view-price">Rs <?php echo $row2[5]?>/-</span></font>
                     </div><br>
                       <p class="aa-product-avilability">Avilability: <font color="#FF0000"><span><?php echo $row2[7]?> left</span></font></p>
                    <div class="aa-prod-quantity">
                    
                     
                      
                           <?php }}?>
                    
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="cart_p.php?pid=<?php echo $pid;?>">Add To Cart</a>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          
           
                        <!-- Modal view content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        
                          
                                               
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <!-- / quick view modal -->   
            </div>  
          </div>
        </div>
      </div>
    </div>
  <!-- / product category -->

<!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Useful Links:</h3>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                <ul class="aa-footer-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="ourservices.php">Our Services</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                  </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                 <h3>Contact Us:</h3>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                     <address>
                      <p> CT Group (India)</p>
                      <p><span class="fa fa-phone"></span>8699908515</p>
                      <p><span class="fa fa-envelope"></span>sahilbatra158@gmail.com</p>
                    </address>
                       
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Made by: <a href="aboutus.php">Sahil Batra</a></p>
            <div class="aa-footer-payment">
             <a href="#"><span class="fa fa-facebook"></span></a>
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
    
  <!-- jQuery library -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->

  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>
