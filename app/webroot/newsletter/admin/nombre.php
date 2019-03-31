<?php

$id = $_GET['id'];
	if (empty($id)){
		echo("<p>Invalid ID</p>");
		exit;
	}
?>
<form method="post" action="wm-sendletter.php?id=<?php echo $id;?>">
<table>
<tr>
<td>A partir : </td><td><input type="text" name="de" id="de" /></td>
</tr>
<tr>
<td>Jusqu'a : </td><td><input type="text" name="a" id="a" /></td>
</tr>
<tr>
<td></td><td><input type="Submit" name="Submit" id="Submit" value="Valider" /></td>
</tr>

</table>
</form>