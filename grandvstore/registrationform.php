<!DOCTYPE html>
<?php
$EmailErr = ""; 
$passErr = "";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	include('connect.php');
	if($_POST['submit'] == "SignIn")
	{
	  	$Email=$_POST['Email'];
	  	$Password=$_POST['Password'];
	  	$Email=stripslashes($Email);
	  	$Password=stripslashes($Password);
	  	$query="SELECT `Email` FROM users WHERE `Email`='$Email'";
	  	$query_run=mysql_query($query);
	  	$num=mysql_num_rows($query_run);
	  	if(empty($Email))
	  	{
	  		$EmailErr = "Email Id is required";
	  	}
	  	if(empty($Password))
	  	{
	  		$passErr = "Password is required";
	  	}
	  	else if($num!=1)
	  	{
	  		$EmailErr = "User Dosenot Exist";
	  	}
	  	else
	  	{
	  		
	  		$query="SELECT `Password` FROM users WHERE `Email`='$Email'";
	  		$query_run=mysql_query($query);
	  		$row=mysql_fetch_assoc($query_run);
	  		$Pass=$row['Password'];
	  		if($Pass == $Password)
	  		{
	  		 	echo '<script type="text/javascript">'; 
				echo 'alert("sucess");'; 
				echo '</script>';	
	  		}
	  		else
	  		{
	  			echo '<script type="text/javascript">'; 
				echo 'alert("failed");';
				echo '</script>';
	  		}
	    }
    }
	if($_POST['submit'] == "Forgotpassword")
	{
		$Email=$_POST['email'];
	    $Email=stripslashes($Email);
	    $query="SELECT `Email` FROM users WHERE Email='$Email'";
	    $query_run=mysql_query($query);
	    $num=mysql_num_rows($query_run);
	    if(empty($Email))
	    {
		  	$EmailErr = "Email is required";
        }
  		else if($num!=1)
  		{
  			$EmailErr = "User Dosenot Exist";
  		}
  		else
  		{
	  		echo '<script language="javascript">';
	    	echo "alert('$Email')";
	    	echo '</script>';
	  		$EmailErr = "Conformation Mail sent successfully";
  		}	
	}
	if ($_POST['submit'] == "Register")
    {
    	$OrderId=$_POST['OrderId'];
    	$Product=$_POST['Product'];
	    $FName=$_POST['FName'];
	    $FName=stripslashes($FName);
	    $LName=$_POST['LName'];
	    $LName=stripslashes($LName);
	    $PhoneNo=$_POST['PhoneNo'];
	    $Email=$_POST['Email'];
	    $Email=stripslashes($Email);
	    $ConfirmEmail=$_POST['ConfirmEmail'];
	    $ConfirmEmail=stripslashes($ConfirmEmail);
	    $Gender=$_POST['Gender'];
	    $DOB=$_POST['DOB'];
	    $PAN=$_POST['PAN'];
	    $RefId=$_POST['RefId'];
	    $Password=$_POST['Password'];
	    $Password=stripslashes($Password);
	    $ConfirmPassword=$_POST['ConfirmPassword'];
	    $ConfirmPassword=stripslashes($ConfirmPassword);
	    $Martialstatus=$_POST['Martialstatus'];
	    $Address1=$_POST['Address1'];
	    $Address2=$_POST['Address2'];
	    $City=$_POST['City'];
	    $State=$_POST['State'];
	    $Country=$_POST['Country'];
	    $PIN=$_POST['PIN'];
	    $AccountNo=$_POST['AccountNo'];
	    $Bankname=$_POST['Bankname'];
	    $IFSCcode=$_POST['IFSCcode'];
	    $Branchname=$_POST['Branchname'];
	    $Nomineename=$_POST['Nomineename'];
	    $Nomineerelation=$_POST['Nomineerelation'];
	    $Nomineeage=$_POST['Nomineeage'];
	      
	    //set the random id length 
	    $Id_length = 8;  

	    //generate a random id encrypt it and store it in $rnd_id 
	    $Id = crypt(uniqid(rand(),1)); 

	    //to remove any slashes that might have come 
	    $Id = strip_tags(stripslashes($Id)); 

	    //Removing any . or / and reversing the string 
	    $Id = str_replace(".","",$Id); 
	    $Id = strrev(str_replace("/","",$Id)); 

	    //finally I take the first 10 characters from the $rnd_id 
	    $Id = substr($Id,0,$Id_length);
	    //$rnd_id="1234";

	    if($Password == $ConfirmPassword && $Email == $ConfirmEmail)
	    {
	      include('connect.php');
	      $query="INSERT INTO `users`(`Id`, `OrderId`, `Product`, `FName`, `LName`, `PhoneNo`, `Email`,
	       `Gender`, `DOB`, `PAN`, `RefId`, `Password`, `Martialstatus`, `Address1`, `Address2`, `City`, `State`, `Country`,`PIN`, 
	       `AccountNo`, `Bankname`, `IFSCcode`, `Branchname`, `Nomineename`, `Nomineerelation`, `Nomineeage`) VALUES ('$Id','$OrderId',
	        '$Product', '$FName', '$LName', '$PhoneNo', '$Email', '$Gender', '$DOB', '$PAN', '$RefId',
	        '$Password', '$Martialstatus', '$Address1', '$Address2', '$City', '$State', '$Country' ,'$PIN', '$AccountNo', 
	        '$Bankname', '$IFSCcode', '$Branchname', '$Nomineename', '$Nomineerelation', '$Nomineeage')";
	      $query_run=mysql_query($query);
	      if($query_run)
	      {
  				echo "alert('sucess')";
	      }
	      else
	      {
  			echo "alert('failed')";
	      }
	    }
	}
}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon | Login</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css"><link rel="stylesheet" href="assets/css/skins/facebook.css">
	<link rel="stylesheet" href="assets/css/neon-core.css"><link rel="stylesheet" href="assets/css/week.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '';
body
{
    height: 1054px;
}

html
{
    height: 1054px;
}
</script>

<div class="login-page">
	<div style="height:100px;"><br><br>
					<div style="margin-top:-23px;">
						<a href="#" class="logo">
							<span style="margin-left:+160px;"><img src="assets/images/hamarabold.png" width="200" alt="" /></span><br><br><br>
						</a>
					</div>
					<div style="float:right;margin-right:+100px;margin-top:-105px;"><br>
            		<form role="form" action="registrationform.php" method="post" class="signin">
						<label id="fon"><span style="font-size:14px;color:#fff;">Email <span style="color:#C00000;">*<?php echo $EmailErr;?></span></span>
						</label>
						<input type="email" name="Email" id="userid" class="input" />&nbsp;&nbsp;
							<label id="fon"><span style="font-size:14px;color:#fff;">Password <span style="color:#C00000;">*<?php echo $passErr;?></span></span>
							</label>
						<input type="password" name="Password" id="password" class="input" />&nbsp;&nbsp;
							<input type="submit" name="submit" id="submit" value="SignIn" class="button-secondary"  ><br>
							<span style="margin-left:+285px;"><a href="#"><span style="color:#9699B3;">&nbsp;	Forgotten your password?</span></span></a>
					</form>
					</div>
	<div class="login-pages"><br><br>
	<form role="form" action="registrationform.php" method="post" class="Register">
<center> <h1 style="color:#005CB8;font-family:arial;"> Create an Free Account </h1> </center>
	<fieldset style="padding-left:40px;margin-left:+120px;">

						<legend id="leg">Account Details
						</legend>
						<table style="width:100%; margin-left:+120px;">
							<tr>	
								<td>
									<p>
										<label id="fon">Sponcer ID <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
										<input type="text" name="RefId" id="SponcerID" class="input"/>
									</p>
								</td>		
								<td>
									<p> 
										<label id="fon">Order ID <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
										<input type="text"name="OrderId" id="OrderId"  class="input" />
									</p>
								</td>
							</tr>
							<tr>
							<td>
										<p>
											<label id="fon">Products &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
											<select name="Product">
												<option value="0">Select
												</option>
												<option value="1">Combo pack 1
												</option>
												<option value="2">Combo pack 2
												</option>
												<option value="3">Combo pack 3
												</option>
												<option value="4">Combo pack 4
												</option>
												<option value="5">Combo pack 5
												</option>
												<option value="6">Combo pack 6
												</option>
												<option value="7">Combo pack 7
												</option>
												<option value="8">Combo pack 8
												</option>
												<option value="9">Combo pack 9
												</option>
												<option value="10">Combo pack 10
												</option>
											</select>
										</p>
									</td>
							</tr>
							
						</table>
					</fieldset>
	
					<fieldset style="padding-left:40px;margin-left:+120px;">
							<legend id="leg">Personal Details</legend>
							<table style="width:125%; margin-left:+120px;">
								<tr>
									<td>
										<p>
											<label id="fon">First Name <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="text"name="FName" id="Fname"  class="input"/>
										</p>
									</td>
									<td>
										<p>
											<label id="fon">Last Name <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="text"name="LName" id="Lname"  class="input"/>
										</p>
									</td>
									
									
								</tr>
								<tr>
								<td>
									<p>
										<label id="fon">Email <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
											<input type="email" name="Email" id="email"  class="input"/>
									</p>
								</td>		
								<td>
									<p>
											<label id="fon">Confirm email <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
											<input type="email" name="ConfirmEmail" id="repeat email" class="input"/>
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>
										<label id="fon">Password <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
										<input type="password" name="Password" id="password"  class="input"/>
									</p>
								</td>		
								<td>
									<p> 
										<label id="fon">Confirm Password <span style="color:#C00000;">*</span></label>
										<input type="password" name="ConfirmPassword" id="repeat password"  class="input"/>
									</p>
								</td>
							</tr>
								<tr>
									<td>
										<p>
											<label id="fon">Phone <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
											<input type="tel" name="PhoneNo" id="phone"  class="input" maxlength="10"/>
										</p>
									</td>		
									<td>
										<p>
											<label id="fon">Birthdate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="date" name="DOB" id="DOB" class="input" />&nbsp;
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<p> <label id="fon">Gender  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	</label>
											<input type="radio" name="Gender" value="Male" checked> Male &nbsp;&nbsp;&nbsp;&nbsp;
  											<input type="radio" name="Gender" value="Female"> Female
										</p>
									</td>
									<td>
										<p> <label id="fon">Marital Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
											<input type="radio" name="Martialstatus" value="Married" checked>Married&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  											<input type="radio" name="Martialstatus" value="Single">Single
										</p>
									</td>		
								</tr>

							</table>
					</fieldset>
					<fieldset style="padding-left:40px;margin-left:+120px;">
														<legend id="leg">Further Information
														</legend>
										<table style="width:86%; margin-left:+120px;">
										  <tr>
											<td><p><label id="fon">Address 1 <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															</label>
															 <input type="text" name="Address1" id="address1"  class="input"/>
														</p></td>
														<td><p><label id="fon">Address 2 <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															</label>
															 <input type="text" name="Address2" id="address2"  class="input"/>
														</p></td>
										   		
											
										  </tr>
										  <tr>
										  <td><p>
														   <label id="fon">City <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															</label>
															<input type="text" name="City" id="city"  class="input"/></p></td>
											<td><p><label id="fon">Country <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															</label>
															<select name="Country">
																<option value="None">Select
																</option>
																<option value="India">India
																</option>
															</select>
														</p></td>
										  </tr>
										  <tr>
										  <td><p>
														  <label id="fon">Pincode <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															</label>
															<input type="text"class="input" name="PIN" id="pincode"  maxlength="10"/></p></td>	
											<td><p>  <label id="fon">State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															</label>
															<select name="State">
																<option value="None">Select
																</option>
																<option value="AP">AP
																</option>
															</select>
														</p></td>
											
										  </tr>
										<tr>
										   
										  </tr>
										</table>
					</fieldset>
					<fieldset style="padding-left:40px;margin-left:+120px;">
									 <legend id="leg">Bank Information
									</legend>
							
							<table style="width:95%; margin-left:+120px;">
							  <tr>
								
								<td><p><label id="fon">PayeeName &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												</label>
												<input type="text" name="Payeename" id="PayeeName"  class="input" /></p></td>		
								<td><p> <label id="fon">PAN <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												</label>
												<input type="text" name="PAN" id="PAN" class="input"/>
											</p></td>
							  </tr>
							  <tr>
								<td><p>
										   <label id="fon">	Bank Name <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												</label>
												<input type="text" name="Bankname" id="Bank Name" class="input"/></p></td>		
								<td><p>
											  <label id="fon">	Branch Name <span style="color:#C00000;">*</span>
												</label>
												<input type="text"  name="Branchname" id="Branch Name" class="input"/>
												
											</p></td>
							  </tr>
							  <tr>
							  <td><p> <label id="fon">Account No <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
												<input type="text" name="AccountNo" id="Account No" class="input"/>
											</p></td>
							  <td><p> <label id="fon">IFSC Code	<span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;
												</label>
												<input type="text"  name="IFSCcode" id="IFSCcode" class="input"/>
											</p></td>
											
											
								
							  </tr>

							</table>
					</fieldset>
					<fieldset style="padding-left:40px;margin-left:+120px;">
							<legend id="leg">Nominee Information</legend>
						<table style="width:90%; margin-left:+120px;">
						  <tr>
							
							<td><p><label id="fon"> Nominee Name <span style="color:#C00000;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</label>
											<input type="text"  name="Nomineename" id="Name" class="input"/></p></td>		
							<td><p> <label id="fon">Nominee Age &nbsp;
											</label>
											<input type="text" name="Nomineeage" id="Age" class="input"/>
										</p></td>
						  </tr>
						  <tr>
							<td><p>
									   <label id="fon">Nominee Relation <span style="color:#C00000;">*</span>&nbsp;&nbsp;
											</label>
											<input type="text" name="Nomineerelation" id="Relation" class="input" class="focus"/></p></td>		
							
						  </tr>
						</table>
						
					</fieldset>
					
					<fieldset style="padding-left:40px;margin-left:+120px;">
					<legend id="leg">Terms& Conditions</legend>
					</fieldset><br>
					<textarea class="input" style="font-size: 12px;margin-left:+190px; width: 70%; height: 220px;" readonly="readonly">
				HAMARA LIFE a company incorporated under the Companies Act, 1956 and having its Registered Office in Hyderabad, here in after referred to as "the Company “The Company is inter-alia into the business of Direct Selling of various products such as White Goods, Consumer Durables, Cosmetics, etc. The Company exclusively uses website to display the details of the products, marketing methods, business monitoring, while uses the word of mouth publicity to promote and create awareness about the company and its products.
  
The Company does appoint freelance distributors across the country for marketing and sale of products. Such distributorship is granted as privilege to the consumer of its products. Interested individuals/body corporates need to purchase the products upon they being satisfied with the quality and services they can become a freelance distributor of the company, if they wish to by applying for the same in the prescribed form.

Before filling the application form, the intending Distributor is advised to go through the terms and conditions mentioned herein below thoroughly along with those mentioned in the official website of the company during placing an online order and subject to such terms and conditions shall append their signature in the column provided as a token of their acceptance of the terms and conditions mentioned therein.

I. Definitions
The following words used in these presents shall have the meaning as defined hereunder;
a.	Company – Means HAMARA LIFE, having its corporate office at hyderabad.
b.	Consumer .Consumer means and include individuals/body corporate (including Partnership Firms) who purchases products from HAMARA LIFE
c.	Independent Distributor - Independent Distributor is the person including Company/Partner Ship firm, proprietary concern) who is competent to enter into contract as per the Indian Contract Act provided, such interested person has purchased products from the Company and opted to participate in Business opportunity.
d.	He - Shall mean and include male, female, body corporate, partnership firm who applies for the Distributorship of the Company
e.	Product - Shall mean and include all the products marketed by the Company from time to time
f   Manufacturer - Means and include Manufacturers of the products marketed and sold by the Company from time to time.
g.  MRP - Means and includes Maximum Retail Price printed over the price tag appended to the products
h.  Facilitation Fee - Facilitation Fee is the amount/benefit an Independent Distributor may earn by marketing/referring the products of HAMARA LIFE
j.	Unique ID - Means unique identification number issued by the Company to the Consumer/Independent Distributor and is issued to Independent Distributor as a token of acceptance of his application seeking for distributorship for the products of the Company.
k.	Password - Password means, unique code allotted to each of the Consumer/Independent Distributor to allow them to log on to the website of the Company.
I.  Website Means	 website of the Company _________________or any official website communicated through official communication channels of the company.

II. THE APPOINTMENT AND UNDERSTANDING
a. The Company upon scrutiny and verification of the Application may consider the Applicant as an "Independent Distributor” for the products marketed by the Company.
i.  Independent Distributor shall enjoy the following privileges after such recognition.
-1.	No territorial restriction to market the products, but limited to India.
-2.	Company shall maintain sales account of the Independent Distributor and shall be made available for inspection through their website.
-3.	An Unique ID and password shall be awarded to facilitate verification of their respective business account.
-4.	There shall be no specific targets; however earnings shall be in proportion to the volume of sales done by the Independent Distributor by self or through team as stipulated.
-5.	Distributorship may be awarded as a privileged consumer with no deposit and other conditions.
-6.	Distributorship is awarded without any commitment/or promise from the company in terms of possible earning potentials.
b. The Independent Distributor, upon appending his signature at the bottom of these presents and confirming through online in the company’s official website, shall be deemed to have accepted the Distributorship as independent consumer and hereby covenants as under;
i.	That he has clearly understood the Business Opportunity, marketing program, the compensation plan, its limitations and conditions and, he is not relying upon any representation or promises that is not set out in this term and conditions or other officially printed or published materials of the company.
ii.	Shall act as an independent body and shall not commit any misfeasance or malfeasance to create any liability/obligation over the company of whatsoever nature.
iii.	An Independent Distributor is not an Agent/Employee or any other Legal representative of the company or its service providers.
iv.	He has attained the age of majority and is competent to enter into a contract as provided in the "INDIAN CONTRACT ACT ". Necessary proof thereof shall be submitted as and when required by the Company.
v.	Independent Distributor hereby undertake not to accept cash from any new consumer introduced by him for buying the products and discourage his team members from accepting cash from any buyers.
vi.	Distributors hereby declare that all information furnished to the company is true and correct.   The Company shall be at liberty to take any action against the distributor, in the event, it is found that the Distributor furnished any wrong/false information to the company and the company’s decision will be final.

III. GENERAL TERMS
I.	The company under no circumstances will accept payment in cash for product Sales.
II. The company may appoint any Third Party for Collection/distribution services. Independent Distributor is required to visit the    company's official website from time to time to know such an appointment and avail facilities such as walk in to their outlets and make Payment and collect a valid receipt and products from them.
III.	The Products can be ordered online through our website and the payment in the form of demand draft favouring "HAMARA LIFE", Payable at CHENNAI, has to be sent / submitted at our authorized outlets, against which the product/s ordered will be delivered to the purchaser/authorized person. If the payment has been done through Credit Card/Debit Card using payment gateway process or through Terminal Swiping machine, the same or the front side photo copy of  the ‘same has to be presented with the ID proof, at the time of product delivery, by the purchaser either while collecting the product from the delivery outlet or while product getting delivered at the purchaser’s delivery address. The Product can also be purchased through E-Wallet. 
iv.	All consumers/Independent Distributor before ordering online or making the payment are advised to physically look and feel the products that are available for demo/display at our locations, as such the images shown in the company’s website / printed materials or through, any other mode by the company is only for reference and the actual product may vary.
v.	Neither it is compulsory nor mandatory to participate in the business plan of HAMARA LIFE  Purchasers who wish not to join the business can opt to do so by checking the "Free &amp; Optional Business option' box during registration process. You will however, need to provide the direct / enroller details (without which products can't be purchased as such Company take every possible steps to make the purchaser understand about the company, products, policies, etc., and also to make ensure that the purchaser is properly guided to buy HAMARA LIFE  products or before entering in to HAMARA LIFE  Business Opportunity) and such purchaser will be termed as "Consumer"
vi.	A consumer who has purchased the products from HAMARA LIFE , can choose to join the business opportunity free of cost, which he can do so by confirming from his Business centre login (where in access will be provided for 30 days, within which they need to confirm and beyond that he/she needs to contact the company’s customer care department with all his/her purchase information to re-activate his business centre, so as to understand whether the consumer has got the required information about the company, before entering in to a Business Opportunity).
vii. The Independent Distributor will be eligible towards facilitation fees or income, as per the volume of sale of products/ business done by him, subject to the eligibility norms formulated by the company from time to time. The company does not guarantee/assure any facilitation fees or income to the distributor on account of becoming just a mere "distributor" of the Company.
viii. Unique ID has to be quoted by the distributor in all his transactions and correspondence with the company. The Unique  ID once chosen cannot be altered at any point of time.
ix.	No communication will be entertained without unique ID and password. Distributor shall preserve the ID properly as it is before logging on to website.
X.TDS and any other applicable charges will be deducted by the Company as per the prevailing norms.
 Xi .Those Distributors who are not achieving  their minimum monthly purchase obligation  for last 12 month, the said Distributorship will be Terminated/blocked.
xii.	Independent Distributor Undertake (to adhere to policies, procedures, rules &amp; regulations formed by the company
xiii.	The distributor shall be faithful to the company and its co-distributors and shall uphold the integrity and decorum of the company and shall maintain good relations with other distributors and other clients. The Distributor understands that, the company shall be at liberty to accept or reject his application to become a distributor.
xiv. The Company reserves its right to modify the terms and condition, products, plans, business and policies with/without giving prior notice. Such notice may be published through the official website of the company, and any such modification/amendment shall be applicable and binding upon the Distributor from the date of such publication.

IV. PRICES / PAYMENT
a. The Updated Products and their Price lists are available on the company's official website and the amount to be paid (only after complete satisfaction with the description/ features available on the website and if possible, the physical verification of the product can be had by the purchaser by visiting our authorized outlets) by way of Bank Demand Draft favoring " HAMARA LIFE  payable at Hyderabad  or through online payment gateway or swiping machine option or E-Wallet while placing the order.
b. It is mutually agreed between the parties that the Consumer / Independent Distributor if satisfied about the product package ensure that the amount towards such product should reach the company's branch / authorized outlets within 30 days from the date of ordering the same online. In case the Product Purchaser fails to make payment within the aforesaid 30 days period to the company, it is up to the company's discretion either to accept the payment on the norms prevailing at that point of time or that this Agreement stands terminated and will be deemed as null and void.
c. It is  mutually agreed between the parties hereto, that the company is at liberty to change / modify the quantum of product cost payable under this Agreement in future or provide for additional Product / Services at such additional cost as may be determined by the company.
d. The company offers 30 days money back guarantee, from the date of receipt of payment on certain select products, as per the Product return policy.
e. The product rates and specification is also subject to change and may vary from time to time.
f. The company will not be responsible for any loss or damages if caused due to any technical error in the web links provided in the website, payment gateway, typographical errors etc.

V. PROHIBITIONS
a Distributor is prohibited from listing, marketing, advertising, promoting, discussing, or selling any product, or the business opportunity on any website or online forum that offers like auction as a mode of selling . Please refer to code of conduct of our Distributor Policies and Procedures for complete details.
ii.	Once a distributorship is terminated, he cannot enter into any of the company premises/meeting locations and his facilitation fee/ his name would be removed and he would not be entitled to receiving any fees going forward immediately.
iii.	The distributor hereby undertakes not to compel or induce or mislead any person with any false statement/promise to purchase products from the company or to become distributor of the company.

VI. DUTY AND CONFIDENTIALITY
Parties shall maintain confidentiality with respect to company’s information including but not limited to company’s policies, product details, facilitation fees etc., save and except to the extent that is required for furthering sale of products;

VII. SPECIAL CONDITIONS
Notwithstanding anything stated or provided herein, the company reserves its right to modify, alter or vary the terms and condition in any manner whatsoever they think fit and shall be communicated through official website or other mode as the company may deem fit and proper. Differences if any on such amendment shall be expressed/intimated in writing to the company within 7 days from the date of such amendment. In the absence of receipt of written objection, if any within such stipulated period, all such amendments to the agreement shall be considered as carried with the consent and thereafter any objection/difference shall be considered as waived/surrendered unconditionally.

VIII.	TERMINATION The Company reserves its rights to terminate the Distributorship for any reason not limited to the breach of terms as stipulated herein.

IX.	FORCE MAJEURE
The Company shall not be liable for any failure to perform its obligations where such failure has resulted due to Acts of Nature (including fire, flood, earthquake, storm, hurricane or other natural disaster), war, invasion, act of foreign enemies, hostilities (whether war is declared or not), civil war, rebellion, revolution, insurrection, military or usurped power or confiscation, terrorist activities, nationalization, government sanction, blockage, embargo, labour dispute, strike, lockout or interruption or failure of electricity.

X.	RECOURSE AND LEGAL APPLICABILITY
i. The terms and conditions stipulated in the forgoing paragraphs shall be governed in accordance with the laws in force in India. Disputes, if any, shall be subject to the exclusive jurisdiction of the courts in Hyderabad, ____________.
ii. If any dispute or difference arising out of or in relation to these presents, the same shall be referred to a sole arbitrator appointed by the Company.. Arbitration in such event shall be conducted as per the "Arbitration and conciliation Act, 1996"as amended from time to time. Venue of such Arbitration shall be Chennai_________and Language shall be English.
Declaration/Affirmation
	Solemnly affirm and declare as follows:
1.	That I have read and understood the terms and conditions for ‘Independent Distributorship " of the Company.
2.	I have also gone through the company official website, printed materials, brochures and convinced about the business and I have applied for the Distributorship on my own volition.
3.	I declare that I have not been given any assurance or promise by the company or its senior level distributors as to any income on account of the product purchase made by me. However I am made to understand that I  will be eligible for income/facilitation fees depending upon the volume of business done by me, as per terms and the Company reserves the right to change the Business Plan at any point of time.
4.	I undertake not to misguide or induce any one I shall not misguide any one and appraise them the terms and conditions for any one        to become a distributor  to join the company.

I hereby agree and adhere to the terms and conditions as stipulated along with the application form and as mentioned above to agree to purchase the product as Consumer/to do the distributorship business. 6. I hereby agree to submit all disputes to arbitration as provided in the terms and conditions of the company.
 
IN  witness whereof I herein have signed this Declaration/Affirmation this	day of	201____in presence of the following witnesses.

                                                         
</textarea>
<br><br><br>

			<span style="margin-left:+590px;font-size:40px;"><input name="color[]" type="checkbox"  value="green" /> <a href="#">
				<span style="color:#556267;font-size:20px;">I have read and understood the terms and privacy policy of site</span>
			</span>
<br><br><br>
			<center><input type="submit" name="submit" id="submit" value="Register" class="button-secondary" ></center><br><br><br>
	<div  style="color:#3A5795;">
		<footer>
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy; 2015 <strong>Hamara Life</strong>  <a href="#" target="_blank"></a><br><br><br>
		</footer>
		</div>
	</div>
	
	
	
	
</div>


	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-login.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>