<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ss</title>
  </head>
  <body>
    <?php if($day==1): ?>周一
    <?php elseif($day==2): ?>
      周二
    <?php elseif($day==3): ?>
      周三
    <?php elseif($day==4): ?>
      周四
    <?php elseif($day==5): ?>
      周五
    <?php elseif($day==6): ?>
    周六
    <?php elseif($day==7): ?>
    周日
    <eles/><?php endif; ?>
  </body>
</html>