<html>

<head>
  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">
  <title>Notice-Dean</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Bootstrap Connection-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!--External CSS Connection-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/profile.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/Header/style.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Footer/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/style.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/complaint.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Warden/notice.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/common.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/modes.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/Warden/chat.css" />
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

  <!--DataTable-->


  <!--vanillatilt Connection-->
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/vanilla-tilt.min.js"></script>

  <style>
    .headBG {
      background-image: url("<?= base_url() ?>/assets/images/Header/notice.svg");
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
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <div class="goUpBtn"><i class="fas fa-arrow-circle-up angleTop"></i>&nbsp;<span>Go Top</span></div>
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
                <div class="col-md-2.5">
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
                    <a class="nav-link nl active" href='<?php echo base_url(); ?>/not_d'>NOTICES</a>
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
            <button class="btn btn-default darkbtn " onclick="myFunctiond()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
            <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
          </div>
      </nav>
      <div class="container " style="padding-top:5%;padding-left:5%">
        <div class="row">
          <div class="col-md-3 intro">
            <h3 class="myRoomHead">NOTICE</h3>
            <p>
              Welcome to hostel management system to manage your notice related tasks
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
      <svg xmlns="http://www.w3.org/2000/svg" class="svgBG" viewBox="0 0 1440 200" style="">
        <path class="pathsvg" fill="#fff" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,186.7C640,171,800,85,960,48C1120,11,1280,21,1360,26.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
      </svg>

    </div>

    </div>


    <script>
      //navbar
      function functionScrollMe() {
        //alert("s");
        var map = document.getElementById('noticeDiv');

        map.scrollIntoView({
          behavior: "smooth"
        });
      }
      $(function() {
        $(document).scroll(function() {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
    </script>.
    <script>
      function myFunctiond() {
        var element = document.body;
        element.classList.toggle("dark-mode");
      }

      function myFunctionEye() {
        var element = document.body;
        element.classList.toggle("read_mode");
      }
    </script>

    <div class="container first_row" id="noticeDiv" style="padding-top:8%;overflow:visible;">
      <div class="row ">
        <div class="col-md-6 bx" style="padding-bottom:15px;">
          <div class="warden" id="all" type="button">
            <span class="headingofdiv">ALL NOTICES</span>

          </div>
        </div>
        <div class="col-md-6 bx" id="my_comps">
          <div class="sec" type="button" id="fromMe">
            <span class="headingofdiv">NOTICES POSTED BY ME</span>

          </div>
        </div>

        <!--Bring me into top-->
        <button onclick="topFunction()" id="myBtn" title="Go to top">
          <div class="goUpBtn"><i class="fas fa-arrow-circle-up angleTop"></i>&nbsp;<span>Go Top</span></div>
        </button>

        <button data-toggle="modal" data-target="#complaintModal" id="myBtn2" title="comp">
          <i class="fad fa-pen-alt"></i>
        </button>

        <script type="text/javascript">
          window.onscroll = function() {
            scrollFunction()
          };

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("myBtn").style.display = "block";
              document.getElementById("myBtn2").style.display = "block";

            } else {
              document.getElementById("myBtn").style.display = "none";
              document.getElementById("myBtn2").style.display = "block";

            }
          }

          function topFunction() {
            window.scrollTo({
              top: 0,
              behavior: 'smooth'
            });
          }
        </script>

        <!--model send notice-->
        <div class="modal fade noticeModal" id="complaintModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content mod">

              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">POST NOTICE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" id="form" autocomplete="off">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12" id="msgsS">
                        <input type="text" class="form-control" id="sub" placeholder="Enter the Title" required>
                        <br>
                        <textarea id="notice" name="msg" class="form-control" rows="7" placeholder="Type your notice..."></textarea>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12" style="padding-top:10px;">
                        <div class="input-group-text" type="submit" name="send" id="postNotice">
                          <span style="margin-left:40%;"> POST</span>
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
          ////function to send notice

          $('#postNotice').click(function() {
            $('.noticeModal').modal('hide');
            var sender = <?php echo json_encode($user_id); ?>;

            var notice = $('#notice').val();
            var sub = $('#sub').val();;

            $.ajax({
              url: "Dean_Notices/postNotice",

              type: "POST",
              data: {
                sender: sender,

                notice: notice,
                subject: sub
              },
              success: function(data) {
                //alert("inSt");
                alert(data);

                //$('#msgsSec').append(data);
              },
              error: function(data) {
                alert("Something went wrong");
              }

            });
          });

          //get all notices
          $('#all').click(function() {

            $.ajax({
              url: "Dean_Notices/getNotices",

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
          //get notices posted by me
          $('#fromMe').click(function() {
            var user = <?php echo json_encode($user_id); ?>;
            $.ajax({
              url: "Dean_Notices/getMyNotices",

              type: "POST",
              data: {
                sender: user
              },
              success: function(data) {
                //alert("inSt");
                //alert(data);
                $('.tblname').html("SENT NOTICES")
                $('#tableBody').html(data);
              },
              error: function(data) {
                alert("Something went wrong");
              }

            });
          });
        </script>

        <script>
          //show hide table jQuery
          $("#all").click(function() {
            $(".tblname").toggle(500);
            $("#tblNotice").toggle(1000);
            $("#myInput").toggle(1000);

          });

          $("#fromMe").click(function() {
            $(".tblname").toggle(500);
            $("#myInput").toggle(1000);
            $("#tblNotice").toggle(1000);

          });

          VanillaTilt.init(document.querySelectorAll(".sec , .warden"), {
            max: 10,
            speed: 700,
            glare: false,
            maxGlare: .2,
            scale: 1.05
          });
        </script>

        <script>
          <?php } ?>
        </script>
      </div>
      <div class="row">

        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <span class="tblname"></span>
            </div>
            <div class="col-md-4   ml-auto">
              <input type="text" id="myInput" class="form-control" style="margin-bottom:1%;" onkeyup="myFunctionS()" placeholder="Search for subjects.." title="Type a subject">
            </div>
          </div>

          <table style="width:100%;display:none" class="table tbldata" id="tblNotice">
            <thead class="thead-dark">
              <tr>
                <th scope="col" style="width:15%">Date</th>
                <th scope="col" style="width:15%">Time</th>
                <th scope="col" style="width:50%">Subject</th>
                <th scope="col" style="width:10%">More</th>
                <th scope="col" style="width:10%">Delete</th>
              </tr>
            </thead>
            <tbody id="tableBody">

            </tbody>
            <tfoot>
              <tr class="table-secondary">
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Subject</th>
                <th scope="col">More</th>
                <th scope="col">Delete</th>
              </tr>
            </tfoot>
          </table>
        </div>

      </div>



    </div>
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

      function myFunction(x) {
        $('#' + x + 'T').toggle(1000);
        $('#' + x).text($('#' + x).text() == 'Hide Notice' ? 'View More' : 'Hide Notice');
      }

      function deleteConformFunction(x) {
        //alert("OK");

        $.ajax({
          url: "Dean_Notices/getDelNotices",

          type: "POST",
          data: {
            id: x
          },
          success: function(data) {
            //alert("OKDel");
            //alert(data);
            //$('.tblname').html("SENT NOTICES")
            $('#myDel').html(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }

        });
        //$('#noteID').html(x);
      }

      function deleteFunction(x) {
        $('.myModelDel').modal('hide');
        var user = <?php echo json_encode($user_id); ?>;
        $.ajax({
          url: "Dean_Notices/DelNotices",

          type: "POST",
          data: {
            id: x,
            user: user
          },
          success: function(data) {
            $('.tblname').html("SENT NOTICES")
            $('#tableBody').html(data);
          },
          error: function(data) {
            alert("Something went wrong");
          }

        });
      }
    </script>
    <!-- Modal -->
    <div class="modal fade myModelDel" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <div class="modal-title" id="exampleModalLabel">
              <h5 style="color:black">CONFORM DELETE</span></h5>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="text-align:center;">

            <div class="container">
              <div class="row d-flex justify-content-center">
                <h2>DELETE NOTICE</h2>
                <p>Are you sure want to delete <span id="noteID"></span> this notice?</p>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width:100%;">Close</button>
                </div>
                <div class="col-md-6" id="myDel">
                  <button class="btn btn-danger" type="button" style="width:100%;">Delete</button>
                </div>


              </div>
            </div>


          </div>

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