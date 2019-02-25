
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
<script type="text/javascript" src="<?php base_url()?>assets/custom.js"></script>
<div class="container-fluid" id="main_navigate">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Navigate Campus
			</h3>
			<form role="form">
				<div class="form-group">
					 
					<input type="text" class="form-control" id="firstBuilding" placeholder="From"  />
				</div>
				<div class="form-group">
					 
					<input type="text" class="form-control" id="secondBuilding" placeholder="To"/>
				</div> 
				<button type="button" class="btn btn-primary" id="validateSearch">
					Search
				</button>
			</form>
		</div>
	</div>
</div>

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
$('#firstBuilding').keyup(function(){
    //grab the content of 'from' seach box
    var from = $(this).val();  //set the content of the search bar to a variable
    if(from != ''){
        $.ajax({
            //ajax connection with the function searchTxT at the controller 
            url:base_url()+"index.php/Homecontroller/searchBuildings", //specify the function in the controller 
            method:"POST", //means that goes encrypted 
            datatype:'json',
            data:{'searchTxT':from}, //call the function with the variable 'from' in ajax
            success:function(data){
                console.log(data);  //print in the console (only for debugg
                //$("#listContainer").html("");
                alertSuccess("Found"); // message to the user 
                call3dmodel();
            },error:function(xhr, status, error){
                //if the search does not match
                alertError("Not Found");
            }
        });
    }
    
});
//antonio
$('#secondBuilding').keyup(function(){ //antonio
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

function call3dmodel(){  //antonio
    console.log("call the 3d model")
}
$('#validateSearch').on('click', function(){ //antonio
    var fromInput = $('#firstBuilding').val(); //put the tu contents of the search boxes into the variables
    var toInput = $('#searchBuildings').val();
    
    if (fromInput != '' || toInput != ''){
        console.log(fromInput); //print to the console
        console.log(toInput);// print to the console
        //$("#main_navigate").html(""); clear the div main_navigate 
        console.log("the search was validate, load the route")
    }
    
});                   
                          
</script>