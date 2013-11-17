<!DOCTYPE html>
<html xmlns=http://www.w3.org/1999/xhtml>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');
		//echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        echo $this->Html->css('jquery-ui-themes/sunny/jquery-ui');
        echo $this->Html->script('jquery-1.7.2.min');
        echo $this->Html->script('common');
        echo $this->Html->script('jquery-ui-1.10.1.custom');
        //AjaxForm Plugin
        echo $this->Html->script('jquery.form.js');
        //mask层
        echo $this->Html->script('plugin/jquery.loadmask.min.js');
		echo $this->Html->css('plugin/loadmask/jquery.loadmask.css');
		//弹出层插件
		echo $this->Html->script('plugin/artDialog/artDialog.min.js');
		echo $this->Html->css('plugin/artDialog/skins/default.css');
        echo $this->Html->script('common.js');
        echo $this->Html->css('common');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
    <?php echo $this->element('sql_dump'); 
        echo $this->Js->writeBuffer();?>
</body>
</html>
