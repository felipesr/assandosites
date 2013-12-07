<h3>Login</h3>
<?php echo $this->Form->create('Inscricao', array('action' => 'inscrever')) ?>
	<?php echo $this->Form->input('nome', array('placeholder' => 'digite seu Nome')) ?>
	<?php echo $this->Form->input('email', array('type' => 'email', 'placeholder' => 'digite seu e-mail')) ?>
	<?php echo $this->Form->input('telefone', array('placeholder' => 'digite seu Telefone')) ?>
	<?php echo $this->Form->input('endereco', array('label' => 'Endereco', 'placeholder' => 'digite seu Endereco')) ?>
<?php echo $this->Form->submit('Enviar') ?>
<?php echo $this->Form->end() ?>



