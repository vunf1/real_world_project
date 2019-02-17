
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
					 
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="From"  />
				</div>
				<div class="form-group">
					 
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="To"/>
				</div> 
				<button type="submit" class="btn btn-primary">
					Search
				</button>
			</form>
		</div>
	</div>
</div>