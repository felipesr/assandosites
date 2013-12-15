<?php

class PalestrasController extends AppController {
	public $uses = array('Palestra');

	public function inscrever() {
	// Exibe automaticamente a view:
	// /View/Inscricoes/inscrever.ctp

		$isPost = $this->request->is('post');
		// Se é um POST e recebemos dados do formulário
		if ($isPost && !empty($this->request->data)) {
		//var_dump($this->request->data);
	
			// Tenta salvar os dados da inscrição
			if ($this->Palestra->save($this->request->data)) {
			// Registro inserido com sucesso!
			//echo "Registro inserido com sucesso!";
			$destino = array('controller' => 'pages', 'action' => 'display', 'cadastro-palestra_ok');
			$this->redirect($destino);
			} else {
			var_dump($this->Palestra->invalidFields());
			}
		} else {
		var_dump($isPost, $this->request->data);
		}
	}

	public function listar() { // Busca todas as notícias
		$params = array(
			'fields' => array('Palestra.nome', 'Palestra.inicio', 'Palestra.fim', 'Palestra.descricao'),
			'order' => array('Palestra.inicio')
		);
		$palestras = $this->Palestra->find('all', $params);
		// Manda para a View
		$this->set('palestras', $palestras);
	}

	public function edit($id = null) {
		$this->Palestra->id = $id; 
			if ($this->request->is('post')) { 
				if ($this->Palestra->save($this->request->data)) {
				// Salvo com sucesso
				echo "salvo";
				} else {
				// Erro
				echo "erro";
				}
			} else { 
			$this->request->data = $this->Palestra->read();
			}
	}

}

?>