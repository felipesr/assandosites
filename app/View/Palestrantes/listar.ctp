<?php 

//var_dump($palestrantes); 
echo "<br />";

	foreach ($palestrantes AS $row) 
	{
	$nome_palestrante = $row['Palestrante']['nome'];
	$id_palestrante = $row['Palestrante']['id'];
	$slug = Inflector::slug(strtolower($nome_palestrante), '-');
	echo $this->Html->link($nome_palestrante, array('controller' => 'palestrantes', 'action' => 'view', 'nome' => $slug, 'id' => $id_palestrante));
	echo "<br /><br />";
	} 

?>