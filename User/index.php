<?php
session_start();
// Check validation so you cannot access index.php directly
if (!isset($_SESSION['logged_in'])) 
{
    header("Location: ../front.php");
}
?>
<center>
<table border="2" width="300">
            <caption>
                <strong>This is the game database!</strong>
            </caption>
	<tr>
		<th>Lists</th>
	</tr>
	<tr>
		<td>
			<a href="player.php" alt="Go to player list">Player list</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="monster.php" alt="Go to monster list">Monster list</a>
		</td>
	</tr>
	<tr>   
		<td>
			<a href="npc.php" alt="Go to NPC list">NPC list</a>
		</td>
	</tr>
	<td colspan="2"><center>
			<a href="shop_form.php" alt="shop">Shop</a>
		</center></td>
	<tr>
		<td colspan="2"><center>
			<a href="logout.php" alt="Logout current user" style="color:red; font-weight:normal;">Logout</a>
		</center></td>
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