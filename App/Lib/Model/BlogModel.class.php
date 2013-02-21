<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class BlogModel extends Model{
    public function checkVerify($verify){
        if(md5($verify)!=Session::get('verify')) return FALSE;
        return TRUE;
    }
    protected  $_validate = array(
        array('title','require','标题必须！'),
        array('categoryId','require','分类必须'),
        array('content','require','内容必须！'),
        array('verify', 'require','验证码必须！'),
        array('verify', 'CheckVerify', '验证码错误！', 0, 'callback')
    );
    protected $_auto = array(
        array('status','1'),
        array('cTime','time',1,'function'),
    );
}
?>
