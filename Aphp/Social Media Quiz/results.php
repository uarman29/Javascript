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
		$firectr=0;
		$waterctr=0;
		$earthctr=0;
		$airctr=0;
		foreach($_POST as $item)
		{
			if($item=="fire")
				$firectr++;
			if($item=="water")
				$waterctr++;
			if($item=="earth")
				$earthctr++;
			if($item=="air")
				$airctr++;
		}
		$_eleray=[$firectr,$waterctr,$earthctr,$airctr,"fire","water","earth","air"];
		$maxValue=max($firectr,$waterctr,$earthctr,$airctr);
		for($i=0;$i<4;$i++)
		{
			if($_eleray[$i]==$maxValue)
			{
				$_winner=$_eleray[$i+4];
				$i=4;
			}
		}
		echo $_winner;
	?>
	</body>

	
	
</html>