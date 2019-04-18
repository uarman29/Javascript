<!DOCTYPE HTML>
<!-- ARMAN UDDIN -->
<html>
	<head> 
		<title> First HTML </title>
		<style> 
		#RedirectText
		{
			color:white;
			font-size:300%;
			text-align:center;
			vertical-align:middle;
			z-index:1;
		}
		#back
		{
			position:absolute;
			top:0px;
			left:0px;
			width:100%;
			height:100%;
			z-index:-1;
		}
		</style> 
		
		<script> 
			function Redirect()
			{
				var data = "<?php echo $_POST["timegroup"];?>";
				window.location = "http://localhost/aphp/Time%20Travel%20Project/"+data+".php";
			}
		</script> 
		
	</head>
	<body onload="setTimeout(Redirect,2000);">
	<div id="RedirectText">Are You Ready For Your Journey Through Time?</div>
	<img id="back"src="Images/portal.jpg"/>
	</body>

	
	
</html>