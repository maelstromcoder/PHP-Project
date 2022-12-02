<div style="float: right;">
	<a href="index.php">Go back to Index</a>
</div>
<form id="create_monster" action="create_monster_logic.php" method="post">
            <label>Monster ID: </label>
            <input id ="monster_id" name="monster_id" value="" type="text"/>   
            <br/>
            <label>Monster Name: </label>
            <input id="monster_name" name="monster_name" value="" type="text"/>   
            <br/>
            <label>Monster Type</label>
            <input id="monster_type" name="monster_type" value="" type="text"/> 
            <br/>
            <label>Monster Size</label>
            <input id="monster_size" name="monster_size" value="" type="text"/> 
            <br/>
            <input name="submit" value="Create Monster" type="submit"/>     
</form>