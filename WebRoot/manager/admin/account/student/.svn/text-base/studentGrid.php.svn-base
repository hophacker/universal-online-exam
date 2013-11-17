<?php

class studentGrid {

    private $KoolControlsFolder;
    private $ds;
    private $root;
    private $grid;
    private $ajax;
    private $where_cla;
    function __construct($where_cla) {
        $this->where_cla = $where_cla;
        $this->root = "../../../../..";
        $this->KoolControlsFolder = "$this->root/KoolPHPSuite/KoolControls";
        require_once $this->KoolControlsFolder . "/KoolAjax/koolajax.php";
        $this->ajax = $koolajax;
        echo $thic->ajax;
        $this->ajax->scriptFolder = "$this->root/KoolPHPSuite/KoolControls/KoolAjax";
        require_once $this->KoolControlsFolder . "/KoolGrid/koolgrid.php";
        require_once $this->KoolControlsFolder . "/KoolCalendar/koolcalendar.php";
        $this->setGrid();
        $this->grid->Process();
    }

    function ajaxRender() {
        echo $this->ajax->Render();
    }

    private function setDB() {
        require_once $this->root . "/class/DB_Connect.php";
        $ds = new MySQLDataSource(DB_Connect::mysql_db());  //This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
        $ds->SelectCommand = 'select s_id, s_user, s_pwd, s_num, s_name, s_mail, s_date, s_role, s_phone, reg_date,  last_login, edu_id, edu_name, dept_name, major_name, class_name, class_id from student join class using(class_id) join major using(major_id) join department using(dept_id) join education using(edu_id) ' . $this->where_cla;
        
        
        $ds->UpdateCommand = "update student set s_pwd=md5('@s_pwd'), s_name='@s_name', s_num='@s_num' where s_id=@s_id";
        $this->grid->DataSource = $ds;
    }

    private function setGrid() {
        $this->grid = new KoolGrid("grid");
        $this->grid->scriptFolder = "$this->root/KoolPHPSuite/KoolControls/KoolGrid";
        $this->grid->AjaxEnabled = true;
        //$grid->AutoGenerateColumns = true;!!!! When using form edit, this should be set to be false;
        $this->setView();
        $this->setDB();
        $this->setColumn();
        $this->setEdit();
    }

    function setColumn() {
        $MT = $this->grid->MasterTable;

        $col = new GridBoundColumn();
        $col->DataField = "s_name";
        $col->HeaderText = "姓名";
        $col->Width = "50px";
        $col->Align = "center";
        $col->AllowFiltering = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "s_num";
        $col->HeaderText = "学号";
        $col->Width = "80px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->AllowFiltering = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "s_user";
        $col->HeaderText = "用户名";
        $col->Width = "80px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->AllowFiltering = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "s_pwd";
        $col->HeaderText = "密码";
        $col->Visible = false;
        $col->ReadOnly = false;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "s_mail";
        $col->HeaderText = "Email";
        $col->Width = "130px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "s_date";
        $col->HeaderText = "生日";
        $col->Width = "80px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "s_role";
        $col->HeaderText = "等级";
        $col->Width = "40px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "s_phone";
        $col->HeaderText = "电话号码";
        $col->Width = "80px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "reg_date";
        $col->HeaderText = "注册时间";
        $col->Width = "80px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "last_login";
        $col->HeaderText = "上次登陆时间";
        $col->Width = "100px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "edu_id";
        $col->Visible = false;
        $col->AllowExporting = false;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "edu_name";
        $col->HeaderText = "学历";
        $col->Width = "40px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "dept_name";
        $col->HeaderText = "学院";
        $col->Width = "80px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "class_id";
        $col->Visible = false;
        $col->AllowExporting = false;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "major_name";
        $col->HeaderText = "专业";
        $col->Width = "80px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridBoundColumn();
        $col->DataField = "class_name";
        $col->HeaderText = "班级";
        $col->Width = "80px";
        $col->Align = "center";
        $col->AllowExporting = true;
        $col->ReadOnly = true;
        $MT->AddColumn($col);

        $col = new GridEditDeleteColumn();
        $col->ShowDeleteButton = true;
        $col->Align = "center";
        $col->Width = "60px";
        $col->AllowExporting = false;
        $col->ReadOnly = true;
        $MT->AddColumn($col);
    }

    function setEdit() {
        $grid = $this->grid;
        $MT = $grid->MasterTable;

        $grid->AllowEditing = true;
        $MT->EditSettings->Mode = "form";
        $MT->EditSettings->InputFocus = "HideGrid";

        $grid->AllowDeleting = true;
        //$MT->ShowFunctionPanel = true;
    }
    function setPager() {
        $MT = $this->grid->MasterTable;
        $MT->Pager->ShowPageSize = false;
        $MT->Pager = new GridPrevNextAndNumericPager();
        $MT->Pager->PageSize  = 50;
    }
    function setView() {
        $this->setPager();
        $grid = $this->grid;
        $grid->AjaxLoadingImage = $this->KoolControlsFolder . "/KoolAjax/loading/5.gif";
        $grid->styleFolder = "sunset";
        $grid->AllowHovering = true;
        $grid->PageSize = 20;
        $gird->ColumnAlign = "center";
        //$grid->Width = "1000px";
        $grid->Height = "525px";
        $grid->AllowScrolling = true;
        $grid->RowAlternative = true;
        $grid->AllowSorting = true;
    }
    function render() {
        echo $this->grid->Render();
    }
    function setIgnore($b) {
        $this->grid->ExportSettings->IgnorePaging = $b;
    }
    function export($format) {
        $this->grid->GetInstanceMasterTable()->$format();
    }
}

$grid = new studentGrid($where_cla);
error_reporting(E_ALL);
ini_set('display_errors',1);
require_once "../renderGrid.php";
?>
