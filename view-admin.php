


<?php
$conn =mysqli_connect("localhost","root","","blood") or die (mysql_error());
?>


<!DOCTYPE html>
<html>
<head>
    <title>View Blood Camp</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%;top: 0;background-color: #75E3FF;">
   <h3 class="bbb" style="height: 8.5%;color: #B22222;font-weight: bold;">UAP BLOOD BANK</h3>
<a href="add_admin.php" class="w3-bar-item w3-button">Add Admin</a>
  <a href="view_admin.php" class="w3-bar-item w3-button">View Admin</a><br>

  <a href="view_donor.php" class="w3-bar-item w3-button">View Donor</a><br>

  <a href="add_venue.php" class="w3-bar-item w3-button">Add Venue</a>
  <a href="view_venue.php" class="w3-bar-item w3-button">View Venue</a><br>

    <a href="add_bank.php" class="w3-bar-item w3-button">Add Blood Bank</a>
  <a href="view_bank.php" class="w3-bar-item w3-button">View Blood Bank</a>

</div>

<!-- Page Content -->
<div style="margin-left:20%">

<div class="dhead">
  <h1>Admin Pannel</h1>
</div>

<!-- .............content here.............. -->

     <div class="view_admin_bloodbank">
        <h2>View Admin</h2>
                <table class="bloodtable">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Paassword</th>
                                                <th>Gender</th>
                                                <th>Blood Group</th>
                                                <th>Mobile Nub</th>
                                                <th>Address</th>
                                                <th colspan="2" style="text-align:center">Operation</th>
                                            </tr>
                                        </thead>
<tbody> 
<?php
$i=0;
$query= "select * from add_admin";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
         $i++;
        
    $name=$row['name'];
    $username=$row['username'];
    $email=$row['email'];
    $password=$row['password'];
    $gender=$row['gender'];
    $bgroup=$row['bgroup'];
    $mobile=$row['mobile'];
    $address=$row['address'];


    
        
        echo "<tr>
        <td>$i</td>
        <td>$name</td>
        <td>$username</td>
        <td>$email</td>
        <td>$password</td>
        <td>$gender</td>
        <td>$bgroup</td>
        <td>$mobile</td>
        <td>$address</td>
        <td ><a href='google.com' title='Update'><img src='../../assets/images/update.png' /></a></td>
        <td ><a href='?view-subjects&opr=del&rs_id=<?php echo $row['sub_id'];?>' title='Delete'><img src='../../assets/images/delete.png' /></a></td>

        </tr>";
        
    }
     ?>
    </tbody>
      </table>
</div>

</div>

<div class="dash_footersection templete clear">
    
    <p>&copy; 2018 Online Blood Bank Management Sytem.</p>
    <p>All Rights Reserved by Fahim Shahriar</p>

    <div class="social3">
                <a target="_blank" href="https://www.facebook.com"><img src="images/f.png" alt="Facebook "/></a>
                <a target="_blank" href="http://www.twitter.com"><img src="images/t.png" alt="Twitter "/></a>
                <a target="_blank" href="http://www.linkedin.com"><img src="images/l.png" alt="Linkedin "/></a>
                <a target="_blank" href="http://www.google.com"><img src="images/g.png" alt="Googleplus "/></a>
            </div>
</div>
      
</body>
</html>





