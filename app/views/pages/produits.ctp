<?php
$domain = "http://".$_SERVER['SERVER_NAME'];

function checkRemoteFile($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    // don't download content
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if(curl_exec($ch)!==FALSE)
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>
<div class="recruterdiv2" align="center" style="margin-left:20px">
<?php 
$calc=0;
//print_r($produits);
foreach($produits as $post): 
	
	$image=$domain = $post['Produit']['image'];
	/*if(substr($image, 0, 4)!=="http"){
	   if(substr($image, 0, 13)=="/app/webroot/")
			$image = substr($image, 13);
		   if(substr($image, 0, 1)=="/")
				$image = substr($image, 1);
			if (!file_exists($image))
				$image=$this->Html->url('/')."img/slider.jpg";
			else
				$image=$domain.$this->Html->url('/').$image;
		}
		else{
			$image=$domain = "http://".$_SERVER['SERVER_NAME']."/".$post['Produit']['image'];
			if(!checkRemoteFile($image))
				$image=$this->Html->url('/')."img/slider.jpg";
		}*/
?>
<div class="product" >
<!--image_non_disponible.jpeg-->
  <img class="product-img" src="<?php echo $image ;?>" alt="<?php echo $post['Produit']['titre'];?>"/>
  <div class="product-actions">
    <div class="product-info">
      <div class="sale-tile">
        <div class="sale">
		<div style="float: left; width 30%;padding:5px;"><img src="<?php echo $this->Html->url('/img/stars/star'.$post['Produit']['star'].'.png')?>" alt="stars" /></div>
		<div style="float: right; width 30%;padding:5px;"><?php echo round($post['Produit']['prix']/$this->Session->read('Devise.taux'))?>
							<?php echo $this->Front->devise()?></div>
		</div>
      </div>   
      <div class="info-block">  
        <div class="product-title"><a href="<?=$this->Html->url('/produit/').$post['Produit']['id'];?>"><?php echo substr($post['Produit']['titre'], 0, 50)?></a></div>
        <div class="product-description" ><?php echo substr($post['Produit']['desc'], 0, 100);?></div>
        <div class="product-sale"></div>
        <div class="product-prize"><?php //echo $post['Produit']['remise'];?> </div>
        <div class="button-buy"><a style="color:#ffffff" href="<?=$this->Html->url('/produit/').$post['Produit']['id'];?>">Commander</a></div>
        <div class="add"><a style="color:#ffffff" href="<?=$this->Html->url('/produit/').$post['Produit']['id'];?>#second">Info</a></div>
      </div>
    </div>
  </div>
    
</div>
<?php 
$calc=1;
endforeach; unset($post);


if($calc==0){
echo "<p style='font-size:30px;color:red'>Aucun Produit disponible pour le moment</p>";
}
?>
<div style="clear:both;"></div>

</div>
<?php if($this->params['paging']['Produit']['count']>10){?>
<div class="pagenavi">
				<ul id="hotel_paginate">
						<li>  <?php echo $this->Paginator->first('<<'); ?></li>
						<li>  <?php echo $this->Paginator->prev('<',array('model'=>'Produit')) ?></li>
						<?php echo $this->Paginator->numbers(array('tag'=>'li','separator'=>null,'model'=>'Produit')) ?>	
						<li>  <?php echo $this->Paginator->next('>',array('model'=>'Produit')) ?></li>
						<li>  <?php echo $this->Paginator->last('>>'); ?></li>
				</ul>			
			</div>
<?php } ?>