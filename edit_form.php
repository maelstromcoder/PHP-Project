<form id="edit_process" action="edit_process.php" method="post">
            <label>Player ID: </label>
            <input id ="player_id" name="player_id" value="<?=$player_id?>" type="text"/>   
            <br/>
            <label>Player Name: </label>
            <input id="player_name" name="player_name" value="<?=$player_name?>" type="text"/>   
            <br/>
            <label>Username: </label>
            <input id="username" name="username" value="<?=$username?>" type="text"/> 
            <br/>
            <label>Password: </label>  
            <input id="password" name="password" value="<?=$password?>" type="text"/>   
			<br>
            <input name="submit" value="Submit" type="submit"/>            
</form>
