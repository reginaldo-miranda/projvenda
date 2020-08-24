<?php

require_once('conexao.php');


function alterar($coluna, $valor, $tabela){
    $conn = getConnection();
    

    $sql = 'UPDATE cadastro SET nomeUsuario = :nUsu ,email = :email ,senha = :senha WHERE id = :id';

    $stmt = $conn->prepare($sql);

    $stmt ->bindParam(':nUsu',$nomeUsuario);
    $stmt ->bindParam(':email',$mail);
    $stmt->bindParam(':senha',$senha);
    $stmt->bindParam(':id', $id);
    if($stmt->execute()){
      echo 'Atualizado com sucesso'   ;
    }else{
      echo 'Erro ao salvar'    ;
    }
}

<?
    
    
    
    
    
    