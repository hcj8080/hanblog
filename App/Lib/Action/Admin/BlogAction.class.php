<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class BlogAction extends CommonAction {

    public function index() {
        import("ORG.Util.Page");
        $blog = M('Blog');
        $count = $blog->count();
        $Page = new Page($count, 5);
        $list = $blog->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $Page->setConfig(header, '条数据');
        $Page->setConfig(first, '<<');
        $Page->setConfig(last, '>>');
        $page = $Page->show();
        $this->assign('page', $page);
        $this->assign('list', $list);
        $this->display();
    }

    public function add() {
        $category = M('Category');
        $list = $category->field('id','title')->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function edit() {
        $this->display();
    }

    public function insert() {
        $this->display();
    }

    public function update() {
        $this->display();
    }

}

?>
