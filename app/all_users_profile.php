<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email']))
 {
  require 'dc.php';
  $all_user_ids=$_GET['id'];
 
  $quest = mysqli_query($con,"select * from clients_tb where user_id ='$all_user_ids' and validation_code=0 ");
  while ($r=mysqli_fetch_array($quest)) {
     $all_user_fname=$r['firstname'];
     $all_user_lname=$r['lastname'];
     $all_user_name=$r['username'];
     $all_user_about=$r['about'];
     $all_user_state=$r['state'];
     $all_user_country=$r['country'];
     $all_user_pic=$r['passport'];
     $all_user_email=$r['email'];
    $all_user_id=$r['client_id'];
  }
 $d = mysqli_query($con,"select * from friend_tb where emails ='$all_user_email' and friends_id='$all_user_id' ");
   $all_user_friends=mysqli_num_rows($d); 
   $e=mysqli_query($con,"select * from groupmember_tb where mememail = '$all_user_email' and member_id = '$all_user_id' ");
  $all_user_groups=mysqli_num_rows($e); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>V-Chat User Profile | V-Chat</title>
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
                 var match = data.match("Request Sent Successfully");
                var matchs = data.match("Request already sent");
     
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                    setTimeout(function(){
                 location.reload(true);
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
 <style type="text/css">
    body{
    background:<?php echo $_SESSION['bodybgcolor']; ?>;
      background-size: cover;
      -moz-background-size: cover;
     -webkit-background-size: cover;
     -o-background-size: cover;
     width: 100%;
      font-family:  'Poppins';
     font-size: 12px;
       min-height:100vh;
     max-height:1000vh;
    
    }
 .card__picture--2 {
 background-image: url(<?php echo $all_user_pic; ?>),linear-gradient(to right top, <?php echo $_SESSION['color']; ?>, rgba(0,0,0,0.2)) ;
 height:50vh;

}
 </style>
</head>
<body>
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
    <div id="myDiv">
 <nav class="navbar navbar-expand navbar-light  topbar mb-4 fixed-top " style=" color:<?php echo $_SESSION['color']; ?>;background-color: <?php echo $_SESSION['headerbgcolor']; ?>;height:70px">
<div>
   <a href="home"><i class="container-fluid fas fa-arrow-left fa-fw" style="color:white"></i></a>
</div>
         <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
           

            <!-- Nav Item - Video Call -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" >
            <div>
             <p style="text-align:center;color:white;margin-top:8px;font-size:14px;">Add User</p>
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

 <section class="section-tours" style="margin-top:;">

 <div class="card__side card__side--front"style="background:linear-gradient(to left top, <?php echo $_SESSION['bodybgcolor']; ?>, rgba(0,0,0,0.2));min-height:100vh;
     max-height:1000vh;" >
  <div class="card__picture card__picture--2 ">

  </div>
  <h4 class="card__heading" style="margin-top:80px">
  <span class="card__heading-span card__heading-span--2" style="background:<?php echo $_SESSION['color']; ?>;font-family: inherit;font-size:20px;">About User</span>
  </h4>
  <form id="data" class="container-fluid login100-form validate-form"  action="request3.php" method="post">
          <div class="container-fluid">
                  <nav style="background:<?php echo $_SESSION['bodybgcolor']; ?>;">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active text-gray-700" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
                      <a class="nav-item nav-link text-gray-700" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">About</a>
                      <a class="nav-item nav-link text-gray-700" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Address</a>
         
                    </div>
                  </nav>
                   
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

       <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
       <input type="text" name="name" value="<?php echo $all_user_id ?>" hidden="true">
       <table class='table table-striped' style="font-size:12px">
           <br>
            <tbody>
              <tr>
              <td><b>Firstname</b> : <i style="float:right;font-style:inherit;"><?php echo $all_user_fname; ?></i></td>
              </tr>
              <tr>
                <td><b>Lastname</b> : <i style="float:right;font-style:inherit;"><?php echo $all_user_lname; ?></i></td>
              </tr>
             <tr>
                <td><b>Username</b> : <i style="float:right;font-style:inherit;"><?php echo $all_user_name; ?></i></td>
              </tr>
            </tbody>
          </table>
    </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
           <table class='table table-striped' style="font-size:12px">
           <br>
            <tbody>
                <tr>
              <td><b>About</b> : <i style="float:right;font-style:inherit;"><?php echo $all_user_about; ?></i></td>
              </tr>
               <tr>
              <td></td>
              </tr>
            </tbody>
          </table>
      </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
      <table class='table table-striped' style="font-size:12px">
           <br>
            <tbody>
              <tr>
                <td><b>State</b> : <i style="float:right;font-style:inherit;"><?php echo  $all_user_state; ?></i></td>

              </tr>
               <tr>
                <td><b>Country</b> : <i style="float:right;font-style:inherit;"><?php echo  $all_user_country; ?></i></td>
              
              </tr>
            </tbody>
          </table>
  </div>  
                    
            
                 
         
          </div>
        </div>
      
      
            <div class="text-center u-margin-top-big">
                <a href="#" id="submit" class="btn text-gray-600">Add Friend</a>
            </div>          
         </form>  
         </div> 
      
<!--===============================================================================================-->
         
  <!--===============================================================================================-->
                  
            
        </section>
  <footer class=" fixed-bottom" style="height:30px;font-size:15px;color:#673AB7;background:<?php echo $_SESSION['bodybgcolor']; ?>">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Vchat &copy;  2021</span>
          </div>
        </div>
      </footer>
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




