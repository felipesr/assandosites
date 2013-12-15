<h3>Login</h3>
<?php echo $this->Form->create('Palestrante', array('action' => 'inscrever')) ?>
	<?php echo $this->Form->input('nome', array('placeholder' => 'digite seu Nome')) ?>
	<?php echo $this->Form->input('descricao', array('placeholder' => 'digite a descrição')) ?>
	<?php echo $this->Form->input('url', array('placeholder' => 'digite a URL')) ?>
<?php echo $this->Form->submit('Enviar') ?>
<?php echo $this->Form->end() ?>



