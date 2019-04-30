<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/30
 * Time: 14:01
 */

require('./vendor/autoload.php');

$QrCodeReader = new \QrCodeReader\QrCodeReader();

$url = 'http://ww4.sinaimg.cn/large/a13e4f59gw1fb5juam1duj20a00880to.jpg';
$info = $QrCodeReader->read($url);

var_dump($info);