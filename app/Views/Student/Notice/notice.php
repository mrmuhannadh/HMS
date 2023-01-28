<html>

<head>
  <title>Student-Notice</title>
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
    body {
      background-color: #fff;

    }

    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/notice.svg");
    }

    body {
      background: white;
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


    .moreDet {
      display: none;
      background-color: rgb(145, 145, 145);
    }
  </style>
</head>

<body>
  <?php

  use App\Controllers\Dashboard;
  //session_start();
  //$condition="";
  //$user_name= $_SESSION['user_n'];
  //$condition= $_SESSION['logged'];
  //$u_id=$_SESSION['user_id'];
  ?>
  <?php
  $session = \Config\Services::session();
  $session = session();
  $user = $_SESSION["user_id"];
  foreach ($user as $d) {

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
                <div class="col-md-2.5">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_dashboard'>MY PROFILE</a>
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
                    <a class="nav-link nl active" href='<?php echo base_url(); ?>/stu_notice'>NOTICES</a>
                  </li>

                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_chat'>CHAT</a>
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
            <h3 class="myRoomHead">NOTICE TO ME</h3>
            <p class="myRoomHeadp">
              view your notice
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


    <!--Bring me into top-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <i class="fas fa-angle-up"></i>
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
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
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
    <script>
      function functionScrollMe() {
        var map = document.getElementById('noticeshow');
        //alert("s");
        map.scrollIntoView({
          behavior: "smooth"
        });
      }
    </script>

    <script>
      $(document).ready(function() {

        $.ajax({
          url: "Student_Notices/getNotices",

          type: "POST",
          data: {

          },

          success: function(data) {
            //alert("inSt");
            //alert(data);
            // $('.tblname').html("RECEIVED NOTICES")

            $('#dataUser').html(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }

        });
      });

      function myFunction(x) {
        $('#' + x + 'T').toggle(1000);
        $('#' + x).text($('#' + x).text() == 'Hide Notice' ? 'View More' : 'Hide Notice');

        $("#all").click(function() {
          $(".tblname").toggle(500);
          $("#tblNotice").toggle(1000);
          $("#myInput").toggle(1000);

        });
      }
    </script>
    <script>
      function myFunctionS() {
        var input, filter, table, tr, td, i, txtValue, txtValueD;
        input = document.getElementById("myAction");
        filter = input.value.toUpperCase();
        table = document.getElementById("tblNotice");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {

          td = tr[i].getElementsByTagName("td")[2];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }

        }

      }
    </script>

    <div class="container search-table" id="noticeshow">
      <div class="search-box">
        <div class="row">
          <div class="col-md-3">
            <h5>Notices</h5>
          </div>
          <div class="col-md-9">
            <input type="text" placeholder="Search sender here" onkeyup="myFunctionS()" class="form-control" id="myAction">
            <!-- <script>
                            $(document).ready(function () {
                                $("#myAction").on("keyup", function () {
                                    var value = $(this).val().toLowerCase();
                                    $("#myTable tr").filter(function () {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script> -->
          </div>
        </div>
      </div>
      <div class="search-list">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mt-5">
              <div class="card">
                <div class="card-body">

                  <table class="table" id="tblNotice">
                    <thead>
                      <tr>

                        <th>Date</th>
                        <th>Time</th>
                        <th>Sender</th>
                        <th>Subject</th>
                        <th></th>

                      </tr>
                    </thead>
                    <tbody id="dataUser">
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
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

  <?php
  } ?>




</body>

</html>