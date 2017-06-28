<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>s</title>
  </head>
  <body>
    时间：<?php echo (date('Y-m-d H-i-s',$date)); ?>
    <hr>
    字符串截取:<?php echo (substr(strtoupper($str),0,6)); ?>
    <hr>
    字符串接触1:<?php echo (substr(strtoupper($str1),0.3)); ?>
  </body>
</html>