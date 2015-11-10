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
		
		<td align="center" valign="top" style="background: url(../images/header/body-bg.jpg) repeat-x top;">
            <table width="963" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                    <td height="40" align="left" valign="bottom" class="title-bor">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
								<tr>
									<td align="left" valign="bottom" class="heading-title">
										<h1>Change Password</h1>
									</td>
                                </tr>
							</tbody>
						</table>
                    </td>
                </tr>
                <tr>
                    <td><br><br>
					<div style="margin-left:+100px;color:#848484;">
                        <table width="75%" align="center" border="0" cellspacing="10" cellpadding="5" style="padding:10px;">
                            <tbody><tr>
                                <td class="fome-text1">
                                    Old Password
                                </td>
                                <td class="fome-text1">
                                    &nbsp;:&nbsp;
                                </td>
                                <td>
                                    <input name="ctl00$MainContent$txtOldPwd" type="password" id="ctl00_MainContent_txtOldPwd" class="inputtext">
                                    <span id="ctl00_MainContent_rfvOldPwd" title="Old Password is required." style="color:Red;display:none;"></span>
                                    
                                    <input type="hidden" name="ctl00$MainContent$OldPwdVCE_ClientState" id="ctl00_MainContent_OldPwdVCE_ClientState">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="fome-text1">
                                    New Password
                                </td>
                                <td class="fome-text1">
                                    &nbsp;:&nbsp;
                                </td>
                                <td>
                                    <input name="ctl00$MainContent$txtPassword" type="password" id="ctl00_MainContent_txtPassword" class="inputtext">
                                    <span id="ctl00_MainContent_PwdRFV" title="Password is required." style="color:Red;display:none;"></span>
                                    <span id="ctl00_MainContent_revPwd" style="color:OrangeRed;visibility:hidden;">.</span>
                                    <input type="hidden" name="ctl00$MainContent$PwdVCE_ClientState" id="ctl00_MainContent_PwdVCE_ClientState">
                                    <input type="hidden" name="ctl00$MainContent$VCExtPwd_ClientState" id="ctl00_MainContent_VCExtPwd_ClientState">
                                </td>
                            </tr>
                            <tr>
                                <td class="fome-text1">
                                    Confirm Password
                                </td>
                                <td class="fome-text1">
                                    &nbsp;:&nbsp;
                                </td>
                                <td>
                                    <input name="ctl00$MainContent$txtConPwd" type="password" id="ctl00_MainContent_txtConPwd" class="inputtext">
                                    <span id="ctl00_MainContent_rfvConPwd" title="Confirm Password is required." style="color:Red;display:none;"></span>
                                    <span id="ctl00_MainContent_cvConPwd" title="Password And Confirmed Password Mismatch" style="color:Red;display:none;"></span>
                                    <input type="hidden" name="ctl00$MainContent$CPwdVCE_ClientState" id="ctl00_MainContent_CPwdVCE_ClientState">
                                    <input type="hidden" name="ctl00$MainContent$CPwdCVE1_ClientState" id="ctl00_MainContent_CPwdCVE1_ClientState">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    &nbsp;
                                </td>
                                <td><br><br>
                                    <input type="submit" name="ctl00$MainContent$BtnSubmit" value="Submit" onclick="return confirm('Do you want me to proceed?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$MainContent$BtnSubmit&quot;, &quot;&quot;, true, &quot;ChgPwd&quot;, &quot;&quot;, false, false))" id="ctl00_MainContent_BtnSubmit" title="Submit" class="Submit">
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
		</div>
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