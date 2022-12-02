<?php
session_start();
if (isset($_SESSION['error']))
{
?>
<center>
    <div style="text-decoration:none; font-weight:bold;">
        Login error: "<?=$_SESSION['user']?>" does not exist or password does not match.
    </div>
</center>
<?php
unset($_SESSION['error']);
}

?>	
<center>
    <label>Login Form</label>&nbsp;&nbsp;&nbsp;
        <a title="Secret button!?" style="font-size:1;" href="../login.php">Secret</a>
	
    <form id="login_form" action="login_logic.php" method="post">
        <label>Username:</label>
            <input id="username" name="username" type="text"/> 
                <br>
        <label>Password:</label>
            <input id="password" name="password" type="password"/> 
                <br>
            <input value="Submit" type="Submit" name="Submit"/>
    </form>
</center>