<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE HTML>
<html lang=“pt-br”>
<head>
<meta charset=“utf-8”/>
<meta content=“width=device-width, initial-scale=1, maximum-scale=1” name=“viewport”>
<title><?php echo htmlspecialchars( $title_pagina, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>
<link href=“css/seu-stylesheet.css” rel=“stylesheet”/>
<script src=“scripts/seu-script.js”></script>
</head>
<body>
<header>
	<div class="logo">
		<img src="resources/imagens/logo_principal.png">
	</div>
	<div class="login">
		<form action="login" method="POST">
			<input type="email" name="email">
			<input type="password" name="senha">
			<input type="submit" name="btn" value="Entrar"> 
			
		</form>
		
	</div>
</header>
