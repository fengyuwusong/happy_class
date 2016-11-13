<?php
/**
 * Created by PhpStorm.
 * User: 风雨雾凇
 * Date: 2016/11/13
 * Time: 14:48
 */
namespace Home\Model;

use Think\Model;

class DanmuModel extends Model
{
    /*
     * 添加弹幕
     * danmu json
     */
    public function addDanmu($danmu)
    {
        $Danmu = M("danmu");
        $add['danmu'] = $danmu;
        $Danmu->add($add);
    }

    /*
     * 获取弹幕
     */
    public function getDanmu()
    {
        $Danmu = M("danmu");
        $res = $Danmu->select();
        return $res;
    }
}