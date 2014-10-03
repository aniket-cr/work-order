<?php
include '../config.php';

	$result=mysqli_query($con,"select * from work_confirmed where OSN ='".$_POST['osn_no']."' ") or die("Error: ".mysqli_error($con));
	$row = mysqli_fetch_array($result)  or die('Error, query failed3');

	$result1=mysqli_query($con,"select * from work_created where OSN ='".$_POST['osn_no']."' ") or die("Error: ".mysqli_error($con));
	$row1 = mysqli_fetch_array($result1)  or die('Error, query failed3');

	$result2=mysqli_query($con,"select * from workers where WSN ='".$row1['WSN']."' ") or die("Error: ".mysqli_error($con));
	$row2 = mysqli_fetch_array($result2)  or die('Error, query failed3');

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
	<br><br><p style="font-size: 30px;margin-left:300px;">Confirmed order details : </p>
		<div id='container'>
  		<div class='signup' style="margin-left: 100px;">
		<!--<form action="create_confirm.php" method="GET">--><br>

		<p style="text-align: left;margin-left: 80px;"><b>Assigned to</b> : <?php echo $row2['ID'];?></p>
		<p style="text-align: left;margin-left: 80px;"><b>Product</b> : <?php echo $row1['product'];?></p>
		<p style="text-align: left;margin-left: 80px;"><b>Product</b> : <?php echo $row1['product'];?></p>
		<p style="text-align: left;margin-left: 80px;"><b>Product Quantity</b> : <?php echo $row1['product_quantity'];?></p>
		<p style="text-align: left;margin-left: 80px;"><b>Date of start</b> : <?php echo $row1['date_of_start'];?></p>
		<p style="text-align: left;margin-left: 80px;"><b>Deadline</b> : <?php echo $row1['Deadline_date'];?></p>
		<p style="text-align: left;margin-left: 80px;"><b>Confirmation Date</b> : <?php echo $row['confirmation_date'];?></p>
		<p style="text-align: left;margin-left: 80px;"><b>Raw Materials required</b> : <?php echo $row1['materials_required'];?></p>
		<p style="text-align: left;margin-left: 80px;"><b>Raw Materials consumed</b> : <?php echo $row['raw_consumed'];?> </p>
		<p style="text-align: left;margin-left: 80px;"><b>Place to pick up products</b> : <?php echo $row['product_pickup'];?></p>
		
		
		<!--<input style="margin-left:50px;" type="submit" name="submit" value="Complete Order!"><br><br>
		</form>-->  
		</div>
		</div>



	<div style="height:150px; background-color:grey;">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">FOOTER</p>
	</div>
</body>
</html>