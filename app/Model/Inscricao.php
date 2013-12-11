<?php
    class Inscricao extends AppModel {
        public $useTable = 'inscricoes';
        public $order = array('email' => 'ASC');
        public $displayField = 'nome';

		public $validate = array(

			'nome' => array(
				'rule' => 'notEmpty', // N�o vazio
				'message' => 'Preencha o nome'
			),

			'email' => array(
				array(
					'rule' => 'notEmpty', // N�o vazio
					'message' => 'Preencha o e-mail'
				), 
				array(
					'rule' => 'email', 
					'message' => 'Preencha um e-mail com formato v�lido'
				),
				array(
					'rule' => 'isUnique', // �nico
					'message' => 'Este e-mail j� est� em uso'
				)
			),

			'telefone' => array(
				array(
					'rule' => 'notEmpty', // N�o vazio
					'message' => 'Preencha o telefone'
				), 
				array(
					'rule' => 'numeric', 
					'message' => 'Preencha apenas n�meros'
				)
			),

			'endereco' => array(
				array(
					'rule' => 'notEmpty', // N�o vazio
					'message' => 'Preencha o telefone'
				), 
				array(
					'rule' => array('minLength', 10),
					'message' => 'Digite no m�nimo 10 caracteres'
				)
			)

		);

	}
?>