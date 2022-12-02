<?php
	session_start();
    $npc_id = $_GET['npc_id'];
	require_once './db.connect';
 
	$query = "SELECT * FROM npc WHERE npc_id=" . $npc_id;
    $result = mysqli_query($connect, $query);
    if (!$result) 
	{
        echo "<br />" . $query;
        die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
    }
	
	$row = mysqli_fetch_array($result);
    $npc_name = $row["npc_name"];
    $npc_id = $row["npc_id"];
    $npc_profession = $row["npc_profession"];
        
	require_once './edit_npc_form.php';
?>