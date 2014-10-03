<?php
include '../config.php';

?>
<html>
<head>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<title>Worker | Accenture</title>
</head>
<body>
	<div style="height:150px; background-color:grey;">
		<h1 style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">HEADER</h1>
	</div>
	<div style="height:50px; background-color:#E6E8E8;">
		<h2 style="color:grey;float:right;font-size:20px;:center;padding-top:3px;padding-right:20px;">Welcome,<?php echo $_POST['worker_name'];?></h2>
	</div>
	
<?php	$result = mysqli_query($con,"select * from work_created where WSN ='".$_POST['worker_wsn']."' ");
?>
<div class="caption" style="text-align:center;margin-top:50px;">ORDERS ASSIGNED</div>	
<div id="table">
	<div class="header-row row">
	<span class="cell ">S.No.</span>
    <span class="cell ">Product</span>
    <span class="cell ">Product Quantity</span>
    <span class="cell">Assigned to</span>
     <span class="cell">Order number</span>
    <span class="cell">Line</span>
     <span class="cell">Confirm</span>
  </div>
  
  
  



<?php
$count=1;
while($row = mysqli_fetch_array($result)) {
	echo("<div class='row'>");
	echo("<input type='radio' name='expand'>");
	echo("<span class='cell ' data-label='S.No.'>".$count."</span>");
	$count++;
    echo("<span class='cell ' data-label='Product'>".$row['product']."</span>");
    echo("<span class='cell ' data-label='Product Quantity'>".$row['product_quantity']."</span>");
    echo("<span class='cell' data-label='Assigned to'>You</span>");
     echo("<span class='cell' data-label='Order number'>".$row['OSN']."</span>");
     echo("<span class='cell' data-label='Line'>".$row['which_line']."</span>");
     echo("<span class='cell' data-label='Confirm'>");
     if ($row['confirmed']==0)
     {
     echo("<form action='confirm_order.php' method='POST'></span><input type='hidden' name='osn_no' value='". $row['OSN']. "'><button style='background-color:#FF9B3D;height:40px;width:100px;' type='submit' ><p style='color:grey;font-size:18px;margin-top:7px;' >CONFIRM</p></button></form></span>");
 	}
 	else
 	{
 		echo("<img src='../images/tick.png'></span>");
 	}
  echo("</div>");
  //echo("<a style='text-decoration:none;' href='http://localhost/acc/work_orders/".$row['OSN'].".pdf' download>");
  //echo("<div style='height:120px; width:600px;margin-left:200px;background-color:#E6E8E8;'>");
  //echo("<form action='confirm_order.php' method='POST'>");
  //echo("<input type='hidden' name='osn_no' value='". $row['OSN']. "'>");
	
 // echo("<button style='height:50px;width:140px;float:right;background-color:grey;' type='submit'><p style='color:white;text-align:center;'>CONFIRM</p></button>");
 // echo("</form>");
  //echo("<p style='padding-top:10px;padding-left:10px;'>Product : ".$row['product']."</p>");
  //echo("<p style='padding-left:10px;'>Assigned to : You</p>");
  //echo("<p style='padding-left:10px;'>Order number : ".$row['OSN']."</p>");
  //echo("</div>");
  //echo("</a>");
}
?>
	</div>

	<div style="height:150px; background-color:grey;">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">FOOTER</p>
	</div>
</body>
</html>