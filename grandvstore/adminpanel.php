<!DOCTYPE html>
<html lang="en">
<head>
	

	<title>Hamara Life</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/custom1.css"><link rel="stylesheet" href="assets/css/skins/facebook.css">
	<link rel="stylesheet" href="assets/css/custom2.css">
	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="home.php">
						<img src="assets/images/hamarabol.png" width="165" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="active opened active">
					<a href="home.php">
						<i class="entypo-home"></i>
						<span class="title">Home</span>
					</a>
					
				</li>
				<li>
					<a href="profile.php">
						<i class="entypo-user"></i>
						<span class="title">Profile</span>
					</a>
					<ul>
						<li>
							<a href="form.php">
							<i class="entypo-user"></i>
								<span class="title">Show Profile</span>
							</a>
						</li>
						<li>
							<a href="changepass.php">
							<i class="entypo-pencil"></i>
								<span class="title">Change Password</span>
							</a>
						</li>
						<li>
							<a href="letter.php">
							<i class="entypo-progress-0"></i>
								<span class="title">Welcome Letter</span>
							</a>
						</li>
						<li>
							<a href="message.php">
							<i class="entypo-mail"></i>
								<span class="title">Message Box</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="mart.php">
						<i class="entypo-basket"></i>
						<span class="title">Mart</span>
					</a>
					<ul>
						<li>
							<a href="products.php">
							<i class="entypo-bag"></i>
								<span class="title">Products</span>
							</a>
						</li>
						<li>
							<a href="combo.php">
							<i class="entypo-bag"></i><i class="entypo-bag"></i>
								<span class="title">Combo Products</span>
							</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="gene.php">
						<i class="entypo-users"></i>
						<span class="title">Geneology</span>
					</a>
					<ul>
						<li>
							<a href="tree.php">
								<span class="title">Matching Tree</span>
							</a>
						</li>
						<li>
							<a href="team.php">
								<span class="title">Team Status</span>
							</a>
						</li>
						
						<li>
							<a href="mypoint.php">
								<span class="title">My point Value</span>
							</a>
						</li>
						<li>
							<a href="myrepurchase.php">
								<span class="title">My Re-purchase Value</span>
							</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="business.php">
						<i class="entypo-suitcase"></i>
						<span class="title">Business</span>
						
					</a>
					<ul>
						
						<li>
							<a href="businessplan.php">
								<i class="entypo-pencil"></i>
								<span class="title">Business Plan</span>
							</a>
						</li>
						<li>
							<a href="bop.php">
								<i class="entypo-attach"></i>
								<span class="title">Bop Venue</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="payouts.php">
						<i class="entypo-doc-text"></i>
						<span class="title">Payouts</span>
					</a>
					<ul>
						<li>
							<a href="binary.php">
								<span class="title">Binary Income</span>
							</a>
						</li>
						<li>
							<a href="rank.php">
								<span class="title">Rank Income</span>
							</a>
						</li>
						<li>
							<a href="ebuy.php">
								<span class="title">EBuy Income</span>
							</a>
						</li>
						<li>
							<a href="awards.php">
								<span class="title">Awards & Rewards</span>
							</a>
						</li>
						<li>
							<a href="payoutdeductions.php">
								<span class="title">Payout Deductions</span>
							</a>
						</li>
						<li>
							<a href="tds.php">
								<span class="title">TDS Report</span>
							</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="wallet.php">
						<i class="entypo-credit-card"></i>
						<span class="title">Wallet</span>
					</a>
					<ul>
						<li>
							<a href="walletamount.php">
								<span class="title">Wallet Amount</span>
							</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="index.php">
						<i class="entypo-lock-open"></i>
						<span class="title">Logout</span>
						
					</a>
					
				</li>
				
			</ul>
			
		</div>

	</div>

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/venkat.png" alt="" class="img-circle" width="44" />
							Venkata Krishna
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							<li>
								<a href="form.php">
									<i class="entypo-user"></i>
									Show profile
								</a>
							</li>
		
							<li>
								<a href="changepass.php">
									<i class="entypo-pencil"></i>
									Change Password
								</a>
							</li>
		
							<li>
								<a href="letter.php">
									<i class="entypo-progress-0"></i>
									Welcome Letter
								</a>
							</li>
		
							<li>
								<a href="message.php">
									<i class="entypo-mail"></i>
									Message Box
								</a>
							</li>
						</ul>
					</li>
		
				</ul>
				
				<ul class="user-info pull-left pull-right-xs pull-none-xsm">
		
					<!-- Raw Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-attention"></i>
							<span class="badge badge-info">6</span>
						</a>
		
						<ul class="dropdown-menu">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list scroller">
									<li class="unread notification-success">
										<a href="#">
											<i class="entypo-user-add pull-right"></i>
											
											<span class="line">
												<strong>New user registered</strong>
											</span>
											
											<span class="line small">
												30 seconds ago
											</span>
										</a>
									</li>
									
									<li class="unread notification-secondary">
										<a href="#">
											<i class="entypo-heart pull-right"></i>
											
											<span class="line">
												<strong>Someone special liked this</strong>
											</span>
											
											<span class="line small">
												2 minutes ago
											</span>
										</a>
									</li>
									
									<li class="notification-primary">
										<a href="#">
											<i class="entypo-user pull-right"></i>
											
											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>
											
											<span class="line small">
												3 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-danger">
										<a href="#">
											<i class="entypo-cancel-circled pull-right"></i>
											
											<span class="line">
												John cancelled the event
											</span>
											
											<span class="line small">
												9 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-info">
										<a href="#">
											<i class="entypo-info pull-right"></i>
											
											<span class="line">
												The server is status is stable
											</span>
											
											<span class="line small">
												yesterday at 10:30am
											</span>
										</a>
									</li>
									
									<li class="notification-warning">
										<a href="#">
											<i class="entypo-rss pull-right"></i>
											
											<span class="line">
												New comments waiting approval
											</span>
											
											<span class="line small">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">View all notifications</a>
							</li>
						</ul>
		
					</li>
		
					<!-- Message Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-mail"></i>
							<span class="badge badge-secondary">10</span>
						</a>
		
						<ul class="dropdown-menu">
							<li>
								<form class="top-dropdown-search">
									
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search anything..." name="s" />
									</div>
									
								</form>
								
								<ul class="dropdown-menu-list scroller">
									<li class="active">
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/venkat.png" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Ram</strong>
												- yesterday
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/venkat.png" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Prakash</strong>
												- 2 days ago
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/venkat.png" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Hari</strong>
												- a week ago
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/venkat.png" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Indra </strong>
												- 16 days ago
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">All Messages</a>
							</li>
						</ul>
		
					</li>
		
					<!-- Task Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-list"></i>
							<span class="badge badge-warning">1</span>
						</a>
		
						<ul class="dropdown-menu">
							<li class="top">
								<p>You have 6 pending tasks</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list scroller">
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Procurement</span>
												<span class="percent">27%</span>
											</span>
										
											<span class="progress">
												<span style="width: 27%;" class="progress-bar progress-bar-success">
													<span class="sr-only">27% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">App Development</span>
												<span class="percent">83%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 83%;" class="progress-bar progress-bar-danger">
													<span class="sr-only">83% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">HTML Slicing</span>
												<span class="percent">91%</span>
											</span>
											
											<span class="progress">
												<span style="width: 91%;" class="progress-bar progress-bar-success">
													<span class="sr-only">91% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Database Repair</span>
												<span class="percent">12%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 12%;" class="progress-bar progress-bar-warning">
													<span class="sr-only">12% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Backup Create Progress</span>
												<span class="percent">54%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 54%;" class="progress-bar progress-bar-info">
													<span class="sr-only">54% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Upgrade Progress</span>
												<span class="percent">17%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 17%;" class="progress-bar progress-bar-important">
													<span class="sr-only">17% Complete</span>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">See all tasks</a>
							</li>
						</ul>
		
					</li>
		
				</ul>
		
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
				<li>
					<a href="home.php">Home&nbsp;<i class="entypo-home right"></i></a>
						
				</li>		
		<li class="dropdown language-selector">
		
						
						<a href="Company" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							Company<i class="entypo-down-open right"></i>
						</a>
		
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="about.php">About Us
								</a>
							</li>
							<li>
								<a href="legal.php">legal
								</a>
							</li>
						</ul>
		
		</li>
		
		<li class="dropdown language-selector">
		
						
						<a href="Company" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							Business<i class="entypo-down-open right"></i>
						</a>
		
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">What is Hamara Life
								</a>
							</li>
							<li>
								<a href="#">Why Hamara Life
								</a>
							</li>
							<li>
								<a href="#">How to Participate
								</a>
							</li>
							<li>
								<a href="#">Downloads
								</a>
							</li>
						</ul>
		
		</li>	
			
				<li class="dropdown language-selector">
		
						
						<a href="Company" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							Mart<i class="entypo-down-open right"></i>
						</a>
		
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="products.php">Products
								</a>
							</li>
							<li>
								<a href="combo.php">Combo Products
								</a>
							</li>
							
						</ul>
		
		</li>	
		
				<li>
					<a href="contact.php">Contact Us&nbsp;<i class="entypo-mobile right"></i></a>
				</li>		
				<li>
					<a href="index.php">Logout&nbsp;<i class="entypo-logout right"></i></a>
				</li>	
		
					
				</ul>
		
			</div>
		
		</div>
		
		<hr /><!-- start -->
		
		<h3>PAYOUT REPORT</h3><br><br>
		<table width="100%" class="table table-bordered table-hover table-striped" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    &nbsp;
                </td>
				<td>
                    &nbsp;
                </td>
				<td>
                    &nbsp;
                </td>
            </tr>
			
			
			
            <tr>
                <td colspan="3" align="center">
                    <span id="ctl00_ContentPlaceHolder1_lblpno" style="color:Green;font-size:18pt;font-weight:bold;"></span>
                </td>
            </tr>
            <tr>
                <td align="right" width="49%">
                    <strong class="c5">Select Payout No</strong>
                </td>
                <td width="15px" align="center">
                    :
                </td>
                <td width="49%">
                    <select name="ctl00$ContentPlaceHolder1$DropDownList1" id="ctl00_ContentPlaceHolder1_DropDownList1" class="input">
	<option selected="selected" value="No - 170  Date  31 Oct 2015 12:00:00 AM -> 31 Oct 2015 11:59:59 PM">No - 170  Date  31 Oct 2015 12:00:00 AM -&gt; 31 Oct 2015 11:59:59 PM</option>
	<option value="No - 169  Date  30 Oct 2015 12:00:00 AM -> 30 Oct 2015 11:59:59 PM">No - 169  Date  30 Oct 2015 12:00:00 AM -&gt; 30 Oct 2015 11:59:59 PM</option>
	<option value="No - 168  Date  29 Oct 2015 12:00:00 AM -> 29 Oct 2015 11:59:59 PM">No - 168  Date  29 Oct 2015 12:00:00 AM -&gt; 29 Oct 2015 11:59:59 PM</option>
	<option value="No - 167  Date  28 Oct 2015 12:00:00 AM -> 28 Oct 2015 11:59:59 PM">No - 167  Date  28 Oct 2015 12:00:00 AM -&gt; 28 Oct 2015 11:59:59 PM</option>
	<option value="No - 166  Date  27 Oct 2015 12:00:00 AM -> 27 Oct 2015 11:59:59 PM">No - 166  Date  27 Oct 2015 12:00:00 AM -&gt; 27 Oct 2015 11:59:59 PM</option>
	<option value="No - 165  Date  26 Oct 2015 12:00:00 AM -> 26 Oct 2015 11:59:59 PM">No - 165  Date  26 Oct 2015 12:00:00 AM -&gt; 26 Oct 2015 11:59:59 PM</option>
	<option value="No - 164  Date  25 Oct 2015 12:00:00 AM -> 25 Oct 2015 11:59:59 PM">No - 164  Date  25 Oct 2015 12:00:00 AM -&gt; 25 Oct 2015 11:59:59 PM</option>
	<option value="No - 163  Date  24 Oct 2015 12:00:00 AM -> 24 Oct 2015 11:59:59 PM">No - 163  Date  24 Oct 2015 12:00:00 AM -&gt; 24 Oct 2015 11:59:59 PM</option>
	<option value="No - 162  Date  23 Oct 2015 12:00:00 AM -> 23 Oct 2015 11:59:59 PM">No - 162  Date  23 Oct 2015 12:00:00 AM -&gt; 23 Oct 2015 11:59:59 PM</option>
	<option value="No - 161  Date  22 Oct 2015 12:00:00 AM -> 22 Oct 2015 11:59:59 PM">No - 161  Date  22 Oct 2015 12:00:00 AM -&gt; 22 Oct 2015 11:59:59 PM</option>
	<option value="No - 160  Date  21 Oct 2015 12:00:00 AM -> 21 Oct 2015 11:59:59 PM">No - 160  Date  21 Oct 2015 12:00:00 AM -&gt; 21 Oct 2015 11:59:59 PM</option>
	<option value="No - 159  Date  20 Oct 2015 12:00:00 AM -> 20 Oct 2015 11:59:59 PM">No - 159  Date  20 Oct 2015 12:00:00 AM -&gt; 20 Oct 2015 11:59:59 PM</option>
	<option value="No - 158  Date  19 Oct 2015 12:00:00 AM -> 19 Oct 2015 11:59:59 PM">No - 158  Date  19 Oct 2015 12:00:00 AM -&gt; 19 Oct 2015 11:59:59 PM</option>
	<option value="No - 157  Date  18 Oct 2015 12:00:00 AM -> 18 Oct 2015 11:59:59 PM">No - 157  Date  18 Oct 2015 12:00:00 AM -&gt; 18 Oct 2015 11:59:59 PM</option>

</select>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;
                </td>
                <td>
                    &nbsp;
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td height="60" align="right">
                    <a id="ctl00_ContentPlaceHolder1_HyperLink1" class="shoplink" href="#" target="_blank">Payout Wise Calculation</a>
                    
                </td>
                <td>
                    &nbsp;
                </td>
                <td align="left">
                    <a id="ctl00_ContentPlaceHolder1_Button1" class="post" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$Button1','')">Show Report</a>
                </td>
            </tr>
            
            
            </table>
		
		
		
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2015 <strong>Hamara Life</strong>  <a href="#" target="_blank"></a>
		
		</footer>
	</div>

		




	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/toastr.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>