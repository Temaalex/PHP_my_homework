<?php
if (isset ($_POST['site']))
{
	$haeders=$_POST['haeders']??false;
	$haeders.="Reply-to:<$haeders>\r\n";
	$haeders.="content-type:text/plain";
	$to=$_POST['to']??false;
	$subject=$_POST['subject']??false;
	$subject='=?utf-8?B?'.base64_encode($subject).'?=';
	$text=$_POST['text']??false;
if (mail($to,$subject,$text,$haeders)) echo 'Письмо отправлено!';
else echo 'Письмо не отправлено!';
}
?>
<form name="site" action="index.php" method="post">
			<p>От кого:</p>
			<input type="text" name="haeders"><br>
			<p>Кому:</p>
			<input type="text" name="to"><br>
			<p>Тема:</p>
			<input type="text" name="subject"><br>
			<p>Текст письма:</p>
			<p><textarea name="text"></textarea></p>
	
			<input type="submit" name="site" value="Отправить" />
</form>