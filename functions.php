<?php
include_once 'player.php';
include_once 'map.php';
include_once 'game.php';

//DEFINES

$direction = "";

function findPosition($map, $target) {
	foreach ($map as $rowIndex => $row) {
		foreach ($row as $colIndex => $cell) {
			if ($cell == $target) {
				return ["x" => $rowIndex, "y" => $colIndex]; // Return the position of "3"
			}
		}
	}
	return null; // If "3" is not found
}

function movePlayer($x, $y){
	global $map;
	global $direction;

	#todo

	/* echo $map[$x][$y]; */
}

?>
