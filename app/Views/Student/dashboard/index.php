<html>

<head>
  <title>Student-Dashboard</title>
  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Footer/style.css">
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
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Student/notice_style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Student/style.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Header/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Student/complaint_style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/modes.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/common.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/style.css">
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

    body {
      background-color: white;
      color: black;
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
  </style>
</head>

<body>

  <?php
  $session = \Config\Services::session();
  $session = session();
  $user = $_SESSION["user_id"];
  foreach ($user as $d) {
    $us_id = $d['student_id'];

  ?>
    <div class="row headerPart d-none d-sm-none d-md-block">
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

                <div class="col-md-1.5">
                  <li class="nav-item">
                    <a class="nav-link nl active" href='<?php echo base_url(); ?>/stu_dashboard'>MY PROFILE</a>
                  </li>
                </div>
                <div class="col">
                  <a class="nav-link dropdown-toggle nl" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    REQUEST
                  </a>
                  <ul class="dropdown-menu mymenu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/leave_request'>LEAVE</a></li>
                    <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/stu_change_room_request'>CHANGE ROOM</a></li>
                    <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/stu_medical_request'>MEDICAL</a></li>
                    <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/stu_furniture_repair'>REPAIR</a></li>

                    <li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <!-- <a class="nav-link nl" href='<?php echo base_url(); ?>/register'>REGISTER</a> -->
                    <a class="nav-link nl" href="" onclick="functionRegister()" data-toggle="modal" data-target="#ModalReg">REGISTER</a>

                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_notice'>NOTICES</a>
                  </li>

                  <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nl" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            VIEW
                          </a>
                          <ul class="dropdown-menu mymenu" aria-labelledby="navbarDropdownMenuLink">
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
                    <a class="nav-link nl" href="" data-toggle="modal" data-target="#myModal">COMPLAINTS</a>
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
            <div id="theHeaderProImage" class="theHeaderPro"></div>
            <!-- <img src="<?= base_url() ?>/assets/images/Profiles/Student/<?php echo $d['pro_pic'];  ?>" class="logoT"> -->
            <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
            <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
          </div>


      </nav>

      <div class="container " style="padding-top:5%;padding-left:5%;">
        <div class="row">
          <div class="col-md-3 intro">
            <h3 class="myRoomHead">PROFILE</h3>
            <p class="myRoomHeadp">
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


    <!--Mobile view-->
    <div class="d-block d-sm-block d-md-none">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand" href="#" style="color:white;">HOSTEL MANAGEMENT SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mySet" id="navbarNavDropdown">

          <div class="row">
            <div class="col" style="width:40%"><img src="<?= base_url() ?>/assets/images/Header/logo.png" style="width:55px;"></div>
            <div class="col myHeadMob" style="width:60%">
              <div class="row" style="padding-top:2%;">FACULTY OF TECHNOLOGY</div>
              <div class="row">UNIVERSITY OF RUHUNA</div>
            </div>
          </div>
          <ul class="navbar-nav" style="padding-left:5%;">
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_dashboard' style="color:white">PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/leave_request' style="color:white">LEAVE REQUEST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_change_room_request' style="color:white">CHANGE ROOM REQUEST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_medical_request' style="color:white">MEDICAL REQUEST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_furniture_repair' style="color:white">REPAIR REQUEST</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color:white;font-weight:bold" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
              </a>
              <div class="dropdown-menu menuDrop" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item dop" href="" data-toggle="modal" data-target="#myModal">COMPLAINTS</a>
                <a class="dropdown-item dop" href='<?php echo base_url(); ?>/stu_chat'>CHAT</a>
                <a class="dropdown-item dop" href='<?php echo base_url(); ?>/stu_notice'>NOTICES</a>
                <a class="dropdown-item dop" href="" data-toggle="modal" data-target="#paidfees1">PAYMENT</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--Mobile view end-->


    <script>
      function functionScrollMe() {
        var map = document.getElementById('dataUser');
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
    <div class="row">


      <div class="col-md-12 mt-5 text-right" style="right:4%;">

        <!-- <a type="button"  href='<?php echo base_url(); ?>/student_otp' id="myBtnEmer" class="btn btn-primary" style="display:block"> Emergency</a> -->
        <i class="fas fa-exclamation-triangle triEmr" id="com2" data-toggle="modal" data-target="#emegency"> </i>
        <!-- onclick="myFunction()" -->
      </div>
    </div>

    <script>
      //navbar
      $(function() {
        $(document).scroll(function() {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
    </script>

    <script>
      window.onload = function() {
        var user = <?php echo json_encode($us_id); ?>;
        $.ajax({
          url: "Student_Dashboard/getProPicOfMine",
          method: "POST",
          data: {
            user: user
          },
          success: function(data) {
            //alert(data);
            $('#displayProfile').html(data);
          },
          error: function(data) {
            alert("Cannot load the profile pic");
          }
        });

        $.ajax({
          url: "Student_Dashboard/getProPicOfMineForHeader",
          method: "POST",
          data: {
            user: user
          },
          success: function(data) {
            //alert(data);
            $('#theHeaderProImage').html(data);
          },
          error: function(data) {
            alert("Cannot load the profile picture");
          }
        });
      };
    </script>


    </div>

    <script>
      function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
      }

      function myFunctionEye() {
        var element = document.body;
        element.classList.toggle("read_mode");
      }
    </script>

    <div class="row" id="detailsUser" style="padding-top:5%;">
      <div class="col-md-8">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-5">

                <form method="post" action="<?php echo base_url('Student_Dashboard/update_propic'); ?>" enctype="multipart/form-data">
                  <div class="proImgArea" onclick="triggerClick()" id="displayProfile">


                  </div>

                  <input type="hidden" value="<?php echo $us_id; ?>" name="user_id">
                  <input type="file" name="image" onchange="displayImage(this)" id="file" class="form-control" accept="image/*" style="display:none;">
                  <div class="container cn">
                    <div class="row">
                      <div class="col-md-9">
                        <button type="submit" name="submit" class="btn btn-primary btn-block custom_btn" style="color:black;margin:5% 0% 0% 10%;" id="sub">UPDATE</button>
                      </div>
                      <!-- <div class="col-md-3" style="padding-top:5%">
                        <i class="fas fa-key pwIcon" style="font-size:25px;" type="button" id="changePassword" id="pwBtn" data-toggle="modal" data-target="#exampleModalCenter2"></i>
                      </div> -->
                    </div>

                  </div>

                  <script>
                    $('#displayProfile').click(function() {
                      $('#file').trigger('click');
                    });
                  </script>



                </form>
              </div>
              <div class="col-md-7">
                <script>
                  $(document).ready(function() {
                    var userID = <?php echo json_encode($us_id); ?>;
                    $.ajax({
                      url: "Student_Dashboard/get_details",

                      type: "POST",
                      data: {
                        the_user: userID
                      },
                      success: function(data) {
                        //alert(data);
                        $('#dataUser').html(data);
                      },
                      error: function(data) {
                        alert("Cannot get details");
                      }

                    });
                  });
                </script>

                <div id="status"></div>
                <div id="dataUser">




                </div>
                <div class="row">
                  <div class="col-md-3" style="padding-top:5%">
                    <i class="fas fa-key pwIcon" style="font-size:25px;" type="button" id="changePassword" id="pwBtn" data-toggle="modal" data-target="#exampleModalCenter2"></i>
                  </div>

                  <div class="col-md-4 text-right" style="padding-top:5%">
                    <i class="fa fa-pencil-square-o" style="font-size:25px;" type="button" data-toggle="modal" id="updateBtn" data-target="#exampleModalCenter"></i>




                    <!-- Modal2 -->
                    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <form autocomplete="off">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">CHANGE PASSWORD</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                              <div id="statusPW">

                              </div>
                              <table border="0" class="table table-borderless table-light tbl ">

                                <div class="form-group">
                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="validationCustom01" class="form-label">CURRENT PASSWORD</label>
                                        <input type="password" class="form-control" id="pwdCurrent" name="oldPW" required>
                                        <small class="form-text text-muted">You must enter the old password here</small>
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </div>
                                <div class="form-group">
                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="validationCustom01" class="form-label">NEW PASSWORD</label>
                                        <input type="password" class="form-control" name="newPw" id="newPw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                        <small class="form-text text-muted">Password must contain Numbers,Letters and Special Characters</small>
                                        <div id="pwValid"></div>
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </div>
                                <div class="form-group">
                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="validationCustom01" class="form-label">RE_ENTER PASSWORD</label>
                                        <input type="password" class="form-control" name="newPwRe" id="newPwConform" required>
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </div>

                              </table>
                            </div>

                            <div class="form-group" style="padding-right:20px;"><span id="message" style="display:none;"></span></div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                              <button type="button" class="btn btn-primary" id="changePwd">CHANGE PASSWORD</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <script>
                      //disable
                      $('#changePassword').click(function() {
                        //document.getElementById("changePwd").disabled = true;
                        document.getElementById("newPwConform").disabled = true;
                      });

                      //disappear div
                      $(function() {
                        setTimeout(function() {
                          $("#insideStatus").fadeOut(1500);
                        }, 5000)

                      })


                      //pw validation
                      var pwInput = document.getElementById("newPw");

                      pwInput.onkeyup = function() {
                        var pwInputVal = document.getElementById("newPw").value;
                        //alert(pwInputVal);
                        var regularExpression = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
                        if (regularExpression.test(pwInputVal)) {
                          //alert("Nom");
                          document.getElementById("newPwConform").removeAttribute('disabled');
                          //document.getElementById("pwValid").innerHTML = "You should at least one number, one lowercase and one uppercase letter";  
                          $('#pwValid').html('Strong password').css('color', 'green');
                          $('#message').css('display', 'block');
                        } else {
                          $('#pwValid').html('You should at least one number, one lowercase and one uppercase letter and minimum length is 6').css('color', 'red');
                          document.getElementById("newPwConform").disabled = true;
                        }

                      }
                      //live check
                      $('#newPw, #newPwConform').on('keyup', function() {

                        if ($('#newPw').val() == $('#newPwConform').val()) {

                          $('#message').html('Matching').css('color', 'green');
                          document.getElementById("changePwd").removeAttribute('disabled');
                        } else {
                          //$('#message').css('display','block');
                          $('#message').html('Not Matching').css('color', 'red');
                          document.getElementById("changePwd").disabled = true;
                        }
                      });


                      //Ignore Resubmission on refresh-->
                      if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                      }

                      //update user details

                      $('#updateBtn').click(function() {
                        //alert("inUp");
                        var userID = <?php echo json_encode($us_id); ?>;
                        $.ajax({
                          url: "Student_Dashboard/model_click_update",

                          type: "POST",
                          data: {
                            the_user: userID
                          },
                          success: function(data) {
                            //alert(data);
                            $('#bodMod').html(data);
                          },
                          error: function(data) {
                            alert("Something went wrong");
                          }

                        });
                      });

                      //change password
                      $('#changePwd').click(function() {
                        var userID = <?php echo json_encode($us_id); ?>;
                        var oldPw = document.getElementById("pwdCurrent").value;

                        var newPw = document.getElementById("newPw").value;
                        $.ajax({
                          url: "Student_Dashboard/changePassword",

                          type: "POST",
                          data: {
                            userID: userID,
                            oldPw: oldPw,
                            newPw: newPw
                          },
                          success: function(data) {
                            //alert(data);
                            $('#statusPW').html(data);
                          },
                          error: function(data) {
                            alert("Something went wrong");
                          }

                        });

                      });
                    </script>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">EDIT BASIC DETAILS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form class="row g-3 needs-validation" id="formUpdate" novalidate>
                            <div class="modal-body">
                              <div id="bodMod">

                              </div>




                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                                <button class="btn btn-primary" type="submit" name="update" id="updateDet">UPDATE</button>

                              </div>

                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                    <script>
                      (function() {
                        'use strict'

                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.querySelectorAll('.needs-validation')

                        // Loop over them and prevent submission
                        Array.prototype.slice.call(forms)
                          .forEach(function(form) {
                            form.addEventListener('submit', function(event) {
                              if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                              }

                              form.classList.add('was-validated')
                            }, false)
                          })
                      })()
                    </script>

                  </div>
                </div>



              </div>
            </div>
          </div>
        </div>

      </div>
      <script>
        $('#updateDet').click(function() {
          var user = "<?= $us_id ?>";
          var Fname = document.getElementById("fname").value;
          var Lname = document.getElementById("lname").value;
          var mobile = document.getElementById("mobile").value;
          var email = document.getElementById("email").value;
          var address = document.getElementById("address").value;
          //alert(user);
          $.ajax({
            url: "Student_Dashboard/update_user",

            type: "POST",
            data: {
              user: user,
              Fname: Fname,
              Lname: Lname,
              mobile: mobile,
              email: email,
              address: address

            },
            success: function(data) {
              //alert(data);
              //$('#status').html("updated");
            },
            // error: function (data) {
            //   alert("Something went wrong");
            // }

          });
        });
      </script>

      <div class="col-md-4">
        <h2>QUICK LINKS</h2>
        <table class="table table-dark">
          <tr>
            <td><a href="http://www.tec.ruh.ac.lk/" class="impLink">Faculty Of Technology</a></td>
          </tr>
          <tr>
            <td><a href="https://paravi.ruh.ac.lk/tecmis/" class="impLink">TECMIS</a></td>
          </tr>
          <tr>
            <td><a href="http://teclms.ruh.ac.lk/login/index.php" class="impLink">TECLMS</a></td>
          </tr>
          <tr>
            <td><a href="" class="im
                        pLink">TECWEB</a></td>
          </tr>
        </table>
        <h2>DOWNLOAD LINKS</h2>
        <table class="table table-dark">
          <tr>
            <td> <a href="<?= base_url() ?>/assets/images/Student/Rules_regulation.pdf" targrt="_blank" class="impLink">Rules & Regulation of the hostel &nbsp;<i class="fas fa-download"></i></a></td>
          </tr>
          <tr>
            <td><a href="<?= base_url() ?>/assets/images/Student/Assets_handover.pdf" targrt="_blank" class="impLink">Assets_Handover Form &nbsp;<i class="fas fa-download"></i></a></td>
          </tr>
          <tr>
            <td> <a href="<?= base_url() ?>/assets/images/Student/Hostel_application.pdf" targrt="_blank" class="impLink">Hostel_Application form &nbsp;<i class="fas fa-download"></i></a></td>
          </tr>
        </table>


      </div>
    </div>



    <!-- Register -->
    <div class="col-md-4">
      <!-- <button class="open-button" onclick="functionRegister()" data-toggle="modal" data-target="#ModalReg">Register</button> -->

      <div class="modal fade" id="ModalReg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12" id="regSet">
                </div>
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



            <form autocomplete="off" method="post" action="<?= base_url() ?>/Student_Complaint/com">
              <div class="modal1-body">

                <select class="form-control " name="receiver" id="receiver" required>

                  <option value="warden">Warden</option>
                  <option value="subwarden">Sub-Warden</option>
                  <option value="dean">Dean</option>
                </select><br>

                <input name="subject" id="mysub" class="form-control" type="text" placeholder="Subject"><br>
                <textarea name="complaint" id="comp" class="form-control" type="text" placeholder="Enter your complaints"></textarea>
                <br>
              </div>
              <div class="modal-footer">
                <button name="insert" id="insert" class="btn btn-primary"> Send </button>
                <button class="btn btn-danger" data-dismiss="modal">Close</button>

              </div>
            </form>
          </div>
        </div>
      </div>



      <!-- Emergency modal -->
      <div class="modal fade" id="emegency" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal2-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal2-body">

              <center>
                <h3>Emergency Information</h3>
              </center><br>

              <form id="contact-form" role="form" autocomplete="off" method="post" action="<?= base_url() ?>/Student_Otp/OTP_verify" target="_blank">
                <div class="controls">
                  <div class="col-md-10">
                    <input type="radio" id="Sick" name="msg_type" value="Sick">
                    <label for="sick">Sick</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="Ragging" name="msg_type" value="Ragging">
                    <label for="Ragging">Ragging</label><br>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group"><input type="text" class="form-control " name="con_no" placeholder="Type your mobile no if you are changed"> </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="modal-footer">
                      <div class="form-group"><input type="submit" class="btn btn-danger" class="btn" value="Send Message" name="send"> </div>
                    </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

      <!-- Fees payment -->
      <div class="modal fade " id="paidfees1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
          <div class="modal-content mod">
            <div class="modal-header">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h4>Student Fees Payment form</h4>
                </div>
              </div>



              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" autocomplete="off">
                <div class="container">

                  <div class="form-group">

                    <div>
                      <input type="number" class="form-control" id="paid_amount" placeholder="Enter Paid Amount" name="paid_amount" required>
                    </div>
                  </div>
                  <div class="form-group">

                    <div>
                      <input type="date" class="form-control" id="paid_date" placeholder="Enter Paid Date" name="paid_date" required>
                    </div>
                  </div>


                  <div class="form-group">

                    <div>
                      <input type="text" class="form-control" id="branch" placeholder="Hostel Fees paid branch" name="branch" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <select class="form-control" id="ac_year">
                      <option>SELECT A YEAR</option>
                      <option value="1">Level 1</option>
                      <option value="2">Level 2</option>
                      <option value="3">Level 3</option>
                      <option value="4">Level 4</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="btn btn-danger" name="submit" onclick="sendFeePayment()">Submit</button>

                    </div>
                  </div>

                </div>
              </form>
              <script>
                function sendFeePayment() {
                  var id = <?php echo json_encode($us_id); ?>;
                  var amount = document.getElementById('paid_amount').value;
                  var date = document.getElementById('paid_date').value;
                  var branch = document.getElementById('branch').value;
                  var ac_year = document.getElementById('ac_year').value;
                  $.ajax({
                    url: "Warden_Fees_information/payFee",
                    method: "POST",
                    data: {
                      id: id,
                      amount: amount,
                      date: date,
                      branch: branch,
                      ye: ac_year
                    },
                    success: function(data) {
                      alert(data);
                    },
                    error: function(data) {
                      alert("Error with payment");
                    }
                  });
                }
              </script>

            </div>

          </div>
        </div>
      </div>

    <?php
  } ?>




    <!-- Bring me into top-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <div class="goUpBtn" onmouseover="myFunctionShowWord()" onmouseout="myFunctionHideWord()"><i class="fas fa-arrow-circle-up angleTop"></i>&nbsp;<span class="gotoTopCls" style="display:none">Go Top</span></div>
    </button>

    <script type="text/javascript">
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


      function myRegisterFunc(x) {
        var user = x;
        var selectdYr = document.getElementById('selectVal').value;
        $.ajax({
          url: "Student_register/regNew",
          method: "post",
          data: {
            id: user,
            level: selectdYr
          },
          success: function(data) {
            // $('#regSet').html(data);
            alert(data);
          },
          error: function(data) {

          }
        });
      }

      function functionRegister() {
        var user = <?php echo json_encode($us_id); ?>;

        $.ajax({
          url: "Student_register/getDues",
          method: "post",
          data: {
            id: user
          },
          success: function(data) {
            $('#regSet').html(data);
            // alert(data);
          },
          error: function(data) {

          }
        });
      }
    </script>
    </div>
    </div>

    <!-- footer -->
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

</body>

</html>