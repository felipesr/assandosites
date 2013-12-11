<?php
	class Palestra extends AppModel {
        public $useTable = 'palestras';
        public $order = array('nome' => 'ASC');
        public $displayField = 'nome';
		public $belongsTo = array('Palestrante');

		public $validate = array(

			'nome' => array(
				array(
					'rule' => 'notEmpty', // N�o vazio
					'message' => 'Preencha o nome'
				), 
				array(
					'rule' => 'isUnique', // �nico
					'message' => 'Este nome j� est� em uso'
				)
			),

			'inicio' => array(
				'rule' => 'time', // N�o vazio
				'message' => 'Preencha no formato HH:MM'
			),

			'fim' => array(
				'rule' => 'time', // N�o vazio
				'message' => 'Preencha no formato HH:MM'
			),

		);

	}
?>