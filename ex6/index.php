<?php
/* echo 'ex 6 lesson 1<br>';
if (isset ($_POST["site"]))
{
	$button1=$_POST["button1"]??false;
	$button2=$_POST["button2"]??false;
	$button3=$_POST["button3"]??false;
		if ($button1 !== false)
		{
			//header('Location://google.ru');
			echo '<a href="//google.ru">Google</a>';
			exit;
		}
		elseif ($button2 !== false)
		{
			//header('Location://vk.com'); 
			echo '<a href="//vk.com">VK</a>';
			exit;
		}
		elseif ($button3 !== false)
		{
			//header('Location://myrusakov.ru');
			echo '<a href="//myrusakov.ru">Сайт автора</a>';
			exit;
		} 
}  */
?>
<!--<form name="site" action="index.php" method="post">
	<input type="radio" name="button1">«Google»<br>
	<input type="radio" name="button2">«VK»<br>
	<input type="radio" name="button3">«Сайт автора»<br>
	<input type="submit" name="site" value="Перейти на сайт">
</form>-->
<?php
/* echo 'ex 6 lesson 2<br>';
$button1=$_POST ["button1"]??false;
$button2=$_POST ["button2"]??false;
$button3=$_POST ["button3"]??false;
	if ($button1 !== false)
	{
		$button="red";
	}
	elseif ($button2 !== false)
	{
		$button="green";
	}
	elseif ($button3 !== false)
	{
		$button="blue";
	} */
?>
<!--<!DOCTYPE html>
<html>
 <head>
	<style>
	body {
		background: url(./img/<?=$button?>.png);
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
</html>-->
