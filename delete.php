<?php
require"conn.php";
$id=$_GET['id']; 
$del="DELETE FROM crud WHERE id=$id";
$result=mysqli_query($conn,$del);
if($result){
header("Location: index.php?msg=User Deleated Sucessfully");



}






?>