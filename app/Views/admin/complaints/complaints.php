<html>

<head>
  <title>Complaints-Admin</title>
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
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">

  <style>
    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/comp.svg");
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
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/user'>USERS</a>
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
                    <a class="nav-link nl active" href='<?php echo base_url(); ?>/admin_complaints'>COMPLAINTS</a>
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
            <h3 class="myRoomHead">Manage Complaints</h3>
            <p>
              Welcome to hostel management system to manage your personal data
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
      function showMoreRoomMembers(){
        alert("Ho");
      }

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
    </script>



    <script>
      function myFunctionS() {
        var input, filter, table, tr, td, i, txtValue, txtValueD;
        input = document.getElementById("myAction");
        filter = input.value.toUpperCase();
        table = document.getElementById("complaints");
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

    <script>
      //navbar
      $(function() {
        $(document).scroll(function() {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
    </script>
    <div class="row">
      <div class="col-md-12">

      </div>
    </div>
    <div class="container first_row" id="adminusr" style="padding-top:2%;overflow:visible;">

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

      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <?php
            if (session()->getFlashdata('status')) {
              echo "<script>alert('" . session()->getFlashdata('status') . "')</script>";
            }

            ?>
            <p align="left">


            <div>
          
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col">
                      <h5>Complaints</h5>
                    </div>
                    <div class="col-4 content-align-right">
                      <form>
                        <div class="container-fluid">
                          <input type="text" placeholder="Search id here" onkeyup="myFunctionS()" class="form-control" id="myAction">
                        </div>
                      </form>
                    </div>
                  </div>




                </div>
                <div class="card-body">
                  <table class="table table_bordered" id="complaints">

                    <thead>
                      <tr>
                        <th>comp_id</th>
                        <th>Reciver</th>
                        <th>date</th>
                        <th>time</th>
                        <th>subject</th>
                        <th>complaint</th>
                        <th>Sender</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($complaints as $item) :
                      ?>
                        <tr>
                          <td><?= $item['comp_id'] ?></td>
                          <td><?= $item['receiver'] ?></td>
                          <td><?= $item['date'] ?></td>
                          <td><?= $item['time'] ?></td>
                          <td><?= $item['subject'] ?></td>
                          <td><?= $item['complaint'] ?></td>
                          <td><?= $item['sender'] ?></td>

                          <td>

                            <!-- <a href class="btn btn-success btn-sm">Verified &nbsp;<i class="fa fa-times" aria-hidden="true"></i></a> -->
                            <a href="<?= base_url('delete_complaint/delete/' . $item['comp_id']) ?>" class="btn btn-danger btn-sm"> <i class='fas fa-trash-alt'></i></a>

                          </td>

                        </tr>
                      <?php endforeach; ?>
                    </tbody>


                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>

    </div>
    </div>
    </div>
    </div>
  <?php
  } ?>
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