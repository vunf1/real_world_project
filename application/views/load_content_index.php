

<?php 

//var_dump(count($json));

/**
 * 
 * dynamic json output file, tables [Lists]
 */?>
 

<ul class="list-group list-group-flush">
<?php
for ($x=0; $x < count($json); $x++) { 
        //var_dump($json[$x]);
        /*
        echo "############<br>";
        echo $json[$x]['buildCode'];
        echo "<br>";
        echo $json[$x]['author'];
        echo "<br>";
        echo $json[$x]['description'];
        echo "<br>";
        echo $json[$x]['gpsCoordinates'][0];
        echo "<br>";
        echo $json[$x]['gpsCoordinates'][1];
        echo "<br>";
        echo $json[$x]['image-dir'];
*/
        
  echo "<li class='list-group-item' style='width:100%;height:20%;'>
  <img src='dummy.png' style='width:30%;height:80%;'> ".$json[$x]['buildCode']." </li>";



}

 ?>

</ul>


<?php
/* Json ErrorHandle-not implemented corretly*/
switch (json_last_error()) {
    case JSON_ERROR_NONE:
        ?><script>console.log(' - No errors');</script><?php
    break;
    case JSON_ERROR_DEPTH:
        ?><script>console.log(' - Maximum stack depth exceeded');</script><?php
    break;
    case JSON_ERROR_STATE_MISMATCH:
        ?><script>console.log(' - Underflow or the modes mismatch');</script><?php
    break;
    case JSON_ERROR_CTRL_CHAR:
        ?><script>console.log(' - Unexpected control character found');</script><?php
    break;
    case JSON_ERROR_SYNTAX:
        ?><script>console.log(' - Syntax error, malformed JSON');</script><?php
    break;
    case JSON_ERROR_UTF8:
        ?><script>console.log(' - Malformed UTF-8 characters, possibly incorrectly encoded');</script><?php
    break;
    default:
        ?><script>console.log(' - Unknown error or not listed');</script><?php
    break;
}
 ?>