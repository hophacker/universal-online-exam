<?php
$jqRoot = "../../../../../jqSuitePHP";
require_once "$jqRoot/jq-config.php";
require_once "$jqRoot/php/jqGrid.php";
require_once "../../../../../class/autoload.inc";
require_once "$jqRoot/php/jqGridPdo.php";
function getInt($key) {
    if (isset($_GET[$key]))
        return intval($_GET[$key]);
    else
        return -1;
}
//error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors',1);
$dept_id = getInt('dept_id');
$major_id = getInt('major_id');
$class_id = getInt('class_id');
$sel = 'select s_id, s_user, s_pwd, s_num, s_name, s_mail, s_date, s_role, s_phone, reg_date,  last_login,
    edu_id, edu_name, dept_name, major_name, class_name, class_id from student join class using(class_id) join major using(major_id) join department using(dept_id) join education using(edu_id) ';

if ($class_id != -1) {
    $sel .= "where class_id= $class_id";
} else if ($major_id != -1) {
    $sel .= "where major_id= $major_id";
} else if ($dept_id != -1) {
    $sel .= "where dept_id= $dept_id";
}
$conn = new DB_Connect();
$grid = new jqGridRender($conn);

$grid->SelectCommand = $sel;
    


$grid->table = 'student';

$grid->setColModel();
$grid->setUrl("grid.php?dept_id=$dept_id&major_id=$major_id&class_id=$class_id");
$grid->setGridOptions(array(
    "rowList" => array(20, 50, 100, 500, 2000, 10000),
    'width' => 1100,
    'hoverrows' => true,
    'height' => 480,
    "multiselect" => true,

//    "altRows" => true,
//    'postData' => array('dept_id'=>$dept_id, 'major_id'=>$major_id, 'class_id'=>$class_id),
    "sortname" => "s_id",
    "rownumbers" => true
));
$grid->setcolproperty("s_id", array("hidden" => true));
$grid->setcolproperty("s_pwd", array('hidden' => true));

$grid->setcolproperty("s_name", array("label" => "姓名", "width" => '130', 'align' => 'center'));
$grid->setcolproperty("s_num", array("label" => "学号", "width" => '300', 'align' => 'center'));
$grid->setcolproperty("s_user", array("label" => '用户名', 'width' => '300', 'align' => 'center'));
$grid->setcolproperty("s_mail", array("label" => "Email", "width" => '400', 'align' => 'center'));
$grid->setcolproperty("s_date", array("label" => "生日", "width" => '200', 'align' => 'center'));
$grid->setcolproperty("s_role", array("label" => "等级", "width" => '100', 'align' => 'center'));
$grid->setcolproperty("s_phone", array("label" => "电话号码", "width" => '300', 'align' => 'center'));
$grid->setcolproperty("reg_date", array("label" => "注册时间", "width" => '250', 'align' => 'center'));
$grid->setcolproperty("last_login", array("label" => "上次登陆时间", "width" => '300', 'align' => 'center'));
$grid->setcolproperty("edu_id", array("hidden" => true, "width" => '150', 'align' => 'center'));
$grid->setcolproperty("edu_name", array("label" => "学历", "width" => '110', 'align' => 'center'));
$grid->setcolproperty("dept_name", array("label" => "学院", "width" => '400', 'align' => 'center'));
$grid->setcolproperty("major_name", array("label" => "专业", "width" => '450', 'align' => 'center'));
$grid->setcolproperty("class_name", array("label" => "班级", "width" => '300', 'align' => 'center'));
$grid->setcolproperty("class_id", array("hidden" => "true", "width" => '150', 'align' => 'center'));


$grid->navigator = true;
$grid->setNavOptions('navigator', array("csv"=>true, "pdf" => true, "add" => false, "edit" => false, "del" => true, "view" => true, "excel" => true));
$grid->exportfile = '学生信息.xls';
$grid->dataType = 'json';
$grid->renderGrid('#grid', '#pager', true, null, null, true, true);
$conn = null;

?> 
