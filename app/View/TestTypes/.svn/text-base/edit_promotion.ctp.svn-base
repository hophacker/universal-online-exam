

<fieldset>
    <legend><?php echo $legend; ?></legend>
    
    
    <?php 
        $timesLabel = '最少参加考试次数';
        $highestLabel = '某次考试最高分需达到';
        echo '新增记录';
        echo $this->Form->create('Promotion');
        echo '<table>';
        echo '<tr>';
        echo '<td style="vertical-align:middle">'.$this->Form->input("test_type_id", array('type'=>'hidden','value'=>$test_type_id)).'</td>';
        echo '<td>'.$this->Form->input("times", array('label' => $timesLabel)).'</td>';
        echo '<td>'.$this->Form->input("highest", array('label' => $highestLabel)).'</td>';
        
        echo '</tr>';
        echo '</table>';
        echo $this->Form->end('保存');
        
        $counter = 1;
        echo '已有记录';
        foreach($promotions as $promotion) {
            echo $this->Form->create('Promotion');
            echo '<table>';
            echo '<tr>';
            echo '<td style="vertical-align:middle">'.$counter++.$this->Form->input("id", array('type'=>'hidden','value'=>$promotion['promotions']['id'])).$this->Form->input("test_type_id", array('type'=>'hidden','value'=>$promotion['promotions']['test_type_id'])).'</td>';
            //echo '<td style="text-align:center">次数</td>';
            echo '<td>'.$this->Form->input("times", array('value'=>$promotion['promotions']['times'], 'label' => $timesLabel)).'</td>';
            //echo '<td><input type="text" name="'.$promotion['promotions']['times'].'" value="'.$promotion['promotions']['times'].'" /></td>';
            //echo '<td style="text-align:center">最高得分</td>';
            //echo '<td><input type="text" name="'.$promotion['promotions']['highest'].'" value="'.$promotion['promotions']['highest'].'" /></td>';
            echo '<td>'.$this->Form->input("highest", array('value'=>$promotion['promotions']['highest'], 'label' => $highestLabel)).'</td>';
            echo '<td style="vertical-align:middle" >'.$this->Html->link('删除',array('action'=>'delPromotion',$promotion['promotions']['id'],$promotion['promotions']['test_type_id']),array('target'=>'_self')).'</td>';
            echo '</tr>';
            echo '</table>';
            echo $this->Form->end('保存');
            
        }
        if($counter==1) {
            echo '暂无记录' ;
        }        
    ?>
</fieldset>