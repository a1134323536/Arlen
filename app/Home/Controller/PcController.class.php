<?php
namespace Home\Controller;
use Think\Controller;
class PcController extends Controller {
    //
    public function index(){
        $url = 'http://www.thinkphp.cn/down.html';
        echo file_get_contents($url);
    }
    public function getIndex(){
        $url = 'http://sou.zhaopin.com/jobs/searchresult.ashx?jl=%E5%8C%97%E4%BA%AC&kw=php&p=1';
        $content = file_get_contents($url);
        //引入匹配类
        require './phpQuery/phpQuery.php';
        $doc = phpQuery::newDocumentHTML($content);
        dump($doc);
    }
}