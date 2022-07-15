<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email']))
 {

?>
<!DOCTYPE html>
<html>
  <head>
    <title>V-Chat Data Usage | V-Chat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap4/css/bootstrap.min.css">
   <!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../css/bootstrap4/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../css/preloader.css">
    <!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->  
<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->  
<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/vchat_util.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/vchat_main.css">
<!--===============================================================================================-->
  <script type="text/javascript" src="../css/bootstrap4/js/jquery-3.2.1.min.js"></script>
       <script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script>
<!--===============================================================================================-->
  <script>

        new WOW().init();
  </script>
       
 <style type="text/css">
    body{
     background:url(<?php echo  $_SESSION['walpss']?>) no-repeat;
      background-size: cover;
      -moz-background-size: cover;
     -webkit-background-size: cover;
     -o-background-size: cover;
     width: 100%;

    
    }
  

     </style>
</head>
<body>
   
    <div id="myDiv">
  <header class="header">
      <nav class="navbar fixed-top" style="background:<?php echo $_SESSION['color']?>;height:60px">
        <div>
         <a href="settings"> <i class="fa fa-arrow-left fa-lg" style="float:left;color:white;height:30px;margin-top:8px;"></i></a>
        </div>
        <div>
             <p style="text-align:center;color:white;margin-top:8px;font-size:16px;">Data Usage</p>
              <hr style='background-color:white;margin-top:-6px'></hr>
        </div>
          
         
         
</nav>
</header></div><br>

 <div class="limiter" >
    <div class="container-login100" id="main" ">
      <div class="wrap-login100 animated zoomIn" style="background: -webkit-linear-gradient(top,<?php echo $_SESSION['color'];?>,rgba(0, 0, 0, 0.15));opacity:0.9;">
  <!--===============================================================================================-->
                             <!--  <BEGINNING OF FORM> -->
        
         
         
   
           <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c" style="color:white">
            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          
          </div>
        
            
        <!--   <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
               <button id="submit" class="login100-form-btn" style="background: -webkit-linear-gradient(top,white,<?php echo $_SESSION['color'];?>,white);">
              Save Changes
              </button>
            </div>
          </div> -->
<!--===============================================================================================-->
         
  <!--===============================================================================================-->
       
                     <!--  < End Of Form> -->
      <!--===============================================================================================-->
    </div>
    </div>
    </div>
    
 
  <script src="../js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="../js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="../js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="../js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="../js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="../js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="../js/metisMenu/metisMenu.min.js"></script>
    <script src="../js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="../js/morrisjs/raphael-min.js"></script>
    <script src="../js/morrisjs/morris.js"></script>
    <script src="../js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="../js/calendar/moment.min.js"></script>
    <script src="../js/calendar/fullcalendar.min.js"></script>
    <script src="../js/calendar/fullcalendar-active.js"></script>
    <script src="../js/cropper/cropper.min.js"></script>
    <script src="../js/cropper/cropper-actice.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="../js/plugins.js"></script>

    <!-- main JS
        ============================================ -->
    <script src="../js/main.js"></script>
    </body>
    </html>
  <?php
}
else{
  header("location:sign_in");
}
?>




