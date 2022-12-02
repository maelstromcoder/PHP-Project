<?php
	session_start();
    $monster_id = $_GET['monster_id'];
	require_once './db.connect';
	
	// Extract Monster_name
	$quer = "SELECT monster_name FROM monster where monster_id=" . $monster_id;
	$result = mysqli_query($connect, $quer);
	$row = mysqli_fetch_array($result);
	$monster_name = $row['monster_name'];
	$_SESSION['name']=$monster_name;
	
	$query = "DELETE FROM monster WHERE monster_id=" . $monster_id;
    $result = mysqli_query($connect, $query);
    if (!$result) 
	{
        echo "<br />" . $query;
        die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
    }
		
	$_SESSION['deletion']=true;
    header('Location: index.php');
?>