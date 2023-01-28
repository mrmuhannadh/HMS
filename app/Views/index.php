<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <!--Title logo-->
  <link rel="icon" href="<?= base_url() ?>/assets/images/Header/logo.png">
  <title>TECHMS</title>
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
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Header/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/index/myStyle.css">
  <!--New-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="<?= base_url() ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/css/jquery-confirm.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Admin/style.css">
  <link href="<?= base_url() ?>/assets/css/formValidation.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Footer/style.css">
  <script src="<?= base_url() ?>/assets/js/formValidation.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/bootstrap_validation.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/toastr.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/jquery-confirm.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <style>
    .img1 {

      border-radius: 4px;
      padding: 15px;
      width: 1000px;
      height: 450px;
    }

    .h3_style {
      text-align: center;
    }

    .p_style {


      text-align: justify;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg mynavCustom">
    <a class="navbar-brand " href="#"><img src="<?= base_url() ?>/assets/images/Header/logo.png" class="theLogo"></a>
    <a class="navbar-brand nbr" href="#">TECHMS</a>
    <button class="navbar-toggler theBtnMob" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="background:white"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link nlink" href="<?= base_url() ?>/home">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nlink" href="<?= base_url() ?>/gallery">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nlink" href="<?= base_url() ?>/contact_us">CONTACT US</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">

        <button class="btn btn-outline-success my-2 my-sm-0" id="modalActivate" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalPreview">LOGIN</button>
      </form>
    </div>
  </nav>
  <div class="vidMain">
    <video src="<?= base_url() ?>/assets/videos/vid.mp4" type="Video/mp4" class="myvid" autoplay loop muted></video>
  </div>
  <div class="row welMsg">
    <div class="col-md-12 ">
      <h2 class="welMs">Welcome to TECHMS</h2>
    </div>

  </div>

  <!-- Modal -->
  <div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
    <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
      <div class="modal-content-full-width modal-content ">
        <div class=" modal-header-full-width   modal-header text-center">
          <h5 class="modal-title w-100" id="exampleModalPreviewLabel">TECHMS - LOGIN</h5>
          <button type="button" class="close " data-dismiss="modal" aria-label="Close">
            <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <h1 class="section-heading text-center wow fadeIn my-5 pt-3">LOGIN</h1>
          <div class="row  ">
            <div class="col-md-12 text-center" style="padding-left:30%;padding-right:30%">
              <form method="post" action="home/check_user" id="formData" autocomplete="off">
                <div class="form-group text-left">
                  <label for="username">USER NAME</label>
                  <input class="form-control" name="user" id="name" aria-describedby="nameHelp" placeholder="User">
                  <small id="emailHelp" class="form-text text-muted">Please enter your user name</small>
                </div>
                <div class="form-group text-left">
                  <label for="exampleInputPassword1">Password</label>
                  <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-check">
                  <i> forgot password?</i>
                  <a href="<?= base_url() ?>/forgot_password" type="button" data-toggle="modal" data-target="#exampleModal"><label class="form-check-label labelReset" for="exampleCheck1">RESET</label></a>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="reset" class="btn btn-danger">CLEAR</button>
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
        <div class="row modal-footer-full-width  modal-footer">

          <div class="col-md-12">
            <div class="row">
              <div class="col-md-10 text-center">
                Faculty of Technology - University of Ruhuna
              </div>
              <div class="col-md-2 text-right">
                <button type="button" class="btn btn-danger btn-md btn-rounded" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>



        </div>
      </div>
    </div>
  </div>

  <!-- Modal RESET-->
  <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <a href="<?= base_url() ?>/forgot_password_view" class="modal-title" id="exampleModalLabel">RESET PASSWORD</a>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      </div>
      <div class="modal-footer">
        <button type="" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>

  <script>
    function otpConform() {
      $('.theOtpForm').hide(2000);
      $('.chanePw').show(2000);
    }
    setTimeout(function() {
      $("#exampleModal").modal("hide")
    }, 3000);
  </script>
  <!-- Modal Chane pw-->
  <div class="modal fade " id="modelChange" tabindex="-1" role="dialog" aria-labelledby="modelChange" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modelChange">RESET PASSWORD</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 text-center">


            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!--Aboutus-->
  <section id="aboutUs">
    <div class="inner_wrapper">
      <div class="container">
        <!-- <img src="<?= base_url() ?>/assets/images/Index/hostel.jpg" class="img1"></a> -->
        <h3 class="h3_style">Hostel management System Faculty Of Technology, University of Ruhuna</h3>
        <p class="p_style">The Faculty of Technology was officially established under the gazette notification issued on 26.04.2016 with four Departments,
          namely, Engineering Technology, Information and Communication Technology, Biosystems Technology and Multidisciplinary Studies.
          The premises for the Faculty is located at Karagoda Uyangoda, Kamburupitiya, close to the Faculty of Agriculture.
          The first phase of the new building and student hostels are currently under construction and they are expected to be completed by end of 2017.
          Until then the classes will be conducted at the premises of Faculty of Science, Wellamadama.
          The Faculty offers two degree programmes for the first batch of students entering in 2016, namely, Bachelor of Engineering Technology Honours - BET(Hons) focusing on Electromechanical Technology and Bachelor of Information and Communication Technology Honours - BICT(Hons) focusing on Application Development. BET(Hons) and BICT(Hons) degree programmes have been constructed to satisfy the accreditation guidelines of Sydney Accord as well as Institute of Engineers, Sri Lanka (IESL) and Computer Society of Sri Lanka (CSSL), respectively.
          The Faculty plans to produce internationally accredited Technologists.
          The Department of Multidisciplinary Studies will offer additional Complementary Subjects, which are required for carrier development as well as for the accreditation.
          The Bachelor of Biosystems Technology, expected to be offered from the second batch of students entering in 2017, is in preparation.</p>
        <div class="inner_section">
          <div class="row">
            <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/about-img.jpg" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
            <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
              <div class=" delay-01s animated fadeInDown wow animated">
                <!-- <h3>Welcome to Hostel Managment System Web-page of the Faculty of Technology</h3><br /> -->
                <br />

              </div>
              <div class="work_bottom"> <span>Want to know more..</span> <a href="<?= base_url() ?>/contact_us" class="contact_btn">Contact Us</a> </div>
            </div>

          </div>


        </div>
      </div>
    </div>
  </section>
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

  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.nav.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.isotope.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/wow.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/custom.js"></script>
  <!-- CHAT BAR BLOCK -->
  <div class="chat-bar-collapsible">
    <button id="chat-button" type="button" class="collapsible">Chat with us!
      <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
    </button>

    <div class="content">
      <div class="full-chat-block">
        <!-- Message Container -->
        <div class="outer-container">
          <div class="chat-container">
            <!-- Messages -->
            <div id="chatbox">
              <h5 id="chat-timestamp"></h5>
              <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
            </div>

            <!-- User input box -->
            <div class="chat-bar-input-block">
              <div id="userInput">
                <input id="textInput" class="input-box" type="text" name="msg" placeholder="Tap 'Enter' to send a message">
                <p></p>
              </div>

              <div class="chat-bar-icons">
                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart" onclick="heartButton()"></i>
                <div class="chat-bar-icons">
                  <i id="chat-icon" style="color: orange;" class="fas fa-grin" onclick="smileButton()"></i>
                </div>
                <i id="chat-icon" style="color: #333;" class="fas fa-paper-plane" onclick="sendButton()"></i>
              </div>


            </div>

            <div id="chat-bar-bottom">
              <p></p>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script>
    // Collapsible
    var coll = document.getElementsByClassName("collapsible");

    for (let i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }

      });
    }

    function getTime() {
      let today = new Date();
      hours = today.getHours();
      minutes = today.getMinutes();

      if (hours < 10) {
        hours = "0" + hours;
      }

      if (minutes < 10) {
        minutes = "0" + minutes;
      }

      let time = hours + ":" + minutes;
      return time;
    }

    // Gets the first message
    function firstBotMessage() {
      let firstMessage = "Hi, it's great to see you!"

      document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage + '</span></p>';

      let time = getTime();

      $("#chat-timestamp").append(time);
      document.getElementById("userInput").scrollIntoView(false);

    }


    firstBotMessage();

    // Retrieves the response
    function getHardResponse(userText) {
      let botResponse = getBotResponse(userText);
      let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
      $("#chatbox").append(botHtml);


      document.getElementById("chat-bar-bottom").scrollIntoView(true);
    }

    //Gets the text text from the input box and processes it
    function getResponse() {
      let userText = $("#textInput").val();

      if (userText == "") {
        userText = "I love Code Palace!";
      }

      let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

      $("#textInput").val("");
      $("#chatbox").append(userHtml);
      document.getElementById("chat-bar-bottom").scrollIntoView(true);

      setTimeout(() => {
        getHardResponse(userText);
      }, 1000)

    }

    // Handles sending text via button clicks
    function buttonSendText(sampleText) {
      let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

      $("#textInput").val("");
      $("#chatbox").append(userHtml);
      document.getElementById("chat-bar-bottom").scrollIntoView(true);

      //Uncomment this if you want the bot to respond to this buttonSendText event
      // setTimeout(() => {
      //     getHardResponse(sampleText);
      // }, 1000)
    }

    function sendButton() {
      getResponse();
    }

    function heartButton() {
      buttonSendText("Heart clicked!")
    }

    // Press enter to send a message
    $("#textInput").keypress(function(e) {
      if (e.which == 13) {
        getResponse();
      }
    });

    function getBotResponse(input) {
      //rock paper scissors
      if (input == "How can i communicate with a subwarden?") {
        return "Through the chat";
      } else if (input == "If any emergency cases how can i contact subwarden?") {
        return "Through click on the emergency button";
      } else if (input == "How manay years i can get the hostel?") {
        return "Based on the hostel availablity it will be decided";
      } else if (input == "At what time hostel open and closed?") {
        return "From 6.00 am to 8.00 pm";
      } else if (input == "hostel open and closed time") {
        return "From 6.00 am to 8.00 pm";
      } else if (input == "how much i need to pay for each of year") {
        return "only 2000";
      } else if (input == "If any difficault situation ") {
        return "need to communicate with a sub warden";
      } else if (input == "If any late situation how can i enter the hostel?") {
        return "need to communicate with a sub warden";
      } else if (input == "Can i meet my parents in hostel accommodation on time?") {
        return "on weekend times";
      } else if (input == "when can i meet my parents in hostel") {
        return "on weekend times";
      } else if (input == "when can i meet sub warden") {
        return "morning 9 am to 8 pm";
      } else if (input == "subwarden meet time") {
        return "morning 9 am to 8 pm";
      }

      // Simple responses
      if (input == "hello") {
        return "Hello there! how can ihelp you";
      } else if (input == "goodbye") {
        return "Talk to you later!";
      } else {
        return "Oops! Sorry, I didn't understand your question!";
      }

    }

    /* tinymce.init({
      selector: "#input",
      plugins: "emoticons",
      toolbar: "emoticons",
      toolbar_location: "bottom",
      menubar: false
    }); */
  </script>
</body>

</html>