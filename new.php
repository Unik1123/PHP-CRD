<?php
require"conn.php";
 if(isset($_POST["submit"])){
$fname= $_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"]; 
$sql="INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`) VALUES (NULL,'$fname','$lname','$email')";
$result=mysqli_query($conn,$sql);
if($result){
 header("Location: index.php?msg=Data Inserted Sucessfully");


}


}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-dark justify-content-center fs-3 mb-5 " style="background-color: #00ff5573;">
        PHP CRUD
    </nav>
    <div class="container">
        <div class="text-center mb-3 ">
            New Users
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width: 100%;">
          <div class="row">
            <div class="col">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
                <br>
            </div>

            <div>
                <button class="btn btn-success " name="submit">Submit</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
          </div>       
        
        
        </form>
        </div>
    </div>
</body>
</html>