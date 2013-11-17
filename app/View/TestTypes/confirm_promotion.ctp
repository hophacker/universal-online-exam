<?php
echo $this->Html->css('common');
echo $this->Html->css('TestType/confirm_promotion');
echo $this->Html->script('TestType/confirm_promotion');
echo $this->Html->script('common');
echo $this->element('select');


echo '<div style="float:left">';
echo '<span style="font-size:120%">选择晋级类型：</span>';
echo $this->Form->select('promotion', $promotion, array('empty'=>false));
echo '</div>';
echo '<div style="margin-left:20px;margin-top:5px;float:left">';
echo $this->Form->button('查找', array('id'=>'search'));
echo '</div>';
?>
<table id="tbPromotion">
    
</table>
<div id="btnDiv">
    
</div>
