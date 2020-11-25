<?PHP
/*echo 'lesson 7 exercise 2 <br>';
class Valid {
	
	static public function validEmail($email)
	{
	if (filter_var($email, FILTER_VALIDATE_EMAIL))
		echo 'Данные прошли';
	else echo '-------';
	}
	static public function validURL($url)
	{
	if (filter_var($url, FILTER_VALIDATE_URL))
		echo 'Данные прошли';
	else echo '-------';
	}
}

echo Valid::validEmail('abc@mail.ru'). '<br>';
echo Valid::validURL('http://ex7');*/
?>
<?PHP
echo 'lesson 7 exercise 3 <br>';
header('Content-type: image/jpeg');
$im=imagecreatefromjpeg('a.jpg');
imageJpeg ($im);
imageDestroy ($im);
//echo imageSX($im).'<br>';
//echo imageSY($im);
?>