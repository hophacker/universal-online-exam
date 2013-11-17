<script type="text/javascript">
var minute=<?php echo empty($test_type['TestType']['exam_duration'])?30:$test_type['TestType']['exam_duration'];?>,second=0, total_ans=0,has_ans=0,inter;
var isTest=0;
<?php if($isTest): ?>
isTest=1;
minute=<?php echo empty($test_info['Test']['duration'])?30:$test_info['Test']['duration'];?>;
<?php endif; ?>
</script>

<head>
    <?php
    echo $this->Html->css('exam');
    echo $this->Html->script('Exam.js');
    ?>
</head>

<body oncontextmenu="return false;" onpaste="return false" onselectstart="return false" oncopy="return false;">
<body>
    <div class = "container">
        <div class = "test_content">
            <b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b> 
            <form class = "form" id = 'form' name = 'form' action = '/exams/index/<?php echo $isTest;?>' method = 'post'>
                <div class="sub_title">
                	<?php 
                		echo $test_type['TestType']['name'];
                	 	if($isTest==0){
                	 		echo '&nbsp;（练&nbsp;&nbsp;习）';
                	 	}else{
                	 		echo '&nbsp;（正式考试）';
                	 	}
                	 ?>
               	</div>
                <!--                                         单选题开始                      -->
                <h4>一、判断题 （<?php echo $test_type['TestType']['jud_score']; ?>'&times;<?php echo count($judgeList);?>）</h4> 
                <ul>
                    <?php
                    echo $this->Form->hidden ('answer',array('value'=>$answer));
                    $odd = true;
                    $first = true;
                    $count = 1;
                    foreach ($judgeList as $i) {
                        echo '<li class="' . ($odd ? 'li_odd' : 'li_even') . ($first ? ' li_top' : '') . '" id="q' . $count . '"><a name="l' . $count . '"></a>';
                        echo '<div class="q_con">' . $count . '.' . $JUDGES[$i]['Question']['q_text'] . '</div>';
                        ;
                        echo '<div class="j_con">';
                        echo '<div><label><input type="radio" name="an' . $count . '" value="Y" class="touch">对</label></div>';
                        echo '<div><label><input type="radio" name="an' . $count . '" value="N" class="touch">错</label></div>';
                        echo '</div></li>';
                        $first = false;
                        $odd = !$odd;
                        $count++;
                    }
                    ?>

                </ul>

                <!--                               单选题结束                              -->

                <!--                               多选题开始                              -->
                <h4>二、单选题 （<?php echo $test_type['TestType']['sel_score']; ?>'&times;<?php echo count($selectList);?>）</h4>
                <ul>
                    <?php
                    //$odd = true;
                    $first = true;
                    //$count = 1;
                    foreach ($selectList as $i) {
                        echo '<li class="' . ($odd ? 'li_odd' : 'li_even') . ($first ? ' li_top' : '') . '" id="q' . $count . '"><a name="l' . $count . '"></a>';
                        echo '<div class="q_con">' . $count . '.' . $SELECTS[$i]['Question']['q_text'] . '</div>';
                        ;
                        echo '<div class="s_cho_con">';
                        echo '<div><label><input type="radio" name="an' . $count . '" value="A" class="touch">A.' . $SELECTS[$i]['Question']['q_a'] . '</label></div>';
                        echo '<div><label><input type="radio" name="an' . $count . '" value="B" class="touch">B.' . $SELECTS[$i]['Question']['q_b'] . '</label></div>';
                        echo '<div><label><input type="radio" name="an' . $count . '" value="C" class="touch">C.' . $SELECTS[$i]['Question']['q_c'] . '</label></div>';
                        echo '<div><label><input type="radio" name="an' . $count . '" value="D" class="touch">D.' . $SELECTS[$i]['Question']['q_d'] . '</label></div>';
                        echo '</div></li>';
                        $first = false;
                        $odd = !$odd;
                        $count++;
                    }
                    ?>  
                    <!--                                     多选题结束                    -->
                    <?php if(!empty($ANSES)): ?>
                    <!--                                     解答题开始                    -->
                    <h4>三、简答题 （<?php echo $test_type['TestType']['ans_score']; ?>'&times;<?php echo count($ansList);?>）</h4>

                    <ul>
                        <?php
                        //$odd = true;
                        $first = true;
                        //$count = 1;
                        foreach ($ansList as $i) {
                            echo '<li class="' . ($odd ? 'li_odd' : 'li_even') . ($first ? ' li_top' : '') . '" id="q' . $count . '"><a name="l' . $count . '"></a>';
                            echo '<input type="hidden" value="'.$ANSES[$i]['Question']['id'].'" name="ans_ids[]"/>';
                            echo '<div class="q_con">' . $count . '.' . $ANSES[$i]['Question']['q_text'] . '</div>';
                            ;
                            echo '<div class="a_con">';
                            echo '<textarea id="an' . $count . '" class="touch" name="ans[]"></textarea>';
                            echo '</div></li>';
                            $first = false;
                            $odd = !$odd;
                            $count++;
                        }
                        ?> 

                    </ul>
                    <!--                                     解答题结束                     -->
                    <?php else:?>
                    	 <br/>
                    <?php endif;?>
            </form>
            <b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>  
        </div>
        <div class = "test_right">
            <div class = "co_part">
                <div class = 'info_part'>
                    <div class = 'time_left'>
                    </div>
                    <div class="per_info" id="right_time">
                        <span>剩余时间：</span><span id="time"></span>
                    </div>
                    <div class = 'per_info'>
                        <span>姓名:</span><?php echo $student['Student']['s_name']; ?> 
                    </div>
                    <div class = 'per_info'>
                        <span>院系:</span><?php echo $student['Department']['dept_name']; ?>
                    </div>
                    <div class = 'per_info'>
                        <span>专业:</span><?php echo $student['Major']['major_name']; ?>
                    </div>
                    <div class = 'per_info'>
                        <span>班级:</span><?php echo $student['Class']['class_name']; ?>
                    </div>
                </div>
                <p>判断题</p>
                <table class="ans_sheet">
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($judgeList); $i++) {
                            if ($i == 0) {
                                echo '<tr><td id="b' . ($i + 1) . '"><a class="statButton"  href="#l' . ($i + 1) . '">' . (($i + 1) < 10 ? '0' : '') . ($i + 1) . '</a></td>';
                            } else if ($i % 10 == 0) {
                                echo '</tr><tr><td id="b' . ($i + 1) . '"><a class="statButton" href="#l' . ($i + 1) . '">' . (($i + 1) < 10 ? '0' : '') . ($i + 1) . '</a></td>';
                            } else {
                                echo '<td id="b' . ($i + 1) . '"><a class="statButton"  href="#l' . ($i + 1) . '">' . (($i + 1) < 10 ? '0' : '') . ($i + 1) . '</a></td>';
                            }
                        }
                        if ($i % 10 != 0) {
                            for ($j = 0; $j < 10 - ($i % 10); $j++) {
                                echo '<td></td>';
                            }
                        }
                        echo '</tr>';
                        ?>
                    </tbody>
                </table>
                <p>选择题</p>
                <table class="ans_sheet">
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($selectList); $i++) {
                            if ($i == 0) {
                                echo '<tr><td id="b' . ($i + count($judgeList) + 1) . '"><a class="statButton" href="#l' . ($i + count($judgeList) + 1) . '">' . (($i + count($judgeList) + 1) < 10 ? '0' : '') . ($i + count($judgeList) + 1) . '</a></td>';
                            } else if ($i % 10 == 0) {
                                echo '</tr><tr><td id="b' . ($i + count($judgeList) + 1) . '"><a class="statButton" href="#l' . ($i + count($judgeList) + 1) . '">' . (($i + count($judgeList) + 1) < 10 ? '0' : '') . ($i + count($judgeList) + 1) . '</a></td>';
                            } else {
                                echo '<td id="b' . ($i + count($judgeList) + 1) . '"><a class="statButton" href="#l' . ($i + count($judgeList) + 1) . '">' . (($i + count($judgeList) + 1) < 10 ? '0' : '') . ($i + count($judgeList) + 1) . '</a></td>';
                            }
                        }
                        if ($i % 10 != 0) {
                            for ($j = 0; $j < 10 - ($i % 10); $j++) {
                                echo '<td></td>';
                            }
                        }
                        echo '</tr>';
                        ?>
                    </tbody>
                </table>
                <?php if(!empty($ANSES)): ?>
                <p>解答题</p>
                <table class="ans_sheet">
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($ansList); $i++) {
                            if ($i == 0) {
                                echo '<tr><td id="b' . ($i + count($judgeList) + count($selectList) + 1) . '"><a class="statButton" href="#l' . ($i + count($judgeList) + count($selectList) + 1) . '">' . (($i + count($judgeList) + count($selectList) + 1) < 10 ? '0' : '') . ($i + count($judgeList) + count($selectList) + 1) . '</a></td>';
                            } else if ($i % 10 == 0) {
                                echo '</tr><tr><td id="b' . ($i + count($judgeList) + count($selectList) + 1) . '"><a class="statButton" href="#l' . ($i + count($judgeList) + count($selectList) + 1) . '">' . (($i + count($judgeList) + count($selectList) + 1) < 10 ? '0' : '') . ($i + count($judgeList) + count($selectList) + 1) . '</a></td>';
                            } else {
                                echo '<td id="b' . ($i + count($judgeList) + count($selectList) + 1) . '"><a class="statButton" href="#l' . ($i + count($judgeList) + count($selectList) + 1) . '">' . (($i + count($judgeList) + count($selectList) + 1) < 10 ? '0' : '') . ($i + count($judgeList) + count($selectList) + 1) . '</a></td>';
                            }
                        }
                        if ($i % 10 != 0) {
                            for ($j = 0; $j < 10 - ($i % 10); $j++) {
                                echo '<td></td>';
                            }
                        }
                        echo '</tr>';
                        ?>
                    </tbody>
                </table>
                <?php endif;?>
                <div class = 'quick_help'>
                    <span id='left_ans'>&nbsp;</span>
                    
                    未答题 
                    <span class = 'has_an' id='has_ans'>&nbsp;</span>已答题
                </div>
                <div class = 'submit_part'>
                    <input type = 'button' value = '提交试卷' id = 'submit_bt'>
                </div>
            </div>
        </div>
    </div>
</body>