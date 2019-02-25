

<body>
<?php /* Joao - Index Page

		//DO NOT CHANGE THE NAME OF INDEX PAGE
		//check how configs work in codeigniter first
		
		
*/?>
        
    <?php //this file executes the nav bar with the 3 main functionalities ?>

		<div id="nav-bar-full-width" style="height: 20%;" >

			<?php //Nav Bar - FULL Element/Object[ul]?>
			<ul id="naV" class="navbar navbar-fixed-top  bg-faded " style="width: 100%; height: 100%;"> 

				<?php //Nav Bar - More / dropdown menu?>
				
				<li id="search-op" class="navbar-item " style="width: 33%; height: 100%"  >
					<?php //Nav Bar - Content?>
                        <div <?php //css :hover.event under :childs of parent <ul>?>
												mouseover="mouseOverNav()">
                            <img src="search.png" id="navButtons" style="height: 60%">

                            <a id="search-op" class="nav-link" style="width: 100%;height: 40%">Searching <br> Building
                            </a>
                        </div>
						
					</li>
				<li id="nav-op" class="navbar-item" style="width: 33%;height: 100%" >

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
		
        
<script>

function mouseOverNav() {// ??
	//dont work in android enviroment, css fix it , coment left above
  document.getElementById("navButtons").style.color = "RED";
}

function mouseOutNav() {// ??
  document.getElementById("navButtons").style.color = "WHITE";
}
</script>

<script type="text/javascript" src="<?php base_url()?>assets/custom.js">


</script>
</body>
</html>