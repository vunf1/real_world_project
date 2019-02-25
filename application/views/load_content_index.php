

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
                        <input class="form-control" type="text" placeholder="Solution Name" id="solution_name"></input>
                    </li>
                </ul>
            </div>
            <div id="listContainer">
                <div class='row'>
                 <!-- <ul class="list-unstyled"> -->
                    <?php
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
                    $buildingName = $json[$x]['name'];
                    $image = $json[$x]['image-dir'];
                    $address = $json[$x]['address'];
                    $description = $json[$x]['description'];
                    //echo $buildingName;
                    //echo "<li class='list-group-item' style='text-align:left; width:100%; height:20%;'>
                    //<img src=$image style='width:30%;height:80%;'><a> ".$json[$x]['buildCode']."</a><br>
                    //".$json[$x]['description']." </li>";
                    
                        
                    //trying to present data in another way
                    //this div contains 2 divs inside, one small which contains the image and
                    //another one that contains a table with the information needed
                    echo"
                    <div class='col-md-4'>
                        <li class='list-group-item' style='text-align:center; width:100%; height:20%;'>
                            <img src=$image style='width:30%;height:80%;'>
                        </li>
                    </div>
                    <div class='col-md-8'>
                        <table class='table table-hover'>
                            <tr>
                               <td><b>$buildingName</b></td>
                            </tr>
                            <tr>
                                <td>$address</td>
                            </tr>
                            <tr>
                               <td>$description</td>
                            </tr>
                        </table>
                    </div>
                    ";
                        
                    }

                    ?>

                <!--</ul>-->
                </div>
            </div> <!--List Container -->
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php base_url()?>assets/custom.js"></script>
<script >

$('#solution_name').on('keyup keypress', function(e) {
    //Block key Event ENTER onid solution_name //SEARCH.BAR
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) { 
      e.preventDefault();
      return false;
    }
  });
  

$('#solution_name').keyup(function(){//Joao
  //var search = "HUB"
  var search = $(this).val();
  //console.log(search);
  if(search != ''){
        $.ajax({
            url:base_url()+"index.php/Homecontroller/searchBuildings",
            method:"POST",
            dataType:'json',
            data:{'searchTxT':search},
            success:function(data){
                // 
                console.log(data);
                $("#listContainer").html(""); // clear the div where the id = listContainer 
                alertSuccess("Found");
                buildSearchList(data);

            },error: function(xhr, status, error){ 
                //After 3 bad inputs ,fails and show this(Idea for later  -  counter >3=action)
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
 

 function buildSearchList(data){//Joao & Antonio
     //generate match on jsonFile
    var buildingName = data['name'];
    var image = data['image-dir'];
    var address = data['address'];
    var description = data['description'];
    var list = $('<ul   align="center" ></ul>').addClass( "list-unstyled" )
        head=("<div class='col-md-4'><li class='list-group-item left' style='text-align: center;width:100%;height:20%;'><img src="+image+" style='width:30%;height:80%;'></li></div>");

        
        head+="<div class='col-md-8'><table class='table table-hover'><tr><td><b>"+buildingName+"</b><td></tr>";
        head+="<tr><td>"+address+"</td></tr>";
        head+="<tr><td>"+description+"</td></tr>"
        
        head+="</table></div>"
        
        $(head).appendTo(list);
        //console.log(TableRow);
        return ($(list).appendTo("#listContainer"));

 };

</script>