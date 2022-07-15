<?php
session_start();
if (isset($_SESSION['email']) || isset($_COOKIE['email']))
 {
require 'dc.php';
        $_SESSION['email'];
        $_SESSION['username'];
        $_SESSION['ctid'] ;
        $_SESSION['pass'];
        $_SESSION['name'];
        $_SESSION['walpss'];
        $_SESSION['color'];
      $_SESSION['phones'];
      $_SESSION['user_id'];
      $id=$_SESSION['ctid'];
$set = mysqli_query($con, "select * from clients_tb where email ='$_SESSION[email]'");
  while ($a=mysqli_fetch_array($set)) {
   $_SESSION['status']=$a['mode_status'];
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>V-Chat Dashboard | V-Chat</title>
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
<link href='simplelightbox-master/dist/simple.css' rel='stylesheet' type='text/css'>

  <script type="text/javascript" src="../css/bootstrap4/js/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="../css/bootstrap4/js/status.js"></script>
   <script type="text/javascript" src="simplelightbox-master/dist/simple.js"></script>

<!--===============================================================================================-->
 <script>

         $(document).ready(function(){
         $("#sub").click(function(){
           var form = $("#runs");
        var formData = new FormData($("#runs")[0]);

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
               var match = data.match("Logout successfully");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
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
                 jarvis.say("Logout successfully");
                
              },
              error: function(data){
                alert("not success");
              },
              cache: false,
              contentType: false,
              processData: false
            });

         });
        $(".alls").hide();
        $("#search").click(function(){
         $(".alls").show();  
         $(".hero").hide();  
         $(".dash").hide(); 

        });
         $("#search2").click(function(){
         $(".alls").show();  
         $(".hero").hide();  
         $(".dash").hide(); 

        });
        $("#close_user").click(function(){
         $(".alls").hide();  
         $(".hero").show();  
         $(".dash").show(); 

        });
        $("#loader").hide();
        $("#error").hide();
        $("#submits").click(function(){
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
               var match = data.match("Upload Successful");
                var matchs = data.match("your image type is unacceptable");
                var jarvis = new Artyom();
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: 'Upload Successful'
                });
               jarvis.say('upload Successful');
                var a =setTimeout(function(){
                location.reload(true);
                },5000);
                  

                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                     jarvis.say('your image type is unacceptable');
                };
               
               
             
                
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
         $("#submitss").click(function(){
        $("#main").hide();
        $("#loader").show();
        var form = $("#words");
        var formData = new FormData($("#words")[0]);

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
               var match = data.match("Upload Successful");
                var matchs = data.match("your image type is unacceptable");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
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
<!--===============================================================================================-->
<!--===============================================================================================-->

      
  <style>
  .container{
    margin: 0 auto;
}


.container .gallery a img {
  float: left;
  width: 20%;
  height: auto;
  border: 2px solid #fff;
  -webkit-transition: -webkit-transform .15s ease;
  -moz-transition: -moz-transform .15s ease;
  -o-transition: -o-transform .15s ease;
  -ms-transition: -ms-transform .15s ease;
  transition: transform .15s ease;
  position: relative;
}

.container .gallery a:hover img {
  -webkit-transform: scale(1.05);
  -moz-transform: scale(1.05);
  -o-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
  z-index: 5;
}

.clear {
  clear: both;
  float: none;
  width: 100%;
}
   #f{
    transform: translate(-0%,-50%);
    transition: all 1s;
    width: 5%;
    height: 45px;
    border:none;
    color: white;
    box-sizing: border-box;
    border-radius: 50px;
   
}

#k{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;;
    height: 37px;
    line-height: 30px;
    outline: 0;
    border: 0;
    display: none;
    font-size: 1em;
    border-radius: 70px;
    padding: 0 20px;
}
#k placeholder{
  color: white
}
#da{
  position: absolute;
    top: 0;
    left: 0;
    width: 100%;;
    height: 42.5px;
    line-height: 30px;
    outline: 0;
    border: 0;
    display: none;
    font-size: 1em;
    border-radius: 20px;
    padding: 0 20px;
}

#s{
    box-sizing: border-box;
    padding: 13px;
    width: 42.5px;
    height: 42.5px;
    position:absolute;
    top: -4px;
    right: 0;
    border-radius: 50%;
    color:white;
    transition: all 1s;
}

#dass{
  transform: translate(-10%,-50%);
    transition: all 1s;
     width: 23.5px;
    height: 28.5px;
    background:<?php echo $_SESSION['color'];?>;
    color: white;
    box-sizing: border-box;
    border-radius: 46%;

    /*border: 4px solid white;*/
    padding: 12px;
    
}
#f:hover{
    width: 60%;
    cursor: pointer;
}

#f:hover input{
    display: block;
    color:<?php echo $_SESSION['color'];?>;

}

#f:hover #s{
    background:<?php echo $_SESSION['color'];?>;
    color: white;
}

   @media only screen and (max-height: 200px) {
        [class*="nav-tabs"]
        {
          position:fixed;
          z-index: 9;
          background-color:#fff;
          margin-top:-11%;
        }
        [class*=tab-content]
        {
          margin-top:5%;
        }
    }
section .section-title {
    text-align: center;
    color: #007b5e;
    
    text-transform: uppercase;
}
.camera-button {
  position: absolute;
  bottom: 30px;
  right: 30px;
  z-index: 100;
  height: 50px;
  width: 50px;
  border-radius: 100%;
  background-color:<?php echo $_SESSION['color']; ?>;
  box-shadow: 2px 2px 10px 1px rgba(0,0,0,0.58);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: scale(0.92);
          transform: scale(0.92);
}
.social-button.facebook-button {
  background: url("") no-repeat center;
}
.social-button.facebook-button.active {
  bottom: 95px;
  right: 40px;
}
#dass{
  transform: translate(-10%,-50%);
    transition: all 1s;
     width: 45.5px;
    height: 45.5px;
    background:<?php echo $_SESSION['color'];?>;
    color: white;
    box-sizing: border-box;
    border-radius: 46%;

    /*border: 4px solid white;*/
    padding: 13px;
    
}

.social-links {
    position: relative;
    transition: 0.5s;
    float: right;
    background-color:<?php echo $_SESSION['bodybgcolor'] ?>;
    padding: 10px 10px;
}
.social-links ul{
    margin: 0px;
    padding: 0px;
    bottom: 10px;
} 
.social-links ul li {
    text-align: center;
    margin: 4px 0px;
    list-style: none;
}
.social-links ul li a .fa{
    color: #fff;
    font-size: 22px;
    display: table;
    margin: 0 auto;
    padding-top: 15px;
    width: 50px;
    height: 35px;
}
.social-links ul li a i.fa-facebook{
    color: #475993;  
}
.social-links ul li a i.fa-twitter{
    color: #55acee;
}
.social-links ul li a i.fa-google-plus{
    color: #f73533;
}
.social-links ul li a i.fa-instagram{
    color: #e43367;
}
.social-links ul li a i.fa-youtube{
    color: #ed2124;
}
.social-links ul li a .fa:hover {
    opacity: 0.8;
}
.social-links ul li a {
    display: block;
    height: 100%;
    text-decoration: none;
}
.social-share {
    position: fixed;
    height: 300px;
    top: 25%;
    right: 0px;
}
.share-btn.hide-links {
  
}
.share-btn.show-links {
     transform: translateX(180deg);
}
.share-btn {
  margin-top: 135px;
    background-color: transparent;
    border: none;
    width: 50px;
    height: 50px;
    top: 4px;
    margin-right:-200px;
    position: relative;
    transition: 0.7s all ease-in;
    color:white;
    font-size: 25px;
}
.ass{
  bottom: 30px;
  right: 10px;
  z-index: 100;
  height: 50px;
  width: 50px;
  border-radius: 100%;
  background-color:<?php echo $_SESSION['color']; ?>;
  box-shadow: 2px 2px 10px 1px rgba(0,0,0,0.58);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: scale(0.92);
          transform: scale(0.92);
}
/* Custom Styles */

.avatar {
    width: 48px;
    height: 48px;
    display: flex;
    position: relative;
    font-size: 1.25rem;
    align-items: center;
    flex-shrink: 0;
    line-height: 1;
    user-select: none;
    border-radius: 50%;
    justify-content: center;
}

.avatar-xl {
    width: 96px;
    height: 96px;
}

.avatar-img {
    color: transparent;
    width: 100%;
    height: 100%;
    object-fit: cover;
    text-align: center;
    text-indent: 10000px;
    border-radius: 50%;
}

.avatar-status {
  position: absolute;
  bottom: 0;
  right: 0;
  display: inline-flex;
  flex-shrink: 0;
  justify-content: center;
  align-items: center;
  white-space: nowrap;
  text-align: center;
  vertical-align: baseline;
  border: 0.125rem solid #fff;
  width: 1.3125rem;
  height: 1.3125rem;
  line-height: 1;
  font-size: 0.625rem;
  border-radius: 50%;
}

.btn-icon {
  position: relative;
  display: inline-flex;
  flex-shrink: 0;
  justify-content: center;
  align-items: center;
  font-size: 1rem;
  width: 3rem;
  height: 3rem;
  padding: 0;
}
     </style>
<!--===============================================================================================-->

<script type="text/javascript">
       $(document).scroll(function (){
        var x = $(window).scrollTop();
        if (x >100) {
          $('.nav-tabs.aw').fadeIn().css({"position":"fixed","top":"0","width":"100%"});
        }else{
          $('.nav-tabs.aw').css({"position":"relative","top":"auto"});
        }
       });
</script>
<!--===============================================================================================-->

</head>
<!--===============================================================================================-->



<body id="page-top" onload="searchBass('');searchBases('');searchBasey('');notify('');set();searchBaseyk('');View('');">
  <?php
                     if (isset($msn)) {
                     echo "<script>
                     $(document).ready(function(){
                      var a = 'You are not allowed to delete this post';
                 
                     var b= alert(a);
                     if(b){
                        setInterval('refreshPage()',1500);
                    function refreshPage(){
                     window.location.href = '../app/dashboard';
                    }
                     }
                      });
                     
                    
                          </script>
                        "; 
                   }

                   ?> 

  <!--===============================================================================================-->
                  

  <!-- Page Wrapper -->
  <form id="runs" action="logout.php" method="post"></form>
    
  </form>
  <div id="wrapper">
<!--===============================================================================================-->

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark  toggled accordion" id="accordionSidebar" style=" background-color:<?php echo $_SESSION['headerbgcolor']; ?>;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
        <p style="font-size:16px;margin-top:25px;color:white"> Vchat</p>
        </div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active" style="margin-top:pc">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span class="text-gray-500">Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading text-gray-500">
        User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-users"></i>
          <span class="text-gray-500">Request</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded" style="background:<?php echo $_SESSION['bodybgcolor']; ?>">
            <h6 class="collapse-header text-gray-600">Friend Request:</h6>
            <a class="collapse-item" href="friend_request" style="color:grey">Friend Request</a>
          
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-phone"></i>
          <span class="text-gray-500">Calls</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded" style="background:<?php echo $_SESSION['bodybgcolor']; ?>">
            <h6 class="collapse-header text-gray-600">Call:</h6>
            <a class="collapse-item" href="call" style="color:grey;">Audio Call</a>
            <a class="collapse-item" href="call" style="color:grey;">Video Call</a>

          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading text-gray-500">
        Settings
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-cog"></i>
          <span class="text-gray-500">Account settings</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded" style="background:<?php echo $_SESSION['bodybgcolor']; ?>; ?>">
            <h6 class="collapse-header text-gray-600" style="">User Account:</h6>
            <a class="collapse-item" href="edit_profile" style="color:grey">Edit Profile</a>
            <a class="collapse-item" href="edit_walpaper" style="color:grey">Edit Wallpaper</a>
            <a class="collapse-item" href="edit_theme" style="color:grey">Edit Theme</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header text-gray-600">Login Settings:</h6>
            <a class="collapse-item" href="edit_password" style="color:grey">Edit Password</a>
            
          </div>
        </div>
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

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light  topbar mb-4 " style=" color:<?php echo $_SESSION['color']; ?>;background-color: <?php echo $_SESSION['headerbgcolor']; ?>">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" style="color:<?php echo $_SESSION['color']?>;background:white">
            <i class="fa fa-bars" style=""></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small searchnow" placeholder="Search for all Users"  onkeyup="searchBasey(this.value)" id="search" >
              <!-- <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div> -->
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw" style="color:white"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in animated zoomIn" aria-labelledby="searchDropdown">

                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small searchnow" placeholder="Search for all Users"  onkeyup="searchBasey(this.value)" aria-label="Search" aria-describedby="basic-addon2" id="search2">
                   <!--  <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div> -->
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
             <?php
             $t = $_SESSION['color'];
              require 'dc.php';
              $result = mysqli_query($con, "select * from clients_tb where email !='$_SESSION[email]' and active=1");
              while ($r = mysqli_fetch_array($result)) {
              $id = $r ['client_id'];
               $_SESSION['las']=$r['passport'];
              }

              ?>
     
         <li class="nav-item dropdown no-arrow mx-1">
              
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-moon " style="color:<?php echo $_SESSION['bodybgcolor']; ?>;" onclick="mode()"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
            </li>
<!--===============================================================================================-->

      <form id="modes" action="night.php" method="post">
      <input type="text" name="color" value="black" hidden>
      </form>
       <form id="nmodes" action="night.php" method="post">
      <input type="text" name="color" value="light" hidden>
      </form>

<!--===============================================================================================-->
    <script>
          function mode(){
     <?php
    if ($_SESSION['status']=='off') {
    ?>
        var form = $("#modes");
        var formData = new FormData($("#modes")[0]);

          $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                var b = data;
               var match = data.match("dark mode enabled");
                var matchs = data.match("your image type is unacceptable");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
              setTimeout(function(){location.reload(true)},2000);
                  
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
            <?php
              }
          else{
              ?> 
        var form = $("#nmodes");
        var formData = new FormData($("#nmodes")[0]);

          $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                var b = data;
               var match = data.match("Upload Successful");
                var matchs = data.match("dark mode deactivated");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                
                
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                 setTimeout(function(){location.reload(true)},2000);
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
              <?php
              }
              ?>
              }
            </script>
  <!--===============================================================================================-->

            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw" style="color:white"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"><?php echo $_SESSION['number_request']; ?></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in animated zoomIn" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header text-gray-400" style="background: <?php echo $_SESSION['headerbgcolor'];?>; border-color: white">
                  Notifications
                </h6>
                 <a class="dropdown-item  snotes" href="#">
                  
                </a>

                <script>
              function notify(s)
                {
                 c = s;
                 $.post("notify.php",{first:c},function(response) {
                  var arr = JSON.parse(response);
                  var i;
                  var out = "";
                  for(i = 0; i < arr.length; i++) {
        out += " <a class='dropdown-item d-flex align-items-center' href='notify_main?id="+arr[i].sender+"'><div class='mr-3'><div class='icon-circle bg-success'><img src='"+arr[i].sender_pic+"' alt='Person' width='30' height='30' style='border-radius:50%'></div></div><div><div class='small text-gray-500'> <b style='color:<?php echo $_SESSION[color];?>'>"+arr[i].sender_name+"</b> </div>"+arr[i].message+"</div></a> "
        ;
          }
          $('.snotes').html(out);
            });
         
           }
         </script>
               
              
        
              </div>
            </li>

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small"><?php echo $_SESSION['username']; ?></span>
                <img class="" >
                 <?php echo "<img src='".$_SESSION['pass']."'  style='width:40px;height:40px;border-radius: 50%' >";?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in animated zoomIn" aria-labelledby="userDropdown" style="background:<?php echo $_SESSION['bodybgcolor']; ?>">
               <a class="dropdown-item text-gray-600" href="new_group" >
                  <i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400" ></i>
                  New Group
                </a>
                <a class="dropdown-item text-gray-600" href="settings">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400" ></i>
                  Settings
                </a>
               
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-gray-600" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="contain">
<section id="tabs" style="height:25px;margin-top:-30px;color: color:white;">
   <div class="nav nav-tabs aw nav-fill bottom " id="tabs nav-tab" role="tablist" style="background:<?php echo $_SESSION['headerbgcolor']; ?>; color:<?php echo $_SESSION['color']; ?>;height:50px">
        <a class="nav-item nav-link active text-gray-400" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-size:16px">Home</a>
        <a class="nav-item nav-link text-gray-400" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" style="font-size:16px">Chats</a>
        <a class="nav-item nav-link text-gray-400" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false" style=" color:<?php echo $_SESSION['color']; ?>;font-size:16px">Groups</a>
          <a class="nav-item nav-link text-gray-400" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false" style=" color:<?php echo $_SESSION['color']; ?>;font-size:16px">Profile</a>
    </div>
    <?php
   require 'dc.php';
   $c = mysqli_query($con,"select * from notification_tb where status='unseen' and reciever='$_SESSION[ctid]'");
  $_SESSION['number']=mysqli_num_rows($c);  

  $d = mysqli_query($con,"select * from friend_tb where emails ='$_SESSION[email]' and friends_id='$_SESSION[ctid]' ");
  $_SESSION['number_friends']=mysqli_num_rows($d);    

  $e = mysqli_query($con,"select * from request_tb where friends_id = '$_SESSION[ctid]' ");
  $_SESSION['number_request']=mysqli_num_rows($e);    
  
  $f=mysqli_query($con,"select * from groupmember_tb where mememail = '$_SESSION[email]' and member_id = '$_SESSION[ctid]' ");
  $_SESSION['number_group']=mysqli_num_rows($f); 


   ?>
    <!--===============================================================================================-->
    <div class=" tab-content" id="nav-tabContent" style="background:<?php echo  $_SESSION['bodybgcolor']?>;" >
    <!--===============================================================================================-->
                          <!--   THE BEGINNING OF HOME -->
    <div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style="background:<?php echo $_SESSION['bodybgcolor']; ?>;min-height:80vh;max-height:1000vh">
     
      <div class="container" style="margin-top:-25px;">

   
      <hr style="margin-top: 25px">
      <script>
        function set(){
        $(document).ready(function(){
          $(".bols").hide();
          $(".searchnow").focus(function(){
              $(".bols").show();
          });
        });
      };
      </script>
        <div class='card shadow mb-4 alls' style="background:<?php echo $_SESSION['bodybgcolor']; ?>;border-color:<?php echo $_SESSION['bodybgcolor']; ?>;">
             
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background:<?php echo $_SESSION['bodybgcolor']; ?>">
                  <h6 class='m-0 font-weight-bold ' style="color:<?php echo $_SESSION['color']; ?>;">All Users</h6>
                  <div class='dropdown no-arrow'>
                    <a class='dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      <i class='fas fa-ellipsis-v fa-sm fa-fw text-gray-400'></i>
                    </a>
                    <div class='dropdown-menu dropdown-menu-right shadow animated--fade-in' aria-labelledby='dropdownMenuLink' style="background:<?php echo $_SESSION['bodybgcolor']; ?>">
                       <div class='dropdown-header'>More Option:</div>
                      <div class='dropdown-divider'></div>
                      <a class='dropdown-item text-gray-600' href='#' id="close_user">Close Search</a>
                    </div>
                  </div>
                  
                </div>
<!--======================================User Search===============================================-->
               <div class="ss">
                 
               </div>
                </div>
<!--===============================================================================================-->
               <!--   THE News Feed -->
<div class="container">
  <section class="py-4" style="color:<?php echo $_SESSION['color']; ?>">
          <h1 class="h3">Feed</h1>

<div class="feed">
  
</div>
</section> 
</div>








                  
           
     <script>
              function View(s)
                {
                 c = s;
                 $.post("view.php",{first:c},function(response) {
                  var arr = JSON.parse(response);
                  var i;
                  var out = "";
                  for(i = 0; i < arr.length; i++) {
        out += 
        "<div class='mb-4 py-4'><div class='d-flex justify-content-between align-items-center'><div class='d-flex flex-row align-items-center'><div class='avatar mr-3'><img class='avatar-img' src='"+arr[i].user_pic+"' alt='avatar'></div><div><h2 class='h6 mb-0'>Jane Doe</h2><p class='small text-muted mb-0'>5 min ago</p></div></div><button class='btn btn-icon btn-text-dark dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i data-feather='more-vertical'></i></button><ul class='dropdown-menu dropdown-menu-right'><li><a class='dropdown-item' href='#'>Save</a></li><li><a class='dropdown-item' href='#'>Unsubscribe</a></li></ul></div><img class='rounded w-100 mt-3' src='"+arr[i].upload+"' alt='feed'><div class='mt-3'><p class='text-muted mb-0'>"+arr[i].message+"</p></div><div class='d-flex justify-content-between'><button class='btn btn-text-dark d-flex align-items-center px-1' type='button'><i class='mr-1' data-feather='heart'></i>432</button><button class='btn btn-icon btn-text-dark' type='button'><i data-feather='share-2'></i></button></div></div>";
          }
          $('.feed').html(out);
            });
           }
         </script>
         

        
       
        <?php
             $t = $_SESSION['color'];
              require 'dc.php';
              $result = mysqli_query($con, "select * from clients_tb where email !='$_SESSION[email]' and active=1");
              while ($r = mysqli_fetch_array($result)) {
              $id = $r ['client_id'];
               $_SESSION['las']=$r['passport'];
              }

          ?>
      <script>
              function searchBasey(s)
                {
                 c = s;
                 $.post("searchTest.php",{first:c},function(response) {
                  var arr = JSON.parse(response);
                  var i;
                  var out = "";
                  for(i = 0; i < arr.length; i++) {
        out += "<a href='all_users_profile?id="+arr[i].user_id+"'><div class='animated zoomIn chip' style='color:<?php echo $_SESSION['color'] ?>;width:100%;background:rgba(0, 0, 0, 0.1);'><div style='width:90%;padding-top:-10px'><img src='"+arr[i].passport+"' alt='Person' width='96' height='96'>"+'<p style="font-size:px;padding-top:-30px;color:<?php echo $_SESSION['color'] ?>;">'+arr[i].username+"</div></div></a><br><br>";
          }
          $('.ss').html(out);
            });
           }
         </script>
      </div>
       <?php
          $t = $_SESSION['color'];
        require 'dc.php';
      $randoms=[];
     $k=mysqli_query($con, "select * from view_tb where client_id='$id'");
      while ($s=mysqli_fetch_assoc($k)) {
      $randoms[]=$s['random'];
      }
       
          $y=mysqli_num_rows($result); 

          
        ?>
          <script>
              function searchBaseyk(s)
                {
                 c = s;
                 $.post("case.php",{first:c},function(response) {
                  var arr = JSON.parse(response);
                  var i;
                  var out = "";
                  for(i = 0; i < arr.length; i++) {
                   
        out += " ";
          }
          $('.gos').html(out);
         
            });
           }
         </script>
 <div class="camera-button "></div>
<div class="social-button twitter-button fa fa-phone fa-2x" style="color:<?php echo $_SESSION['color']; ?>;" hidden></div>

<div class="social-button facebook-button fa fa-camera fa-2x" data-toggle="modal" data-target="#PrimaryModalftblack" style="color:<?php echo $_SESSION['color']; ?>;font-size:25px;" ></div>
<div class="social-button scroll-to-top pinterest-button fas fa-angle-up fa-2x"  style="color:<?php echo $_SESSION['color']; ?>;" href="#page-top" hidden></div>
   
   </div> 
<!--===============================================================================================-->
                                  <!--    <THE Info TAB STARTS> -->
    <div class=" tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab" style="min-height:80vh;max-height:1000vh">
         <div class="container ro " style="padding-top:10px">

            <!-- Earnings (Monthly) Card Example -->
             <!--    <div class="col-xl-3 col-md-6 mb-4 animated zoomIn"> -->
            <div class=" mb-4 animated zoomIn">
              <div class="card border-left-info shadow h-100 py-2" style="background:<?php echo $_SESSION['bodybgcolor']; ?>">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">User</div>
                      <div class="h5 mb-0 font-weight-bold" style="color:<?php echo $_SESSION['color']; ?>"><?php echo $_SESSION['username']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

               <div class=" mb-4 animated zoomIn">
              <div class="card border-left-primary shadow h-100 py-2" style="background:<?php echo $_SESSION['bodybgcolor']; ?>">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Friends </div>
                      <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold" style="color:<?php echo $_SESSION['color']; ?>"><?php echo $_SESSION['number_friends']; ?></div>
                    </div>
                    <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width:<?php echo "$_SESSION[number_friends]px"; ?>; " aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class=" mb-4 animated zoomIn" >
              <div class="card border-left-primary shadow h-100 py-2" style="background:<?php echo $_SESSION['bodybgcolor']; ?>">
                <div class="card-body" >
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Groups</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold" style="color:<?php echo $_SESSION['color']; ?>"><?php echo $_SESSION['number_group']; ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width:<?php echo "$_SESSION[number_group]px"; ?>; " aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
             
              <div class=" mb-4 animated zoomIn">
              <div class="card border-left-info shadow h-100 py-2" style="background:<?php echo $_SESSION['bodybgcolor']; ?>">
                <div class="card-body">
                  <div class="row no-gutters align-items-center"> 
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Friend Requests</div>
                       <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold" style="color:<?php echo $_SESSION['color']; ?>"><?php echo $_SESSION['number_request']; ?></div>
                    </div>
                    <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width:<?php echo "$_SESSION[number_request]px"; ?>; " aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                  </div>

                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
          </div>

        <?php
        require 'dc.php';
        $result = mysqli_query($con, "select * from friend_tb where and emails ='$_SESSION[email]' and friends_id='$_SESSION[ctid]'");
        while ($r = mysqli_fetch_array($result)) {
        $id = $r ['client_id'];
        $_SESSION['las']=$r['passport'];

          }

          ?>
      
        </div>
<!--===============================================================================================-->
<!--===============================================================================================-->
                                  <!--    <THE FRIEND TAB STARTS> -->
    <div class=" tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" style="background:<?php echo $_SESSION['bodybgcolor'];?>;min-height:80vh;max-height:1000vh" >
    <div class="container-fluid" style="padding-top:0px;">
        <div class="car shadow mb-4 gray-100" style="width:100%;background:<?php echo $_SESSION['bodybgcolor'];?>;border-color:<?php echo $_SESSION['bodybgcolor'];?>">
                <!-- Card Header - Accordion -->
                <a class="d-block card-header py-3" data-toggle="collaps" role="" aria-expanded="true"  style="background:<?php echo $_SESSION['bodybgcolor']; ?>;height:50px">
                  <h6 class="m-0 font-weight-bold " style="color:<?php echo $_SESSION['color']; ?>">All Friends [<?php echo $_SESSION['number_friends']; ?>]</h6> 
      <form class="containe" id="f" style="float:right;font-size:13px;">
        <input type="search" id="k" placeholder="Search for all Friends"  onkeyup="searchBases(this.value)" >
      <i class="fa fa-search text-gray-600" style="font-size:15px;" id="s"></i>
    </form>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <br>
                  <div class="container-fluid" id="chatbox"></div>
                </div>
              </div>
    

      </div>

        <?php
        require 'dc.php';
        $result = mysqli_query($con, "select * from friend_tb where and emails ='$_SESSION[email]' and friends_id='$_SESSION[ctid]'");
        while ($r = mysqli_fetch_array($result)) {
        $id = $r ['client_id'];
        $_SESSION['las']=$r['passport'];

          }

          ?>

         <script>

        function searchBases(s)
          {

             c = s;
             $.post("search.php",{first:c},function(response) {
             var arr = JSON.parse(response);
             var i;
            var out = "";
          for(i = 0; i < arr.length; i++) {
           out += "<a href='chat_room?user="+arr[i].user_id+"'><div class='animated zoomIn chip text-gray-600' style='color:<?php echo $_SESSION['color'] ?>;width:100%;font-weight:bold;font-size:12px;background:rgba(0, 0, 0, 0.1);'><img src='"+arr[i].passport+"' >"+arr[i].username+"</div><br><br></a>";

               }
             $('#chatbox').html(out);
                  });
                  }
        </script>
   

 <div class="social-share">
    <button class="ass share-btn" id="alts"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
    <button class="ass share-btn" id="alt" style="display:none"><i class="fa fa-chevron-right" aria-hidden="true" style="cursor:pointer;color:white"></i></button>
    <div class="social-links" style="margin-top:80px">
      <ul>
        <li><a href="#" class="voicerecord"><i class="fa fa-phone voicerecord" aria-hidden="true" style="color:<?php echo $_SESSION['color']; ?>;cursor:pointer;"></i></a></li>
        <li><a href="#" ><i class="fa fa-imag" aria-hidden="true" style="color:<?php echo $_SESSION['color']; ?>;cursor:pointer;"></i></a></li>
        <li><a href="#"><i class="fa fa-video" aria-hidden="true" style="color:<?php echo $_SESSION['color']; ?>;cursor:pointer;"></i></a></li>

    
      </ul>
    </div>
  </div>
  <script type="text/javascript">
  $(".social-links").css('right', '-70px');
   $( ".share-btn" ).css( 'right', '0px' );
clicked = true;
    $(document).ready(function(){

        $(".share-btn").click(function(){
            if(clicked){
                $(".social-links").css('right', '0px');
                $("#alts").hide();
                $("#alt").show()
                 $( ".share-btn" ).css( 'right', '50px' );
                $( ".share-btn" ).addClass( "hide-links" );

   
                clicked  = false;
            } else {
               $("#alts").show();
                $("#alt").hide()
                $(".social-links").css('right', '-70px');
                $( ".share-btn" ).css( 'right', '0px' );
                clicked  = true;
            }   
        });
    });
</script>
        </div>
<!--===============================================================================================-->
                                    <!--   <FRIENDS TABS END> -->

<!--===============================================================================================-->
                                <!--   <GROUP TABS STARTS> -->

<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-contact-tab" style="background:<?php echo $_SESSION['bodybgcolor'];?>;min-height:80vh;max-height:1000vh""min-height:80vh;max-height:1000vh" >
    <div class="container-fluid" style="padding-top:0px">
    <div class="car shadow mb-4 gray-100" style="width:100%;background:<?php echo $_SESSION['bodybgcolor'];?>;border-color:<?php echo $_SESSION['bodybgcolor'];?>">
                <!-- Card Header - Accordion -->
                <a class="d-block card-header py-3" data-toggle="collaps" role="" aria-expanded="true"  style="background:<?php echo $_SESSION['bodybgcolor']; ?>;height:50px">
                  <h6 class="m-0 font-weight-bold " style="color:<?php echo $_SESSION['color']; ?>">All Groups [<?php echo $_SESSION['number_group']; ?>]</h6> 
      <form class="containe" id="f" style="float:right;font-size:13px;">
        <input type="search" id="k" placeholder="Search for all Groups"  onkeyup="searchBass(this.value)" >
      <i class="fa fa-search text-gray-600" style="font-size:15px;" id="s"></i>
    </form>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <br>
                  <div class="container-fluid" id="chatboxs"></div>
                </div>
              </div>
      </div>
      

         <?php
              require 'dc.php';
              $test=mysqli_query($con, "select * from groupmember_tb where group_name='$_SESSION[j]' and mememail = '$_SESSION[email]' and member_id = '$_SESSION[ctid]'");
              while ($tep = mysqli_fetch_array($test)) {
              $ids= $tep['group_id'];
              $_SESSION['group_pics']=$tep['grouppic'];
              $_SESSION['admin_id']=$tep['admin_id'];
              $_SESSION['group_name']=$tep['group_name'];
              $gpn= $_SESSION['group_name'];
                }
                ?>
     <script>
              function searchBass(s)
              {
                c = s;
                $.post("searchs.php",{first:c},function(response) {
                var arr = JSON.parse(response);
                var i;
                var out = "";
            for(i = 0; i < arr.length; i++) {
            out += "<a href='groupchat?gpn="+arr[i].group_name+"& gid="+arr[i].group_id+"'><div class='chip animated zoomIn text-gray-600' style='color:<?php echo $_SESSION['color'] ?>;width:100%;font-size:11px;background:rgba(0, 0, 0.2, 0.1); '><img src='"+arr[i].grouppic+"' alt='Person' width='96' height='96'>"+arr[i].group_name+"</div><br><br></a>";

            }
            $('#chatboxs').html(out);
            });
            }
    </script>
   
  </div>











    </div>
    </section>

  



          





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
    <footer class=" fixed-bottom" style="height:30px;font-size:15px;background:<?php echo $_SESSION['bodybgcolor']; ?>;color:#673AB7;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Vchat &copy;  2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up" style="position:absolute;"></i>
  </a>
  
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:15pc;color:<?php echo $_SESSION['color'] ?>;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background:<?php echo $_SESSION['bodybgcolor'] ?>;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you ready to Logout</div>
        <div class="modal-footer">
         <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn" href="" id="sub">Logout</button>
         
        </div>
      </div>
    </div>
  </div>
  




 <div id="myModal" class="modal">
                     <!-- The Close Button -->
      <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                    <!-- Modal Content (The Image) -->
              <img class="modal-content" id="img01">
                      <!-- Modal Caption (Image Text) -->

</div>

                                    <!-- <UPLOAD FORM> -->
       <div id="PrimaryModalftblack" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog" >
          <div class="modal-dialog" style="margin-top:10pc;">
         <div class="modal-content">
          <div class="modal-body" style="background:-webkit-linear-gradient(top,<?php echo $_SESSION['bodybgcolor']; ?>,rgba(0, 0, 0, 0.15));">
           <div class="">
            <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active text-gray-600" id="nav-homes-tab" data-toggle="tab" href="#nav-homes" role="tab" aria-controls="nav-home" aria-selected="true" ">Picture Post</a>
            <a class="nav-item nav-link text-gray-600" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" >Text Post</a>
          </div>
          </nav>
                   
      <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

      <div class="tab-pane fade show active" id="nav-homes" role="tabpanel" aria-labelledby="nav-homes-tab">
        <form id="data" role="form" action="upload.php" method="post" enctype="multipart/form-data">
      <label class="custom-file-upload" id="dass" style="margin-top:50px">
        <input type="file" name="fileToUpload"  hidden="hidden" >
        <i class="fa fa-camera" style=" color:white;background: ;float:left;margin-top:2px" name="pics"></i>
      </label>
      <h6 class="text-gray-600" style="font-size:12px;margin-top:px">[Picture's Comment Here]</h6>
        <textarea class="form-control" name="message"></textarea><br>
        <div>
           <div class="text-center u-margin-top-big">
                <a class="btn text-gray-600" data-dismiss="modal" href="#">Cancel</a>
            </div> 
                <div class="text-center u-margin-top-big">
                <a href="#" id="submits" class="btn text-gray-600">Post</a>
            </div>
        </div>
        </form> 
      </div>

      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
       <form id="words" role="form" action="word.php" method="post" enctype="multipart/form-data">
        <h6 class="text-gray-600" style="font-size:12px;margin-top:70px">[Type Post Here]</h6>
        <textarea class="form-control" name="message"></textarea><br>
           <div>
           <div class="text-center u-margin-top-big">
                <a class="btn text-gray-600" data-dismiss="modal" href="#"  style=" color:<?php echo $_SESSION['color']; ?>;">Cancel</a>
            </div> 
                <div class="text-center u-margin-top-big">
                <a href="#" id="submitss" class="btn text-gray-600">Post</a>
            </div>
        </div>  
      </div>


      <script>
         $("#submits").click(function(){
           
        var form = $("#datas");
        var formData = new FormData($("#datas")[0]);

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
               var match = data.match("Upload Successful");
                var matchs = data.match("your image type is unacceptable");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
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
      </script>
     
    

     
            
         <!--  <img src="<?php echo $_SESSION[pass] ?>" style="width:60px;height:60px;border-radius:20%;"><br>
          <h6 style=" color:<?php echo $_SESSION['color']; ?>;font-size:13px;margin-top:20px">[Choose Picture to Upload]</h6>
         
        
        
          <div class="">
              
                <div class="text-center u-margin-top-big">
                <a class="btn" data-dismiss="modal" href="#"  style=" color:<?php echo $_SESSION['color']; ?>;">Cancel</a>
            </div> 
                <div class="text-center u-margin-top-big">
                <a href="#" id="submits" class="btn " style=" color:<?php echo $_SESSION['color']; ?>;">Post</a>
            </div> 
    
          </div>
          </form> 
          </div>
          </div>
          </div> -->




















<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >$(document).ready(function(){
    
    // Social plus button function
    $('.camera-button').click(function(){
        $(this).toggleClass('open');
        $('.social-button').toggleClass('active');
    });
       $(".bols").hide();
      });
    
        </script>







  <script src="../md/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../md/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
    <script src="../md/js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="../css/wowjs/dist/wow.min.js"></script>

   
    <script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script>  
   
    <script src="../js/notifications/Lobibox.js"></script>
    <script src="../js/notifications/notification-active.js"></script>

</body>
</html>

              <?php
}
else{
  header("location:sign_in");
}
?>