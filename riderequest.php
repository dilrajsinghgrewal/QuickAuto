<?php
session_start();
include "connect.php";

if(isset($_POST['requestRide']))
$ploc = $_POST['pickup'];
$dloc = $_POST['drop'];
$email=$_SESSION['email'];
$checkEmail="SELECT * From avarides where studentemail='$email'";
$result=$conn->query($checkEmail);
 if($result->num_rows>0){
    echo"You have already requested a ride.";
 }else{
    $insertquery="insert into avarides(ploc,dloc, studentemail)values('$ploc','$dloc','$email')";
    if($conn->query($insertquery)==TRUE){
        echo"ride requested";  
    }
}

?>