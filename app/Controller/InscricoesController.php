<?php

class InscricoesController extends AppController {
	public $uses = array('Inscricao');

	public function inscrever() {
	// Exibe automaticamente a view:
	// /View/Inscricoes/inscrever.ctp

		$isPost = $this->request->is('post');
		// Se � um POST e recebemos dados do formul�rio
		if ($isPost && !empty($this->request->data)) {
		//var_dump($this->request->data);
	
			// Tenta salvar os dados da inscri��o
			if ($this->Inscricao->save($this->request->data)) {
			// Registro inserido com sucesso!
			//echo "Registro inserido com sucesso!";
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'cadastro_ok'));
			}
		}

	}
}


?>