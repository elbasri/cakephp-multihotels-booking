<ul class="mega-container mega-grey">
	<li class="mega mega-current">				
<a href="<?=$this->Html->url('/hotels')?>" class="mega-link"> <img src="<?=$this->Html->url('/images/icons/building.png')?>"  border="0"/> Liste des hotels</a>			
	</li>
	
	<li class="mega mega-current">				
					<a href="javascript:;" class="mega-tab">
						<img src="<?=$this->Html->url('/images/icons/wrench.png')?>"  border="0"/> Parametrage Général
					</a>
					<div class="mega-content mega-menu ">
						<ul>
							<li><a href="<?=$this->Html->url('/pays')?>">Pays</a></li>
							<li><a href="<?=$this->Html->url('/villes')?>">Villes</a></li>			
							<li><a href="<?=$this->Html->url('/devises')?>">Devises</a></li>
							<li><a href="<?=$this->Html->url('/langues')?>">Langues</a></li>
							<li><a href="<?=$this->Html->url('/carte_credits')?>">Mode de paiement</a></li>
						</ul>
					</div>						
	</li>
				
				
	<li class="mega mega-current">				
					<a href="javascript:;" class="mega-tab">
						 <img src="<?=$this->Html->url('/images/icons/box.png')?>"  border="0"/>Parametrage Chambres
					</a>
					<div class="mega-content mega-menu ">
						<ul>
							<li><a href="<?=$this->Html->url('/chambres')?>">Types  Chambres</a></li>
							<li><a href="<?=$this->Html->url('/cservices')?>">Services Chambres</a></li>
							<li><a href="<?=$this->Html->url('/cservice_types')?>">Types Services</a></li>			
						</ul>
					</div>						
	</li>			
	<li class="mega mega-current">				
					<a href="javascript:;" class="mega-tab">
						<img src="<?=$this->Html->url('/images/icons/building_edit.png')?>"  border="0"/> Parametrage Hotels
					</a>
					<div class="mega-content mega-menu ">
						<ul>
							<li><a href="<?=$this->Html->url('/hotel_types')?>">Classification</a></li>
							<li>--------------------</li>
							<li><a href="<?=$this->Html->url('/extras')?>">Extras</a></li>
							<li><a href="<?=$this->Html->url('/extra_types')?>">Type Extras</a></li>
							<li>--------------------</li>
							<li><a href="<?=$this->Html->url('/hservices')?>">Service Hotel</a></li>
							<li><a href="<?=$this->Html->url('/hservice_types')?>">Type de services</a></li>			
							<li>--------------------</li>
							<li><a href="<?=$this->Html->url('/elefts')?>">Extra left Values</a></li>
							<li><a href="<?=$this->Html->url('/erights')?>">Extra right Values</a></li>
						</ul>
					</div>						
	</li>
	
	
				

</ul>


