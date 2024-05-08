
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
<a href="new.php" class="btn btn-dark mb-3 ">Add New User</a>
<table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
require "conn.php";
$sql = "SELECT * FROM `crud`"; // Corrected SQL query with backticks
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) { // Corrected while loop
?>
<tr>
    <th scope="row"><?php echo $row['id']?></th>
    <td><?php echo $row['first_name']?></td>
    <td><?php echo $row['last_name']?></td>
    <td><?php echo $row['email']?></td>
    <td><a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash"></i></a></td>
</tr>
<?php
}
?>

    
  </tbody>
</table>
    </div>
</body>
</html>