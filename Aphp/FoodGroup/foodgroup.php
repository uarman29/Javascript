<?php
$food=strtolower($_GET["food"]);
 if($food=="hamburger")
	$group="Meat";
else
	if($food == "apple")
			$group="Fruits";
	else
		if($food=="ice cream")
			$group="Dairy";
		else
			if($food=="bread")
				$group="Grain";
			else
				$group="Unknown";
echo $group;
?>