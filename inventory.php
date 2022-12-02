<?php
    $player_id = $_GET['player_id'];
	
    require_once './db.connect';
    
	$query = "SELECT * FROM inventory WHERE player_id=" . $player_id;
    $result = mysqli_query($connect, $query);
    if (!$result) 
	{
        echo "<br />" . $query;
        die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
    }
	require_once './inventory_interface.php';
?>
