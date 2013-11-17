<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
$root = "../../../../../";
$KoolControlsFolder = "$root/KoolPHPSuite/KoolControls";
require_once $KoolControlsFolder . "/KoolListBox/koollistbox.php";
require_once "$root/class/autoload.inc";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../../../../jquery-ui/development-bundle/themes/sunny/jquery-ui.css" />
        <script src="../../../../js/jquery-1.9.0.js" type='text/javascript'></script>
        <script src="index.js" type='text/javascript'></script>
        <script src="../../../../jquery-ui/js/jquery-ui-1.10.1.custom.js"></script>
        <link rel="stylesheet" href="../../../../css/common.css" />
        <link rel="stylesheet" href="assignNow.css" />
        <style>
            #progressbar {
                background-color: black;
                position: fixed;
                top: 200px; right: 0; bottom: 0; left: 100px;
                height:30px;
                width:500px;
                opacity: 0.8; /* also -moz-opacity, etc. */
                z-index: 10;
            }
            .progress-label {
                float: left;
                margin-left: 50%;
                margin-top: 5px;
                font-weight: bold;
                text-shadow: 1px 1px 0 #fff;
              }
        </style>
    </head>
    <body>
        <div style="width:100%;min-height:100px;passignSureadding-top:10px;">
            <?php
            $dept_id = util::getIntByGet('dept_id', -1);
            $major_id = util::getIntByGet('major_id', -1);
            $class_id = util::getIntByGet('class_id', -1);
            $s_role = util::getIntByGet('s_role', -1);
            $s_role_to = $s_role + 1;
            $s_grade = util::getIntByGet('s_grade', -1);


            $sel = 'select s_id, s_name, s_num, s_role from student join class using(class_id) join major using(major_id) join department using(dept_id) join education using(edu_id) ';
            $sel .= " where (s_role=$s_role or s_role=$s_role_to)";

            if ($class_id != -1)
                $sel .= " and class_id= $class_id";
            else if ($major_id != -1)
                $sel .= " and major_id= $major_id";
            else if ($dept_id != -1)
                $sel .= " and dept_id= $dept_id";
            if ($s_grade != -1) {
                $sel .= " and s_grade=$s_grade";
            }
            $testBox = array();
            for ($i = $s_role; $i <= $s_role_to; $i++) {
                $testBox[$i] = new KoolListBox("testBox_" . ($i));
                $testBox[$i]->id = "testBox_$i";
            }
            //    <div style='clear:both'></div> 
            foreach ($testBox as $box) {
                $box->AllowTransferOnDoubleClick = true;
                $box->Width = "300px";
                $box->Height = "490px";
                $box->styleFolder = "default";
                $box->AllowMultiSelect = true;
            }
            $testBox[$s_role]->TransferToId = "testBox_$s_role_to";
            $testBox[$s_role]->ButtonSettings->ShowTransfer = true;
            $testBox[$s_role]->ButtonSettings->ShowTransferAll = true;


            $db = new DB_Connect();
            $sth = $db->prepare($sel);
            $sth->execute();
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                $role = (int) $row['s_role'];
                $item = new ListBoxItem();
                $item->Data = array("s_name" => $row['s_name'], "s_num" => $row['s_num'], "s_id" => $row['s_id']);
                $testBox[$role]->AddItem($item);
            }
            foreach ($testBox as $box) {
                $box->ItemTemplate = "<div class='student_list_item' id='{s_id}'>姓名:<strong>{s_name}</strong><label id='noLabel'>学号:<strong>{s_num}</strong></label></div>";
                $box->Init();
                echo "<div style='padding:20px;float:left;'>";
                echo $box->Render();
                echo "</div>";
            }
            echo "<button id='assignSure' >确定分配</button>";
            ?>
        </div>
        <div id="progressbar"> <div class="progress-label">正在分配...</div> </div>
        <div id="dialog" title="message"> </div>
        <script type="text/javascript">
            $(document).ready(function(event){
                $( "#progressbar" ).hide();
            });
            $(document).on('click', '#assignSure', function() { 
                $("#dialog").dialog({
                    autoOpen: false,
                    show: {
                        effect: "blind",
                        duration: 300
                    },
                    hide: {
                        effect: "explode",
                        duration: 300
                    }
                });
                $( "#progressbar" ).show();
                $( '#progressbar').progressbar({
                      value: false
                });
                var fromBox = $(".defaultKLB:eq(0)");
                var toBox = $(".defaultKLB:eq(1)");
                var fromItems = "";
                var toItems = "";
                fromBox.find(".klbList .student_list_item").each(function(){
                    fromItems += $(this).attr("id") + " ";
                });
                toBox.find(".klbList .student_list_item").each(function(){
                    toItems += $(this).attr("id") + " ";
                });
        
                $.post("setRole.php",{
                    s_role1:fromBox.attr('id').replace("testBox_", ""),
                    s_id1:fromItems,
                    s_role2:toBox.attr('id').replace("testBox_", ""),
                    s_id2:toItems
                }, function(data) {
                    $('html').append(data);
                    $( "#progressbar" ).hide();
                    $("#dialog").html('分配成功').dialog("open");
                },'html');
            });
        </script>
    </body>
</html>
