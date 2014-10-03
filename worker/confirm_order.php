<?php
include '../config.php';
?>
<html>
<head>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<title>Admin | Accenture</title>
</head>
<body>
<?php $result=mysqli_query($con,"select * from work_created where OSN ='".$_POST['osn_no']."'") or die("Error: ".mysqli_error($con));
$row = mysqli_fetch_array($result)  or die('Error, query failed');
	?>


	<div style="height:150px; background-color:grey;">
		<h1 style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">HEADER</h1>
	</div>
	<br><br><p style="font-size: 30px;margin-left:300px;">Enter the Details : </p>
		<div id='container'>
  		<div class='signup' style="margin-left: 100px;">
		<form action="work_confirm.php" method="POST"><br>
		<p style="text-align: left;margin-left: 60px;margin-bottom: 10px;margin-top: 30px;">Assigned to : You</p>
		<p style="text-align: left;margin-left: 60px;margin-bottom: 10px;margin-top: 30px;">Product : <?php echo $row['product'];?></p>
		<p style="text-align: left;margin-left: 60px;margin-bottom: 10px;margin-top: 30px;">Product Quantity : <?php echo $row['product_quantity'];?></p>
		<p style="text-align: left;margin-left: 60px;margin-bottom: 10px;margin-top: 30px;">Confirmation date :</p>
		<input  type="date" name="a4" placeholder="Confirmation date.."></input><br/>
		<p style="text-align: left;margin-left: 60px;margin-bottom: 10px;margin-top: 0px;">Raw Materials Consumed :</p>
		<table style="margin-left: 40px;">
		
    	<tbody>
    	<tr>
        	
            	<td><input  type="text" name="r11" placeholder="Name.."/></td>
            	<td><input  type="text" name="r12" placeholder="Quantity.."/></td>
            	<td><select  style="width: 80px;" name="r13">
					<option selected=""></option>
					<option value="kg">kg</option>
					<option value="m">m</option>
					<option value="unit">unit</option>
					<option value="litre">litre</option>
				</select></td>
        	</tr>
        	<tr>
            	<td><input  type="text" name="r21" placeholder="Name.."/></td>
            	<td><input  type="text" name="r22" placeholder="Quantity.."/></td>
            	<td><select  style="width: 80px;"name="r23">
            		<option selected=""></option>
					<option value="kg">kg</option>
					<option value="m">m</option>
					<option value="unit">unit</option>
					<option value="litre">litre</option>
				</select></td>
        	
        	</tr>
        	<tr>
            	<td><input  type="text" name="r31" placeholder="Name.."/></td>
            	<td><input  type="text" name="r32" placeholder="Quantity.."/></td>
            	<td><select  style="width: 80px;" name="r33">
            		<option selected=""></option>
					<option value="kg">kg</option>
					<option value="m">m</option>
					<option value="unit">unit</option>
					<option value="litre">litre</option>
				</select></td>
        	</tr>
        	<tr>
            	<td><input type="text" name="r41" placeholder="Name.."/></td>
            	<td><input type="text" name="r42" placeholder="Quantity.."/></td>
            	<td><select style="width: 80px;" name="r43">
            		<option selected=""></option>
					<option value="kg">kg</option>
					<option value="m">m</option>
					<option value="unit">unit</option>
					<option value="litre">litre</option>
				</select></td>
        	
    	</tr>
    	<tr>
            	<td><input  type="text" name="r51" placeholder="Name.."/></td>
            	<td><input type="text" name="r52" placeholder="Quantity.."/></td>
            	<td><select style="width: 80px;" name="r53">
            		<option selected=""></option>
					<option value="kg">kg</option>
					<option value="m">m</option>
					<option value="unit">unit</option>
					<option value="litre">litre</option>
				</select></td>
        	
    	</tr>
    	</tbody>
		</table>
		<input type="text" name="a5" placeholder="Product pick up place.."></input><br/>
		<input type="hidden" name="osn_no" value="<?php echo $row['OSN'];?>">
		
		
		<input type="submit" name="submit" value="CONFIRM"><br><br>
		</form>  
		</div>
		</div>




	<div style="height:150px; background-color:grey;">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">FOOTER</p>
	</div>
</body>
</html>