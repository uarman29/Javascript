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
	<?php
		$myVar=10;
		//echo "My Value is $myVar";
		$_POST;
		print_r($_POST);
		//f();
		
		function f()
		{
			global $myVar;
			echo $myVar;
		}
	?>
	</body>

	
	
</html>