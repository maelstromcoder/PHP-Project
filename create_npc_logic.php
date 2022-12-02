<?php
session_start();

$npc_id = $_POST['npc_id'];
$npc_name = $_POST['npc_name'];
$npc_profession = $_POST['npc_profession'];


require_once './db.connect';

$query = "INSERT INTO npc(npc_id, npc_name, npc_profession) VALUES 
    ('${npc_id}','${npc_name}','${npc_profession}')";

	echo $query;

$result = mysqli_query($connect, $query);
if (!$result) 
{
    echo "<br />" . $query;
    die("<br/> Error: occured while trying to create a new user" . mysqli_error($connect));
}
mysqli_close($connect);

$_SESSION['creation']=true;
$_SESSION['name']=$npc_name;
header("Location: index.php");
?>
