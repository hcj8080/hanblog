<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CategoryModel extends Model{
    
    //自动验证
    protected $_validate = array(
        array('title','require', '标题必须！'),
        array('title', '', '标题已经存在', 0, 'unique', self::MODEL_BOTH),        
    );
}
?>
