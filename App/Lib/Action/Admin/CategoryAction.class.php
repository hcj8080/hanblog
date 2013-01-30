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
        $id = intval($_POST['id']);
        $category = D('Category');
        if ($vo = $category->create()) {
            $list = $category->save($vo);
            if ($list != false) {
                $this->assign('jumpUrl', __URL__);
                $this->success('更新成功');
            } else {
                $this->error('没有更新任何数据!');
            }
        } else {
            $this->edit($category->getError());
        }
    }

    public function insert(){
        $category = D('Category');
        if($vo = $category->create()){
            if(false!=$category->add()){
                $this->success('数据添加成功');
            }  else {
                $this->error('数据添加失败');
            }
        }else{
            $this->error($category->getError());
        }
    }
}

?>
