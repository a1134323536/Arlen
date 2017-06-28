<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ss</title>
  </head>
  <body>
    增加：a+b=<?php echo ($a+$b); ?>
    <hr>
    删除：a-b=<?php echo ($a-$b); ?>
    <hr>
    相乘: a*b=<?php echo ($a*$b); ?>
    <hr>
    想除: a/b=<?php echo ($a/$b); ?>
    <hr>
    取余：a%b=<?php echo ($a%$b); ?>

    <hr>
    加加：a++<?php echo ($a++); ?>
    减减：a--<?php echo ($a--); ?>

  </body>
</html>