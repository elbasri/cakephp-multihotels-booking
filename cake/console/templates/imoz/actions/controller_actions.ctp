<?php
/**
 * Bake Template for Controller action generation.
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
 * @subpackage    cake.console.libs.template.objects
 * @since         CakePHP(tm) v 1.3
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['<?php echo $currentModelName ?>']['name'])) {
			$conditions['<?php echo $currentModelName ?>.name LIKE'] = '%'.$this->data['<?php echo $currentModelName ?>']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		<?php
				foreach (array('belongsTo', 'hasAndBelongsToMany') as $assoc):
					foreach ($modelObj->{$assoc} as $associationName => $relation):
						if (!empty($associationName)):
							$otherModelName = $this->_modelName($associationName);
							$otherPluralName = $this->_pluralName($associationName);
							echo "\t\t\${$otherPluralName} = \$this->{$currentModelName}->{$otherModelName}->find('list');\n";
							$compact[] = "'{$otherPluralName}'";
						endif;
					endforeach;
				endforeach;
				if (!empty($compact)):
					echo "\t\t\$this->set(compact(".join(', ', $compact)."));\n";
				endif;
		?>
	}	

	function <?php echo $admin ?>view($id = null) {
		parent::view($id);
	}

<?php $compact = array(); ?>
	function <?php echo $admin ?>add($model_id=null) {
		parent::add($model_id);
	}

<?php $compact = array(); ?>
	function <?php echo $admin; ?>edit($id = null) {
		parent::add($id);
	}	
	
	
