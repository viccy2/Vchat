<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email']))
 {

?>
<!DOCTYPE html>
<html>
  <head>
    <title>V-Chat Edit Profile | V-Chat</title>
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
               var match = data.match("Profile Updated Successfully");
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
<style type="text/css">
    body{
   
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
 background-image: url(<?php echo $_SESSION['pass']; ?>),linear-gradient(to right top, <?php echo $_SESSION['color']; ?>, rgba(0,0,0,0.2));
    height: 35vh;
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
   <a href="account_settings"><i class="container-fluid fas fa-arrow-left fa-fw" style="color:white"></i></a>
</div>
         <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
           

            <!-- Nav Item - Video Call -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" >
            <div>
             <p style="text-align:center;color:white;margin-top:8px;font-size:14px;">Edit Profile</p>
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
        <div class="modal fade" id="dpicsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:100px;color:<?php echo $_SESSION['color'] ?>;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background:<?php echo $_SESSION['bodybgcolor'] ?>;">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <center>
        <img src="<?php echo $_SESSION['pass'] ?>" style="width:100%;height:200px;" ><br><br>
      </center>
      </div>
    </div>
  </div>
 <section class="section-tours" style="margin-top:0px;">
 <div class="card__side card__side--front"  style="background:linear-gradient(to left top, <?php echo $_SESSION['bodybgcolor']; ?>, rgba(0,0,0,0.2));min-height:100vh;
     max-height:1000vh;">
 <div class="card__picture card__picture--2 "  href="#" data-toggle="modal" data-target="#dpicsModal">

  </div>
  <h4 class="card__heading" style="margin-top:40px">
  <span class="card__heading-span card__heading-span--2" style="background:<?php echo $_SESSION['color']; ?>;font-family: inherit;font-size:20px">Edit Profile</span>
  </h4>
  <div class="card__details" style="color:gray">
      <form id="data" class=""  action="uses.php" method="post"> 
    <div class="container-fluid">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active text-gray-500" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
                      <a class="nav-item nav-link text-gray-500" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">About</a>
                      <a class="nav-item nav-link text-gray-500" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Address</a>
         
                    </div>
                  </nav>
                   
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><br>
     
    <div class="wrap-input100 validate-input" style="color:">
      <input class="input100" type="text" name="username" value="<?php echo $_SESSION[username]; ?>" style="color: <?php echo $_SESSION['color'];?>;width:100%">
      <span class="focus-input100" ></span>
    </div>
     <div class="">
      <center>
          <input type="file" class="inputfile" name="fileToUpload" id="your_picture"  onchange="showPreview(this);" data-multiple-caption="{count} files selected" multiple hidden />
              <label for="your_picture">
              <figure id="meme-bg-target">
                  <img src="<?php echo $_SESSION[pass] ?>" alt="" class="your_picture_image" style="height:100px;width:100px;border-radius:50%">
                   <p class="text-gray-500">Choose Picture</p>
              </figure>
            
          </label>
           <script>
    function showPreview(objFileInput) 
{
    if (objFileInput.files[0]) 
    {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
            $("#meme-bg-target img").attr('src', e.target.result);
        }
        fileReader.readAsDataURL(objFileInput.files[0]);
    }
}
           </script> 
           </center>  

          </div>
          </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><br>
            <div class="wrap-input100 validate-input" style="color:">
            <input class="input100" type="text" name="about" value="<?php echo $_SESSION[about]; ?>" style="color: <?php echo $_SESSION['color'];?>;width:100%">
             <span class="focus-input100" ></span>
            </div>
                </div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><br>
                      <div class="wrap-input100 validate-input" style="color:">
            <input class="input100" type="text" name="state" value="<?php echo $_SESSION[state]; ?>" style="color: <?php echo $_SESSION['color'];?>;width:100%">
            <span class="focus-input100" ></span>
            </div>
             <div class="wrap-input100 validate-input" style="color:">
            <input class="input100" type="text" name="country" value="<?php echo $_SESSION[country]; ?>" style="color: <?php echo $_SESSION['color'];?>;width:100%">
           <span class="focus-input100" ></span>
          </div>
           </div>  
                <div class="text-center" style="margin-top:-10px">
                <a href="edit_profile" id="submit" class="btn text-gray-600">Save changes</a>
            </div>     
            
                 
         
          </div>
        </div>
         
      </form>
     </div>
  </section>

                   
                 
        
 


 
 

         
         
      
            
      
<!--===============================================================================================-->
         
  <!--===============================================================================================-->
      
    
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




