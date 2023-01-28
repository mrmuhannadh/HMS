<html>

<head>
 <!--Title logo-->
 <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">
  <title>Send SMS-Security</title>
  <!--Bootstrap Connection-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!--CSS Connection-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/profile.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Header/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Footer/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/common.css">
  <link rel="stylesheet" type="text/css" href="assets/css/modes.css">
  <link rel="stylesheet" type="text/css" href="assets/css/Warden/chat.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/profile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <!--New-->

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
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/vanilla-tilt.min.js"></script>

  </style>
  <style>
    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/chat1.svg");
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
  </style>

</head>

<body>

  <?php
  $session = session();

  $userm = $_SESSION["user_id"];

  if ($_SESSION["se_student"] == null) {

    $user['data_array'] = array(
      'first_name' => "null",
      'last_name'   => "null",
      'contact_no'    => "null",
      'batch'    => "null",
      'address'    => "null"
    );
  } else {
    $user = $_SESSION["se_student"];
  }
  foreach ($userm as $d) {


  ?>
    <script>
      //navbar
      $(function() {
        $(document).scroll(function() {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
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
                  <a class="nav-link nl active" href='<?php echo base_url(); ?>/Send_sms_student'>SEND SMS TO STUDENT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl" href='<?php echo base_url(); ?>/log_atte'>STUDENT_ENTER_LOG</a>
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
            <h3 class="myRoomHead">PARCEL NORTIFICATION TO STUDENTS</h3>
            <p>
              Welcome to hostel management system to send sms notification to students
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
      <svg xmlns="http://www.w3.org/2000/svg" class="svgBG" viewBox="0 0 1440 220" style="">
        <path class="pathsvg" fill="#fff" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,186.7C640,171,800,85,960,48C1120,11,1280,21,1360,26.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
      </svg>

    </div>

    </div>



    <!-- body part ---------------------------->





    <div class="row">

      <!-- search details of a student -->
      <div class="col-md-4">
        <h4 class="topic"> <b> Search student </b></h4><br>
        <form action="Se_search" method="post" class="justify-content-center">
          &nbsp&nbsp&nbsp&nbsp<input type="text" class="text-upper case" placeholder="Kumar" name="name"> Name<br><br>
          &nbsp&nbsp&nbsp&nbsp<input type="text" placeholder="tg410" name="tg"> TG Number<br><br>
          &nbsp&nbsp&nbsp&nbsp<input type="text" placeholder="0756877873" name="mobile"> Mobile number<br><br>
          &nbsp&nbsp&nbsp&nbsp<input type="submit" name="search" value="search" class="btn btn-primary">
        </form>

      </div>
      <!-- student deatails -->
      <div class="col-md-4"><br><br><br>
        <h4 class="topic3">
          <center><b>Student details</b>
        </h4>
        <table border="0" class="table table-border table-light tbl table-hover  table-striped table-hover-shadow">
          <tr>
            <?php foreach ($user as $us) { ?>
              <th>
                FIRST NAME:
              </th>
              <td>
                <?php echo $us["first_name"]; ?>
              </td>
          </tr>
          <tr>
            <th>
              LAST NAME:
            </th>
            <td>
              <?php echo $us["last_name"]; ?>
            </td>
          </tr>

          <tr>
            <th>
              MOBILE:
            </th>
            <td>
              <?php echo $us["contact_no"]; ?>
            </td>
          </tr>
          <!-- <tr>
                                        <th>
                                            batch: 
                                        </th>
                                        <td>
                                        <?php // echo $us["batch"];
                                        ?>
                                        </td>
                                    </tr>
                                    <tr> -->
          <th>
            ADDRESS:
          </th>
          <td>
            <?php echo $us["address"]; ?>
          </td>
          </tr>

        </table>
        </center>
      </div>
      <!-- send message -->
      <div class="col-md-4">
        <center>
          <h4 class="topic"><b> Send message </b> </h4>
          <form action="security_send_Message" method="POST" target="_blank">
            <table class="table table-borderless table-light tbl table-hover table-striped">
              <tr>
                <td> To </td>
                <td> <input type="text" name="moblieA" value="<?php echo $us["contact_no"]; ?>"></td>
              </tr>

              <tr>
                <td> Message </td>
                <td> <textarea name="messageA" rows="4" cols="35"> You have a parcel so please come to the security office to get that parcel</textarea></td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input type="submit" value="Send Message" class="btn btn-primary">
                </td>
              </tr>
            </table>
          </form>
        </center>
      </div>

    </div>
    </div>
    </div>


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
          }
?>
</body>

</html>