<?php
namespace DEV\Controllers;

use Rain\Tpl;

class HomeController
{
	private $tpl;

	function __construct()
	{
		$config = array(
			'base_url' => __DIR_PRINCIPAL__,
			'tpl_dir' => $_SERVER['DOCUMENT_ROOT'].__DIR_PRINCIPAL__."/system/views/",
			'cache_dir' => $_SERVER['DOCUMENT_ROOT'].__DIR_PRINCIPAL__.'/cache/',
			'tpl_ext' => 'php'
		);

		Tpl::configure($config);

		$this->tpl = new Tpl;

		//$this->setTpl("header");
		
	}

	function __destruct()
	{
		$this->setTpl("footer");
		
	}

	 public function setTpl($template, $data=array(), $returnHtml = false)
	 {
	 	$this->setData($data);

	 	return $this->tpl->draw($template, $returnHtml);
	 }

	 public function setData($data= array())
	 {
	 	foreach ($data as $key => $value) {
	 		$this->tpl->assign($key, $value);
	 	}
	 }

	public function login()
	{
		$this->setTpl("header", array('title_pagina' => 'Página de Login'));
		$this->setTpl("login");
	}

	public function feed()
	{
		$this->setTpl("header", array('title_pagina' => 'Seu Feed'));
		$this->setTpl("Iniciocentral", array ('classprincipal' => 'feed'));
		$this->setTpl("lateralEsquerda");
		$this->setTpl("feed");
		$this->setTpl("lateralDireita");
		$this->setTpl("finalCentral");
	}

	public function feed_usuario($request, $response, $args){
		$nome = $args ['usuario'];
		$this->setTpl("header", array('title_pagina' => ' Feed de '.$nome));
		$this->setTpl("feed_usuario", array('nome_usuario' => $nome));
	}

	public function configuracao(){

		$this->setTpl("header", array('title_pagina' => ' Configurações'));
		$this->setTpl("configuracao");
	}

	public function pesquisa(){

		$this->setTpl("header", array('title_pagina' => ' Pesquisa'));
		$this->setTpl("Pesquisa");
	}

	public function mensagens(){

		$this->setTpl("header", array('title_pagina' => ' Mensagens'));
		$this->setTpl("mensagens");
	}

	public function fotos(){

		$this->setTpl("header", array('title_pagina' => ' Fotos'));
		$this->setTpl("fotos");
	}
}

?>