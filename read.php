
<?php
include("./conf.php");
if(isset($_GET['id'])){
   $id=$_GET['id'];
   $sql="delete from form where id= $id";
   $result=$conn->query($sql);
   echo $result;
   
}

$sql="select * from form";
$result=$conn->query($sql);

?>


<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Contact</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


      
   </head>
   <body>
      <div class="header_section header_bg">
         <div class="container-fluid ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="pricing.html">Pricing Plans</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="edit.php">UPDATE DB</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="read.php">Table</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                     </li>
                  </ul>
                  
               </div>
            </nav>
         </div>
      </div>
    <div class="container mb-5">

        <div class="row">
            <div class=" mx-auto">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>MESSAGE</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                    <?php
                    if($result-> num_rows > 0){
                       while($row = $result->fetch_assoc()) {
                          ?>
                     <tr>
                       <td><?php echo $row['id']?></td>
                         <td><?php echo $row['name']?></td>
                         <td><?php echo $row['email']?></td>
                         <td><?php echo $row['message']?></td>
                         <td><a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-danger">Edit</a></td>
                       <td><a href="read.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                        
                     </tr>
                     <?php 
                    }
                    
                  }
                     ?>
                </table>
            </div>
        </div>
    </div>
      
      <!-- header section end -->
      
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footer_logo"><img src="images/footer-logo.png"></div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Useful link </h2>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="services.html">Services</a></li>
                           <li><a href="sell.html">Sell</a></li>
                           <li><a href="products.html">Products</a></li>
                           <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Portfolio</h2>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="#">LIodeno</a></li>
                           <li><a href="jokri.html">Jokri</a></li>
                           <li><a href="begana.html">Begana</a></li>
                           <li><a href="sell.html">Sell</a></li>
                           <li><a href="products.html">Products</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Contact Us</h2>
                     <div class="location_text"><img src="images/call-icon.png"><span class="padding_left_15"><a href="#">+01 1234567</a></span></div>
                     <div class="location_text"><img src="images/mail-icon.png"><span class="padding_left_15"><a href="#">demo@gmail.com</a></span></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Social Link</h2>
                     <p class="footer_text">It is a long established fact that a reader will be </p>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="input_main">
               <input type="text" class="email_text" placeholder="Enter your email" name="Enter your email">
               <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <!-- <script>
         // Material Select Initialization
         $(document).ready(function() {
         $('.mdb-select').materialSelect();
         $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
         $(this).closest('.select-outline').find('label').toggleClass('active');
         $(this).closest('.select-outline').find('.caret').toggleClass('active');
         });
         });
      </script> -->
   </body>
</html>