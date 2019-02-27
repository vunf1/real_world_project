
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
            <style type="text/css">
    
                .left-side {//list building divide into 2sides -left30% -right70%
                margin: 0;
                float: left;
                width: 30%;
                }
                .right-side {
                margin: 0;
                float: left;
                width: 70%;

                }
                .split-items, .list-group-item, .left-side{//no borders on left-right side
                    
                border-top-right-radius:0px;
                border-bottom-right-radius:0px;
                }

                .split-items, .list-group-item, .right-side{
                    //no borders on right + text justify - need to put first child of .right-side without text justify ;

                    border:0;
                    text-align: justify;
                    border-top-left-radius:0px;
                    border-bottom-left-radius:0px;
                    border-bottom-right-radius:0px;
                    border-top-right-radius:4px;
                }

            </style>

<script >

$('#solution_name').on('keyup keypress', function(e) {
    //Block key Event ENTER onid solution_name 
    //SEARCH.BAR
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) { 
      e.preventDefault();
      return false;
    }
  });
  
  $( document ).ready(function(){


  });
  
$('#solution_name').keyup(function(){//Joao
  //var search = "HUB"
  var search = $(this).val();
  //console.log(search);
  if(search != ''){
      alertWarning("Searching for "+search);
      
        $.ajax({
            url:base_url()+"index.php/Homecontroller/searchBuildings",
            method:"POST",
            dataType:'text',
            data:{'searchTxT':search},
            success:function(data){
                //console.log($.parseJSON(data));
                //$("#listContainer").html(""); // clear the div where the id = listContainer 
                if(data){
                    alertSuccess("Found "+search);
                }else{
                    alertError("Nothing Found");
                };
                $("#listContainer").html("");
                buildSearchList($.parseJSON(data),"listContainer");
                //buildSearchList(data,"listContainer");
                l

            },error: function(xhr, status, error){ 
                /*After 3 bad inputs ,fails and show this(Idea for later  -  counter >3=action)*/
                alertError("Not Found");

                //alert('Search Error: '+ xhr.status+ ' - '+ error); 
            }
        });
  }
  <?php
  /**Create List again when search is empty, 
   * this page has access to jsonFile by pHp and javascript
   */
  /*else{
    $("#listContainer").html("");
        $("#listContainer").html("<ul class='list-unstyled'><?phpfor ($x=0; $x < count($json); $x++) {
        ?><li class='list-group-item' style='text-align: left;width:100%;height:20%;'><img src='dummy.png' style='width:30%;height:80%;'><a><?php.$json[$x]['buildCode'].?></a><br><?php.$json[$x]['description'].?></li><?php} ?></ul>");


    };*/
    ?>
 });
 

 function buildSearchList(mydata,appendToElementID){//Joao 
     //generate dinamic html code to present data retrieve from server
    delevopPopupDinamic(mydata);
    $.each(mydata,function(index, data) {

        var buildingName = data['name'];
        var image = data['image-dir'];
        var address = data['address'];
        var description = data['description'];

        var buildCode = data['buildCode'];






        var list = $('<div class=" container div_build" id="'+buildCode+'" ></div>');
            head=("<div class='clearfix split-items border border-primary'><img class='list-group-item left-side'style='width:30%;height:25%;' src='"+image+"' ><p  class='list-group-item right-side '>"+buildingName+"</p><p  class='list-group-item right-side '>"+description+"</p></div><br>");

            
            
            $(head).appendTo(list);
            
            return ($(list).appendTo("#"+appendToElementID));
    
    });
 };
 function modelTrigger(data){
    console.log(data['image-dir']);
    var closable = alertify.alert().setting('closable');
    //grab the dialog instance using its parameter-less constructor then set multiple settings at once.
    alertify.alert()
      .setting({
        'title':data['name'],
        'label':'Done',
        'message': '<div class="container"><img src='+data["image-dir"]+' ><a>Ola</a></div>' ,
        'onok': function(){ 
            /* can be use to move data into input box when success on button click */
            alertify.success('checked');}
      }).show();
};
 function delevopPopupDinamic(mydata){
    
    $.each(mydata,function(index, data) {
        $(document).on('click', '#'+data['buildCode'] , function(){
            modelTrigger(data);
        });

    }); 


 };

 
</script>






                <div   id="listContainer">
                    
                <?php
                    for ($x=0; $x < count($json); $x++) { 
                            //var_dump($json[$x]);
                            /*
                            
                    */
                    $buildingName = $json[$x]['name'];
                    $image = $json[$x]['image-dir'];
                    $address = $json[$x]['address'];
                    $description = $json[$x]['description'];
                    $buildCode = $json[$x]['buildCode'];
                    //echo $buildingName;
                    //echo "<li class='list-group-item' style='text-align:left; width:100%; height:20%;'>
                    //<img src=$image style='width:30%;height:80%;'><a> ".$json[$x]['buildCode']."</a><br>
                    //".$json[$x]['description']." </li>";
                    
                        
                    //trying to present data in another way
                    //this div contains 2 divs inside, one small which contains the image and
                    //another one that contains a table with the information needed
                    echo "
                    <div class=' container div_build' id='".$buildCode."' >
                        <div class='list-group list-borderless'>
                        
                            <div class='clearfix split-items'>
                                
                               <img class='list-group-item left-side'style='width:30%;height:25%;' src=$image >
                                
                                
                                <p  class='list-group-item right-side '>$buildingName</p>
                                
                                <p  class='list-group-item right-side '>$description</p>
                                

                            </div>
                        </div>
                    </div>
                    <br>
                    ";
                        
                    }

                ?>
                </div><!--List Container -->
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?php base_url()?>assets/custom.css">