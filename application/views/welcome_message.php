

<body>
<?php /*
		
		MENU dropdown

		<div class="navbar navbar-fixed-top  bg-faded btn-group" id="nav-bar-dropdown">
			<? // Button full width for now ?>
			<button style="width: 100%;" type="button"
			 class="btn btn-secondary
			 dropdown-toggle" 
			 data-toggle="dropdown" 
			 aria-haspopup="true" 
			 aria-expanded="false">burger
			</button>

			<div class="dropdown-menu" style="width: 100%;">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Action</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Action</a>
			</div>
		</div>
	*/
?>
        
    <?php //this file executes the nav bar with the 3 main functionalities ?>
    
		<div id="nav-bar-full-width" style="height: 20%;" >

			<?php //Nav Bar - FULL Element?>
			<ul id="naV" class="navbar navbar-fixed-top  bg-faded " style="width: 100%; height: 100%;"> 

				<?php //Nav Bar - More / dropdown menu?>
				
				<?php /*
				<li class="navbar-item" style="width: 25%;">
					<button style="width: 30%;height: 10%"
						type="button"
						class="btn btn-secondary dropdown-toggle " 
						data-toggle="dropdown" 
						aria-haspopup="true" 
						aria-expanded="false">
					</button>

						<div class="dropdown-menu bs-popover-right" style="width: 10%;">
							<a class="dropdown-item text-md-right" href="#">1</a>
							<a class="dropdown-item" href="#">2</a>
							<a class="dropdown-item" href="#">3</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">4</a>
						</div>
				</li>


				<?php //Nav Bar - Elements?>

					*/?>
				<li id="search-op" class="navbar-item " style="width: 33%; height: 100%"  >
					<?php //Nav Bar - Content?>
                        <div mouseover="mouseOverNav()">
                            <img src="search.png" id="navButtons" style="height: 60%">

                            <a id="search-op navButtons" class="nav-link" style="width: 100%;height: 40%">Searching <br> Building
                            </a>
                        </div>
						
					</li>
				<li id="nav-op" class="navbar-item" style="width: 33%;height: 100%">

						<img  src="route.png" style="height: 60%">
					<a  class="nav-link"  style="width: 100%;height: 40%">Navigation <br> Campus</a>
				</li>
				<li id="scan-op" class="navbar-item" style="width: 33%;height: 100%">

						<img src="qr-code.png" style="height: 60%">
					<a   class="nav-link" style="width: 100%;height: 40%">Locate Yourself <br>QR Code</a>
				</li>
			</ul>
			<a class="btn-floating btn-sm blue-gradient"><i class="fas fa-star"></i></a>
		</div>
    
    
		<div id="container" class="container align-content-center">
			
		
		</div>
        <?php //load the javascript functions file ?>
        <script type="text/javascript" src="<?php base_url()?>assets/custom.js"></script>
<script>

function mouseOverNav() {
  document.getElementById("navButtons").style.color = "RED";
}

function mouseOutNav() {
  document.getElementById("navButtons").style.color = "WHITE";
}
</script>
</body>
</html>