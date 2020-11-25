<?php
	session_start();
	$counter = $_SESSION['counter']??0;
		$button1=$_POST ["button1"]??false;
		$button2=$_POST ["button2"]??false;
		$button3=$_POST ["button3"]??false;
		if ($button1 !== false)
		{
			$x="red";
		}
		elseif ($button2 !== false)
		{
			$x="green";
		}
		elseif ($button3 !== false)
		{
			$x="blue";
		} 
		$_SESSION['counter']=$counter;
			$counter="$x";
	
echo 'ex 6 lesson 2<br>';
?>
<!DOCTYPE html>
<html>
 <head>
	<style>
	body {
		background: url(./img/<?=$counter?>.png);
		}
	</style>
 </head>
	<body>
		 <form name="site" action="index.php" method="post">
			<input type="submit" name="button1" value="Red"><br>
			<input type="submit" name="button2" value="Green"><br>
			<input type="submit" name="button3" value="Blue"><br>
		</form>
	</body>
</html>