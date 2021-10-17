<?php
	include 'connect.php';
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from user where username='$username' and password='$password';";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
        
    {
    header("location:profile.php");
    }
    
    else{
        
    echo "<script>alert('User not found! Registration First!!!')</script>";
        echo"<script>window.open('login.php','_self')</script>";
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
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
			<a id="active" href="login.php">Login</a>
		</li>
			
	</ul>

</div>

		<div class="title templete clear">
			<h1>Sign In Form</h1>
		</div>
		
		<div class="container templete clear">
			<div class="left templete clear"></div>
			<div class="right templete clear">
				<div class="formbox templete clear">
					<form action="login.php" method="post">
						<p>Username</p>
						<input type="text" name="username" placeholder="Username" required>
						<p>Password</p>
						<input type="password" name="password" placeholder="Password" required>
						<input type="submit" name="login" value="Sign In" >
						
					</form>
				</div>
			</div>
			
		</div>


		<div class="footersection templete clear">
    
    <p>&copy; 2018 Online Blood Bank Management Sytem.</p>
    <p>All Rights Reserved by Fahim Shahriar</p>

    <div class="social2">
                <a target="_blank" href="https://www.facebook.com"><img src="images/f.png" alt="Facebook "/></a>
                <a target="_blank" href="http://www.twitter.com"><img src="images/t.png" alt="Twitter "/></a>
                <a target="_blank" href="http://www.linkedin.com"><img src="images/l.png" alt="Linkedin "/></a>
                <a target="_blank" href="http://www.google.com"><img src="images/g.png" alt="Googleplus "/></a>
            </div>
</div>

	

</body>

</html>