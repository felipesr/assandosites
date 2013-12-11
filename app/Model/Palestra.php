<?php
	class Palestra extends AppModel {
        public $useTable = 'palestras';
        public $order = array('nome' => 'ASC');
        public $displayField = 'nome';
		public $belongsTo = array('Palestrante');

		public $validate = array(

			'nome' => array(
				array(
					'rule' => 'notEmpty', // Não vazio
					'message' => 'Preencha o nome'
				), 
				array(
					'rule' => 'isUnique', // Único
					'message' => 'Este nome já está em uso'
				)
			),

			'inicio' => array(
				'rule' => 'time', // Não vazio
				'message' => 'Preencha no formato HH:MM'
			),

			'fim' => array(
				'rule' => 'time', // Não vazio
				'message' => 'Preencha no formato HH:MM'
			),

		);

	}
?>