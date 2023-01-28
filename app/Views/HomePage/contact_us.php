<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <title>Home Page</title>
  <!-- <link rel="icon" href="favicon.png" type="image/png"> -->
  <link href="<?= base_url() ?>/assets/css/index/style.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/css/index/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/css/index/animate.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/index/myStyle.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Header/style.css">
</head>

<body>

  <!--Header_section-->

    <nav class="navbar navbar-expand-lg mynavCustom">
      <a class="navbar-brand " href="#"><img src="<?= base_url() ?>/assets/images/Header/logo.png" class="theLogo"></a>
      <a class="navbar-brand nbr" href="#">TECHMS</a>
      <button class="navbar-toggler theBtnMob" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background:white"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link nlink" href="<?= base_url() ?>/home">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nlink" href="<?= base_url() ?>/gallery">GALLERY</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nlink" href="#">CONTACT US</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">

          <button class="btn btn-outline-success my-2 my-sm-0" id="modalActivate" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalPreview">LOGIN</button>
        </form>
      </div>
    </nav>

  <!--Header_section-->

  <!--Footer-->
  <footer class="footer_wrapper" id="contact">
    <div class="container">
      <section class="page_section contact" id="contact">
        <div class="contact_section">
          <h2>Contact Us</h2>
          <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 wow fadeInLeft">
            <div class="contact_info">
              <div class="detail">
                <h4>Faculty of Technology
                  University of Ruhuna</h4>
                <p>
                  Karagoda Uyangoda
                  Kamburupitiya,Matara
                  Sri Lanka. 81000</p>
              </div>

              <div class="detail">
                <h4>call us</h4>
                <p>041-2294750</p>
              </div>
              <div class="detail">
                <h4>Email us</h4>
                <p>dean@tec.ruh.ac.lk</p>
              </div>
            </div>






          </div>
          <div class="col-lg-8 wow fadeInLeft delay-06s">
            <div class="form">
              <form method="POST" action="<?php echo base_url('contact_us'); ?>" id="formData" autocomplete="off">
                <input class="input-text" type="text" name="name" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                <input class="input-text" type="text" name="email" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                <textarea class="input-text text-area" name="message" cols="message" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                <button type="submit" value="submit" name="submit" class="btn btn-success float-right">SEND MESSAGE</button>
            </div>
          </div>
          </form>
          
        </div>
    </div>
    </div>
    </section>
    </div>
    <div class="col-md-12" style="width:100%">
            <div id="map-container-google-2" class="map-container" style=" width:100%">

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15869.987621536053!2d80.5419973!3d6.0635172!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x717cf948bd5444ff!2sFaculty%20of%20Technology%2C%20University%20of%20Ruhuna!5e0!3m2!1sen!2slk!4v1653208480088!5m2!1sen!2slk" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
  </footer>

  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.nav.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.isotope.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/wow.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/custom.js"></script>

</body>

</html>