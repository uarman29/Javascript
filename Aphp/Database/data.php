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
		//PDO($hoststring,$uname,$pword)
		$dataInput= new PDO("mysql:hostname=localhost;dbname=armanuddin","root","");
		$command="SELECT * FROM `pizza`";
		$result=$dataInput->prepare($command);
		$numRows=$result->rowCount();
		$result->execute();
		//$dataOutput=$result->fetch(PDO::FETCH_NUM);---numerically indexed array
		//$dataOutput=$result->fetch(PDO::FETCH_ASSOC);---associatively indexed array
		$dataOutput=$result->fetch();//returns one row of table
		print_r($dataOutput);
	?>
	</body>

	
	
</html>