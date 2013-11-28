<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title><?php echo $title_for_layout ?></title>
<?php echo $this->Html->css('estilo') ?>
</head>
<body>
<div id="header">
	<?php echo $this->element('header') ?>
</div>

<div id="menu">
	<?php echo $this->element('menu') ?>
</div>

<div id="contents">
	<?php echo $this->fetch('content') ?>
</div>

<div id="footer">
	<?php echo $this->element('footer') ?>
</div>

</body>
</html>