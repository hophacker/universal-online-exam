<?php
    echo $this->Html->script('Suggestion/viewSuggestion');
    echo $this->Html->css('Suggestion/viewSuggestion');
    echo $this->Html->css('common');
    echo $this->Paginator->first('第一页'). ' ';
    echo $this->Paginator->prev('<< 前一页').' ';
    echo $this->Paginator->numbers(array('separator'=>' - ')); 
    echo ' '.$this->Paginator->next('下一页 >>');
    echo ' '.$this->Paginator->last("最后一页");
    $id = ($pageInfo['page']-1)*$pageInfo['current'] + 1;
?>
<table>
    <tr>
        <th>编号</th><th>建议标题</th><th>提出人</th><th>提出时间</th><th>查看</th><th>删除</th>
    </tr>
    <?php 
        foreach($suggestions as $suggestion) {
            echo '<tr>';
            echo '<td>'.$id++.'</td>';
            echo '<td id="title'.$suggestion['Suggestion']['id'].'">'.$suggestion['Suggestion']['title'].'</td>';
            echo '<td>'.$suggestion['Student']['s_name'].'</td>';
            echo '<td>'.$suggestion['Suggestion']['date'].'</td>';
            echo '<td><span class="listSuggestion" viewId="'.$suggestion['Suggestion']['id'].'">查看</span></td>';
            echo '<td><span class="delLink" delId="'.$suggestion['Suggestion']['id'].'">删除</span></td>';
            echo '</tr>';
        }
    ?>
</table>
<?php 
        foreach($suggestions as $suggestion) {
            echo '<div class="listBlock" id="div'.$suggestion['Suggestion']['id'].'">';
            echo '<label class="medium_label">'.$suggestion['Suggestion']['title'].'</label>';
            echo $suggestion['Suggestion']['content'];
            // 新回复
            echo $this->Form->button('回复', array('class'=>'reply', 'replyId'=>$suggestion['Suggestion']['id'], 'state'=>0));
            echo '<div class="newReply" style="display:none" id="re'.$suggestion['Suggestion']['id'].'">';
//            echo $this->Form->create('Suggestion', array('action' => 'addReply', 'id'=>'form'.$suggestion['Suggestion']['id']));
            echo $this->Form->input('suggestion_id', array('type'=>'hidden','value'=>$suggestion['Suggestion']['id'],'id'=>'sid'.$suggestion['Suggestion']['id']));
            echo $this->Form->input('content', array('rows'=>10,'cols'=>'100%','label'=>'回复内容','id'=>'content'.$suggestion['Suggestion']['id']));
            echo $this->Form->button('提交回复',array('class'=>'addReply', 'replyId'=>$suggestion['Suggestion']['id']));
//            echo $this->Form->end();
            echo '</div>';
            // 回复列表
            echo '<p class="larger_label">我的回复</p>';
            echo '<table>';
            echo '<tr><th>序号</th><th>回复内容</th><th>日期</th><th>删除</th></tr>';
            $reply = $suggestion['SuggestionReply'];
            for($i = 0; $i < count($reply); $i++) {
                echo '<tr>';
                echo '<td>'.($i+1).'</td>';
                echo '<td width="70%">'.$reply[$i]['content'].'</td>';
                echo '<td>'.$reply[$i]['date'].'</td>';
                echo '<td><span class="delReplyLink" delId="'.$reply[$i]['id'].'">删除</span></td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '</div>';
            
        }
?>