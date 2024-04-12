<?php
  $servidor ='localhost';
  $usuario= 'root';
  $senha= '';
  $banco= 'xampp';

  $conexao = mysqli_connect($servidor,$usuario,$senha,$banco)
  or die('Não foi possível conectar ao servidor de banco de dados');
  mysqli_select_db($conexao, $banco) or die('Não foi possível conectar ao banco de dados');