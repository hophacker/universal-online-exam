<?php
/**
 * Description of SuggestionsController
 *
 * @author ark
 */

class SuggestionsController extends AppController{
    public  $helpers  = array(
        'Html','Paginator'
    );
    public $paginage;
    
    
    public function index($target) {
        /*if($target!=0&&$target!=1) {
            throw NotFoundException();
        }*/

        $this->set('target', $target);
    }
    /*
     * 学生查看回复
     */
    public function viewReply() {
        $sid = $_SESSION['Student']['Student']['id'];
        $this->paginate = array(
            'conditions' => array('student_id'=>$sid),
            'limit'=>  25
        );
        $data = $this->paginate('Suggestion');
        $this->set('suggestions', $data);
        $this->set('pageInfo',$this->request->params['paging']['Suggestion']);
    }
    /*
     * 添加一条新的建议
     */
    public function newsuggestion() {
        $this->autoRender = false;
        $student_id = $_SESSION['Student']['Student']['id'];
        $title = $this->request->data('title');
        $info = $this->request->data('info');
        $target = $this->request->data('target');
        $data=array('title'=>$title,'content'=>$info,'target'=>$target,'student_id'=>$student_id,'date'=>date('y-m-d', time()));
        $this->checkEmptyAjax($data);
        $success = $this->Suggestion->save($data);
        if($success ) {
            //$this->Session->setFlash('建议提交成功！');
            echo json_encode(array('success'=> 1));
        } else {
            //$this->Session->setFlash('建议提交失败！');
            echo json_encode(array('success'=> 0));
        }
        
        //$this->redirect(array('action' => 'index', $target));
    }
    /*
     * 查看提出的建议
     */
    public function viewSuggestion($target) {
        $this->paginate = array(
            'conditions' => array('target'=>$target),
            'limit'=>  25
        );
        $data = $this->paginate('Suggestion');
//        debug($data);
        $this->set('suggestions', $data);
        $this->set('pageInfo',$this->request->params['paging']['Suggestion']);
    }
    /*
     * 删除建议（包括回复）
     */
    public function delete($id) {
        $this->autoRender= false;
        if ($this->request->is('get')) throw new MethodNotAllowedException();
        if ($this->Suggestion->delete($id)) {
//            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
//            $this->redirect(array('action' => 'indexSel', 1));
            echo json_encode(array('success'=>1));
        } else {
            echo json_encode(array('success'=>0));
        }
    }
    /*
     * 删除建议的回复
     */
    public function deleteReply($id) {
        $this->loadModel('SuggestionReply');
        $this->autoRender = false;
        if ($this->request->is('get')) throw new MethodNotAllowedException();
        if ($this->SuggestionReply->delete($id)) {
            echo json_encode(array('success'=>1));
        } else {
            echo json_encode(array('success'=>0));
        }
    }
    /*
     * 添加一条建议回复
     */
    public function addReply() {
        $this->autoRender = false;
        $suggestion_id = $this->request->data('suggestion_id');
        $content = $this->request->data('content');
        $date = date('y-m-d', time());
//        debug($this->request->data);
        $this->loadModel('SuggestionReply');
        $success = $this->SuggestionReply->save(array('suggestion_id'=>$suggestion_id, 'content'=>$content, 'date'=>$date));
        if($success)
            echo json_encode(array('success'=>1));
        else 
            echo json_encode(array('success'=>0));
    }
    
    
    
    public function getSuggestionById($id) {
        $this->autoRender=false;
        if ($this->request->is('get')) throw new MethodNotAllowedException();
        $data = $this->Suggestion->findById($id);
        echo json_encode(array('suggestion'=>$data['Suggestion']));
    }
    
    
}
