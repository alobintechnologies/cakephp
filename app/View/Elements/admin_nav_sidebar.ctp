	<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
			<?php echo $this->Html->link('<i class="fa fa-dashboard fa-fw"></i> Dashboard', array('controller' => 'listings', 'action' => 'index',  'admin' => 'true'), array('escape' => false)); ?>                        
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list fa-fw"></i> Listing<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
			    <li>
                                <?php echo $this->Html->link('Listings', array('controller' => 'listings', 'action' => 'index',  'admin' => 'true')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Create Listing', array('controller' => 'listings', 'action' => 'add', 'admin' => 'true')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-users fa-fw"></i> Registered Users<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
                            <li>
                                <?php echo $this->Html->link('Users', array('controller'=>'users', 'action'=> 'index')); ?>
                            </li>
			    <li>
                                <?php echo $this->Html->link('Customers', array('controller' => 'customers', 'action' => 'index',  'admin' => 'true')); ?>
                            </li>
			    <li>
                                <?php echo $this->Html->link('Create Customer', array('controller' => 'customers', 'action' => 'add',  'admin' => 'true')); ?>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments fa-fw"></i> Client Activity<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Feedback</a>
                            </li>
			    <li>
                                <?php echo $this->Html->link('Article Comments', array('controller' => 'comments', 'action' => 'index',  'admin' => 'true')); ?>
                            </li>
			    <li>
                                <?php echo $this->Html->link('Classified Comments', array('controller' => 'comments', 'action' => 'index',  'admin' => 'true')); ?>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope fa-fw"></i> E-News<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
			    <li>
                                <?php echo $this->Html->link('Articles', array('controller' => 'articles', 'action' => 'index',  'admin' => 'true')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Create Article', array('controller' => 'articles', 'action' => 'add', 'admin' => 'true')); ?>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-calendar fa-fw"></i> Calendar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
			    <li>
                                <?php echo $this->Html->link('Calendars', array('controller' => 'calendars', 'action' => 'index',  'admin' => 'true')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Create Calendar', array('controller' => 'calendars', 'action' => 'add', 'admin' => 'true')); ?>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Website Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Categories</a>
                            </li>
                            <li>
                                <a href="#">Banner</a>
                            </li>
                            <li>
                                <a href="#">Slide Banner Homepage</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-film fa-fw"></i> Video<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?php echo $this->Html->link('Videos', array('controller' => 'videos', 'action' => 'index',  'admin' => 'true')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Create Video', array('controller' => 'videos', 'action' => 'add', 'admin' => 'true')); ?>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->