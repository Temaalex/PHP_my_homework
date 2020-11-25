<?PHP
header('Content-type: image/jpeg');
$im=imagecreatefromjpeg('a.jpg');
imageJpeg ($im);
imageDestroy ($im);
?>