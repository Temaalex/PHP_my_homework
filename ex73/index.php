<?PHP
$im=imagecreatetruecolor(1000,500);
//imageColorAllocate ($im, 50,50,50)
imageArc($im,500,150,50, 50, 0,360, imageColorAllocate ($im, 255, 218, 185));
imageFill($im,520,150,imageColorAllocate ($im, 255, 218, 185));
imageArc($im,500,225,50, 100, 0,360, imageColorAllocate ($im, 255, 20, 147));
imageFill($im,500,230,imageColorAllocate ($im, 255, 20, 147));
imagefilledrectangle($im,420,180,580,200,imageColorAllocate ($im, 255, 20, 147));
imagefilledrectangle($im,505,350,522,250,imageColorAllocate ($im, 255, 20, 147));
imagefilledrectangle($im,480,350,497,250,imageColorAllocate ($im, 255, 20, 147));
imageArc($im,500,150,30, 30, 30,150, imageColorAllocate ($im, 255, 0, 0));
imageArc($im,507,145,5, 5, 0,360, imageColorAllocate ($im, 255, 0, 0));
imageArc($im,494,145,5, 5, 0,360, imageColorAllocate ($im, 255, 0, 0));
imageArc($im,475,145,15, 15, 0,360, imageColorAllocate ($im, 255, 218, 185));
imageArc($im,525,145,15, 15, 0,360, imageColorAllocate ($im, 255, 218, 185));
imageFill($im,475,145,imageColorAllocate ($im, 240, 230, 140));
imageFill($im,525,145,imageColorAllocate ($im, 240, 230, 140));

$points = 
[
500, 150,
497, 155,
502, 155
];
imagefilledpolygon ($im, $points,3,imageColorAllocate ($im, 30, 144, 255));

imageJpeg($im, 'image.jpg');

header('Content-type: image/jpeg');
imageJpeg ($im);
imageDestroy ($im);
?>