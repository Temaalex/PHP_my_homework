<?php 
echo 'ex1 lesson 2'.'<br>';

	$arr=[50.25, 20.38, 50.78, 75.75, 50];
	foreach ($arr as $s)
	{
		$v=($s/100)*(100-23);
		echo round ($v, 2).'<br>';
	};
	if (isset($_POST['myform']))
	{
		$min=$_POST['min']??false;
		$max=$_POST['max']??false;
	};
 	function arr($a, $b)
		{	
			global $max;
			global $min;
			if ($a>$b) 
			{
				$a=false;
				$b=false;
				echo 'Выберете нужный диапазон';
			}
			elseif ($a="" || $b="" || !is_numeric($a) || !is_numeric($b))
			{
				$a=false;
				$b=false;
				echo 'Введены не верные параметры';
			}  
			else 
			{
				echo 'Случайное число '.  mt_rand ($min, $max);
			} 
		};
?>
<form name="myform" action="index.php" method="post">
<div>
<p>Cлучайное число:</p>
	От: <input type="text" name = "min"><br>
	До: <input type="text" name = "max"><br><br>
	<p><? arr($min, $max); ?></p>
	<input type="submit" name = "myform" value="Random namber">
</div>
</form>
<?php
echo 'ex2 lesson 2'.'<br>';
if (isset($_POST['myform']))
{
	$text=$_POST['text']?? false;
	$text1=$_POST['text1']?? false;

}
$open=function($a)
{	
	global $text;
	echo '<br>'. $text. '<br>';
	echo mb_strlen($text);
};
$open1=function($b)
{	
	global $text1;
	echo '<br>'. $text1.'<br>';
	echo mb_strlen($text1);
}; 
?>
<form name="myform"action="index.php" method="post">
	<p><textarea name="text"><?=$text?></textarea></p><br>
	<input name="text1" value="<?=$text1?>"><br>
	<input name="myform" type="submit">
	<?=$open($text); echo $open1($text1). '<br>';
	if (strpos ($text, $text1)!==false)
	echo str_replace($text1, "<b>$text1</b>", $text);
	?>
</form>
<?php 
echo 'ex3 lesson 2'.'<br>';
$list=range(1, 50);
print_r($list);
echo '<br>';
echo mt_rand($list[0], $list[49]);
echo '<br>';
shuffle($list);
foreach($list as $rand);
echo $rand. '<br>';

$date=
[
	[
	'name'=>'nic',
	'age'=>'15',
	],
	[
	'name'=>'mic',
	'age'=>'20',
	],
	[
	'name'=>'los',
	'age'=>'25',
	],
	[
	'name'=>'masha',
	'age'=>'14',
	],
	[
	'name'=>'kola',
	'age'=>'35',
	]
];
$date_age=[];

foreach($date as $key => $arr)
{
	$date_age[$key]=$arr['age'];
}
for($i=0;$i<10000; $i++)
{
	$date_tmp=$date;
	array_multisort($date_age, SORT_NUMERIC, $date_tmp, $date);	
}
echo'<pre>';
print_r($date);
echo'</pre>';
?>
<?php
echo 'ex4 lesson 2'.'<br>';
$time=microtime(true);
for($i = 0; $i < 10**7; $i++);
echo (microtime(true)-$time). '<br>';

$t=(time() + mt_rand(1, 10) * 10000);
echo (time() + mt_rand(1, 10) * 10000). '<br>';
$s=date('d.m.Y H:i:s');
$s_1=date('d.m.Y H:i:s',$t);
echo date($s). '<br>'; 
echo date($s_1). '<br><br>';
$r=strtotime($s);
$r_1=strtotime($s_1);
$r_end=$r_1-$r;
echo date('H:i:s', $r_end).'<br><br>';
$time=date('d.m.Y H:i:s'); 

if (isset($POST['bo']))
	{	
		$t1=$_POST['t1']??false;
		$t2=$_POST['t2']??false;
		$t3=$_POST['t3']??false;
	}
	echo $_POST['bo'];
	$time_4=date('H:i:s');
	$time_5=strtotime($time_4);
	$suka=function()
	{
	global $time_4;
	$t1=strtotime($time_4);
	echo date('H:i:s', $t1).'<br>';
	};
	$suka1=function()
	{
	global $time_4;
	$t2=strtotime($time_4)+3600;
	echo date('H:i:s', $t2).'<br>';
	};
	$suka2=function()
	{
	global $time_4;
	$t3=strtotime($time_4)+3600*2;
	echo date('H:i:s', $t3).'<br>';
	};
?>
<form action="index.php" method="post">
	<select name="bo">
		<option value="</*?=$suka()?>"> часовой пояс +0 </option>
		<option value="</*?=$suka1()?>"> часовой пояс +1 </option>
		<option value="<?=$suka2()?>"> часовой пояс +2 </option>
	</select>
	<input type="submit" name = "okey" value="час. пояс">
</form>

<?php 
echo 'ex5 lesson 2'.'<br>';
function hello ()
{
	if (isset ($_POST['save']))
{
	$text=$_POST['text']??false;
	if($text !== "")
	{
	file_put_contents('text.txt', $text, FILE_APPEND);
	echo 'Сохранение прошло успешно';
	}
	else echo 'введите сообщение';
}
else if (isset ($_POST['load']))
{
	$text=$_POST['text']??false;
	if (file_exists('text.txt')==0) echo 'Файл не существует';
	else echo file_get_contents('text.txt');
}
else if (isset ($_POST['delete']))
{
	$text=$_POST['text']??false;
	if (file_exists('text.txt')==0) 
	{
		echo 'Файл не существует';
	}
	else 
	{
		unlink ('text.txt');
		echo 'Файл успешно удален';
	}
}
}
?>
<form action="index.php" method="post">
	<p><textarea name="text"><? hello()?></textarea></p><br>
	<input name="save" type="submit" value="Сохранить">
	<input name="load" type="submit" value="Загрузить">
	<input name="delete" type="submit" value="Удалить">
</form>

<?php 
echo 'ex7 lesson 2'.'<br>';

$f = fopen (__FILE__,'r');
if (!flock($f, LOCK_EX | LOCK_NB))
{
	exit('script is already ranning');
}	
sleep(3);
?>
<?php 
echo 'ex8 lesson 2'.'<br>';
for($i=0; $i<5;$i++)
{
	$rand=uniqid('',true);
	mkdir($rand, 0777, true);
}
$m=scandir($rand);
print_r($m);
rmdir($rand);
?>

<?php 
echo 'ex9 lesson 2'.'<br>';
$ip=gethostbyname('google.ru');
echo $ip. '<br>';
$host=gethostbyaddr($ip);
echo $host. '<br>';
?>

<?php 
echo 'ex10 lesson 2'.'<br>';
if (isset($_POST['myform']))
{
	$text=$_POST['text']?? false;
	exec(' $text');
	phpinfo();
}
?>
<form action="index.php" method="post" name="myform">
	<input name="text" type="text">
	<input name="myform" type="submit" value="путь">
</form>

<?php 
echo 'ex11 lesson 2'.'<br>';
$reg='#\w\d\w\w[^d]#';
$str1='57abc';
$str2='a7cdc';
$str3='A889c';
$str4='/7abc';
$str5='57abd';
echo preg_match($reg, $str1). '<br>';
echo preg_match($reg, $str2). '<br>';
echo preg_match($reg, $str3). '<br>';
echo preg_match($reg, $str4). '<br>';
echo preg_match($reg, $str5). '<br>';
?>
<?php
echo 'ex12 lesson 2'.'<br>';
$str=date('Y.m.d H:i:s');
echo $str;
$reg='/(\d*)\.(\d*)\.(\d*)\s(\d*):(\d*):(\d*)$/im';
echo preg_match_all($reg, $str, $matches). '<br>';
echo '<pre>';
print_r($matches);
echo '<pre/>';
?>
<?php
echo 'ex13 lesson 2'.'<br>';
if (isset($_POST['myform']))
	{	
		$text=$_POST['text']??false;
		$reg='#[a-z0-9]+(\s)*\.(\s)*(com|ru|org)$#';
		$text=preg_replace($reg, 'Ссылки запрещены', $text);
	}
?>
<form action="index.php" method="post"name="myform">
	<p><textarea name="text"></textarea></p><br>
	<?=$text?><br>
	<input name="myform" type="submit" value="отправить">
</form>