

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


		<div id="nav-bar-full-width" >

			<?php //Nav Bar - FULL Element?>
			<ul class="navbar navbar-fixed-top  bg-faded "> 

				<?php //Nav Bar - More / dropdown menu?>
				<li class="navbar-item" style="width: 25%;">
					<button style="width: 100%;height: 10%"
						type="button"
						class="btn btn-secondary dropdown-toggle " 
						data-toggle="dropdown" 
						aria-haspopup="true" 
						aria-expanded="false">
					</button>

						<div class="dropdown-menu bs-popover-right" style="width: 30%;">
							<a class="dropdown-item text-md-right" href="#">1</a>
							<a class="dropdown-item" href="#">2</a>
							<a class="dropdown-item" href="#">3</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">4</a>
						</div>
				</li>


				<?php //Nav Bar - Elements?>
				<li class="navbar-item " style="width: 25%;"  >
					<?php //Nav Bar - Content?>
					<a class="nav-link btn loader" href="#" style="width: 100%;height: 10%" id="searchbuild_op" >Searching Building</a>
				</li>
				<li class="navbar-item" style="width: 25%;">
					<a class="nav-link" href="#" style="width: 100%;height: 10%">Navigation Campus</a>
				</li>
				<li class="navbar-item" style="width: 25%;">
					<a class="nav-link" href="#" style="width: 100%;height: 10%">Scan QR Code</a>
				</li>
			</ul>
		</div>

		<div id="container" class="container align-content-center">
			
		</div>
		






</body>
</html>