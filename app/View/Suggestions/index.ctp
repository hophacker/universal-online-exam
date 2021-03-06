<?php
    echo $this->Html->script('plugin/ckeditor/ckeditor');
    echo $this->Html->script('Suggestion/Suggestion');
    echo $this->Html->css('common');
?>

<style>
.main{
	width:770px;
}

#msgTable td{
	vertical-align:middle;
}
#msgTable #msgSubject{
	width:400px;
	height:20px;
	padding:0 2px;
}
</style>

<script type="text/javascript">
$(function(){
 	var editor;
 	function createEditor(languageCode){
 		if ( editor ) editor.destroy();
        editor=CKEDITOR.replace('sugInfo',{
        	language: languageCode,
        	skin : 'moono'
        });
    }
    createEditor('zh-cn');
})
</script>
<div style="display:none" id="target"><?php echo $target;?></div>
<?php 
    if($target == 1) {
        $msg = "Suggestion History";
    } else {
        $msg = "给系统的建议";
    }
    
    echo $this->Form->label("suggestLabel", $msg,  "larger_label");
 ?>
<div class="main">
	<table id="sugTable">
		<tr>
			<td width="70"><?php echo $this->Form->label('sugSubject','通知主题：', 'label');?></td>
			<td><?php echo $this->Form->input('sugSubject',array('label'=>false,'size'=>90));?></td>
		</tr>
		<tr>
			<td colspan="2">
				<textarea cols="80" id="sugInfo" name="msgInfo" rows="10"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $this->Form->button('发布',array('type'=>'button','id'=>'postSuggestion'));?>
			</td>
		</tr>
	</table>
</div>

