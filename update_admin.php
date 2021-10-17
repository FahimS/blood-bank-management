


<?php
//Database Connection
$conn =mysqli_connect("localhost","root","","blood") or die (mysql_error());
//Get ID from Database
if(isset($_GET['edit_id'])){
  $sql = "SELECT * from add_admin WHERE id =" .$_GET['edit_id'];
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
  $name=$_POST['name'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $bgroup=$_POST['bgroup'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];
  
  $update = "UPDATE add_admin SET name='$name', username='$username' , email='$email' , password='$password' , gender='$gender' , bgroup='$bgroup' , mobile='$mobile' , address='$address' WHERE id=". $_GET['edit_id'];
  $up = mysqli_query($conn, $update);
  if(!isset($sql)){
    die ("Error $sql" .mysqli_connect_error());
  }
  else
  {
    header("location: view_admin.php");
  }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>View Blood Camp</title>

    <link rel="stylesheet" href="../../assets/css/w3.css">
    <link rel="stylesheet" href="../../assets/css/style-main.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-v3.3.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome/css/all.css">
    <link rel="stylesheet" href="../../assets/css/style-info.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    

</head>

<body>

<!-- Sidebar -->

<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%;top: 0;background-color: #989898 !important;color: #fff !important;font-size: 18px;">
   <a style="text-decoration: none;" href="dash.php"><h3 class="bbb" style="height: 8.5%;color: #fff;font-weight: bold;font-size: 24px;border: 2px solid;border-radius: 5px;text-align: center;margin-left: 5px;margin-right: 5px;padding: 5px 0px 0px 0px;background: #B22222;">UAP BLOOD BANK</h3></a>
  <a href="add_admin.php" class="w3-bar-item w3-button">Add Admin</a>
  <a id="active" href="view_admin.php" class="w3-bar-item w3-button">View Admin</a><br>

  <a href="view_donor.php" class="w3-bar-item w3-button">View Donor</a><br>

  <a href="add_venue.php" class="w3-bar-item w3-button">Add Venue</a>
  <a href="view_venue.php" class="w3-bar-item w3-button">View Venue</a><br>

    <a href="add_bank.php" class="w3-bar-item w3-button">Add Blood Bank</a>
  <a href="view_bank.php" class="w3-bar-item w3-button">View Blood Bank</a><br><br><br><br>

  <a style="text-decoration: none;" href="index.php"><h3 class="bbb" style="height: 8.5%;color: #fff;font-weight: bold;font-size: 24px;border: 2px solid;border-radius: 5px;text-align: center;margin-left: 5px;margin-right: 5px;padding: 5px 0px 0px 0px;background: #B22222;">Go Home</h3></a>

</div>

<!-- ............content.......... -->
<div style="margin-left:20%">

<div class="dhead">
  <h1>Admin Pannel</h1>
</div>

<div class="col-md-10 col-md-offset-1 form-style"  style="background:#C8C8C8; margin-top: -10px;">
<div class="col-md-10 col-md-offset-1" style="margin-left: 120px;">
<form id="edit_form" role="form" data-toggle="validator" method="post" class="form-horizontal">
<div class="row">
 <div class="form-group">


<label for="name" class="control-label col-sm-3">Name:</label>
 <div class="col-sm-8">
<input id="num" type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $row['name']; ?>">

     </div>
    </div>
    
    <div class="form-group">
<label for="username" class="control-label col-sm-3">Username:</label>
 <div class="col-sm-8">
<input id="num" type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['username']; ?>">

     </div>
    </div>


    <div class="form-group">

 <label for="email" class="control-label col-sm-3">Email:</label>
 <div class="col-sm-8">
 
<input id="num" type="text" class="form-control" name="email" placeholder="email" value="<?php echo $row['email']; ?>">

    </div>
    </div>

 <div class="form-group">
 
<label for="password" class="control-label col-sm-3">Password:</label>
<div class="col-sm-8">
<input id="num" type="password" class="form-control"  name="password" placeholder="Password" value="<?php echo $row['password']; ?>">
     </div>
    </div>




<div class="form-group">

<label for="gender" class="control-label col-sm-3">Gender:</label>

  <div class="col-sm-8">
  
  <select id="num" class="form-control" name="gender" value="<?php echo $row['gender']; ?>">

<option>Male</option>
<option>Female</option>
                            
</select>
</div>
</div>



    
    
<div class="form-group">

<label for="bgroup" class="control-label col-sm-3">Blood Group:</label>
<div class="col-sm-8">

<select id="num" class="form-control" name="bgroup" value="<?php echo $row['bgroup']; ?>">

<option>AB+</option>
<option>B-</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>

</select>
</div>
</div>



  


<div class="form-group">
<label for="mobile" class="control-label col-sm-3">Mobile:</label>
<div class="col-sm-8">

<input id="num" type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $row['mobile']; ?>">

    </div>
    </div>




<div class="form-group">
<label for="addr" class="control-label col-sm-3">Address:</label>

<div class="col-sm-8">


<textarea id="text" class="form-control" name="address" cols="8" rows="6" required><?php echo $row['address'];?></textarea>
    </div>
    </div>
    
    <div class="form-group">
                   
                    <input id="subb" type="submit" name="btn-update" value="Update" class="btn btn-success col-md-offset-4 col-sm-offset-4 col-xs-offset-2" onClick="update()"/>
                    
                    
                    <!-- <input type="button" value="Clear" class="btn btn-primary col-md-offset-3 col-sm-offset-3 col-xs-offset-3" onclick="reset_btn()"/> -->
                    
                </div>
                
                

    </div>
    </form>
    </div>
</div>



<!-- Alert for Updating -->
<script>
function update(){
  var x;
  if(confirm("Updated data Sucessfully") == true){
    x= "update";
  }
}
</script>

<script>
    
function reset_btn() {
    document.getElementById("edit_form").reset();
}
</script>

</div>

<div class="update_footersection templete clear">
    
    <p>&copy; 2018 Online Blood Bank Management Sytem.</p>
    <p>All Rights Reserved by Fahim Shahriar</p>

    <div class="social4">
                <a target="_blank" href="https://www.facebook.com"><img src="images/f.png" alt="Facebook "/></a>
                <a target="_blank" href="http://www.twitter.com"><img src="images/t.png" alt="Twitter "/></a>
                <a target="_blank" href="http://www.linkedin.com"><img src="images/l.png" alt="Linkedin "/></a>
                <a target="_blank" href="http://www.google.com"><img src="images/g.png" alt="Googleplus "/></a>
            </div>
</div>



      
</body>
</html>





