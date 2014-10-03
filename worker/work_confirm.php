<?php
include '../config.php';
$result=mysqli_query($con,"select count(*) as c from work_confirmed where OSN ='".$_POST['osn_no']."' ") or die("Error: ".mysqli_error($con));
	$row = mysqli_fetch_array($result)  or die('Error, query failed1');

	$result2=mysqli_query($con,"select * from work_created where OSN ='".$_POST['osn_no']."' ") or die("Error: ".mysqli_error($con));
	$row2 = mysqli_fetch_array($result2)  or die('Error, query failed3');
	$sno=$row['c']+1;

$raw="";
if ($_POST['r11']!=null)
$raw=$raw."<br>1. ".$_POST['r11']." ".$_POST['r12'].$_POST['r13'];
if ($_POST['r21']!=null)
$raw=$raw."<br>2. ".$_POST['r21']." ".$_POST['r22'].$_POST['r23'];
if ($_POST['r31']!=null)
$raw=$raw."<br>3. ".$_POST['r31']." ".$_POST['r32'].$_POST['r33'];
if ($_POST['r41']!=null)
$raw=$raw."<br>4. ".$_POST['r41']." ".$_POST['r42'].$_POST['r43'];
if ($_POST['r51']!=null)
$raw=$raw."<br>5. ".$_POST['r51']." ".$_POST['r52'].$_POST['r53'];


$result1=mysqli_query($con,"INSERT INTO work_confirmed (SNO, OSN, WSN, confirmation_date, product_quantity, raw_consumed, product_pickup) VALUES ('".$sno."','".$row2['OSN']."','".$row2['WSN']."','".$_POST['a4']."','".$row2['product_quantity']."','".$raw."','".$_POST['a5']."')");
if (!$result1) {
    die('Invalid query: ' . mysqli_error($con));
    }
    $result3=mysqli_query($con,"UPDATE work_created SET confirmed=1 WHERE OSN = '".$_POST['osn_no']."'");
if (!$result3) {
    die('Invalid query: ' . mysqli_error($con));
}

?>

<html>
<head>
<script src="../js/jquery-latest.js"></script>
<h1>The Order has been confirmed</h1>
</head>
<body>


</body>
</html>