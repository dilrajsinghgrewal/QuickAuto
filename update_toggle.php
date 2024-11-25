<?php
session_start();
include "connect.php";

if(isset($_POST['not'])){
    $email=$_SESSION['email'];
        $sql="UPDATE drivers SET availability='0' WHERE email='$email'";
        $result=$conn->query($sql);
     header("Location: driver_page.php");
}
if(isset($_POST['ava'])){
    $email=$_SESSION['email'];
        $sql="UPDATE drivers SET availability='1' WHERE email='$email'";
        $result=$conn->query($sql);
     header("Location: driver_page.php");
     
}
?>