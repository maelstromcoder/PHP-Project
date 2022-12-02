<?php
session_start();
?>
<div style="float: right;">
	<a href="index.php">Go back to Index</a>
</div>
            <label>Player ID: "<?=$player_id?>"</label>
			<br>
			<?php 
            echo '<a href="weapon.php?player_id=' . $player_id . '"title="Weapons">Weapons</a>';
			echo " | ";
			echo '<a href="equipment.php?player_id=' . $player_id . '"title="Equipment">Equipment</a>';
			?>