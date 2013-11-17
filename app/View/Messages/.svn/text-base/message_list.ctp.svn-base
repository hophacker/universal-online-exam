<?php 
	echo $this->element('jqgrid');
?>

<style>
.selectArea,.query_btn,.jqgrid_table{
	float:left;
}
.query_btn{
	margin:10px;
}
</style>

<script type="text/javascript">
$(function(){
	//表格配置
	$("#message_list_table").jqGrid({
		datatype: "json",
		url:"messageList",
		height: 450,
		width: 1000,
		mtype:"POST",
		colNames:["编号","标题","通知内容","发布时间","通知类型","通知内容操作"],
		colModel:[
			{name:"id",index:"id",hidden:true},
			{name:"title",index:"title",width:80,align:"left",sortable:true,editable:true,editrules:{required:true},
				search:true,searchoptions:{sopt:['eq','ne','bw','ew','cn']}},
			{name:"info",index:"info",hidden:true,
				search:true,stype:"textarea",searchoptions:{searchhidden: true,sopt:['eq','ne','bw','ew','cn']}},
			{name:"info_date",index:"info_date",width:60,align:"center",sortable:true,editable:false,
				search:true,searchoptions:{sopt:['eq','gt','lt','le','ge'],dataInit:function (e){initTime(e)}}},
			{name:"info_type",index:"info_type",width:60,align:"center",sortable:true,editable:true,edittype:"select",
				editoptions:{value:"1:考试;2:其他"},formatter:'select',search:true,stype:'select',searchoptions:{sopt:['eq'],value:"1:考试;2:其他"}},
			{name:"operation",index:"operation",width:60,align:"center",sortable:false,editable:false,search:false}
		],
		sortname:"id",
		sortorder:"asc",
		viewrecords:true, 		
		rowNum:20,				
		rowList:[20,40,60], 
		pager:"#message_list_pager", 		
		multiselect:false, 
		caption:"",
		jsonReader: {
			repeatitems : false,
			id:"id"
		},
		shrikToFit:true,
		editurl:"messageOper",
		rownumbers:true
	});
	
	$(".info_view").live("click",function(){
		var id=$(this).attr("id");
		var element=document.getElementById(id);
		var title=$(this).parents("tr").find("td[aria-describedby='message_list_table_title']").text();
		var content=$(this).parent().find(".info_hidden").html();
		var dialog=art.dialog({
			id:"dialog_"+id,
			lock:true,
			title:title,
			follow:element,
			content:content,
			okValue:"关闭",
			ok:function(){}
		})
	})
	
	//表格操作条
	$("#message_list_table").jqGrid("navGrid","#message_list_pager",{excel:true,edit:true,add:false,del:true,search:true,view:true,refresh:true},
		{
			closeOnEscape:true,
			closeAfterEdit:false
		}
		,{},{
			closeOnEscape:true
		},{
			multipleSearch:false,
			multipleGroup:false, 
			showQuery:false
		},{
			closeOnEscape:true
		}
	);
});
</script>

<div class="main">
	<div class="jqgrid_table">
		<table id="message_list_table"></table>
		<div id="message_list_pager"></div>
	</div>
</div>