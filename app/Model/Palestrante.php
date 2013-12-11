<?php
	class Palestrante extends AppModel {
        public $useTable = 'palestrantes';
        public $order = array('nome' => 'ASC');
        public $displayField = 'nome';
		public $hasMany = array('Palestra');

		public $validate = array(

			'nome' => array(
				'rule' => 'notEmpty', // Nуo vazio
				'message' => 'Preencha o nome'
			),

			'descricao' => array(
				'rule' => 'notEmpty', // Nуo vazio
				'message' => 'Preencha descriчуo'
			),

			'url' => array(
				'rule' => 'url', // Nуo vazio
				'message' => 'Preencha a URL corretamente'
			)

		);

	}
?>