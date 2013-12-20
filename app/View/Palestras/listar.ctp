<?php 

//var_dump($palestras); 
echo "<br />";

	foreach ($palestras AS $row) 
	{
	echo "<strong>".$row['Palestra']['nome']."</strong><br />";
	echo "<em>das ".$row['Palestra']['inicio']. " &agrave;s ".$row['Palestra']['fim']."</em><br />";
	echo $row['Palestra']['descricao']."<br /><br />";
	} 

?>