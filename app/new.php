<?php
session_start();
$id=$_SESSION['ctid'];
if (isset($_SESSION['user_id']) || isset($_COOKIE['email']))
 {

?>
<!DOCTYPE html>
<html>
  <head>
    <title>V-Chat Dashboard | V-Chat</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="http://localhost/Vchat/css/bootstrap4/css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="http://localhost/Vchat/css/bootstrap4/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Vchat/css/bootstrap4/font-awesome-4.7.0/css/font-awesome.css">
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/Vchat/css/maincss.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Vchat/css/mains.css"> -->
    <link rel="stylesheet" type="text/css" href="http://localhost/Vchat/css/preloader.css">
     <link rel="stylesheet" type="text/css" href="http://localhost/Vchat/css/modal.css">
     <link rel="stylesheet" type="text/css" href="http://localhost/Vchat/css/realcard.css">
   <link rel="stylesheet" href="http://localhost/Vchat/css/animate.css">

  <!--   <link rel="manifest"  href="man.json"> -->
    <link rel="stylesheet" type="text/css" href="http://localhost/Vchat/css/wowjs/css/libs/animate.css">
     <link rel="stylesheet" href="http://localhost/Vchat/css/cropper/cropper.min.css">
    <script type="text/javascript" src="http://localhost/Vchat/css/wowjs/dist/wow.min.js"></script>
    <script type="text/javascript" src="tether/dist/js/tether.js"></script>
    <script type="text/javascript" src="http://localhost/Vchat/css/bootstrap4/js/popper.js"></script>
    <script type="text/javascript" src="http://localhost/Vchat/css/bootstrap4/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/Vchat/css/bootstrap4/js/bootstrap.min.js"></script>
       <script src="http://localhost/Vchat/artyom.js-master/public/artyom.window.js"></script>
    <script type="http://localhost/Vchat/artyom.js-master/public/artyom.js"></script>
    <script>
      function set(){
      var timeout = setTimeout("location.reload(true);",1000);
      function resetTimeout(){
        clearTimeout(timeout);
        timeout = setTimeout("location.reload(true);",1000);
      }
    }
    </script>
    <script>

         $(document).ready(function(){
           $("#error").hide();
          $("#submit").click(function(){
            var form = $("#data");
            var formData = new FormData($("#data")[0]);
            $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,
              success: function(data){
                 $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
                var a =setTimeout(function(){
                $('#error').remove();
              
                },3000);
                
               
                var jarvis = new Artyom();
                 jarvis.say(data);
                 if (data=='Upload Successful') {
                    setTimeout(function(){
                window.location.href = 'http://localhost/Vchat/app/home';
                },1000);
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

         });

        </script>
    <script>
        new WOW().init();
</script>
       <style type="text/css">
       body{
         background: -webkit-linear-gradient(rgba(0, 0, 0, 0.15));

        font-family:Gabriola;
        font-size: 22px;
       }

  input[type=text] {
    border:solid 3px <?php echo $_SESSION['color'];?>;
    box-sizing:border-box;
    border-radius: 40%;
    outline:solid #fc0 0;
    padding:.5em;
    transition:all 3s ease-in;
    width:;
    z-index:1;

    height: 40px;
    border-radius: 40px;
    padding: 10px;
    &:focus {
     border:solid 3px blue;
    box-sizing:border-box;
    outline:solid #fc0 0;
    }
  }
  #f{
    transform: translate(-10%,-50%);
    transition: all 1s;
    width: 15%;
    height: 45px;
    background:<?php echo $_SESSION['color'];?>;
    color: white;
    box-sizing: border-box;
    border-radius: 25px;
    border: 4px solid white;
    padding: 5px;
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
    border-radius: 20px;
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
    padding: 10px;
    width: 42.5px;
    height: 42.5px;
    position:absolute;
    top: -4px;
    right: 0;
    border-radius: 50%;
    color:white;
    transition: all 1s;
}
#das{
  transform: translate(-10%,-50%);
    transition: all 1s;
    width: 50px;
    height: 50px;
    background:<?php echo $_SESSION['color'];?>;
    color: white;
    box-sizing: border-box;
    border-radius: 25px;
    border: 4px solid white;
    padding: 9px;
    margin-top:7px;
}
#dass{
  transform: translate(-10%,-50%);
    transition: all 1s;
    width: 50px;
    height: 50px;
    background:<?php echo $_SESSION['color'];?>;
    color: white;
    box-sizing: border-box;
    border-radius: 25px;
    border: 4px solid white;
    padding: 9px;
    margin-top:60px;
}
#f:hover{
    width: 70%;
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

     </style>
     <script type="text/javascript">
       $(document).scroll(function (){
        var x = $(window).scrollTop();
        if (x >100) {
          $('.nav-tabs.aw').fadeIn().css({"position":"fixed","top":"0","width":"100%","height":"100px"});
        }else{
          $('.nav-tabs.aw').css({"position":"relative","top":"auto"});
        }
       });
       // function test(){
       //  var a = document.getElementById('test').value='Request sent';
       // }
     </script>

   </head>
   <body onload="searchBasey('');searchBases('');searchBass('');myFunction();request()"  >
   <!--  <div id="loader">
      <div class="" style="margin-top: 200px">
                        <div class="preloader-singl">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute24">
                        <h4 id="tsperloader24" style="color:white;font-size:24px;font-family:Gabriola;font-weight: bolder;">V Chat</h4> -->
                    <!--  <img src="images/guy.jpg" style="height:120px;width:120px "  id="tsperloader24"> -->

                      <!--           </div>
                            </div>
                        </div>
                    </div>
    </div>

    <div id="myDiv"> -->
     






    <section id="tabs" style="height:5pc;margin-top:;color: color:white">


                       <!--  THE NAV LINKS -->



    <div class="nav nav-tabs aw nav-fill bottom sticky-top " id="nav-tab" role="tablist" style="background: <?php echo $_SESSION['color'];?>;color:white;">
          <nav class="  container-fluid mb-4 navbar navbar-expand-sm navbar-dark cyan" style="margin-top:-60px;background:<?php echo $_SESSION['color'];?>">
                    <a class="animated zoomIn navbar-brand font-bold" href="#" style="font-size:21px;font-family:Gabriola;font-weight: bolder;">V-chat</a>

                    <ul class="navbar-nav ml-auto">

                        <li class="animated zoomIn container-fluid nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "<img src='".$_SESSION['pass']."'  style='width:40px;height:40px;border-radius: 50%;cursor:pointer;' onclick=''  >";?></a>
                            <div class="animated zoomIn dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2 ">
                                <div class="nav-user-info" style="color:<?php echo $_SESSION['color'];?>;font-family:Gabriola;">
                              <h5 class="container mb-0nav-user-name" style="font-size:20px"><?php echo$_SESSION['username'];?> </h5>
                                </div>
                                <?php
                                require 'dc.php';
                                $id=$_SESSION['ctid'];
                                $wr=$_SESSION['color'];

                                echo "

                                <a class='dropdown-item' href='group.php?id=$id' style='color:$wr;font-size:16px;font-family:Gabriola;'><i class='fa fa-users mr-2'></i>New Group</a>
                                " ;?>
                                <a class="dropdown-item" href="settings.php" style="color:<?php echo $_SESSION['color'];?>;font-size:18px;font-family:Gabriola;"><i class="fa fa-cog mr-2"></i>Settings</a>
                                <a class="dropdown-item" href="logout.php" style="color:<?php echo $_SESSION['color'];?>;font-size:18px;font-family:Gabriola;"><i class="fa fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                      </ul>

    </nav>
            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color:white;font-size:22px;font-family:Gabriola;">Home</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" style="color:white;font-size:22px;font-family:Gabriola;">Friends</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false" style="color:white;font-size:22px;font-family:Gabriola;">Groups</a>

    </div>
                        <!-- THE BEGINNING OF ALL TABS -->
    <div class=" tab-content" id="nav-tabContent" style="background:<?php echo  $_SESSION['bgcolor']?>;" >
                          <!--   THE BEGINNING OF HOME -->
    <div class="tab-pane fade show active animated fadeInLeft" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <hr style="margin-top:2px;">
      <div class="" style="height:2pc">

      <div class="container-fluid titl">
       <label id="das" class="custom-file-upload" style="float:left;">

             <i id="" class="fa fa-camera" data-toggle="modal" data-target="#PrimaryModalftblack" style="white;float:left;"></i>
          </label>

<form class="containe" id="f" style="margin-top:8px;float:right;">
  <input type="search" id="k" placeholder="Search for all Friends" onblur="set()" onkeyup="searchBasey(this.value)" >
  <i class="fa fa-search" id="s"></i>
</form>

      </div>
      </div>
      <hr>
       <div class='card card-body bols'>
      </div>
     <?php
             $t = $_SESSION['color'];
              require 'dc.php';
              $result = mysqli_query($con, "select * from clients_tb where email !='$_SESSION[email]' and validation_code!='$_SESSION[user]'");
              // $wet = mysqli_query($con,"select * from friend_tb where client_id='$_SESSION[ctid]'");
              // while ($bs=mysqli_fetch_array($wet)) {
              //   $usw = $bs['username'];
              //   $usid = $bs['friends_id']

              // }
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
        out += "<div class='animated slideInRight chip' style='color:<?php echo $_SESSION['color'] ?>;width'><div style='width:90%'><img src='"+arr[i].passport+"' alt='Person' width='96' height='96'>"+'<p style="font-size:18px;color:<?php echo $_SESSION['color'] ?>;">'+arr[i].username+"<a style='float:right;' href='request.php?id="+arr[i].client_id+"'><input type='submit' onclick='test()' id='test' name='delete data'value='Friend Request'id='myBtn' class='del btn btn' style='font-size:30px border-radius:50%;background-color:<?php echo $_SESSION['color']?>;color:white;margin-top:5px';border-radius:50%';/></a></div></div><br>";
          }
          $('.bols').html(out);
            });
           }
         </script>

                       <!-- The Modal -->
      <div id="myModal" class="modal">
                     <!-- The Close Button -->
      <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                    <!-- Modal Content (The Image) -->
              <img class="modal-content" id="img01">
                      <!-- Modal Caption (Image Text) -->

      </div>
      <div class="container-fluid">
      <div class="card" style="margin-top:20px;" >
        <div class="card-header" style="background: <?php echo $_SESSION['color'];?>;font-size:18px;font-family:Gabriola;">
          <ul class="nav nav-tabs justify-content-center " role="tablist" data-background-color="orange">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#view" role="tab">View</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" data-toggle="tab" href="#request" role="tab" style="float: right;">Friend Requests</a>
            </li>
             <li class="nav-item" >
              <a class="nav-link" data-toggle="tab" href="#calls" role="tab" style="float: right;">Calls</a>
            </li>
             <li class="nav-item" >
              <a class="nav-link" data-toggle="tab" href="#profile" role="tab" style="float: right;">Profile</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <!-- Tab panes -->
          <div class="tab-content text-center">
            <div class="animated fadeIn tab-pane active" id="view" role="tabpanel">
               <div class='card-header'>
                  <h4 class="wow slideInRight" style="text-align:center;color:<?php echo $_SESSION['color']?>;font-size:20px;font-family:Gabriola;">View</h4>
                </div><br><br>
         <?php
          $t = $_SESSION['color'];
        require 'dc.php';
         $result = mysqli_query($con, "select * from view_tb where client_id !='$_SESSION[ctid]'or client_id='$_SESSION[ctid]'");



        while ($r = mysqli_fetch_array($result)) {
          $id = $r ['client_id'];
         $k= $_SESSION['las']=$r['upload'];
         $s=$r['time'];
         $d=$r['date'];
         $m=$r['message'];
         $u=$r['username'];
          $_SESSION['ids']=$r['client_id'];
          echo "
         <div class='container-fluid'>
                <div class='row' style='width:100%'>

                          <div class='' style='width:100%'>
                        <div class='single-new-trend ' style='height: 350px'>
                            <a href='#'><img src='$k' alt='' style='margin-top: 40px;height:200px;width:300px'></a>
                            <div class='overlay-content'>
                                <a href='#'>
                                    <h2 style='color:$t'>$u</h2>
                                </a>
                                <a href='#' class='btn-small' style='background:$t;color:white'>Now</a>
                                <div class='product-action'>
                                    <ul>
                                        <li>
                                            <a data-toggle='tooltip' title='Like' href='#'><i id='basicDefaultImage' class='fa fa-thumbs-up' aria-hidden='true'></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle='tooltip' title='Love' href='#'><i class='fa fa-heart' aria-hidden='true' style='color:red'></i></a>
                                        </li>
                                    </ul>
                                </div>

                                    <h4 style='color:$t'>$m</h4>

                                <div class='pro-rating' style='color:$t;'>
                                    [$s]
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>";

        }




         ?>

            </div>

        <div class="animated fadeIn tab-pane" id="request" role="tabpanel" style="height:1000pc">
         <div class="containe">
         <input type="text" name="search" placeholder="Search.." class="form-control" style="margin-top:30px" id="search" onkeyup="request(this.value)">
        <section class="py-5" style=";">
        <div class=' card card-body boss' style="margin-top:-20px">
        </section>
      </div>
       <?php
        require 'dc.php';
        $result = mysqli_query($con, "select * from request_tb where email !='$_SESSION[email]'");
        while ($r = mysqli_fetch_array($result)) {
        $id = $r ['client_id'];
        $_SESSION['las']=$r['passport'];

          }

          ?>

         <script>

        function request(s)
          {

             c = s;
             $.post("requests.php",{first:c},function(response) {
             var arr = JSON.parse(response);
             var i;
            var out = "";
             for(i = 0; i < arr.length; i++) {
        out += "<div class='animated slideInRight chip' style='color:<?php echo $_SESSION['color'] ?>;width:100%;'><div style='width:100%'><img src='"+arr[i].passport+"' alt='Person' width='96' height='96'>"+'<p style="font-size:18px;color:<?php echo $_SESSION['color'] ?>;">'+arr[i].username+"<a style='float:right;' href='add.php?id="+arr[i].client_id+"'><input type='submit'name='delete data'value='Accept'id='myBtn' class='del btn btn' style='font-size:30px border-radius:50%;background-color:<?php echo $_SESSION['color']?>;color:white;margin-top:5px';border-radius:50%';/></a></div></div><br>";
          }
          $('.boss').html(out);
            });
           }
        </script>
        </div>
      <div class="animated zoomIn tab-pane" id="calls" role="tabpanel">
             <div class="container">
              <div class="card">
                <div class="card-header" style="color:<?php echo $t; ?>">
                Missed Calls

                </div>
                <div class="card-body">

                </div>

              </div>

             </div>

      </div>
      <div class="animated zoomIn tab-pane" id="profile" role="tabpanel" style="height: 50pc">
             <div class="containe">


   <?php
   $t = $_SESSION['color'];
    echo "
      <div class='card' style='height:600px;width:100%;'>
        <div class='card-header'>
          <h4 style='color:$t;font-size:24px;font-family:Gabriola;'>My Profile</h4>
        </div>
        <div class='card-body' style='margin-top:30px'><center>
        <img src='".$_SESSION['pass']."'style='width:100px;height:100px;border-radius: 50%;margin-top:10px'>
        </center>
         <table class='table table-striped'>
                      <thead>
                        <tr>
                        <th style='color:$t;font-size:22px;font-family:Gabriola;'>Username</th>
                        <th style='color:$t;font-size:22px;font-family:Gabriola;'>Email</th>
                        </tr>
                      </thead>
                      <tbody>

                 ";
              require 'dc.php';
              $resul = mysqli_query($con, "select * from clients_tb  where client_id = '$_SESSION[ctid]'");
              while ($b = mysqli_fetch_array($resul)) {
               $id = $b ['client_id'];
              echo "<tr style='color:$t;font-size:20px;font-family:Gabriola;'><td>".$b['username']."</td><td>".$b['email']."</td>></tr>";

                  }
                  echo "  </tbody></table>
        </div>
        <div class='card-footer'>
        </div>
        </div>

                  ";
      ?>

             </div>

      </div>
      </div>
      </div>
      </div>
    </div>
      <!-- End Tabs on plain Card -->
      </div>
                                        <!-- THE END OF PROFILE MODAL -->
                                      <!-- THE BEGINNING OF HOME -->

      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" hidden>
       <div class="" style="background:<?php echo $_SESSION['color']?>;height:5pc">
      <div class="titl">
      <h3 style="text-align:center;color:white;font-weight:normal;padding-top:30px" class="wow slideInRight">User</h3>
      </div>
      </div>
       <div class="container">
            <input type="text" name="search" placeholder="Search.." class="form-control" style="margin-top:30px" id="search" onkeyup="sets(this.value)">
             <section class="py-5" style=";">
      <div class='bo'>
      </div>

      </section>

          </div>
          </div>
             <!--              THE END OF ALL USERES
                          THE BEGINNING OF FRIRNDS -->

    <div class="animated fadeInLeft tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" >

         <div class="container" style="padding-top:30px">
  <div>
  <form class="containe" id="f" style="float:right;">
  <input type="search" id="k" placeholder="Search for all Friends"  onkeyup="searchBases(this.value)" >
  <i class="fa fa-search" id="s"></i>
  </form>
</div>
        <section class="py-5" style=";">
        <div class=' card card-body bos' style="margin-top:5px">
        </section>
      </div>

        <?php
        require 'dc.php';
        $result = mysqli_query($con, "select * from friend_tb where emails ='$_SESSION[email]' and friends_id='$_SESSION[ctid]'");
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
           out += "<a href='groupchat.php?gpn="+arr[i].client_id+"'><div class='animated slideInRight chip' style='color:<?php echo $_SESSION['color'] ?>;width:100%;height:50px;text-align:cente'><img src='"+arr[i].passport+"' >"+arr[i].username+"<hr></div><br><br></a>";

               }
             $('.bos').html(out);
                  });
                  }
        </script>
        </div>
                                      <!--   END OF FRIEND
                                        BEGINNING OF GROUP -->

      <div class="animated fadeInLeft tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
    <div class="container" style="padding-top:30px">
  <div>
  <form class="containe" id="f" style="float:right;">
  <input type="search" id="k" placeholder="Search for all Groups"  onkeyup="searchBass(this.value)" >
  <i class="fa fa-search" id="s"></i>
  </form>
</div>
        <section class="py-5" style=";">
        <div class=' card card-body bot' style="margin-top:;">
        </section>
      </div>
       </div>

         <?php
              require 'dc.php';
              $test=mysqli_query($con, "select * from groupmember_tb where group_name='$_SESSION[j]'");
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
            out += "<a href='groupchat.php?gpn="+arr[i].group_name+"'><div class='chip animated slideInRight' style='color:<?php echo $_SESSION['color'] ?>;width:100%;text-align:center'><img src='"+arr[i].grouppic+"' alt='Person' width='96' height='96'>"+arr[i].group_name+"<hr></div><br><br></a>";

            }
            $('.bot').html(out);
            });
            }
    </script>

                          <!--  THE MODALS -->
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
<div id="PrimaryModalftblack" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                           <form id="data" role="form" action="upload.php" method="post" enctype="multipart/form-data">


                                    <div class="modal-body">
                                        <img src="<?php echo $_SESSION[pass] ?>" style="width:60px;height:60px;border-radius:20%;"><br>

                                        <h6 style="color:white;font-size:20px">[Choose Picture to Upload]</h6>
                                                    <center>     
<span id="error" class='alert alert-danger alert-mg-b alert-success-style4 alert-st-bg3 alert-st-bg14'></span>
      </center>
            <label class="custom-file-upload" id="dass">
            <input type="file" name="fileToUpload" id="files" hidden="hidden" required>
           <i class="fa fa-photo" style="color:white;float:left;margin-top:2px" name="pics"></i>
          </label>

          <h6 style="color:white;font-size:20px;margin-top:-25px">[Picture's Comment Here]</h6>
          <textarea class="form-control" name="message"></textarea><br>
          


                                    <div class="">
                                        <a class="btn" data-dismiss="modal" href="#" style="background-color:<?php echo $_SESSION['color']; ?>;color:white;font-size:18px">Cancel</a>
                                       <input id="submit" type="button" class="btn" style="background: <?php echo $_SESSION['color']; ?>;color: white;font-size:18px;width:70px" value="Post">
                                    </div>
                                      </form>
                                </div>
                            </div>
                        </div>
<script src="http://localhost/Vchat/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://localhost/Vchat/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/metisMenu/metisMenu.min.js"></script>
    <script src="http://localhost/Vchat/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/morrisjs/raphael-min.js"></script>
    <script src="http://localhost/Vchat/js/morrisjs/morris.js"></script>
    <script src="http://localhost/Vchat/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="http://localhost/Vchat/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/calendar/moment.min.js"></script>
    <script src="http://localhost/Vchat/js/calendar/fullcalendar.min.js"></script>
    <script src="http://localhost/Vchat/js/calendar/fullcalendar-active.js"></script>
    <script src="http://localhost/Vchat/js/cropper/cropper.min.js"></script>
    <script src="http://localhost/Vchat/js/cropper/cropper-actice.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/plugins.js"></script>

    <!-- main JS
        ============================================ -->
    <script src="http://localhost/Vchat/js/main.js"></script>
    </body>
    </html>
              <?php
}
else{
  header("location:login.php");
}
?>