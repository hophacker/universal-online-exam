<?php
$KoolControlsFolder = "../../../../../KoolPHPSuite/KoolControls";
require '../../../../../class/DB_Connect.php';
require $KoolControlsFolder . "/KoolChart/koolchart.php";
require $KoolControlsFolder . "/KoolComboBox/koolcombobox.php";
require $KoolControlsFolder . "/KoolAjax/koolajax.php";
/*
  if ($koolajax->isCallback) {
  sleep(1);
  }
 */

$selected_id = 'n';
if (isset($_POST["kcb_selectedValue"])) {
    $selected_id = $_POST["kcb_selectedValue"];
}

$kcb = new KoolComboBox("kcb");
$kcb->scriptFolder = $KoolControlsFolder . "/KoolComboBox";
$kcb->styleFolder = "default";
$kcb->width = "185px";
$kcb->additem('年', 'n', NULL, ($selected_id == 'n'));
$kcb->additem('月', 'y', NULL, ($selected_id == 'y'));

switch ($selected_id) {
    case 'n':$format = '%X';
        break;
    case 'y':$format = '%X-%c';
        break;
}

$db = new DB_Connect;
$query = "select DATE_FORMAT(reg_date,'" . $format . "') date,count(*) from student group by (date)";
if (($stmt = $db->prepare($query))) {
    $stmt->execute();
    $date = $stmt->fetchAll(PDO::FETCH_NUM | PDO::FETCH_COLUMN, 0);
    $stmt->execute();
    $count = $stmt->fetchAll(PDO::FETCH_NUM | PDO::FETCH_COLUMN, 1);
}
//echo $query.'<br/>';
//var_dump($date);
//var_dump($count);
for($i = 0;$i < count($count);$i++)
    $count[$i] = (int)$count[$i];

$chart = new KoolChart("chart");
$chart->scriptFolder = $KoolControlsFolder . "/KoolChart";
$chart->Title->Text = "注册统计";
$chart->Width = 1280;
$chart->Height = 1024;
$chart->Legend->Appearance->Position = "top";
$chart->PlotArea->XAxis->Title = "时间";
$chart->PlotArea->XAxis->Set($date);
$chart->PlotArea->YAxis->Title = "注册人数";
$chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = "{0}";

$series = new ColumnSeries();
$series->Name = "人数";
$series->TooltipsAppearance->DataFormatString = "{0}人";
$series->ArrayData($count);
$chart->PlotArea->AddSeries($series);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8;"  />
        <title>注册人数统计</title>
    </head>
    <body>
        <form id="form1" method="post">
            <?php echo $koolajax->Render(); ?>
            <?php echo KoolScripting::Start(); ?>
            <updatepanel id="combobox_updatepanel" class="background">
                <content>
                    <?php echo $kcb->Render(); ?>   
                    <?php echo $chart->Render(); ?>                  
                    <script type="text/javascript">
                        kcb.registerEvent("OnSelect",function(sender,arg){
                            combobox_updatepanel.update();
                        });					
                    </script>
                </content>
                <loading opacity="50%" image="<?php echo $KoolControlsFolder; ?>/KoolAjax/loading/5.gif" />
            </updatepanel>
            <?php echo KoolScripting::End(); ?>
        </form>
    </body>
</html>