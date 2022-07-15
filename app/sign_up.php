<!DOCTYPE html>
  <html>
  <head>
    <title>V-Chat Sign Up| V-Chat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../css/bootstrap4/css/bootstrap.min.css">
   <!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../css/bootstrap4/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../css/preloader.css">
    <!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->

<link href="../md/css/sb-admin-2.min.css" rel="stylesheet">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->  
   <link rel="stylesheet" href="../css/mainstyles.css">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/vchat_util.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/vchat_app_main.css">
  <link rel="stylesheet" href="../css/notifications/Lobibox.min.css">
   <link rel="stylesheet" href="../css/notifications/notifications.css">
<!--===============================================================================================-->
  <script type="text/javascript" src="../css/bootstrap4/js/jquery-3.2.1.min.js"></script>
<script src="../js/act.js"></script>
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


input{
  color:white;
  padding:-430px;
}

/* Style the form */


/* Style the input fields */


/* Mark input boxes that gets an error on validation: */
input.invalid {
 
}

/* Hide all steps by default: */
.tab {
  display: none;
  color:white;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: white;
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
        <form id="datas" class="login100-form validate-form" style="height:400px" action="reg.php" method="post" enctype="multipart/form-data">
         
          <span class="login100-form-title p-b-26" style="margin-top:-50px">
            User 
          </span>
          <span class="login100-form-title p-b-48">
            <p>Sign-up</p>
          </span>
            

<br>

<!-- One "tab" for each step in the form: -->
<div class="tab" >User Info:<br><br>
   <div class="wrap-input100 validate-input" data-validate = "King">
   <input class="input100" type="text" name="firstname" required  >
    <span class="focus-input100" data-placeholder="First name "></span>
   </div>
    <div class="wrap-input100 validate-input" data-validate = "Vad">
    <input class="input100" type="text" name="lastname" required  >
    <span class="focus-input100" data-placeholder="Last name "></span>
   </div>
  
</div>

<div class="tab">Contact Info:<br><br>
   <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
    <input class="input100" type="email" name="email" required>
    <span class="focus-input100" data-placeholder="E-mail "></span>
   </div>
    <div class="wrap-input100 validate-input" data-validate = "09072045667">
    <input class="input100" type="number" name="phone" required>
    <span class="focus-input100" data-placeholder="Phone number "></span>
   </div>

  
</div>

<div class="tab">Account Info:<br><br>
  <div class="wrap-input100 validate-input" data-validate = "Vad">
    <input class="input100" type="text" name="username" required>
    <span class="focus-input100" data-placeholder="Username "></span>
</div>
  
  <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="password" required >
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>
</div>

<div class="tab">Security Info:
  <div class="form-group" style="width:100%">
                            <select class="wrap-input100 validate-input form-control" name="question" id="country" required>
                                <option value="" selected disabled>Choose security question</option>
                                <option>What is your Middlename?</option>
                                <option>What is Your old Phone Number</option>
                                <option>What is your Father's Name?</option>
                                <option>What is your Mother's Name?</option>
                            </select>
                 
  </div>
  <div class="wrap-input100 validate-input" data-validate = "Vad" style="margin-top:-50px;">
    <input class="input100" type="text" name="answer" required id="email" >
    <span class="focus-input100" data-placeholder="Security answer "></span>
   </div>

</div>

<div style="overflow:auto;">
  <div style="">
    <button class="login100-form-btn bg-gray-600" type="button" id="prevBtn" onclick="nextPrev(-1)" style="color:white;border-color:transparent;border:none;background:gray;height:40px;width:40%;font-size:12px;float:left;">Previous</button>
    <button class="login100-form-btn bg-gray-600 " type="button" id="nextBtn" onclick="nextPrev(1)" style="color:white;border-color:transparent;border:none;height:40px;width:40%;font-size:12px;float:right;">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>



        </form><br>
                     <!--  < End Of Form> -->
                     <!--===============================================================================================-->
          <div class="text-center p-t-115">
            <span class="txt1" style="color:white">
              Already have an account?
            </span>

            <a class="txt2" href="sign_in" style="color:white">
              Sign-In
            </a>
          </div>
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
  
 </body>   

   <script>
     var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Sign up";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}
// var validations = {
//             email: [/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/, 'Please enter a valid email address']
//           };
//          $(document).ready(function(){
//          $("input[type=email]").change(function(){
//             validation = new RegExp(validations['email'][0]);
//             if (!validation.test(this.value)) {
//               this.setCustomValidity(validations['email'][1]);
//               return false;
//             }
//             else{
//               this.setCustomValidity('');
//             }
//          });
//         $("#loader").hide();
//         $("#error").hide();
//        function submits(){
//         alert('s');
        
//         };

//          });
function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {

    //...the form gets submitted:
    submits();
    return false;
  }
 
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
 function submits(){

   $(document).ready(function(){
   
    $("#main").hide();
        $("#loader").show();
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
                var match = data.match("Account created successfully");
                var matchs = data.match("This email exist");
                var matches = data.match("Invalid email");
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                    setTimeout(function(){
                window.location.href = '../app/activate_account';
                },5000);
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                  setTimeout(function(){
                location.reload(true);
                },5000);
                 
                };
                 if (matches!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                  setTimeout(function(){
                location.reload(true);
                },5000);
                 
                };

                

                  
                  
               
                var jarvis = new Artyom();
                 jarvis.say(data);
            
                
                  
              },
              error: function(data){
               $("#main").show();
                $("#loader").hide();
                $("#error").show();
                $('#error').text('');
                $('#error').text('Not success');
                var a =setTimeout(function(){
                $('#error').remove();
                location.reload(true);
                },2000);

               
                var jarvis = new Artyom();
                 jarvis.say('Not success');
              },
              cache: false,
              contentType: false,
              processData: false
            });

            return false;
            });
  };
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
   </script>
  <script src="../md/vendor/jquery/jquery.min.js"></script>
  <script src="../md/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../md/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
    <script src="../md/js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="../css/wowjs/dist/wow.min.js"></script>
    <script type="text/javascript" src="tether/dist/js/tether.js"></script>
    <script type="text/javascript" src="../css/bootstrap4/js/popper.js"></script>
    <script type="text/javascript" src="../css/bootstrap4/js/jquery-3.2.1.min.js"></script>
    <script src="../vendor/animsition/js/animsition.min.js"></script>
    <script type="text/javascript" src="../css/bootstrap4/js/bootstrap.min.js"></script>
    <script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script>  
    <script src="../vendor/jquery/jquery.min.js"></script>
    
   
    <script src="../js/main.js"></script>
     <script src="../js/notifications/Lobibox.js"></script>

</body>
</html>