<?php

class ExcelsController extends AppController {

    public $helpers = array('Excel');  
    private function export_xls($fileName = null, $data = null, $fields = array()) {    
        $fileName = 'fengjie';
        $data = array(array(1,1,1), array(1,1,1));
        
        $this->layout = 'ajax';
        $this->autoLayout = false;
//        return;
        require_once 'Spreadsheet/Excel/Writer.php';
        $workbook = new Spreadsheet_Excel_Writer();
        $workbook->send($fileName . '.xls');
        $workbook->setVersion(8);

        $worksheet = & $workbook->addWorksheet('My first worksheet');

        $worksheet->setInputEncoding('UTF-8');
        $j = 0;
        foreach($fields as $field){
            $worksheet->write(0, $j, $field);
        }
        $i = 1;
        foreach($data as $row){
            $j = 0;
            foreach($row as $value){
                $worksheet->write($i, $j, $value);
                $j++;
            }
            $i++;
        }
        $workbook->close();
    }
    public function test(){
        $this->loadModel('Test');
        $tests = $this->Test->find('all', 
                array('fields' => 'Test.*'));
        $data = array();
        foreach($tests as $test){
            $data[] = current($test);
        }
        $this->set('data', $data);
    }
}

?>