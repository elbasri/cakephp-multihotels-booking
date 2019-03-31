<div class="chercheHotelBox">
<?php echo $this->Form->create('Hotel');?>
	<div class="chercheHotelwrap">
		<h2 class="srchTitle">recherche hotels</h2>
		<div class="searchIndent">
		
			<div class="villePays">
				<span>Pays</span>
				<?php echo $this->Form->input('pay_id',array('empty'=>'Choisir Pays','div'=>false,'label'=>false))?>
			</div><!--end villePays-->
		
			<div class="villePays">
				<span>Ville</span>
				<?php echo $this->Form->input('ville_id',array('empty'=>'Choisir Ville','div'=>false,'label'=>false))?>
			</div><!--end villePays-->
			
			<div class="datesBox">
			
				<div class="arrive">
					<span class="titleArive">Arrivé le :</span>
					<input type="text" class="arriveInpt" value="arrivé le" />
					<span class="calendar"><a href="#"><img src="<?php echo $this->Html->url('/img/calendar.gif')?>" alt="date" /></a></span>
				</div><!--end arrive-->
				
				<div class="arrive depart">
					<span class="titleArive">Départ le :</span>
					<input type="text" class="arriveInpt" value="arrivé le" />
					<span class="calendar"><a href="#"><img src="<?php echo $this->Html->url('/img/calendar.gif')?>" alt="date" /></a></span>
				</div><!--end arrive-->             
			</div><!--end datesBox-->
			
			<div class="othersBox">
				<div class="chambres">
					<span>Chambres</span>
					
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div><!--end chambres-->
				
				
				<div class="chambres adultes">
					<span>ADdultes</span>
					
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div><!--end adultes-->
				
				<div class="chambres Enfants">
					<span>Enfants</span>
					
					<select>
						<option>0</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div><!--end adultes-->
				
			</div><!--end othersBox-->
			<div class="clear"></div>
			<div class="FindBox">
				<input type="submit" class="srchhotBtn" value="" />
				<a class="optionsBtn" href="#">options</a>
			</div><!--end FindBox-->
			
		</div><!--end searchIndent-->
	</div><!--end chercheHotelwrap-->

<?php echo $this->Form->end() ?>
</div><!--end chercheHotelBox-->
                    
<div class="newsletterBox">
	<div class="newslWrap">
		<p>Inscrivez-vous a la newsletter d'Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com  et recevez nos offres et promotions</p>
		<div class="newsl-form">
			<input type="text" value="Inscrivez-vous" class="newl-t autoEmpty" />
			<input type="submit" class="newl-btn" value="" />
		</div><!--end newsl-form-->
	</div><!--end newslWrap-->
</div><!--end newsletterBox-->
                    
<div class="bannerBloc">
	<a href="#"><img src="<?php echo $this->Html->url('/img/banner1.jpg')?>" alt="banner1" /></a>
</div><!--end bannerBloc-->

<div class="bannerBloc">
	<a href="#"><img src="<?php echo $this->Html->url('/img/bannerDiscount.jpg')?>" alt="bannerDiscount" /></a>
</div><!--end bannerBloc-->
                    
               