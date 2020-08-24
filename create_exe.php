<?php
    require_once('conexao.php');
    $conn = getConnection();

    $sql = "INSERT INTO usuarios (nomeUsuario,email,senha) VALUES ('jose','jose@gmail.com','1234')";
    if($conn->exec($sql)){
        echo 'salvo com sucesso';
    }else{
        echo 'Erro ao Salvar';
        
    }

