<h3>Login</h3>
<?php echo $this->Form->create('Palestra', array('action' => 'edit')) ?>
	<?php echo $this->Form->input('nome', array('placeholder' => 'digite seu Nome')) ?>
	<?php echo $this->Form->input('descricao', array('placeholder' => 'digite a descrição')) ?>
	<?php echo $this->Form->input('inicio', array('placeholder' => 'digite o início')) ?>
	<?php echo $this->Form->input('fim', array('placeholder' => 'digite o fim')) ?>
<?php echo $this->Form->submit('Enviar') ?>
<?php echo $this->Form->end() ?>



