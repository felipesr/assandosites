<?php

class InscricoesController extends AppController {
	public $uses = array('Inscricao');

	public function inscrever() {
	// Exibe automaticamente a view:
	// /View/Inscricoes/inscrever.ctp

		$isPost = $this->request->is('post');
		// Se щ um POST e recebemos dados do formulсrio
		if ($isPost && !empty($this->request->data)) {
		//var_dump($this->request->data);
	
			// Tenta salvar os dados da inscriчуo
			if ($this->Inscricao->save($this->request->data)) {
			// Registro inserido com sucesso!
			//echo "Registro inserido com sucesso!";
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'cadastro_ok'));
			}
		}

	}
}


?>