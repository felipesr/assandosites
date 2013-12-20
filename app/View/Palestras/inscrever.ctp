<h3>Login</h3>
<?php echo $this->Form->create('Palestra', array('action' => 'inscrever')) ?>
	<?php echo $this->Form->input('nome', array('placeholder' => 'digite seu Nome')) ?>
 	<?php echo $this->Form->input('palestrante_id', array('placeholder' => 'Escolha um palestrante')) ?>
	<?php echo $this->Form->input('descricao', array('placeholder' => 'digite a descrição')) ?>
	<?php echo $this->Form->input('inicio', array('placeholder' => 'digite o início')) ?>
	<?php echo $this->Form->input('fim', array('placeholder' => 'digite o fim')) ?>

	<?php	//var_dump($selecao);
			//$selecao111 = array('M'=>'Masculino','F'=>'Feminino');
			//echo $this->Form->select('Palestra.palestrante_id', $selecao111); 
			//echo $this->Form->select('Palestra.palestrante_id', $selecao);
	?>

	<?php echo $this->Form->input('palestrante_id',
		array(
			'type'=>'select',
			'options' => array(
				'M'=>'Joao','F'=>'Marcio'
				),
			'label' =>'Selecione o palestrante'
			)
		); ?>

	<?php echo $this->Form->input('palestrante_id',
		array(
			'type'=>'select',
			'options' => $selecao,
			'label' =>'Selecione o palestrante'
			)
		); ?>

<?php echo $this->Form->submit('Enviar') ?>
<?php echo $this->Form->end() ?>



