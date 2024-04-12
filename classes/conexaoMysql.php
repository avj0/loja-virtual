<?php
   class ConexaoMysql
   {
        protected $servidor;
        protected $usuario;
        protected $senha;
        protected $banco;
        protected $conexao;
        protected $qry;
        protected $dados;
        
        public function __construct(){ // Corrigido o nome da função construtora para "__construct"
            $this->servidor = "localhost";
            $this->usuario = "root";
            $this->senha = "";
            $this->banco = "xampp";
        }
        
        function conectar()
        {
            $this->conexao = @mysqli_connect($this->servidor, $this->usuario, $this->senha) or die("Não foi possível conectar com o servidor de Banco de dados: " . mysqli_error());

            $this->banco = @mysqli_select_db($this->conexao, $this->banco) or die("Não foi possível selecionar o banco de dados: ". mysqli_error());

            return $this->conexao;
        }

        function executarSQL($sql)
        {
            $this->qry=@mysqli_query(($sql))or die("Erro ao executar comando SQL:$sql <br>".mysqli_error());
            return $this->qry;
        }
        function listar ($qr)
        {
            $this->dados=@mysqli_fetch_assoc(($qr));
            return $this->dados;

        }
   }