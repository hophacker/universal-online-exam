<script type="text/javascript">
$(function(){
	$("#exam_now").click(function(){
		window.open("/exams/index/1","Online Examination","height=768, width=1100")
	})
	$("#exercise_now").click(function(){
		window.open("/exams/index","Online Excersize","height=768, width=1100")
	})
})
</script>
<div>
	<label class="very_larger_label">考试条件检测：</label>
	<table>
		<tr>
			<th width="30%">检查内容</th>
			<th width="50%">详细信息</th>
			<th width="20%">检查状态</th>
		</tr>
		<tr>
			<td>练习资格</td>
			<td><?php if(!$check['has_test']): ?>当前您还未获得练习的资格<?php else:?>当前您已获得练习的资格<?php endif;?></td>
			<td><?php if($check['has_test']) echo '通过'; else echo '<span class="red">未通过</span>' ?></td>
		</tr>
		<tr>
			<td>平时成绩</td>
			<td>
				考试要求：
				<?php 
				if(!empty($promotions)){
					foreach($promotions as $promotion){
						echo '<span class="red">'.$promotion['Promotion']['times'].'</span>次有效练习的最高分达到<span class="red">'.$promotion['Promotion']['highest'].'</span>分&nbsp;';
					}
				}
				?>
				<br/>
				有效练习最低分为：<span class="red"><?php echo $exam_score;?></span>分。
				<br/>
				完成情况：<span class="red"><?php echo $student['times'];?></span>次有效练习的最高分达到<span class="red"><?php echo $student['highest'];?></span>分
			</td>
			<td><?php if($check['exercise_pass']) echo '通过'; else echo '<span class="red">未通过</span>' ?></td>
		</tr>
		<tr>
			<td>考试分配</td>
			<td><?php if(!$check['has_exam']): ?>当前您还未被分配考试<?php else:?>当前您已获得考试的资格<?php endif;?></td>
			<td><?php if($check['has_exam']) echo '通过'; else echo '<span class="red">未通过</span>' ?></td>
		</tr>
		<?php if($check['has_exam']): ?>
		<tr>
			<td>考试时间</td>
			<td><?php if(!$check['not_start']): ?>本场考试还未开始，<?php elseif(!$check['over_time']):?>本场考试已结束，<?php endif;?>考试时间：<strong class="red"><?php echo $test_info['Test']['begin_time'];?></strong>，有效期为<strong class="red"><?php echo $test_info['Test']['available'];?></strong>小时</td>
			<td><?php if($check['over_time']&&$check['not_start']) echo '通过'; else echo '<span class="red">未通过</span>' ?></td>
		</tr>
		<tr>
			<td>考试状态</td>
			<td><?php if(!$check['has_join']): ?><b>当前您已经参加过本场考试，无法再次参加</b><?php else:?>当前您没有参加本场考试<?php endif;?></td>
			<td><?php if($check['has_join']) echo '通过'; else echo 'Please wait for reply patiently！' ?></td>
		</tr>
		<?php endif;?>
	</table>
</div>
<div style="text-align:center;">
	<?php if($hasPass):?>
	<button id="exam_now">立即考试</button>
	<?php endif;?>
	&nbsp;&nbsp;
	<?php if($check['has_test']): ?>
	<button id="exercise_now">立即练习</button>
	<?php endif;?>
</div>