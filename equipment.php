<?php
session_start();
$player_id = $_GET['player_id'];
require_once './db.connect';


$query = "SELECT * FROM equipment WHERE player_id=" . $player_id;
$result = mysqli_query($connect, $query);
if (!$result) {
    echo "<br />" . $query;
    die("<br/> Error: occured while trying to execute the query " . mysqli_error($connect));
}
?>
<div style="float: right;">
	<a href="index.php">Go back to Index</a>
</div>
<table border="1">
    <tr>
        <th>Cloth</th>
        <th>Leather</th>
        <th>Plate</th>
    </tr>
 
    <?php
//-- Fetch the result
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['cloth'] . "</td>";
        echo "<td>" . $row['leather'] . "</td>";
        echo "<td>" . $row['plate'] . "</td>";
		echo "</tr>";
    }
    ?>
</table>