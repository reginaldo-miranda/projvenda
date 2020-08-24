<?php
//include_once("BEfecha_conexao.php");
include_once("conexao.php");
//include_once("BEinseir_cadastro.php");

function atualizar($coluna, $valor, $tabela, $where){
    echo ('FUNCAO dentro PDO') . "<br>";
    $conn = getConnection();

    if ((is_array($coluna)) and (is_array($valor))) {
        
        if (count($coluna) == count($valor)) {
            
            $valor_coluna = NULL;
         // COLOCAR ARRAY EM UMA STRING
            for ($i=0;$i<count($coluna);$i++){  
                
                $valor_coluna .="{$coluna[$i]} = '{$valor[$i]}',";
            }
            // tirando a virgula da ultima posicao
            $valor_coluna = substr($valor_coluna,0,-1);
            
            $atualizar = "UPDATE {$tabela} SET {$valor_coluna} {$where}";
            
           
            $stmt = $conn->prepare($atualizar);

            
            if ($stmt->execute()) {
                echo ('salvo com sucesso') . "<br>";
                // header("location:FRcadastro.php?msg=enviado");
            } else {
                echo "nao salvou";
            }
        } else {
            return false;
        }
    } else {
         $atualizar = "UPDATE {$tabela} ({$coluna}) VALUES ('{$valor}')";
        
        
        $stmt = $conn->prepare($atualizar);
        if ($stmt->execute()) {
            echo "salvo sem arry";
        } else {
            echo "nao salvou sem arry";
        }
        return false;
    }
}

// https://www.youtube.com/watch?v=9daDPkrfUsk&list=PLIZ0d6lKIbVpOxc0x1c4HpEWyK0JMsL49&index=17
?>