<?php
function mine($class_name) {
    $class_path = getenv("DOCUMENT_ROOT") . "/class/$class_name.php";
    if (!file_exists($class_path))
        return false;
    else
        require_once($class_path);
    
};
function koolphp($class_name) {
    $koolPath = getenv("DOCUMENT_ROOT") . "/KoolPHPSuite/KoolControls";
    $sub_dirs = array("KoolAjax",
        "KoolButton",
        "KoolChart",
        "KoolForm",
        "KoolImageView",
        "KoolListBox",
        "KoolSlideMenu",
        "KoolTabs",
        "KoolUploader",
        "KoolAutoComplete",
        "KoolCalendar",
        "KoolComboBox",
        "KoolGrid",
        "KoolInput",
        "KoolMenu",
        "KoolSocialShare",
        "KoolTreeView");
    foreach ($sub_dirs as $dir) {
        $path = "$koolPath/$dir/$class_name.php";
        if (file_exists($path)) {
            require_once($path);
            return true;
        }
    }
    return false;
}
//skin!!!!

    spl_autoload_register("mine");
    spl_autoload_register("koolphp");
    require_once getenv("DOCUMENT_ROOT") . "/KoolPHPSuite/KoolControls/KoolAjax/koolajax.php";
    require_once 'sessionCheck.php';
?>
