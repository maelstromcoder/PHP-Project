<form id="edit_monster_process" action="edit_monster_process.php" method="post">
            <label>Monster Type: </label>
            <input id ="monster_type" name="monster_type" value="<?=$monster_type?>" type="text"/>   
            <br/>
            <label>Monster ID: </label>
            <input id="monster_id" name="monster_id" value="<?=$monster_id?>" type="text"/>   
            <br/>
            <label>Monster Name: </label>
            <input id="monster_name" name="monster_name" value="<?=$monster_name?>" type="text"/> 
            <br/>
            <label>Monster Size: </label>  
            <input id="monster_size" name="monster_size" value="<?=$monster_size?>" type="text"/> 
			<br>
            <input name="submit" value="Submit" type="submit"/>             
</form>
