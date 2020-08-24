<?php
    require_once('conexao.php');
    $conn = getConnection();

    $sql = 'DELETE FROM usuarios WHERE idUsusario = :id';
    $id = 2;

    $stmt = $conn->prepare($sql);
  
    $stmt->bindParam(':id', $id);

    if($stmt->execute()){
      echo 'APAGADO com sucesso'   ;
    }else{
      echo 'Erro ao APAGAR'    ;
    }


function deletar($tabela, $where=NULL){
    
    $sql = "DELETE {$tabela} {$where}";
    $stmt->prepare($sql);
    $stmt->bindParam(":id" , $id);
    if($stmt->execute()){
        echo "apagado com sucesso";
        // fechar o banco
        return true;
    }else{
        echo "Erro ao apgar o aquivo {$sql}";
        return false;
    }
}

/*
deletar("usuarios , where id = 1") ; excluir um registro



$id = $_REQUEST['id'];
deletar("usuarios", where id = "$id");
header('location:../sistes_relacionados.php?info=excluir');
 
https://www.youtube.com/watch?v=zRjAqeBkWU8&list=PLIZ0d6lKIbVpOxc0x1c4HpEWyK0JMsL49&index=23
https://www.youtube.com/watch?v=KubuQ8nHWqU&list=PLIZ0d6lKIbVpOxc0x1c4HpEWyK0JMsL49&index=24


?>