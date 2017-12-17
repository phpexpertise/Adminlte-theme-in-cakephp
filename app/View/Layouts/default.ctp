<?php
/**
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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP with Angular JS 2');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('css');
		echo $this->Html->css('/bootstrap/css/bootstrap.min');
		echo $this->Html->css('app');
		?>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <?php 
		echo $this->Html->css('/dist/css/AdminLTE.min');
		echo $this->Html->css('/dist/css/skins/_all-skins.min');
		echo $this->Html->css('/plugins/iCheck/flat/blue');
		echo $this->Html->css('/plugins/morris/morris');
		echo $this->Html->css('/plugins/jvectormap/jquery-jvectormap-1.2.2');
		echo $this->Html->css('/plugins/datepicker/datepicker3');
		echo $this->Html->css('/plugins/daterangepicker/daterangepicker');
		echo $this->Html->css('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min');		
	?>
</head>
<body class="skin-blue sidebar-mini wysihtml5-supported">
	<div class="wrapper">
		<!-- Top Header start -->
		<?php echo $this->Element('header');?>
		<!-- Top Header end -->
		<!-- Left Sidebar start -->
		<?php echo $this->Element('left_nav'); ?> 
		<!-- Left Sidebar end -->
		<!-- Page content -->
		<div class="content-wrapper" style="min-height: 916px;">
			<?php echo $this->fetch('content'); ?>
		</div>
		<!-- Page content end -->
		<!-- Footer start -->
		<?php echo $this->Element('footer');?>
		<!-- Footer end -->
	</div>
  <!-- Wrapper close --> 
  <?php 
	echo $this->fetch('script');
	echo $this->Html->script('/plugins/jQuery/jquery-2.2.3.min');
	echo $this->Html->script('jquery-ui.min');
	echo $this->Html->script('raphael-min');
	echo $this->Html->script('moment.min');
	echo $this->Html->script('/bootstrap/js/bootstrap.min');		
	echo $this->Html->script('/plugins/morris/morris.min');		
	echo $this->Html->script('/plugins/sparkline/jquery.sparkline.min');		
	echo $this->Html->script('/plugins/jvectormap/jquery-jvectormap-1.2.2.min');		
	echo $this->Html->script('/plugins/jvectormap/jquery-jvectormap-world-mill-en');		
	echo $this->Html->script('/plugins/knob/jquery.knob');		
	echo $this->Html->script('/plugins/daterangepicker/daterangepicker');		
	echo $this->Html->script('/plugins/datepicker/bootstrap-datepicker');		
	echo $this->Html->script('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min');		
	echo $this->Html->script('/plugins/slimScroll/jquery.slimscroll.min');		
	echo $this->Html->script('/plugins/fastclick/fastclick');		
	echo $this->Html->script('/dist/js/app.min');		
	echo $this->Html->script('/dist/js/pages/dashboard');		
	echo $this->Html->script('/dist/js/demo');		
  ?>
</body>
</html>