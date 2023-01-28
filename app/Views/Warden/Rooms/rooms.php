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
    <div class="goUpBtn"><i class="fa fa-arrow-circle-up angleTop"></i>&nbsp;<span>Go Top</span></div>
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
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/prof'>MY PROFILE</a>
                  </li>
                </div>
                <div class="col">
                  <li class="nav-item">
                    <a class="nav-link nl active" href=''>ROOMS</a>
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
                    <a class="nav-link nl" href='<?php echo base_url(); ?>/war_hos_fees'>FEES</a>
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


            <img src="<?= base_url() ?>/assets/images/Profiles/Warden/<?php echo $d['pro_pic'];  ?>"" class="logoT">
            <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
            <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
          </div>
      </nav>
      <div class="container " style="padding-top:5%;padding-left:5%">
        <div class="row">
          <div class="col-md-3 intro">
            <h3 class="myRoomHead">ROOM MANAGEMENT</h3>
            <p>
              Welcome to hostel management system to manage your room related tasks
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
              <a class="nav-link nl active" href='#' style="color:white">PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/SubRooms' style="color:white">ROOMS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/SubAttendance' style="color:white">ATTENDENCE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/SubChat' style="color:white">CHATS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nl" href='<?php echo base_url(); ?>/' style="color:white">HOSTEL FEES</a>
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
    <script>
      function functionScrollMe() {
        var map = document.getElementById('mapDiv');
        //alert("s");
        map.scrollIntoView({
          behavior: "smooth"
        });
      }

      function theRoomFunction(x) {
        $('#theFloorSelection').show(300);

        if (x == 'null') {

          $('.cnt').hide(200);
          $('#theFloorSelection').hide(300);
        } else {
          $('.cnt').show(200);
          document.getElementById("selectedTheHostel").innerHTML = x;
        }

      }
    </script>
    </div>


    <div class="container cate" id="mapDiv" style="padding-top:5%">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form>
              <div class="form-group">
                <label for="exampleFormControlSelect1" class=" text-center">SELECT HOSTEL</label>
                <select class="form-control" id="exampleFormControlSelect1" onchange="theRoomFunction(this.value)">
                  <option selected value="null">SELECT A HOSTEL</option>
                  <option name="male" value="BOYS HOSTEL" id="BOYS">BOYS HOSTEL</option>
                  <option name="female" value="GIRLS HOSTEL" id="GIRLS">GIRLS HOSTEL</option>

                </select>
                <small class="text-left">You must select a HOSTEL to continue...</small>
              </div>
            </form>
          </div>

        </div>
      </div>

      <form class="">
        <div class="container ">
          <div class="row text-center">
            <div class="col-md-6 cnt">
              You have choosed <span id="selectedTheHostel"></span>
            </div>
          </div>
          <!--
                <div class="row">
                    <div class="col-md-3"><div class="btn level level1" type="button" onclick="floorNo('1')"><span class="align-self-center">FLOOR 1</span></div></div>
                    <div class="col-md-3"><div class="btn level level2" type="button" onclick="floorNo('2')"><span class="align-self-center">FLOOR 2</span></div></div>
                    <div class="col-md-3"><button class="btn level level3" type="button" onclick="floorNo('3')"><span class="align-middle">FLOOR 3</span></button></div>
                    <div class="col-md-3"><button class="btn level level4" type="button" onclick="floorNo('4')"><span class="align-middle">FLOOR 4</span></button></div>
                </div>

        -->
          <div class="container" style="display:none;" id="theFloorSelection">
            <div class="row" style="color:black">
              <div class="col-sm text-center">
                <input type="radio" class="theFloorRadio" name="floor"><button class="theBut" type="button" id="1" onclick="floorNo(this.id)">FLOOR 1</button>
              </div>
              <div class="col-sm text-center">
                <input type="radio" class="theFloorRadio" name="floor"><button type="button" class="theBut" id="2" onclick="floorNo(this.id)">FLOOR 2</button>
              </div>
              <div class="col-sm text-center">
                <input type="radio" class="theFloorRadio" name="floor"><button class="theBut" type="button" id="3" onclick="floorNo(this.id)">FLOOR 3</button>
              </div>
              <div class="col-sm text-center">
                <input type="radio" class="theFloorRadio" name="floor"><button class="theBut" type="button" id="4" onclick="floorNo(this.id)">FLOOR 4</button>
              </div>
            </div>
          </div>
        </div>

        <span id="myF"></span>
      </form>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6 cnt2">
            <span id="theFloorNumber"></span>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="map">
          <div class="groud_one" style="display:none">
            <div class="row">
              <div class="row theMap">
                <div class="row" style="width:100%;">
                  <div class="rightLine" style="display: flex">
                    <div class="col-md aRoom" id="101" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">101</div>
                    <div class="col-md aRoom" id="102" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">102</div>
                    <div class="col-md aRoom" id="103" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">103</div>
                    <div class="col-md aWashRoom">WashRoom</div>
                    <div class="col-md aRoom" id="104" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">104</div>
                    <div class="col-md aRoom" id="105" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">105</div>
                    <div class="col-md aRoom" id="106" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">106</div>
                    <div class="col-md aRoom" id="107" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">107</div>
                    <div class="col-md aRoom" id="108" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">108</div>
                    <div class="col-md aRoom" id="109" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">109</div>
                    <div class="col-md aRoom" id="110" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">110</div>
                    <div class="col-md aRoom" id="111" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">111</div>
                    <div class="col-md aWashRoom">WashRoom</div>
                    <div class="col-md wardenArea">Warden Area</div>
                  </div>
                </div>
                <div class="row theCori">
                  Couridore
                </div>
                <div class="row" style="width:100%">
                  <div class="leftLine" style="display: flex">
                    <div class="col-md aCommonArea">Common</div>
                    <div class="col-md aRoom" id="112" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">112</div>
                    <div class="col-md aRoom" id="113" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">113</div>
                    <div class="col-md aRoom" id="114" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">114</div>
                    <div class="col-md aRoom" id="115" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">115</div>
                    <div class="col-md aRoom" id="116" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">116</div>
                    <div class="col-md aRoom" id="117" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">117</div>
                    <div class="col-md aRoom" id="118" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">118</div>
                    <div class="col-md aRoom" id="119" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal">119</div>
                    <div class="col-md enterence">
                      <div class="container thesteps">
                        STEPS
                      </div>
                    </div>
                    <div class="col-md aCommonArea">Common</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="otherfloors" style="display:none">

          <div class="row">
            <div class="row theMap">
              <div class="row" style="width:100%;">
                <div class="rightLine" style="display: flex">
                  <div class="col-md aRoom" id="01" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>01</div>
                  <div class="col-md aRoom" id="02" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>02</div>
                  <div class="col-md aRoom" id="03" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>03</div>
                  <div class="col-md aWashRoom">WashRoom</div>
                  <div class="col-md aRoom" id="04" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>04</div>
                  <div class="col-md aRoom" id="05" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>05</div>
                  <div class="col-md aRoom" id="06" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>06</div>
                  <div class="col-md aRoom" id="07" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>07</div>
                  <div class="col-md aRoom" id="08" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>08</div>
                  <div class="col-md aRoom" id="09" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>09</div>
                  <div class="col-md aRoom" id="10" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>10</div>
                  <div class="col-md aRoom" id="11" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>11</div>
                  <div class="col-md aWashRoom">WashRoom</div>
                  <div class="col-md aRoom" id="12" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>12</div>
                  <div class="col-md aRoom" id="13" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>13</div>
                  <div class="col-md aRoom" id="14" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>14</div>
                </div>
              </div>
              <div class="row theCori">
                Couridore
              </div>
              <div class="row" style="width:100%">
                <div class="leftLine" style="display: flex">
                  <div class="col-md aRoom" id="15" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>15</div>
                  <div class="col-md aRoom" id="16" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>16</div>
                  <div class="col-md aRoom" id="17" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>17</div>
                  <div class="col-md aCommonArea">Common</div>
                  <div class="col-md aRoom" id="18" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>18</div>
                  <div class="col-md aRoom" id="19" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>19</div>
                  <div class="col-md aRoom" id="20" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>20</div>
                  <div class="col-md aRoom" id="21" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>21</div>
                  <div class="col-md aRoom" id="22" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>22</div>
                  <div class="col-md aRoom" id="23" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>23</div>
                  <div class="col-md aRoom" id="24" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>24</div>
                  <div class="col-md aRoom" id="25" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>25</div>
                  <div class="col-md aCommonArea">Common</div>
                  <div class="col-md aRoom" id="26" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>26</div>
                  <div class="col-md aRoom" id="27" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>27</div>
                  <div class="col-md aRoom" id="28" onclick="reply_click(this.id)" data-toggle="modal" data-target="#Modal"><span id="fNo"></span>28</div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>





    <?php $gen = $d['gender'];
  } ?>
    <!--Model-->
    <div class="modal fade" style="color:black" id="Modal" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <script type="text/javascript">
              var floornumber = 0;

              function floorNo(x) {
                //alert(x);
                if (x == 1) {
                  //alert("in");
                  $('.groud_one').show(200);
                  $('.otherfloors').hide(200);
                  $('.cnt2').show(100);
                  document.getElementById("theFloorNumber").innerHTML = "The Floor is " + x;
                } else {
                  //alert("other")

                  $('.otherfloors').show(200);
                  $('.groud_one').hide(200);
                  $('.cnt2').show(100);
                  document.getElementById("theFloorNumber").innerHTML = "The Floor is " + x;

                  var elements = document.querySelectorAll('[id="fNo"]');
                  var elementEE = document.body;
                  elementEE.classList.toggle("clic");
                  for (var i = 0; i < elements.length; i++) {
                    elements[i].innerHTML = x;
                  }
                }
                floornumber = x;
              }


              function reply_click(clicked_id) {
                var number = clicked_id;
                var v;
                if (floornumber == 1) {
                  var v = number;
                } else {
                  var v = floornumber + number;
                }
                //alert(clicked_id);

                //var v= floornumber+number;
                document.getElementById("myText").innerHTML = v;
                var genof = <?php echo json_encode($gen); ?>;
                if (genof == "male") {
                  $.ajax({
                    url: "Warden_Rooms/boys_list",

                    type: "POST",
                    data: {
                      room_id: v
                    },
                    success: function(data) {
                      //alert("success male");
                      $('#student').html(data);
                    },
                    error: function(data) {
                      alert("Something went wrong");
                    }

                  });
                } else {
                  $.ajax({
                    url: "Warden_Rooms/girls_list",

                    type: "POST",
                    data: {
                      room_id: v
                    },
                    success: function(data) {
                      //alert(student_id);
                      $('#name').html(data);
                    },
                    error: function(data) {
                      alert("Something went wrong");
                    }

                  });
                }



              }
            </script>

            <h5 class="modal-title" id="exampleModalLongTitle">ROOM No: <span id="myText"></span>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form method="post" action="Warden_Rooms/viewMember" role="form" class="frm">
              <select class="form-control" id="student" name="student" id="student">
                <option selected>SELECT STUDENT ID</option>


              </select>
              <script>
                //show the details of clicked room
                $(document).ready(function() {
                  $('#student').change(function() {
                    var st_id = $('#student').val();
                    $.ajax({
                      url: "Warden_Rooms/fetch_data",

                      type: "POST",
                      data: {
                        student_id: st_id
                      },
                      success: function(data) {
                        //alert(student_id);
                        $('#name').html(data);
                      },
                      error: function(data) {
                        alert("Something went wrong");
                      }

                    })

                  });
                });
              </script>
            </form>

          </div>
          <div id="name"></div>
          <script>
            $(document).ready(function() {
              $("#show").click(function() {
                $("#moreDet").toggle(1000);
                if ($(this).text() == "HIDE") {
                  $(this).text("VIEW MORE");
                } else {
                  $(this).text("HIDE");
                }
              });
            });
          </script>

          <button id="show" class="btn btn-default">View More</button>
          <div class="modal-footer text-center">
            Hostel Management System- Faculty of Technology

          </div>
        </div>
      </div>
    </div>

    </div>
    </div>
    <script>
      VanillaTilt.init(document.querySelectorAll(".room"), {
        max: 30,
        speed: 10,
        glare: true,
        maxGlare: .05,
        scale: 1.0
      });
      var valRoom = "sads";

      function theOldChange(x) {
        //alert(x);
        if (x == "null") {
          $('.theNewRoom').hide(200);

        } else {
          $('.theNewRoom').show(200);
          valRoom = x;
        }

      }

      function theNewChange(y) {
        //alert(valRoom);
        if (y == valRoom) {
          alert("You cannot choose same");
          document.getElementById('theChangeBtn').disabled = true;
          $('#myNewDiv').hide(200);
        } else {
          $('#myNewDiv').show(200);
          document.getElementById('theChangeBtn').removeAttribute('disabled');
        }
      }

      function showChange(){
        $('#roomChangeSt').show(500);
      }
    </script>
    <div class='container'>
    <button class="btn btn-success" style="margin-top:5%" onclick="showChange()">ROOM CHANGE</button>

    </div>
    <br>
    <form id="roomChangeSt" style="display:none" class="cRbOx">
      <div class="row">
        <div class="container mybox">
          <div class="row theTopicRow">
            <div class="col-md-12 text-center ">
              <h4>CHANGE ROOMS</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">SELECT A ROOM
              <div class="row">
                <form method="post" style="width:100%">
                  <div class="col-md-12">
                    <select class="form-control" id="setFloor">
                      <option selected>SELECT THE FLOOR</option>
                      <option value="1">FLOOR 1</option>
                      <option value="2">FLOOR 2</option>
                      <option value="3">FLOOR 3</option>
                      <option value="4">FLOOR 4</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <select class="form-control" id="roomss" required onchange="theOldChange(this.value)">
                      <option selected>----------------</option>

                    </select>
                  </div>
                </form>
              </div>
              <div class="myDiv" id="myDiv">

              </div>
            </div>
            <div class="col-md-1" style="padding-top:200px;"><button class="btn btn-success changeRoom" id="theChangeBtn" type="submit"><b>>></b></button></div>

            <div class="col-md-5 theNewRoom">SELECT A NEW ROOM
              <div class="row">
                <form method="post" style="width:100%">
                  <div class="col-md-12">
                    <select class="form-control" id="setNewFloor">
                      <option selected>SELECT THE FLOOR</option>
                      <option value="1">FLOOR 1</option>
                      <option value="2">FLOOR 2</option>
                      <option value="3">FLOOR 3</option>
                      <option value="4">FLOOR 4</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <select class="form-control" id="Newroomss" required onchange="theNewChange(this.value)">
                      <option selected>----------------</option>

                    </select>
                  </div>
                </form>

              </div>
              <div class="myDiv" id="myNewDiv" style="padding-top:1%">

              </div>
            </div>
          </div>
        </div>


      </div>
    </form>

    <script>
      //change the room of selected student
      $('#roomChangeSt').submit(function(e) {
        //e.preventDefault();
        var list = [];
        var newF = $('#setNewFloor').val();
        var newR = $('#Newroomss').val();
        var genof = <?php echo json_encode($gen); ?>;
        var st1, st2, st3, st4 = "";

        $(this).find("input:checkbox:checked").each(function(e) {
          list.push($(this).val())


        });

        if (list[0] != null) {
          st1 = list[0];
        }
        if (list[1] != null) {
          st2 = list[1];
        }
        if (list[2] != null) {
          st3 = list[2];
        }
        if (list[3] != null) {
          st4 = list[3];
        }

        if (genof == "male") {
          $.ajax({
            url: "Warden_Rooms/changeRoomsBoys",

            type: "POST",
            data: {
              newF: newF,
              newR: newR,
              st1: st1,
              st2: st2,
              st3: st3,
              st4: st4
            },
            success: function(data) {
              alert(data);
            },
            error: function(data) {
              alert("Something went wrong");
            }

          });
        } else {
          $.ajax({
            url: "Warden_Rooms/changeRoomsGirls",

            type: "POST",
            data: {
              newF: newF,
              newR: newR,
              st1: st1,
              st2: st2,
              st3: st3,
              st4: st4

            },
            success: function(data) {
              alert(data);
              //$('#roomss').html(data);
            },
            error: function(data) {
              alert("Something went wrong");
            }

          });
        }

        //alert(list);

      })
      //alert(checkboxes_value);


      //for listing present rooms
      $(document).ready(function() {
        $('#setFloor').change(function() {
          var floorNo = $('#setFloor').val();
          //alert(floorNo);
          $.ajax({
            url: "Warden_Rooms/getRooms",

            type: "POST",
            data: {
              floorNum: floorNo
            },
            success: function(data) {
              $('#roomss').html(data);
            },
            error: function(data) {
              alert("Something went wrong");
            }

          });
        });
      });
      //for listing new rooms
      $(document).ready(function() {
        $('#setNewFloor').change(function() {

          var floorNo = $('#setNewFloor').val();
          //alert(floorNo);
          $.ajax({
            url: "Warden_Rooms/getRooms",

            type: "POST",
            data: {
              floorNum: floorNo
            },
            success: function(data) {
              //alert(floorNo);
              $('#Newroomss').html(data);
            },
            error: function(data) {
              alert("Something went wrong");
            }

          });
        });
      });

      //allocated room
      //list the students for the selected room
      $(document).ready(function() {
        $('#roomss').change(function() {
          //alert("in");
          //php to js 
          var genof = <?php echo json_encode($gen); ?>;

          var room_id = $('#roomss').val();
          if (genof == "male") {
            $.ajax({
              url: "Warden_Rooms/fetch_bys_data",

              type: "POST",
              data: {
                the_room: room_id
              },
              success: function(data) {
                //alert(room_id);
                $('#myDiv').html(data);
              },
              error: function(data) {
                alert("Something went wrong");
              }

            });
          } else {
            $.ajax({
              url: "Warden_Rooms/fetch_gil_data",

              type: "POST",
              data: {
                the_room: room_id
              },
              success: function(data) {
                //alert("success male");
                //$('#student').html(data);
              },
              error: function(data) {
                alert("Something went wrong");
              }

            });
          }

        });
      });

      //new room
      //list the student details for the selected room and floor 

      $(document).ready(function() {
        $('#Newroomss').change(function() {
          //alert("in");
          var genof = <?php echo json_encode($gen); ?>;

          var room_id = $('#Newroomss').val();
          if (genof == "male") {
            $.ajax({
              url: "Warden_Rooms/fetch_bys_data",

              type: "POST",
              data: {
                the_room: room_id
              },
              success: function(data) {
                //alert(room_id);
                $('#myNewDiv').html(data);
              },
              error: function(data) {
                alert("Something went wrong");
              }

            });
          } else {
            $.ajax({
              url: "Warden_Rooms/fetch_gil_data",

              type: "POST",
              data: {
                the_room: room_id
              },
              success: function(data) {
                //alert("success male");
                //$('#student').html(data);
              },
              error: function(data) {
                alert("Something went wrong");
              }

            });
          }

        });
      });
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
    <script>
      window.sr = ScrollReveal();
      sr.reveal('.topH', {
        duration: 1000,
        origin: 'right',
        distance: '500px'
      });
      sr.reveal('.topHTwo', {
        duration: 1000,
        origin: 'top',
        distance: '24px'
      });
      sr.reveal('.level1', {
        duration: 1200,
        origin: 'left',
        distance: '100px'
      });
      sr.reveal('.level2', {
        duration: 2400,
        origin: 'left',
        distance: '50px'
      });
      sr.reveal('.level3', {
        duration: 2400,
        origin: 'right',
        distance: '50px'
      });
      sr.reveal('.level4', {
        duration: 1200,
        origin: 'right',
        distance: '100px'
      });
      sr.reveal('.map', {
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