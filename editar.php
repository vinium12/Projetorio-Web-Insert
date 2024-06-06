<!DOCTYPE html>
<html>
<head>
    <!-- Título da página -->
    <title>Tela de Cadastro</title>
    <!-- Importação do CSS do Bootstrap para estilização -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Container principal do formulário -->
    <div class="container">
        <!-- Título do formulário -->
        <h2>Editar</h2>
        <!-- Formulário de edição -->
        <!-- O formulário não possui método ou ação especificados, então não enviará dados ao servidor -->
        <form>
            <!-- Campo de entrada para o nome -->
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
            </div>
            <!-- Campo de entrada para o endereço -->
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço">
            </div>
            <!-- Campo de entrada para o bairro -->
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro">
            </div>
            <!-- Campo de entrada para o CEP -->
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite o CEP">
            </div>
            <!-- Campo de entrada para a cidade -->
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" placeholder="Digite a cidade">
            </div>
            <!-- Campo de entrada para o estado -->
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" placeholder="Digite o estado">
            </div>
            <!-- Campo de entrada para o telefone -->
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone">
            </div>
            <!-- Campo de entrada para o celular -->
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" placeholder="Digite o celular">
            </div>
            <!-- Botão de envio do formulário -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>
