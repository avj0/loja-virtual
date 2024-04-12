<?php


include "conexaoMysql.php";
    
    $teste= new ConexaoMysql();
    $conexao= $teste->conectar();

    $sql = "select * from pessoa";
    $qry = mysqli_query($conexao,$sql);
    
    while($dados = mysqli_fetch_assoc($qry))
    {
       echo $dados["nome"]. "<br>";
    }




    /*echo '<br/>-------<br/>';

    $sql = "select * from pessoa";
    $qry = mysqli_query($conexao,$sql);
    while($linha = mysqli_fetch_array($qry))
    {
        print_r($linha[0]);

        echo "<br/><br/>";
    }

    echo '<br/>---------<br/>';

    $sql = "select * from pessoa";
    $qry = mysqli_query($conexao,$sql);
    while($linha = mysqli_fetch_row($qry))
    {
        print_r($linha[0]);

        echo "<br/><br/>";
    }*/