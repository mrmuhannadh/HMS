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
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/Footer/style.css">
  <link href="<?= base_url() ?>/assets/css/formValidation.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">


  <script src="<?= base_url() ?>/assets/js/formValidation.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/bootstrap_validation.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/toastr.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/jquery-confirm.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <style>

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
        <li class="nav-item ">
          <a class="nav-link nlink" href="<?= base_url() ?>/home">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
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
  <section class="content">
    <div class="container">
      <div class="row">
        <h1 class="text-center" style="width: 100%;">Gallery page of Hostel</h1>
      </div>
      <div class="row">

        <?php foreach ($images as $image) : ?>
          <div class="col-md-4">
            <img src='assets/Images/Gallery/<?= $image['Image_name'] ?>' data-toggle="modal" data-target="#exampleModalCenter" class="galleryImage" onclick="showImage('<?= $image['Image_name'] ?>')" style='padding:5% 0% 0% 0%;object-fit:cover;width:100%'>
          </div>

        <?php endforeach; ?>
          <!-- Modal -->
<div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-body" id="gimg">
        
      </div>

    </div>
  </div>
</div>

      </div>
    </div>
    <script>
      function showImage(x){
        $.ajax({
          url:"Home/showImg",
          method:"POST",
          data:{
            img:x
          },
          success:function(data){
              $('#gimg').html(data);
          },
          error:function(data){
            alert("Error");
          }
        });
      }
      </script>
  </section>



  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.nav.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.isotope.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/wow.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/custom.js"></script>
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
</body>

</html>