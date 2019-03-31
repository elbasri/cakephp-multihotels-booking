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
		   <div style="clear:both"></div>
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
