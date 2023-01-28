<html>

<head>
  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">
  <title>Rooms-Warden</title>
  <!--Bootstrap Connection-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js">

  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!--CSS Connection-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/profile.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Header/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Footer/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/Warden/chat.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/myRooms.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/rooms.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/modes.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/common.css">
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
  <script src="https://unpkg.com/scrollreveal"></script>
  <style>
    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/hostel.svg");
    }

    body {
      background-color: white;
      color: white;
    }

    .darkbtn {
      position: absolute;
      margin-left: 10px;
    }

    .eyebtn {
      margin-right: 10px;
    }

    .roomTable {
      padding-top: 50%;
      height: 100px;
      width: 60px;
      color: white;
      font-weight: bold;
    }
  </style>
</head>

<body style="color:black">
  <script>
    window.sr = ScrollReveal();
  </script>

  <!--Bring me into top-->
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <div class="goUpBtn"><i class="fas fa-arrow-circle-up angleTop"></i>&nbsp;<span>Go Top</span></div>
  </button>

  <script type="text/javascript">
    function topFunction() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
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
  </script>
  <?php
  $session = \Config\Services::session();
  $session = session();
  $user = $_SESSION["user_id"];
  foreach ($user as $d) {

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
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/prof'>MY PROFILE</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href=''>ROOMS</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/chat'>CHATS</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/complaints'>COMPLAINTS</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/notices'>NOTICES</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl active" href='<?php echo base_url(); ?>/war_hos_fees'>FEES</a>
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


            <img src="<?= base_url() ?>/assets/images/Profiles/Warden/<?php echo $d['pro_pic'];  ?>"" class=" logoT">
            <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
            <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
          </div>
      </nav>
      <div class="container " style="padding-top:5%;padding-left:5%">
        <div class="row">
          <div class="col-md-3 intro">
            <h3 class="myRoomHead">FEES MANAGEMENT</h3>
            <p>
              Welcome to hostel management system to manage the student fees
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
      <svg xmlns="http://www.w3.org/2000/svg" class="svgBG" viewBox="0 0 1440 200" style="">
        <path class="pathsvg" fill="#fff" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,186.7C640,171,800,85,960,48C1120,11,1280,21,1360,26.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
      </svg>

    </div>
    <!-- Search Student id  -->

    <!-- <div class="input-group d-flex justify-content-center " style="padding-top:15px;">
      <div class="form-outline">
        <input type="text" placeholder="Search Student Id here" class="form-control">
      </div>
      <button type="button" class="btn btn-danger" name="search" onkeyup="myFunctionS()">
        <i class="fas fa-search"></i>
      </button>
    </div> -->


    <script>
      function myFunctionS() {
        var input, filter, table, tr, td, i, txtValue, txtValueD;
        input = document.getElementById("myAction");
        filter = input.value.toUpperCase();
        table = document.getElementsById("tableData");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {

          td = tr[i].getElementsByTagName("td")[0];
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
  <?php } ?>
  <!-- main 4 options -->
  <div class="container first_row" style="padding-top:2%;overflow:visible;">

    <div class="row ">
      <div class="col-md-4 bx">
        <div class="warden" style="padding-bottom:160px;" type="button" id="fees_paid" onclick="functionFees(this.id)">
          <span class="headingofdiv">PAID STUDENTS</span>
        </div>
      </div>

      <div class="col-md-4 bx">
        <div class="warden" style="padding-bottom:160px;" type="button" id="not_paid" onclick="functionFees(this.id)">
          <span class="headingofdiv">UNPAID STUDENTS</span>
        </div>
      </div>

      <div class="col-md-4 bx">
        <div class="warden" style="padding-bottom:160px;" id="fine_cal" type="button" data-toggle="modal" data-target="#finecal" data-whatever="Fine">
          <span class="headingofdiv">FINE CALCULATION</span>
        </div>
      </div>

    </div>
  </div>
  <script>
    function sendSms(x) {
      alert(x);
    }

    function functionFees(x) {
      var val = x;
      switch (val) {
        case 'fees_paid':
          $('#tableData').show(200);
          $('#notpaidtable').hide(200);
          var id = val;

          $.ajax({
            url: "Warden_Fees_information/getData",
            data: {
              type: id

            },
            success: function(data) {
              // alert(data);
              $('#tableData').html(data);

            },
            error: function(data) {
              alert("Cannot run");
            }


          });
          break;
        case 'not_paid':
          var id = val;
          //alert(id);
          $('#tableData').hide(200);
          $('#notpaidtable').show(200);
          break;
      }

    }

    function notifyunpaid(x, y) {
      $.ajax({
        url: "Warden_Fees_information/notPaidsms",
        data: {
          tg: x,
          fee: y
        },
        success: function(data) {
          alert("Message sended");
        },
        error: function(data) {
          alert("Cannot run");
        }
      });
    }

    function getPaidList(x) {
      //alert(x);
      $.ajax({
        url: "Warden_Fees_information/notPaid",
        data: {
          year: x
        },
        success: function(data) {

          $('#theBodyNotPaid').html(data);

        },
        error: function(data) {
          alert("Cannot run");
        }

      });
    }
  </script>

  <!-- <button type="button" class="btn btn-success"  >NOTIFY</button> -->
  <div class="row">
    <div class="col">
      <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">

          <div class="card-body">


          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="theTab">
      <table class="table table-hover" id="tableData" style="margin-top:5%;display:none">


      </table>
    </div>
  </div>

  <div class="row" id="notpaidtable" style="display:none;margin-top:5%;">
    <div class="col-md-12">
      <form class="form">

        <div class="container">
          <select class="form-control" onchange="getPaidList(this.value)">
            <option value="null" selected>SELECT A YEAR</option>
            <option value="1">1<sup>st</sup> Year</option>
            <option value="2">2<sup>nd</sup> Year</option>
            <option value="3">3<sup>rd</sup> Year</option>
            <option value="4">4<sup>th</sup> Year</option>
          </select>
        </div>
      </form>
    </div>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th style="width: 60%;">STUDENT ID</th>
            <th style="width: 20%;">AMOUNT</th>
            <th style="width: 20%;">ACTION</th>
          </tr>
        </thead>

        <tbody id="theBodyNotPaid">

        </tbody>
      </table>
    </div>
  </div>

  <!-- Fees form -->
  <div class="modal fade " id="paidfees" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content mod">
        <div class="modal-header">

          <h4> &nbsp; &nbsp; &nbsp; &nbsp;Student Fees Payment form</h4>


          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="form" action="<?php base_url(); ?>Warden_Fees_information/fees_info" autocomplete="off">
            <div class="container">

              <!-- <form class="form-horizontal"  method="post" action="<?php base_url(); ?>Room_Changing/change"   > -->
              <div class="form-group">
                <!-- <label class="control-label col-sm-2" for="reg_no">Registration No:</label> -->
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="student_id" placeholder="Enter Registration No" name="student_id" required>
                </div>
              </div>



              <div class="form-group">
                <!-- <label class="control-label col-sm-2" for="room_no">Room No:</label> -->
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="paid_amount" placeholder="Enter Paid Amount" name="paid_amount" required>
                </div>
              </div>
              <div class="form-group">
                <!-- <label class="control-label col-sm-2" for="room_no">Room No:</label> -->
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="paid_date" placeholder="Enter Paid Date" name="paid_date" required>
                </div>
              </div>


              <div class="form-group">
                <!-- <label class="control-label col-sm-2" for="branch">Branch:</label> -->
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="branch" placeholder="Hostel Fees paid branch" name="branch" required>
                </div>
              </div>


              <div class="form-group">
                <label for="exampleFormControlFile1">Upload Receipt</label>
                <input type="file" class="form-control-file" id="image" name="image">
              </div>



              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger" name="submit">Submit</button>

                </div>
              </div>

            </div>
          </form>


        </div>

      </div>
    </div>
  </div>



  <!-- fine calculation  -->


  <div class="modal fade " id="finecal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content mod">
        <div class="modal-header">

          <h4> &nbsp; &nbsp; &nbsp; &nbsp;Student Fine calculation form</h4>


          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="form" target="blank" autocomplete="off" action="<?php base_url(); ?>Warden_Fees_information/fine_info">
            <div class="container">


              <div class="form-group">
                <!-- <label class="control-label col-sm-2" for="reg_no">Registration No:</label> -->
                <div class="col-sm-14">
                  <input type="text" class="form-control" id="student_id" placeholder="Enter Registration No" name="student_id" required>
                </div>
              </div>


              <div class="form-group">
                <select class="form-select form-control " name="Furniture_type" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="bunk_bed">Bunk bed</option>
                  <option value="bed">single_bed</option>
                  <option value="chair">Plastic Chair</option>
                  <option value="table">Student Table</option>
                  <option value="rack">Towel Rack</option>
                  <option value="locker">Locker</option>
                  <option value="door">Door/Door key</option>
                  <option value="window">Window</option>
                  <option value="fan">Ceiling Fan</option>
                  <option value="power_point">Power point/ Fitting</option>

                </select>
              </div>



              <div class="form-group">
                <!-- <label class="control-label col-sm-2" for="room_no">Room No:</label> -->
                <div class="col-sm-14">
                  <input type="number" class="form-control" id="fine_amount" placeholder="Enter Fine amount" name="fine_amount" required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger" name="submit">Send Message</button>

                </div>
              </div>

            </div>
          </form>


        </div>

      </div>
    </div>
  </div>





  <script>
    $('#all').click(function() {



      $.ajax({
        url: "Warden_Fees_information/getData",

        type: "POST",
        data: {

        },
        success: function(data) {
          //alert("inSt");
          //alert(data);
          $('.tblname').html("RECEIVED NOTICES")
          $('#tableBody').html(data);
        },
        error: function(data) {
          alert("Something went wrong");
        }

      });
    });


    $("#all").click(function() {
      $(".tblname").toggle(500);
      $("#tblNotice").toggle(1000);
      $("#myInput").toggle(1000);

    });
  </script>

  <script>
    function myFunctionS() {
      var input, filter, table, tr, td, i, txtValue, txtValueD;
      input = document.getElementById("myInput");
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
  <script>
    VanillaTilt.init(document.querySelectorAll(".sec , .warden"), {
      max: 10,
      speed: 700,
      glare: false,
      maxGlare: .2,
      scale: 1.05
    });
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