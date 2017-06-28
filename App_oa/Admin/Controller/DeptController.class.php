<?php
namespace Admin\Controller;

use Think\Controller;

class DeptController extends Controller{
    public function add(){
        $this ->display();
    }
    
    public function addOk(){
        $post = I('post.');
//        dump($post);
        $model = M('Dept');
        $rst = $model -> add($post);
        if($rst){
            $this -> success('添加成功',U('Dept'),3);
        }else{
            $this -> error('添加失败',U('add'),3);
        }
    }
}