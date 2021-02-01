<?php
$server="localhost";
$user="root";
$password="";
$dbconnection="curdmysql";
$con=mysqli_connect($server,$user,$password,$dbconnection);


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/signup.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>select form</title>
  </head>
  <body>
  	<!-------------- table ------------------>
  	<div class="container">
  	<table class="table">
  <thead class="thead-dark">
    <tr>
     <th scope="col">id</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">UserName</th>
      <th scope="col">PhoneNo</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">ConfirmPassword</th>
      <th colspan="2">Operation</th>
    </tr>
  </thead>
  <tbody>

<?php

$selectqyery="select * from signup";
$query=mysqli_query($con,$selectqyery);
while ($result=mysqli_fetch_assoc($query)) 
{
	?>
   <tr>
      <td><?php echo $result['id']; ?></td>
      <td><?php echo $result['FirstName']; ?></td>
      <td><?php echo $result['LastName']; ?></td>
      <td><?php echo $result['UserName']; ?></td>
      <td><?php echo $result['PhoneNo']; ?></td>
      <td><?php echo $result['Email']; ?></td>
      <td><?php echo $result['Password']; ?></td>
      <td><?php echo $result['ConfirmPassword']; ?></td>
      <td><a title="Update" href="updata.php?id=<?php echo $result['id']; ?>"><i class="fa fa-edit"></i></a></td>
      <td><a title="Trash" href="delete.php?ids=<?php echo $result['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
 <?php   
    }
?> 
  </tbody>
</table>
</div>
  	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>