<?php

class PalestrantesController extends AppController {
	public $uses = array('Palestrante');

	public function inscrever() {
	// Exibe automaticamente a view:
	// /View/Inscricoes/inscrever.ctp

		$isPost = $this->request->is('post');
		// Se é um POST e recebemos dados do formulário
		if ($isPost && !empty($this->request->data)) {
		//var_dump($this->request->data);
	
			// Tenta salvar os dados da inscrição
			if ($this->Palestrante->save($this->request->data)) {
			// Registro inserido com sucesso!
			//echo "Registro inserido com sucesso!";
			$destino = array('controller' => 'pages', 'action' => 'display', 'cadastro-palestrante_ok');
			$this->redirect($destino);
			} else {
			var_dump($this->Palestrante->invalidFields());
			}
		} else {
		var_dump($isPost, $this->request->data);
		}
	}

	public function listar() { // Busca todas as notícias
		$params = array(
			'fields' => array('Palestrante.nome', 'Palestrante.descricao'),
			'order' => array('Palestrante.nome')
		);
		$palestrantes = $this->Palestrante->find('all', $params);
		// Manda para a View
		$this->set('palestrantes', $palestrantes);
	}

	public function view($id) {
		$this->Palestrante->id = $id;
		$dados = $this->Palestrante->read();
		$this->set('palestrante', $dados);
	}

	/*public function exemplo() {
		$selecao = $this->Palestrante->find('list');
		$this->set('selecao_palestrante', $selecao);
	}*/
	/*
	public function exemplo() {

		$params2 = array(
			'fields' => array('Palestrante.id'),
			'order' => array('Palestrante.id')
		);
		$selecao = $this->Palestrante->find('all', $params2);
		// Manda para a View
		$this->set('selecao', $selecao);
	}*/

}



?>