<?php 
	echo $this->element('jqgrid');
?>

<script type="text/javascript">
$(function(){
	//表格配置
	$("#account_admin_table").jqGrid({
		datatype: "json",
		url:"department",
		height:450,
		width: 900,
		mtype:"POST",
		colNames:["编号","院系"],
		colModel:[
			{name:"id",index:"id",hidden:true},
			{name:"dept_name",index:"dept_name",width:60,align:"left",sortable:true,editable:false,search:false},
		],
		sortname:"id",
		sortorder:"asc",
		viewrecords:true, 		
		rowNum:20,				
		rowList:[20], 
		pager:"#account_admin_pager",	
		multiselect:false, 
		caption:"",
		jsonReader: {
			repeatitems : false,
			id:"id"
		},
		shrikToFit:true,
		rownumbers:true,
		subGrid:true,
		subGridRowExpanded:function(subgrid_id,row_id){
			var subgrid_table="account_admin"+subgrid_id;
	       	$("#"+subgrid_id).html("<table id=\""+subgrid_table+"\"></table><div id=\"account_admin_pager"+subgrid_id+"\">");
	        $("#"+subgrid_table).jqGrid({
	        	datatype:"json",
          		url:"admin?dept_id="+row_id,
          		height:80,
          		width:810,
          		mtype:"POST",
          		colNames:["编号","用户名","姓名","密码"],
          		colModel:[
		            {name:"id",index:"id",hidden:true},
		            {name:"m_user",index:"m_user",width:100,align:"left",editable:true,editrules:{required:true}},
		            {name:"m_name",index:"m_name",width:100,align:"left",editable:true,editrules:{required:true}},
		            {name:"m_pwd",index:"m_pwd",hidden:true,align:"left",sortable:false,editable:true,edittype:"password",
						editrules:{edithidden:true},editoptions:{dataInit:function(elem){$(elem).val("");}},search:false}
         		],
          		rowNum:20,
          		rowList:[20],
          		pager:"#account_admin_pager"+subgrid_id,
		        sortname:"id",
		        sortorder:"asc",
		        shrikToFit:true,
		        jsonReader:{
					repeatitems : false,
					id:"id",
				},
				editurl:"adminOper?dept_id="+row_id,
		    });
		    
		    $("#"+subgrid_table).jqGrid("navGrid","#account_admin_pager"+subgrid_id,{edit:true,add:true,del:true,search:false,view:true,refresh:true},
			{
				recreateForm:true,//重新构建编辑框
				closeOnEscape:true,
				closeAfterEdit:false
			}
			,{},{
				closeOnEscape:true
			},{},{
				closeOnEscape:true
			});		
		}    
	});
	//表格操作条
	$("#account_admin_table").jqGrid("navGrid","#account_admin_pager",{edit:false,add:false,del:false,search:false,view:true,refresh:true},
		{},{},{},{},{
			closeOnEscape:true
		}
	);		
});
</script>

<div class="main">
	<table id="account_admin_table"></table>
	<div id="account_admin_pager"></div>
</div>