	 <?php echo $html->css('Proweb-css-search.css'); ?>
<ul class="mega-container mega-grey">
	<li class="mega mega-current">				
			<a href="javascript:;" class="mega-tab"> <img src="<?=$this->Html->url('/images/icons/building.png')?>"  border="0"/>Hotels</a>	
			<div class="mega-content mega-menu ">
				<ul>
					<li><a href="<?=$this->Html->url('/hotels')?>">Liste des hotels</a></li>
					<li><a href="<?=$this->Html->url('/promotions')?>">Promotions</a></li>			
					<li><a href="<?=$this->Html->url('/reservations')?>">Réservations</a></li>
				</ul>
			</div>					
	</li>
	<li class="mega mega-current">				
			<a href="javascript:;" class="mega-tab"> <img src="<?=$this->Html->url('/images/icons/building.png')?>"  border="0"/>Produits</a>	
			<div class="mega-content mega-menu ">
				<ul>
					<li><a href="<?=$this->Html->url('/produits')?>">Liste des produits</a></li>
					<li><a href="<?=$this->Html->url('/achats')?>">Achats</a></li>
				</ul>
			</div>					
	</li>
	<li class="mega mega-current">				
			<a href="javascript:;" class="mega-tab"> <img src="<?=$this->Html->url('/images/icons/building.png')?>"  border="0"/>Resto et sorties</a>	
			<div class="mega-content mega-menu ">
				<ul>
					<li><a href="<?=$this->Html->url('/restos')?>">Liste des restos</a></li>
					<li><a href="<?=$this->Html->url('/reservationrestos')?>">Réservations</a></li>
				</ul>
			</div>					
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
					<!--<li><a href="<?=$this->Html->url('/langues')?>">Langues</a></li>-->
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
							<li>--------------------</li>
							<li><a href="<?=$this->Html->url('/hotels/prix')?>">Mettre a jour les tarifs(a partir)</a></li>
						</ul>
					</div>						
	</li>
	
	<li class="mega mega-current">				
					<a href="javascript:;" class="mega-tab">
						<img src="<?=$this->Html->url('/images/icons/building_edit.png')?>"  border="0"/> CMS
					</a>
					<div class="mega-content mega-menu ">
						<ul>
							<li><a href="<?=$this->Html->url('/featureds')?>">Coup de coeur</a></li>
							<li><a href="<?=$this->Html->url('/banners')?>">Bannieres</a></li>
							<!--<li><a href="<?=$this->Html->url('/hpromotions')?>">Hotel en promotion</a></li>-->
							<li><a href="<?=$this->Html->url('/sliders')?>">Sliders</a></li>
							<li>--------------------</li>
							<li><a href="<?=$this->Html->url('/guides')?>">Guide maroc</a></li>
							<li>--------------------</li>
							<li><a href="<?=$this->Html->url('/activites')?>">Liste des activités</a></li>
							<li><a href="<?=$this->Html->url('/activite_categories')?>">Catégories des activites</a></li>
							<li>--------------------</li>
							<li><a href="<?=$this->Html->url('/contents')?>">Blog</a></li>
						</ul>
					</div>
	</li>
	
</ul>


