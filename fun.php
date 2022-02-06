<?php
//emboss
header('Content-Type: image/jpeg');
$image_path = './camera.jpg';
$image_embose=imagecreatefromjpeg($image_path);
$emboss = array(array(2, 0, 0), array(0, -1, 0), array(0, 0, -1));
imageconvolution($image_embose, $emboss, 1, 127);
imagejpeg($image_embose,  'emboss.jpg');

//gaussian_blur
$image_gaussian_blur=imagecreatefromjpeg($image_path);
$gaussian_blur = array(array(1, 2, 1), array(2, 4, 2), array(1, 2, 1));
$divisor_gaussian_blur = array_sum(array_map('array_sum', $gaussian_blur));           
imageconvolution($image_gaussian_blur, $gaussian_blur, 30, 0);
imagejpeg($image_gaussian_blur,  'gaussian_blur.jpg');

//box_blur
$image_box_blur=imagecreatefromjpeg($image_path);
$box_blur = array(array(0.11111, 0.11111, 0.11111), array(0.11111, 0.11111, 0.11111), array(0.11111, 0.11111, 0.11111));
$divisor_box_blur = array_sum(array_map('array_sum', $box_blur));           
imageconvolution($image_box_blur, $box_blur, 1, 127);
imagejpeg($image_box_blur,  'box_blur.jpg');

//sharpenMatrix
$image_sharpenMatrix=imagecreatefromjpeg($image_path);
$sharpenMatrix = array(array(-1.2, -1, -1.2),array(-1, 20, -1),array(-1.2, -1, -1.2));
$divisor_sharpenMatrix = array_sum(array_map('array_sum', $sharpenMatrix));           
imageconvolution($image_sharpenMatrix, $sharpenMatrix, $divisor_sharpenMatrix, 0);
imagejpeg($image_sharpenMatrix,  'sharpenMatrix.jpg');

//edgeFilter
$image_edge_Filter=imagecreatefromjpeg($image_path);
$edgeFilter  = array(array(0.0, 1.0, 0.0), array(1, -4, 1), array(0, 1, 0));
$divisor_edgeFilter = array_sum(array_map('array_sum', $edgeFilter));           
imageconvolution($image_edge_Filter, $edgeFilter, $divisor_edgeFilter, 0);
imagejpeg($image_edge_Filter,  'edgeFilter.jpg');

//findedgeFilter
$image_findedgeFilter=imagecreatefromjpeg($image_path);
$findedgeFilter  = array(array(-1.0, -1.0, -1.0), array(2, 8, -1), array(-1.0, -1.0, -1.0));
$divisor_findedgeFilter = array_sum(array_map('array_sum', $edgeFilter));           
imageconvolution($image_findedgeFilter, $findedgeFilter, $divisor_findedgeFilter, 0);
imagejpeg($image_findedgeFilter,  'findedgeFilter.jpg');

//array_sum
$image_array_sum=imagecreatefromjpeg($image_path);
$array_sum  = array(array(-1, -1, -1),array(-1, 16, -1),array(-1, -1, -1),);
$divisor_array_sum = array_sum(array_map('array_sum', $array_sum));           
imageconvolution($image_array_sum, $array_sum, $divisor_array_sum, 0);
imagejpeg($image_array_sum,  'array_sum.jpg');

//sobel
$image_sobel=imagecreatefromjpeg($image_path);
$sobel  = array(array(1, 0, -1), array(2, 0, -2), array(1, 0, -1));
$divisor_sobel = array_sum(array_map('array_sum', $sobel));           
imageconvolution($image_sobel, $sobel, $divisor_sobel, 0);
imagejpeg($image_sobel,  'sobel.jpg');

?>
