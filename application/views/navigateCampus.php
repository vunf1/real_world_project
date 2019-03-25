
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
                        <option value="choose"> Choose....</option>
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
                        <option value="choose" >Choose...</option>
                        <?php
                        for ($x=0; $x < count($json); $x++) { 
                            ?><option value="<?php echo $json[$x]['buildCode'];?>"><?php echo $json[$x]['buildCode']; ?></option> <?php
                        }
                        ?>
                    </select>
                </div> 
				<button type="button" class="btn btn-primary btn-md active btn-block" id="validateSearch">
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

function call3dmodel(buildingCode, elementId){  //antonio roque
    model = new TD_class(buildingCode, elementId,20,20);
    model.init();
}
$('#validateSearch').on('click', function(){ //antonio roque
    var fromInput = $('.firstBuilding').val(); //put the tu contents of the dropdowns into the variables
    var toInput = $('.secondBuilding').val();
    if ((fromInput != 'choose' && toInput != 'choose' )&& fromInput!=toInput ){
        /*
        console.log(fromInput); //print to the console
        console.log(toInput);// print to the console
        //$("#main_navigate").html(""); clear the div main_navigate 
        console.log("the search was validate, load the route");
        $("#searchingNav").html("");
        $("#suggestions").html(""); //cleans all the data from the suggestions div
        $('#suggestions').append('hello, load the 3d model');
        $('#suggestions').append(fromInput);
        //$('#suggestions').append(call3dmodel(fromInput+"_"+toInput, 'suggestions',20,20));
    
    */
    
        console.log("MAP_"+fromInput+"_"+toInput); //print to the console
        $("#searchingNav").html("");
        $("#container").html("");
        //call3dmodel(fromInput, 'container',40,100);
        
        //callNav();
    
    
    
    
    }
    else{
        alertError ("Search is not possible");
    }
    
});   

function callNav(){//Joao 
    alertWarning("Loading page...") ;
    $.ajax({
        url:base_url()+'index.php/Homecontroller/index_contentNavCam',
        method:"POST",
        datatype:'text',
        success:function(data){
            $('#container').html("");
            $('#container').html(data);
            alertSuccess("Loaded");
        },
        error: function(xhr, status, error){
            alertError("Search Error: "+ xhr.status+" - "+error);
        }
    });

}
</script>
<div id="suggestions">

</div>
