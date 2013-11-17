<?php 
	//jqueryUI核心函数
	echo $this->Html->script('plugin/jqueryUI/jquery-ui-1.10.1.custom.min.js');
	//jquery ui 事件插件中文语言包
	echo $this->Html->script('plugin/jqueryUI/i18n/jquery.ui.datepicker-zh-CN.js');
	//jqgrid 4.4.4核心函数
	echo $this->Html->script('plugin/jqgrid/jquery.jqGrid.min.js');
	//jqgrid 4.4.4语言包
	echo $this->Html->script('plugin/jqgrid/i18n/grid.locale-cn.js');
	//jquery ui的界面css
	echo $this->Html->css('plugin/jqueryUI/flick/jquery-ui-1.10.1.custom.min.css');
	//jqgrid 4.4.4界面css
	echo $this->Html->css('plugin/jqgrid/ui.jqgrid.css');
?>

<style>
/* jqgrid样式修正*/
table tr td{
	border-bottom:none;
}
table tr td{
	vertical-align:center;
}
table tr:nth-child(even) {
	background: #fff;
}
th {
	border:none;
}
.jqgrid_table{
	margin-top:20px;
}

.ui-jqgrid tr.jqgrow td {
	height: auto;
	vertical-align: text-top;
	padding-top: 2px;
}
.ui-tabs .ui-tabs-panel{
	overflow:auto;
}
.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight{
	border: 1px solid  #DFF4FF;
	color: #0073EA;
	background:#DFF4FF;
}
.ui-jqgrid .ui-jqgrid-titlebar{
	padding:0 4px;
}
.ui-icon-close { 
	float: left; 
	margin: 0.3em 0.5em 0 0; 
	cursor: pointer;
}
.ui-del,.ui-add{
	width:25px;
	height:25px;
	margin-left:2px;
}
.ui-jqgrid .ui-jqgrid-view{
	font-size:12px;
}
</style>

<script type="text/javascript">
//构建控件
function myelem(value, options) {
	var elem="<span>"+value+"</span>";
	return elem;
}
//获取值
function myvalue(elem, operation, value) {
	if(operation === 'get') {
		return $(elem).text();
	} else if(operation === 'set') {
		$(elem).text(value);
	}
}
//时间插件初始化
function initTime(e){
	$(e).datepicker({
		dateFormat:'yy-mm-dd'
	});
}
</script>