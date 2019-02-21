

<?php 

//var_dump(count($json));

/**
 * 
 * dynamic json output file, tables [Lists]
 */?>
<?php
//code presented for the functionality search building 
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
                <ul class="list-unstyled">
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
                            
                    echo "<li class='list-group-item' style='text-align: left;width:100%;height:20%;'>
                    <img src='dummy.png' style='width:30%;height:80%;'><a> ".$json[$x]['buildCode']."</a><br>
                    ".$json[$x]['description']." </li>";



                    }

                    ?>

                </ul>
            </div><!--List Container -->
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
            url:base_url()+"index.php/Homecontroller/searchBooks",
            method:"POST",
            dataType:'json',
            data:{'searchTxT':search},
            success:function(data){
                // 
                console.log(data);
                $("#listContainer").html("");
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
 

 function buildSearchList(data){//Joao
     //generate match on jsonFile
     //Need Improve List Design and DAta inside Json
    
    var list = $('<ul   align="center" ></ul>').addClass( "list-unstyled" )
        head=("<li class='list-group-item left' style='text-align: left;width:100%;height:20%;'>");

        
        head+="<img src='dummy.png' style='width:30%;height:80%;'><a>"+data['buildCode']+"</a><br>"+data['description'];
        
        head+="</li>"
        
        $(head).appendTo(list);
        //console.log(TableRow);
        return ($(list).appendTo("#listContainer"));

 };

</script>