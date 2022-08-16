<?php

    session_start();

    if(!isset($_SESSION['NOME']) && !isset($_SESSION['tipo'])){
        $dados = array(
            'tipo' => 'error' ,
            'mensagem' => 'você não está autenticado.'
        );
    
    }else{
        $dados = array(
            'tipo' => 'success' ,
            'mensagem' => 'seja bem vindo '.$_SESSION['NOME']
        );

    }
    echo json_encode($dados);