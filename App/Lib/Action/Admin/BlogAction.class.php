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
        $list = $category->select();       
        $this->assign('list',$list);
        $this->display();
    }

    public function edit() {
        $this->display();
    }

    public function insert() {
       $blog = D('Blog');        
       if($vo = $blog->create()){
            $list = $blog->add();
            if($list){
                if(method_exists($this,'_trigger')){
                    $this->_trigger($vo,$list);
                }
                $this->success('操作成功');
            }else{
                $this->error('操作失败');
            }
        }else{
            $this->error($blog->getError());
        }
        $this->display();
    }
    
    public function _trigger($vo,$list){
        if(ACTION_NAME=='insert'){
            $dao = M("Attach");
            $attach['verify'] = 0;
            $attach['recordId'] = $list;
            $dao->where("verify='" . $_SESSION["attach_verify"] . "'")->save($attach);
        }
        $this->saveTag($vo,$list,'Blog');
    }
    public function saveTag($vo,$list,$module){
        if(!empty($vo) && !empty($list)){
            $tag = M('Tag');
            $tagged = M('Tagged');
            $tags = explode(' ', $vo['tags']);
            foreach ($tags as $key=>$val){
                $val = trim($val);
                if(!empty($val)){
                    $map['module'] = 'Blog';
                    $map['name'] = $val;
                    $tagg = $tag->where($map)->find();
                    if($tagg){
                        $tagId = $tagg['id'];
                        $tag->setInc('count','id='.$tagId);
                    }else{
                        $t = array();
                        $t['name']=$val;
                        $t['count']=1;
                        $t['module']=$module;
                        $result = $tag->add($t);
                        $tagId = $result;
                    }
                }
                $t = array();
                $t['module']=$module;
                $t['recordId']=$list;
                $t['tagTime']=time();
                $t["tagId"] = $tagId;
                $tagged->add($t);
            }
        }
    }

    public function update() {
        $this->display();
    }
    public function delete(){
        $blog = M('Blog');
        
        
    }
}

?>
