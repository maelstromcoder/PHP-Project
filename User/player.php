<?php
require_once './db.connect';

$query = "SELECT * FROM player order by player_id";
$result = mysqli_query($connect, $query);
if (!$result) {
    echo "<br />" . $query;
    die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
}
?>
<div style="float: right;">
	<a href="index.php">Go back to Index</a>
</div>
<center>
<table border="1">
    <tr>
        <th>Player ID</th>
        <th>Player Name</th>
        <th>Username</th>
		<th>Inventory</th>
    </tr>
 
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['player_id'] . "</td>";
        echo "<td>" . $row['player_name'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo '<td><center><a href="inventory.php?player_id=' . $row['player_id'] . '
        "title="Inventory"><img src="images/inventory.png" height="20" width="40"/></a></center></td>';
        echo "</tr>";
    }
    ?>
</table>
</center>