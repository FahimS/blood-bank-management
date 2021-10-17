<!DOCTYPE html>
<html>
<head>
	<title>Blood Donation System</title>
	

	<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:2200,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

	<style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	}

	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	}

	tr:nth-child(even) {
	    background-color: #dddddd;
	}
	</style>

</head>
<body>
	<div class="head templete clear">
		<marquee behavior=alternate ><h3>Do you want to become a blood donor?</h3></marquee>

			<a style="text-decoration: none;" href="registration.php"><p><input type="submit" name="submit" value="Register"/></p></a>
	</div>

		



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
			<a href="index.php">Home</a>
		</li>
		<li>
			<a href="about.php">About</a>
		</li>
		<li>
			<a href="contact.php">Contact</a>
		</li>
		<li>
			<a href="blood_bank.php">Blood Banks</a>
		</li>
		<li>
			<a href="blood_camp.php">Blood Donation Camps</a>
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
			<a href="admin_login.php">Login</a>
		</li>
			
	</ul>

</div>



<div class="slidersection templete clear">
	 <div id="slider">
            <a href="#"><img src="image/slideshow/Untitled-1.jpg" alt="nature 1" title="350ml Blood Can Save precious 4Lives." /></a>
            <a href="#"><img src="image/slideshow/Untitled-2.jpg" alt="nature 2" title="Can I Donate Blood." /></a>
            <a href="#"><img src="image/slideshow/Untitled-3.jpg" alt="nature 3" title="Availabe Blood Donation." /></a>
            <a href="#"><img src="image/slideshow/Untitled-4.jpg" alt="nature 4" title="Nearby Camps On Your Area." /></a>
            <a href="#"><img src="image/slideshow/Untitled-5.jpg" alt="nature 4" title="Donate Blood, Save Life." /></a>
            
        </div>
</div>



<div class="welcome templete clear">

	<h3>Wlcome to UAP Blood Bank Management Sytem</h3>
	<p>Hi everyone!,

	I have attached simple blood bank management system. <br>The pupose of this system is to donate and request blood online, manage entire donor and request blood details.</p>
	
</div>


<div class="searchsection templete clear">
	<div class="searchhead emplete clear">
		<h2>Search Blood</h2>

	</div>

	<div class="searchbox templete clear" name="sb">
		<!-- <p>Blood Group:</p> -->
		<form action="" method="POST">
			<input type="text" placeholder="Enter Your Blood Group" class="search" name="bgroup">
			<button class="searchbutton" type="submit" name="search">&#128269;</button>
		</form>
	</div>

	<?php
	 	require_once('connect.php');
		if(isset($_POST['search']))
		{
			$sb=$_POST['bgroup'];
			$q1="select * from user";
		}else{
			$sb = '';
		}
	?>

	<div class="searchtable templete clear">
		<table border="1">

		<thead>
			<tr class="attributes templete clear">
				<th>Name</th>
				<th>Blood Group</th>
				<th>Gender</th>
				<th>Last Date of Donate</th>
				<th>Contact</th>
				<th>Adress</th>

			</tr>
		</thead>
		<tbody>

			<?php
				global $q1, $sb;
				$run=mysqli_query($conn, "select * from user where bgroup='$sb'");
				while($row=mysqli_fetch_array($run))
				{
					$bd=$row['bgroup'];
				?>
					<tr class="data templete clear">
						<td><?=$row['name']?></td>
						<td><?=$row['bgroup']?></td>
						<td><?=$row['gender']?></td>
						<td><?=$row['ddate']?></td>
						<td><?=$row['mobile']?></td>
						<td><?=$row['address']?></td>
						
					</tr>
				<?php
				}

			?>

		</tbody>
		
		
	</table>
	</div>



</div>

<div class="contensection templete clear">
 		<div class="service1 clear">
 			<h2>Donate Blood</h2>
 			<img src="image/b1.jpg">
 			<p>
 				Most blood transfusions go very smoothly. Some infectious agents, such as HIV, can survive in blood and infect the person receiving the blood transfusion. To keep blood safe, blood banks carefully screen donated blood. The risk of catching a virus from a blood transfusion is low.

				Sometimes it is possible to have a transfusion of your own blood. During surgery, you may need a blood transfusion because of blood loss. 
 			</p>
 			
 		</div>

 		

 		<div class="service3 clear">
 			<h2>Give Blood</h2>
 			<img src="image/b7.jpg">
 			<p>
 				Today in the developed world, most blood donors are unpaid volunteers who donate blood for a community supply. In some countries, established supplies are limited and donors usually give blood when family or friends need a transfusion (directed donation). Many donors donate as an act of charity, but in countries that allow paid donation some donors are paid.
 			</p>
 			
 		</div>

 		<div class="service2 clear">
 			<h2>Donate Blood, Save Lifes</h2>
 			<img src="image/b8.jpg">
 			<p>
 				To save a life, you don’t need to move a muscle. By donating just one unit of blood, you can save three lives and the apt day would be World Blood Donor Day, Friday (June 14).

				Doctors say donating blood not only saves the life of the recipient but also of the donor, whose blood is screened for fatal infections such as HIV and Hepatitis C before being transfused to a patient.
 			</p>
 			
 		</div>

 	</div>

<div class="searchsection templete clear">
	
</div>

<div class="relatedpost clear">
				<h2>Gallery</h2>
				
				<a href="#"><img src="image/blood_donor.jpg" alt="Related Post"/></a>
				<a href="#"><img src="image/ddd.jpg" alt="Related Post"/></a>
				<a href="#"><img src="image/Blood-Donation-2.jpg" alt="Related Post"/></a>
				<a href="#"><img src="image/aaa.jpg" alt="Related Post"/></a>
				<a href="#"><img src="image/image-4337-800.jpg" alt="Related Post"/></a>
				<a href="#"><img src="image/ppp.jpg" alt="Related Post"/></a>
				<a href="#"><img src="image/plasma-donate-1000x667.jpg" alt="Related Post"/></a>
				<a href="#"><img src="image/ggg.jpg" alt="Related Post"/></a>
				
</div>

<div class="footertop clear">
		<div class="samefooter clear">
			<h2>Reach Us</h2>
			<p><Strong>Address:</Strong></p>
			<p>University of asia Pacific</p>
			<p>GreenRoad,</p>
			<p>Farmget,</p>
			<p>Dhaka-1204,</p>
			<p>Bangladesh.</p>
			
			
		</div>
		<div class="samefooter clear">
			
			
		</div>
		<div class="samefooter clear">
			<h2>Contact Us</h2>
			<p><strong>Phone:</strong> +888-3252155</p>
			<p><strong>Mobile:</strong> 01989931659</p>
			<p><strong>Email:</strong> fahim.cse.uap@gmail.com</p>
			
		</div>
		<div class="bloodbanksocial">
		<a target="_blank" href="http://www.facebook.com/groups/uapbloodbank/"><i class="fab fa-facebook-f"></i></a>
		<a target="_blank" href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
		<a target="_blank" href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
		<a target="_blank" href="http://www.google.com"><i class="fab fa-google-plus-g"></i></a>
		
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

		
		<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow23.js"></script>


</body>
</html>