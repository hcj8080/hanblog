<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ArticleAction extends CommonAction {

    public function index() {
        import("ORG.Util.Page");
        $article = M('Article');
        $count = $article->count();
        $Page = new Page($count, 5);
        $list = $article->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $Page->setConfig(header, '条数据');
        $Page->setConfig(first, '<<');
        $Page->setConfig(last, '>>');
        $page = $Page->show();
        $this->assign('page', $page);
        $this->assign('list', $list);
        $this->display();
    }

    public function add() {
        
    }

    public function edit() {
        
    }

    public function insert() {
        
    }

    public function update() {
        
    }

}

?>
