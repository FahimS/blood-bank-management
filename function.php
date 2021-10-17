<?php
$conn =mysqli_connect("localhost","root","","blood") or die (mysql_error());

function blood_bnk(){

global $conn;
$i=0;
$query= "select * from blood_bank";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
         $i++;
        
    $address=$row['address'];
    $blood_bank=$row['blood_bank'];
    $institution=$row['institution'];
    $contact=$row['contact'];
    $mail=$row['mail'];

    
        
        echo "<tr>
        <td>$i</td>
        <td>$address</td>
        <td>$blood_bank</td>
        <td>$institution</td>
        <td>$contact</td>
        <td>$mail</td>
        </tr>";
        
    }
    
}


?>
