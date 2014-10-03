<html>
<script src="js/jquery-latest.js"></script>
<body>
<?php
$IP="localhost";
$user="root";
$pass="oldtrafford";
$db="acc";
$con=mysqli_connect($IP,$user,$pass,$db);
if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
$result=mysqli_query($con,"select count(*) as c from admins where ID='".$_POST['id']."' and pass='".$_POST['pass']."' ") or die("Error: ".mysqli_error($con));

$row = mysqli_fetch_array($result)  or die('Error, query failed');

if ($row['c']==1)
{
$result=mysqli_query($con,"select * from admins where ID='".$_POST['id']."' and pass='".$_POST['pass']."' ") or die("Error: ".mysqli_error($con));
$row = mysqli_fetch_array($result)  or die('Error, query failed');
	echo "Welcome";
	echo "<form action='admin/login.php' method='POST' id='hi'>";
	echo "<input type='hidden' name='admin_name' value='". $_POST['id']. "'>";
	echo "<input type='submit' >";
}
else
{
	echo "HI";
	echo "<form action='index.php' id='hi'>";

	echo "<input type='submit' >";
	
}

?>
</body>
<script type="text/javascript">
$( document ).ready(function() {

document.getElementById('hi').submit();
});
</script>
</html>