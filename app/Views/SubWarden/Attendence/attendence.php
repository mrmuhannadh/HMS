<html>

<head>
  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">
  <title>Attendence-Subwarden</title>
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
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/chat.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/attendence.css">
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
  <style>
    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/att.svg");
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

    .topicPg {
      padding-top: 10%;
      text-transform: uppercase;
      font-size: 4em;
    }

    body {
      background-color: white;
      color: black;
    }
  </style>
</head>

<body>
  <!--Bring me into top-->
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
  </script>

  <?php
  $session = \Config\Services::session();
  $session = session();
  $user = $_SESSION["user_id"];
  foreach ($user as $d) {
    $us_id = $d['user_id'];
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
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/SubProf'>PROFILE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/SubRooms'>ROOMS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nl active" href='#'>ATTENDENCE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/SubChat'>CHATS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/SubComplaints'>COMPLAINTS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/SubNotices'>NOTICES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/SubRequests'>REQUESTS</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nl" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      MORE
                    </a>
                    <div class="dropdown-menu downMenu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href='<?php echo base_url(); ?>/SubFees'>HOSTEL FEES</a>
                      <a class="dropdown-item" href='<?php echo base_url(); ?>/SubExp'>EXPENCES</a>
                      <a class="dropdown-item" href='<?php echo base_url(); ?>/logout'>LOGOUT</a>
                    </div>
                  </li>
                </ul>
              </div>

              <img src="<?= base_url() ?>/assets/images/Profiles/SubWarden/<?php echo $d['pro_pic'];  ?>"" class=" logoT" href="#" id="dropDownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="dropdown-menu proMenu" aria-labelledby="dropDownUser">
                <a class="dropdown-item active" href='<?php echo base_url(); ?>/SubProf'>MY PROFILE</a>
                <a class="dropdown-item" href='<?php echo base_url(); ?>/logout'>LOGOUT</a>


              </div>
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
        <div class="row" style="position:absolute;top:86%;left:29%;">
          <i class="fas fa-arrow-circle-down downBtn" type="button" onclick="functionScrollMe()"></i>
        </div>
      </div><br>
      <svg xmlns="http://www.w3.org/2000/svg" class="svgBG" viewBox="0 0 1440 200">
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
              <a class="nav-link nl" href='<?php echo base_url(); ?>/SubProf' style="color:white">PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/SubRooms' style="color:white">ROOMS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl active" href='<?php echo base_url(); ?>/SubAttendance' style="color:white">ATTENDENCE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/SubChat' style="color:white">CHATS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/SubFees ' style="color:white">HOSTEL FEES</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color:white;font-weight:bold" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
              </a>
              <div class="dropdown-menu menuDrop" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item dop" href='<?php echo base_url(); ?>/SubComplaints'>COMPLAINTS</a>
                <a class="dropdown-item dop" href='<?php echo base_url(); ?>/SubExp'>EXPENSES</a>
                <a class="dropdown-item dop" href='<?php echo base_url(); ?>/SubNotices'>NOTICES</a>
                <a class="dropdown-item dop" href='<?php echo base_url(); ?>/SubRequests'>REQUESTS</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--Mobile view end-->

  <?php } ?>
  <script>
    function functionScrollMe() {
      var map = document.getElementById('stuDetails');
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


  <script>
    function myFunction() {
      var element = document.body;
      element.classList.toggle("dark-mode");
    }

    function myFunctionEye() {
      var element = document.body;
      element.classList.toggle("read_mode");
    }

    function myFunctionS() {
      var input = document.getElementById("myInput").value;
      //alert(input);
      $.ajax({
        url: "SubWarden_Attendance/searchStudent",
        type: "POST",
        data: {
          input: input
        },
        success: function(data) {
          //alert(data);
          $('#tableBody').html(data);
        },
        error: function(data) {
          alert("Something went wrong");
        }

      });
      $.ajax({
        url: "SubWarden_Attendance/studentStatus",
        type: "POST",
        data: {
          input: input
        },
        success: function(data) {
          //alert(data);
          $('#status').html(data);
        },
        error: function(data) {
          alert("Something went wrong");
        }

      });
    }
  </script>
  <div class="container" id="stuDetails">
    <div class="row" style="padding-top:5%;">
      <div class="col-md-4 text-center searchArea">
        <h4 style="padding-top:5%;">SERACH BY STUDENT</h4>
        <form>
          <input type="text" class="form-control" placeholder="Enter Student ID..." id="myInput" onkeyup="myFunctionS()">
        </form>

        <div class="row">
          <div class="col-md-12 text-center " style="padding:5% 5% 5% 5%" id="status">Type "all" for get All results/ <br /> Use TG### format</div>
        </div>
      </div>
      <div class="d-block d-sm-block d-md-none" style="bottom:5%;width:100%;height:15px;"></div>
      <div class="col-md-8">
        <table style="width:100%;" class="table table-hover" id="tblMed">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Student</th>
              <th scope="col">Entry Date</th>
              <th scope="col">Entry Time</th>
              <th scope="col">Exit Date</th>
              <th scope="col">Exit Time</th>
            </tr>
          </thead>
          <tbody id="tableBody"></tbody>
        </table>
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

</body>

</html>