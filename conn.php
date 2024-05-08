<?php 
$host="localhost";
$name= "root";
$pass="";
$db="crud";
$conn=mysqli_connect($host,$name,$pass,$db);
if(!$conn){
echo"Error". mysqli_connect_error(); 
}



?>