<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ArticleAction extends CommonAction{
    public function index(){
        $article=M('Article');
        $vo = $article->select();
        $this->assign('list',$vo);
        $this->display();
    }
    public function add(){
        
    }
    
    public function edit(){
        
    }
    
    public function insert(){
        
    }
    public function update(){
        
    }
}
?>
