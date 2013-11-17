<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$title|default:'Universal Online Examination System'}</title>
    </head>
    <body>
        <?php
        class ksGrid {
            private $KoolControlsFolder;
            private $ds;
            private $root;
            private $grid;
            private $ajax;
            
            function __construct() {
                $this->root = "../../../../..";
                require_once $this->root . "/class/autoload.inc";
                $this->KoolControlsFolder = "$this->root/KoolPHPSuite/KoolControls";
                require_once $this->KoolControlsFolder . "/KoolAjax/koolajax.php";
                $this->ajax = $koolajax;
                $this->ajax->scriptFolder = "$this->root/KoolPHPSuite/KoolControls/KoolAjax";
                require_once $this->KoolControlsFolder . "/KoolGrid/koolgrid.php";
                require_once $this->KoolControlsFolder . "/KoolCalendar/koolcalendar.php";
                $this->setGrid();
                $this->grid->Process();
            }
            function ajaxRender(){
                echo $this->ajax->Render();
            }
            private function setDB() {
                require_once $this->root . "/class/DB_Connect.php";
                $ds = new MySQLDataSource(DB_Connect::mysql_db()); //This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
                $ds->SelectCommand = "select m_id,m_user,m_name,m_pwd,department.dept_id,dept_name from manager right join department using(dept_id)";
                $ds->UpdateCommand = "update manager set m_pwd=md5('@m_pwd'), m_user='@m_user', m_name='@m_name', dept_id='@dept_id' where m_id=@m_id";
                $ds->InsertCommand = "insert into manager (m_user, m_pwd, m_name, dept_id) values('@m_user',md5('@m_pwd'), '@m_name', '@dept_id')";
                $ds->DeleteCommand = "delete from manager where m_id=@m_id";
                $this->grid->DataSource = $ds;
            }
            private function setGrid() {
                $this->grid = new KoolGrid("grid");
                $this->grid->scriptFolder = "$this->root/KoolPHPSuite/KoolControls/KoolGrid";
                $this->grid->AjaxEnabled = true;
                $this->grid->KeepGridRefresh = true;
                //$grid->AutoGenerateColumns = true;!!!! When using form edit, this should be set to be false;
                $this->setView();
                $this->setDB();
                $this->setColumn();
                $this->setEdit();
                
            }
            function setColumn(){
                $MT = $this->grid->MasterTable;
                $column = new GridBoundColumn();
                $column->DataField = "m_id";
                $column->ReadOnly = true;
                $column->Visible = false;
                $MT->AddColumn($column);
                
                $column = new GridBoundColumn();
                $column->DataField = "m_user";
                $column->HeaderText = "用户名";
                $column->NullDisplayText = "请添加该院系管理员";
                $column->AddValidator(REValidator::username());
                
                $MT->AddColumn($column);

                $column = new GridBoundColumn();
                $column->DataField = "m_name";
                $column->HeaderText = "姓名";
                $MT->AddColumn($column);
                
                
                $column = new GridDropDownColumn();
                $column->DataField = "dept_id";
                $column->HeaderText = "院系";
                $column->ReadOnly = false;
                $column->Visible = false;
                $deptobj = new department();
                $dept = $deptobj->getAll();
                foreach ($dept as $key => $value){
                    $column->AddItem($value,$key);
                }
                $MT->AddColumn($column);
            
     
                $column = new GridBoundColumn();
                $column->DataField = "dept_name";
                $column->HeaderText = "院系";
                $column->ReadOnly = true;
                $column->Width = "200px";
                
                $MT->AddColumn($column);
                
                
                $column = new GridBoundColumn();
                
                $column->DataField = "m_pwd";
                $column->HeaderText = "密码";
                $column->DefaultValue = "请使用强密码";
                $column->ReadOnly = false;
                $column->Visible = false;
                
                $column->AddValidator(REValidator::password());
                $MT->AddColumn($column);
                
                $column = new GridEditDeleteColumn();
                $column->ShowDeleteButton = true;
                $column->Align = "center";
                $MT->AddColumn($column);
            }
            function setEdit() {
                $grid = $this->grid;
                $MT = $grid->MasterTable;
                
                $grid->AllowEditing = true;                
                $MT->EditSettings->Mode = "form";
                $MT->EditSettings->InputFocus = "BlurGrid";
                
                $grid->AllowDeleting = true;
                
                $MT->ShowFunctionPanel = true;
                $MT->FunctionPanel->InsertButtonText = "增加新管理员";
                
                $grid->AllowInserting = true;
                $MT->InsertSettings->Mode = "form";
                $MT->InsertSettings->InputFocus = "BlurGrid";
            }
            
            function setPager(){
                $MT = $this->grid->MasterTable;
                $MT->Pager = new GridPrevNextAndNumericPager();
                $MT->Pager->ShowPageSize = false;
                $MT->Pager->PageSize = 20;
                
            }
            function setView() {
                $this->setPager();
                $grid = $this->grid;
                $grid->styleFolder = "sunset";
                $grid->AllowHovering = true;
                
                $grid->Width = "800px";
                $grid->Height = "525px";
                $grid->AllowScrolling = true;
                $grid->RowAlternative = true;
                $grid->AllowSorting = true;
               // $grid->DataKeyNames  = "customerNumber,fengjie,ok";

            }
            function render(){
                echo $this->grid->Render();
            }
            function setIgnore($b){
                $this->grid->ExportSettings->IgnorePaging = $b;
            }
            function export($format){
                $this->grid->GetInstanceMasterTable()->$format();
            }
        }
        
        
        
        $grid = new ksGrid();
        include "../renderGrid.php";

?>
    </body>
</html>
