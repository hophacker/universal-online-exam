<?php
if (isset($_POST["IgnorePaging"])) 
$grid->setIgnore($_POST["IgnorePaging"]==1);

if (isset($_POST["Export"])) {
echo $_POST["Export"];
ob_end_clean();
$grid->export($_POST["Export"]);
}
?>

<form id="form1" method="post">
    <?php $grid->ajaxRender(); ?>
    <?php $grid->render(); ?>
    <div style="margin-top:2px;padding:2px;width:300px;height:25px;background:#DFF3FF;border:solid 1px #C6E1F2;">

        <select name="IgnorePaging">
            <option value="0">保存当前页</option>
            <option value="1">保存全部</option>
        </select>
        <select name="Export">
            <option value="ExportToExcel">保存为Excel表格</option>
            <option value="ExportToWord">保存为Word文档</option>
            <option value="ExportToPDF">保存为PDF文档</option>
            <option value="ExportToCSV">保存为CSV表格</option>
        </select>
        <input type="submit" value="确定"></input>
    </div>
</form>
