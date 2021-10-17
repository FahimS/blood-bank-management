


<?php
//Database Connection
$conn =mysqli_connect("localhost","root","","blood") or die (mysql_error());
//Get ID from Database
if(isset($_GET['edit_id'])){
  $sql = "SELECT * from blood_bank WHERE id =" .$_GET['edit_id'];
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
  $blood_bank=$_POST['blood_bank'];
  $institution=$_POST['institution'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $address=$_POST['address'];

  
  $update = "UPDATE blood_bank SET blood_bank='$blood_bank', institution='$institution' , mobile='$mobile' , email='$email' , address='$address' WHERE id=". $_GET['edit_id'];
  $up = mysqli_query($conn, $update);
  if(!isset($sql)){
    die ("Error $sql" .mysqli_connect_error());
  }
  else
  {
    header("location: view_bank.php");
  }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>View Blood Bank</title>

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
  <a href="view_admin.php" class="w3-bar-item w3-button">View Admin</a><br>

  <a href="view_donor.php" class="w3-bar-item w3-button">View Donor</a><br>

  <a href="add_venue.php" class="w3-bar-item w3-button">Add Venue</a>
  <a href="view_venue.php" class="w3-bar-item w3-button">View Venue</a><br>

    <a href="add_bank.php" class="w3-bar-item w3-button">Add Blood Bank</a>
  <a id="active" href="view_bank.php" class="w3-bar-item w3-button">View Blood Bank</a><br><br><br><br>

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


<label for="blood_bank" class="control-label col-sm-3">Blood Bank:</label>
 <div class="col-sm-8">
<input id="num" type="text" class="form-control" name="blood_bank" placeholder="Name" value="<?php echo $row['blood_bank']; ?>">

     </div>
    </div>
    
    <div class="form-group">
<label for="institution" class="control-label col-sm-3">Institution Name:</label>
 <div class="col-sm-8">
<input id="num" type="text" class="form-control" name="institution" placeholder="Username" value="<?php echo $row['institution']; ?>">

     </div>
    </div>


    <div class="form-group">
<label for="mobile" class="control-label col-sm-3">Contact:</label>
<div class="col-sm-8">

<input id="num" type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $row['mobile']; ?>">

    </div>
    </div>


    <div class="form-group">

 <label for="email" class="control-label col-sm-3">Email:</label>
 <div class="col-sm-8">
 
<input id="num" type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email']; ?>">

    </div>
    </div>




<div class="form-group">
<label for="address" class="control-label col-sm-3">Address:</label>

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





