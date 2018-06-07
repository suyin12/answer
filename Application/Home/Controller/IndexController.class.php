<?php
namespace Home\Controller;

use Think\Controller;
use Org\Util\Excel;
use Org\Util\StringFunc;

class IndexController extends Controller {
    /**
     * 下载密码
    */
    const PASSWORD = '12345678';

    public function index(){
        $this->display();
    }
    public function save(){

    }
    public function down(){
        $this->display();
    }
    /**
     * 导出验证
     *
     */
    public function downloadCheck(){
        $password = I('password');
        if(self::PASSWORD == $password){
            $data = ['msg'=>'正确!','code'=>0];
            $this->ajaxReturn($data,'json');
        }else{
            $data = ['msg'=>'密码不正确!','code'=>1];
            $this->ajaxReturn($data,'json');
        }
    }
    /**
     * 导出
     *
     */
    public function download(){
        $sEncoding = 'utf8';
        $excel = new Excel();
        $excel->setEncoding($sEncoding);
        $excel->addArray([['头部','1','2'],['头部','1','2'],['头部','1','2']]);
        $excel->generateXML('test');
    }
    /**
     * 返回唯一标识
     *
     * @return string
    */
    public function userId(){
        if(!cookie('think_userId')){
            cookie('userId',StringFunc::uuid(),array('expire'=>86400,'prefix'=>'think_'));
        }
        return cookie('think_userId');
    }
}