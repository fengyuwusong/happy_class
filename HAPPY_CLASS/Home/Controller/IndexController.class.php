<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function index1()
    {
        $this->display();
    }

    /*
     * 获得班级信息
     * 返回
     * {"data":[{"id":"13","name":"sdvfdsav","info":"sdfvsd","cover":"http:\/\/oga3de3p0.bkt.clouddn.com\/FmLpplRxhEsmt_q1nCbT4lyUOdib","image":"http:\/\/oga3de3p0.bkt.clouddn.com\/FgtXXppVedigRpgGFHouNHuXX61r","video":"http:\/\/oga3de3p0.bkt.clouddn.com\/lo_k2Bp5mxOBHrzTj5VtcDd1XheD"}],"Status":"200"}
     * data array 数据 id 编号 name 班级名 info 班级简介 cover 代表图片url image 封面图片url video 宣传视频url
     * Status 200成功
     */
    public function getClass()
    {
        $class = D('class');
        $data = $class->getClass();
        $res = array(
            'data' => $data,
            'Status' => "200",
            'Mes' => "获取成功！"
        );
        $this->ajaxReturn($res);
    }

    /*
     * 简单投票实现
     * id 被投票班级id
     * 返回
     */
    public function vote()
    {
        $id = I('post.id');
        if ($id == '') {
            $res = array(
                'Status' => "1",
                'Mes' => "参数不能为空！"
            );
            $this->ajaxReturn($res);
        } else {
            $class = D('class');
            $class->vote($id);
            $res = array(
                'Status' => "200",
                'Mes' => "投票成功！"
            );
            $this->ajaxReturn($res);
        }
    }

    /*
     * 获取弹幕接口
     */
    public function getDanmu()
    {
        $Danmu = D("Danmu");
        $res = $Danmu->getDanmu();
        $first = 0;
        $danmu = '[';
        foreach ($res as $key => $val) {
            if ($first) {
                $danmu .= ",";
            }
            $first = 1;
            $danmu .= "'" . $val['danmu'] . "'";
        }
        $danmu .= ']';
        $danmu = str_replace("&quot;", '"', $danmu);
        exit($danmu);
    }

    /*
     * 添加弹幕接口
     * $danmu json { text:"这是弹幕" ,color:"white",size:1,position:0,time:2}
     */
    public function addDanmu($danmu)
    {
        $danmu = I('post.danmu');
        $Danmu = D("Danmu");
        $Danmu->addDanmu($danmu);
        exit($danmu);
    }
}