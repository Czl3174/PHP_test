<?php
//告诉浏览器相关信息
 header("Content-Type:image/jpeg");
//打开已经有的图片作为背景
$dst = imagecreatefromjpeg("1.jpeg");
$src = imagecreatefromjpeg("2.jpeg");

imagealphablending($dst, false);
imagesavealpha($dst, true);
//合并图片
imagecopymerge($dst, $src, 0, 0, 0, 0, 181, 180, 60);
//设置水印字体颜色
$fontColor = imagecolorallocate($dst, 0, 0, 0);
//水印的位置，以及字体、内容等等
imagefttext($dst, 18, 0, 170, 230, $fontColor, 'D:\web\apache2.4\htdocs\test\simkai.ttf', '徐鑫2022-11-20');

//输出图像在浏览器上
imagejpeg($dst);
imagejpeg($dst);
//释放资源
imagedestroy($dst);
imagedestroy($src);
?>