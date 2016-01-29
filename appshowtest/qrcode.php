<?php
#########################################################################
# Author: (renzengqiang@domob.cn)
# Created Time: 2016-01-28 11:26:57
# File Name: qrcode.php
# Description: 
#########################################################################

include './phpqrcode/phpqrcode.php';    
$value = 'http://'; //二维码内容   
$errorCorrectionLevel = 'L';//容错级别   
$matrixPointSize = 6;//生成图片大小   
//生成二维码图片   
QRcode::png($value, 'qrcode.png', $errorCorrectionLevel, $matrixPointSize, 2); 

echo '<img src="./qrcode.png"/>';
