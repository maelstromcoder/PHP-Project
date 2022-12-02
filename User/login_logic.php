<?php
session_start();
require_once './db.connect';


$username = $_POST['username'];
$password = md5($_POST['password']);

$server="localhost";
$user="admin";
$pass="admin";
$database="RPG";

// Checks if connections works.
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT username,password FROM player WHERE username ='{$username}' AND password='{$password}'";

$result = mysqli_query($connect, $query);
if(!$result)
{
    echo $query;
    die("<br/>Error: ". mysqli_error($connect));
}
if(mysqli_affected_rows($connect) > 0)
{
    $_SESSION['sucess']=true;
    $_SESSION['logged_in'] = true;
    $_SESSION['error']=true;
    $_SESSION['user'] =$username;
    header("Location: index.php");
}
//while($row = mysqli_fetch_array($result))
//{
//    if ($username == $row['username'] && $password == $row['password'])
//    {
//        $_SESSION['sucess']=true;
//        $_SESSION['logged_in'] = true;
//        $_SESSION['user'] =$username;
//        header("Location: index.php");
//    }
//    else if ($username != $row['username'] && $password != $row['password'])   
//}
else
{
    $_SESSION['user']=$username;
    $_SESSION['error']=false;
    header("Location: login.php");
}

mysqli_close($connect);
?>