<?php if($this->Session->read('Auth.User.username')=="admin"){?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title><?=$title_for_layout?></title>	
	
	<link rel="stylesheet" href="<?=$this->Html->url('/css/screen.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?=$this->Html->url('/css/plugin.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?=$this->Html->url('/css/custom.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />		
	<link rel="stylesheet" href="<?=$this->Html->url('/css/imoz.css')?>" type="text/css" media="screen" title="no title" charset="utf-8" />		
	<link href="<?php echo $this->Html->url('/css/ui-luxia/jquery-ui-1.8.16.custom.css')?>" rel="stylesheet" type="text/css" />

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
<?php $domain = "http://".$_SERVER['SERVER_NAME'].$this->Html->url('/');?>
<script type="text/javascript">//<![CDATA[
function openFileBrowserSliderPhoto(){
var url = '<?php echo $domain;?>js/ckfinder/ckfinder.html?type=Images&action=js&func=SetFileFieldSliderPhoto';
var sOptions = 'toolbar=no,status=no,resizable=yes,dependent=yes,scrollbars=yes,width=640,height=480';
var oWindow = window.open(url, 'ckfinder', sOptions);
}
function SetFileFieldSliderPhoto(fileUrl){
document.getElementById('SliderPhoto').value = fileUrl;
}
function openFileBrowserSliderFile(){
var url = '<?php echo $domain;?>js/ckfinder/ckfinder.html?type=Files&action=js&func=SetFileFieldSliderFile';
var sOptions = 'toolbar=no,status=no,resizable=yes,dependent=yes,scrollbars=yes,width=640,height=480';
var oWindow = window.open(url, 'ckfinder', sOptions);
}
function SetFileFieldSliderFile(fileUrl){
document.getElementById('SliderFile').value = fileUrl;

}
//]]>
</script>
<div id="wrapper" class="clearfix">
	
	<div id="top"><div id="header" style="height:80px !important">
			<h1><a href="#.html">Booking Pro Script [French Version] By VotreCodeur.com</a></h1>
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
		
		<p align="center" style="color:#000;margin:5px"><strong> Copyright &copy; 2014 - 2017, all rights reserved | Booking system by <a href="http://www.nacer.ma">Nacer</a></strong></p>
		
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


<?php }else{?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout?></title>

<meta name="Description" content="<?php echo $metaDes ?>">
<meta name="keywords" content="<?php echo $metaKeys ?>">
<link href="<?php echo $this->Html->url('/css/front_style.css')?>" rel="stylesheet" type="text/css" /> 
<link href="<?php echo $this->Html->url('/css/stylo.css')?>" rel="stylesheet" type="text/css" /> 
<link href="<?php echo $this->Html->url('/css/nivo-slider.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->Html->url('/css/ui-luxia/jquery-ui-1.8.16.custom.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->Html->url('/css/reservation.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->Html->url('/css/colorbox/colorbox.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->Html->url('/css/slider_event.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->Html->url('/css/jquery.lightbox-0.5.css')?>" rel="stylesheet" type="text/css" />
<?php echo $html->css('prettyPhoto'); ?>
<?php echo $html->css('contact-colorbox.css'); ?>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery-1.8.3.min.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery.lightbox-0.5.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery-ui-1.8.16.custom.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery.select-chain.js')?>"></script>

<script type="text/javascript" src="<?php echo $this->Html->url('/js/tabs.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery.galleriffic.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery.opacityrollover.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery.nivo.slider.js')?>"></script> 

<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery.colorbox-min.js')?>"></script>

<script type="text/javascript" src="<?php  echo $this->Html->url('/js/jquery.pikachoose.js')?>"></script>
<script type="text/javascript" src="<?php  echo $this->Html->url('/js/jquery.prettyPhoto.js')?>"></script>
<script type="text/javascript" src="<?php  echo $this->Html->url('/js/jquery.ui.core.js')?>"></script>
<script type="text/javascript" src="<?php  echo $this->Html->url('/js/jquery.ui.widget.js')?>"></script>
<script type="text/javascript" src="<?php  echo $this->Html->url('/js/jquery.ui.datepicker.js')?>"></script>
<script type="text/javascript" src="<?php  echo $this->Html->url('/js/jquery.form.js')?>"></script>
<!--<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="<?php  echo $this->Html->url('/js/swfobject_modified.js')?>"></script>--->



</head>

<body class="home">
<script type="text/javascript">//<![CDATA[
function openFileBrowserSliderPhoto(){
var url = '<?php echo $line;?>js/ckfinder/ckfinder.html?type=Images&action=js&func=SetFileFieldSliderPhoto';
var sOptions = 'toolbar=no,status=no,resizable=yes,dependent=yes,scrollbars=yes,width=640,height=480';
var oWindow = window.open(url, 'ckfinder', sOptions);
}
function SetFileFieldSliderPhoto(fileUrl){
//var pos = fileUrl.toLowerCase().indexOf('webroot/img/finderimages');
//fileUrl = fileUrl.substr(pos + 21);
//var lien=<?php echo $line;?>+fileUrl
document.getElementById('SliderPhoto').value = fileUrl;
}
//]]>
</script>
<div class="wrapout">
	<div class="wrapBg">
        <div class="wrapper">
           <?php echo $this->element('front_header')?>
            <div class="content">
            	<div class="col-left">
            
					<?php  if ($layout_type == 'left' or $layout_type == 'right') {
							echo $this->element('front_left') ;}
					?>
				</div><!--end col-left-->
 
                <div class="col-right">
							<?php echo $content_for_layout ?>
			    </div><!--end col-right-->
                
            </div><!--end content-->
            
        </div>
    </div>
</div><!--end wrapout-->

<!-- CSS CHANGEMENT de layout   -->
<?php if ($layout_type == 'right') :?>
		<style>
		.col-left {float: right !important;}
		.col-right {float: left !important;}
		</style>
		
<?php elseif ($layout_type == 'full'):?>
	<style>
		.col-left {width: 0px !important;}
		.col-right {width: 100% ;}
		</style>
		
<?php endif;?>

<?php echo $this->element('front_footer')?>
<?php //echo $this->element('sql_dump'); ?>	

</body>
</html>

<?php } ?>