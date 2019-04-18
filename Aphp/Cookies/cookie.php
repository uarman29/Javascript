<!DOCTYPE HTML>
<!-- ARMAN UDDIN -->
<?php session_start(); ?>
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
		$_COOKIE;
			function f($x,$y,$z=0)
			{
			// x is optional
			}
		if(isset($_SESSION["views"]))
		{
			$_SESSION["views"]++;
		}
		else
		{
			$_SESSION["views"]=1;
		}
		
		echo $_SESSION["views"];
		//session_destroy(); //Kills session
		//$_SESSION["uname"]="shindo1";// adds value to seesion
		setcookie("test","myname",time()+300);
		//setcookie("uname","shindo21",time()+3600);//creates cookie
		//setcookie("uname","shindo21",time()-3600);//erases cookie
	
	?>
	</body>

	
	
</html>