<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Booking system by Nacer -  <?=$title_for_layout?></title>	
	
	<link rel="stylesheet" href="<?=$this->Html->url('/css/screen.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?=$this->Html->url('/css/plugin.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?=$this->Html->url('/css/custom.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />		
	<link rel="stylesheet" href="<?=$this->Html->url('/css/imoz.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />		
	<link href="<?php echo $this->Html->url('/css/ui-luxia/jquery-ui-1.8.16.custom.css')?>" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery-1-6.min.js')?>"></script>
	<script  type="text/javascript" src="<?=$this->Html->url('/js/jquery-ui-1.8.11.custom.min.js')?>"></script>
	<script  type="text/javascript" src="<?=$this->Html->url('/js/plugin.js')?>"></script>
	<script  type="text/javascript" src="<?=$this->Html->url('/js/slate/slate.js')?>"></script>
	<script  type="text/javascript" src="<?=$this->Html->url('/js/slate/slate.portlet.js')?>"></script>
	<script  type="text/javascript" src="<?=$this->Html->url('/js/jquery/jquery-ui-1.8.9.custom.min.js')?>"></script>

	<?=$scripts_for_layout?>
<style>
.e0{
	background-color : #CCCCCC ;
}
.e1{
	background-color : #90CC55 ;
}
.e2{
	background-color : #E13535 ;
}
.e3{
	background-color : orange ;
}
.e4{
	background-color : #778378 ;
}
</style>
</head>

<body>
	
<div id="wrapper" class="clearfix">
	
	<div id="top">
		<div id="header" style="height:80px !important">
		<h1>Booking system by <a href="http://www.nacer.ma">Nacer</a> -</h1>
			<div id="info">
			<img src="<?=$this->Html->url('/images/icons/user.png')?>" /> Bienvenue <?=$this->Session->read('Auth.Hotel.name')?>,
			<?php echo $this->Html->link('Modifier Profil', array('controller' => 'hotel', 'action' => 'profile')); ?>   
			<?php echo $this->Html->link('Logout', array('controller' => 'hotel', 'action' => 'logout')); ?>
			</div> 
		</div>
		<div id="nav">	
			<?=$this->element('menu_hotel')?>
			
		</div> 
	</div> 
	
	<div id="content" class="xfluid">
		<?php echo $this->Session->flash();echo $this->Session->flash('auth'); ?>
		<style>
			.form label { 
				width : 120px !important;
			}
		</style>
		<div class="portlet x12" style="min-height: 600px;">
			<div id="index" class="portlet-content">
			<h1><?php if(isset($title)) echo $title?></h1>
				  <?=$content_for_layout?>
			</div> 
		</div> 
	

		
		
		
	
	<div id="footer">
		
		<p>Copyright &copy; 2014, all rights reserved | Booking system by <a href="http://www.nacer.ma">Nacer</a></p>
		
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