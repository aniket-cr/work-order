<html>
<head>
<script src="../js/jquery-latest.js"></script>
<h1></h1>
</head>
<body>
<?php
    $content = '
<page>
    <html>
<head>
	<title>Admin | Accenture</title>
</head>
<body>
	<div style="height:150px; background-color:grey;"">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;"">HEADER</p>
	</div>
	<div style="width:500px;height:500px;background-color:#E6E8E8;margin-left:100px;margin-top:80px;margin-bottom:80px;">
	<p style="padding-left:30px;padding-top:10px;"><b>Assigned to</b> : '.$_GET["c8"].'</p>
	<p style="padding-left:30px;padding-top:10px;"><b>Product</b> : '.$_GET["c1"].'</p>
	<p style="padding-left:30px;padding-top:10px;"><b>Product Quantity</b> : '.$_GET["c2"].'</p>
	<p style="padding-left:30px;padding-top:10px;"><b>Which Line</b> : '.$_GET["c3"].'</p>
	<p style="padding-left:30px;padding-top:10px;"><b>Date of Start</b> : '.$_GET["c4"].'</p>
	<p style="padding-left:30px;padding-top:10px;"><b>Deadline</b> : '.$_GET["c5"].'</p>
	<p style="padding-left:30px;padding-top:10px;"><b>Raw Materials required</b> : '.$_GET["c6"].'</p>
	<p style="padding-left:30px;padding-top:10px;"><b>Raw material pick up Address</b> : '.$_GET["c7"].'</p>
	
	</div>

	<div style="height:150px; background-color:grey;">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">FOOTER</p>
	</div>
</body>
</html>
</page>';
echo $_GET["c9"];

    require_once('../html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('../work_orders/'.$_GET["c9"].'.pdf','F');



?>
	<form action='complete_create.php' method='GET' id='hi'>
	<input type='hidden' id='d1' name='d1' value='<?php echo $_GET["c1"];?>'>
	<input type='hidden' id='d2' name='d2' value='<?php echo $_GET["c2"];?>'>
	<input type='hidden' id='d3' name='d3' value='<?php echo $_GET["c3"];?>'>
	<input type='hidden' id='d4' name='d4' value='<?php echo $_GET["c4"];?>'>
	<input type='hidden' id='d5' name='d5' value='<?php echo $_GET["c5"];?>'>
	<input type='hidden' id='d6' name='d6' value='<?php echo $_GET["c6"];?>'>
	<input type='hidden' id='d7' name='d7' value='<?php echo $_GET["c7"];?>'>
	<input type='hidden' id='d8' name='d8' value='<?php echo $_GET["c8"];?>'>
	<input type='hidden' id='d9' name='d9' value='<?php echo $_GET["c9"];?>'>
	<input type='hidden' id='d10' name='d10' value='<?php echo $_GET["c10"]; ?>'>
	<input type='hidden' id='d11' name='d11' value='<?php echo $_GET["c11"]; ?>'>
	<input type='hidden' id='d12' name='d12' value='<?php echo $_GET["c12"]; ?>'>
	<input type='submit' >
	</form>

</body>
<script type="text/javascript">
$( document ).ready(function() {

document.getElementById('hi').submit();
});
</script>
</html>