<?php
include '../config.php';
$result=mysqli_query($con,"INSERT INTO work_created (SNO, OSN, WSN, product, product_quantity, which_line, date_of_start, Deadline_date, materials_required, raw_pick_up, link_order) VALUES ('".$_GET['d11']."','".$_GET['d9']."','".$_GET['d10']."','".$_GET['d1']."','".$_GET['d2']."','".$_GET['d3']."','".$_GET['d4']."','".$_GET['d5']."','".$_GET['d6']."','".$_GET['d7']."','".$_GET['d12']."')");
if (!$result) {
    die('Invalid query: ' . mysqli_error($con));
}
?>


<html>
<head>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<title>Admin | Accenture</title>
</head>
<body>
	<div style="height:150px; background-color:grey;">
		<h1 style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">HEADER</h1>
	</div>
	work-order has been created.
	u can see it at the following link : <br>
	<?php $hre="http://localhost/acc/work_orders/".$_GET['d9'].".pdf";?>
	<a href="<?php echo $hre;?>">link</a>
	<form action="login.php" method="GET">
	<input style="margin-left:50px;" type="submit" name="submit" value="Go back Home"><br><br>
	</form>  
	
	<div style="height:150px; background-color:grey;">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">FOOTER</p>
	</div>
</body>
</html>