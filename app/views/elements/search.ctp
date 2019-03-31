<?php  if (!empty($this->RAction->fields))  : ?>
		<div class="portlet x3" style="min-height: 200px;">
					<div class="portlet-header">
						<h4>Recherche</h4>
					</div>
					<div  class="portlet-content">
							<?=$this->RAction->printSearch();?>
					</div> 
		</div>
<?php endif;?>

