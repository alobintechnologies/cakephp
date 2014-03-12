<!--start: Header -->
	<header>		
		<!--start: Container -->
		<div class="container">			
			<!--start: Row -->
			<div class="row">					
				<!--start: Logo -->
				<div class="logo span3">						
					<?php echo $this->Html->link($this->Html->image("logo.png"), array('controller'=>'home', 'action' => 'index'), array('escape' => false)); ?>
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href="index.html">Home</a></li>
			              			<li><a href="about.html">About</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="pricing.html">Pricing</a></li>
			              			<li><a href="contact.html">Contact</a></li>
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="#">Action</a></li>
			                  				<li><a href="#">Another action</a></li>
			                  				<li><a href="#">Something else here</a></li>
			                  				<li class="divider"></li>
			                  				<li class="nav-header">Nav header</li>
			                  				<li><a href="#">Separated link</a></li>
			                  				<li><a href="#">One more separated link</a></li>
			                			</ul>
			              			</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	