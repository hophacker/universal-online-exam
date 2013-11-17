<?php
$root = "../../../../../";
$KoolControlsFolder = "$root/KoolPHPSuite/KoolControls";
require $KoolControlsFolder . "/KoolListBox/koollistbox.php";
require_once "$root/class/autoload.inc";
if (isset($_POST['dept_id'])) {
    $dept_id = util::getInt('dept_id', -1);
    $major_id = util::getInt('major_id', -1);
    $class_id = util::getInt('class_id', -1);

    $s_role = util::getInt('s_role', -1);
    $s_role_to = $s_role + 1;
    $s_grade = util::getInt('s_grade', -1);


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
        $testBox[$i]->UpdatePanel = "student_updatepanel";
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

    for ($i = $s_role; $i <= $s_role_to; $i++) {
        $testBox[$i]->ItemTemplate = "<div class='student_list_item' id='{s_id}'>姓名:<strong>{s_name}</strong>学号:<strong>{s_num}</strong></div>";
        $testBox[$i]->Init();
//                            echo $box->Render();
        echo "<div style='padding:20px;float:left'>";
        echo $testBox[$i]->Render();
        echo "</div>";
    }
    echo "<button id='assignSure' >确定分配</button>";
}
?>
