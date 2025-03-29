<?php
// MAP RENDERING
include 'functions.php';
include 'map.php';

function findNumber($map, $target) {
	foreach ($map as $rowIndex => $row) {
		foreach ($row as $colIndex => $cell) {
			if ($cell == $target) {
				return ["x" => $rowIndex, "y" => $colIndex]; // Return the position of "3"
			}
		}
	}
	return null; // If "3" is not found
}

echo "<table border='1' cellspacing='0' cellpadding='1'>";
foreach ($map as $row) {
	echo "<tr>";
	foreach ($row as $cell) {
		$object = $objectMap[$cell];
		echo "<td style='border: none;'>$object</td>";
	}
	echo "</tr>";
}
echo "</table>";


$position = findNumber($map, 3);

// #todo 

$x = $position['x'];
$y = $position['y'];

if($position){
	printPlayerPos($x, $y);
}else{
	echo "Player not found in this current state.";
}

?>

<script>
document.addEventListener(){
let key = event.key;
let direction = "";

if(key == "ArrowUp" || key == "w") direction = "up";
elseif(key == "ArrowDown" || key == "s") direction = "down";
elseif(key == "ArrowLeft" || key == "a") direction = "left";
elseif(key == "ArrowRight" || key == "d") direction = "right";
}
</script>
