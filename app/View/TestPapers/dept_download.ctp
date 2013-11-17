<?php 
    $this->Html->css('common');
    if($enable == 1) 
        echo $this->Html->link('Testing paper download', array('action' => 'download', $paper['id'].$paper['suffix'], $paper['name']));
    else        
        echo '<p class="larger_label">当前不能下载试卷，请联系校管理员！</p>';
?>
