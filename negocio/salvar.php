<?php
require_once('../db/config/database.php');
   
    $dados = $_POST;

   

    if ($_SERVER["REQUEST_METHOD"] != "POST" ){

    	echo "Você não pode acessar este arquivo!";
    	echo "<a href='/curso1/index.php'>Voltar</a>";

    	exit;

    };

    if ($dados["nome"] == ""){
       echo "Campo Nome Obrigatório<br>";

       echo "<a href='/curso1/index.php'>Voltar </a>";
       exit;
    };

    if($dados["email"] == ""){

    	echo "Favor preencher campo de email";
        echo "<a href='/curso1/index.php'>Voltar </a>";
        exit;
    };

    $ativo = false;

    if(isset($dados["ativo"])){
    	$ativo = true;
    };

    $STH = $conn->prepare("INSERT INTO usuario (nome, email, ativo) VALUES (?, ?, ?)");

	
	$STH->bindParam(1, $dados["nome"]);
	$STH->bindParam(2, $dados["email"]);
	$STH->bindParam(3, $ativo);
	$salvar = $STH->execute();


    if ($salvar){

    	echo "Registro cadastrado com sucesso";
    
    	exit;
    };


    
	  





































  echo " Se chegar eu esqueci o EXIT";