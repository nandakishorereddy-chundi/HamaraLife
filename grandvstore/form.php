<!DOCTYPE html>
<?php
include('connect.php');
session_start();
$Id=$_SESSION['Id'];
$query="SELECT `OrderId`, `Product`, `FName`, `LName`, `PhoneNo`, `Email`, `Gender`, `DOB`, `PAN`, `RefId`, `Password`, 
`Martialstatus`, `Address1`, `Address2`, `City`, `State`, `Country`, `PIN`, `AccountNo`, `Bankname`, `IFSCcode`, `Branchname`,
`Nomineename`, `Nomineerelation`, `Nomineeage`, `Flag` FROM `users` WHERE `Id`='$Id'";
$query_run=mysql_query($query);
	if($query_run)
	{
	  $row=mysql_fetch_assoc($query_run);
	  $OrderId=$row['OrderId'];
      $Product=$row['Product'];
	  $FName=$row['FName'];
	  $LName=$row['LName'];
	  $PhoneNo=$row['PhoneNo'];
	  $Email=$row['Email'];
	  $Gender=$row['Gender'];
	  if($Gender==0)
	  		$Gender="Male";
	  else
	  		$Gender="Female";
	  $DOB=$row['DOB'];
	  $PAN=$row['PAN'];
	  $RefId=$row['RefId'];
	  // php code to get ref name using refId
	  $query="SELECT `FName`,`LName` FROM `users` WHERE `Id`='$RefId'";
	  $query_run=mysql_query($query);
	  $row1=mysql_fetch_assoc($query_run);
	  $RefName=$row1['FName'];
	  $RefName=$RefName." ".$row1['LName'];
	  $PayeeName=$FName." ".$LName;
	  $Martialstatus=$row['Martialstatus'];
	  if($Martialstatus==0)
	  		$Martialstatus="Single";
	  else
	  		$Martialstatus="Married";
	  $Address1=$row['Address1'];
	  $Address2=$row['Address2'];
	  $City=$row['City'];
	  $State=$row['State'];
	  $Country=$row['Country'];
	  $PIN=$row['PIN'];
	  $AccountNo=$row['AccountNo'];
	  $Bankname=$row['Bankname'];
	  $IFSCcode=$row['IFSCcode'];
	  $Branchname=$row['Branchname'];
	  $Nomineename=$row['Nomineename'];
	  $Nomineerelation=$row['Nomineerelation'];
	  $Nomineeage=$row['Nomineeage'];
	  $Flag=$row['Flag'];
	}
	else
	{
		echo "failed";
	}
?>
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
	<link rel="stylesheet" href="assets/css/custom1.css">
	<link rel="stylesheet" href="assets/css/custom2.css"><link rel="stylesheet" href="assets/css/skins/facebook.css">

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
							<?php  echo "$FName $LName";   ?>
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
										<label type="text" class="form-control" placeholder="Search anything..." name="s" />
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
		
		
    
    
    <tr>
        <td align="center" valign="top" style="padding-top: 20px; background: url(../images/header/body-bg.jpg) repeat-x top;">
            <table width="963" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                    <td height="40" align="left" valign="bottom" class="title-bor">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody><tr>
                                <td align="left" valign="bottom" class="heading-title">
                                    <h1>Show Profile</h1>
                                </td>
                                <td align="right" valign="bottom" class="heading-title">
                                    <?php if($Flag==0){ ?>
                                    	<h1>NOT ACTIVE</h1>
                                    <?php } ?>
                                    <?php if($Flag==1){ ?>
                                    	<h1>ACTIVE</h1>
                                    <?php } ?>
                                </td>
                                
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
               
			   <tr>
                    <td height="40" align="left" valign="bottom" style="padding-top: 10px;"><br><br>
                        <div class="form_default" style="padding-left: 25px; text-align: left;">
                            <div class="customerInfo">
                                <fieldset class="register">
                                    <legend><strong>Sponsor Information</strong></legend>
                                    <table align="center" border="0" cellpadding="6" cellspacing="0" class="tborder" width="100%">
                                        <tbody><tr>
                                            <td align="center">
                                                <table border="0" width="90%" align="center" cellspacing="0" class="BorderColor" cellpadding="0">
                                                    <tbody><tr>
                                                        <td width="23%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="25%">
                                                        </td>
                                                        <td width="23%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="25%">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">Sponcer ID <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel">
                                                            <span id="ctl00_MainContent_lblsprname" class="Label_Orange"><?php echo "$RefId" ?></span>
                                                        </td>
                                                        <td height="30" class="listhead">
                                                          <label id="fon">Sponcer Name <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel">
                                                            <span id="ctl00_MainContent_lblspruname" class="Label_Orange"><?php echo "$RefName" ?></span>
                                                        </td>
                                                    </tr>
													 <tr>
													  <td height="30" class="listhead">
                                                            <label id="fon">Order ID <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel">
                                                            <span id="ctl00_MainContent_lblsprname" class="Label_Orange"><?php echo "$OrderId" ?></span>
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
                                    <legend><strong>Personal Information</strong><span style="margin-left:+650px;"><i class="entypo-pencil"></i><a href="form1.php">edit</a></span></legend>
                                    <table align="center" border="0" cellpadding="6" cellspacing="0" class="tborder" width="100%">
                                        <tbody><tr>
                                            <td align="center">
                                                <table border="0" width="90%" align="center" cellspacing="0" class="BorderColor" cellpadding="0">
                                                    <tbody><tr>
                                                        <td width="23%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="25%">
                                                        </td>
                                                        <td width="23%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="25%">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">First Name <span style="color:#C00000;">*</span></label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                           <span id="ctl00_MainContent_lblttle" class="Label_Orange"><?php echo "$FName" ?></span> &nbsp; <span id="ctl00_MainContent_lblname" class="Label_Orange">NARESH</span>
                                                        </td>
                                                        <td class="listhead">
                                                            <label id="fon">Last Name <span style="color:#C00000;">*</span></label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblmobile" class="Label_Orange"><?php echo "$LName" ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>                                                     
                                                        <td height="30" class="listhead">
                                                            <label id="fon">Phone <span style="color:#C00000;">*</span></label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblSecMobile" class="Label_Orange"><?php echo "$PhoneNo" ?></span>
                                                        </td>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">Marital Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblMaritalStatus" class="Label_Orange"><?php echo "$Martialstatus" ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">Gender  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td align="left" height="30">
                                                            <span id="ctl00_MainContent_lblgen" class="Label_Orange"><?php echo "$Gender" ?></span>
                                                        </td>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">Date of birth <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lbladd1" class="Label_Orange"><?php echo "$DOB" ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">Address1<span style="color:#C00000;">*</span>
															</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel" align="left">
                                                            <span id="ctl00_MainContent_lbldob" class="Label_Orange"><?php echo "$Address1" ?></span>
                                                        </td>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">Address2<span style="color:#C00000;">*</span>
															</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel" align="left">
                                                            <span id="ctl00_MainContent_lbldob" class="Label_Orange"><?php echo "$Address2" ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">City / Town<span style="color:#C00000;"></span>
															</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel" align="left">
                                                            <span id="ctl00_MainContent_lblcity" class="Label_Orange"><?php echo "$City" ?></span>
                                                        </td>
                                                        <td height="30" class="listhead">
                                                          <label id="fon">State<span style="color:#C00000;">*</span></label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel" align="left">
                                                            <span id="ctl00_MainContent_lblpan" class="Label_Orange"><?php echo "$State" ?></span>
                                                        </td>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                          <label id="fon">PAN<span style="color:#C00000;"></span>
															</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblstate" class="Label_Orange"><?php echo "$PAN" ?></span>
                                                        </td>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">Pincode <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblpin" class="Label_Orange"><?php echo "$PIN" ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">Email <span style="color:#C00000;">*</span></label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel" align="left">
                                                            <span id="ctl00_MainContent_lblemail" class="Label_Orange"><?php echo "$Email" ?></span>
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
                                    <legend><strong>Bank Information</strong><span style="margin-left:+680px;"><i class="entypo-pencil"></i><a href="form2.php">edit</a></span></legend>
                                    <table align="center" border="0" cellpadding="6" cellspacing="0" class="tborder" width="100%">
                                        <tbody><tr>
                                            <td align="center">
                                                <table border="0" width="90%" align="center" cellspacing="0" class="BorderColor" cellpadding="0">
                                                    <tbody><tr>
                                                        <td width="23%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="25%">
                                                        </td>
                                                        <td width="23%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="25%">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">PayeeName </label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left" colspan="3">
                                                            <span id="ctl00_MainContent_lblpayeename" class="Label_Orange"><?php echo "$PayeeName" ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                           <label id="fon">Account No <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblaccno" class="Label_Orange"><?php echo "$AccountNo" ?></span>
                                                        </td>
                                                        <td height="30" class="listhead">
                                                           <label id="fon">	Bank Name <span style="color:#C00000;">*</span></label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel" align="left">
                                                            <span id="ctl00_MainContent_lblbank" class="Label_Orange"><?php echo "$Bankname" ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">IFSC Code	<span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;
												</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblifscode" class="Label_Orange"><?php echo "$IFSCcode" ?></span>
                                                        </td>
                                                        <td height="30" class="listhead">
                                                            <label id="fon">	Branch Name <span style="color:#C00000;">*</span>
												</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel" align="left">
                                                            <span id="ctl00_MainContent_lblbranch" class="Label_Orange"><?php echo "$Branchname" ?></span>
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
                    <td height="40" align="left" valign="bottom" style="padding-top: 10px;padding-bottom:20px;">
                        <div class="form_default" style="padding-left: 25px; text-align: left;">
                            <div class="customerInfo">
                                <fieldset class="register">
                                    <legend><strong>Nominee Information</strong><span style="margin-left:+650px;"><i class="entypo-pencil"></i><a href="form3.php">edit</a></span></legend>
                                    <table align="center" border="0" cellpadding="6" cellspacing="0" class="tborder" width="100%">
                                        <tbody><tr>
                                            <td align="center">
                                                <table border="0" width="90%" align="center" cellspacing="0" class="BorderColor" cellpadding="0">
                                                    <tbody><tr>
                                                        <td width="23%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="25%">
                                                        </td>
                                                        <td width="23%">
                                                        </td>
                                                        <td width="2%">
                                                        </td>
                                                        <td width="25%">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                           <label id="fon"> Nominee Name <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblnominee" class="Label_Orange"><?php echo "$Nomineename" ?></span>
                                                        </td>
                                                        <td height="30" class="listhead">
                                                           <label id="fon">Relation <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" align="left">
                                                            <span id="ctl00_MainContent_lblrelation" class="Label_Orange"><?php echo "$Nomineerelation" ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" class="listhead">
                                                           <label id="fon">Age<span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</label>
                                                        </td>
                                                        <td class="listhead">
                                                            :
                                                        </td>
                                                        <td height="30" class="inputlabel" align="left" colspan="3">
                                                            <span id="ctl00_MainContent_lblnomage" class="Label_Orange"><?php echo "$Nomineeage" ?></span>
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
            </tbody></table>
        </td>
    </tr>

                </tbody></table>
            </td>
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