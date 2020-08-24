<?php
/*
    // exemplo para listar todos os registros
    require_once('conexao.php');
    $conn = getConnection();

    $sql = "SELECT * FROM cadastro";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll();

    foreach ($result as $value){
        
        echo 'Nome: '.$value['nomeUsuario'];
    }

*/

   // pesquisar um registro
   require_once('conexao.php');
    $conn = getConnection();

    $sql = "SELECT * FROM usuarios Where idUsusario = :id";

    $stmt = $conn->prepare($sql);
    $stmt ->bindValue(":id" , 1 );
    $stmt->execute();

    $result = $stmt->fetchAll();

    foreach ($result as $value){
        
        echo 'Nome: '.$value['nomeUsuario'];
    }

?>
