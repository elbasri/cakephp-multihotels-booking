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
<?php echo "<?php	\$columns =array();" ;
?>
<?php  foreach ($fields as $field):?>
<?php echo  "
	\$columns[] =array(
		'headerText' => \$this->Paginator->sort('{$field}') ,
	     'index'=>'/{$modelClass}/{$field}'
		);" ;
?>					
<?php endforeach;?>

<?php echo "?>" ;?>
<?php echo "
<? 
	\$this->ImozTable->rows = &\$rows;
	\$this->ImozTable->getTable(\$columns,'{$modelClass}','sortTable');
	// Register crud actions 
	\$this->RAction->register_default();
	//Register Search options
	\$searchFields =array();
	\$searchFields['name'] =array();
	\$this->RAction->register_search(\$searchFields,'/{$pluralVar}');
?>" ;
?>
