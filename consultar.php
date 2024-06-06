<!DOCTYPE html>
<html>
<head>
    <!-- Título da página -->
    <title>Tela de Consulta</title>
    <!-- Importação do CSS do Bootstrap para estilização -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Container principal da tabela de consulta -->
    <div class="container">
        <!-- Título da página de consulta -->
        <h2>Consulta</h2>
        <!-- Tabela para exibir os registros -->
        <table class="table">
            <thead>
                <tr>
                    <!-- Cabeçalhos das colunas da tabela -->
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Simulação de registros (em uma aplicação real, esses dados viriam de um banco de dados)
                $registros = [
                    ['João', '123456789', '987654321'],
                    ['Maria', '987654321', '123456789'],
                    ['Pedro', '555555555', '999999999']
                ];

                // Loop para percorrer cada registro e exibi-los na tabela
                foreach ($registros as $registro) {
                    echo '<tr>'; // Início de uma nova linha da tabela
                    echo '<td>' . $registro[0] . '</td>'; // Coluna para o nome
                    echo '<td>' . $registro[1] . '</td>'; // Coluna para o telefone
                    echo '<td>' . $registro[2] . '</td>'; // Coluna para o celular
                    echo '<td>'; // Coluna para as ações (editar e excluir)
                    echo '<button class="btn btn-primary">Editar</button>'; // Botão para editar
                    echo '<button class="btn btn-danger">Excluir</button>'; // Botão para excluir
                    echo '</td>';
                    echo '</tr>'; // Fim da linha da tabela
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
