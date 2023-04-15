<?php

include "config.php";
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="SELECT * FROM `users` WHERE `status`='approved' AND `email`='$email' AND `password`='$pass' ";
$result=mysqli_query($connection,$sql);
$num = mysqli_num_rows($result);
// print_r($num);die();
if($num>0)
{
    // print_r($num);die();
    echo true;
}
else{
    echo false;
}

?>