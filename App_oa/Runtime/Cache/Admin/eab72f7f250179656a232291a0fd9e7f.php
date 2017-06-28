<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ss</title>
  </head>
  <body>
    中括号表示：<?php echo ($arr[0][name]); ?>+<?php echo ($arr[0][age]); ?>+<?php echo ($arr[0][sex]); ?>
    <hr>
    点形式:<?php echo ($arr["1"]["name"]); ?>+<?php echo ($arr["1"]["age"]); ?>+<?php echo ($arr["1"]["sex"]); ?>
  </body>
</html>