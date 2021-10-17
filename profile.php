<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" href="style.css">
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
			<a id="active" href="index.php"> Home</a></li>
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
			<a href="news&event.php">News & Events</a>
		</li>
		
		<li>
			<a href="donor_data.php">Blood Donor</a>
		</li>
		<li>
			<a href="faq.php">Faq</a>
		</li>
		
		<li>
			<a href="login.php">Login</a>
		</li>
			
	</ul>

</div>

	<div class="form templete clear">
		<h1>User Profile</h1>

		<form method="post" action="">
			<label>Donor Name:</label><br>
			<input type="text" name="name" id="num" placeholder="Enter Donor's First Name"><br><br>
			<label>Email:</label><br>
			<input type="email" name="email" id="num" placeholder="Enter Email"><br><br>
			<label>Paassword:</label><br>
			<input type="password" name="password" id="num" placeholder="Enter Password" maxlength="10"><br><br>
			<label>Confirm Paassword:</label><br>
			<input type="password" name="cpassword" id="num" placeholder="Enter Confirm Password"><br><br>

			


			<label for="gender">Gender:</label><br>
                 <select aria-required="true" id="nm" name="gender" class="form-control required name">
                    <option value="MALE"><span>MALE</span>
                    </option><option value="FEMALE"><span>FEMALE</span></option>
                    <option value="OTHERS"><span>OTHERS</span></option>
                 </select><br><br>


			<label>Date of Birth:</label><br>
			<input type="date" name="bdate" id="num"><br><br>

			<label>Age:</label><br>
			<input type="tel" name="age" placeholder="Enter Donor's Age" id="num"><br><br>

			<label for="blood_group" class="removeVerticalMargin">Blood Group &amp; Rh.Type:</label><br>
                <select aria-required="true" id="nm" name="bgroup" class="form-control required name">
                    <option value="1">A Positive</option><option value="2">A Negative</option><option value="3">B Positive</option><option value="4">B Negative</option><option value="5">O Positive</option><option value="6">O Negative</option><option value="7">AB Positive</option><option value="8">AB Negative</option><option value="9">Bombay Group</option><option value="10">A1 Positive</option><option value="11">A1 Negative</option><option value="12">A1B Positive</option><option value="13">A1B Negative</option><option value="14">A2 Positive</option><option value="15">A2 Negative</option><option value="16">A2B Positive</option>
                </select><br><br>

			<label>Previous Blood Donation Date:</label><br>
			<input type="date" name="ddate" id="num"><br><br>

			<label for="option_for_donation" class="removeVerticalMargin">Option for Donation:</label><br>
                    <select aria-required="true" id="nm" name="option_for_donation" class="form-control required name">
                        <option value="1">Once in 3 months</option>
                        <option value="2">Once in 6 months</option>
                        <option value="3">Once in 12 months</option>
                    </select><br><br>

			<label>Donor's Mobile Nub:</label><br>
			<input type="tel" name="mobile" placeholder="Enter Donor's Mobile Number" id="num"><br><br>

			<label for="district" class="removeVerticalMargin">District:</label><br>
                <select aria-required="true" id="nm" name="district" class="form-control required name">
                    <option value="203">Dhaka</option><option value="65">Jessore</option><option value="238">Manikgonj</option><option value="77">Khulna</option><option value="94">Jhenidah</option><option value="190">Comilla</option><option value="127">Barisal</option><option value="187">Chittagong</option><option value="28">Sylhet</option><option value="73">Rajshahi</option><option value="106">Vhola</option><option value="142">Rongpur</option><option value="232">B.Baria</option><option value="226">Satkhira</option><option value="233">Bharatpur</option><option value="138">Bharuch</option><option value="222">Bhojpur</option><option value="143">Bhuj</option><option value="84">Bihar</option><option value="211">Bogalur</option><option value="148">Bokaro</option><option value="224">Buxar</option><option value="107">Calicut</option><option value="155">Chamrajnagar</option><option value="1">Chennai</option><option value="122">Chittikulam</option> 
                </select><br><br>

			<label>Donor's Address:</label><br>
			<textarea id="text" name="address" rows="5" cols="50" placeholder="Enter Donor's Address Here"></textarea><br><br>
			<input type="submit" name="submit" id="sub" value="Update">
		</form>
		
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow23.js"></script>

</body>
</html>


