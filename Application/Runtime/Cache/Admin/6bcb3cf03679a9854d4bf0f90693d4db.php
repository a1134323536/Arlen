<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sss</title>
  </head>
  <body>
    箭头形式：<?php echo ($stu-> id); ?>+<?php echo ($stu-> name); ?>+<?php echo ($stu->name2); ?>
    <hr>
    冒号形式;<?php echo ($stu->id); ?>+<?php echo ($stu->name); ?>+<?php echo ($stu->name2); ?>
    <hr>
      <!--
      •$Think.server	等价于$_SERVER，表示服务器的相关信息
      •$Think.get		等价于$_GET，表示get信息的数组
      •$Think.post	等价于$_POST，表示post信息的数组
      •$Think.request	等价于$_REQUEST，表示post和get数据的集合
      •$Think.cookie	等价于$_COOKIE，表示cookie中信息
      •$Think.session	等价于$_SESSION，表示session中的信息
      •$Think.config	表示ThinkPHP中的配置数组 -->
      
  </body>
</html>