<?php
    include_once "conexaoMysql.php";
    
    $con = new conexaoMysql(); // Corrigido para instanciar a classe corretamente
    $con->conectar();
    
    echo "Conexão realizada com sucesso";
?>