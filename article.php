<?php 
echo 
'<form method="post" action="play.php">
   Article Title: <input type="text" name="title"><br>
   Article Text: <textarea name="content" cols="20" rows="12"></textarea><br>
   <input type="submit" value="Create" name="send">
   <br>
   Tags: <br>
   PHP<input type="checkbox" name="tag[]" value="php"><br>
   WEB<input type="checkbox" name="tag[]" value="web"><br>
   JAVA<input type="checkbox" name="tag[]" value="java"><br>
   JS<input type="checkbox" name="tag[]" value="js"><br>
</form>';