<HTML>
<BODY>

<FORM METHOD="POST" ACTION="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="fname">
<input type="submit" name="submit" value="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=htmlspecialchars($_REQUEST['fname']);
	if(empty($name))
		{
		echo "Name is empty";
		}
		else
		{
		echo $name;
		}
	}
?>
	
