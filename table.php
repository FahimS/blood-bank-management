<table style="width:800px; margin:auto; padding:5px;" border="10">
   <tr><th colspan="20"><h1>Student Info</h1></th></tr>
   <tr>
       <td><h2>Student ID</h2></td>
              <td><h2>Student Name</h2></td>
              <td><h2>Student Address</h2></td>
              <td><h2>Contact</h2></td>
              

   </tr>
   
    <?php
include('connect.php');

$query = "SELECT * FROM blood_bank";
    $result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
    
    echo "<tr>";
    echo"<td>".$row['address']."</td>";
     echo"<td>".$row['blood_bank']."</td>";
    echo"<td>".$row['institution']."</td>";
    echo"<td>".$row['contact']."</td>";
    echo "</tr>";
}
?>
</table>