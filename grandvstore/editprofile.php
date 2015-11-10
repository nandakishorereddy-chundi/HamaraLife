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
		
		
		<table width="963" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                    <td height="40" align="left" valign="bottom" class="title-bor">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody><tr>
                                <td align="left" valign="bottom" class="heading-title">
                                    <h1>Show Profile</h1>
                                </td>
                                <br>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
                <tr>
                    <td height="40" align="left" valign="bottom" style="padding-top: 10px;">
                        <div class="form_default" style="padding-left: 25px; text-align: left;">
                            <div class="customerInfo">
                                <fieldset class="register">
                                    <legend><strong>Sponsor Information</strong></legend>
                                    <table align="center" border="0" cellpadding="6" cellspacing="0" class="tborder" width="100%">
                                        <tbody><tr>
                                            <td align="center">
                                                <table border="0" width="85%" align="center" cellspacing="0" class="BorderColor" cellpadding="0">
                                                    <tbody><tr>
                                                        <td width="15%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="35%">
                                                        </td>
                                                        <td width="15%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="35%">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30">
                                                            Sponsor ID
                                                        </td>
                                                        <td>
                                                            :
                                                        </td>
                                                        <td height="30">
                                                            <span id="ctl00_MainContent_lblsprno" class="inputtext"></span>
                                                        </td>
                                                        <td height="30">
                                                            Sponsor Name
                                                        </td>
                                                        <td>
                                                            :
                                                        </td>
                                                        <td height="30">
                                                            <span id="ctl00_MainContent_lblsprname" class="inputtext"> </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" height="25">
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </fieldset>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td height="40" align="left" valign="bottom" style="padding-top: 10px;">
                        <div class="form_default" style="padding-left: 25px; text-align: left;">
                            <div class="customerInfo">
                                <fieldset class="register">
                                    <legend><strong>Personal Information</strong></legend>
                                    <table align="center" border="0" cellpadding="6" cellspacing="5" class="tborder" width="100%">
                                        <tbody><tr>
                                            <td align="center">
                                                <table align="center" border="0" cellpadding="6" cellspacing="5" class="tborder" width="100%">
                                                    <tbody><tr>
                                                        <td align="center">
                                                            <table border="0" width="85%" align="center" cellspacing="0" class="BorderColor" cellpadding="0">
                                                                <tbody><tr>
                                                                    <td width="15%">
                                                                    </td>
                                                                    <td width="2%">
                                                                    </td>
                                                                    <td width="35%">
                                                                    </td>
                                                                    <td width="15%">
                                                                    </td>
                                                                    <td width="2%">
                                                                    </td>
                                                                    <td width="35%">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30" align="left">
                                                                        Title
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td>
                                                                        <select name="ctl00$MainContent$ddlTitle" id="ctl00_MainContent_ddlTitle" class="inputtext" style="width: 135px;">
	<option value="-1">..Select One..</option>
	<option selected="selected" value="0">Mr.</option>
	<option value="1">Ms</option>
	<option value="2">M/s</option>
	<option value="3">Mrs</option>

</select>
                                                                        <span id="ctl00_MainContent_ddlTitReq" title="Select Title" style="color:Red;display:none;"></span>
                                                                        <input type="hidden" name="ctl00$MainContent$ddlTitVCE_ClientState" id="ctl00_MainContent_ddlTitVCE_ClientState">
                                                                    </td>
                                                                    <td height="30">
                                                                    </td>
                                                                    <td>
                                                                    </td>
                                                                    <td height="30" align="left">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30">
                                                                        Name
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
																	<td height="30" class="inputlabel" align="left">
                                                                        <input name="ctl00$MainContent$txtMothername" type="text" value="" id="ctl00_MainContent_txtMothername" class="inputtext">
                                                                    </td>
                                                                    <td align="left">
                                                                        <span id="ctl00_MainContent_lblUname"></span>
                                                                    </td>
                                                                    <td height="30">
                                                                        Mobile
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
																	<td height="30" class="inputlabel" align="left">
                                                                        <input name="ctl00$MainContent$txtMothername" type="text" value="" id="ctl00_MainContent_txtMothername" class="inputtext">
                                                                    </td>
                                                                    <td height="30" align="left">
																	
                                                                     <span id="ctl00_MainContent_lblmobile"></span>
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30">
                                                                        Father Name
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
																	<td height="30" class="inputlabel" align="left">
                                                                        <input name="ctl00$MainContent$txtMothername" type="text" value="" id="ctl00_MainContent_txtMothername" class="inputtext">
                                                                    </td>
                                                                    <td align="left">
                                                                     <span id="ctl00_MainContent_lblFathername"></span>
                                                                        
                                                                    </td>
                                                                    <td height="30">
                                                                        Secondary Mobile
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" align="left">
                                                                        <input name="ctl00$MainContent$txtSecMobile" type="text" value="" id="ctl00_MainContent_txtSecMobile" class="inputtext">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30">
                                                                        Mother Name
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" class="inputlabel" align="left">
                                                                        <input name="ctl00$MainContent$txtMothername" type="text" value="" id="ctl00_MainContent_txtMothername" class="inputtext">
                                                                    </td>
                                                                    <td height="30">
                                                                        Marital Status
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" align="left">
                                                                        <select name="ctl00$MainContent$DDMSts" id="ctl00_MainContent_DDMSts" class="inputtext">
	<option value="-1">..Select One..</option>
	<option value="0">None</option>
	<option selected="selected" value="1">Single</option>
	<option value="2">Married</option>
	<option value="3">Divorced</option>
	<option value="4">Widowed</option>

</select>
                                                                        <span id="ctl00_MainContent_MStatusRequiredFieldValidator" title="Select Marital Status." style="color:Red;display:none;"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30">
                                                                        Gender
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td align="left" height="30">
                                                                        <select name="ctl00$MainContent$ddlGender" id="ctl00_MainContent_ddlGender" class="inputtext" style="width: 194px;">
	<option value="-1">..Select One..</option>
	<option selected="selected" value="0">Male</option>
	<option value="1">Female</option>

</select>
                                                                        <span id="ctl00_MainContent_GenderRFV" title="Select Gender." style="color:Red;display:none;"></span>
                                                                        <input type="hidden" name="ctl00$MainContent$GenderVCE_ClientState" id="ctl00_MainContent_GenderVCE_ClientState">
                                                                    </td>
                                                                    <td>
                                                                        Address
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" colspan="3" align="left">
                                                                        <input name="ctl00$MainContent$txtadd1" type="text" value="" maxlength="150" id="ctl00_MainContent_txtadd1" class="inputtext">
                                                                        <span id="ctl00_MainContent_RequiredFieldValidator12" style="color:Red;visibility:hidden;">*</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30">
                                                                        Date of Birth
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td align="left">
                                                                      <span id="ctl00_MainContent_lblDob"></span>
                                                                        
                                                                    </td>
                                                                    <td height="30">
                                                                        City/Town
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" align="left">
                                                                        <input name="ctl00$MainContent$txtcity" type="text" value="" id="ctl00_MainContent_txtcity" class="inputtext">
                                                                        <span id="ctl00_MainContent_RequiredFieldValidator1" style="color:Red;visibility:hidden;">*</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30">
                                                                        Pan No
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" class="inputlabel" align="left">
                                                                        <span id="ctl00_MainContent_lblpanno"></span>
                                                                    </td>
                                                                    <td height="30">
                                                                        State
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td align="left">
                                                                        <span id="ctl00_MainContent_lblstate"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30">
                                                                        Email ID
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" align="left">
                                                                    <span id="ctl00_MainContent_lblemail"></span>
                                                                       
                                                                    </td>
                                                                    <td height="30">
                                                                        PIN Code
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" align="left">
                                                                        <input name="ctl00$MainContent$txtpin" type="text" value="" maxlength="6" id="ctl00_MainContent_txtpin" class="inputtext">
                                                                        <span id="ctl00_MainContent_rfpin" style="color:Red;visibility:hidden;">*</span>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30">
                                                                        Occupation
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td align="left">
                                                                        <input name="ctl00$MainContent$txtOccupation" type="text" id="ctl00_MainContent_txtOccupation" class="inputtext">
                                                                    </td>
                                                                    <td>
                                                                        Mode of Communication
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" align="left">
                                                                        <select name="ctl00$MainContent$ddCommunication" id="ctl00_MainContent_ddCommunication" class="inputtext">
	<option value="-1">..Select One..</option>
	<option value="0">Speed Post</option>
	<option value="1">Professional</option>
	<option selected="selected" value="2">DTDC</option>

</select>
                                                                        <span id="ctl00_MainContent_RFVCommunication" title="Select Mode of Communication" style="color:Red;display:none;"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="4" height="25">
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </fieldset>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td height="40" align="left" valign="bottom" style="padding-top: 10px;">
                        <div class="form_default" style="padding-left: 25px; text-align: left;">
                            <div class="customerInfo">
                                <fieldset class="register">
                                    <legend><strong>Bank Information</strong></legend>
                                    <table align="center" border="0" cellpadding="6" cellspacing="5" class="tborder" width="100%">
                                        <tbody><tr>
                                            <td align="center">
                                                <table border="0" width="85%" align="center" cellspacing="5" class="BorderColor" cellpadding="0">
                                                    <tbody><tr>
                                                        <td width="15%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="35%">
                                                        </td>
                                                        <td width="15%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="35%">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30">
                                                            PayeeName
                                                        </td>
                                                        <td>
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblpayname"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30">
                                                            Account No
                                                        </td>
                                                        <td>
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblaccno"></span>
                                                        </td>
                                                        <td height="30">
                                                            Bank Name
                                                        </td>
                                                        <td>
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblbankname"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30">
                                                            IFSC Code
                                                        </td>
                                                        <td>
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblifsc"></span>
                                                        </td>
                                                        <td height="30">
                                                            Branch Name
                                                        </td>
                                                        <td>
                                                            :
                                                        </td>
														
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblbranch"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" height="25">
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </fieldset>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td height="40" align="left" valign="bottom" style="padding-top: 10px; padding-bottom: 20px;">
                        <div class="form_default" style="padding-left: 25px; text-align: left;">
                            <div class="customerInfo">
                                <fieldset class="register">
                                    <legend><strong>Nominee Information</strong></legend>
                                    <table align="center" border="0" cellpadding="6" cellspacing="5" class="tborder" width="100%">
                                        <tbody><tr>
                                            <td align="center">
                                                <table align="center" border="0" cellpadding="6" cellspacing="0" class="tborder" width="100%">
                                                    <tbody><tr>
                                                        <td align="center">
                                                            <table border="0" width="85%" align="center" cellspacing="5" class="BorderColor" cellpadding="0">
                                                                <tbody><tr>
                                                                    <td width="15%">
                                                                    </td>
                                                                    <td width="2%">
                                                                    </td>
                                                                    <td width="35%">
                                                                    </td>
                                                                    <td width="15%">
                                                                    </td>
                                                                    <td width="2%">
                                                                    </td>
                                                                    <td width="35%">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30">
                                                                        Name
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" align="left">
                                                                        <input name="ctl00$MainContent$txtnominename" type="text" value="" id="ctl00_MainContent_txtnominename" class="inputtext">
                                                                    </td>
                                                                    <td height="30">
                                                                        Relation
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" align="left">
                                                                        <input name="ctl00$MainContent$txtrelation" type="text" value="" id="ctl00_MainContent_txtrelation" class="inputtext">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30">
                                                                        Age
                                                                    </td>
                                                                    <td>
                                                                        :
                                                                    </td>
                                                                    <td height="30" align="left" colspan="3">
                                                                        <input name="ctl00$MainContent$txtnomage" type="text" value="" id="ctl00_MainContent_txtnomage" class="inputtext">
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="5" height="25">
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span id="ctl00_MainContent_lbltermsmsg" style="color:Red;font-size:10pt;font-weight:bold;"></span>
                                                <div id="ctl00_MainContent_val" style="color:Red;display:none;">

</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <input type="submit" name="ctl00$MainContent$btnUpdate" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$MainContent$btnUpdate&quot;, &quot;&quot;, true, &quot;reg&quot;, &quot;&quot;, false, false))" id="ctl00_MainContent_btnUpdate" class="Submit">
                                                <span id="ctl00_MainContent_lblmsg" style="color:Green;font-size:10pt;font-weight:bold;"></span>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </fieldset>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody></table>
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