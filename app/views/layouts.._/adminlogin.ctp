<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php echo $this->Html->charset(); ?>
	<title>Offre Deals Hotels - PROFESSIONAL ACCESS</title>	
		<?php
		echo $this->Html->meta('icon');
	  echo $this->Html->css('screen');
		echo $this->Html->css('plugin');
		echo $this->Html->css('custom');
		echo $this->Html->css('login');
		echo $scripts_for_layout;
	?>
</head>
<body>
<div id="login">
	<h1 id="title"><a href="">Offre Deals Hotels</a></h1>
	<div id="login-body" class="clearfix"> 
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>
</div> <!-- #login -->

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>