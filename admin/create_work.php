<?php
include '../config.php';
?>

<html>
<head>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	
	<title>Create Work | Accenture</title>
</head>
<body>
	<div style="height:150px; background-color:grey;">
		<h1 style="color:#fff;text-align:center;padding-top:40px;">HEADER</h1>
	</div>
	<br><br><p style="font-size: 30px;margin-left:300px;">Enter the Details : </p>
		
		<div id='container'>
  		<div class='signup' style="margin-left: 100px;">
    	 <form action="create_confirm.php" method="GET">
      		 <input type='text' placeholder='Assigned to..' name="a8" />
      		 <p style="text-align: left;margin-left: 60px;margin-bottom: 10px;margin-top: 30px;">Product :</p>
			<select  style="margin-bottom: 30px;"name="a1">
				<option value="Football">Football</option>
				<option value="Shoes">Shoes</option>
				<option value="Bats">Bats</option>
				<option value="Watches">Watches</option>
				<option value="Balls">Cars</option>
				<option value="Balls">Bikes</option>
				<option value="Balls">Laptops</option>
			</select>
      		 <input type='text' placeholder='Product Quantity..' name="a2" />
      		 <input type='text' placeholder='Which Line..' name="a3" />
      		  <p style="text-align: left;margin-left: 60px;margin-bottom: 10px;margin-top: 30px;">Date of Start :</p>
      		 <input type='date' name="a4" placeholder='Date of start..'  />
      		   <p style="text-align: left;margin-left: 60px;margin-bottom: 10px;margin-top: 30px;">Deadline :</p>
      		  <input type='date' name="a5" placeholder='Deadline..'  />
      		  <p style="text-align: left;margin-left: 60px;margin-bottom: 10px;margin-top: 30px;">Raw Materials required :</p>
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
		 <input type='text' placeholder='Raw material pick up Address..' name="a7" />
      		 <input type='submit' placeholder='SUBMIT' />
   		  </form>
	  </div>
		
		
		</div>
		
	<div style="height:150px; background-color:grey;">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">FOOTER</p>
	</div>
</body>

</script>
</html>