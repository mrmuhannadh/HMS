<html>
    <head>
        <title>Forgot Password</title>
        <!--Bootstrap Connection-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js">
        </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<!--CSS Connection-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
 	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Room/style.css">
        
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Header/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <!--New-->
        
        <link href="<?=base_url()?>/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/jquery-confirm.min.css" rel="stylesheet" type="text/css">
        
        <link href="<?=base_url()?>/assets/css/formValidation.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">
        
        
        <script src="<?=base_url()?>/assets/js/formValidation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/bootstrap_validation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/toastr.min.js"></script>
        <script src="<?=base_url()?>/assets/js/jquery-confirm.min.js"></script>
    </head>
    <body>
        <script>
        //navbar
            $(function () {
              $(document).scroll(function () {
                var $nav = $(".navbar");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
              });
            });
    </script>
        <nav class="navbar navbar-custom navbar-expand-lg fixed-top">
                    <div> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                   
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                       
                        
                        <ul class="navbar-nav p">
                            <li class="nav-item ">
                                <h1 class="n">HOSTEL MANAGEMENT SYSTEM</h1></li>
                        </ul>
                        <ul class="navbar-nav nt" >
                          
                         
                            <li class="nav-item">
                            <a class="nav-link nl" href="">HOME</a>
                          </li>
                            
                        </ul>
                  </div>
                </div>
                <img src="<?=base_url()?>/assets/images/Header/logo.png" class="logoT">
        </nav>
        
        
        
        <br>
        <div class="row" style="width:60%;padding-left:35%;padding-top:20%">

            <div class="container">
                <h2>Forgot Password</h2>
                <form method="post" action="<?php echo base_url('forgot_password'); ?>" id="formData" autocomplete="off">
                    <br>
                <span class="">E-MAIL Address</span>
                    <input type="text" name="email" id="name" class="form-control">
                <br>
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <button type="submit" value="login" name="submit" class="btn btn-success float-right">RESET PASSWORD</button>
                    </div>
                </div>
                </form>
            </div>
                
        </div>
    </body>
    
</html>