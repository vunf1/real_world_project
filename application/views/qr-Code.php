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

<h2>Container</h2>
<a><?php echo $json[0]['name'] ?></a>