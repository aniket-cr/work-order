<html>
<script src="../js/jquery-latest.js"></script>
<body>
<?php
include '../config.php';
$result1=mysqli_query($con,"DELETE FROM `work_confirmed` WHERE OSN='".$_POST['osn_no2']."' ") or die("Error: ".mysqli_error($con));
$result=mysqli_query($con,"DELETE FROM `work_created` WHERE OSN='".$_POST['osn_no2']."' ") or die("Error: ".mysqli_error($con));



echo "Welcome";
	echo "<form action='login.php' method='POST' id='hi'>";
	echo "<input type='hidden' name='admin_name' value='". $_POST['admin']. "'>";
	echo "<input type='submit' >";
?>
</body>
	<script type="text/javascript">
$( document ).ready(function() {

document.getElementById('hi').submit();
});
</script>
</html>