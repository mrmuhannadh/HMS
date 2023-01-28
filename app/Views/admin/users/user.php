<html>

<head>
  <title>Users-Admin</title>
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

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Header/style.css">
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
  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">

  <style>
    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/top.svg");
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

    .btn1 {
      background: rgba(45, 97, 135, 1);
      color: #fff;
      display: inline-block;
      border-radius: 5px;
      cursor: pointer;
      height: 100px;
      width: 200px;
      font-size: 14px;
      text-align: center;
      text-overflow: ellipsis;
      transition: 0.2s box-shadow ease-in-out, 0.2s background-color ease-in-out;
      white-space: nowrap;
      padding: 1.4em 2em;
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
  $session = \Config\Services::session();
  $session = session();
  $user = $_SESSION["user_id"];
  foreach ($user as $d) {
    // $us_id=$d['user_id'];
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
                    <a class="nav-link nl " href='<?php echo base_url(); ?>/admin_login'>MYPROFILE</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl active" href='<?php echo base_url(); ?>/user'>USERS</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/notice'>NOTICES</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/admin_gallery'>GALLERY</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/admin_complaints'>COMPLAINTS</a>
                  </li>

                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href="HOME/logout">LOGOUT</a>
                  </li>
                </div>

                </li>
            </div>


            <img src="<?= base_url() ?>/assets/images/Profiles/Admin/<?php echo $d['pro_pic'];  ?>"" class=" logoT">
            <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
            <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
          </div>
      </nav>
      <div class="container " style="padding-top:5%;padding-left:5%">
        <div class="row">
          <div class="col-md-3 intro">
            <h3 class="myRoomHead">Manage Users Details</h3>
            <p class="myRoomHeadp">
              Welcome to hostel management system to manage users
            </p>
          </div>
          <div class="col-md-7 headBG">
            <!--<img src="assets/images/Header/room.webp" class="imgHeader">-->

          </div>
        </div>
        <div class="row" style="position:absolute;top:86%;left:29%;z-index:110">

          <i class="fas fa-arrow-circle-down downBtn" type="button" onclick="functionScrollMe()"></i>


        </div>
      </div><br>
      <svg xmlns="http://www.w3.org/2000/svg" class="svgBG" viewBox="0 0 1440 200">
        <path class="pathsvg" fill="#fff" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,186.7C640,171,800,85,960,48C1120,11,1280,21,1360,26.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>

      </svg>

    </div>
    <script>
      function functionScrollMe() {
        //alert("s");
        var map = document.getElementById('adminusr');

        map.scrollIntoView({
          behavior: "smooth"
        });
      }
      $(document).ready(function() {
        //alert("in");

        $.ajax({
          url: "admin_Dashboard/getData",
          data: {
            user: id
          },
          success: function(data) {
            //alert(data);
            $('#tableData').html(data);
          },
          error: function(data) {
            alert("Cannot run");
          }
        });
      });



      //navbar
      $(function() {
        $(document).scroll(function() {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });

      function resetPasseord(x) {
        var user_id = x;
      }


      function deleteUser(x) {

        $.ajax({
          url: "admin_Dashboard/deleteWardenUser",
          method: "post",
          data: {
            user: x
          },
          success: function(data) {
            //$('#divtable').hide(500);
            alert(data);

          },
          error: function(data) {
            alert(data);
          }
        })
      }

      function deleteUserSw(x) {

        $.ajax({
          url: "admin_Dashboard/deleteSubWardenUser",
          method: "post",
          data: {
            user: x
          },
          success: function(data) {
            //$('#divtable').hide(500);
            alert(data);
          },
          error: function(data) {
            alert(data);
          }
        })
      }
    </script>


    <script>
      //navbar
      $(function() {
        $(document).scroll(function() {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
    </script>
    <div class="container first_row" id="adminusr" style="padding-top:2%;overflow:visible;">

      <div>

        <fiv>
          <div class="row">

            <div class="col-md-8">
              <h1 class="topic">
                <p align="left">
                  <!-- <a href="<?= base_url("d_board") ?>" class ="btn btn-danger btn-12m float-end"><i class="fa fa-hand-o-left" aria-hidden="true">&nbsp;&nbsp;Back</i></a>                        -->
                </p>
                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USERS DETAILS</DETAils> </b>

                <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle of elements</button> -->

            </div>
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


          <input type="file" name="file" onchange="displayImage(this)" id="file" class="form-control" accept="image/*" style="display:none;">


          <p>
            <button class="btn1" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" id="dean" aria-expanded="false" aria-controls="multiCollapseExample2"><i class="fa fa-user" aria-hidden="true" style='font-size:24px'></i> Details of Dean</button>
            &nbsp;&nbsp;&nbsp;<button class="btn1" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2" id="warden"><i class="fa fa-user" aria-hidden="true" style='font-size:24px'></i> Details of Warden</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn1" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample3" id="subwarden"><i class="fa fa-user" aria-hidden="true" style='font-size:24px'></i> Details of sub_warden</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn1" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample4" id="security"><i class="fa fa-user" aria-hidden="true" style='font-size:24px'></i> Details of Security</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn1" onclick="showStudents()" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample5" id="student"><i class="fa fa-user" aria-hidden="true" style='font-size:24px' ></i> Details of Students</button>



          </p>
          <div class="row">
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                  <script>
                    $('.btn1').click(function() {
                      var id = this.id;
                      $.ajax({
                        url: "admin_Dashboard/getData",
                        data: {
                          user: id
                        },
                        success: function(data) {
                          //alert(data);
                          $('#tableData').html(data);
                        },
                        error: function(data) {
                          alert("Cannot run");
                        }
                      });
                    });

                    function showStudents(){
                      $('#addStudentForm').toggle(500);
                    }
                  </script>

                  <div class="card-body" id="divtable">
                    <table class="table table_bordered" id="tableData" style="width:1000px;">
                      <tbody>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>

      </div>

    </div>

  <?php
  } ?>
  <form>
    <div class="container" style="display:none" id="addStudentForm">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="exampleInputEmail1">STUDENT ID</label>
            <input type="text" class="form-control" id="stid" aria-describedby="emailHelp" placeholder="TG###">
            <small id="emailHelp" class="form-text text-muted">Student IT should start with TG...</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">FIRST NAME</label>
            <input type="text" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="First Name">
            <small id="emailHelp" class="form-text text-muted">Enter First name</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">LAST NAME</label>
            <input type="text" class="form-control" id="lname" aria-describedby="emailHelp" placeholder="Last Name">
            <small id="emailHelp" class="form-text text-muted">Enter Last name</small>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">CONTACT NO</label>
            <input type="number" class="form-control" id="cnt" aria-describedby="emailHelp" placeholder="07####...">
            <small id="emailHelp" class="form-text text-muted">Enter Last name</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">EMAIL</label>
            <input type="email" class="form-control" id="mailAdd" aria-describedby="emailHelp" placeholder="someone@mail.com">
            <small id="emailHelp" class="form-text text-muted">Enter Last name</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">GENDER</label>
            <select class="form-control" id="gender">
              <option value="male" name="gen">Male</option>
              <option value="female" name="gen">Female</option>
            </select>
            <small id="emailHelp" class="form-text text-muted">Select gender</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">DOB</label>
            <input type="date" class="form-control" id="dob" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Select DOB</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">DEPARTMENT</label>
            <select class="form-control" id="dep">
              <option value="ICT" name="dep">ICT</option>
              <option value="ET" name="dep">ET</option>
              <option value="BST" name="dep">BST</option>
            </select>
            <small id="emailHelp" class="form-text text-muted">Select gender</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">LEVEL</label>
            <select class="form-control" id="level">
              <option value="1" name="dep">1</option>
              <option value="2" name="dep">2</option>
              <option value="3" name="dep">3</option>
              <option value="4" name="dep">4</option>
            </select>
            <small id="emailHelp" class="form-text text-muted">Select gender</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <label for="exampleInputEmail1">ADDRESS</label>
          <textarea cols="8" rows="4" class="form-control" placeholder="Address..." id="address"></textarea>
          <small id="emailHelp" class="form-text text-muted">Enter valid address</small>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">NIC NUMBER</label>
            <input type="text" class="form-control" id="nic" aria-describedby="emailHelp" placeholder="NIC Number">
            <small id="emailHelp" class="form-text text-muted">Enter your NIC number</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
          <button class="btn btn-danger" type="reset">RESET</button>
          <button class="btn btn-success mx-2" type="reset" onclick="addUser()">SUBMIT</button>
        </div>
      </div>
    </div>
  </form>
  <script>
    function addUser() {
      var stid = document.getElementById('stid').value;
      var fname = document.getElementById('fname').value;
      var lname = document.getElementById('lname').value;
      var gender = document.getElementById('gender').value;
      var dob = document.getElementById('dob').value;
      var cont = document.getElementById('cnt').value;
      var email = document.getElementById('mailAdd').value;
      var dep = document.getElementById('dep').value;
      var level = document.getElementById('level').value;
      var address = document.getElementById('address').value;
      var nic = document.getElementById('nic').value;
      $.ajax({
        url: "admin_Dashboard/addStudent",
        method: "POST",
        data: {
          stid: stid,
          fname: fname,
          lname: lname,
          gender: gender,
          dob: dob,
          cont: cont,
          email: email,
          dep: dep,
          level: level,
          address: address,
          nic: nic
        },
        success: function(data) {
          alert(data);
        },
        error: function(data) {
          alert("Cannot add student");
        }
      });
    }
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
            <div><a href="https://paravi.ruh.ac.lk/tecmis/" class="link">TECMIS</a></div>
            <div><a href="http://teclms.ruh.ac.lk/" class="link">TECLMS</a></div>
            <div><a href="" class="link">TECWEB</a></div>
            <div><a href="http://www.tec.ruh.ac.lk/" class="link">Faculty of Technology</a></div>
            <div><a href="https://ruh.ac.lk/index.php/en/" class="link">University of Ruhuna</a></div>
          </div>
          <div class="col-md-3">
            <!-- <img src="<?= base_url() ?>/assets/images/Header/logo.png" class="logoT"> -->

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