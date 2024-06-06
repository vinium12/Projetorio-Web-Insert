<?php
require_once '../model/pessoa.php';

class PessoaController {
    private $pessoa;

    public function __construct() {
        // Cria uma nova instância da classe Pessoa
        $this->pessoa = new Pessoa();
        // Chama o método inserir ao criar uma nova instância do controlador
        $this->inserir();
    }

    public function inserir() {
        // Define as propriedades da pessoa a partir dos dados do formulário
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);

        // Insere a pessoa no banco de dados
        $this->pessoa->inserir();
    }
}

// Cria uma nova instância do controlador, o que aciona o método construtor
new PessoaController();
?>
