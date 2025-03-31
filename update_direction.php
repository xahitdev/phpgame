<?php
session_start();

if (isset($_POST['direction'])) {
    $_SESSION['direction'] = $_POST['direction'];
    echo "Direction updated to: " . $_SESSION['direction'];
}

?>

