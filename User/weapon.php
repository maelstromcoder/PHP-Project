<?php
session_start();
$player_id = $_GET['player_id'];
require_once './db.connect';


$query = "SELECT * FROM weapon WHERE player_id=" . $player_id;
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
        <th>Dagger</th>
        <th>Sword</th>
        <th>Staff</th>
    </tr>
 
    <?php
//-- Fetch the result
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['dagger'] . "</td>";
        echo "<td>" . $row['sword'] . "</td>";
        echo "<td>" . $row['staff'] . "</td>";
		echo "</tr>";
    }
    ?>
</table>