<!DOCTYPE html>
  <html>
  <head>
    <title>V-Chat Login | V-Chat</title>
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
    <link rel="stylesheet" href="../css/notifications/Lobibox.min.css">
    <link rel="stylesheet" href="../css/notifications/notifications.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->  
<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
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
    color: rgba(112,1,43);
    border: 50%;
    cursor: pointer;
}
.container-login100{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
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
        var a = document.getElementById('email').value;
        var a = document.getElementById('password').value;
       if (a=="") {
        var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: 'all fields are required'
                }); 
                 $("#loader").hide(); 
                 $("#main").show();
       }
        else{
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
                var match = data.match("Login successfull");
                var matchs = data.match("Incorrect Password or Email");
                var matches = data.match("Your account has not been activated");
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                    setTimeout(function(){
                window.location.href = '../app/home';
                },5000);
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                };
                if (matches!=null) {
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
          }
          });

         });
      
  </script>
  <!--  $('#basicErrorAnimation').on('click', function () {
                Lobibox.notify('error', {
                    showClass: 'zoomInUp',
                    hideClass: 'zoomOutDown',
                    msg: 'aa.'
                });
            }); -->
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
        <form id="data" class="login100-form validate-form" style="height:400px" action="sign.php" method="post">
          <span class="login100-form-title p-b-26" style="margin-top:-50px">
            User 
          </span>
          <span class="login100-form-title p-b-48">
            <p>Login</p>
          </span>
    
          <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
            <input class="input100" type="text" name="text" required id="email">
            <span class="focus-input100" data-placeholder="Email || Phone "></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="pass" required id="password">
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>
            <div class="checkbox col-lg-12" style="color:white">
                  <input type="checkbox" class="i-checks"  name="remember"> Remember me
            </div>
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button id="submit" class="login100-form-btn" >
                Sign-In
              </button>
            </div>
          </div>
<!--===============================================================================================-->
          <div class="text-center p-t-115">
            <span class="txt1" style="color:white">
              Don’t have an account?
            </span>

            <a class="txt2" href="sign_up" style="color:white">
              Sign Up
            </a>
          </div>

          <div class="text-center p-t-115">
            <span class="txt1" style="color:white">
             Forgot password?
            </span>

            <a class="txt2" href="forgot_password" style="color:white">
              click here
            </a>
          </div>
           <div class="text-center p-t-115">
            <span class="txt1" style="color:white">
             To activate account
            </span>

            <a class="txt2" href="activate_account" style="color:white">
              click here
            </a>
          </div>
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
   <!--  <script src="../js/notifications/notification-active.js"></script> -->


</body>
</html>
