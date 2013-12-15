<?php 

$nome_palestrante = $palestrante['Palestrante']['nome'];
$descricao_palestrante = $palestrante['Palestrante']['descricao'];
$url_palestrante = $palestrante['Palestrante']['url'];

echo "<strong>".$nome_palestrante."</strong><br />";
echo $descricao_palestrante."<br />";
echo $this->Html->link($url_palestrante, $url_palestrante, array('target' => '_blank'))."<br />";

?>
