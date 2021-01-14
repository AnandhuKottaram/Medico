<?php
include ('include/config.php');
session_start();

    $id=$_SESSION['id'];
$sql="DELETE from `doc_reg` where  id ='$id' ";
$res=mysqli_query($con,$sql);
if($res)
{
    header('location:doctorlist.php');
}

?>