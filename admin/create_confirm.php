 <?php
include '../config.php';
$raw="";
if ($_GET['r11']!=null)
$raw=$raw."<br>1. ".$_GET['r11']." ".$_GET['r12'].$_GET['r13'];
if ($_GET['r21']!=null)
$raw=$raw."<br>2. ".$_GET['r21']." ".$_GET['r22'].$_GET['r23'];
if ($_GET['r31']!=null)
$raw=$raw."<br>3. ".$_GET['r31']." ".$_GET['r32'].$_GET['r33'];
if ($_GET['r41']!=null)
$raw=$raw."<br>4. ".$_GET['r41']." ".$_GET['r42'].$_GET['r43'];
if ($_GET['r51']!=null)
$raw=$raw."<br>5. ".$_GET['r51']." ".$_GET['r52'].$_GET['r53'];

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
	<div id='container'>
  		<div class='signup' style="margin-left: 100px;">
      		 <p style="text-align: left;margin-left: 80px;"><b>Assigned to</b> : <?php echo $_GET['a8'];?></p>
	<p style="text-align: left;margin-left: 80px;"><b>Product</b> : <?php echo $_GET['a1'];?></p>
	<p style="text-align: left;margin-left: 80px;"><b>Product Quantity</b> : <?php echo $_GET['a2'];?></p>
	<p style="text-align: left;margin-left: 80px;"><b>Which Line</b> : <?php echo $_GET['a3'];?></p>
	<p style="text-align: left;margin-left: 80px;"><b>Date of Start</b> : <?php echo $_GET['a4'];?></p>
	<p style="text-align: left;margin-left: 80px;"><b>Deadline</b> : <?php echo $_GET['a5'];?></p>
	<p style="text-align: left;margin-left: 80px;"><b>Raw Materials required</b> : <?php echo $raw;?></p>
	<p style="text-align: left;margin-left: 80px;"><b>Raw material pick up Address</b> : <?php echo $_GET['a7'];?></p>
			
   		  
	
	
	<?php 
	$sno=0;

	$result1=mysqli_query($con,"select * from work_created") or die("Error: ".mysqli_error($con));
	while($row1 = mysqli_fetch_array($result1)) {
	if ($row1['SNO']>$sno)
		$sno=$row1['SNO'];
	

	}
	$sno=$sno+1;
	//echo $row1['c1'];
	?>

	<?php
	$result=mysqli_query($con,"select count(*) as c from workers where ID='".$_GET['a8']."' ") or die("Error: ".mysqli_error($con));
	$row = mysqli_fetch_array($result)  or die('Error, query failed2');
	$result2=mysqli_query($con,"select * from workers where ID='".$_GET['a8']."' ") or die("Error: ".mysqli_error($con));
	$row2 = mysqli_fetch_array($result2)  or die('Error, query failed3');
	$osn="#".($sno);
	//echo $row2['WSN'];
	$wsn=$row2['WSN'];
	$link="http://localhost/acc/work_orders/".$osn.".pdf";
	//echo $osn;
	//echo $wsn;
	//echo $link;
	?>


	<form action="create_pdf.php" method="GET">
	<input type='hidden' id='c1' name='c1' value='<?php echo $_GET["a1"];?>'>
	<input type='hidden' id='c2' name='c2' value='<?php echo $_GET["a2"];?>'>
	<input type='hidden' id='c3' name='c3' value='<?php echo $_GET["a3"];?>'>
	<input type='hidden' id='c4' name='c4' value='<?php echo $_GET["a4"];?>'>
	<input type='hidden' id='c5' name='c5' value='<?php echo $_GET["a5"];?>'>
	<input type='hidden' id='c6' name='c6' value='<?php echo $raw;?>'>
	<input type='hidden' id='c7' name='c7' value='<?php echo $_GET["a7"];?>'>
	<input type='hidden' id='c8' name='c8' value='<?php echo $_GET["a8"];?>'>
	<input type='hidden' id='c9' name='c9' value='<?php echo $osn; ?>'>
	<input type='hidden' id='c10' name='c10' value='<?php echo $wsn; ?>'>
	<input type='hidden' id='c11' name='c11' value='<?php echo $sno; ?>'>
	<input type='hidden' id='c12' name='c12' value='<?php echo $link; ?>'>
	
	<input style="margin-left:30px;" type="submit" name="confirm" placeholder="CONFIRM">

	</form>
 </div>
		
		
		</div>

	<div style="height:150px; background-color:grey;">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">FOOTER</p>
	</div>
</body>
</html>