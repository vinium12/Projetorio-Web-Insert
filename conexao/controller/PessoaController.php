<?php
//Incluindo arquivo pessoa da pasta model
require_once $_SERVER['DOCUMENT_ROOT'] .'/conexao/model/pessoas.php';

//Iniciando a Classe Pessoa Controller
class PessoaController {
    
    //Cria  um atributo para a Classe
    private $pessoa;

    //Inicio do método construtor   
    public function __construct() {
       
        // Cria uma nova instância da classe Pessoa
        $this->pessoa = new Pessoa();
       if($_GET['acao']=='inserir'){
        $this->inserir();
       }
        // Chama o método inserir ao criar uma nova instância do controlador
        $this->inserir();
    }

    //Inicio do método de Inserir
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

        // Inserindo a pessoa no banco de dados
        $this->pessoa->inserir();
    }
    public function listar(){
        return $this->pessoa->listar();
    }

}

// Cria uma nova instância do controlador, acionando o método construtor
new PessoaController();
?>
