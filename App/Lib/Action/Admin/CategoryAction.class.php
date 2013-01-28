<?php
/**
 * Description of CategoryAction
 *
 * @author MrHan
 * @version string
 * @deprecated since version number
 */
class CategoryAction extends CommonAction{
    //put your code here
    public function index(){
        $Category = M('Category');
        $list = $Category->select();
        $this->assign('list',$list);
        $this->display();
    }
    public function add(){
        $this->display();
    }
    public function edit(){
        $this->display();
    }
    public function update(){
        $id = intval($_GET['id']);
        
    }
    public function insert(){
        
    }
    
}

?>
