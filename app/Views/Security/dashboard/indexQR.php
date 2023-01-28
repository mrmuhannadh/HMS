<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    
    <title>Document</title>
</head>
<body>
    <div class="container-fluid"> 
        <div class="row">
              <div class="col-md-6">
                <p>SCAN QR CODE HERE</p>
                  <video id="preview" width="50%"></video><br>
                  <label>You can Enter TGNUm here</label><br>
                    <div class="col-md-5"> 
                       <input type="text" name="text" id="text" readonyy="" placeholder="scan QRcode" class="form-control" style="width: 300x;">
                    </div>
                    <div class="col-md-5">
                       <button type="button" class="btn btn-primary">Get Attendences</button>
                    </div>
                </div>

            <div class="col-md-6">
            Details Of Student
            <form>
                <div class="form-row">
                  <div class="col">
                    First name <input type="text" class="form-control" placeholder="First name" style="width:50%;">
                    Last name <input type="text" class="form-control" placeholder="Last name" style="width: 50%;">
                    TimeIN <input type="text" class="form-control" placeholder="First name" style="width:50%;">
                    TimeOUT <input type="text" class="form-control" placeholder="Last name" style="width: 50%;">
                  </div>
                </div>
</form>
            
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({
        video: document.getElementById('preview')
      });

      scanner.addListener('scan', function (content) {
        console.log(content);
      });

      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });

      scanner.addListener('scan',function(c){
            document.getElementById('text').value=c;
        });

    </script>
  </body>
</html>
