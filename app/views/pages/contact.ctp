 <?php echo $html->css('Proweb-css-contact.css'); ?>

<?php 

 echo $this->Session->flash();
echo "<br/>";
?>
<div id="contenu_contact">
			<div class="left-contact">
					<?php
					$your_email ='web@votrecodeur.com';
					if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];
	
	$to = $your_email;
		$subject="Message a partir Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com ";
		$from = $your_email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "Mr  $name laisse ce message:\n".
		"Nom: $name\n".
		"Tel: $tel \n".
		"Email: $visitor_email \n".
		"Message: \n ".
		"$user_message\n".
		"IP: $ip\n";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $visitor_email \r\n";
		
		mail($to, $subject, $body,$headers);
		echo "Merci ! Votre message a bien été envoyé, nous vous enverrons une réponse dans les plus brefs délais.";
}
					/*echo $this->Form->create('Contact',array('id'=>'contact_form','url' => array('controller' => 'pages', 'action' => 'contact')));
						  echo $this->Form->input('nom',array('id'=>'nom','class'=>'validate[required,custom[onlyLetter]]')) ;
						  echo $this->Form->input('prenom',array('id'=>'prenom')) ;
						  echo $this->Form->input('email',array('id'=>'email','class'=>'validate[required,custom[email]]')) ;
						  echo '<div class="msg_commentaire">';
							  echo $this->Form->input('sujet',array('id'=>'sujet','div'=>'sujectid')) ;
							  echo $this->Form->input('message',array('id'=>'message','type'=>'textarea')) ;
						  echo "</div>";
						  
						  echo $this->Form->end('Envoyer') ;*/
					?>
					
<fieldset><legend><strong>Contacter nous</strong></legend>
<form method="POST" name="contact_form" 
action="http://votrecodeur.com/pages/contact"> 

<img alt="" src="../img/contact.jpg" style="float:right; height:100px;"/>
<table >

<tr>
<td width="30%"><label for='name'><strong>Nom </strong></label></td>
<td width="70%"><input type="text" name="name"></td>
</tr>
<tr>
<td><label for='tel'><strong>Telephone: </strong></label></td>
<td><input type="text" name="tel"></td>
</tr>

<tr>
<td><label for='email'><strong>Email: </strong></label></td>
<td><input type="text" name="email" td>
</tr>
<tr>
<td><label for='message'><strong>Message:</strong></label> </td>
<td><textarea name="message" rows=8 cols=30><?php echo htmlentities($user_message) ?></textarea></td>
</tr>
<tr><td><input type="submit" value="Envoyer" name='submit'></td></tr>
</table>
<td><label for='email'></label></td>

</form>
</fieldset>

		</div>

	<div id="info_groupe">
			<h3>Contactez-nous</h3>
			<hr>
		

			<span class="infos_span_groupe">
				<img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/phone_groupe.png'); ?>"></span><span class="infos_texte"><?php echo $tel1;?>   </span>
				<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/phone_groupe.png'); ?>"></span><span class="infos_texte"><?php echo $tel2;?></span>
                <span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/mail_groupe.png'); ?>"></span><span class="infos_texte"><?php echo $email;?></span>
			<!--<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="http://votrecodeur.com/img/skype_groupe.png"></span><span class="infos_texte">Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com </span>
			<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="http://votrecodeur.com/img/facebook_groupe.png"></span><span class="infos_texte">Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com   </span>
			<a class="validation" href="#valideration_text"  title="confirmation">fffsssssss</a>-->
	</div>

</div>
<div style="display:none;">
	<div id="valideration_text" class="resultat">
	<h4 class="msg"><strong> Merci !</strong><br/> Votre message a bien été envoyé, nous vous enverrons une réponse dans les plus brefs délais.</h4>
	</div>
</div>
		
		
<script type="text/javascript" language="javascript">
$(document).ready(function($) {
	$(".validation").colorbox({inline:true, innerWidth:300, innerHeight:75});	
    //$('#contact_form').clearForm();

    $("#nom").val("");
    $("#prenom").val("");
    $("#email").val("");
    $("#sujet").val("");
    $("#message").val("");
	});
</script>