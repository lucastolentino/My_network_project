<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<title><?php echo htmlspecialchars( $title_pagina, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>
<link href="resources/css/css.css" rel="stylesheet"/>
<script src="resources/js/js.min.js"></script>
</head>
<body>
<header>
	<div class="content">
			
	  <div class="logo">
		   <img src="resources/imagens/logo_principal.png">
	  
	  </div>
	        <div class="login">
		        <form action="login" method="POST">

			        <input type="email" name="email" placeholder="E-MAIL">
			        <input type="password" name="senha" placeholder="SENHA">
			        <input type="submit" name="btn" value="Entrar"> 
		        </form>
		
	        </div>
	</div>
</header>
