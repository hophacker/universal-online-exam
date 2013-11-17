 <?php 
class EventsController extends AppController {
    public $helpers = array('Excel');
    
    function export($id = null) {
        $this->layout = 'ajax';
        $this->loadModel('Department');
        $this->Department->hasMany = array();
        $this->set('event', $this->Department->find('first', array('fields' => 'Department.*')));
    }
}
?> 