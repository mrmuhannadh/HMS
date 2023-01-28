<html>

<head>
  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">
  <title>Request-Subwarden</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Bootstrap Connection-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!--External CSS Connection-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/profile.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/Header/style.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/style.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/complaint.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Footer/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/request.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/myRooms.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/common.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/modes.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/chat.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/profile.css" />

  <!--AJAX Connection-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

  <!--Responsive-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Fontawsome Connection-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--Some extra connections-->
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

  <!--vanillatilt Connection-->
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/vanilla-tilt.min.js"></script>
  <style>
    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/request.svg");
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
  </style>
</head>

<body>


  <?php
  $session = \Config\Services::session();
  $session = session();
  $user = $_SESSION["user_id"];
  foreach ($user as $d) {
    $user_id = $d['user_id'];
    $gender = $d['gender'];
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
                  <a class="nav-link nl" href='<?php echo base_url(); ?>/SubAttendance'>ATTENDENCE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl " href='<?php echo base_url(); ?>/SubChat'>CHATS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl" href='<?php echo base_url(); ?>/SubComplaints'>COMPLAINTS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl" href='<?php echo base_url(); ?>/SubNotices'>NOTICES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl active" href='<?php echo base_url(); ?>/SubRequests'>REQUESTS</a>
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
              <a class="dropdown-item" href='<?php echo base_url(); ?>/SubProf'>MY PROFILE</a>
              <a class="dropdown-item " href='<?php echo base_url(); ?>/SubExp'>EXPENCES</a>
              <a class="dropdown-item" href='<?php echo base_url(); ?>/logout'>LOGOUT</a>


            </div>
            <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
            <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
          </div>
      </nav>
      <div class="container " style="padding-top:5%;padding-left:5%">
        <div class="row">
          <div class="col-md-3 intro">
            <h3 class="myRoomHead">REQUESTS</h3>
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
              <a class="nav-link nl " href='<?php echo base_url(); ?>/SubAttendance' style="color:white">ATTENDENCE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/SubChat' style="color:white">CHATS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/SubFees' style="color:white">HOSTEL FEES</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color:white;font-weight:bold" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
              </a>
              <div class="dropdown-menu menuDrop" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item dop" href='<?php echo base_url(); ?>/SubComplaints'>COMPLAINTS</a>
                <a class="dropdown-item dop" href='<?php echo base_url(); ?>/SubExp'>EXPENSES</a>
                <a class="dropdown-item dop" href='<?php echo base_url(); ?>/SubNotices'>NOTICES</a>
                <a class="dropdown-item dop active" href='<?php echo base_url(); ?>/SubRequests'>REQUESTS</a>
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
      var map = document.getElementById('reqArea');
      map.scrollIntoView({
        behavior: "smooth"
      });
    }
    //for medical request
    $(document).ready(function() {
      //get medical requests
      $("#medicalReq").click(function() {
        $.ajax({
          url: "SubWarden_Request/getMed_Request",

          type: "POST",
          data: {

          },
          success: function(data) {
            $('#tableBody').html(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }

        });
      });
    });
    //search
    function myFunctionS() {
      var input, filter, table, tr, td, i, txtValue, txtValueD;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("tblMed");
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
    function myFunction2() {
      var input, filter, table, tr, td, i, txtValue, txtValueD;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("tblMed");
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
    //more student detail
    function myFunctionUser(x) {
      $.ajax({
        url: "SubWarden_Request/getMore",
        type: "POST",
        data: {
          student_id: x
        },
        success: function(data) {
          $('#dat').html(data);
        },
        error: function(data) {
          alert("Something went wrong");
        }
      });
    }


    //for leave request
    $(document).ready(function() {
      //get leave requests
      var user = <?php echo json_encode($user_id); ?>;
      $("#leaveReq").click(function() {
        $.ajax({
          url: "SubWarden_Request/getLeave_Request",
          type: "POST",
          data: {
            user: user
          },
          success: function(data) {
            $('#tableBodyLeave').html(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }

        });
      });
    });

    //room request
    $(document).ready(function() {
      $('.req').click(function() {
        var user = <?php echo json_encode($user_id); ?>;
        var req = this.id;
        $.ajax({
          url: "SubWarden_Request/room_Request",
          type: "POST",
          data: {
            user: user,
            request: req
          },
          success: function(data) {
            $('#tableBodyCHange').html(data);
            //alert(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }

        });
      });
    });
    //search
    function myFunctionS() {
      var input, filter, table, tr, td, i, txtValue, txtValueD;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("tblMed");
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

    //room change request
    function myFunctionRoomChange(x) {
      var gender = <?php echo json_encode($gender); ?>;

      $.ajax({
        url: "SubWarden_Request/roomChangeModal",
        type: "POST",
        data: {
          id: x,
          gen: gender
        },
        success: function(data) {
          //alert("All OK")
          $('#roomC').html(data);
        },
        error: function(data) {
          alert("Something went wrong");
        }
      });
    }

    function myFunctionS(x) {
      //alert(x);
      var gender = <?php echo json_encode($gender); ?>;
      if (gender == "male") {
        $.ajax({
          url: "SubWarden_Request/getRoomMemBoys",
          type: "POST",
          data: {
            room: x,
          },
          success: function(data) {
            //alert(data);
            $('#roomMem').html(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }
        });
      } else if (gender == "female") {
        $.ajax({
          url: "SubWarden_Request/getRoomMemGirls",
          type: "POST",
          data: {
            room: x,
          },
          success: function(data) {
            //alert("All OK");
            $('#roomMem').html(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }
        });
      }

    }

    //change the room req
    function myFunChangeRoom() {
      var gender = <?php echo json_encode($gender); ?>;
      var student = document.getElementById("studentID").value;
      var newFloor = document.getElementById("newFtableBodid=yloor").value;
      var newRoom = document.getElementById("newRoom").value;
      $.ajax({
        url: "SubWarden_Request/roomChange",
        type: "POST",
        data: {
          id: student,
          gen: gender,
          floor: newFloor,
          room: newRoom
        },
        success: function(data) {
          //alert(data);
          //window.location.reload(); 
          //currentbid = data.bid
          $('#tableBodyCHange').html(data);
        },
        error: function(data) {
          alert("Something went wrong");
        }
      });
    }

    //delete the room req
    function myFunctionRoomDelete(x) {
      var gender = <?php echo json_encode($gender); ?>;
      $.ajax({
        url: "SubWarden_Request/delChange",
        type: "POST",
        data: {
          id: x,
          gen: gender
        },
        success: function(data) {
          $('#tableBodyCHange').html(data);
        },
        error: function(data) {
          alert("Something went wrong");
        }
      });
    }

    function acceptFun(x) {
      //alert(x);
      var user = <?php echo json_encode($user_id); ?>;
      res = 1;
      $.ajax({
        url: "SubWarden_Request/RequestResponce",
        type: "POST",
        data: {
          id: x,
          status: res,
          user: user
        },
        success: function(data) {
          alert("Accepted");
          $('#tableBodyLeave').html(data);
        },
        error: function(data) {
          alert("Something went Wrong");
        }
      });
    }

    function rejectFun(x) {
      //alert(x);
      var user = <?php echo json_encode($user_id); ?>;
      res = -1;
      $.ajax({
        url: "SubWarden_Request/RequestResponce",
        type: "POST",
        data: {
          id: x,
          status: res,
          user: user
        },
        success: function(data) {
          alert("Rejected");
          $('#tableBodyLeave').html(data);
        },
        error: function(data) {
          alert("Something went Wrong");
        }
      });
    }
  </script>

  <div class="container first_row" id="reqArea" style="overflow:visible;padding-top:10%">


    <div class="row ">
      <div class="col-md-4 bx bxreq">
        <div class="warden " id="medicalReq" type="button">
          <span class="RepHeadDiv">MEDICAL REQUEST</span>

        </div>
        <br>
        <div class="sec" type="button" id="leaveReq">
          <span class="RepHeadDiv">LEAVE REQUEST</span>

        </div>
        <br>
        <div class="student" type="button" id="roomReq">
          <span class="RepHeadDiv">ROOM REQUEST</span>

        </div>
      </div>
      <div class="col-md-8 bx">
        <!--Table for medical request-->
        <div id="tableForMed">
          <div class="row">
            <div class="col-md-6">
              <span class="tblname" style="display:none">MEDICAL REQUESTS</span>
            </div>
          
          </div>
          <table style="width:100%;display:none" class="table table-hover" id="tblMed">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Student ID</th>
                <th scope="col">Medical Issue</th>
                <th scope="col" style="width:18%;">Guardian</th>
                <th scope="col">Guardian ID</th>
                <th scope="col">Guardian Contact</th>
              </tr>
            </thead>
            <tbody id="tableBody"></tbody>
          </table>
        </div>
        <!--Table for leave request-->
        <div id="tableForLeave">
          <div class="row">
            <div class="col-md-6">
              <span class="tblnameLeave" style="display:none">LEAVE REQUESTS</span>
            </div>
            
          </div>
          <table style="width:100%;display:none" class="table table-hover" id="tblLeave">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Room No</th>
                <th scope="col">Leave Date</th>
                <th scope="col">Leave Time</th>
                <th scope="col">Issue</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="tableBodyLeave"></tbody>
          </table>
        </div>

        <div class="container reqRoom">

          <!--For room requests-->
          <div class="row gy-5" id="reqSet">
            <div class="col-md-1"> &nbsp;</div>
            <div class="col-md-5 req" id="roomChange">
              ROOM CHANGE REQUEST
            </div>
            <div class="col-md-1"> &nbsp;</div>
            <div class="col-md-5 req" id="repair">
              REPAIR REQUEST
            </div>

            
          </div>
          <div class="row  gy-5">

            <!--Table for room change request-->
            <div id="tableForRoom" style="margin-top:5%;margin-left:10%;">
              <div class="row">
                <div class="col-md-6">
                  <span class="tblnameLeave" style="display:none">ROOM REQUESTS</span>
                </div>
               
              </div>
              <table style="width:100%;display:none" class="table table-hover" id="mYReq">

                <tbody id="tableBodyCHange"></tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!--model to show more student details-->
      <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="color:black">Student Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="dat"></div>
              <button id="show" class="btn btn-default"><i class="fas fa-angle-double-down" id="Mo"></i></button>
            </div>
            <div class="modal-footer  text-center">
              Hostel Management System- Faculty of Technology
            </div>
          </div>
        </div>
      </div>

      <!--model to change requested room-->
      <div class="modal fade " id="ModalChangeRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="color:black">CHANGE ROOM</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="roomC"></div>

              <div>
              </div>
              <div class="modal-footer  text-center">
                Hostel Management System- Faculty of Technology
              </div>
            </div>
          </div>
        </div>







        <script>
          $('#show').click(function() {
            $("#moreDet").toggle(1000);
          });
          //show hide table jQuery for Med request
          $("#medicalReq").click(function() {
            //hide leave table
            $(".tblnameLeave").hide(500);
            $("#tblLeave").hide(500);
            $("#myInputLeave").hide(500);

            //hide room request
            $(".reqRoom").hide(500);

            //show medical table
            $(".tblname").toggle(500);
            $("#tblMed").toggle(1000);
            $("#myInput").toggle(1000);
          });

          //show hide table jQuery for Leave request
          $("#leaveReq").click(function() {
            //hide medical table
            $(".tblname").hide(500);
            $("#tblMed").hide(500);
            $("#myInput").hide(500);

            //hide room request
            $(".reqRoom").hide(500);

            //show leave table
            $(".tblnameLeave").toggle(500);
            $("#tblLeave").toggle(1000);
            $("#myInputLeave").toggle(1000);
          });

          //show hide table jQuery for Room request
          $("#roomReq").click(function() {
            //hide medical table
            $(".tblname").hide(500);
            $("#tblMed").hide(500);
            $("#myInput").hide(500);

            //hide leave table
            $(".tblnameLeave").hide(500);
            $("#tblLeave").hide(500);
            $("#myInputLeave").hide(500);

            //show room request
            $(".reqRoom").toggle(1000);

          });
          $(".req").click(function() {
            $("#myInputReq").toggle(250);
            $("#mYReq").toggle(500);
          });
        </script>
      </div>
      <!--ROOM REQUESTS-->

    </div>
    <!--Bring me into top-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <div class="goUpBtn" onmouseover="myFunctionShowWord()" onmouseout="myFunctionHideWord()"><i class="fas fa-arrow-circle-up angleTop"></i>&nbsp;<span class="gotoTopCls" style="display:none">Go Top</span></div>
    </button>
    <script type="text/javascript">
      //navbar
      $(function() {
        $(document).scroll(function() {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });

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

      //modes
      function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
      }

      function myFunctionEye() {
        var element = document.body;
        element.classList.toggle("read_mode");
      }
    </script>
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