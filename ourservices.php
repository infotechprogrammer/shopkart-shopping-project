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
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

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
				  echo"<li><a href='logout.php'>Logout</a></li>";    
				 ?>
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
  <!-- / menu -->
  <!-- Start slider -->
  <br><br>

  
 
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>On order greater than Rs.2,000</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>Great Products</h4>
                <P>High quality branded products are available</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>You can call us on number given below</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/1.png" >
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Great Electronic Products with great price with high build quality and design </p>
                  <div class="aa-testimonial-info">
              
                    <span>Phones</span><span>Laptops</span><span>Cameras</span><span>Telivisions</span><span>Headphones</span>
                                                                   
                  </div>
                </div>
              </li>
              <!-- single slide -->
             <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/2.png" >
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Great Cloths with great price with latest fashion technology high quality fabrics and design </p>
                  <div class="aa-testimonial-info">
                     <span>T-Shirts</span><span>Shirts</span><span>Pants</span>
                  </div>
                </div>
              </li><li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/3.png" >
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Branded Footwears with great price with best sole quality and design </p>
                  <div class="aa-testimonial-info">
                  <span>Sports Shoes</span><span>Casual Shoes</span><span>Formal Shoes</span>
                                  
                  </div>
                </div>
              </li><li>
                <div class="aa-testimonial-single"> 
                <img class="aa-testimonial-img" src="img/4.png" >
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Amazing Sports equipments  ranges from balls, to nets and to protective gear like helmets, pads etc  </p>
                  <div class="aa-testimonial-info">
                   <span>Cricket</span><span>Football</span><span>Badminton</span><span>Skating</span>
                                  
                  </div>
                </div>
              </li><li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/5.png" >
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Great quality of branded watches with good display and design</p>
                  <div class="aa-testimonial-info">
                 <span>Sports Watch</span><span>Digital Watch</span><span>Smart Watch</span><span>Wall Cloacks</span>
                                  
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->


  <!-- / Latest Blog -->
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
    

   <script src="js/bootstrap.min.js"></script>
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