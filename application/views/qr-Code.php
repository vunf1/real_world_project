<html lang="en">
  <head>
  <script src="assets/src-QR/jquery-1.9.1.min.js"></script>
  <script src="assets/src-QR/html5-qrcode.min.js"></script>
    <script src="assets/src-QR/main.js"></script>
    
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

<h5 align="center">QR Code Reader</h5>

<center><div id="reader" style="width:300px;height:250px;"></div></center>

<b><h4 align="center">Result:</h4></b>
<center><span id="read" class="center"></span></center>
    </body>
</html>
