<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>

<?php echo "<div class=\"form\">
<?php echo \$this->IForm->create('{$modelClass}');?>\n";?>

<?php echo '<h3>' ; ?>
	<?php
				echo "<?php 
					if (\$ave == 'A') {
					echo 'Ajout $singularHumanName';
					}elseif (\$ave == 'E') {;
					echo	'Modification $singularHumanName';
					} else {
					echo	'Consultation $singularHumanName';
					}
				?>";
		?>
<?php echo '</h3>' ; ?>		

<?php
		echo "\t<?php\n";
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\techo \$this->IForm->input_('{$field}');\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\techo \$this->IForm->input('{$assocName}');\n";
			}
		}
		echo "\t?>";
?>
<?php echo "
<?php if (\$ave !== 'V'){ echo \$this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>" ;
?>
<?php echo "
<?php \$liste_action = \$this->Html->link('" . $pluralHumanName ."', array('action' => 'index'),array('class'=>'noid')) ;
		\$this->RAction->register(\$liste_action);
?>";
echo '</div>';
?>