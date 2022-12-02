<?php
	session_start();
    $player_id = $_GET['player_id'];
	require_once './db.connect';

	$query = "SELECT * FROM player WHERE player_id=" . $player_id;
    $result = mysqli_query($connect, $query);
    if (!$result) 
	{
        echo "<br />" . $query;
        die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
    }
	
	$row = mysqli_fetch_array($result);
    $player_id = $row["player_id"];
    $player_name = $row["player_name"];
    $username = $row["username"];
    $password = $row["password"];

	$_SESSION['name']=$player_name;
	$_SESSION['edition']=true;
    require_once './edit_form.php';
?>