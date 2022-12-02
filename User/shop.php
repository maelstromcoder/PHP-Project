<?php
	$player_id = $_GET['player_id'];
	
    require_once './db.connect';
    
	$query = "SELECT * FROM inventory WHERE player_id=" . $player_id;
    $result = mysqli_query($connect, $query);
    if (!$result) 
	{
        echo "<br />" . $query;
        die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
    }
	
	
// shop price $price = 100;
// query player gold = 500;
// $newgold = $gold - $price;

// update player where gold=$gold, {$newgold};
// something like this
?>
<div style="float: right;">
	<a href="index.php">Go back to Index</a>
</div>
<table border="5" width="500">
	<tr>
		<th>Weapon</th>
		<th>Equipment</th>
	</tr>
	<tr>
		<td>Dagger</td>
		<td>Leggings</td>
	</tr>
	<tr>
		<td>Broadsword</td>
		<td>Platemail</td>
	<tr>
</table>
<form id="shop" action="shop_logic.php?player_id=<?=$player_id?>" method="post">
			<br>
            <label>Player ID: </label>
            <input id="equipment" name="equipment" value="<?=$player_id?>" type="text"/>
            <br/>
            <label>Weapon: </label>
            <input id="weapon" name="weapon" type="text"/>   
            <br/>
            <label>Equipment: </label>
            <input id="equipment" name="equipment" type="text"/> 
            <br/>
            <input name="submit" value="Submit" type="submit"/>            
</form>
