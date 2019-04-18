<?php
	$conn = new PDO("mysql:hostname=localhost;dbname=armanuddin", "root", "");
	if(isset($_GET["NewValue"]))
	{
		$NewValue=$_GET["NewValue"];
		$condition=$_GET["condition"];
		updateValue($condition,$NewValue);
	}
	if(isset($_GET["PEICE"]))
	{
		$PEICE=$_GET["PEICE"];
		$VALUE=$_GET["VALUE"];
		updateTable($PEICE,$VALUE);
	}
	function getDatabaseResults($cmd, $arrayType = PDO::FETCH_BOTH)
	{
		global $conn;
		
		$result = $conn->prepare($cmd);
		$result->execute();

		return $result->fetchAll($arrayType);
	}
	function getValue($value)
	{
		$cmd= "SELECT `$value` FROM `condition`";
		$x=getDatabaseResults($cmd);
		$y=$x[0][$value];
		echo "$y;";
	}
	function getTime($value,$period)
	{
		$cmd= "SELECT `$value` FROM `time`";
		$x=getDatabaseResults($cmd);
		$y=$x[$period][$value];
		echo "$y";
	}
	function updateValue($data,$value)
	{
		$cmd= "UPDATE `condition` SET `$data`=$value";
		$x=getDatabaseResults($cmd);
		getValue($data);
	}
	function updateTable($PEICE,$VALUE)
	{
		$cmd= "UPDATE `timeitems` SET `obtained`='$VALUE' WHERE `item`='$PEICE'";
		$x=getDatabaseResults($cmd);
		getTable();
	}
	function getTable()
	{
		$cmd= "SELECT * FROM `timeitems`";
		$x=getDatabaseResults($cmd,PDO::FETCH_NUM);
		echo json_encode($x);
	}
	function checkPeice($PEICE)
	{
		$cmd= "SELECT * FROM `timeitems` WHERE `item`='$PEICE'";
		$x=getDatabaseResults($cmd,PDO::FETCH_NUM);
		echo json_encode($x);
	}
?>