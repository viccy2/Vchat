<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email']))
 {

?>
<!DOCTYPE html>
<html>
  <head>
<title>V-Chat Change Password | V-Chat</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" initial-scale="1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="favicon.ico">
   <link href="../md/css/sb-admin-2.min.css" rel="stylesheet">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
  <link href="../md/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/preloader.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/modal.css">
  <link rel="stylesheet" type="text/css" href="../css/post.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/dashboard_tabs.css">
  <link rel="stylesheet" href="../css/notifications/Lobibox.min.css">
  <link rel="stylesheet" href="../css/notifications/notifications.css">
    <link rel="stylesheet" type="text/css" href="../css/vchat_util.css">
  <link rel="stylesheet" href="../css/new_classics.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/vchat_app_main.css">
  <script type="text/javascript" src="../css/bootstrap4/js/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="../css/bootstrap4/js/status.js"></script>

<!--===============================================================================================-->
 <script>
        new WOW().init();
  </script>
<!--===============================================================================================-->
       <script>

         $(document).ready(function(){
        $("#loader").hide();
        $("#error").hide();
        $("#submit").click(function(){
        $("#main").hide();
        $("#loader").show();
        var form = $("#data");
        var formData = new FormData($("#data")[0]);

          $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                $("#main").show();
                $("#loader").hide();
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
                var match = data.match("Successful");
                var matchs = data.match("Wrong Password, re-check");
      
                if (match!=null) {
                $(this).hide();
                Lobibox.notify('success', {
                size: 'mini',
                msg: data
                });
                setTimeout(function(){
                window.location.href = '../app/password';
                },5000);
                };
                if (matchs!=null) {
                var d= Lobibox.notify('error', {
                size: 'mini',
                msg: data
                });
                };
              var jarvis = new Artyom();
              jarvis.say(data);
            
              },
              error: function(data){
              alert("not success");
              },
              cache: false,
              contentType: false,
              processData: false
            });

            return false;
   });

   });

   </script>
<!--===============================================================================================-->
   <style type="text/css">
    body{
    background:<?php echo $_SESSION['bodybgcolor']; ?>;
      background-size: cover;
      -moz-background-size: cover;
     -webkit-background-size: cover;
     -o-background-size: cover;
     width: 100%;
   min-height:100vh;
     max-height:1000vh;
      font-family:  'Poppins';
     font-size: 12px;
    
    }
    .focus-input100::after {
  font-fam: Poppins-Regular;
  font-size: 15px;
  color: #999999;
  line-height: 1.2;

  content: attr(data-placeholder);
  display: block;
  color: <?php echo $_SESSION['color']; ?>;
  width: 100%;
  position: absolute;
  top: 16px;
  left: 0px;
  padding-left: 5px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
    .card__picture--2 {
      background-image: url(<?php echo $_SESSION['walpss']; ?>),linear-gradient(to right top, <?php echo $_SESSION['color']; ?>, rgba(0,0,0,0.2)) ;
      height: 50vh;
    }
    
 </style>
<!--===============================================================================================-->
</head>
<!--===============================================================================================-->
<body>
<!--===============================================================================================-->
<div id="loader">
<div class="preloader-single mt-b-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute">
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                </div>
                            </div>
                        </div>
                      </div>
<!--===============================================================================================-->
  <div id="myDiv">
   <nav class="navbar navbar-expand navbar-light  topbar mb-4 fixed-top " style=" color:<?php echo $_SESSION['color']; ?>;background-color: <?php echo $_SESSION['headerbgcolor']; ?>;height:70px">
<div>
   <a href="account_settings"><i class="container-fluid fas fa-arrow-left fa-fw" style="color:white"></i></a>
</div>
         <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
           

            <!-- Nav Item - Video Call -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" >
            <div>
             <p style="text-align:center;color:white;margin-top:8px;font-size:14px;">Edit Password </p>
              <hr style='background-color:white;margin-top:-6px'></hr>
              </div>
              </a>
              <!-- Dropdown - MVideo Call-->
             
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small"></span>
                <img class="" >
                 <?php echo "<img src='".$_SESSION['pass']."'  style='width:40px;height:40px;border-radius: 50%' >";?>
              </a>
              <!-- Dropdown - User Information -->
             
            </li>

          </ul>

        </nav></div>
<!--===============================================================================================-->

 <section class="section-tours">
<!--===============================================================================================-->

 <div class="card__side card__side--front" style="background:linear-gradient(to left top, <?php echo $_SESSION['bodybgcolor']; ?>, rgba(0,0,0,0.2));min-height:100vh;
     max-height:1000vh;">
 <div class="card__picture card__picture--2 ">

  </div>
<!--===============================================================================================-->
  <h4 class="card__heading" style="margin-top:80px" >
  <span class="card__heading-span card__heading-span--2" style="background:<?php echo $_SESSION['color']; ?>;font-family: inherit;font-size:20px">Edit Password</span>
  </h4>
 <div class="card__details" >
 <form id="data" class="login100-form validate-form"  action="chpass.php" method="post">
         
         
    
           <div class="wrap-input100 validate-input" data-validate="Enter current password" style="color:<?php echo $_SESSION['color'];?>;">
            <span class="btn-show-pass" style="color:<?php echo $_SESSION['color'];?>;">
              <i class="zmdi zmdi-eye text-gray-600"></i>
            </span>
            <input class="input100" type="password" name="password" style="color:<?php echo $_SESSION['color'];?>;">
            <span class="focus-input100" data-placeholder="Enter Current Password" style="color:<?php echo $_SESSION['color'];?>;"></span>
          </div><br><br><br><br>

         
      
            <div class="text-center u-margin-top-big">
                <a type="submit" href="#" id="submit" class="btn text-gray-600" >Next</a>
            </div>          
            
      
<!--===============================================================================================-->
         
  <!--===============================================================================================-->
        </form>
         </div>
                 
<!--===============================================================================================-->            
        </section>
         <footer class="fixed-bottom" style="height:30px;font-size:15px;color:#673AB7;background:<?php echo $_SESSION['bodybgcolor']; ?>;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Vchat &copy;  2021</span>
          </div>
        </div>
      </footer>
<!--===============================================================================================-->   
 
  <script src="../md/vendor/jquery/jquery.min.js"></script>
  <script src="../md/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../md/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
    <script src="../md/js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="../css/wowjs/dist/wow.min.js"></script>
    <script src="../vendor/animsition/js/animsition.min.js"></script>
    <script type="text/javascript" src="../css/bootstrap4/js/bootstrap.min.js"></script>
    <script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script>  
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="../vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/front.js"></script>
    <script src="../js/notifications/Lobibox.js"></script>
    <script src="../js/notifications/notification-active.js"></script>
    <script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script> 
    </body>
    </html>
  <?php
}
else{
  header("location:sign_in");
}
?>




