<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Offre Deals Hotels | <?php echo $title_for_layout?></title>

<meta name="Description" content="<?php echo $metaDes ?>">
<meta name="keywords" content="<?php echo $metaKeys ?>">
<link href="<?php echo $this->Html->url('/css/front_style.css')?>" rel="stylesheet" type="text/css" />
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
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
<!--<script type="text/javascript" src="<?php  echo $this->Html->url('/js/swfobject_modified.js')?>"></script>--->


<!--[if IE 6]>
<link href="ie6.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="firebug-lite/build/firebug-lite.js"></script>
<![endif]-->

<script type="text/javascript">
	document.write('<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->Html->url('/css/front_invalid.css')?>" />');

function bookmarksite(title,url){
	window.external.AddFavorite(url, title);
	return true ;
}

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50458459-1', 'offredealshotels.com');
  ga('send', 'pageview');

</script>
</head>

<body>
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
