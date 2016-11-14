<?php
/**
 * Created by PhpStorm.
 * User: 风雨雾凇
 * Date: 2016/11/14
 * Time: 20:16
 */
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller{
    public function index(){
        $this->display();
    }

    /*
  * 添加班级
  * name 班级名
  * info 班级介绍
  * cover_key 封面key
  * video_key 视频key
  * image_key 宣传图key
  */
    public function addClass(){
        $name=I('post.name');
        $info=I('post.info');
        if($name==''||$info==''){
            $res=array(
                'Status'=>"1",
                'Mes'=>"参数不能为空！"
            );
            $this->ajaxReturn($res);
        }else {
            $class = D('class');
            $class->addClass($name, $info);
            $res=array(
                'Status'=>"200",
                'Mes'=>"添加成功！"
            );
            $this->ajaxReturn($res);
        }
    }

    //上传封面
    public function uploadMainCover(){
        $config = array(
            'maxSize'    =>    104857600,
            'rootPath'   =>    './Public/Uploads/',// 设置附件上传根目录
            'savePath'   =>    '',// 设置附件上传（子）目录
            'saveName'   =>    'mainCover',
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg', 'mp4'),// 设置附件上传类型
            'autoSub'    =>    true,//自动使用子目录保存上传文件 默认为true
            'subName'    =>    iconv("UTF-8","gb2312",I("post.name")).'/',
            'callback'   =>    true,
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功

        }
    }

    //上传视频封面
    public function uploadVideoCover(){
        $config = array(
            'maxSize'    =>    104857600,
            'rootPath'   =>    './Public/Uploads/',// 设置附件上传根目录
            'savePath'   =>    '',// 设置附件上传（子）目录
            'saveName'   =>    'videoCover',
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg', 'mp4'),// 设置附件上传类型
            'autoSub'    =>    true,//自动使用子目录保存上传文件 默认为true
            'subName'    =>    iconv("UTF-8","gb2312",I("post.name")).'/',
            'callback'   =>    true,
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功

        }
    }

    //上传视频
    public function uploadVideo(){
        $config = array(
            'maxSize'    =>    104857600,
            'rootPath'   =>    './Public/Uploads/',// 设置附件上传根目录
            'savePath'   =>    '',// 设置附件上传（子）目录
            'saveName'   =>    'video',
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg', 'mp4'),// 设置附件上传类型
            'autoSub'    =>    true,//自动使用子目录保存上传文件 默认为true
            'subName'    =>    iconv("UTF-8","gb2312",I("post.name")).'/',
            'callback'   =>    true,
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功

        }
    }
}