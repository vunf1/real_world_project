
<?php //A.Roque Page ?>
<?php


//this file is the view of the campus navigation, (the 2nd functionality in the nav bar )

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
        
    


}

 ?>
<style>
    body { margin: 0; }
    canvas { width: 100%; height: 100% }
</style>
<script type="text/javascript" src="<?php base_url()?>assets/custom.js"></script>
<script type="text/javascript "src="<?php base_url()?>assets/three.js"></script>
<script>
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

    var renderer = new THREE.WebGLRenderer();
    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );
    
    //creating an object to present
    var geometry = new THREE.BoxGeometry( 1, 1, 1 );  //build a geometry 
    var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } ); //set the texture
    var cube = new THREE.Mesh( geometry, material ); //put the geometry and the texture together
    scene.add( cube ); //load the obejct

    camera.position.z = 5
    
    function animate() {  //loop to force the render to draw the object
        requestAnimationFrame( animate );
        cube.rotation.x += 0.01;
        cube.rotation.y += 0.01;
        renderer.render( scene, camera );
    }
</script>
<div class="container-fluid" id="main_navigate">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Navigate Campus
			</h3>
			<form role="form">
				<div class="form-group">
					 
					<input type="text" class="form-control" id="firstBuilding" value="" placeholder="From"  />
				</div>
				<div class="form-group">
					 
					<input type="text" class="form-control" id="secondBuilding" value="" placeholder="To"/>
				</div> 
				<button type="button" class="btn btn-primary" id="validateSearch">
					Search
				</button>
			</form>
		</div>
	</div>
</div>
<hr> 

<script >


    
$('#firstBuilding').on('keyup keypress', function(e) {
    //Block key Event ENTER on id secondBuilding //SEARCH.BAR
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) { 
      e.preventDefault();
      return false;
    }
  });

//antonio
$('#firstBuilding').keyup(function(){ //antonio roque
    //grab the content of 'from' seach box
    var from = $(this).val();  //set the content of the search bar to a variable
    if(from != ''){
        $.ajax({
            //ajax connection with the function searchTxT at the controller 
            url:base_url()+"index.php/Homecontroller/searchBuildings", //specify the function in the controller 
            method:"POST", 
            //means that goes encrypted 
            datatype:'json',
            data:{'searchTxT':from}, //call the function with the variable 'from' in ajax
            success:function(data){
                console.log(data);  //print in the console (only for debugg
                //$("#listContainer").html("");
                alertSuccess("Found"); // message to the user 
            },error:function(xhr, status, error){
                //if the search does not match
                alertError("Not Found");
            }
        });
    }
    
});
//antonio
$('#secondBuilding').keyup(function(){ //antonio roque
    //get the content of the text field to a variable
    var to = $(this).val();
    if(to !=''){
        $.ajax({
           //ajax connection with the controller to have a real time connection with the user 
           url:base_url()+"index.php/Homecontroller/searchBuildings",//route to the controller function
           method:'POST',
           datatype:'json',
           data:{'searchTxT':to}, //call the funtion searchTxT with the attribute "to"
           success:function(data){
           console.log(data); //print "data" to the console
           alertSuccess("Found"); //call the message to the user saying "Found"
           //call3dmodel();
           //CALL HERE THE FUNCTION TO LOAD THE ROUTE IMAGE
           },error: function(xhr, status, error){
               alertError ("Not Found");
           }
        });
    }
    
});

function call3dmodel(){  //antonio roque
    animate();
}
$('#validateSearch').on('click', function(){ //antonio
    var fromInput = $('#firstBuilding').val(); //put the tu contents of the search boxes into the variables
    var toInput = $('#searchBuildings').val();
    
    if (fromInput != '' && toInput != ''){
        console.log(fromInput); //print to the console
        console.log(toInput);// print to the console
        //$("#main_navigate").html(""); clear the div main_navigate 
        console.log("the search was validate, load the route");
        $("#suggestions").html(""); //cleans all the data from the suggestions div
        $('#suggestions').append('hello, load the 3d model');   
        call3dmodel()
    }
    else{
        alertError ("Search is not possible");
    }
    
});     
$('.suggestionfrom').on('click',function(){
    var valuetofill = $('.suggestionfrom').val(); //get the value into th variable
    //$("#suggestions").append(valuetofill);
    $('#firstBuilding').val(valuetofill);
});  
$('.suggestionto').on('click',function(){
   var valuetofill2 = $('.suggestionto').val(); //get the building code that is in the variable
   $('#secondBuilding').val(valuetofill2); // populate the field where the id is #secondBuilding with the previous variable
    
});
    

</script>
<div id="suggestions">
    <?php 
        for($x=0; $x < count($json); $x++){
            $buildingName = $json[$x]['name'];
            $image = $json[$x]['image-dir'];
            $address = $json[$x]['description'];
            $buildCode = $json[$x]['buildCode'];
            echo"
            <div class='row'>
                <div class='col-md-8'>
                $buildingName
                $buildCode
                $x
                </div>
                <div class='col-md-4'>
                        <button type='button' class='btn active btn-sm btn-outline-info suggestionfrom' value='$buildCode'>
                            Set as origin
                        </button> 
                        <br>
                        <button type='button' class='btn active btn-sm btn-outline-info suggestionto' value='$buildCode'>
                            Set as destination 
                        </button>
                    </div>
                </div>
            <br>
            ";
        }
    ?>
</div>
