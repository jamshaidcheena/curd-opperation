<?php 
$server="localhost";
$user="root";
$password="";
$dbconnection="curdmysql";
$con=mysqli_connect($server,$user,$password,$dbconnection);

$id=$_GET['id'];
$selectqyery="select * from signup where id=$id";
$query=mysqli_query($con,$selectqyery);
$result=mysqli_fetch_assoc($query);

if(isset($_POST['submit']))
{
	$FirstName=mysqli_real_escape_string($con,$_POST['FirstName']);
	$LastName=mysqli_real_escape_string($con,$_POST['LastName']);
	$UserName=mysqli_real_escape_string($con,$_POST['UserName']);
	$PhoneNo=mysqli_real_escape_string($con,$_POST['PhoneNo']);
	$Email=mysqli_real_escape_string($con,$_POST['Email']);
	$Password=mysqli_real_escape_string($con,$_POST['Password']);
	$ConfirmPassword=mysqli_real_escape_string($con,$_POST['ConfirmPassword']);

	$updatequery="update signup set id='$id',FirstName='$FirstName',LastName='$LastName',UserName='$UserName',PhoneNo='$PhoneNo',Email='$Email',Password='$Password',ConfirmPassword='$ConfirmPassword' where id=$id ";
	$query=mysqli_query($con,$updatequery);
	if($query)
	{
		?>
		<script>
			alert("Update Data Successful");
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Not Updated Data!");
		</script>
		<?php
	}
}

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

    <title>update form</title>
  </head>
  <body>
  	<!-------------- signuppage ------------------>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="card-title lead text-center">
            update Your Account
          </div>
          <hr class="mb-5">
          <form method="POST" action="">
            <div class="form-group">
              <i class="fa fa-user cust" aria-hidden="true"></i>
              <input type="text" class="form-control" name="FirstName"placeholder="First Name"  required value="<?php echo $result['FirstName']; ?>">
              </div>
              <div class="form-group">
                <i class="fa fa-user cust" aria-hidden="true"></i>
              <input type="text" class="form-control" name="LastName" placeholder="Last Name" required value="<?php echo $result['LastName']; ?>">
            </div>
            <div class="form-group">
              <i class="fa fa-user cust" aria-hidden="true"></i>
              <input type="text" class="form-control" name="UserName" placeholder="UserName" required value="<?php echo $result['UserName']; ?>">
            </div>
            <div class="form-group">
              <i class="fa fa-phone cust" aria-hidden="true"></i>
              <input type="phoneno" class="form-control" name="PhoneNo" placeholder="PhoneNo" required value="<?php echo $result['PhoneNo']; ?>">
            </div>
            <div class="form-group">
              <i class="fa fa-envelope cust" aria-hidden="true"></i>
              <input type="email" class="form-control" name="Email" placeholder="Email" required value="<?php echo $result['Email']; ?>">
            </div>
            <div class="form-group">
              <i class="fa fa-unlock-alt cust" aria-hidden="true"></i>
              <input type="password" class="form-control" name="Password" placeholder="Password" required value="<?php echo $result['Password']; ?>">
            </div>
              <div class="form-group">
                <i class="fa fa-unlock-alt cust" aria-hidden="true"></i>
              <input type="password" class="form-control" name="ConfirmPassword" placeholder="Confirm Password" required value="<?php echo $result['ConfirmPassword']; ?>">
            </div>
            <div><button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in sign" aria-hidden="true"></i>update</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <a href="select.php">Check Form</a>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>