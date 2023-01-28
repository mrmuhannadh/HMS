<html>

<head>
  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">
  <title>Dashboard-Security</title>


  <!-- camera connection -->
  <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>



  <!--Bootstrap Connection-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!--crypto-->
  <script src="http://crypto-js.googlecode.com/svn/tags/3.0.2/build/rollups/md5.js"></script>
  <!--CSS Connection-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/profile.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Header/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/modes.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/common.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Footer/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/profile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <!--New-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="<?= base_url() ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/css/jquery-confirm.min.css" rel="stylesheet" type="text/css">

  <link href="<?= base_url() ?>/assets/css/formValidation.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">


  <script src="<?= base_url() ?>/assets/js/formValidation.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/bootstrap_validation.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/toastr.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/jquery-confirm.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <style>
    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/profile.svg");
    }

    body {
      background-color: white;
      color: black;
    }

    * {
      font-family: Clip;
    }

    .darkbtn {
      position: absolute;
      margin-left: 10px;
    }

    .eyebtn {
      margin-right: 10px;
    }

    .tbl {
      background-color: rgba(255, 255, 255, 0.001);
      color: white;
    }

    .topic {
      font-size: 3em;
    }

    .tblUser {
      background-color: rgba(255, 255, 255, 0.001);
      color: white;
    }

    .tblUser:hover {
      background-color: rgba(255, 255, 255, 0.05);
      color: white;
      border-radius: 2%;
      transition: 0.5s all ease-in-out;

      transform: scale(1.05);
    }

    .textheadOne {
      display: none;
      color: red;
    }
  </style>
</head>

<body>


  <!--Bring me into top-->
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <div class="goUpBtn" onmouseover="myFunctionShowWord()" onmouseout="myFunctionHideWord()"><i class="fas fa-arrow-circle-up angleTop"></i>&nbsp;<span class="gotoTopCls" style="display:none">Go Top</span></div>
  </button>

  <script type="text/javascript">
    function myFunctionShowWord() {
      $('.gotoTopCls').show(500);
    }

    function myFunctionHideWord() {
      //$('.gotoTopCls').hide(500);
    }
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";

      } else {
        document.getElementById("myBtn").style.display = "none";


      }
    }

    function topFunction() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }
  </script>

  <?php

  $session = session();
  $_SESSION["se_student"] = null;
  $user = $_SESSION["user_id"];
  foreach ($user as $d) {
    $us_id = $d['user_id'];
  ?>




    <script>
      function myFunction() {
        var element = document.body;
        sub
        element.classList.toggle("dark-mode");
      }

      function myFunctionEye() {
        var element = document.body;
        element.classList.toggle("read_mode");
      }
    </script>
    <div class="row headerPart">
      <nav class="navbar navbar-custom navbar-expand-lg fixed-top" style="position:fixed;">
        <div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>

          <div class="row ">
            <div class="col-md-12 test">
              <div class="navbar-header headingPage">
              <h1 class="navbar-brand d-none d-sm-none d-md-block texthead1" id="texthead1">HOSTEL MANAGEMENT SYSTEM &nbsp; FOT-UOR</h1>
              </div>
            </div>
          </div>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand abrand" href="#"><img src="<?= base_url() ?>/assets/images/Header/logo.png" class="proimg"></a>
            <div class="row" style="padding-top: 50px;">
              <ul class="navbar-nav nt">
                <li class="nav-item">
                  <a class="nav-link nl" href='<?php echo base_url(); ?>/Security_login'>PROFILE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl" href='<?php echo base_url(); ?>/Send_sms_student'>SEND SMS TO STUDENT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl active" href='<?php echo base_url(); ?>/log_atte'>STUDENT_ENTER_LOG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl" href='<?php echo base_url(); ?>/chat_s'>CHATS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl" href="HOME/logout">LOGOUT</a>
                </li>
              </ul>
            </div>

            <img src="<?= base_url() ?>/assets/images/Profiles/Security/<?php echo $d['pro_pic'];  ?>"" class=" logoT" href="#" id="dropDownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
            <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
          </div>
      </nav>
      <div class="container " style="padding-top:5%;padding-left:5%">
        <div class="row">
          <div class="col-md-3 intro">
            <h3 class="myRoomHead">Maintenance Attendance</h3>
            <p>
              Welcome to hostel management system to get Attendance
            </p>
          </div>
          <div class="col-md-7 headBG">
            <!--<img src="assets/images/Header/room.webp" class="imgHeader">-->

          </div>
        </div>
        <div class="row" style="position:absolute;top:86%;left:29%;">
          <i class="fas fa-arrow-circle-down downBtn" type="button" onclick="functionScrollMe()"></i>
        </div>
      </div><br>
      <svg xmlns="http://www.w3.org/2000/svg" class="svgBG" viewBox="0 0 1440 200">
        <path class="pathsvg" fill="#fff" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,186.7C640,171,800,85,960,48C1120,11,1280,21,1360,26.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
      </svg>

    </div>
    <img src="">

    <script>
      function functionScrollMe() {
        var map = document.getElementById('proDiv');
        //alert("s");
        map.scrollIntoView({
          behavior: "smooth"
        });
      }

      //navbar
      $(function() {
        $(document).scroll(function() {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
    </script>
    </div>




    <!-- body part -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5"><br><br>
          <p>
            <h>
              <center> SCAN QR CODE OR ENTER THE TG NUMBER </center>
              <h>
          </p>
          <center>
            <p>SCAN QR CODE HERE</p>
            <video id="preview" width="50%"></video><br>
            <br>OR<br>
            <label>ENTER THE TG NUMBER HERE</label><br>

            <form action="logA" method="POST">
              <div class="col-md-5">
                <input type="text" name="text" id="text" readonyy="" placeholder="scan QRcode" class="form-control" style="width: 300x;">
              </div>
              <div class="col-md-5">
                <input type="submit" class="btn btn-primary" value="Get Attendance">
              </div>
            </form>
          </center>
        </div>
        <?php

        $session = session();
        //get time data      
        $st_att = $_SESSION["att_student"];
        if ($st_att == null) {
        }

        // student details  
        $at_st_details = $_SESSION["at_st_details"];








        ?>

        <div class="col-md-7"><br><br>
          <p>
            <h>
              <center>DETAILS OF STUDENT</center>
            </h>
          </p>
          <form>
            <div class="form-row">
              <div class="col"><?php
                                foreach ($at_st_details as $s) {
                                ?>
                  <center><img src="<?= base_url() ?>/assets/images/Profiles/Student/<?php echo $s['pro_pic'];  ?>" style=" border-radius: 25px;border: 2px solid #73AD21;padding: 20px;width: 200px;height: 150px;"></center>
                  <div style="padding-left: 150px;">First name <input type="text" class="form-control" placeholder="First name" style="width:75%;" value="<?php echo $s["first_name"]; ?>">
                    Last name <input type="text" class="form-control" placeholder="Last name" style="width: 75%;" value="<?php echo $s["last_name"]; ?>">
                  <?php
                                }
                  ?>
                  <b>Last Attendance</b><br>
                  <?php

                  foreach ($st_att as $att_student) {

                    if ($att_student["exit_date"] == "0000-00-00") {

                      echo "<table border='1' class='table table-striped table-hover'> <tr>";
                      echo  "<td><label>Enter Date</label></td>";

                      echo "<td><label>";
                      echo $att_student["enter_date"];
                      echo "</label></td></tr>";

                      echo "<tr>";
                      echo  "<td><label>Enter Time</label></td>";
                      echo "<td><label>";
                      echo $att_student["enter_time"];
                      echo "</label></td></tr></table>";
                    } else {
                      echo "<table border='1' class='table table-striped table-hover'> <tr>";
                      echo  "<td><label>Enter Date</label></td>";

                      echo "<td><label>";
                      echo $att_student["enter_date"];
                      echo "</label></td></tr>";

                      echo "<tr>";
                      echo  "<td><label>Enter Time</label></td>";
                      echo "<td><label>";
                      echo $att_student["enter_time"];
                      echo "</label></td></tr>";



                      echo  "<tr><td><label>Exit Date</label></td>";

                      echo "<td><label>";
                      echo $att_student["exit_date"];
                      echo "</label></td></tr>";

                      echo "<tr>";
                      echo  "<td><label>Exit Time</label></td>";
                      echo "<td><label>";
                      echo $att_student["exit_time"];
                      echo "</label></td></tr></table>";
                    }
                  }
                  ?>
          </form>
          <form action="logAA" method="post">
            <input type="submit" value="Update attendance" class="btn btn-primary">
          </form>
          <!-- TimeIN <input type="text" class="form-control" placeholder="First name" style="width:75%;" value="<?php //echo $att_student["enter_date"];
                                                                                                                  ?>">
                    TimeOUT <input type="text" class="form-control" placeholder="Last name" style="width: 75%;" value="<?php  // echo $att_student["exit_date"];
                                                                                                                        ?>"> -->
        </div>
      </div>
    </div>
    </form>

    </div>
    </div>
    </div>

    <script type="text/javascript">
      let scanner = new Instascan.Scanner({
        video: document.getElementById('preview')
      });

      scanner.addListener('scan', function(content) {
        console.log(content);
      });

      Instascan.Camera.getCameras().then(function(cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function(e) {
        console.error(e);
      });

      scanner.addListener('scan', function(c) {
        document.getElementById('text').value = c;
      });
    </script>









    <div class="footer topFooter" style="margin-top:10%;">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-4 GoogleMap">
              <div id="map-container-google-2" class="map-container" style="height: 210px">

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15869.987621536053!2d80.5419973!3d6.0635172!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x717cf948bd5444ff!2sFaculty%20of%20Technology%2C%20University%20of%20Ruhuna!5e0!3m2!1sen!2slk!4v1653208480088!5m2!1sen!2slk" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>

            <div class="col-md-3">
              <h3>About</h3>
              <p>This is the system for the hostel management for the faculty of technology, University of Ruhuna</p>
            </div>

            <div class="col-md-2">
              <h3>Useful Links</h3>
              <div><a href="" class="link">TECMIS</a></div>
              <div><a href="" class="link">TECLMS</a></div>
              <div><a href="" class="link">TECWEB</a></div>
              <div><a href="" class="link">Faculty of Technology</a></div>
              <div><a href="" class="link">University of Ruhuna</a></div>
            </div>
            <div class="col-md-3">
              <img src="<?= base_url() ?>/assets/images/Header/logo.png" class="logoT">

            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="fixedFooter">
      FACULTY OF TECHNNOLOGY - UNIVERSITY OF RUHUNA
    </footer>

    <script>
      window.sr = ScrollReveal();
      sr.reveal('.topic', {
        duration: 1000,
        origin: 'left',
        distance: '50px'
      });

      sr.reveal('.propic', {
        duration: 1200,
        origin: 'left',
        distance: '50px'
      });
      sr.reveal('#sub', {
        duration: 1300,
        origin: 'top',
        distance: '20px'
      });
      sr.reveal('.pwIcon', {
        duration: 2000,
        origin: 'left',
        distance: '20px'
      });
      sr.reveal('.newDiv', {
        duration: 1500,
        origin: 'top',
        distance: '20px'
      });
      sr.reveal('.ql', {
        duration: 1500,
        origin: 'left',
        distance: '20px'
      });
      sr.reveal('.link1', {
        duration: 1600,
        origin: 'top',
        distance: '40px'
      });
      sr.reveal('.link2', {
        duration: 1900,
        origin: 'top',
        distance: '40px'
      });
      sr.reveal('.link3', {
        duration: 2100,
        origin: 'top',
        distance: '40px'
      });
      sr.reveal('.link4', {
        duration: 2400,
        origin: 'top',
        distance: '40px'
      });
    </script>
  <?php
  }


  ?>
</body>

</html>