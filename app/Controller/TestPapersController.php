<?php
/**
 * Description of TestPapersController
 *
 * @author ark
 */

class TestPapersController extends AppController{
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }
    public  $helpers  = array(
        'Html'
    );
    /*
     * 校管理员上传试卷
     */
    public function index() {
        $this->loadModel('Parameter');
        $this->loadModel('Department');
//        debug($this->data);
        if (!empty($this->data) && is_uploaded_file($this->data['TestPapers']['Paper']['tmp_name'])) {
            $file = $this->data['TestPapers']['Paper'];
            $old_name = $file['name'];
            $suffix = strrchr( $old_name, '.');
            
            $data=array('name'=>$file["name"],'suffix'=>$suffix,'comment'=>$this->data['TestPapers']['comment']);
            $this->TestPaper->save($data);
            $new_name = $this->TestPaper->getLastInsertID() . $suffix;
            move_uploaded_file($file['tmp_name'], 
                    "../../WebRoot/files/".$new_name);
             
             

        }
        
        $data = $this->TestPaper->find('all');
        $param = $this->Parameter->find('all', array(
            'conditions'=>array('name'=>'paper_state')
        ));
        $department = $this->Department->getDepartmentArray();
        $this->set('department',$department);
        $this->set('enable',$param[0]['Parameter']['value']);
        $this->set('papers', $data);
//        debug($data);
    }
    
    /*
     * 修改上传的文件
     */
    public function modify() {
        debug($this->data);
        if(!empty($this->data)) {
            $id = $this->data['TestPaper']['id'];
            $old_suffix = $this->data['TestPaper']['suffix'];
            $comment = $this->data['TestPaper']['comment'];
            // 上传数据中有文件
            if(is_uploaded_file($this->data['TestPaper']['Paper']['tmp_name'])) {
                $file = $this->data['TestPaper']['Paper'];
                $old_name = $file['name'];
                $suffix = strrchr( $old_name, '.');
                // 修改数据库中的记录
                $data=array('id'=>$id,'name'=>$file["name"],'suffix'=>$suffix,'comment'=>$comment);
                $this->TestPaper->save($data);
                $new_name = $id.$suffix;
                // 先把旧的文件删除
                $path = '../../WebRoot/files/'.$id.$old_suffix;
                unlink($path);
                // 移入新的文件
                move_uploaded_file($file['tmp_name'], 
                    "../../WebRoot/files/".$new_name);
            } else {
                // 修改数据库中的记录
                $data=array('id'=>$id,'comment'=>$comment);
                $this->TestPaper->save($data);
            }
        }
        $this->redirect('index');
    }
    
    /*
     * 重置所有学院管理员的下载状态
     */
    public function reset() {
        $this->loadModel('Department');
        $this->autoRender = false;
        //$ret1 = $this->TestPaper->updateAll(array('using_department_ids'=>'","'),array('id !='=>'-1'));
        $ret2 = $this->Department->updateAll(array('paper_id'=>'-1'),array('id !='=>'-1'));
        echo json_encode(array('success'=>$ret2));
        //$this->redirect('index');
    }
    /*
     * 删除一个试卷
     */
    public function delete($id) {
        $data = $this->TestPaper->findById($id);
        $this->loadModel('Department');
        $this->Department->updateAll(array('paper_id'=>'-1'),array('paper_id'=>$id));
        $this->TestPaper->delete($id);
        $path = '../../WebRoot/files/'.$data['TestPaper']['id'].$data['TestPaper']['suffix'];
        unlink($path);
//        debug($path);
        $this->redirect('index');
    }
    /*
     * 开启或者关闭学院管理员的下载试卷权限
     */
    public function enable() {
        $this->autoRender = false;
        $this->loadModel('Parameter');
       
        $param = $this->Parameter->find('all', array(
            'conditions'=>array('name'=>'paper_state')
        ));
        $data = $param[0]['Parameter'];
        $data['value'] = ($data['value']==1?0:1);
        $this->Parameter->save($data);
        
        //$this->redirect('index');
    }
    
    /*
     * 学院管理员下载试卷
     */
    public function deptDownload() {
        $this->layout = "default";
        $this->loadModel('Parameter');
        $param = $this->Parameter->find('all', array(
            'conditions'=>array('name'=>'paper_state')
        ));
        $this->set('enable', $param[0]['Parameter']['value']);
        // 如果不可以下载，则不操作
        if($param[0]['Parameter']['value'] == 1) {
            // 查department表，如果paper_id=-1就随机抽一张卷子，否则就按那个paper_id下载试卷
            $dept_id = $_SESSION['Manager']['Manager']['department_id'];
            $this->loadModel('Department');
            $department = $this->Department->findById($dept_id);
            if (!$department) throw_exception ('没有该学院');
            $paper_id = $department['Department']['paper_id'];
            if($paper_id == -1) {
                $papers = $this->TestPaper->find('all', array(
                    'conditions'=> array('using_department_ids NOT LIKE'=> ','.$department['Department']['id'].',')
                ));
                $paper = array_rand($papers,1);
                $paper = $papers[$paper];
                // 更新departments表中的试卷号
                $department = $department['Department'];
                $department['paper_id'] = $paper['TestPaper']['id'];
                $this->Department->save($department);
                // 更新TestPapers表中的试卷号
                $paper = $paper['TestPaper'];
//                debug($department);
                $paper['using_department_ids'] = $paper['using_department_ids'].$department['id'].',';
                $this->TestPaper->save($paper);
            } else {
                $paper = $this->TestPaper->findById($paper_id);
               
                $paper = $paper['TestPaper'];
            }
            
            
            //$url = '../WebRoot/files/'.$paper['id'].$paper['suffix'];
            $this->set('paper', $paper);
        }
    }
    
    /*
     * 下载文件
     */
    public function download($file,$name) {
        $this->set('file','../../WebRoot/files/'.$file);
        $this->set('name',$name);
    }
}
