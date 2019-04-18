<!DOCTYPE HTML>
<!-- ARMAN UDDIN -->
<html>
	<head> 
		<title> First HTML </title>
		<style> 
		td
		{
		border:solid;
		width:100px;
		}
		body
		{
		text-align:center;
		height:100%;
		}
		#travel
		{
		height:30%;
		}
		.itemholder
		{
			width:30%;
			height:30%;
		}
		table
		{
			table-layout:fixed;
			width:100%;
			height:95%;
		}
		</style> 
		
		<script> 
		<?php include "updater.php"?>
			function initialize()
			{
				healthimgElement=document.getElementById("healthimg");
				oxygenimgElement=document.getElementById("oxygenimg");
				btempimgElement=document.getElementById("btempimg");
				tempimgElement=document.getElementById("tempimg");
				Health=<?php getValue("Health");?>
				Oxygen=<?php getValue("Oxygen");?>
				BodyTemp=<?php getValue("BodyTemp");?>
				Temp=<?php getValue("Temp");?>
				Data=<?php getTable();?>;
				Oxygenupdate=setInterval(checkOxygen,3000);
				HealthUpdate=setInterval(checkHealth,1000);
				display();
				fillTable();
				checktemp();
				checkcomplete();
				
			}
			function checkcomplete()
			{
				ctr=0;
				for(var i=0;i<Data.length;i++)
				{
					if(Data[i][1]=="Yes")
					{
						ctr++;
					}
				}
				if(ctr==Data.length)
				{
					window.location="http://localhost/aphp/Time%20Travel%20Project/winpage.php";
				}
			}
			function fillTable()
			{
				for(var i=0;i<Data.length;i++)
				{
					if(Data[i][1]=="Yes")
					{
						var x=document.getElementById(Data[i][0]);
						x.src="Images/"+Data[i][0]+".png";
					}
					else
					{
						var y=document.getElementById(Data[i][0]);
						y.src="";
					}
				}
			}
			function checkHealth()
			{
				if(Health>=10)
				{
					Health=9;
					clearInterval(HealthUpdate);
				}
				Health+=1;
				sendRequest("Health",Health);
			}
			function checktemp()
			{
				Temp=5;
				BodyTempUpdate = setInterval(checkbodytemp,2000);
			}
			function checkbodytemp()
			{
				if(BodyTemp <5)
				{
					BodyTemp+=1;
					sendRequest("BodyTemp",BodyTemp);
				}

				if(BodyTemp>5)
				{
					BodyTemp-=1;
					sendRequest("BodyTemp",BodyTemp);
				}
				if(BodyTemp==5)
				{	
					sendRequest("BodyTemp",BodyTemp);
					clearInterval(BodyTempUpdate);
				}
			}
			function checkOxygen()
			{
				if(Oxygen>=10)
				{
					Oxygen=9;
					clearInterval(Oxygenupdate);
				}
				Oxygen+=1;
				sendRequest("Oxygen",Oxygen);
			}
			function display()
			{
				healthimgElement.src="Images/bar"+Health+".png";
				oxygenimgElement.src="Images/bar"+Oxygen+".png";
				btempimgElement.src="Images/bar"+BodyTemp+".png";
				tempimgElement.src="Images/bar"+Temp+".png";
			}
			function sendRequest(item,NewValue)
			{
				var request= new XMLHttpRequest();
				request.onreadystatechange=
				function()
				{
					if(request.readyState==4)
					{	
						eval(item+"="+request.responseText);
						display();
					}
				}
				//ready state 0-no request,1-request prepared,2-sent,3-processing,4-returned
				var url="updater.php?NewValue="+NewValue+"&condition="+item;
				request.open("GET",url,true);
				request.send(null);
			}
		</script> 
		
	</head>
	<body onload="initialize();">
		<form method ="post" action="Portal.php">
			<table style="border:solid;">
				<tr>
					<td style="height:20%;">Health <img id="healthimg"style="width:70%;height:20%;"/></td>
					<td>Oxygen <img id="oxygenimg"style="width:70%;height:20%;"/></td>
				</tr>
				<tr>
					<td>Body Temperature <img id="btempimg"style="width:70%;height:20%;"/></td>
					<td>Temperature <img id="tempimg"style="width:70%;height:20%;"</td>
				</tr>
			</table>
			<table id="travel"style="border:dashed;">
				<tr >
					<td style="width:20%;"><div style="width:100%;"><img style="height:100%;width:100%;" src="Images/hadean.jpg"/><input type="radio" value="Hadean"name="timegroup" checked />Hadean Earth</div></td>
					<td  style="width:20%;"><div style="width:100%;"><img style="height:100%;width:100%;"src="Images/snowball.jpg"/><input type="radio" value="Snowball"name="timegroup"/>Snowball Earth</div></td>
					<td  style="width:20%;"><div style="width:100%;"><img style="height:100%;width:100%;"src="Images/jurassic.jpg"/><input type="radio" value="Jurrasic"name="timegroup"/>Jurrasic Earth</div></td>
					<td  style="width:20%;">
						<table height="100%;"style="width:100%;">
						<tr class="itemholder2">
							<td class="itemholder"><img src=""style="display:block;width:100%;height:100%"id="p1"/></td>
							<td class="itemholder"><img src=""style="display:block;width:100%;height:100%"id="p2"/></td>
							<td class="itemholder"><img src=""style="display:block;width:100%;height:100%"id="p3"/></td>
						</tr>
						<tr class="itemholder2">
							<td class="itemholder"><img src=""style="display:block;width:100%;height:100%"id="p4"/></td>
							<td class="itemholder"><img src=""style="display:block;width:100%;height:100%"id="p5"/></td>
							<td class="itemholder"><img src=""style="display:block;width:100%;height:100%"id="p6"/></td>
						</tr>
						<tr class="itemholder2">
							<td class="itemholder"><img src=""style="display:block;width:100%;height:100%"id="p7"/></td>
							<td class="itemholder"><img src=""style="display:block;width:100%;height:100%"id="p8"/></td>
							<td class="itemholder"><img src=""style="display:block;width:100%;height:100%"id="p9"/></td>
						</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td  style="width:20%;"><div style="width:100%;"><img style="height:100%;width:100%;"src="Images/StoneAge.jpg"/><input type="radio" value="StoneAge"name="timegroup"/>Stone Age</div></td>
					<td  style="width:20%;"><div style="width:100%;"><img style="height:100%;width:100%;"src="Images/Egypt.jpg"/><input type="radio" value="Egypt"name="timegroup"/>Ancient Egypt</div></td>
					<td  style="width:20%;"><div style="width:100%;"><img style="height:100%;width:100%;"src="Images/Mongols.jpg"/><input type="radio" value="Mongols"name="timegroup"/>Mongol Empire</div></td>
					<td  style="width:20%;"><div style="width:100%;"><input style="height:100%;width:100%;"rowspan="2"type="submit" value="Travel"/></div></td>
				</tr>
				<tr >
					<td  style="width:20%;"><div style="width:100%;"><img style="height:100%;width:100%;"src="Images/WW2.jpg"/><input type="radio" value="WW2"name="timegroup"/>WW2</div></td>
					<td  style="width:20%;"><div style="width:100%;"><img style="height:100%;width:100%;"src="Images/Moonlanding.jpg"/><input type="radio" value="Moon"name="timegroup"/>Moon Landing</div></td>
					<td  style="width:20%;"><div style="width:100%;"><img style="height:100%;width:100%;"src="Images/Future.jpg"/><input type="radio" value="Future"name="timegroup"/>The Future</div></td>
				</tr>
			</table>
		</form>
	</body>

	
	
</html>