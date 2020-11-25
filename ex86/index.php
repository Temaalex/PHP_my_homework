<?PHP
define ('DB_HOST','localhost');
define ('DB_USER','root');
define ('DB_PASSWORD','');
define ('DB_NAME','temka_time');

$mysqli=@new mysqli (DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($mysqli-> connect_errno) exit ('ошибка соединения с БД!');
$mysqli -> set_charset ('utf8');

/* $mysqli -> query ('CREATE DATABASE	`name`');
$mysqli -> query ('DROP DATABASE	`name`'); */

if (isset ($_POST['time']))
{
	$id= $mysqli->real_escape_string(htmlspecialchars($_POST['id']));
	$timezone= $mysqli->real_escape_string(htmlspecialchars($_POST['timezone']));
	$move= $mysqli->real_escape_string(htmlspecialchars($_POST['move']));

/* INSERT INTO `temka_time1` 
(`id`, `title`, `offset`) 
VALUES ('5', '+6', '2020-04-12 15:00:00.000000'); */

$query = "INSERT INTO `temka_time1`(`id`, `title`, `offset`)
VALUES ('$id', '$timezone', '$move')";

$result=$mysqli->query($query);
}

if (isset ($_POST['del']))
{
	$delete=$mysqli->real_escape_string(htmlspecialchars($_POST['delete']));
	$query = "delete from `temka_time1` where `id` = $delete"; 
	$result=$mysqli->query($query);
}

$result_set=$mysqli->query ("SELEKT * FROM `temka_time`");

$table=[];
while($row=$result_set->fetch_assoc());
{
	$table[]=$row;
}
print_r($table);



$mysqli -> close();
/* UPDATE table_name SET serv='131' WHERE user='767' AND date='2016-02-04' AND serv='64'; */
?>
<?php if (isset($result)){?>
<?php if ($result){?>
<p>Успешно</p>
<?php } else { ?>
<p>Ошибка</p>
<?php } ?>
<?php } ?>

<form name='time' action='index.php' method='post'>
	<p>id: <input type='text' name='id'></p>
	<p>Часовой пояс: <input type='text' name='timezone'></p>
	<p>Смещение: <input type='text' name='move'></p>
	
	<p><input type='submit' name='time' value='добавить'></p>
</form>
<form name='del' action='index.php' method='post'>
	<p>Удалить: <input type='text' name='delete'></p>
	<p><input type='submit' name='del' value='удалить'></p>
</form>
<?php ?>
