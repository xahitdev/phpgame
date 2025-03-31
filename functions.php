<?php
include_once 'player.php';
include_once 'map.php';
include_once 'game.php';

//DEFINES

function findPosition($map, $target) {
	foreach ($map as $rowIndex => $row) {
		foreach ($row as $colIndex => $cell) {
			if ($cell == $target) {
				return ["x" => $rowIndex, "y" => $colIndex]; 
			}
		}
	}
	return null; // If "3" is not found
}

?>
