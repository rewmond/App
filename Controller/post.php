<?php
session_start();

// Verificar se os campos foram preenchidos
if (empty($_POST['titulo']) || empty($_POST['conteudo'])) {
    echo "Por favor, preencha todos os campos.";
    exit;
}

// Obter os dados enviados pelo formulário
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

// Incluir o arquivo de conexão com o banco de dados
include('../Model/conexao.php');

date_default_timezone_set('America/Sao_Paulo');
$hora_local = date('Y-m-d h:i:s', time());


// $usuario = $_SESSION['nome'];


// $tabela = "select usuario_id from usuario where nome = '{$usuario}')";

// $pesquisa = mysqli_query($conexao, $tabela);

// $id_usuario = mysqli_num_rows($pesquisa);


// Inserir a nova postagem na tabela "postagens" (supondo que a tabela já exista)
$query = "INSERT INTO postagens (titulo, conteudo, data_publicacao, usuario_usuario_id) VALUES ('$titulo', '$conteudo', '$hora_local','1')";
$result = mysqli_query($conexao, $query);

if ($result) {
    echo "Postagem publicada com sucesso!";
} else {
    echo "Ocorreu um erro ao publicar a postagem.";
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>