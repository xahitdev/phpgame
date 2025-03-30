<?php
// MAP RENDERING
include_once 'functions.php';

// RENDERING PART, THE MAIN LOGIC AND GAME STARTS HERE
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


$position = findPosition($map, 3);

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
