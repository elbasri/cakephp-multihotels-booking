<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>OffreDealsHotels <?=$title_for_layout?></title>	
	
	<link rel="stylesheet" href="<?=$this->Html->url('/css/screen.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?=$this->Html->url('/css/plugin.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?=$this->Html->url('/css/custom.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />		
	<link rel="stylesheet" href="<?=$this->Html->url('/css/imoz.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />		
	<link rel="stylesheet" href="<?=$this->Html->url('/css/redmond/jquery-ui-1.8.6.custom.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />
	
	<script  type="text/javascript" src="<?=$this->Html->url('/js/jquery/jquery.1.4.2.min.js')?>"></script>
	<script  type="text/javascript" src="<?=$this->Html->url('/js/plugin.js')?>"></script>
	<script  type="text/javascript" src="<?=$this->Html->url('/js/jquery/jquery-ui-1.8.9.custom.min.js')?>"></script>
	<script  type="text/javascript" src="<?=$this->Html->url('/js/slate/slate.js')?>"></script>
	<script  type="text/javascript" src="<?=$this->Html->url('/js/slate/slate.portlet.js')?>"></script>
	<?=$this->Html->script('ckeditor/ckeditor');?>
	<?=$this->Html->script('ckfinder/ckfinder');?>

	<?=$scripts_for_layout?>
</head>

<body>
	
<div id="wrapper" class="clearfix">
	
	<div id="top"><div id="header" style="height:40px !important">
			<h1><a href="#.html">Offre Deals Hotels</a></h1>
			<div id="info">
			<img src="<?=$this->Html->url('/images/icons/user.png')?>" /> Bienvenue <?=$this->Session->read('Auth.User.username')?>
			<?php echo $this->Html->link('Modifier Profil', array('controller' => 'users', 'action' => 'profile')); ?>
			<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
			
			</div> <!-- #info -->
		</div>
		<div id="nav">	
			<?=$this->element('menu')?>
		</div> <!-- #nav -->
	</div> <!-- #top -->
	
	<div id="content" class="xfluid">
		<?php echo $this->Session->flash();echo $this->Session->flash('auth'); ?>
		
		<div class="portlet x9" style="min-height: 600px;">
			<div id="index" class="portlet-content">
					<?php if(!empty($pageTitle) )  :?>
					<h1><?=$pageTitle?></h1>
					<?php endif;?>
				  <?=$content_for_layout?>
			</div> 
		</div> 
		<?=$this->RAction->printActions();?>
		<?=$this->element('search');?>
		 <?=$this->renderLayout('','dialog');?>	
	<div id="footer">
		
		<p>Copyright &copy; 2014, all rights reserved pour Offre Deals Hotels.</p><br> <strong><a href="http://www.drupalstudy.com/2014/04/offredealshotelscom-new-web-project.html" style="color:#000000">Realiser Par Drupal Study</a></strong>
		
	</div> <!-- #footer -->
	
</div> <!-- #wrapper -->





<script type="text/javascript" charset="utf-8">
$(function () 
{
	slate.init ();
	slate.portlet.init ();	
});
</script>
<?php echo $this->element('sql_dump'); ?>	
</body>

</html>
<!-- Localized -->