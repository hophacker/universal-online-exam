<?php
class DB_Connect extends PDO
{
    protected $ps;
    protected static $db_wang = array(
        'HOST' => '58.211.23.247',
        'USER' => 'system',
        'PASS' => 'system',
        'NAME' => 'dxks',
    );
    protected static $db_feng = array(
        'HOST' => 'localhost',
        'USER' => 'root',
        'PASS' => 'root',
        'NAME' => 'dxks',
    );
    protected static $db_zhu = array(
        'HOST' => 'localhost',
        'USER' => 'root',
        'PASS' => '1',
        'NAME' => 'dxks',
    );
    protected static $db_xu = array(
        'HOST' => '192.168.0.89',
        'USER' => 'root',
        'PASS' => '123',
        'NAME' => 'dxks',
    );
    public function __construct()
    {   
        $db = self::$db_feng;
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
    public function getArray($query){
        $stmt = $this->prepare($query);
        $stmt->execute();
        $data = array();

        while ($row = $stmt->fetch()){
            $data[$row[0]] = $row[1];
        }
        return $data;
    }
    public function getOptions($query){
        $stmt = $this->prepare($query);
        $stmt->execute();
        $data = "{";
        $first = true;
        while ($row = $stmt->fetch()){
            if ($first) $first = false;
            else $data .= ',';
            $data .= "'$row[0]' : '$row[1]'";
        }
        $data .= "}";
        return $data;
    }
    public static function mysql_db(){
        $db = self::$db_feng;
        $db_con = mysql_connect($db['HOST'],$db['USER'],$db['PASS']);
	mysql_select_db($db['NAME'],$db_con);
        mysql_set_charset("utf8");
        return $db_con;
    }
}
//$db = new DB_Connect();
//$db->test();
/*
     * 调用之前
     * $params = array(':username' => 'test', ':email' => $mail, ':last_login' => time() - 3600);
        $pdo->prepare('
        SELECT * FROM users
        WHERE username = :username
        AND email = :email
        AND last_login > :last_login');
     */
?>

