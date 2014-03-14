	<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list fa-fw"></i> Listing</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-users fa-fw"></i> Registered Users<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
                            <li>
                                <?php echo $this->Html->link('Users', array('controller'=>'users', 'action'=> 'index')); ?>
                            </li>
                            <li>
                                <a href="buttons.html">Customers</a>
                            </li>
                            <li>
                                <a href="notifications.html">Create Customer</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-link fa-fw"></i> Links</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments fa-fw"></i> Client Activity<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Feedback</a>
                            </li>
                            <li>
                                <a href="buttons.html">Article Comments</a>
                            </li>
                            <li>
                                <a href="notifications.html">Classified Comments</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope fa-fw"></i> E-News<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Special Newsletter</a>
                            </li>
                            <li>
                                <a href="#">Weekly Newsletter</a>
                            </li>
                            <li>
                                <a href="#">Articles</a>
                            </li>
                            <li>
                                <a href="#">Create Article</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-calendar fa-fw"></i> Calendar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Calendars</a>
                            </li>
                            <li>
                                <a href="login.html">Create Calendars</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Website Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Categories</a>
                            </li>
                            <li>
                                <a href="login.html">Banner</a>
                            </li>
                            <li>
                                <a href="login.html">Slide Banner Homepage</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-film fa-fw"></i> Video<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Videos</a>
                            </li>
                            <li>
                                <a href="login.html">Create Video</a>
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