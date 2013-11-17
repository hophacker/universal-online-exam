<?php
class QuestionsController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }
    protected $_qType2Action = array(
        0 => 'indexSel',
        1 => 'indexJud',
        2 => 'indexAns'
    );
    public $helpers = array('Html', 'Form', 'Session', 'Js' => array('Jquery'));
    public $components = array('Session');
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Post.title' => 'asc'
        )
    );
    private function getTestTypes() {
        $this->loadModel('TestType');
        return $this->TestType->getLegalTypes();
    }
    private function getTestTypeName($test_type_id){
        $types = $this->getTestTypes();
        foreach($types as $type){
            if ($type['TestType']['id'] == $test_type_id)
                return $type['TestType']['name'];
        }
        return null;
    }
    protected function _index($fields, $q_type, $test_type_id){
        if ($this->data){
            $test_type_id = $this->data['Question']['test_type_id'];
            $searchText = trim($this->data['Question']['searchText']);
        }
        $data = array();
        if ($test_type_id){
            $conditions = array('test_type_id' => $test_type_id, 'q_type'=>$q_type); 
            if (isset($searchText) and $searchText != ""){
                $searchText = '%' . $searchText . '%';
                $conditions['q_text LIKE'] = $searchText;
            }
            $data = $this->Question->find('all', Array(
                'conditions' => $conditions,
                'fields' => $fields
            ));
        }
        $this->set('test_type_id', $test_type_id);
        $this->set('questions', $data);
        $this->set('q_type', $q_type);
        $this->set('test_types', $this->getTestTypes());
    }

    public function indexSel($test_type_id = 0){
        $this->_index(array('id','q_text','q_a','q_b','q_c','q_d','q_cho'), 0, $test_type_id);
    }

    public function indexJud($test_type_id = 0){    
        $this->_index(array('id','q_text','q_cho'), 1, $test_type_id);
    }

    public function indexAns($test_type_id = 0){ 
        $this->_index(array('id','q_text','q_a'), 2, $test_type_id);
    }

    public function save($id = null){
        if ($id) $this->Question->id = $id;
        $data = $this->request->data;
        debug($data);
        if ($this->Question->save($data)) {
            $this->artFlash('ok');
        } else {
            $this->artFlash('fail');
        }
        $this->redirect(array('action' => $this->_qType2Action[$data['Question']['q_type']], $data['Question']['test_type_id']));
    }
    protected function edit($act, $id = null) {
        if ($id) {
            $question = $this->Question->findById($id);
            if (!$question) 
                throw new NotFoundException(__('Invalid post'));
            $this->request->data = $question;
            $this->set('id', $id);
        }
    }
    public function editAns($id = null){
        $this->edit('indexAns', $id);
    }
    public function editSel($id = null){
        $this->edit('indexSel', $id);
    }
    public function editJud($id = null){
        $this->edit('indexJud', $id);
    }
    public function addOneAns($test_type_id = null) {

        $this->request->data['Question']['test_type_id'] = $test_type_id;
        $this->render('editAns');
    }
    public function addOneJud($test_type_id = null) { 
        if (!$test_type_id) throw new NotFoundException(__('Invalid post'));

        $this->request->data['Question']['test_type_id'] = $test_type_id;
        $this->render('editJud');
    }
    public function addOneSel($test_type_id = null) { 
        $this->request->data['Question']['test_type_id'] = $test_type_id;
        $this->render('editSel');
    }
    private function checkQType($q_type){
        if (!isset($q_type) || $q_type <0 || $q_type >2) throw new NotFoundException(__('Invalid post'));
    }
    public function addMul($test_type_id = null, $q_type=null) { 
        $q_type = intval($q_type);
        $this->checkQType($q_type);
        if (!isset($test_type_id)) throw new NotFoundException(__('Invalid post'));
        $test_type_name = $this->getTestTypeName($test_type_id);
        if (!isset($test_type_name)) throw new NotFoundException(__('Invalid post'));
        $this->set('test_type_id', $test_type_id);
        $this->set('test_type_name', $test_type_name);
        $this->set('q_type', $q_type);
    }
    public function saveMul(){
        $data = $this->request->data['Question'];
        $q_type = $data['q_type'];
        $test_type_id = $data['test_type_id'];
        $text = $data['text'];
        /*
         *debug($q_type);
         *debug($test_type_id);
         *debug($text);
         */
        switch ($q_type){
        case '0':
            $this->Question->addMulSel($test_type_id, $text);
            $this->redirect(array('action' => 'indexSel', $test_type_id));
            break;
        case '1':
            $this->Question->addMulJud($test_type_id, $text);
            $this->redirect(array('action' => 'indexJud', $test_type_id));
            break;
        case '2':
            $this->Question->addMulAns($test_type_id, $text);
            $this->redirect(array('action' => 'indexAns', $test_type_id));
            break;
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) throw new MethodNotAllowedException();
        if ($this->Question->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'indexSel', 1));
        }
    }
}
