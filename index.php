<?php 
	
	require_once("config.php");
	//carrega um usuario
	//$root = new Usuario();
	//$root->loadById(3);
	//echo $root;

	//Carrega uma lista de usuarios
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuarios buscando pelo login
	//$search = Usuario::search("br");
	//echo json_encode($search);

	//Carrega um usuario usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("bruno","123456789");
	//echo $usuario;

	//criando um novo usuario
	//$aluno = new Usuario("aluno","1597535");
	//$aluno->insert();
	//echo $aluno;

	$usuario = new Usuario();

	$usuario->loadById(6);

	$usuario->update("professor","154875");

	echo $usuario;



 ?>