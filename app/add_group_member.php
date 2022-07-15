<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email'])){ 
 require 'dc.php';
    $jeremiah = $_GET['gpn'];
    $j_id     = $_GET['gid'];
    $_SESSION['as']=$jeremiah;
    $_SESSION['bs']=$j_id;
  $set=mysqli_query( $con, "select * from groupmember_tb where mememail= '$_SESSION[email]' and group_name='$jeremiah' and group_id='$j_id'");
while ($ten=mysqli_fetch_array($set)) {
  $wet=$ten['grouppic'];
   $_SESSION['group_picture']=$ten['grouppic'];
   $_SESSION['group_mainname']=$ten['group_name'];
  $_SESSION['group_mainid']=$ten['group_id'];
  
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>V-Chat Group Members | V-Chat</title>
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
<!--===============================================================================================-->
 <script>
        new WOW().init();
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
     max-height:1000vh
      
    
    }
          
     </style>
      <script>
      function Actions(){
     $(document).ready(function(){
           var form = $("#formals");
        var formData = new FormData($("#formals")[0]);

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
               var match = data.match("member added successfully");
               var matchs = data.match("Already a member");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
               
                },5000);
                  var jarvis = new Artyom();
                 jarvis.say("member added successfully");
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                   var jarvis = new Artyom();
                 jarvis.say("Already a member");
                };
               
                
                
              },
              error: function(data){
                alert("not success");
              },
              cache: false,
              contentType: false,
              processData: false
         

         }); 
        }); 
        };
       </script>
</head>
<body onload="request()">
  <div><nav class="navbar navbar-expand navbar-light  topbar mb-4 fixed-top " style=" color:<?php echo $_SESSION['color']; ?>;background-color: <?php echo $_SESSION['headerbgcolor']; ?>;height:70px">
<div>
   <a href="groupchat"><i class="container-fluid fas fa-arrow-left fa-fw" style="color:white"></i></a>
</div>
<!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="width:50%">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small searchnow" placeholder="Search all Friends"  onkeyup="request(this.value)" id="search" style="height:36px;font-size: 13px;">
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
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in animated zoomIn" aria-labelledby="searchDropdown" style="margin-top:-20px">

                <form class="form-inline mr-auto w-100 navbar-search" >
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small searchnow" placeholder="Search all Friends"  onkeyup="request(this.value)" id="search2">
                   <!--  <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div> -->
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Video Call -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" >
            <div>
             <p style="text-align:center;color:white;margin-top:8px;font-size:14px;">Add member</p>
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
                 <?php echo "<img src='".$_SESSION['group_picture']."'  style='width:40px;height:40px;border-radius: 50%' >";?>
              </a>
              <!-- Dropdown - User Information -->
             
            </li>

          </ul>

        </nav></div>
 
  <div class="container-fluid" style="margin-top:100px;">
           <div id="chatbox">
      
            </div>
        </div>
 
      


           <?php
        require 'dc.php';
        $result = mysqli_query($con, "select * from friend_tb where client_id=$_SESSION[ctid]");
        while ($r = mysqli_fetch_array($result)) {
        $id = $r ['client_id'];
        $_SESSION['las']=$r['passport'];

          }

          ?>

         <script>

        function request(s)
          {

             c = s;
             $.post("add_gr_member.php",{first:c},function(response) {
             var arr = JSON.parse(response);
             var i;
            var out = "";
             for(i = 0; i < arr.length; i++) {
        out += "<div  class=' slideInRight chip bg-gray-300' style='color:<?php echo $_SESSION['color'] ?>;font-size:12px;width:100%'>  <img src='"+arr[i].friends_pic+"' alt='' />"+arr[i].friends_username+"<button onclick='add("+arr[i].friends_id+" ) ' class='btn pd-setting-ed' style='float:right;height:50px' data-target='#addModal' data-toggle='modal'><i class='fa fa-plus' aria-hidden='true'></i></button><br> </div><br><br> </div> </div>";
          }
          $('#chatbox').html(out);
            });
           }
        </script>
         <script>
    function add(e) {
    // alert(e);
    document.getElementById('abc').value=e;
 };
</script>
<form action="member" method="post" id="formals" hidden>
  <input type="text" name="id" value="" id='abc' hidden>
</form>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:15pc;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background:<?php echo $_SESSION['bodybgcolor']; ?>;color:<?php echo $_SESSION['color']; ?>;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Want to add friend to group?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <button class="btn text-gray-600" data-dismiss="modal" >Cancel</button>
        <button class="btn text-gray-600" onclick="Actions()" id="leave_group">Add</button>
          
        </div>
      </div>
    </div>
  </div>

       <footer class="fixed-bottom" style="height:30px;font-size:15px;color:#673AB7;background:<?php echo $_SESSION['bodybgcolor'] ?>;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Vchat &copy;  2021</span>
          </div>
        </div>
      </footer>
      

    </body>
    </html>
  <?php
}
else{
  header("location:sign_in");
}
?>