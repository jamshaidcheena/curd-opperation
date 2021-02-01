<?php
$server="localhost";
$user="root";
$password="";
$dbconnection="curdmysql";
$con=mysqli_connect($server,$user,$password,$dbconnection);



$id=$_GET['ids'];
$deletequery="delete from signup where id='$id'";
$query=mysqli_query($con,$deletequery);
if($query)
{
	?>
	<script>
		alert("deleted successful");
		location.replace("select.php");
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("Not deleted successful");
	</script>
	<?php
}
?>