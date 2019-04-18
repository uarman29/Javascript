<!DOCTYPE HTML>
<!-- ARMAN UDDIN -->
<html>
	<head> 
		<title> First HTML </title>
		<style> 
		.itemholder2
		{
			text-align:center;
			height:25%;
			width:25%;
			max-height:26%;
			max-width:26%;
		}
		.itemholder
		{
			text-align:center;
			height:25%;
			width:25%;
			max-height:26%;
			max-width:26%;
		}
		#back
		{
			width:100%;
			height:100%;
			position:absolute;
			top:0px;
			left:0px;
			z-index:-1;
		}
		table
		{
			table-layout:fixed;
			width:100%;
			height:95%;
		}
		td
		{
		border:solid;
		background-color:white;
		}
		body
		{
		text-align:center;
		height:100%;
		}
		#panel
		{
			position:absolute;
			width:20%;
			height:45%;
			right:3%;
			top:3%;
		}
		#panel2
		{
			border:dashed;
			position:absolute;
			width:20%;
			height:25%;
			right:3%;
			top:55%;
			border:solid;
		}
		#status
		{
			overflow:auto;
			max-height:100%;
		}
		button
		{
			border-radius=100px;
		}
		#image
		{
			opacity:.5;
		}
		</style> 
		<script src = "utilities1.js"></script>
		<script> 
		<?php include "updater.php"?>
			function travelBack()
			{
				window.location = "http://localhost/aphp/Time%20Travel%20Project/"+"Portal"+".php";
			}
			function initialize()
			{
				healthimgElement=document.getElementById("healthimg");
				oxygenimgElement=document.getElementById("oxygenimg");
				btempimgElement=document.getElementById("btempimg");
				tempimgElement=document.getElementById("tempimg");
				messageElement=document.getElementById("message");
				statusElement=document.getElementById("status");
				statusholdElement=document.getElementById("statushold");
				titleElement=document.getElementById("title");
				soundElement=document.getElementById("sound");
				imageElement=document.getElementById("image");
				titleElement.innerHTML="<?php getTime("Name","0");?>";
				messageElement.innerHTML="<?php getTime("Time","0");?>";
				Health=<?php getValue("Health");?>
				Oxygen=<?php getValue("Oxygen");?>
				BodyTemp=<?php getValue("BodyTemp");?>
				Temp=<?php getValue("Temp");?>
				Data=<?php getTable();?>;
				obtained=<?php checkPeice("p1");?>;
				checkPeice();
				fillTable();
				Oxygenupdate=setInterval(checkOxygen,3000);
				HealthUpdate=setInterval(checkHealth,1000);
				display();
				checktemp();
			}
			function checkPeice()
			{
				if(obtained[0][1]=="Yes")
				{
					imageElement.style.display="none";
				}
				else
				{
					imageElement.style.top=getRandomInteger(50,window.innerHeight-30)+"px";
					imageElement.style.left=getRandomInteger(10,window.innerWidth)+"px";
					while(parseInt(imageElement.style.left)>(window.innerWidth*.5))
					{
						imageElement.style.left=getRandomInteger(10,window.innerWidth)+"px";
					}
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
			function updateTable(PEICE,VALUE)
			{
				var request= new XMLHttpRequest();
				request.onreadystatechange=
				function()
				{
					if(request.readyState==4)
					{	
						Data=JSON.parse(request.responseText);
						fillTable();
						checkPeice();
					}
				}
				//ready state 0-no request,1-request prepared,2-sent,3-processing,4-returned
				var url="updater.php?PEICE="+PEICE+"&VALUE="+VALUE;
				request.open("GET",url,true);
				request.send(null);
			}
			function checkHealth(Attack)
			{
				if(BodyTemp==0||Oxygen==0||BodyTemp==10||Attack=="Yes")
				{
					Flash("ON");
					Health-=1;
					sendRequest("Health",Health);
					if(Health<=0)
					{
						locationElement=document.getElementById("location");
						locationElement.value="index";
						x=document.getElementById("myForm");
						x.submit();
					}
				}
				else
				{
					if(BodyTemp==5&&Oxygen>=7)
					{
						if(Health>=10)
						{
							Health=9;
						}
						Health+=1;
						sendRequest("Health",Health);
					}
				}
			}
			function Flash(STAGE)
			{
				if(STAGE=="ON")
				{
					statusholdElement.style.backgroundColor="red";
					flasher=setTimeout(Flash,500,"OFF");
					soundElement.play();
				}
				if(STAGE=="OFF")
				{
					statusholdElement.style.backgroundColor="white";
					clearTimeout(flasher);
				}
			}
			function checktemp()
			{
				if(<?php getTime("Temp","0");?>>=30&&<?php getTime("Temp","0");?><=125)
				{
					Temp=5;
					sendRequest("Temp",Temp);
					return;
				}
				if(<?php getTime("Temp","0");?><=30)
				{
					Temp=0;
					sendRequest("Temp",Temp);
				}
				if(<?php getTime("Temp","0");?>>=125)
				{
					Temp=10;
					sendRequest("Temp",Temp);
				}
				BodyTempUpdate = setInterval(checkbodytemp,2000);
			}
			function checkbodytemp()
			{
				if(Temp==0)
				{
					statusElement.innerHTML+="<br/>"+"BODY TEMPERATURE DECREASING";
					if(BodyTemp <=0)
					{
						BodyTemp=1;
						clearInterval(BodyTempUpdate);
					}
					BodyTemp-=1;
					sendRequest("BodyTemp",BodyTemp);
				}
				else
				{
					if(Temp==10)
					{
						statusElement.innerHTML+="<br/>"+"BODY TEMPERATURE INCREASING";
						if(BodyTemp>=10)
						{
							BodyTemp=9;
							clearInterval(BodyTempUpdate);
						}
						BodyTemp+=1;
						sendRequest("BodyTemp",BodyTemp);
					}
					else
					{
						clearInterval(BodyTempUpdate);
					}
				}
			}
			function checkOxygen()
			{
				if("<?php getTime("Oxygen","0");?>"=="No")
				{
					statusElement.innerHTML+="<br/>"+"LOW OXYGEN";
					if(Oxygen <=0)
					{
						Oxygen=1;
						clearInterval(Oxygenupdate);
					}
					Oxygen-=1;
					sendRequest("Oxygen",Oxygen);
				}
				if("<?php getTime("Oxygen","0");?>"=="Yes")
				{
					if(Oxygen>=10)
					{
						Oxygen=9;
						clearInterval(Oxygenupdate);
					}
					Oxygen+=1;
					sendRequest("Oxygen",Oxygen);
				}
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
			function getItem(MODE)
			{
				if(MODE=="Yes")
				{
					itemTimer=setTimeout(obtainitem,3000);
				}
				if(MODE=="No")
				{
					clearTimeout(itemTimer);
				}
			}
			function obtainitem()
			{
				updateTable("p1","Yes");
				imageElement.src="";
				imageElement.style.display="none";
			}
		</script> 
		
	</head>
	<body onresize="checkPeice();"onload="initialize()">
	<img id="back"src="Images/HadeanBack.jpg"/>
	<form id="myForm" method ="post" action="Portal.php">
		<div id="panel">
			<table >
			<tr style="width:80%;border:solid;"><td style="width:100%;"colspan=2 id="title">HELLO</td></tr>
				<tr style="width:80%;"><td style="width:100%;"colspan=2 id="message">HELLO</td></tr>
				<tr height="40%;"><td id="statushold"colspan=2><div id="status">Status Alert</div></td></tr>
				<tr>
					<td style="width:100%;">Health<br/><img id="healthimg"style="width:80%;height:20%;" /></td>
					<td style="width:100%;">Oxygen<br/><img id="oxygenimg"style="width:80%;height:20%;"/></td>
				</tr>
				<tr>
					<td style="width:100%;">Body Temperature<br/><img id="btempimg"style="width:80%;height:20%;"/></td>
					<td style="width:100%;">Temperature<br/><img id="tempimg"style="width:80%;height:20%;"/></td>
				</tr>
				<tr>
					<td style="width:100%;"colspan=2><button style="width:100%;" onclick="travelBack();">Evacuate</button></td>
				</tr>
			</table>
		</div>
		<div id="panel2">
		<table >
			<tr class="itemholder2">
				<td class="itemholder"><img style="display:block;width:100%;height:100%"id="p1"/></td>
				<td class="itemholder"><img style="display:block;width:100%;height:100%"id="p2"/></td>
				<td class="itemholder"><img style="display:block;width:100%;height:100%"id="p3"/></td>
			</tr>
			<tr class="itemholder2">
				<td class="itemholder"><img style="display:block;width:100%;height:100%"id="p4"/></td>
				<td class="itemholder"><img style="display:block;width:100%;height:100%"id="p5"/></td>
				<td class="itemholder"><img style="display:block;width:100%;height:100%"id="p6"/></td>
			</tr>
			<tr class="itemholder2">
				<td class="itemholder"><img style="display:block;width:100%;height:100%"id="p7"/></td>
				<td class="itemholder"><img style="display:block;width:100%;height:100%"id="p8"/></td>
				<td class="itemholder"><img style="display:block;width:100%;height:100%"id="p9"/></td>
			</tr>
		</table>
		</div>
		<input id="location" type="hidden" value="system" name="timegroup" />
		<img id="image" style="position:absolute;height:3%;width:2%;"src="Images/p1.png" onmousedown="getItem('Yes');"onmouseup="getItem('No');"/>
	</form>
	<audio id="sound"src="Alarm.mp3"></audio>
	</body>

	
	
</html>