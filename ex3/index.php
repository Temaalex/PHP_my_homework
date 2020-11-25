<?php
/* echo 'lesson 3 ex. 3 <br>';

class Point
{
	public $x = '5';
	public $y = '3';
}
$ob=new Point();
echo $ob->x.'<br>';
echo $ob->y; */
?>
<?php
/* echo 'lesson 3 ex. 4 <br>';

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
echo $name->getY().'<br>';  */
?>
<?php
/* echo 'lesson 3 ex. 5 <br>';

class Point
{
	private $y;
	private $x;
	
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
	
	public function setY($y)
	{
		$this->y = $y;
	}
	public function setX($x)
	{
		$this->x = $x;
	}
}
$c=new Point ('10','5');
//echo $c->x.'<br>';
//echo $c->y.'<br>'; 
echo $c->getX().'<br>';
echo $c->getY().'<br>';  */ 
?>
<?php
/* echo 'lesson 3 ex. 7 <br>';

class Point
{
	public $y;
	public $x;
	public $z;
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
	public function getZ()
	{
		return $this->z;
	}
	public function setY($y)
	{
		$this->y = $y;
	}
	public function setX($x)
	{
		$this->x = $x;
	}
	public function setZ($z)
	{
		$this->z = $z;
	}
	public function __toString()
	{
		$s='';
	foreach ([$this->x] as $k=>$v) 
	foreach ([$this->y] as $c=>$m) 
		{
			$s="Точка с координатами ($v, $m)";
		}
		return $s;
	}
	public function __get($x)
	{
		if (isset($this->x[$x])) return $this->x[$x];
		return 'Класс Point работает только в двумерном пространстве';
		if (isset($this->y[$y])) return $this->y[$y];
		return 'Класс Point работает только в двумерном пространстве';
	}
 	public function __call($method, $z)
	{
		echo "Переданные параметры:".print_r ($z, true);
		
	}
	public function __clone()
	{
		$this -> x = 1000;
		$this -> y = 1300;
		$this -> z = 1500;
	}
}

$a=new Point ('7','99');
$b=new Point ('6','100');
$c=new Point ('88','9');
echo $c->getX().'<br>';
echo $c->getY().'<br>';
echo $c->getZ().'<br>';
echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';
$d=new Point ('7','99');
echo $d->x.'<br>';
echo $d->y.'<br>';
echo $d->r.'<br>';

$d->x=5;
echo $d->x.'<br>';
$d->y=66;
echo $d->y.'<br>';
$d->z='Класс Point работает только в двумерном пространстве';
echo $d->z.'<br>';

echo $d->notFound($d).'<br>';

$r=clone $d;
echo $r->x.'<br>';
echo $r->y.'<br>';
echo $r->z.'<br>'; */
?>
<?php
/* echo 'lesson 3 ex. 8 <br>';
class Point
{
	private $x;
	private $y;
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
	public function setY($y)
	{
		$this->y = $y;
	}
	public function setX($x)
	{
		$this->x = $x;
	}
}
if (isset($_POST["myform"]))
{
	$x=$_POST["x"]??false;
	$y=$_POST["y"]??false;

	$user =new Point ("$x", "$y");
	$str = serialize ($user);
	echo $str;
} */
?>
<!--<form action="index.php" name="myform" method="post">
<p>X:</p><input type ="text" name="x">
<p>Y:</p><input type ="text" name="y"><br><br>
<input type ="submit" value ="сохранить" name="myform">
<input type ="submit" value ="Загрузить">
</form>-->
<?php
/* echo 'lesson 3 ex. 9 <br>';
abstract class Shape 
{
	public function drow(){}
	public function __toString()
	{
		return print_r($this, true);
	}
}
class Point extends Shape
{
	public $x;
	public $y;
	public function __construct($x,$y)
	{
		$this -> x =$x;
		$this -> y =$y;
	}
	public function drow()
	{
		echo '<br>Pисуем точку с координатами '. $this->x .' и '. $this->y .'.';
	}
} 
$s=new Point(1,10);
echo $s;
$list = [$s];
foreach($list as $l)
{
	$l->drow();
	echo '<br>';
} */
?>
<?php
/* echo 'lesson 3 ex. 10 <br>';
interface CanMove
{
	public function move();
}
interface CanFly
{
	public function fly();
}
class Car implements CanMove 
{
	public function move() {echo "Движение автомобиля<br>";}
}
class Aircraft implements CanFly 
{
	public function fly() {echo "Полет самолета<br>";}
}
$car=new Car();
echo $car->move();
$fly=new Aircraft();
echo $fly->fly(); */
?>
<?php
/* echo 'lesson 3 ex. 11 <br>';
trait CanMove
{
	public function move() {echo "Движение автомобиля<br>";}
}
trait CanFly
{
	public function fly() {echo "Полет самолета<br>";}
}
class Car 
{
	use CanMove;
}
class Aircraft
{
	use CanFly;
}
$car=new Car();
echo $car->move();
$fly=new Aircraft();
echo $fly->fly(); */
?>
<?php
/* echo 'lesson 3 ex. 12 <br>';

include  'Car.php';
include  'Aircraft.php';

use ru\Car\Car;
use ru\Aircraft\Aircraft;

$car=new Car();
echo $car->move();
$fly=new Aircraft();
echo $fly->fly(); */
?>
<?php
/* echo 'lesson 3 ex. 14 <br>';
set_include_path(get_include_path() . PATH_SEPARATOR . 'lib');
spl_autoload_extensions('.php');
spl_autoload_register();

$car=new Car();
echo $car->move();
$fly=new Aircraft();
echo $fly->fly(); */
 ?>