<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com  reservation</title>
<link href="<?php echo $this->Html->url('/css/front_style.css')?>" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery-1.5.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/blur.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/tabs.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery.galleriffic.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery.opacityrollover.js')?>"></script>
<!--[if IE 6]>
<link href="ie6.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="firebug-lite/build/firebug-lite.js"></script>
<![endif]-->

<script type="text/javascript"><!--
document.write('<link rel="stylesheet" type="text/css" media="screen" href="invalid.css" />');
--></script>

</head>

<body>
<div class="wrapout">
	<div class="wrapBg">
        <div class="wrapper">
        
           <?php echo $this->element('front_header')?>
            
            <div class="content">
            	<div class="col-left">
					<?php echo $this->element('front_left')?>
			   </div><!--end col-left-->
                
                <div class="col-right">
							<?php echo $content_for_layout ?>
                 </div><!--end col-right-->
                
            </div><!--end content-->
            
        </div>
    </div>
</div><!--end wrapout-->

<?php echo $this->element('front_footer')?>
</body>
</html>
