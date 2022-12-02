<?php
require_once './db.connect';

$query = "SELECT * FROM monster order by monster_id";
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
        <th>Monster ID</th>
        <th>Monster Name</th>
        <th>Monster Type</th>
        <th>Monster Size</th>
    </tr>
 
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['monster_id'] . "</td>";
        echo "<td>" . $row['monster_name'] . "</td>";
        echo "<td>" . $row['monster_type'] . "</td>";
        echo "<td>" . $row['monster_size'] . "</td>";
		echo "</tr>";
    }
    ?>
</table>
</center>