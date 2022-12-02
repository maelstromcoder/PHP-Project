<?php
	session_start();
    $npc_id = $_GET['npc_id'];
	require_once './db.connect';

	// Extract Monster_name
	$quer = "SELECT npc_name FROM npc where npc_id=" . $npc_id;
	$result = mysqli_query($connect, $quer);
	$row = mysqli_fetch_array($result);
	$npc_name = $row['npc_name'];
	$_SESSION['name']=$npc_name;
	
	$query = "DELETE FROM npc WHERE npc_id=" . $npc_id;
    $result = mysqli_query($connect, $query);
    if (!$result) 
	{
        echo "<br />" . $query;
        die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
    }
		
	$_SESSION['deletion']=true;
    header('Location: index.php');
?>