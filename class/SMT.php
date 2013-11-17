<?php
//require_once('/usr/share/php/Smarty/3.1.12/libs/Smarty.class.php');
require_once('SmartyBC.class.php');
class SMT extends SmartyBC {
    private $name;
    private $data;
    function __construct($_name) {
        $this->name = $_name;
        parent::__construct();
        
        $smartyDir = getenv("DOCUMENT_ROOT") . '/Smarty';

        $this->setTemplateDir(".");
        $this->setCompileDir("$smartyDir/templates_c/");
        $this->setConfigDir("$smartyDir/configs/");
        $this->setCacheDir("$smartyDir/cache/");
//important
        $this->force_compile = true;
        
        $this->caching = Smarty::CACHING_LIFETIME_CURRENT; //??
        $this->assign('app_name', '');

        error_reporting(E_ALL & ~E_NOTICE);
//        error_reporting(E_ALL ^ E_DEPRECATED);
//        ini_set('display_errors', '1');
//        $smarty->debugging = true;
//        $this->testInstall();
    }
    function render($_data = array()) {
        $this->data = $_data;
        $this->assign('name', $this->name);
        foreach($this->data as $key => $value){
            $this->assign($key, $value);  
        }
        $this->display($this->name . '.tpl');
    }  
}
?>
