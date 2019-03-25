<html lang="en">
  <head>
    <script type="text/javascript" src="grid.js"></script>
    <script type="text/javascript" src="version.js"></script>
    <script type="text/javascript" src="detector.js"></script>
    <script type="text/javascript" src="formatinf.js"></script>
    <script type="text/javascript" src="errorlevel.js"></script>
    <script type="text/javascript" src="bitmat.js"></script>
    <script type="text/javascript" src="datablock.js"></script>
    <script type="text/javascript" src="bmparser.js"></script>
    <script type="text/javascript" src="datamask.js"></script>
    <script type="text/javascript" src="rsdecoder.js"></script>
    <script type="text/javascript" src="gf256poly.js"></script>
    <script type="text/javascript" src="gf256.js"></script>
    <script type="text/javascript" src="decoder.js"></script>
    <script type="text/javascript" src="qrcode.js"></script>
    <script type="text/javascript" src="findpat.js"></script>
    <script type="text/javascript" src="alignpat.js"></script>
    <script type="text/javascript" src="databr.js"></script>
    <script type="text/javascript" src="customjs.js"></script>
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
<a><?php echo $json[0]['name'] ?></a>
<div class="video-container">
  <video id="video-preview"></video>
  <canvas id="qr-canvas" class="hidden" ></canvas>
</div>
    </body>
</html>
