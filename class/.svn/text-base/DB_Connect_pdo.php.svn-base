<?php

class DB_Connect extends PDO
{
    protected $ps;
    protected $db_wang = array(
        'HOST' => '58.211.23.247',
        'USER' => 'system',
        'PASS' => 'system',
        'NAME' => 'dxks',
    );
    protected $db_feng = array(
        'HOST' => 'localhost',
        'USER' => 'root',
        'PASS' => '123',
        'NAME' => 'dxks',
    );
     protected $db_zhu = array(
        'HOST' => 'localhost',
        'USER' => 'root',
        'PASS' => '1',
        'NAME' => 'dxks',
    );
    public function __construct()
    {   
        $db = $this->db_wang;
        $db_str = "mysql:host=". $db['HOST'] . ";dbname=". $db['NAME'];
        try{
            parent::__construct(
                    $db_str, 
                    $db['USER'], 
                    $db['PASS'],
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')
                    );
        }
        catch(Exception $e)
        {
            die($e->getMessage());	
        }
        $this->exec('set names utf8');  
    }
    
    public function test(){
        $data = $this->db_con->query("select * from DEPARTMENT");
        while($row = $data->fetch()){
            print $row['DEPT_NAME'] . "\n";
//            print mb_detect_encoding($row['DEPT_NAME']) . "\n";
//            print mb_convert_encoding($row['DEPT_NAME'], 'UTF-8', 'ASCII');
        }                                                                                          
    }
}
//$db = new DB_Connect();
//$db->test();
?>
