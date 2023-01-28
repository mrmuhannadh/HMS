<html>

<head>
  <title>Dashboard-Dean</title>
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
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Footer/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Header/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/modes.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/common.css">
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

  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">

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
      background-color: #e6e6e6;
    }

    .topic {
      font-size: 3em;
    }

    .btn {}

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
  $session = \Config\Services::session();
  $session = session();
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
                <div class="col-md-2.5">
                  <li class="nav-item">
                    <a class="nav-link nl active" href="<?php echo base_url(); ?>/pro_d">MY PROFILE</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/dean_room'>ROOMS</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl " href='<?php echo base_url(); ?>/exp_d'>EXPENSES</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl " href='<?php echo base_url(); ?>/chat_d'>CHATS</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/comp_d'>COMPLAINTS</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/not_d'>NOTICES</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/logout'>LOGOUT</a>
                  </li>
                </div>
                <div class="col">

                </div>

              </ul>
            </div>


            <img src="<?= base_url() ?>/assets/images/Profiles/dean/<?php echo $d['pro_pic'];  ?>"" class=" logoT">
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

      </div><br>
      <svg xmlns="http://www.w3.org/2000/svg" class="svgBG" viewBox="0 0 1440 200">
        <path class="pathsvg" fill="#fff" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,186.7C640,171,800,85,960,48C1120,11,1280,21,1360,26.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>

      </svg>

    </div>
    <img src="">
    <div class="row">
      <div class="col-md-12" style="position:absolute;padding-top:2%;top:70%;left:68%;width:450px">
        <h2 class="ql">QUICK LINKS</h2>
        <table class="table table-dark">
          <tr>
            <td><a href="http://www.tec.ruh.ac.lk/" class="impLink link1">Faculty Of Technology</a></td>
          </tr>
          <tr>
            <td><a href="https://paravi.ruh.ac.lk/tecmis/" class="impLink link2">TECMIS</a></td>
          </tr>
          <tr>
            <td><a href="http://teclms.ruh.ac.lk/" class="impLink link3">TECLMS</a></td>
          </tr>
          <tr>
            <td><a href="" class="impLink link4">TECWEB</a></td>
          </tr>
        </table>
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
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-5">

                <form method="post" action="<?php echo base_url('Dean_Dashboard/update_propic'); ?>" enctype="multipart/form-data">

                  <img src="<?= base_url() ?>/assets/images/Profiles/dean/<?php echo $d['pro_pic']; ?>" onclick="triggerClick()" id="displayProfile" class="propic" style="width:75%;border-radius:50%;">

                  <input type="file" name="file" onchange="displayImage(this)" id="file" class="form-control" accept="image/*" style="display:none;">

                  <div class="container cn">
                    <div class="row">
                      <div class="col-md-9">
                        <button type="submit" name="submit" class="btn btn-primary btn-block custom_btn" style="color:black;margin:5% 0% 0% 10%;" id="sub">UPDATE</button>
                      </div>
                      <div class="col-md-3" style="padding-top:5%">
                        <i class="fas fa-key pwIcon" style="font-size:25px;" type="button" id="changePassword" id="pwBtn" data-toggle="modal" data-target="#exampleModalCenter2"></i>
                      </div>
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
                      url: "Dean_Dashboard/get_details",

                      type: "POST",
                      data: {
                        the_user: userID
                      },
                      success: function(data) {
                        //alert(data);
                        $('#dataUser').html(data);
                      },
                      error: function(data) {
                        alert("Something went wrong");
                      }

                    });
                  });

                  function showMoreData() {
                    $('.fixedData').toggle(1000);
                  }
                </script>

                <div id="status"></div>
                <div class="newDiv">
                  <table border="0" class="table table-borderless table-light tbl" style="color:black;background:white">
                    <tbody id="dataUser" class="tblUser" style="color:black;">

                    </tbody>

                    <tbody class="fixedData" style="display:none">
                      <tr>
                        <th>
                          GENDER
                        </th>
                        <td>
                          <?php echo $d['gender'] ?>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          QUALIFICATIONS
                        </th>
                        <td>
                          <?php echo $d['Qualification'] ?>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          DOB
                        </th>
                        <td>
                          <?php echo $d['DOB'] ?>
                        </td>
                      </tr>

                      <tr>
                        <th>
                          JOINED DATE
                        </th>
                        <th>
                          DAYS WORKING
                        </th>
                      </tr>
                      <tr>
                        <td>
                          <?php echo $d['Date_Joined'] ?>
                        </td>
                        <td id="daysWorked">
                          <?php
                          $today = date("Y-m-d");

                          //echo $today;
                          $join = $d['Date_Joined'];
                          $t_d = strtotime($today);
                          $j_d = strtotime($join);
                          //echo $t_d;
                          //echo $j_d;
                          //$working_days=$today->diff($j_d);
                          $working_days = $t_d - $j_d;
                          $w_d = round($working_days / (60 * 60 * 24));
                          //echo $row['Date_Joined']
                          ?>
                        </td>
                        <script>
                          function animateValue(obj, start, end, duration) {
                            let startTimestamp = null;
                            const step = (timestamp) => {
                              if (!startTimestamp) startTimestamp = timestamp;
                              const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                              obj.innerHTML = Math.floor(progress * (end - start) + start);
                              if (progress < 1) {
                                window.requestAnimationFrame(step);
                              }
                            };
                            window.requestAnimationFrame(step);
                          }

                          const obj = document.getElementById("daysWorked");
                          animateValue(obj, 0, <?php echo $w_d; ?>, 2000);
                        </script>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="row">
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-4 text-right">

                    <!-- Modal2 -->
                    <div class="modal fade" style="color:black" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <table border="0" class="table table-borderless table-light" style="color:black">

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

                      /*
                      $('#updateBtn').click(function(){
                      //alert("inUp");
                      var userID = <?php echo json_encode($us_id); ?>;
                      $.ajax({
                            url:"Warden_Dashboard/model_click_update",
                            
                            type:"POST",
                            data:{
                              the_user:userID
                            },
                              success:function(data){
                                //alert(data);
                                $('#bodMod').html(data);
                              },
                          error: function (data) {
                            alert("Something went wrong");
                          }
                            
                          });
                        });
                      */

                      //Newly added function
                      function updateBTN() {

                        var userID = <?php echo json_encode($us_id); ?>;
                        $.ajax({
                          url: "Dean_Dashboard/model_click_update",

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
                      }
                      //change password
                      $('#changePwd').click(function() {
                        var userID = <?php echo json_encode($us_id); ?>;
                        var oldPw = document.getElementById("pwdCurrent").value;

                        var newPw = document.getElementById("newPw").value;
                        $.ajax({
                          url: "Dean_Dashboard/changePassword",

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
                    <div class="modal fade" style="color:black" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">EDIT BASIC DETAILS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form class="row g-3 needs-validation" id="formUpdate" ovalidate>
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
                <div class="row">

                  <?php // } 
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
    } ?>
      </div>
      <script>
        //update values
        /*$('#formUpdate').submit(function(){
          
          var Fname=$('.fname').val();
          var Lname=$('.lname').val();
          var mobile=$('.mobile').val();
          var email=$('.email').val();
          var address=$('.address').val();
          alert(Fname);
          
        });
        */
        $('#updateDet').click(function() {
          var user = "<?= $us_id ?>";
          var Fname = document.getElementById("fname").value;
          var Lname = document.getElementById("lname").value;
          var mobile = document.getElementById("mobile").value;
          var email = document.getElementById("email").value;
          var address = document.getElementById("address").value;
          //alert(user);
          $.ajax({
            url: "Dean_Dashboard/update_user",

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
            error: function(data) {
              alert("Something went wrong");
            }

          });
        });
      </script>
      <div class="col-md-4 link set">

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
              <div><a href="https://paravi.ruh.ac.lk/tecmis/" class="link">TECMIS</a></div>
              <div><a href="http://teclms.ruh.ac.lk/" class="link">TECLMS</a></div>
              <div><a href="" class="link">TECWEB</a></div>
              <div><a href="http://www.tec.ruh.ac.lk/" class="link">Faculty of Technology</a></div>
              <div><a href="https://ruh.ac.lk/index.php/en/" class="link">University of Ruhuna</a></div>
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
</body>

</html>