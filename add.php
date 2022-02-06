<?php
$image_path='./camera.jpg';
$image=imagecreatefromjpeg($image_path);
header('Content-Type: image/jpeg');
$kernal = array(array($_GET["x1"], $_GET["x2"], $_GET["x3"]),
                array($_GET["y1"], $_GET["y2"], $_GET["y3"]),
                array($_GET["z1"], $_GET["z2"], $_GET["z3"]));
$divisor = array_sum(array_map('array_sum', $kernal));                 
imageconvolution($image, $kernal, $divisor, 0);
imagejpeg($image,  'pru.jpg');

header("Location: http://localhost:2080/s/#btn"); 
?>