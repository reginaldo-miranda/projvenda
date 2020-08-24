<?php
    require_once('conexao.php');
    $conn = getConnection();

    $sql = 'INSERT INTO cadastro(nomeUsuario,email,senha) VALUES (:nUsu,:email,:senha)';

    $stmt = $conn->prepare($sql);

    $stmt ->bindParam(':nUsu',$nomeUsuario);
    $stmt ->bindParam(':email',$mail);
    $stmt->bindParam(':senha',$senha);
    if($stmt->execute()){
      echo 'Salvo com sucesso'   ;
    }else{
      echo 'Erro ao salvar'    ;
    }


<?