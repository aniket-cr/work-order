
<?php 
include '../config.php';
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
	<div style="height:50px; background-color:#E6E8E8;">
		<h2 style="color:grey;float:right;font-size:20px;:center;padding-top:3px;padding-right:20px;">Welcome,<?php echo $_POST['admin_name'];?></h2>
	</div>
	<a href="create_work.php" style="text-decoration:none;">
		<div style="height:60px; width:600px;margin-left:330px;background-color:#6490FF">
			<p style="color:#fff;font-size:20px;text-align:center;text-decoration:none;padding-top:20px;">Create a work order</p>
		</div>
	</a>	
<?php	$result = mysqli_query($con,"SELECT * FROM work_created");?>
<div class="caption" style="text-align:center;margin-top:50px;">ORDERS CREATED</div>	
<div id="table">
	<div class="header-row row">
	<span class="cell ">S.No.</span>
    <span class="cell ">Product</span>
    <span class="cell ">Product Quantity</span>
    <span class="cell">Assigned to</span>
     <span class="cell">Order number</span>
    <span class="cell">Line</span>
     <span class="cell">Confirmation</span>
     <span class="cell">Delete</span>
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
    echo("<span class='cell' data-label='Assigned to'>".$row['WSN']."</span>");
     echo("<span class='cell' data-label='Order number'>".$row['OSN']."</span>");
     echo("<span class='cell' data-label='Line'>".$row['which_line']."</span>");
     echo("<span class='cell' data-label='Confirm'>");
     if ($row['confirmed']==1)
     {
     	echo("<form action='order_confirmed_page.php' method='POST'>");
     	echo("<input type='hidden' id='osn_no' name='osn_no' value='".$row['OSN']."'>");
     	echo("<input type='image' src='../images/tick.png' alt='Submit Form' />");
     	echo("</form>");
     }
     else
     {
     	echo("<img src='../images/cross.png'>");
     }
     echo("</span>");
     echo("<span class='cell' data-label='Delete'>");
     echo("<form action='delete_order.php' method='POST'>");
     	echo("<input type='hidden' id='osn_no2' name='osn_no2' value='".$row['OSN']."'>");
     	  	echo("<input type='hidden' id='admin' name='admin' value='".$_POST['admin_name']."'>");
     	echo("<button style='background-color:#FF9B3D;height:40px;width:100px;' type='submit' ><p style='color:grey;font-size:18px;margin-top:7px;' >DELETE</p></button>");
     	echo("</form>");
     	echo("</span>");
  echo("</div>");


  
}
?>
	</div>

	<div style="height:150px; background-color:grey;">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">FOOTER</p>
	</div>
</body>

</html>