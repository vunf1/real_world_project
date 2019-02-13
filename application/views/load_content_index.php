

<?php 
var_dump($json);


var_dump("######################");
var_dump($json[0]);
var_dump("######################");


 ?>


<ul class="list-group list-group-flush">
  
  <li class="list-group-item">First item</li>
  <li class="list-group-item">Second item</li>
  <li class="list-group-item">Third item</li>
  <li class="list-group-item">Fourth item</li>
</ul>




<?php
/* Json ErrorHandle*/
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