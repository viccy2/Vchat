<!DOCTYPE html>
  <html>
  <head>
    <title>V-Chat Forgot Password | V-Chat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <!--===============================================================================================-->
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
 <link rel="stylesheet" href="../css/notifications/Lobibox.min.css">
    <link rel="stylesheet" href="../css/notifications/notifications.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
   <link rel="stylesheet" href="../css/mainstyles.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->  
<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/vchat_util.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/vchat_app_main.css">
<!--===============================================================================================-->
  <script type="text/javascript" src="../css/bootstrap4/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script>
        new WOW().init();
  </script>
  <!--===============================================================================================-->    
    <style>
     body{
      background:url('../images/undraw.png') no-repeat;
            background-size: cover;
            -moz-background-size: cover;
           -webkit-background-size: cover;
           -o-background-size: cover;
           width: 100%;
           height: 100vh;
           font-family: ;
          /*overflow: hidden; */
          }
.i-checks {
    display: inline-block;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    width: 22px;
    height: 22px;
    color: #673AB7;
    border: 50%;
    cursor: pointer;
}

  </style>
  <!--===============================================================================================-->
 </head>
 <!--===============================================================================================-->
 <body>
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
              data: formData,

               success: function(data){
                $("#main").show();
                $("#loader").hide();
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
                 Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                if (b=='Successful') {
                    setTimeout(function(){
                window.location.href = '../app/reset_password2';
                },5000);
                  }
                  else{
                   setTimeout(function(){
                window.location.href = '../app/reset_password3';
                },5000);
                  }
                  ;
                //   if (b=='Successfull') {
                //     setTimeout(function(){
                // window.location.href = '../php/change_password2.php';
                // },1000);
                  
               
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
   <div class="limiter">
    <div class="container-login100" id="main">
      <div class="wrap-login100" style="background: -webkit-linear-gradient(top,#673AB7,rgba(0, 0, 0, 0.15));opacity:0.9;">
  <!--===============================================================================================-->
                             <!--  <BEGINNING OF FORM> -->
        <form id="data" class="login100-form validate-form" style="height:400px" action="reset.php" method="post">
          <span class="login100-form-title p-b-26" style="margin-top:-50px">
            User 
          </span>
          <span class="login100-form-title p-b-48">
            <p>Forgot Password</p>
          </span><br>
   
    <p class="container-fluid animated zoomIn" style="color:white;font-size:15px;font-weight:bold;margin-top:30px">How will you like to get your password?</p><br>
    <div class="form-group" style="width:100%">
                            <select class="form-control" name="forgot" id="country" required>
                                <option value="" selected disabled>Select option to reset password</option>
                                <option value="security">Through Security Question filled during registration</option>
                                <option value="code">Get reset password code via your email</option>
                            </select><br><br><br>
                 
      </div>
          
            
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button id="submit" class="login100-form-btn" >
                Next
              </button>
            </div>
          </div><br>
<!--===============================================================================================-->
          

         
  <!--===============================================================================================-->
        </form>
                     <!--  < End Of Form> -->
      <!--===============================================================================================-->
      </div>
    </div>
  </div>
  <!--===============================================================================================-->
<footer class=" bg-white fixed-bottom" style="height:30px;font-size:15px;color:#673AB7;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Vchat &copy;  2021</span>
          </div>
        </div>
      </footer>
  <div id="dropDownSelect1"></div>
 </body>   

   

    <script type="text/javascript" src="../css/wowjs/dist/wow.min.js"></script>
    <script type="text/javascript" src="tether/dist/js/tether.js"></script>
    <script type="text/javascript" src="../css/bootstrap4/js/popper.js"></script>
    <script type="text/javascript" src="../css/bootstrap4/js/jquery-3.2.1.min.js"></script>
    <script src="../vendor/animsition/js/animsition.min.js"></script>
    <script type="text/javascript" src="../css/bootstrap4/js/bootstrap.min.js"></script>
    <script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script>  
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="../vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/notifications/Lobibox.js"></script>


</body>
</html>