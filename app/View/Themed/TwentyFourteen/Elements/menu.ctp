	<nav class="navbar navbar-fixed-top navbar-inverse header-navbar" role="navigation">
		<div class="container">
		    <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="glyphicon glyphicon-th-list"></span>
			</button>
			<?php echo $this->Html->link($this->Html->image("logo.png"), array('controller'=>'pages', 'action' => 'display', 'home'), array('escape' => false,'class'=>'navbar-brand')); ?>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navbar-ex1-collapse">		    			
			<ul class="nav navbar-nav navbar-right cl-effect-21" id="top-menu">
			    <li class="active"><a href="#about">Home</a></li>
			    <li><a href="#about">Our Benefits</a></li>
			    <li><a href="#about">Products</a></li>
			    <li><a href="#about">E-News</a></li>
			    <li><a href="#about">Services</a></li>
			    <li><a href="#about">Events</a></li>
			    <li><a href="#about">Videos</a></li>
			</ul>
		    </div>
		    <!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>