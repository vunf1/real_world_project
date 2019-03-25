<html lang="en">
  <head>
    <script type="text/javascript" src="assets\src-QR\grid.js"></script>
    <script type="text/javascript" src="assets\src-QR\version.js"></script>
    <script type="text/javascript" src="assets\src-QR\detector.js"></script>
    <script type="text/javascript" src="assets\src-QR\formatinf.js"></script>
    <script type="text/javascript" src="assets\src-QR\errorlevel.js"></script>
    <script type="text/javascript" src="assets\src-QR\bitmat.js"></script>
    <script type="text/javascript" src="assets\src-QR\datablock.js"></script>
    <script type="text/javascript" src="assets\src-QR\bmparser.js"></script>
    <script type="text/javascript" src="assets\src-QR\datamask.js"></script>
    <script type="text/javascript" src="assets\src-QR\rsdecoder.js"></script>
    <script type="text/javascript" src="assets\src-QR\gf256poly.js"></script>
    <script type="text/javascript" src="assets\src-QR\gf256.js"></script>
    <script type="text/javascript" src="assets\src-QR\decoder.js"></script>
    <script type="text/javascript" src="assets\src-QR\qrcode.js"></script>
    <script type="text/javascript" src="assets\src-QR\findpat.js"></script>
    <script type="text/javascript" src="assets\src-QR\alignpat.js"></script>
    <script type="text/javascript" src="assets\src-QR\databr.js"></script>
    <script type="text/javascript" src="assets\src-QR\customjs.js"></script>
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

<h2>Qr Code Scanner</h2>

<div class="video-container">
  <video id="video-preview"></video>
  <canvas id="qr-canvas" class="hidden" ></canvas>
</div>
    </body>
</html>
