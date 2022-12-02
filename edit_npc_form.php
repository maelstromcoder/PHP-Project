<form id="edit_npc_form" action="edit_npc_process.php" method="post">
            <label>NPC Name: </label>
            <input id ="npc_name" name="npc_name" value="<?=$npc_name?>" type="text"/>   
            <br/>
            <label>NPC ID: </label>
            <input id="npc_id" name="npc_id" value="<?=$npc_id?>" type="text"/>   
            <br/>
            <label>NPC Profession: </label>
            <input id="npc_profession" name="npc_profession" value="<?=$npc_profession?>" type="text"/> 
			<br>
            <input name="submit" value="Submit" type="submit"/>              
</form>
