<?php foreach($contents as $post): ?>
<div style="margin:10px;padding:10px; border: 1px solid #999999;">
<h1><a style="color:#000" href="<?=$this->Html->url('/pages/content/').$post['Content']['id']?>"><?php echo $post['Content']['titre'];?></a></h1>
<div><?php
$centent = strip_tags($post['Content']['content'], '<br>');
$centent = substr($centent, 0, 300);
 echo $centent;?>
</div>
<div style="clear:both"></div>
<div style="width:30%;float:right;text-align:right;">
<strong>Date de publication: <?php echo $post['Content']['created'];?></strong><br/>
<a href="<?=$this->Html->url('/pages/content/').$post['Content']['id']?>"><button class="button rose" style="width:95%">Lire la suite</button></a>
</div>
<div style="clear:both"></div>
</div>
<?php endforeach; unset($post); ?>

<?php if($this->params['paging']['Content']['count']>10){?>
<div class="pagenavi">
				<ul id="hotel_paginate">
						<li>  <?php echo $this->Paginator->first('<<'); ?></li>
						<li>  <?php echo $this->Paginator->prev('<',array('model'=>'Content')) ?></li>
						<?php echo $this->Paginator->numbers(array('tag'=>'li','separator'=>null,'model'=>'Content')) ?>	
						<li>  <?php echo $this->Paginator->next('>',array('model'=>'Content')) ?></li>
						<li>  <?php echo $this->Paginator->last('>>'); ?></li>
				</ul>			
			</div>
<?php }?>