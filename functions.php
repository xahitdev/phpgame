<?php
include_once 'player.php';
include_once 'map.php';
include_once 'game.php';

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

function positionParser(){

}

function printPlayerPos($x, $y){
    echo "<script type='text/javascript'>alert('" . " x axis: " . $x . " y axis: ". $y . "');</script>";
}


?>
