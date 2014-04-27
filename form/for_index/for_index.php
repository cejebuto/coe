<html lang="es">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Genius Dashboard - Bootstrap Admin Template</title>
	<meta name="description" content="Genius Dashboard - Bootstrap Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Genius, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link href="/style/css/bootstrap.min.css" rel="stylesheet">
	<link href="/style/css/style.min.css" rel="stylesheet">
	<link href="/style/css/retina.min.css" rel="stylesheet">
	<link href="/style/css/print.css" rel="stylesheet" type="text/css" media="print"/>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="/style/js/respond.min.js"></script>
		
	<![endif]-->
	
	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/style/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/style/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/style/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/style/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="/style/ico/favicon.png">
	<!-- end: Favicon and Touch Icons -->	
		
</head>

<body>
		<!-- start: Header -->
	<header class="navbar">
		<div class="container">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			</button>
			<a id="main-menu-toggle" class="hidden-xs open"><i class="fa fa-bars"></i></a>		
			<a class="navbar-brand col-md-2 col-sm-1 col-xs-2" href="index.html"><span>Genius</span></a>
			<div id="search" class="col-sm-4 col-xs-8 col-lg-3">
				<select>
					<option>everything</option>
					<option>messages</option>
					<option>comments</option>
					<option>users</option>
			  	</select>
				<input type="text" placeholder="search" />
				<i class="fa fa-search"></i>
			</div>
			<!-- start: Header Menu -->
			<div class="nav-no-collapse header-nav">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#">
							<i class="fa fa-warning"></i>
							<span class="number">11</span>
						</a>
						<ul class="dropdown-menu notifications">
							<li class="dropdown-menu-title">
								<span>You have 11 notifications</span>
							</li>	
                        	<li>
                                <a href="index.html#">
									<span class="icon blue"><i class="fa fa-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">1 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon green"><i class="fa fa-comment-o"></i></span>
									<span class="message">New comment</span>
									<span class="time">7 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon green"><i class="fa fa-comment-o"></i></span>
									<span class="message">New comment</span>
									<span class="time">8 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon green"><i class="fa fa-comment-o"></i></span>
									<span class="message">New comment</span>
									<span class="time">16 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon blue"><i class="fa fa-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">36 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon yellow"><i class="fa fa-shopping-cart"></i></span>
									<span class="message">2 items sold</span>
									<span class="time">1 hour</span> 
                                </a>
                            </li>
							<li class="warning">
                                <a href="index.html#">
									<span class="icon red"><i class="fa fa-user"></i></span>
									<span class="message">User deleted account</span>
									<span class="time">2 hour</span> 
                                </a>
                            </li>
							<li class="warning">
                                <a href="index.html#">
									<span class="icon red"><i class="fa fa-shopping-cart"></i></span>
									<span class="message">Transaction was canceled</span>
									<span class="time">6 hour</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon green"><i class="fa fa-comment-o"></i></span>
									<span class="message">New comment</span>
									<span class="time">yesterday</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon blue"><i class="fa fa-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">yesterday</span> 
                                </a>
                            </li>
                            <li class="dropdown-menu-sub-footer">
                        		<a>View all notifications</a>
							</li>	
						</ul>
					</li>
					<!-- start: Notifications Dropdown -->
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#">
							<i class="fa fa-tasks"></i>
							<span class="number">17</span>
						</a>
						<ul class="dropdown-menu tasks">
							<li>
								<span class="dropdown-menu-title">You have 17 tasks in progress</span>
                        	</li>
							<li>
                                <a href="index.html#">
									<span class="header">
										<span class="title">iOS Development</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressBlue">80</div> 
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="header">
										<span class="title">Android Development</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressYellow">47</div> 
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="header">
										<span class="title">Django Project For Google</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressRed">32</div> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="header">
										<span class="title">SEO for new sites</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressGreen">63</div> 
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="header">
										<span class="title">New blog posts</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressPink">80</div> 
                                </a>
                            </li>
							<li>
                        		<a class="dropdown-menu-sub-footer">View all tasks</a>
							</li>	
						</ul>
					</li>
					<!-- end: Notifications Dropdown -->
					<!-- start: Message Dropdown -->
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#">
							<i class="fa fa-envelope"></i>
							<span class="number">9</span>
						</a>
						<ul class="dropdown-menu messages">
							<li>
								<span class="dropdown-menu-title">You have 9 messages</span>
							</li>	
                        	<li>
                                <a href="index.html#">
									<span class="avatar"><img src="/style/img/avatar.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Łukasz Holeczek
									     </span>
										<span class="time">
									    	6 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="avatar"><img src="/style/img/avatar2.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Megan Abott
									     </span>
										<span class="time">
									    	56 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="avatar"><img src="/style/img/avatar3.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Kate Ross
									     </span>
										<span class="time">
									    	3 hours
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="avatar"><img src="/style/img/avatar4.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Julie Blank
									     </span>
										<span class="time">
									    	yesterday
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="avatar"><img src="/style/img/avatar5.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Jane Sanders
									     </span>
										<span class="time">
									    	Jul 25, 2012
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
							<li>
                        		<a class="dropdown-menu-sub-footer">View all messages</a>
							</li>	
						</ul>
					</li>
					<!-- end: Message Dropdown -->
					<li>
						<a class="btn" href="index.html#">
							<i class="fa fa-wrench"></i>
						</a>
					</li>
					<!-- start: User Dropdown -->
					<li class="dropdown">
						<a class="btn account dropdown-toggle" data-toggle="dropdown" href="index.html#">
							<div class="avatar"><img src="/style/img/avatar.jpg" alt="Avatar"></div>
							<div class="user">
								<span class="hello">Welcome!</span>
								<span class="name">Łukasz Holeczek</span>
							</div>
						</a>
						<ul class="dropdown-menu">
							<li><a href="index.html#"><i class="fa fa-user"></i> Profile</a></li>
							<li><a href="index.html#"><i class="fa fa-cog"></i> Settings</a></li>
							<li><a href="index.html#"><i class="fa fa-envelope"></i> Messages</a></li>
							<li><a href="page-login.html"><i class="fa fa-off"></i> Logout</a></li>
						</ul>
					</li>
					<!-- end: User Dropdown -->
				</ul>
			</div>
			<!-- end: Header Menu -->
			
		</div>	
	</header>
	<!-- end: Header -->
	
		<div class="container">
		<div class="row">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="col-lg-2 col-sm-1 ">
								
				<div class="sidebar-nav nav-collapse collapse navbar-collapse">
					<ul class="nav main-menu">
						<li><a href="index.html"><i class="fa fa-bar-chart-o"></i><span class="hidden-sm text"> Dashboard</span></a></li>	
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-eye"></i><span class="hidden-sm text"> UI Features</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="ui-sliders-progress.html"><i class="fa fa-eye"></i><span class="hidden-sm text"> Sliders & Progress</span></a></li>
								<li><a class="submenu" href="ui-nestable-list.html"><i class="fa fa-eye"></i><span class="hidden-sm text"> Nestable Lists</span></a></li>
								<li><a class="submenu" href="ui-elements.html"><i class="fa fa-eye"></i><span class="hidden-sm text"> Elements</span></a></li>
							</ul>
							</li>
						<li><a href="widgets.html"><i class="fa fa-dashboard"></i><span class="hidden-sm text"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-folder-o"></i><span class="hidden-sm text"> Example Pages</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="page-inbox.html"><i class="fa fa-envelope-o"></i><span class="hidden-sm text"> Inbox</span></a></li>
								<li><a class="submenu" href="page-invoice.html"><i class="fa fa-file-text"></i><span class="hidden-sm text"> Invoice</span></a></li>
								<li><a class="submenu" href="page-todo.html"><i class="fa fa-tasks"></i><span class="hidden-sm text"> ToDo & Timeline</span></a></li>
								<li><a class="submenu" href="page-profile.html"><i class="fa fa-male"></i><span class="hidden-sm text"> Profile</span></a></li>
								<li><a class="submenu" href="page-pricing-tables.html"><i class="fa fa-table"></i><span class="hidden-sm text"> Pricing Tables</span></a></li>
								<li><a class="submenu" href="page-404.html"><i class="fa fa-unlink"></i><span class="hidden-sm text"> 404</span></a></li>
								<li><a class="submenu" href="page-500.html"><i class="fa fa-unlink"></i><span class="hidden-sm text"> 500</span></a></li>
								<li><a class="submenu" href="page-lockscreen.html"><i class="fa fa-lock"></i><span class="hidden-sm text"> LockScreen</span></a></li>
								<li><a class="submenu" href="page-lockscreen2.html"><i class="fa fa-lock"></i><span class="hidden-sm text"> LockScreen2</span></a></li>
								<li><a class="submenu" href="page-login.html"><i class="fa fa-key"></i><span class="hidden-sm text"> Login Page</span></a></li>
								<li><a class="submenu" href="page-register.html"><i class="fa fa-sign-in"></i><span class="hidden-sm text"> Register Page</span></a></li>
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-edit"></i><span class="hidden-sm text"> Forms</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="form-elements.html"><i class="fa fa-edit"></i><span class="hidden-sm text"> Form elements</span></a></li>
								<li><a class="submenu" href="form-wizard.html"><i class="fa fa-edit"></i><span class="hidden-sm text"> Wizard</span></a></li>
								<li><a class="submenu" href="form-dropzone.html"><i class="fa fa-edit"></i><span class="hidden-sm text"> Dropzone Upload</span></a></li>
								<li><a class="submenu" href="form-x-editable.html"><i class="fa fa-edit"></i><span class="hidden-sm text"> X-editable</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-list-alt"></i><span class="hidden-sm text"> Charts</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="charts-flot.html"><i class="fa fa-chevron-right"></i><span class="hidden-sm text"> Flot Charts</span></a></li>
								<li><a class="submenu" href="charts-xcharts.html"><i class="fa fa-chevron-right"></i><span class="hidden-sm text"> xCharts</span></a></li>
								<li><a class="submenu" href="charts-others.html"><i class="fa fa-chevron-right"></i><span class="hidden-sm text"> Other</span></a></li>
							</ul>
						
						</li>
						<li><a href="typography.html"><i class="fa fa-font"></i><span class="hidden-sm text"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="fa fa-picture-o"></i><span class="hidden-sm text"> Gallery</span></a></li>
						<li><a href="table.html"><i class="fa fa-align-justify"></i><span class="hidden-sm text"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="fa fa-calendar"></i><span class="hidden-sm text"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="fa fa-folder-open"></i><span class="hidden-sm text"> File Manager</span></a></li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-star"></i><span class="hidden-sm text"> Icons</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="icons-halflings.html"><i class="fa fa-star"></i><span class="hidden-sm text"> Halflings</span></a></li>
								<li><a class="submenu" href="icons-glyphicons-pro.html"><i class="fa fa-star"></i><span class="hidden-sm text"> Glyphicons PRO</span></a></li>
								<li><a class="submenu" href="icons-filetypes.html"><i class="fa fa-star"></i><span class="hidden-sm text"> Filetypes</span></a></li>
								<li><a class="submenu" href="icons-social.html"><i class="fa fa-star"></i><span class="hidden-sm text"> Social</span></a></li>
								<li><a class="submenu" href="icons-font-awesome.html"><i class="fa fa-star"></i><span class="hidden-sm text"> Font Awesome</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-folder-open"></i><span class="hidden-sm text"> 4 Level Menu</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a href="2nd-level.html"><i class="fa fa-folder"></i><span class="hidden-sm text"> 2nd Level</span></a></li>
								<li>
									<a class="dropmenu" href="index.html#"><i class="fa fa-folder-open"></i><span class="hidden-sm text"> 2nd Level</span> <span class="chevron closed"></span></a>
									<ul>
										<li><a href="3rd-level.html"><i class="fa fa-folder"></i><span class="hidden-sm text"> 3rd Level</span></a></li>
										<li>
											<a class="dropmenu" href="index.html#"><i class="fa fa-folder-open"></i><span class="hidden-sm text"> 3rd Level</span> <span class="chevron closed"></span></a>
											<ul>
												<li>
													<a class="submenu" href="4th-level.html"><i class="fa fa-folder"></i><span class="hidden-sm text"> 4th Level</span></a>
												</li>
											</ul>
										</li>
										<li>
											<a class="dropmenu" href="index.html#"><i class="fa fa-folder-open"></i><span class="hidden-sm text"> 3rd Level</span> <span class="chevron closed"></span></a>
											<ul>
												<li>
													<a class="submenu" href="4th-level2.html"><i class="fa fa-folder"></i><span class="hidden-sm text"> 4th Level</span></a>
												</li>
											</ul>
										</li>
									</ul>	
								</li>
							</ul>
						</li>
					</ul>
				</div>
									<a href="index.html#" id="main-menu-min" class="full visible-md visible-lg"><i class="fa fa-angle-double-left"></i></a>
							</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11 ">
			
			
			<div class="row">
				
			
				
				<div class="col-md-3 visible-md visible-lg" id="feed">
					
					<h2>Activity Feed <a class="fa fa-repeat"></a></h2>
					
				
					
					<ul id="timeline">
						
						<li class="task">
							<i class="fa fa-check-square green"></i>
							<div class="title">New website - A/B Tests</div>
							<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							<span class="date">3 seconds ago</span>
							<span class="separator">•</span>
							<span class="name">Megan Abbott</span>
						</li>
						
						<li class="comment">
							<i class="fa fa-comments red"></i>
							<div class="title">Sales increase</div>
							<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
							<span class="date">15 minutes ago</span>
							<span class="separator">•</span>
							<span class="name">Ashley Tan</span>
						</li>
						
						<li class="comment">
							<i class="fa fa-comments red"></i>
							<div class="title">New Bootstrap Theme</div>
							<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
							<span class="date">Today</span>
							<span class="separator">•</span>
							<span class="name">Ashley Tan</span>
						</li>
						
						<li class="message">
							<i class="fa fa-pencil-square blue"></i>
							<div class="title">Job offer</div>
							<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
							<span class="date">Yesterday</span>
							<span class="separator">•</span>
							<span class="name">James Doe</span>
						</li>
						
						<li class="task">
							<i class="fa fa-check-square green"></i>
							<div class="title">Custom Design</div>
							<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							<span class="date">5 days ago</span>
							<span class="separator">•</span>
							<span class="name">Megan Abbott</span>
						</li>		
						
					</ul>
					<a href="index.html#" id="load-more">•••</a>		
						
					
				</div><!--/col-->	
				
			</div><!--/row-->	
			
			
			
							
			
     
					
			</div>
			<!-- end: Content -->
				
				</div><!--/row-->		
		
	</div><!--/container-->
	
	
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<p>Here settings can be configured...</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<div class="clearfix"></div>
	
	<footer>
		
		<div class="row">
			
			<div class="col-sm-5">
				&copy; 2014 creativeLabs. <a href="http://bootstrapmaster.com">Admin Templates</a> by BootstrapMaster
			</div><!--/.col-->
			
			<div class="col-sm-7 text-right">
				Powered by: <a href="http://bootstrapmaster.com/demo/genius/" alt="Bootstrap Admin Templates">Genius Dashboard</a> | Based on Bootstrap 3.1.1 | Built with brix.io <a href="http://brix.io" alt="Brix.io - Interface Builder">Interface Builder</a>
			</div><!--/.col-->	
			
		</div><!--/.row-->	

	</footer>
		
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="/style/js/jquery-2.1.0.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="/style/js/jquery-1.11.0.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/style/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='/style/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="/style/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="/style/js/bootstrap.min.js"></script>
	
		
	
	
	<!-- page scripts -->
	<script src="/style/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="/style/js/jquery.ui.touch-punch.min.js"></script>
	<script src="/style/js/jquery.sparkline.min.js"></script>
	<script src="/style/js/fullcalendar.min.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/style/js/excanvas.min.js"></script><![endif]-->
	<script src="/style/js/jquery.flot.min.js"></script>
	<script src="/style/js/jquery.flot.pie.min.js"></script>
	<script src="/style/js/jquery.flot.stack.min.js"></script>
	<script src="/style/js/jquery.flot.resize.min.js"></script>
	<script src="/style/js/jquery.flot.time.min.js"></script>
	<script src="/style/js/jquery.autosize.min.js"></script>
	<script src="/style/js/jquery.placeholder.min.js"></script>
	<script src="/style/js/moment.min.js"></script>
	<script src="/style/js/daterangepicker.min.js"></script>
	<script src="/style/js/jquery.easy-pie-chart.min.js"></script>
	<script src="/style/js/jquery.dataTables.min.js"></script>
	<script src="/style/js/dataTables.bootstrap.min.js"></script>
	
	<!-- theme scripts -->
	<script src="/style/js/custom.min.js"></script>
	<script src="/style/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="/style/js/pages/index.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>