<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller
{
	public function index()
	{
		$this -> display();
	}

	public function test2()
	{
		echo U('index');
		echo U('Index/index');
		echo U('index',array('id' => 1));
	}

	public function test3()
	{
		$this -> success('执行成功',U('test1'),3);
	}

	public function test4()
	{
		$this -> error('执行失败',U('test1'),3);
	}

	public function test5()
	{
		$date = date('Y-m-d H-i-s',time());
		$this -> assign('date',$date);
		$this -> display();
	}

	public function test6()
	{
		$this -> dispaly();
	}
	public function test8()
	{
		$arr = array('西游记','三国演绎','你好的');
		$this -> assign('arr',$arr);
		$this -> display();
	}
	public function test9()
	{
		$arr = array(
				array(
					'name'=>'zhangsan',
					'age'=>18,
					'sex'=>'nan'
				),
				array(
					'name'=>'libai',
					'age'=>19,
					'sex'=>'nv'
				)
		);
		$this->assign('arr',$arr);
		$this->display();
	}
	public function test10()
	{
		$stu = new stu();
		$stu-> id = 1;
		$stu-> name = '张三';
		$stu-> name2= '俩百';
		$this->assign('stu',$stu);
		$this->display();

	}
	public function test11()
	{
		$this->display();
	}
	public function test12()
	{
		$date = time();
		$str = "ASmsdfDdsfx";
		$str1 = "llfldcx323";
		$this -> assign('str1',$str1);
		$this -> assign('str',$str);
		$this -> assign('date',$date);
		$this -> display();
	}
	public function test13()
	{
		$ssr = '';
		$this -> assign('ssr',$ssr);
		$this -> display();
	}
	public function test14()
	{
		$a = 10;
		$b = 4;
		$this -> assign('a',$a);
		$this -> assign('b',$b);
		$this -> display();
	}
	public function head()
	{
		$this->display();
	}
	public function body()
	{
		$this -> display();
	}
	public function foot()
	{
		$this -> display();
	}
	public function test15()
	{
		$arr = array(
			'水壶传',
			'三国演绎',
			'葫芦娃'
		);
		$arr2 = array(
			array(
				'爱情公寓1',
				'爱情公寓2',
				'爱情公寓3',
				'爱情公寓4'
			),
			array(
				'十三爷1',
				'十三爷2',
				'十三爷3',
				'十三爷4'
			)
		);
		$this->assign('arr',$arr);
		$this->assign('arr2',$arr2);
		$this->display();
	}
	public function test16()
	{
		$day = date('N');
		$this -> assign('day',$day);
		$this->display();
	}
	public function test18()
	{
		$model = new \Admin\Model\DeptModel();
		dump($model);
	}
	public function test19()
	{
		$model = D(Dept);
		dump($model);
	}
	public function test20()
	{
		$model = M();
		dump($model);
	}
	public function test21()
	{
		$model = M('Dept');
		$arr = array(
			'dept_name' => '打开部',
			'dept_pid'  => '0',
			'dept_sort' => '2',
			'dept_remark' => '大家号 我'
		);
		$kk = $model -> add($arr);
		dump($kk);
	}
	public function test22()
	{
		$model = M('Dept');
		$data = array(
			'dept_id' => '14',
			'dept_name' => '技术的'
		);
		$dd = $model ->save($data);
		dump($dd);
	}
	public function test23()
	{
		$model = M('Dept');
		$data = $model ->find();
		$data = $model ->find(2);

		$data = $model ->select();
		$data = $model ->select(2);
		$data = $model ->select('1,3');
		dump($data);
	}
	public function test24()
	{
		$model = M('Dept');
		$ss = $model -> delete(11);
		dump($ss);
	}
	public function test25()
	{
		$model = M('Dept');
		$data = array(
			'dept_id' => '4',
			'status' => '0'
		);
		$rst = $model -> save($data);
		dump($rst);
	}
	public function test26()
	{
		$model = M('Dept');
		$ss = $model->find(7);
		echo $model->_Sql();
	}
	public function test27()
	{
		G('start');
		for($i=0;$i<1000000;$i++){

		}
		G('end');
		echo G('start','end',6);
	}
	public function test28()
	{
		$model = M('Dept');
		$model -> dept_name = '搭建部';
		$model -> dept_pid = '0';
		$model -> dept_sort = '1';
		$model -> dept_remark = 'nihaoa a a ';
		$model -> status = '1';
		$sss = $model -> add();
		dump($sss);
	}
	public function test29()
	{
		$model = M('Dept');
		// $model -> dept_id =16;
		$model -> find(16);
		$model -> dept_name = '倪倪倪1';
		$aa = $model -> save();
		 dump($aa);
	}
	public function test30()
	{
		$model = M('Dept');
		$model -> dept_id = 12;
		$hh = $model -> delete();
		dump($hh);
	}
	public function test31()
	{
		$model = M('Dept');
		$model -> where('dept_id=7');
		$aa = $model -> select();
		dump($aa);
	}
	public function test32()
	{
		$model = M('Dept');
		$model -> limit(1);
		$ss = $model -> select();
		dump($ss);
	}
	public function test33()
	{
		$model =M('Dept');
		$model -> field('dept_id,dept_name');
		$ss = $model->select();
		dump($ss);
	}
	public function test34()
	{
		$model = M('Dept');
		$model -> order('dept_id desc');
		$ss = $model -> select();
		dump($ss);
	}
	public function test35()
	{
		$model = M('Dept');
		// $model -> group('dept_name');
		// $model -> field('dept_name,count(*) as count');
		$data = $model ->group('dept_name') -> field('dept_name,count(*) as count') -> select();

		// $as = $model -> select();
		dump($data);
	}
	public function test36()
	{
		$model = M('Dept');
		$ss = $model -> count();
		dump($ss);
	}
	public function test37()
	{
		$model = M('Dept');
		$sa = $model -> max('dept_id');
		dump($sa);
	}
	public function test38()
	{
		$model = M('Dept');
		$sa = $model -> min('dept_id');
		dump($sa);
	}
	public function test39()
	{
		$model = M('Dept');
		$sa = $model -> avg('dept_id');
		dump($sa);
	}
	public function test40()
	{
		$model = M('Dept');
		$sa = $model -> sum('dept_id');
		dump($sa);
	}
}
