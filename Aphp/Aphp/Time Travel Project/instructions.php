<!DOCTYPE HTML>
<!-- ARMAN UDDIN -->
<html>
	<head> 
		<title> First HTML </title>
		<style> 
		body
		{
		font-size:150%;
		color:white;
		text-align:center;
		background-color:black;
		vertical-align:middle;
		}
		img
		{
		position:absolute;
		top:-1px;
		left:-1px;
		height:100%;
		width:100%;
		z-index:-1;
		opacity:.5;
		}
		</style> 
		
		<script> 
		<?php include "updater.php"?>
		<?php updateValue("Health","10");updateValue("Oxygen","10");updateValue("BodyTemp","5"); updateValue("Temp","5");
				updateTable("p1","No");updateTable("p2","No");updateTable("p3","No");updateTable("p4","No");updateTable("p5","No");updateTable("p6","No");updateTable("p7","No");updateTable("p8","No");updateTable("p9","No");?>;
		</script> 
		
	</head>
	<body onload="initialize();">
		Instructions<hr/>
		You will be given a selection of time periods and will trvael through each to get a peice<hr/>
		You travel to a time by clicking the button below the image then pressing the travel button to the right<hr/>
		To capture a peice you must click and hold on it for 3 seconds<hr/>
		The pecice will be in a random location within the time period<hr/>
		Once you have the peice it will be visible in the table to the right<hr/>
		To travel back to the panel of time period hit the evacuate button<hr/>
		Each time period has its own enviromenta conditions and they may affect your health<hr/>
		Your health bar and other status bars are on top of the panel page and to the right inside a timeperiod<hr/>
		These status bars will change based on the current conditions and your health may decrease<hr/>
		When your health reaches zero you will die and restart the game<hr/>
		Your health will recover slowly within the panel page<hr/>
	<img src="Images/machine.jpg"/>
		<form method ="post" action="system.php">
					<input id="healthbar"type="hidden" name="health" value="Images/bar10.png"/>
					<input id="oxygenbar"type="hidden" name="oxygen" value="Images/bar10.png"/>
					<input id="btempbar"type="hidden" name="btemp" value="Images/bar5.png"/>
					<input id="tempbar"type="hidden" name="temp" value="Images/bar5.png"/>
					<input style="width:20%;height:20%;"type="submit" value="Ready?"/>
		</form>
	</body>

	
	
</html>