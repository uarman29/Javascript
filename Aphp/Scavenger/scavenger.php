<!DOCTYPE HTML>

<html>
	<head>
		<style>
		</style>
		<title>Scavenger Hunt</title>
		
		<script type = "text/javascript">
			function initialize()
			{
				currentRoomBox = document.getElementById("room");
				currentItemBox = document.getElementById("curritem");
				yourItemBox = document.getElementById("youritem");
				yourRoomBox = document.getElementById("yourroom");
				connectionsList = document.getElementById("connections");
				itemsList = document.getElementById("items");
				submitButton = document.getElementById("subbtn");

				yourItemBox.value = currentItem;
				yourRoomBox.value = currentRoom;

				fillBox(connectionsList, roomConnections)
				fillBox(itemsList, roomItems);
				display();
			}
			
			function fillBox(box, lst)
			{
				for (var i = 0; i < lst.length; i++)
				{
					opt = document.createElement("option");
					opt.innerHTML = lst[i][0];
					box.add(opt);
				}
			}
			
			function toggleButton(cap)
			{
				submitButton.value = cap;
			}
			
			function display()
			{
				currentRoomBox.innerHTML = currentRoom;
				currentItemBox.innerHTML = currentItem;
			}
			
			<?php
				$conn = new PDO("mysql:hostname=localhost;dbname=armanuddin", "root", "");
				srand();
			
				if (isset($_POST['useritm']) && $_POST['useritm'] != "")
					$currentItem = $_POST['useritm'];
				else
					$currentItem = "nothing";
					
				if (isset($_POST['userroom']))
					$currentRoom = $_POST['userroom'];
				else
					$currentRoom = getRandomRoom();
				
				if (isset($_POST['actiongrp']))
				{
					if ($_POST['actiongrp'] == "take")
					{
						if ($currentItem != "nothing")
						{
							$cmd = "INSERT INTO `items` VALUES('$currentRoom', '$currentItem')";
							getDatabaseResults($cmd);
						}
						
						$currentItem = $_POST['items'];

						$cmd = "DELETE FROM `items` WHERE `item` = '$currentItem'";
						getDatabaseResults($cmd);
					}
					
					if ($_POST['actiongrp'] == "leave")
						$currentRoom = $_POST['connections'];
				}
				
				echo "currentRoom = '$currentRoom';\n";
				echo "currentItem = '$currentItem';\n";
				getConnections($currentRoom);
				getItems($currentRoom);
				
				function getDatabaseResults($cmd, $arrayType = PDO::FETCH_BOTH)
				{
					global $conn;
					
					$result = $conn->prepare($cmd);
					$result->execute();

					return $result->fetchAll($arrayType);
				}
				
				function getRandomRoom()
				{
					global $conn;
					
					$cmd = "SELECT DISTINCT `room` FROM `rooms`";
					$data = getDatabaseResults($cmd);
					
					$numRooms = count($data);
					
					return $data[rand(0, $numRooms-1)]['room'];
				}
			
				function getConnections($currRoom)
				{
					$cmd = "SELECT `connection` FROM `rooms` WHERE `room` = '$currRoom'";
					$data = getDatabaseResults($cmd);
					
					echo "roomConnections = ".json_encode($data).";\n";
				}
				
				function getItems($currRoom)
				{
					$cmd = "SELECT `item` FROM `items` WHERE `room` = '$currRoom'";
					$data = getDatabaseResults($cmd);
					
					echo "roomItems = ".json_encode($data).";\n";
				}
			?>
		</script>
	</head>
		
	<body onload = "initialize();">
		<p>
			You awoke in this strange, creepy house with no memory of how you got there or how to get out.  All you can think to do is to walk around from room to room, picking up items.
		</p>
		
		<h2>You are in the <span id = "room"></span></h2>
		<h2>You are holding <span id = "curritem"></span></h2>
		<form method = "post" action = "scavenger.php">
			<select id = "connections" name = "connections"></select>
			<select id = "items" name = "items"></select><br /><br />
			<label>Take Item <input type = "radio" name = "actiongrp" checked value = "take" onclick = "toggleButton('Take Item');" /></label>
			<label>Leave Room<input type = "radio" name = "actiongrp" value = "leave" onclick = "toggleButton('Leave Room');" /></label>
			
			<input type = "submit" value = "Take Item" id = "subbtn" />
			
			<input type = "hidden" id = "youritem" name = "useritm" value = "nothing" />
			<input type = "hidden" id = "yourroom" name = "userroom" />
		</form>
	</body>
</html>