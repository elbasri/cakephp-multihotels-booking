<?php 
$actions =$this->RAction->default_actions;
	if (!empty($actions))  : ?>
	<div class="portlet x3" style="min-height: 200px;">
				<div class="portlet-header">
					<h4>Actions</h4>
				</div>
				
				<div class="portlet-content">
					<ul id="actions">
							<?php   foreach($actions as $action) : ?>
										<li><?=$action?></li>
							<?php    endforeach;?>
					</ul>
				</div> 
	</div>
<?php endif;?>