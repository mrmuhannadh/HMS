<html>

<head>
  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">
  <title>Chats-Security</title>
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
  <style>
    body {
      background-color: white;
      color: black;
    }

    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/chat1.svg");
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
    $user_id = $d['user_id'];
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
                  <a class="nav-link nl" href='<?php echo base_url(); ?>/Send_sms_student'>SEND SMS TO STUDENT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl" href='<?php echo base_url(); ?>/log_atte'>STUDENT_ENTER_LOG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nl active" href='<?php echo base_url(); ?>/chat_s'>CHATS</a>
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
            <h3 class="myRoomHead">CHAT</h3>
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
              <a class="nav-link nl " href="<?php echo base_url(); ?>/pro_d">MY PROFILE</a>
            </li>
        </div>
        <div class="col">
          <li class="nav-item">
            <a class="nav-link nl" href='<?php echo base_url(); ?>/dean_room'>ROOMS</a>
          </li>
        </div>
        <div class="col">
          <li class="nav-item">
            <a class="nav-link nl" href='<?php echo base_url(); ?>/exp_d'>EXPENSES</a>
          </li>
        </div>
        <div class="col">
          <li class="nav-item">
            <a class="nav-link nl active" href='<?php echo base_url(); ?>/chat_d'>CHATS</a>
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


        </ul>
    </div>
    <!--Mobile view end-->

  <?php } ?>
  <script>
    function functionScrollMe() {
      var map = document.getElementById('chatArea');
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
  </script>.
  <script>
    function myFunction() {
      var element = document.body;
      element.classList.toggle("dark-mode");
    }

    function myFunctionEye() {
      var element = document.body;
      element.classList.toggle("read_mode");
    }

    window.onload = function() {
      var x = "dean";
      var type = x;
      $.ajax({
        url: "Security_Chats/getProPic",

        type: "POST",
        data: {
          type: type
        },
        success: function(data) {
          //alert(data);
          $('.proImageArea' + x).html(data);
        },
        error: function(data) {
          alert("Something went wrong");
        }
      });
      //document.getElementById("newBox").style.display = "block";
      $('#newBox' + x).show();

      var y = "warden";
      var type = y;
      $.ajax({
        url: "Security_Chats/getProPic",

        type: "POST",
        data: {
          type: type
        },
        success: function(data) {
          //alert(data);
          $('.proImageArea' + y).html(data);
        },
        error: function(data) {
          alert("Something went wrong");
        }
      });
    };
  </script>

<div class=" first_row" id="chatPart" style="padding-top:8%;overflow:visible;margin-left:2%;margin-right:2%;z-index:1">


<div class="row ">
  <div class="col-md-4 bx" id="dean">
    <div class="Dean" type="button" data-toggle="modal" data-target="#deanModal" data-whatever="Dean">
      <span class="headingofdiv">CHAT WITH DEAN</span>

      <div class="newBx" id="newBoxdean" style="display:none">

        <div class="row ">
          <div class="container">
            <div class="col-md-12 proImageAreadean d-flex justify-content-center text-center" id="userImage">
            </div>
          </div>


        </div>

      </div>
    </div>

  </div>
  <div class="col-md-4 bx" id="warden">
        <div class="warden" type="button" data-toggle="modal" data-target="#subwardenModal" data-whatever="subwarden">
          <span class="headingofdiv">CHAT WITH WARDEN</span>

          <div class="newBx" id="newBoxwarden" style="display:none">
            <div class="row">
              <div class="container">
                <div class="col-md-12 proImageAreawarden d-flex justify-content-center text-center" id="userImage"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="row">
          <div class="col-md-12">
            Notifications
          </div>
        </div>
        <div class="row" style="margin-top:3%;">
          <div class="notDiv">
            <i class="fas fa-comment"> </i> &nbsp;Hello
          </div>
          <div class="notDiv" style="margin-top:2%">
            <i class="fas fa-comment"> </i> &nbsp;Hello
          </div>
        </div>
      </div>
    </div>
    
    <script>
      //for dean
      var id;
      $('.bx').click(function() {
        id = this.id;
        var user = <?php echo json_encode($user_id); ?>;
        //alert(id);
        $.ajax({
          url: "Security_Chats/getChats",

          type: "POST",
          data: {
            sender: user,
            userChat: id
          },
          success: function(data) {
            //alert("in");
            $('#msgsA').html(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }

        });
      });
    </script>
     <!--model for dean-->
     <div class="modal fade " id="deanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content mod">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">CHAT WITH DEAN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" id="form" autocomplete="off">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-11" id="msgsA">


                  </div>
                  <div class="input-group mb-2 inBox" style="padding-top:10px;">

                    <input type="text" id="msg" name="msg" class="form-control in" placeholder="Type your message...">
                    <div class="input-group-prepend">
                      <div class="input-group-text" type="submit" name="send" id="send">SEND</div>
                    </div>
                  </div>
                </div>

              </div>
            </form>


          </div>

        </div>
      </div>
    </div>
    <script>
      var id;
      $(document).ready(function() {
        $('.bx').click(function() {

          var user = <?php echo json_encode($user_id); ?>;
          id = this.id;
          //alert(user);
          $.ajax({
            url: "Security_Chats/getChats",

            type: "POST",
            data: {
              sender: user,
              userChat: id
            },
            success: function(data) {
              //alert("in");
              $('#msgsS').html(data);
            },
            error: function(data) {
              alert("Something went wrong");
            }

          });

        });
      });
    </script>
    <!--model for warden-->
    <div class="modal fade " id="subwardenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content mod">

          <div class="modal-header">

            <h5 class="modal-title" id="exampleModalLabel">CHAT WITH WARDEN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" id="form" autocomplete="off">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-11" id="msgsS">
                    <!--
                              <div  class="row sentMsg"></div>
                              <div  class="row sentMsg" id="nwww"></div>
                              -->


                  </div>
                  <div class="input-group mb-2 inBox" style="padding-top:10px;">

                    <input type="text" id="msgSub" name="msg" class="form-control in" placeholder="Type your message...">
                    <div class="input-group-prepend">
                      <div class="input-group-text" type="submit" name="send" id="sendSub">SEND</div>
                    </div>
                  </div>
                </div>

              </div>
            </form>


          </div>

        </div>
      </div>
    </div>
    <script>
      //function to send chat to dean
      $('#send').click(function() {
        var user = <?php echo json_encode($user_id); ?>;
        var myMsg = $('#msg').val();
        //alert(id);
        $.ajax({
          url: "Security_Chats/sendChats",

          type: "POST",
          data: {
            sender: user,
            msg: myMsg,
            userChat: id
          },
          success: function(data) {
            //alert("in");
            //alert(data);

            $('#msgsA').append(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }

        });
      });

      //function to send chat to warden
      $('#sendSub').click(function() {
        var user = <?php echo json_encode($user_id); ?>;
        var id = 'warden';
        var myMsg = $('#msgSub').val();
        //alert(myMsg);
        $.ajax({
          url: "Security_Chats/sendChats",

          type: "POST",
          data: {
            sender: user,
            msg: myMsg,
            userChat: id
          },
          success: function(data) {
            //alert("inSt");
            //alert(data);

            $('#msgsS').append(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }

        });
      });
</script>

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
  <!--Mobile view interface footer-->
  <footer class=" fixed-bottom d-block d-sm-block d-md-none">
    <div class="row footerMob" style="width:100%;">
      <div class="col-2 myFot d-flex justify-content-center text-center" style="left:10px;">
        <div class="tArea activeTA dashA" href="" type="button"></div></a>
      </div>
      <div class="col-2 myFot d-flex justify-content-center text-center">
        <a href='<?php echo base_url(); ?>/SubRooms'>
          <div class="tArea roomM"></div>
        </a>
      </div>
      <div class="col-2 myFot d-flex justify-content-center text-center">
        <div class="tArea dashA"></div>
      </div>
      <div class="col-2 myFot d-flex justify-content-center text-center">
        <div class="tArea dashA" id=""></div>
      </div>
      <div class="col-2 myFot d-flex justify-content-center text-center">
        <div class="tArea dashA" id=""></div>
      </div>
      <div class="col-2 myFot d-flex justify-content-center text-center">.
        <a href='<?php echo base_url(); ?>/logout'>
          <div class="tArea dashA"></div>
        </a>

      </div>

    </div>
  </footer>
</body>

</html>