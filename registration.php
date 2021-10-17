<?php
$conn =mysqli_connect("localhost","root","","blood") or die (mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registretion Form</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
</head>
<body>

	<div class="headersection templete clear"> 
	<div class="logo">
		<img src="images/Half Life.ico" alt="logo"/>
		<h2>UAP Blood Bank</h2>
		<p>Donate Blood, Save Life</p>
	</div> 

	<div class="social">
		<a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
		<a target="_blank" href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
		<a target="_blank" href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
		<a target="_blank" href="http://www.google.com"><i class="fab fa-google-plus-g"></i></a>
		<a target="_blank" href="http://www.youtube.com"><i class="fab fa-youtube"></i></a>
	</div>
</div>

<div class="navsection templete "> 
	<ul>
		<li>
			<a href="index.php"> Home</a></li>
		<li>
			<a href="about.php"> About</a></li>
		<li>
			<a href="contact.php"> Contact</a>
		</li>
		<li>
			<a href="blood_bank.php"> Blood Banks</a></li>
		<li>
			<a href="blood_camp.php"> Blood Donation Camps</a>
		</li>
		<li>
			<a href="news_event.php">News & Events</a>
		</li>
		
		<li>
			<a href="donor_data.php">Blood Donor</a>
		</li>
		<li>
			<a href="faq.php">Faq</a>
		</li>
		
		<li>
			<a href="admin_login.php">Login</a>
		</li>
			
	</ul>

</div>

	<div class="form templete clear">
		<h1>Registration Form</h1>
		

		<?php 
			if (isset($_POST['register'])) {
				$name = $_POST['name'];
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$ngender = $_POST['gender'];
				$bgroup = $_POST['bgroup'];
				$ddate = $_POST['ddate'];
				$mobile = $_POST['mobile'];
				$address = $_POST['address'];
				
				

				$sql = "INSERT into user(name,username,email,password,gender,bgroup,ddate,mobile,address) values('$name','$username','$email','$password','$ngender','$bgroup','$ddate','$mobile','$address')";
				$res = mysqli_query($conn, $sql);
				if ($res) {
					echo "<script>alert('Registration Successful')</script>";
        echo"<script>window.open('donor_data.php','_self')</script>";
				}else{
					echo "Registration fail!!!";
				}
			}
		?>

		<form method="post" action="">
			<label>Donor's Name:</label><br>
			<input type="text" name="name" id="num" placeholder="Enter Donor's First Name" required><br><br>
			<label>User name:</label><br>
			<input type="text" name="username" id="num" placeholder="User name" required><br><br>
			<label>Email:</label><br>
			<input type="email" name="email" id="num" placeholder="Enter Email" required><br><br>
			<label>Paassword:</label><br>
			<input type="password" name="password" id="num" placeholder="Enter Password" maxlength="10"><br><br>
			<!-- <label>Confirm Paassword:</label><br>
			<input type="password" name="cpassword" id="num" placeholder="Enter Confirm Password"><br><br> -->

			<label for="gender">Gender:</label><br>
                 <select aria-required="true" id="nm" name="gender" class="form-control required name">
                    <option>Male</option>
                    <option>Female </option>
                    <option>Others</option>
                 </select><br><br>


			<label for="blood_group" class="removeVerticalMargin">Blood Group &amp; Rh.Type:</label><br>
                <select aria-required="true" id="nm" name="bgroup" class="form-control required name">
                    <option>A+</option>
                    <option>B+</option>
                    <option>AB+</option>
                    <option>A-</option>
                    <option>B-</option>
                    <option>AB-</option>
                    <option>O+</option>
                    <option>O-</option>
                </select><br><br>

              <label>Previous Blood Donation Date:</label><br>
			<input type="date" name="ddate" id="num"><br><br>

			<label>Donor's Mobile Nub:</label><br>
			<input type="tel" name="mobile" placeholder="Enter Donor's Mobile Number" id="num"><br><br>
			<label>Donor's Address:</label><br>
			<textarea id="text" name="address" rows="5" cols="50" placeholder="Enter Donor's Address Here"></textarea><br><br>
			<input type="submit" name="register" id="sub" value="Submit"><br><br>

			
		</form>
		
	</div>

	<!-- ........................scroll button...................................... -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow36.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>

</body>
</html>


