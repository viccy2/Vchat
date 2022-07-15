<?php session_start();
if (isset($_SESSION['email'])|| isset($_COOKIE['email'])) {
    require 'dc.php';
    $jeremiah = $_GET['gpn'];
    $j_id     = $_GET['gid'];
  $_SESSION['group_id'] =$j_id;
  $_SESSION['j']=$jeremiah;
  $set=mysqli_query( $con, "select * from groupmember_tb where mememail= '$_SESSION[email]' and group_name='$_SESSION[j]' and group_id='$_SESSION[group_id]'");
while ($ten=mysqli_fetch_array($set)) {
  
   $_SESSION['group_picture']=$ten['grouppic'];
   $_SESSION['group_mainname']=$ten['group_name'];
  $_SESSION['group_mainid']=$ten['group_id'];
  
}

date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");

?>
<!DOCTYPE html>
<html>
  <head>
    <title>V-Chat Group Chat | Group Chat</title>
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
<link href="../app/emoji-picker/lib/css/emoj.css" rel="stylesheet">
<!-- <script src="https://static.opentok.com/v2/js/opentok.min.js"></script> -->
<script src="../app/emoji-picker/lib/js/jquery-3.2.1.min.js"></script>
<script src="../app/emoji-picker/lib/js/config.js"></script>
<script src="../app/emoji-picker/lib/js/util.js"></script>
<script src="../app/emoji-picker/lib/js/jquery.emojiarea.js"></script>
<script src="../app/emoji-picker/lib/js/emoji-picker.js"></script>

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
                var a =setTimeout(function(){
                $('#error').remove();
                },1500);
                if (b=='Member added Successfully') {
                   location.reload(true);
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
         $("#logout").click(function(){
           var form = $("#logouts");
        var formData = new FormData($("#logouts")[0]);

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
           $("#leave_group").click(function(){
          var form = $("#leave");
        var formData = new FormData($("#logouts")[0]);

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
               var match = data.match("group deleted successfully");
               var matchs = data.match("you're no longer a member");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
               window.location.href = 'home';
                },5000);
                  
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                   var a =setTimeout(function(){
               window.location.href = 'home';
                },5000);
                };
               
                var jarvis = new Artyom();
                 jarvis.say("");
                
              },
              error: function(data){
                alert("not success");
              },
              cache: false,
              contentType: false,
              processData: false
            });

         });

         });

        </script>
        

 <style type="text/css">
          .containe{
           background:<?php echo  $_SESSION['bodybgcolor']?>
            background-size: cover;
            -moz-background-size: cover;
           -webkit-background-size: cover;
           -o-background-size: cover;
           height:cover;
          }
          .mode{

           background:url(<?php echo  $_SESSION['walpss']?>) no-repeat;
            background-size: cover;
            -moz-background-size: cover;
           -webkit-background-size: cover;
           -o-background-size: cover;
                width: 100%;
    
          
          /*overflow: hidden; */
          }
          .input-field {
  width: 100%;
  border-radius: 3px;
  padding: 10px;
  border: #e0dfdf 1px solid;
    box-sizing: border-box;
}


.icon-smile:before {
    content: " ";
    width: 16px;
    height: 16px;
    display: flex;
    background: url(icon-smile.png);
}
.ass{
  bottom: 30px;
  right: 10px;
  z-index: 100;
  height: 40px;
  width: 40px;
  border-radius: 100%;
  background-color:<?php echo $_SESSION['color']; ?>;
  box-shadow: 2px 2px 10px 1px rgba(0,0,0,0.58);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: scale(0.92);
          transform: scale(0.92);
}
.type_msg{
  background-color:grey;
  border:0 !important;
  color: white !important;
  overflow-y:auto;
  -webkit-border-radius:25px;
  -moz-border-radius:25px;
  border-radius:25px;
}  
.type_msg:focus{
  box-shadow: none !important;
  outline:0px !important;
}    


     </style>
    
   
</head>
<body onload="searched()" style="background:<?php echo  $_SESSION['bodybgcolor']?>">
  <div>
  <form id="leave" action="leave_group.php" method="post"></form>
    <form id="logouts" action="logout.php" method="post"></form>
     <nav class="navbar navbar-expand navbar-light  topbar mb-4 fixed-top " style=" color:<?php echo $_SESSION['color']; ?>;background-color: <?php echo $_SESSION['headerbgcolor']; ?>">
<div>
   <a href="home"><i class="fas fa-arrow-left fa-fw" style="color:white"></i></a>
</div>
         <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-phone fa-fw" style="color:white"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Alerts -->
            
            </li>

            <!-- Nav Item - Video Call -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" >
                <i class="fas fa-video fa-fw" style="color:white"></i>
                <!-- Counter - Video Call -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - MVideo Call-->
             
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small"></span>
                <img class="" >
                 <?php echo "<img src='".$_SESSION['group_picture']."'  style='width:40px;height:40px;border-radius: 50%' >";?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in animated zoomIn" aria-labelledby="userDropdown" style="background:<?php echo $_SESSION['bodybgcolor']; ?>" >
               <a class="dropdown-item text-gray-600" href="add_group_member" >
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400" ></i>
                  Add member
                </a>
                <?php
        echo "
  <a class='dropdown-item text-gray-600' href='group_state?gid=$_SESSION[group_mainid] & gpn=$_SESSION[group_mainname]' >
  <i class='fa fa-users mr-2 text-gray-400'></i>Members
  </a>
                                " ;?>
  <?php
        echo "
  <a class='dropdown-item text-gray-600' href='edit_group?gid=$_SESSION[group_mainid] & gpn=$_SESSION[group_mainname]' >
  <i class='fa fa-cog mr-2 text-gray-400'></i>Group settings
  </a>
                                " ;?>
              
                 <a class="dropdown-item text-gray-600" href="users_profile"  data-toggle="modal" data-target="#leaveModal">
                  <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400 " ></i>
                  leave Group
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-gray-500" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-500"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav></div><br><br><br>
  
 <div class="container" style="max-height:5000000px">
    <div  id="chatbox"  >
      
    </div>

   </div>


 <div>
   <footer class="fixed-bottom" style="">
   
     <form name="message" action="">
       <p class="emoji-picker-container" id="aaa">
      <textarea class="input-field type_msg" data-emojiable="true" type="text" name="comment" id="usermsg" > 
      </textarea> 
       <span class="ass west" id="submitmsg" style="float:right;margin-top:-40px;margin-right:0px">
          <i class="fa fa-paper-plane btn " style="color:white;font-size:15px;padding-top:10px;cursor:pointer;"></i>
        </span>
    </p>
    </form>
   </footer>
 </div>

 

    
 <script>
            // FOR SENDING MESSAGE
// <!--===============================================================================================-->
   $(document).on('click','.ass',function(e){
    var get_message = $('.type_msg').val();
    // alert(get_message);
      var send = $.post("chat.php",{text:get_message});
       if (send) {
      //EMPTY MESSAGE INPUT
        $('#usermsg').next("div").html("");
        $('#usermsg').val("");
        $ ("html, body").animate({
          scrollTop: $(
              'html, body').get(0).scrollHeight
        }, 2500);
        
        
     }
   

   });
 </script>
       
    <!-- FOR GETTING MESSAGE -->
<!--===============================================================================================-->
  <script>
   function loadLog(){  


     $.ajax({
      type:"GET",
      dataType:"JSON",
      url: "./messages/<?php echo $_SESSION['group_mainid'] ?>.php",

      success: function(response){
         var len=response.length;
         // alert(len);
      var output="<div class=''>";
        for (var i=0; i<len; i++){
          // var id = response[i].id;
          var usernames=response[i].names;
           var user_id=response[i].sender_id;
          var time=response[i].time;
          var date=response[i].date;
          // var message=response[i].message;
         // alert(usernames);
         if (usernames =="<?php echo $_SESSION['username'] ?>") {
             output+="<div class='' style='width:70%;float:right;' ><span style='font-size:12px'>"+date+" @"+time+"</span><div class='card border-left-info shadow h-100 py-2' style='background:<?php echo $_SESSION['bodybgcolor']; ?>'><div class='card-body'><div class='row no-gutters align-items-center'><div class='col mr-2'><div class='h5  ' style=' font-family:Poppins;font-size:15px;margin-top:;'>"+response[i].message+"</div></div></div></div></div><br></div>";
          };
           if ((usernames !=="<?php echo $_SESSION['username']  ?>") &&(user_id!==0)) {
                output+="<div class=' ' style='width:70%;float:left;' ><span style='font-size:12px'>"+date+" @"+time+"</span> <div class='card border-left-primary shadow h-100 py-2' style='background:<?php echo $_SESSION['bodybgcolor']; ?>'><div class='card-body'><div class='row no-gutters align-items-center'><div class='col mr-2'><div class='h5 mb-0 ' style=' font-family:Poppins;font-size: 15px;'>"+response[i].message+"</div></div></div></div><span style='font-size:12px;float:right'>@"+usernames+"</span></div><br></div>";
          };
        };
           output+="</div>";
     
        $("#chatbox").html(output);


      },
       error: function(response){
                // alert("not success");
              },
             
              cache: false,
              contentType: false,
              processData: false
    });
   }
    setInterval(loadLog,1000);

     
  

 
  </script>

<!--===============================================================================================-->


 




   
  <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:15pc;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background:<?php echo $_SESSION['bodybgcolor']; ?>;color:<?php echo $_SESSION['color']; ?>;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you ready to Logout</div>
        <div class="modal-footer">
          <button class="btn text-gray-600" data-dismiss="modal" >Cancel</button>
          <button class="btn text-gray-600" id="logout">Logout</button>
          
        </div>
      </div>
    </div>
  </div>
  <center>
   <div class="modal fade" id="leaveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:15pc;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background:<?php echo $_SESSION['bodybgcolor']; ?>;color:<?php echo $_SESSION['color']; ?>;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Want to leave group?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">You will no longer be a member </div>
        <div class="modal-footer">
          <button class="btn text-gray-600" data-dismiss="modal" >Cancel</button>
        <button class="btn text-gray-600" href="leave_group.php" id="leave_group">Leave</button>
          
        </div>
      </div>
    </div>
  </div>
 <script>
           
          

            $(function () {
                // Initializes and creates emoji set from sprite sheet
                window.emojiPicker = new EmojiPicker({
                    emojiable_selector: '[data-emojiable=true]',
                    assetsPath: '../app/emoji-picker/lib/img/',
                    popupButtonClasses: 'icon-smile'
                });

                window.emojiPicker.discover();
            });


           
        </script>
  <script src="../md/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../md/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
    <script src="../md/js/sb-admin-2.min.js"></script>

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

