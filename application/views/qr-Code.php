<html lang="en">
  <head>
    <script type="text/javascript" src="assets/src-QR/jsqrcode-combined.min.js"></script>
    <script type="text/javascript" src="assets/src-QR/html5-qrcode.min.js"></script>
    
  </head>
  <body>
<?php //Varun Page ?>
<?php
/**
 * Joao Documentation
 * 
 * ALL DATA INFORMATION(rOnly)
 * inside $json
 * variable , came from homecontroller
 * 
 * value from key - $json[<building number>][building info index];
 * 
 * array from key $json[<building number>][<building info array>][<array index>]
 * 
 * 
 * 
 */
for ($x=0; $x < count($json); $x++) { 
        //var_dump($json[$x]);
    //this loop is to create dinamically
    $buildingName = $json[$x]['name'];
    $image = $json[$x]['image-dir'];
    $address = $json[$x]['address'];
    $description = $json[$x]['description'];
    $buildCode = $json[$x]['buildCode'];

}
?>

<h2 align="center">Qr Code Scanner</h2>

<center><div id="reader" style="width:300px;height:250px"></center>
    </div>
      <script type="text/javascript">
      $('#reader').html5_qrcode(function(data){
     // do something when code is read
        },
        function(error){
          //show read errors 
        }, function(videoError){
          //the video stream could be opened
        }
      );
      </script>
    </body>
</html>
