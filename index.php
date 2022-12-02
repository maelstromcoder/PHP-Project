<?php
session_start();
// Check validation so you cannot access index.php directly
if (!isset($_SESSION['logged_in'])) 
{
    header("Location: front.php");
}
?>
<body>
<?php
if (isset($_SESSION['upload']))
{
	$_SESSION['back'] = $_SESSION['name'];
}
?>
<body style="background-image:url('<?=$_SESSION['back']?>')">
<center>
<table border="2" width="300">
            <caption>
                <strong>This is the game database!</strong>
            </caption>
	<tr>
		<th>Lists</th>
		<th>Creation</th>
	</tr>
	<tr>
		<td>
			<a href="player.php" alt="Go to player list">Player list</a>
		</td>
		<td>
			<a href="create_player.php" alt="Create Player">Create a new player</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="monster.php" alt="Go to monster list">Monster list</a>
		</td>
		<td>
			<a href="create_monster.php" alt="Create Monster">Create a new monster</a>
		</td>
	</tr>
	<tr>   
		<td>
			<a href="npc.php" alt="Go to NPC list">NPC list</a>
		</td>
		<td>
			<a href="create_npc.php" alt="Create NPC">Create a new NPC</a>
		</td>
	</tr>
	<tr>
		<td colspan="2"><center>
			<a href="shop_form.php" alt="Shop">Shop</a>
		</td></center>
	<tr>
	<tr>
		<td colspan="2"><center>
			<a href="upload_form.php" alt="Upload a file">Upload</a>
		</td></center>
	</tr>
	<tr>
		<td colspan="2"><center>
			<a href="logout.php" alt="Logout current user" style="color:red; font-weight:normal;">Logout</a>
		</center></td>
	</tr>
	<tr>
		<td colspan="2">
			<?php
				if (isset($_SESSION['deletion']))
				{
				?>
					<div style="float:left; color:green;">
					You have successfully deleted <?=$_SESSION['name']?>.
					</div>
				<?php
				unset($_SESSION['deletion']);
				unset($_SESSION['name']);
				}
				else if (isset($_SESSION['creation']))
				{
				?>
					<div style="float:left; color:green;">
					You have successfully created <?=$_SESSION['name']?>.
					</div>
				<?php
				unset($_SESSION['creation']);
				unset($_SESSION['name']);				
				}
				else if (isset($_SESSION['edition']))
				{
				?>
					<div style="float:left; color:green;">
					You have successfully edited <?=$_SESSION['name']?>.
					</div>
				<?php
				unset($_SESSION['edition']);
				unset($_SESSION['name']);				
				}
				else if (isset($_SESSION['upload']))
				{
				?>
					<div style="float:left; color:green;">
					Your upload has been stored in: <?=$_SESSION['name']?>.
					</div>
				<?php
				unset($_SESSION['upload']);
				unset($_SESSION['name']);				
				}
				else 
				{
				?>
					<div>
					No actions has been made.
					</div>
				<?php
				}
				?>
	</tr>
	<tr>
		<td colspan="2">
			<?php
				if (isset($_SESSION['sucess']))
				{
				?>
					<div style="float: left; color:green;">
					Logged in as <?=$_SESSION['user']?>.
					</div>
				<?php
				}
				?>
		</td>
	</tr>
</table>
</center>
</body>
