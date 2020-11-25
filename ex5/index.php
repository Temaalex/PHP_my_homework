<?php
/* echo 'ex 5 lesson 1<br>';
$rand_1= mt_rand(1,30);
$rand_2= mt_rand(1,12);
$rand_3= mt_rand(1000,5000);
$rand_4= mt_rand(1,23);
$rand_5= mt_rand(1,59);
$rand_6= mt_rand(1,59);
$date_1 = new DateTime("$rand_1-$rand_2-$rand_3 $rand_4:$rand_5:$rand_6");
echo $date_1 -> format('d.m.Y.H.i.s').'<br>';

$rand_11= mt_rand(1,30);
$rand_21= mt_rand(1,12);
$rand_31= mt_rand(1000,5000);
$rand_41= mt_rand(1,23);
$rand_51= mt_rand(1,59);
$rand_61= mt_rand(1,59);
$date_2 = new DateTime("$rand_11-$rand_21-$rand_31 $rand_41:$rand_51:$rand_61");
echo $date_2 -> format('d.m.Y.H.i.s').'<br>';

$interval=$date_1->diff($date_2);
echo 'Разница:<br>';
echo $interval -> days.'-Количество дней; <br>';
echo $interval -> days*24 .'-количество часов; <br>';
echo $interval -> days*24*60 .'-количество минут; <br>';
echo $interval -> days*24*60*60 .'-количество секунд. <br>';

$interval=new DateInterval('P1D');
$period=new DatePeriod ($date_1, $interval, 20);
foreach ($period as $datetime) echo $datetime -> format('d.m.Y.H.i.s').'<br>'; */
?>
<?php
/* echo 'ex 5 lesson 2<br>';
class arr implements Iterator
{
	public $index;
	public $list = ['name'=>'Tema', 'age'=>'26'];
		public function rewind() 
		{
			reset ($this->index = 0);
		}
        
        public function current() 
		{
			return current($this->list[$this->index]);
        }
        public function key() 
		{
			return key($this->list[$this->index]);
        }
        
        public function next() 
		{
			return next($this->list[$this->index]);
        }
        
        public function valid() 
		{
		  $key = key($this->list[$this->index]);
          return ($key !== null && $key !== false);
        } 
}
$array = new arr();
foreach ($array as $k) 
{
	foreach($k as $m => $b)
	echo "$m = $b; "; 
} */
?>
<?php
/* echo 'ex 5 lesson 4 <br>';
$dir = dir ('D:\Игры\Warcraft 3 Frozen Throne');
print_r($dir);
echo '<br>';
while (($file = $dir -> read()) !== false)
{
	echo $file.'<br>';
} */
?>
<?php
/*  echo 'ex 5 lesson 5 <br>';
 function gener1($start, $to, $step)
 {
	for ($i = $start; $i < $to; $i++)
	{
	$r=$i*$step;
	yield $r.'<br>';
	}
 }
$t=gener1(1,20,13);
while ($t->valid())
{
	echo $t->current();
	$t->next ();
} */
 ?>
 <?php
/* echo 'ex 5 lesson 6 <br>';
if (isset ($_POST ['myform']))
{
	$sy=$_POST['symbol']??false;
} */
?>
<!DOCTYPE html>
<!--<html>
 <head>
  <meta charset="UTF-8">
  <title>Предварительно отформатированный текст</title>  
 </head>
	<body>
		<table border="1">
			<caption>Таблица перевода кода символа</caption>
			<tr>
				<th>Код символа</th>
				<th>Его вид</th>
			</tr>
			<tr>
				<th>
				<form name="myform" action="index.php" method="post">
					<textarea type="text" name="symbol" maxlength="1"></textarea><br>
					<input name="myform" type="submit" value="Преобразовать">
				</form>
				</th>
				<th>
					<?
						/* echo IntlChar :: ord("$sy"); */
					?>
				</th>
			</tr>
		</table>
	</body>
</html>-->
 <?php
echo 'ex 5 lesson 7 <br>';


class Point
{
	public $x;
	public $y;
	public function __construct($x,$y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	public function getX()
	{
		return $this->x;
	}
	public function getY()
	{
		return $this->y;
	}
	public function setX($x)
	{
		$this->x = $x;
	}
	public function setY($y)
	{
		$this->y = $y;
	}
}
$name = new Point('5','3');
echo $name->x.'<br>';
echo $name->y.'<br>'; 

$name->setX('50');
$name->setY('53'); 

echo $name->getX().'<br>';
echo $name->getY().'<br>';  
$pr= new ReflectionClass('Point');
$rc = $pr -> getRroperty('x', 'y');
print_r($rc);





















































?>