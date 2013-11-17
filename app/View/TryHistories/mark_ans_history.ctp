<style>
label{
	float:left;
	line-height: 20px;
}
input[type="text"]{
	width:50px;
	padding:1px 3px;
}
</style>

<script type="text/javascript">
$(function(){
	var qids=new Array();
	$(".ans_id").each(function(){
		if(checkVar($(this).val())){
			qids.push($(this).val());
		}
	})
	$("#ans_submit").click(function(){
		var scores=new Array();
		var status=true;
		$(".ans_score").each(function(){
			var area=$(this);
			var score=area.val();
			if(!checkVar(score)){
				artError("请给答案评分！",function(){
					area.focus();
				});
				status=false;
				return false;
			}else{
				scores.push(score)
			}
		})
		if(status!=true) return false;
		$("#main").mask("提交中...");
		$.post($("#form").attr("action"),{"qids":qids,"scores":scores},function(e){
			if(e.status==1){
				artSuccess(e.info,0,function(){
					location.reload();
				})
			}else{
				artError(e.info);
			}
			$("#main").unmask();
		},"json")
	})
})
</script>
<div id="main">
<center><b>
<?php if(!empty($student)){
		echo '学院：'.$student['Department']['dept_name'].'&nbsp;&nbsp;';
		echo '专业：'.$student['Major']['major_name'].'&nbsp;&nbsp;';
		echo '班级：'.$student['Class']['class_name'].'&nbsp;&nbsp;';
		echo '姓名：'.$student['Student']['s_name'].'&nbsp;&nbsp;';
		echo '学号：'.$student['Student']['s_num'];
}
?>
</b></center>
<form class = "form" id = 'form' name = 'form' action = '/tryHistories/markAnsHistory/<?php echo $tryHistoryid;?>' method = 'post'>
<table>
	<?php 
		if(!empty($ansHistory)):
		foreach($ansHistory as $ans){
			echo '<tr><td><b>题目：</b>'.$questions[$ans['AnsHistory']['question_id']]['Question']['q_text'].'</td></tr>';
			echo '<tr><td><b>参考答案：</b>'.$questions[$ans['AnsHistory']['question_id']]['Question']['q_a'].'</td></tr>';
			echo '<tr><td style="color:red"><b>学生答案：</b>'.$ans['AnsHistory']['answer'].'</td></tr>';
			echo '<tr><td>';
			if ($tryHistory['TryHistory']['has_checked']!=1){
				echo $this->Form->input('ansid[]',array('type'=>'hidden','value'=>$ans['AnsHistory']['id'],'class'=>'ans_id'));
				echo $this->Form->input('score[]',array('type'=>'text','label'=>'<b>评分('.$testType['TestType']['ans_score'].'\')：</b>','after'=>'&nbsp;分','class'=>'ans_score'));
			}else{
				echo '<b>得分：</b>'.$ans['AnsHistory']['score'].'分';
			}
			echo '</td></tr>';
		}
	?>
</table>
</form>
<?php 
	if ($tryHistory['TryHistory']['has_checked']!=1){
		echo $this->Form->button("提交",array('id'=>'ans_submit'));
	}
	endif;
?>
</div>