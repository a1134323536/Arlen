<?php
//声明命名空间
namespace Home\Controller;
//引入命名空间
use Think\Controller;

class UserController extends Controller{
    public function userList(){
        $userList = array('小明','小黄','小王');
//        //遍历数组
//        foreach ($userList as $key => $value) {
//            echo '<div style="color:red;">';
//            echo $value.'<br />';
//            echo '</div>';
//        }
        //把数据传输到页面
        $this->assign('userList',$userList);
        //加载渲染页面
        $this->display();
    }
    public function userInfo(){
        $userList = array('小明','小黄','小王');
        //遍历数组
        foreach ($userList as $key => $value) {
            echo $value.'<br />';
        }
    }
    public function user(){
        
    }
    //获取招聘信息
    public function getJobInfo(){
        //获取参数
//        $id = $_GET['id'];
        //I方法进行了，转义和过滤
        $id = I('get.id')? I('get.id'):100;
        //取出全部信息
        //参数填写表名称
        $zhilian = M('zhilian');
         //笼统查询数据
//        $sql = 'select * from zhilian limit 5';
//        data = $zhilian->limit(5)->select();
//       带查询条件
//        $sql = "select * from zhilian where id = $id";
//        $data = $zhilian->where("id = $id")->find();
//        带查询条件并限制输出字段
//          $sql = "select salary from zhilian where id = $id";
          $data = $zhilian->where("id = $id")->getField('id,companyName,salary');
//          $data = $zhilian->query($sql);
        dump($data);
    }
    //写入数据
    public function register(){
        //区分是提交还是加载页面
        //判断是post请求就是提交
        if(IS_POST){
            //收集信息进行注册
            $username = I('post.username');
            $password = I('post.password');
            $mail = I('post.mail');
            $data = array(
                'username' => $username,
                'password' => md5($password),
                'mail' => $mail
            );
            //插入数据
            $res = M('user')->add($data);
//            dump($res);
            if($res){
                //注册成功
                //            success和error方法的第一个参数表示提示信息，第二个参数表示跳转地址，第三个参数是跳转时间（单位为秒）
//                $this->success('注册成功了！','getJobInfo',3);
                $this->success('注册成功了！',U('Index/testFor'),3);
            }
        }else{
            //否则是加载页面
        //加载页面
        $this->display();
        }
    }
    //测试U方法生成url
    public function testU(){
//        [模块/控制器/操作#锚点@域名]?参数1=值1&参数2=值2...
        dump(U('testU'));
        dump(U('testU?id=3&userid=1000'));
        dump(U('testU',array('id' => 3,userid => 1000)));
    }
}
