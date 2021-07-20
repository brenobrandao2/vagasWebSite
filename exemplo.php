<?php
// Criando uma variável responsável por criar a conexão com o banco de dados    
//            new mysqli(host, usuário, senha, nome da base de dados)
$connection = new mysqli("localhost", "root", "", "vagas_web_site");

// Busca os valores digitados no frontend e armazena em variáveis que podem ser utilizadas
$nome = $_POST['nome'];

// Verifica se conseguiu conectar com o banco de dados
if($connection) {
    echo("Conectado com sucesso!");

    // Query que será executada no banco de dados
    $query = "INSERT INTO candidatos (cidade, nome, nivel, experiencia) VALUES ('São Paulo', $nome,'Estágio','1 ano de experiência')";

    // Envia a query para ser executada no banco de dados
    mysqli_query($connection,$query);
}

?>