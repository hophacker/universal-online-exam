<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html xmlns=http://www.w3.org/1999/xhtml>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        echo $this->Html->script('jquery-1.7.2.min');
        //mask层
        echo $this->Html->script('plugin/jquery.loadmask.min.js');
		echo $this->Html->css('plugin/loadmask/jquery.loadmask.css');
		//弹出层插件
		echo $this->Html->script('plugin/artDialog/artDialog.min.js');
		echo $this->Html->css('plugin/artDialog/skins/default.css');
        echo $this->Html->script('common.js');
        echo $this->Html->css('common.css');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
            扬州大学Examination Management后台
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
    <?php echo $this->Js->writeBuffer();?>

</body>
</html>
