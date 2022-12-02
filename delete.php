<?php
	session_start();
    $player_id = $_GET['player_id'];
	require_once './db.connect';
	
	// Extract Monster_name
	$quer = "SELECT player_name FROM player where player_id=" . $player_id;
	$result = mysqli_query($connect, $quer);
	$row = mysqli_fetch_array($result);
	$player_name = $row['player_name'];
	$_SESSION['name']=$player_name;
	
	$query3 = "DELETE FROM equipment WHERE player_id=" . $player_id;
	$result = mysqli_query($connect, $query3);
    if (!$result) 
	{
        echo "<br />" . $query3;
        die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
    }
	
	$query2 = "DELETE FROM weapon WHERE player_id=" . $player_id;
	$result = mysqli_query($connect, $query2);
    if (!$result) 
	{
        echo "<br />" . $query2;
        die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
    }
	
	$query1 = "DELETE FROM inventory WHERE player_id=" . $player_id;
	$result = mysqli_query($connect, $query1);
    if (!$result) 
	{
        echo "<br />" . $query1;
        die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
    }
	// Parent Table at the end because you cannot delete parent table if theirs content inside.
	$query = "DELETE FROM player WHERE player_id=" . $player_id;
    $result = mysqli_query($connect, $query);
    if (!$result) 
	{
        echo "<br />" . $query;
        die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
    }
	
	$_SESSION['deletion']=true;
    header('Location: index.php');

?>