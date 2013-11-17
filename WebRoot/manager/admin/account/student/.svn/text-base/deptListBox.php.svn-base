<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of deptListBox
 *
 * @author j
 */
class deptListBox {

    private static $selectStyle = "sunset";
//	$listbox->ItemTemplate = "<div> <div class='cssImage'><img src='images/{Value}.jpg'/></div> <div class='cssText'>{Text}</div><div class='cssCapacity'>{Capacity}</div><div style='clear:both'></div> </div>";
    

    public function prepare() {
        $root = "../../../../..";
        $KoolControlsFolder = "$root/KoolPHPSuite/KoolControls";
        require_once $KoolControlsFolder . "/KoolListBox/koollistbox.php";
        require_once "$root/class/department.php";
    }
    public function departments() {
        self::prepare();
        $listbox = new KoolListBox("department");
        $listbox->styleFolder = self::$selectStyle;
        $dept_obj = new department();
        $dept = $dept_obj->getALL();
        foreach ($dept as $key => $value) {
            $listbox->AddItem(new ListBoxItem($key, $value));
        }
        $listbox->ItemTemplate = "<div class='dept_listbox' id='{Text}'>{Value}</div>";
        $listbox->ButtonSettings->ShowDelete = true;
        $listbox->ButtonSettings->ShowReorder = true;
        $listbox->Init();
        return $listbox;
    }

    public function majors($dept_id) {
        self::prepare();
        $listbox = new KoolListBox("major");
        $listbox->styleFolder = self::$selectStyle;
        $dept_obj = new department();
        $dept = $dept_obj->getALLMajor($dept_id);
        foreach ($dept as $key => $value) {
            $listbox->AddItem(new ListBoxItem($key, $value));
        }
        $listbox->ItemTemplate = "<div class='major_listbox' id='{Text}'>{Value}</div>";
        $listbox->ButtonSettings->ShowDelete = true;
        $listbox->ButtonSettings->ShowReorder = true;
        $listbox->Init();
        return $listbox;
    }

    public function classes($major_id) {
        self::prepare();
        $listbox = new KoolListBox("major");
        $listbox->styleFolder = self::$selectStyle;
        $dept_obj = new department();
        $dept = $dept_obj->getALLMajor($major_id);
        foreach ($dept as $key => $value) {
            $listbox->AddItem(new ListBoxItem($key, $value));
        }
        $listbox->ItemTemplate = "<div class='class_listbox' id='{Text}'>{Value}</div>";
        $listbox->ButtonSettings->ShowDelete = true;
        $listbox->ButtonSettings->ShowReorder = true;
        $listbox->Init();
        return $listbox;
    }
}

?>
