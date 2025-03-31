<?php
// MAP RENDERING
session_start();

include_once 'functions.php';

$direction = isset($_SESSION['direction']) ? $_SESSION['direction'] : "none";
echo "current direction is: " . $direction;

/* echo $direction = ; */

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
	echo $x . $y;
}else{
	echo "Player not found in this current state.";
}

movePlayer($x, $y);

function movePlayer(){
	global $map, $direction;

	if($direction == "up") playerMoveUp();
	elseif($direction == "down") playerMoveDown();
	elseif($direction == "right") playerMoveRight();
	elseif($direction == "left") playerMoveLeft();
	
	/* echo $map[$x][$y]; */
}
function playerMoveDown(){
#todo
}
?>

<script>
document.addEventListener("keydown", function(event) {
    let key = event.key;
    let direction = "";

    if (key === "ArrowUp" || key === "w") direction = "up";
    else if (key === "ArrowDown" || key === "s") direction = "down";
    else if (key === "ArrowLeft" || key === "a") direction = "left";
    else if (key === "ArrowRight" || key === "d") direction = "right";

    if (direction) {
        fetch("update_direction.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "direction=" + direction
        })
        .then(response => response.text())
        .then(data => console.log(data)) // Debugging: Log server response
        .catch(error => console.error("Error:", error));
    }
});
</script>

