<?php
	class Palestrante extends AppModel {
        public $useTable = 'palestrantes';
        public $order = array('nome' => 'ASC');
        public $displayField = 'nome';
		public $hasMany = array('Palestra');

		public $validate = array(

			'nome' => array(
				'rule' => 'notEmpty', // N�o vazio
				'message' => 'Preencha o nome'
			),

			'descricao' => array(
				'rule' => 'notEmpty', // N�o vazio
				'message' => 'Preencha descri��o'
			),

			'url' => array(
				'rule' => 'url', // N�o vazio
				'message' => 'Preencha a URL corretamente'
			)

		);

	}
?>