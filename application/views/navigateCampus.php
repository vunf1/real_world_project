
<?php //A.Roque Page ?>

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
                        };
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
                        };
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


  /*  
$('#firstBuilding').on('keyup keypress', function(e) {
    //Block key Event ENTER on id secondBuilding //SEARCH.BAR
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) { 
      e.preventDefault();
      return false;
    }
  });
*/


$('#validateSearch').on('click', function(){ //antonio roque
    var fromInput = $('.firstBuilding').val(); //put the tu contents of the dropdowns into the variables
    var toInput = $('.secondBuilding').val();
    
    if (fromInput != 'choose' && toInput != 'choose' && fromInput!=toInput ){
        
        
        $("#container").html("");
        triggerMap(fromInput,toInput,"container",100,70);
    }
    else{
        alertError ("Search is not possible");
    }
    
});  


/*
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

    }*/
</script>
<div id="suggestions">
<!--
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="width:100%;height:auto;" class="d-block w-80" src="assets/careers-fair-event.PNG" alt="First slide">
        </div>
    <div class="carousel-item">
        <img style="width:100%;height:auto;" class="d-block w-80" src="assets/graduation.PNG" alt="Second slide">
    </div>
    <div class="carousel-item">
        <img style="width:100%;height:auto;" class="d-block w-80" src="assets/freshers.PNG" alt="Third slide">
    </div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
        </a>-->
</div>










</div>