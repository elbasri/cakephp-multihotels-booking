<ul class="mega-container mega-grey">
	<li class="mega mega-current">				
					<a href="javascript:;" class="mega-tab">
						Inventaire
					</a>
					<div class="mega-content mega-menu ">
						<!--<ul>
							<li><?=$this->Html->link('Planning',array('controller'=>'hotel','action'=>'planning'))?></li>
							<li><?=$this->Html->link('Tarifs',array('controller'=>'hotel','action'=>'tarif'))?></li>
							<li><?=$this->Html->link('Minnimum Stay',array('controller'=>'hotel','action'=>'minstay'))?></li>
						</ul>-->
	<ul>
		<li><?=$this->Html->link('Planning',array('controller'=>'hotel','action'=>'inventaire' ,'dispo' , date('Y') , date('m') ))?></li>
		<li><?=$this->Html->link('Tarifs',array('controller'=>'hotel','action'=>'inventaire' ,'tarif' , date('Y') , date('m') ))?></li>
		<li><?=$this->Html->link('Minnimum Stay',array('controller'=>'hotel','action'=>'inventaire' ,'min_stay' , date('Y') , date('m') ))?></li>
	</ul>	
					</div>						
	</li>
</ul>

<ul class="mega-container mega-grey">
	<li class="mega mega-current">				
		<a href="javascript:;" class="mega-tab">
			Contenu
		</a>
		<div class="mega-content mega-menu ">
			<ul>
				<li><?=$this->Html->link('Informations generales',array('controller'=>'hotel','action'=>'info_general'))?></li>
				<li><?=$this->Html->link('Description Hotel',array('controller'=>'hotel','action'=>'description'))?></li>
				<li><?=$this->Html->link('Description Chambres',array('controller'=>'hotel','action'=>'desc_chambre'))?></li>
				<li><?=$this->Html->link('Services Hotel',array('controller'=>'hotel','action'=>'hservice'))?></li>
				<li><?=$this->Html->link('Services de chambre',array('controller'=>'hotel','action'=>'cservice'))?></li>
				<li><?=$this->Html->link('Extras',array('controller'=>'hotel','action'=>'extra'))?></li>
				<li><?=$this->Html->link('Gestion des photos',array('controller'=>'hotel','action'=>'photos'))?></li>
				
			</ul>
		</div>						
	</li>
</ul>

