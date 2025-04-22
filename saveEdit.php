<?php
include_once('config.php');

if (isset($_POST['update'])) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha', telefone='$telefone', sexo='$sexo', data_nasc='$data_nasc', cidade='$cidade', estado='$estado', endereco='$endereco' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

        if ($result) {
            header('Location: sistema.php');
            exit();
        } else {
            echo "Erro ao atualizar o registro: " . $conexao->error;
        }
    } else {
        echo "ID não definido.";
    }
} else {
    echo "Ação de atualização não definida.";
}
?>

