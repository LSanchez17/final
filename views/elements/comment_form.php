<form id="comment_form" action="<?php echo BASE_URL;?>blog/<?php echo $task?>" method="post">

<fieldset>
<legend>Comment</legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" required="first_name" />
<br />
            
<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" required="last_name" />
<br />
 
<label for="comment">Comment: <?=REQFIELD?></label>
<input type="textbox" class="txt" id="comment" name="comment" value="" required="comment" />
<br />

<br />

<input type="hidden" name="uID" value="<?php echo $uID ?>"/>
<input type="hidden" name="pID" value="<?php echo $pID ?>"/>

<button id="submit" type="submit" class="btn btn-primary" >Submit</button>
</fieldset>
</form>