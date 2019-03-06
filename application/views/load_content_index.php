
<?php //Joao Search Page ?>
<?php 
//code presented for the functionality search building 
//
//var_dump(count($json));

/**
 * 
 * dynamic json output file, tables [Lists]
 */?>
<?php

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" >
            <h3 class="text-center">
				Search Building
			</h3>
            <div align="center">
                <ul class="pricing-content list-unstyled">
                    <li>
                        <input class="form-control" type="text" placeholder="Search for building/categories" id="solution_name"></input>
                    </li>
                </ul>
            </div>
            

<script >

  
$( document ).ready(function(){
    $.ajax({// create list when click on navBar op-Searching
            url:base_url()+"index.php/Homecontroller/searchBuildings",
            method:"POST",
            dataType:'text',
            data:{'searchTxT':'all'}, //sends the content of the variabl search by post method names as searchTxT
            success:function(data){
                
                $("#listContainer").html("");
                buildSearchList($.parseJSON(data),"listContainer");
                

            },error: function(xhr, status, error){ 
                /*After 3 bad inputs ,fails and show this(Idea for later  -  counter >3=action)*/
                alertError("Not Found");
            }
        });
        

});
  
$('#solution_name').keyup(function(e){//Joao

    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) { //BLOCK PRESS EVENT KEY[ENTER]
        e.preventDefault();
        return false;
    }
    var search = $(this).val();
  //console.log(search);
  if(search != ''){
      alertWarning("Searching for "+search);
      $.ajax({
          url:base_url()+"index.php/Homecontroller/searchBuildings",
          method:"POST",
          dataType:'text',
          data:{'searchTxT':search}, //sends the content of the variable $search by post method,  variable name is 'searchTxT', on Controller its save os variable $search
          success:function(data){ 
              //clear the div where the id = listContainer 
            if(data!=0){
                $("#listContainer").html("");
                buildSearchList($.parseJSON(data),"listContainer");
                alertSuccess("Found "+search);
            }else{
                alertError("Nothing Found");
            };
        },error: function(xhr, status, error){ 
            alertError(error+" Controller");
        }
    });
  }
  else{
      $.ajax({
        url:base_url()+"index.php/Homecontroller/searchBuildings",
        method:"POST",
        dataType:'text',
        data:{'searchTxT':'ALL'},
        success:function(data){
            $("#listContainer").html("");
            buildSearchList($.parseJSON(data),"listContainer");
        },error: function(xhr, status, error){ 
            alertError(error+" Controller"); 
        }
        });
    }

});
 

$('#solution_name').on('keyup keypress', function(e) {
    //Block key Event ENTER onid solution_name 
    //SEARCH.BAR
       
    });
</script>



<div   id="listContainer">
    
</div><!--List Container -->

