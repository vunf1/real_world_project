
<?php //A.Roque Page ?>

<style>
    body { margin: 0; }
    canvas { width: 100%; height: 100% }
</style>
<script type="text/javascript" src="<?php base_url()?>assets/custom.js"></script>

<div class="container-fluid" id="main_navigate">
	<div class="row">
		<div class="col-md-12" id="searchingNav">
			<h3 class="text-center">
				Navigate Campus
			</h3>
			<form role="form">
				<div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01" >Origin</label>
                    </div>
     

                    <select class="custom-select firstBuilding" id="inputGroupSelect01">
                        <option > Choose....</option>
                        <?php
                        for ($x=0; $x < count($json); $x++) { 
                            ?><option value="<?php echo $json[$x]['buildCode'];?>"><?php echo $json[$x]['buildCode']; ?></option> <?php
                        }
                        ?>
                    </select>
				</div>
                
                <div class ="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect02" >Destin</label>
                    </div>
                    <select class="custom-select secondBuilding" id="inputGroupSelect02 ">
                        <option >Choose...</option>
                        <?php
                        for ($x=0; $x < count($json); $x++) { 
                            ?><option value="<?php echo $json[$x]['buildCode'];?>"><?php echo $json[$x]['buildCode']; ?></option> <?php
                        }
                        ?>
                    </select>
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
/*$('#firstBuilding').keyup(function(){ //antonio roque
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
*/
//antonio
/*$('#secondBuilding').keyup(function(){ //antonio roque
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
*/
function call3dmodel(buildingCode, elementId){  //antonio roque
    model = new TD_class(buildingCode, elementId);
    model.init();
}
$('#validateSearch').on('click', function(){ //antonio roque
    var fromInput = $('.firstBuilding').val(); //put the tu contents of the dropdowns into the variables
    var toInput = $('.secondBuilding').val();
    if (fromInput != '' && toInput != ''){
        console.log(fromInput); //print to the console
        console.log(toInput);// print to the console
        //$("#main_navigate").html(""); clear the div main_navigate 
        console.log("the search was validate, load the route");
        $("#searchingNav").html("");
        $("#suggestions").html(""); //cleans all the data from the suggestions div
        $('#suggestions').append('hello, load the 3d model');
        $('#suggestions').append(fromInput);
        $('#suggestions').append(call3dmodel(fromInput, 'suggestions'));
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

</div>
