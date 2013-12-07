<?php
    class Inscricao extends AppModel {
        public $useTable = 'inscricoes';
        public $order = array('email' => 'ASC');
        public $displayField = 'nome';
        }
?>