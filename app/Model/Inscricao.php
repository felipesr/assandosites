<?php
    class Inscricao extends AppModel {
        public $useTable = 'inscricoes';
        public $order = array('email' => 'ASC');
        public $displayField = 'nome';

		public $validate = array(

			'nome' => array(
				'rule' => 'notEmpty', // Não vazio
				'message' => 'Preencha o nome'
			),

			'email' => array(
				array(
					'rule' => 'notEmpty', // Não vazio
					'message' => 'Preencha o e-mail'
				), 
				array(
					'rule' => 'email', 
					'message' => 'Preencha um e-mail com formato válido'
				),
				array(
					'rule' => 'isUnique', // Único
					'message' => 'Este e-mail já está em uso'
				)
			),

			'telefone' => array(
				array(
					'rule' => 'notEmpty', // Não vazio
					'message' => 'Preencha o telefone'
				), 
				array(
					'rule' => 'numeric', 
					'message' => 'Preencha apenas números'
				)
			),

			'endereco' => array(
				array(
					'rule' => 'notEmpty', // Não vazio
					'message' => 'Preencha o telefone'
				), 
				array(
					'rule' => array('minLength', 10),
					'message' => 'Digite no mínimo 10 caracteres'
				)
			)

		);

	}
?>