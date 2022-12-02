<?php
require_once './db.connect';

$query = "SELECT * FROM npc order by npc_id";
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
        <th>NPC ID</th>
        <th>NPC Name</th>
        <th>NPC Profession</th>
    </tr>
 
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['npc_id'] . "</td>";
        echo "<td>" . $row['npc_name'] . "</td>";
        echo "<td>" . $row['npc_profession'] . "</td>";
		echo "</tr>";
    }
    ?>
</table>
</center>