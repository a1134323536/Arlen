<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ss</title>

  </head>
  <body>
    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; echo ($vol); endforeach; endif; else: echo "" ;endif; ?><br/>
  <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; echo ($vol); endforeach; endif; else: echo "" ;endif; ?><br/>
  <?php if(is_array($arr2[1])): $i = 0; $__LIST__ = $arr2[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; echo ($vol[0]); ?> - <?php echo ($vol[1]); ?> - <?php echo ($vol[2]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
  </body>
</html>