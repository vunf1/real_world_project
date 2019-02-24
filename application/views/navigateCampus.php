
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

<div class="container-fluid">
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
				<button type="submit" class="btn btn-primary" id="validateSearch">
					Search
				</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php base_url()?>assets/custom.js"></script>
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
                $("#listContainer").html("");
                alertSuccess("Found"); // message to the user 
                call3dmodel();
               //buildSearchList(data);
            },error:function(xhr, status, error){
                //if the search does not match
                alertError("Not Found");
            }
        });
    }
    
}); 
function call3dmodel(){
    print("load photo with the framework");
}
$('#validateSearch').keyup(function(){
    $fromInput = document.getElementById("firstBuilding").value;
    $toInput = document.getElementById("secondBuilding").value;
    if ($fromInput != '' || $toInput != ''){
        console.log(fromInput);
        console.log(toInput);
    }
    
});                   
                          
</script>