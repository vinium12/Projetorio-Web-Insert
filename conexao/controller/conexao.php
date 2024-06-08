<?php

//Criação da classe Conexao
class Conexao {

    //Inicialização de atributos de tipo privado para armazenar as informações de conexão
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

    // Método construtor da classe
    public function __construct() {
        // Cria uma nova conexão com o banco de dados MySQL
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        
        // Verifica se houve algum erro na conexão
        if ($this->conexao->connect_error) {
            // Exibe uma mensagem de erro e encerra a execução do script
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }

    // Método para obter a conexão com o banco de dados
    public function getConexao() {
        return $this->conexao;
    }
}
?>
