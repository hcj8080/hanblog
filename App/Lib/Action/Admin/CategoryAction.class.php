<?php

/**
 * Description of CategoryAction
 *
 * @author MrHan
 * @version string
 * @deprecated since version number
 */
class CategoryAction extends CommonAction {

    //put your code here
    public function index() {
        $category = M('Category');
        $list = $category->select();
        $this->assign('list', $list);
        $this->display();
    }

    public function add() {
        $this->display();
    }

    public function edit() {
        $category = M('Category');
        $id = intval($_GET['id']);
        $vo = $category->find($id);
        $this->assign('vo', $vo);
        $this->display();
    }

    public function update() {
        $category = M('Category');
        if ($vo = $category->create()) {
            $list = $category->save();
            dump($list);
            if ($list != false) {
                //$this->success('更新成功',U('Index/index'));
            } else {
                //$this->error('没有更新任何数据!');
            }
        } else {
            $this->edit($category->getError());
        }
    }

    public function insert() {
        
    }

}

?>
