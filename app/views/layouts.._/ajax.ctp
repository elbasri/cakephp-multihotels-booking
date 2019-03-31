<?php if (!$isPost) :?>
	<?=$this->element('searchDialog');?>
	<div id="table_actions">
		<?=$this->RAction->toscreen()?>
	</div>
<?php endif?>
<?=$content_for_layout?>