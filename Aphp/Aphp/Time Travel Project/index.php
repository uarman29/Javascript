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
		function initialize()
		{
			text=["???: WAKE UP! WAKE UP!","You: Huh? Whats Happening? Dad?","Dad: Yes son are you okay?","You: Yea I think so but I dont remember anything.","Dad:The Universal time modulator exploded.","You:What's that?","Dad: No time to explain, we need to get it back!"," You:Well, where is it?","Dad:Hmmm it seems like it broke apart throughut time","You:So what do you want me to do about it?","Dad: Go get the peices what else!","You:How am I going to do that?","Dad:Here I have a prototype use it to go get it","You:You're kidding right?","Dad:Hurry up and bring it back to me, the fate of the universe depends on it","You:Alright,Alright im going"];
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
	<img src="Images/machine.jpg"/>
		<div id="1">???: WAKE UP! WAKE UP!</div><hr/>
		<div id="2">You: Huh? Whats Happening? Dad?</div><hr/>
		<div id="3">Dad: Yes son are you okay?</div><hr/>
		<div id="4">You: Yea I think so but I dont remember anything.</div><hr/>
		<button style="position:absolute;top:80%;left:10%;height:3%;width:20%;"onclick="PreviousSlide();">Previous</button><button style="position:absolute;top:80%;left:40%;height:3%;width:20%;" onclick="NextSlide();">Next</button>
		<a href="http://localhost/aphp/Time%20Travel%20Project/instructions.php"><button style="position:absolute;top:80%;left:70%;height:3%;width:20%;">Instructions</button></a>
	</body>

	
	
</html>