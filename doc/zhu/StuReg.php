<?php /*
require_once('../private/class/autoload.inc');
$dep = new department();
$st_depart = $dep->getAll();
$st_depart[-1] = "无";


$edu = new education();
$st_edu = $edu->getAll();

$smt = new SMT('StuReg');
$smt->render(array(
    'title' => '新用户注册',
    'st_depart' => $st_depart,
    'st_depart_sel' => -1,
    'st_edu' => $st_edu,
    'st_edu_sel' => key($st_edu)
    ));*/
    $KoolControlsFolder='../../KoolPHPSuite/KoolControls';
    require_once $KoolControlsFolder.'/KoolSlideMenu/koolslidemenu.php';
    require_once $KoolControlsFolder.'/KoolAjax/koolajax.php';
    include_once '../private/class/StuReg/RegPage.php';


    $ksm = new KoolSlideMenu("ksm");
    $ksm->styleFolder = $KoolControlsFolder."KoolSlideMenu/styles/apple";
    $ksm_expand = $ksm->addParent("root","step1","第一步：帐号信息");
    $ksm->addPanel( "step1", "Pstep1" , Step_1() ) ;

    $ksm->addParent("root","step2","<span class='hid' id='wstep2' >第二步 : 用户基本资料 </span>");
    $ksm->addPanel( "step2", "Pstep2" , Step_2() ) ;

    $ksm->singleExpand = true;
    $ksm->width="100%";


    $regisForm = new UpdatePanel( "regisForm" ) ;
    $regisForm->setLoading("../../KoolPHPSuite/KoolControls/KoolAjax/loading/1.gif" , "white"   , 50 );	
  //  $stepDone = ( isset( $_POST["task"] ) && $_POST[ "task" ] == "done" ) ? true : false  ;

    $return = ' <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <link rel="icon" href="images/StuReg/favicon.ico" type="image/x-icon" />
                <link href="css/common.css" rel="stylesheet" type="text/css" />
                <link href="css/StuReg.css" rel="stylesheet" type="text/css" />
                <link rel="stylesheet" href="jquery-ui/development-bundle/themes/base/jquery.ui.all.css" />
                <script type="text/javascript" src="script/jquery.js"></script> 
                <script type="text/javascript" src="script/common.js"></script>
                <script type="text/javascript" src="script/StuReg.js"></script>
                '. $ksm->render().
                    '<script type="text/javascript">
                            ksm.registerEvent("OnBeforeExpand",OnBeforeExpand_handle);
                    </script>

                    ';
    $regisForm->cssclass = "cssRegisForm" ;
    $regisForm->content= $return ;
?>
<?php echo $koolajax->render();?>
<?php echo $regisForm->render();?>
<script src="jquery-ui/development-bundle/jquery-1.9.0.js"></script>
<script src="jquery-ui/development-bundle/ui/jquery.ui.core.js"></script>
<script src="jquery-ui/development-bundle/ui/jquery.ui.widget.js"></script>      
<script src="jquery-ui/development-bundle/ui/jquery.ui.datepicker.js"></script>
<script type="text/javascript">
    $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true
    });
</script>