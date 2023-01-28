<html>

<head>
  <title>Emergency</title>
  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Footer/style.css">
  <!--Bootstrap Connection-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
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
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Student/complaint_style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Student/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Student/request.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Header/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Header/modes.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/common.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/chat.css">
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
  <style>
    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/profile.svg");
    }

    .darkbtn {
      position: absolute;
      margin-left: 10px;
    }

    .eyebtn {
      margin-right: 10px;
    }

    .tbl {
      background-color: #e6e6e6;
    }

    .topic {
      padding-top: 15%;
    }

    .proimg2 {
      width: 8%;
      border-radius: 50%;
      position: relative;

    }

    .nt {
      position: absolute;
      margin-left: 15%;
    }

    .btn {
      background-color: #c2fbd7;
      border-radius: 50px;
      border-width: 0;
      box-shadow: rgba(25, 25, 25, .04) 0 0 1px 0, rgba(0, 0, 0, .1) 0 3px 4px 0;
      color: green;
      cursor: pointer;
      display: inline-block;
      font-family: Arial, sans-serif;
      font-size: 1em;
      height: 50px;
      padding: 0 25px;
      transition: all 200ms;
    }

    .btn:hover {
      background-color: #afe6c3;
      transform: scale(1.05);
    }
  </style>
</head>

<body>


  <?php
  $session = \Config\Services::session();
  $session = session();
  $user = $_SESSION["user_id"];
  foreach ($user as $d) {

  ?>

    <div class="row headerPart">
      <nav class="navbar navbar-custom navbar-expand-lg fixed-top" style="position:fixed;">
        <div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>

          <div class="row ">
            <div class="col-md-12 test">
              <div class="navbar-header headingPage">
                <h1 class="navbar-brand d-none d-sm-none d-md-block texthead1" id="texthead1">HOSTEL MANAGEMENT SYSTEM</h1>

                <h1 class="navbar-brand d-block d-sm-block d-md-none textheadTwo" id="texthead2">HOSTEL MANAGEMENT SYSTEM</h1>
              </div>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand abrand" href="#"><img src="<?= base_url() ?>/assets/images/Header/logo.png" class="proimg"></a>
            <div class="row" style="padding-top: 50px;">
              <ul class="navbar-nav nt">
                <div class="col-md-2.5">
                  <li class="nav-item">
                    <a class="nav-link nl active" href='<?php echo base_url(); ?>/stu_dashboard'>MY PROFILE</a>
                  </li>
                </div>
                <div class="col">
                  <a class="nav-link dropdown-toggle nl" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    REQUEST
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/leave_request'>LEAVE</a></li>
                    <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/stu_change_room_request'>CHANGE ROOM</a></li>
                    <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/stu_medical_request'>MEDICAL</a></li>
                    <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/stu_furniture_repair'>REPAIR</a></li>

                    <li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/register'>REGISTER</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item dropdown">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_notice'>NOTICES</a>
                  </li>
                  <!-- <a class="nav-link dropdown-toggle nl" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            VIEW
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/stu_attendance'>ATTENDANCE</a></li>
                          <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/stu_notice'>NOTICE</a></li>
                        
                        </ul>
             </li> -->
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_chat'>CHAT</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href="" data-toggle="modal" data-target="#paidfees1">PAYMENT</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href="HOME/logout">LOGOUT</a>
                  </li>
                </div>
                <div class="col">

                </div>

              </ul>
            </div>
            <img src="<?= base_url() ?>/assets/images/Profiles/Student/<?php echo $d['pro_pic'];  ?>"" class=" logoT">
            <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
            <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
          </div>

      </nav>
      <div class="container " style="padding-top:5%;padding-left:5%">
        <div class="row">
          <div class="col-md-3 intro">
            <h3 class="myRoomHead">PROFILE</h3>
            <p>
              Welcome to hostel management system to manage your personal data
            </p>
          </div>
          <div class="col-md-7 headBG">
            <!--<img src="assets/images/Header/room.webp" class="imgHeader">-->

          </div>
        </div>
        <div class="row" style="position:absolute;top:86%;left:29%;z-index:110;">
          <i class="fas fa-arrow-circle-down downBtn" type="button" onclick="functionScrollMe()"></i>

        </div>
      </div><br>
      <svg xmlns="http://www.w3.org/2000/svg" class="svgBG" viewBox="0 0 1440 210">
        <path class="pathsvg" fill="#fff" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,186.7C640,171,800,85,960,48C1120,11,1280,21,1360,26.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>

      </svg>

    </div>

    <div class="container">
      <div class=" text-center mt-5 ">
        <br><br><br><br>
      </div>
      <div class="row ">
        <div class="col-lg-7 mx-auto">
          <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
              <div class="container">
                <center>
                  <h3>Emergency Information</h3>
                </center><br>
                <form id="contact-form" role="form" method="post" action="<?= base_url() ?>/Student_Otp/OTP_verify">
                  <div class="controls">
                    <div class="row">

                      <div class="col-md-12">
                        <select class="form-control " class="form-group" name="msg_type" required>
                          <option selected>Choose Emergency</option>
                          <option value="sick">Sick</option>
                          <option value="ragging">Ragging</option>
                        </select><br>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"><input type="submit" class="btn btn-success btn-send pt-2 btn-block " class="btn" value="Send Message" name="send"> </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- complaint model -->

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <!--Content-->
          <div class="modal-content text-center">
            <!--Header-->

            <div class="modal1-header d-flex justify-content-center">

              <h4 class="heading">Send Complaints</h4>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                                  <span aria-hidden="true">&times;</span>
                                                </button> -->


            </div>



            <form method="post" action="<?= base_url() ?>/Student_Complaint/complaint" autocomplete="off">
              <div class="modal1-body">

                <select class="form-control " name="rec" required>
                  <option selected>Choose to send</option>
                  <option value="warden">Warden</option>
                  <option value="sub_warden">Sub-Warden</option>
                  <option value="dean">Dean</option>
                </select><br>


                <!-- <input name="date" id="date" class="form-control" type="date" placeholder="Enter Date"><br>
       <input name="time" id="time" class="form-control" type="time" placeholder="Enter Time"><br> -->
                <input name="subject" id="sub" class="form-control" type="text" placeholder="Subject" required><br>
                <textarea name="complaint" id="comp" class="form-control" type="text" placeholder="Enter your complaints" required></textarea>
                <br>
              </div>
              <div class="modal-footer">
                <button name="insert" id="insert" class="btn btn-info" style="background-color:#006666;"> Send </button>
                <button class="btn btn-outline-info waves-effect" style="background-color:#006666;" data-dismiss="modal">Close</button>

              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="footer topFooter" style="margin-top:10%;">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3>About</h3>
                <p>This is the system for the hostel management for the faculty of technology, University of Ruhuna</p>
              </div>
              <div class="col-md-4"></div>
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



    <?php
  } ?>
</body>

</html>