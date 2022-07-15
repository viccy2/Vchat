<?php session_start();
if (isset($_SESSION['email'])|| isset($_COOKIE['email'])) {
require 'dc.php';
$chatids = urldecode($_GET['user']);

$k=mysqli_query($con,"select * from clients_tb where user_id='$chatids' and validation_code=0");
while ($p=mysqli_fetch_array($k)) {
  $chatid=$p['client_id'];
  $_SESSION['cid'] = $chatid;
}
$set=mysqli_query( $con, "select * from friend_tb where client_id= '$chatid'");
while ($ten=mysqli_fetch_array($set)) {
  $wet=$ten['passport'];
  $tet=$ten['username'];
  $tets=$ten['firstname'];
  $tetss=$ten['lastname'];
  $ems=$ten['email'];
}
$sets=mysqli_query( $con, "select * from clients_tb where client_id= '$chatid'");
while ($tens=mysqli_fetch_array($sets)) {
  $tet=$tens['username'];
  $tets=$tens['firstname'];
  $tetss=$tens['lastname'];
  $weta=$tens['country'];
}

date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
 $d = mysqli_query($con,"select * from friend_tb where emails ='$ems' and friends_id='$chatid' ");
   $all_user_friends=mysqli_num_rows($d); 
   $e=mysqli_query($con,"select * from groupmember_tb where mememail = '$ems' and member_id = 'chatid' ");
  $all_user_groups=mysqli_num_rows($e); 
  $secs = mysqli_query($con,"select * from friend_tb where client_id='$_SESSION[ctid]' and friends_id= '$chatid'");
while ($y=mysqli_fetch_array($secs)) {
  $msg_id=$y['message_id'];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>V-Chat Chat | V-Chat</title>
     <title>V-Chat Dashboard | Chat Room</title>
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
<script src="../audio/src/recorder.js"></script>
<script src="../audio/src/Fr.voice.js"></script>
<!-- <script src="../audio/js/jquery.js"></script> -->
<script src="../audio/src/apps.js"></script>
 <script>
     function Action(){

     $(document).ready(function(){
        var form = $("#modes");
        var formData = new FormData($("#modes")[0]);

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
               var match = data.match("Friend deleted");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
                window.location.href = '../app/home';
                },5000);
                  var jarvis = new Artyom();
                 jarvis.say("Friend deleted");
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
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
         $(document).ready(function(){
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
         
       });
         
       </script>

       <style>
         body{
     background:url(<?php echo  $_SESSION['walpss']?>) no-repeat;
      background-size: cover;
      -moz-background-size: cover;
     -webkit-background-size: cover;
     -o-background-size: cover;
     width: 100%;
      font-family:  'Poppins';
     font-size: 15px;
     
      
    
    }
  /*#videos {
    position: relative;
    margin-left: auto;
    margin-right: auto;
}*/

#subscriber {
  
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
}

#publisher {
 
    width: 360px;
    height: 240px;
    bottom: 10px;
    left: 10px;
    z-index: 100;
    border: 3px solid white;
    border-radius: 3px;
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
  background-color:rgba(0,0,0,0.3) !important;
  border:0 !important;
  -webkit-border-radius:25px;
  -moz-border-radius:25px;
  border-radius:25px;
/*  color: white !important;
  overflow-y:auto;*/
/*  -webkit-border-radius:25px;
  -moz-border-radius:25px;*/
/*  border-radius:25px;*/
}  
.type_msg:focus{
}

   h2 {
    text-align: center;
    margin: 0 auto;
    width: 70%;
    font-family: arial;
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
    color:<?php echo $_SESSION['color']; ?>;
    font-size: 25px;
}
</style>
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
</head>
<body style="background:;<?php echo $_SESSION['bodybgcolor']; ?>">
   <form id="logouts" action="logout.php" method="post"></form>
   
  <div>
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
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle='modal' data-target='#videoModal' >
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
                <span class="mr-2 d-none d-lg-inline text-white small"><?php echo $tet; ?></span>
                <img class="" >
                 <?php echo "<img src='".$wet."'  style='width:40px;height:40px;border-radius: 50%' >";?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in animated zoomIn" aria-labelledby="userDropdown" style="background:<?php echo $_SESSION['bodybgcolor']; ?>" >
               <a class="dropdown-item text-gray-600" href="new_group" data-toggle="modal" data-target="#PrimaryModalftblack">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400" ></i>
                  View Profile
                </a>
               <!--  <a class="dropdown-item text-gray-600" data-toggle='modal' data-target='#clear'>
                  <i class="fas fa-delete fa-sm fa-fw mr-2 text-gray-400" ></i>
                 Clear Chat
                </a> -->
                 <a class="dropdown-item text-gray-600" href="#" onclick="add(<?php echo $chatid; ?>)" data-toggle='modal' data-target='#leaveModal'>
                  <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400 " ></i>
                  Delete Friend
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-gray-600" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav></div><br><br><br><br>



<div class="container-fluid room">
           <div id="chatbox" class="a">
      
           </div>
</div>


 <div>
   <footer class="fixed-bottom" style="">
    <audio controls id="audio" style="width:100%;display:none"></audio>
      <canvas id="level"style="display:none;height:50px;width:100%"></canvas>
      <div class="chip chiprec" style="width:100%;">
      <a class="btn recordButton" id="record" style="cursor:pointer;">Start record</a>
      <a class="btn disabled one play sendRecord" id="save" style="float:right;margin-top:6px;cursor:pointer;">Send Record</a>
      </div>
     <form name="message" action="" style="color:white">
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
 <div>
   
 </div>

 
    

         

       
      
   
    
    
  
  <!--===============================================================================================-->   

 <div id="myModal" class="modal" >
                     <!-- The Close Button -->
      <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                    <!-- Modal Content (The Image) -->
              <img class="modal-content" id="img01">
                      <!-- Modal Caption (Image Text) -->

   </div> 

                                    <!-- <UPLOAD FORM> -->
       <div id="PrimaryModalftblack" class="mode modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
        <div class="modal-dialog">
         <div class="modal-content" style="background: -webkit-linear-gradient(top,<?php echo $_SESSION['headerbgcolor']?>,rgba(0, 0, 0, 0.15));opacity:0.9;margin-top:6pc">
          
          <div class="modal-body">
             <center>
          <img src="<?php echo $wet ?>" style="width:60px;height:60px;border-radius:50%;cursor:pointer;" href="#" data-toggle="modal" data-target="#dpicsModal"><br><br></center>
           <div class="">
          <table class='table table-striped' style="color:white;width:100%;">
            <tbody style="font-size:13px;text-align: center;">
              <tr>
                <td>
                  <label style="float:left;"><b>Firstname :</b></label><i style="font-style:inherit;"><?php echo $tets; ?></i>
                </td>
              </tr>
              <tr>
                <td>
                  <label style="float:left;"><b>lastname :</b></label><i style="font-style:inherit;"><?php echo $tetss; ?></i>
                </td>
              </tr>
              <tr>
                <td>
                  <label style="float:left;"><b>Username :</b></label><i style="font-style:inherit;"><?php echo $tet; ?></i>
                </td>
              </tr>
              <tr>
                <td>
                  <label style="float:left;"><b>Email :</b></label><i style="font-style:inherit;"><?php echo $ems; ?></i>
                </td>
              </tr>
              <tr>
                <td>
                  <label style="float:left;"><b>Friends :</b></label><i style="font-style:inherit;"><?php echo  $all_user_friends; ?></i>
                </td>
              </tr>
               <tr>
                <td>
                  <label style="float:left;"><b>Groups :</b></label><i style="font-style:inherit;"><?php echo  $all_user_groups; ?></i>
                </td>
              </tr>
              
            </tbody>
          </table>
    
        </div>
      </div>
    </div>
  </div>
</div>


 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content"  style="margin-top:15pc;background:<?php echo $_SESSION['bodybgcolor']?>;color:<?php echo $_SESSION['color']?>;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you ready to Logout</div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal" style="background:<?php echo $_SESSION['bodybgcolor']?>;color:grey">Cancel</button>
         <button class="btn" id="logout" style="background:<?php echo $_SESSION['bodybgcolor']?>;color:grey">Logout</button>
        </div>
      </div>
    </div>
  </div>
   <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content"  style="margin-top:130px;background:<?php echo $_SESSION['bodybgcolor']?>;color:<?php echo $_SESSION['color']?>;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Video Call on...</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
    <div id="videos">
        <div id="subscriber"></div>
        <div id="publisher"></div>
    </div>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal" style="background:<?php echo $_SESSION['bodybgcolor']?>;color:grey">Cancel</button>
         
        </div>
      </div>
    </div>
  </div>
  <script>
    function add(e){

      document.getElementById('abc').value=e;
    }
  </script>
  <form action="delete_friend.php" method="post" id="modes" hidden>
  <input type="text" name="id" id="abc" hidden>
</form>
   <div class="modal fade" id="leaveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="margin-top:15pc;background:<?php echo $_SESSION['bodybgcolor']?>;color:<?php echo $_SESSION['color']?>;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Want to delete friend?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Friend will be removed </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" style="background:<?php echo $_SESSION['bodybgcolor']?>;color:grey;">Cancel</button>
        
     <button class="btn" id="#" onclick="Action()" style="background:<?php echo $_SESSION['bodybgcolor']?>;color:grey">Delete</button>

                          
        
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="dpicsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:100px;color:<?php echo $_SESSION['color'] ?>;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background:<?php echo $_SESSION['bodybgcolor'] ?>;">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <center>
        <img src="<?php echo $wet ?>" style="width:100%;height:200px;" ><br><br>
      </center>
      </div>
    </div>
  </div>
  <div class="modal fade" id="clear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:15pc;color:<?php echo $_SESSION['color'] ?>;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background:<?php echo $_SESSION['bodybgcolor'] ?>;">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">All messages will be cleared</div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" style="background:<?php echo $_SESSION['bodybgcolor']?>;color:grey;">Cancel</button>
        
     <button class="btn" id="#" onclick="Clear()" style="background:<?php echo $_SESSION['bodybgcolor']?>;color:grey">Clear</button>
   </div>
      </div>
    </div>
  </div>
   <div class="modal fade" id="picsend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:15pc;color:<?php echo $_SESSION['color'] ?>;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background:<?php echo $_SESSION['bodybgcolor'] ?>;">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Choose picture to send
          <form role="form" method="post" action="chat2.php" enctype="form-data/multipart" id="uploadp">
      <center>
      <label class="custom-file-upload" id="dass" style="margin-top:50px">
          <input type="file" name="file[]" id="file" hidden="hidden" required multiple>
        <i class="fa fa-camera" style=" color:<?php echo $_SESSION['color']; ?>;float:left;margin-top:2px; font-size:35px" name="pics"></i>
      </label></center>
          </form>

        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" style="background:<?php echo $_SESSION['bodybgcolor']?>;color:grey;">Cancel</button>
        
     <button class="btn" id="#" onclick="Uploads()" style="background:<?php echo $_SESSION['bodybgcolor']?>;color:grey">Send</button>
   </div>
      </div>
    </div>
  </div><br>
<!--===============================================================================================-->


<!--===============================================================================================-->


<script>
    chatBox  = document.querySelector('#chatbox');
  $(document).ready(function(){
    $('#chatbox').on('click', function(){
      $(this).addClass('active');
        // alert('a');
    });
    if (chatBox.classList.contains("active")) {
    alert('ddd');
  }
  });
</script>
<script>
  
   
   var text = " ";
    
   

    
   

    
  // chatBox.onmouseenter = ()=>{
  //  $(this).addClass('active');
  //   // chatBox.classList.add("active");

  // }
  // chatBox.onmouseleave = ()=>{
  //   chatBox.classList.remove("active");

  // }
  
//   if (chatBox.classList.contains("active")) {
//     alert('ddd');
//   //     function load(){
     
//   //    $ ("html, body").animate({
//   //         scrollTop: $(
//   //             'html, body').get(0).scrollHeight
//   //       }, 2500);
//   // }
//  setInterval(load,1000);
// }
            // FOR SENDING MESSAGE
// <!--===============================================================================================-->

  //CLICK SEND BTN FUNCTION
   $(document).on('click','.west',function(e){
     e.preventDefault();
     get_message = document.getElementById('usermsg').value; 
     var send = $.post("message_chat.php",{text:get_message});

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
      url: "./messages/<?php echo $msg_id ?>.php",

      success: function(response){
         var len=response.length;
         // alert(len);
         
      var output="<div class=''>";
        for (var i=0; i<len; i++){
          // var id = response[i].id;
          var usernames=response[i].names;
          var time=response[i].time;
          var date=response[i].date;
          var message=response[i].message;
          
         // alert(usernames);
         if (usernames =="<?php echo $_SESSION['username'] ?>") {
             output+="<div class='' style='width:70%;float:right;' ><span style='font-size:12px'>"+date+" @"+time+"</span><div class='card border-left-info shadow h-100 py-2' style='background:<?php echo $_SESSION['bodybgcolor']; ?>'><div class='card-body'><div class='row no-gutters align-items-center'><div class='col mr-2'><div class='h5  ' style=' font-family:Poppins;font-size:15px;margin-top:;'>"+message+"</div></div></div></div></div><br></div>";
          };
           if (usernames =="<?php echo $tet ?>") {
                output+="<div class=' ' style='width:70%;float:left;' ><span style='font-size:12px'>"+date+" @"+time+"</span><div class='card border-left-primary shadow h-100 py-2' style='background:<?php echo $_SESSION['bodybgcolor']; ?>'><div class='card-body'><div class='row no-gutters align-items-center'><div class='col mr-2'><div class='h5 mb-0 ' style=' font-family:Poppins;font-size: 15px;'>"+response[i].message+"</div></div></div></div></div><br></div>";
          };
        };
           output+="</div>";
     
        $("#chatbox").html(output);
       

     // document.getElementById('chatbox').scrollTop = document.getElementById('chat-area').scrollHeight;

      },
       error: function(response){
                // alert("not success");
              },
             
              cache: false,
              contentType: false,
              processData: false
    });
   }
    setInterval(loadLog,500);

     
   
   
  

 
  </script>
  <div class="social-share">
    <button class="ass share-btn" id="alts"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
    <button class="ass share-btn" id="alt" style="display:none"><i class="fa fa-chevron-right" aria-hidden="true" style="cursor:pointer;color:<?php echo $_SESSION['color']; ?>;"></i></button>
    <div class="social-links" style="margin-top:80px">
      <ul>
        <li><a href="#" class="voicerecord"><i class="fa fa-microphone voicerecord" aria-hidden="true" style="color:<?php echo $_SESSION['color']; ?>;cursor:pointer;"></i></a></li>
        <li><a href="#" data-toggle='modal' data-target='#picsend'><i class="fa fa-image" aria-hidden="true" style="color:<?php echo $_SESSION['color']; ?>;cursor:pointer;"></i></a></li>
        <li><a href="#"><i class="fa fa-file" aria-hidden="true" style="color:<?php echo $_SESSION['color']; ?>;cursor:pointer;"></i></a></li>

    
      </ul>
    </div>
  </div>
<script>
             $('.chiprec').hide();
            $('.voicerecord').click(function(){
            $('#level').show();
            $('#aaa').fadeOut("slow");
            $('.chiprec').fadeIn("slow");
            });
            $('.play').click(function(){
              $('#audio').show();
              $('#level').hide();
             });
             $('.sendRecord').click(function(){
             $('#aaa').fadeIn("slow");
            $('.chiprec').fadeOut("slow");

               });

          </script>
    <script>
       function Uploads(){

     $(document).ready(function(){
        var form = $("#uploadp");
        var formData = new FormData($("#uploadp")[0]);

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
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
               
                  var jarvis = new Artyom();
                 jarvis.say("Upload Successful");
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

        function Clear(){


      $.ajax({
      type:"GET",
      dataType:"JSON",
      url: "./messages/<?php echo $msg_id ?>.php",

      success:function(response){
          var len = response.length;
          for (var i=0; i<len; i++){
          // var id = response[i].id;
          var usernames=response[i].names;
          var time=response[i].time;
          
      }
      

      },

      error:function(){

      },
       cache: false,
      contentType: false,
        processData: false

      });
          
        }
    </script>
<!--===============================================================================================-->

<script>
      // replace these values with those generated in your TokBox Account
var apiKey = "46926304";
var sessionId = "1_MX40NjkyNjMwNH5-MTYwMDUwNzc2NzM3M341RE10YWhsTC9KTGxSMExiSzIzblJ4VEd-fg";
var token = "T1==cGFydG5lcl9pZD00NjkyNjMwNCZzaWc9ZDBlNmU5NjFkZDNkN2Y5ZDlmOTJmZjhjMGViMmUzZWIxYzJmM2UwNzpzZXNzaW9uX2lkPTFfTVg0ME5qa3lOak13Tkg1LU1UWXdNRFV3TnpjMk56TTNNMzQxUkUxMFlXaHNUQzlLVEd4U01FeGlTekl6YmxKNFZFZC1mZyZjcmVhdGVfdGltZT0xNjAwNTA3Nzg5Jm5vbmNlPTAuOTI0NjE2ODYyODkwOTA4MiZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNjAzMDk5NzMxJmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9";

// (optional) add server code here
initializeSession();
// Handling all of our errors here by alerting them
function handleError(error) {
  if (error) {
    alert(error.message);
  }
}

function initializeSession() {
  var session = OT.initSession(apiKey, sessionId);

  // Subscribe to a newly created stream

  // Create a publisher
  var publisher = OT.initPublisher('publisher', {
    insertMode: 'append',
    width: '100%',
    height: '100%'
  }, handleError);

  // Connect to the session
  session.connect(token, function(error) {
    // If the connection is successful, publish to the session
    if (error) {
      handleError(error);
    } else {
      session.publish(publisher, handleError);
    }
  });
}
session.on('streamCreated', function(event) {
  session.subscribe(event.stream, 'subscriber', {
    insertMode: 'append',
    width: '100%',
    height: '100%'
  }, handleError);
});
    </script>



           <script>
        var modal = document.getElementById('myModal');
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
      }
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
         modal.style.display = "none";
          }
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
<!--===============================================================================================-->
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
  <!-- <script src="../md/vendor/jquery/jquery.min.js"></script> -->
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