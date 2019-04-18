<!DOCTYPE HTML>
<!-- ARMAN UDDIN -->
<html>
	<head> 
		<title> First HTML </title>
		<style> 
	
		</style> 
		
		<script>
		function initialize()
		{
		}

		</script> 
		
	</head>
	<body onload ="initialize();">
	<div>Once upon a time a <span style="background-color:yellow;"><?php echo $_POST['0'] ?></span> princess <span style="background-color:yellow;"><?php echo $_POST['1'] ?></span> a <span style="background-color:yellow;"><?php echo $_POST['2'] ?> <span style="background-color:yellow;"><?php echo $_POST['3'] ?> </span></span> and she <span style="background-color:yellow;"><?php echo $_POST['4'] ?> </span> happily ever after</div>
	<?php
		echo "Once upon a time a ".$_POST['0']." princess ". $_POST['1']." a " .$_POST['2'] ." ". $_POST['3']." and she ".$_POST['4']." happily ever after";

	?>
	</body>

	
	
</html>