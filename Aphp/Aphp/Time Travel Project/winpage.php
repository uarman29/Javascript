<!DOCTYPE HTML>
<!-- ARMAN UDDIN -->
<html>
	<head> 
		<title> First HTML </title>
		<style> 
		body
		{
		font-size:300%;
		color:white;
		text-align:center;
		background-color:black;
		vertical-align:middle;
		}
		#back
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
		function initialize()
		{
			text=["You: Hey Dad im back","Dad: Did you get it?","You: Yea here you go","Dad: MUHAHAHA I HAVE FINNALY OBTAINED IT","You: So what is it?","Dad:Foolish son of mine this device has the ability to control time at will","You: Yea so????"," Dad:I knew I shouldnt have taken you bullriding as an infant","You: YOU DID WHAT?","Dad: Never Mind That, with this device I can become the king of the World","You: Seriously King of the World, is that the best you can do?","Dad: SILENCE I KILL YOU","*Proceeds to kick Dad in the nuts*","Dad: DUDE WTF MAN NOT COOL","You: SCREW YOU OLD MAN, IM GONNA GO TELL MOM","Dad: WAIT STOP WE CAN TALK ABOUT THIS DONT DO THIS"];
			First=document.getElementById("1");
			Second=document.getElementById("2");
			Third=document.getElementById("3");
			Fourth=document.getElementById("4");
			onetext=0;
			twotext=1;
			threetext=2;
			fourtext=3;
			display();
		}
		function display()
		{
			First.innerHTML=text[onetext];
			Second.innerHTML=text[twotext];
			Third.innerHTML=text[threetext];
			Fourth.innerHTML=text[fourtext];
		}
		function NextSlide()
		{
			onetext+=4;
			twotext+=4;
			threetext+=4;
			fourtext+=4;
			if(fourtext>text.length-1)
			{
				onetext=0;
				twotext=1;
				threetext=2;
				fourtext=3;
			}
			display();
		}
		function PreviousSlide()
		{
			onetext-=4;
			twotext-=4;
			threetext-=4;
			fourtext-=4;
			if(fourtext<0)
			{
				onetext=text.length-4;
				twotext=text.length-3;
				threetext=text.length-2;
				fourtext=text.length-1;
			}
			display();
		}
		</script> 
		
	</head>
	<body onload="initialize();">
	<img id="back"src="Images/machine.jpg"/>
	<img style="opacity:.5;height:30%;width:20%;position:absolute;top:70%;left:40%"id="time"src="Images/main.png"/>
		<div id="1">???: WAKE UP! WAKE UP!</div><hr/>
		<div id="2">You: Huh? Whats Happening? Dad?</div><hr/>
		<div id="3">Dad: Yes son are you okay?</div><hr/>
		<div id="4">You: Yea I think so but I dont remember anything.</div><hr/>
		<button style="position:absolute;top:80%;left:10%;height:3%;width:20%;"onclick="PreviousSlide();">Previous</button><button style="position:absolute;top:80%;left:70%;height:3%;width:20%;" onclick="NextSlide();">Next</button>
	</body>

	
	
</html>