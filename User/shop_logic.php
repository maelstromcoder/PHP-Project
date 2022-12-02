<?php
$player_id = $_GET['player_id'];

require_once './db.connect';

$weapon = $_POST['weapon'];
$equipment = $_POST['equipment'];

$query = "UPDATE weapon SET player_id= '{$player_id}', dagger='{$player_id}_{$weapon}' WHERE player_id=" . $player_id;

$result = mysqli_query($connect, $query);
if (!$result) 
{
    echo "<br />" . $query;
    die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
}

$query1 = "UPDATE equipment SET player_id= '{$player_id}', plate='{$player_id}_{$equipment}' WHERE player_id=" . $player_id;

$result = mysqli_query($connect, $query1);
if (!$result) 
{
    echo "<br />" . $query;
    die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
}


?>