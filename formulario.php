<?php

if(isset($_POST['submit']))
{
    
    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone: ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo: ' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade: ' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereço: ' . $_POST['endereco']);


    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    

    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco)
    VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header('Location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>formulario</title>

<style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, rgba(160, 5, 233, 0.877),rgb(109, 3, 113));
    }

    .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 15px;
    width: 20%;
    color: white;
    }

    fieldset{
    border: 3px solid #8a1675;
    }

    legend{
    border: 2px solid #8a1675;
    padding: 10px;
    text-align: center;
    background-color: #8a1675;
    border-radius: 8%;
    }

    .inputbox{
    position: relative;
    }
    
    .inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
    }
    
    .labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5px;
    }     

    .inputUser:focus ~ .labelInput,
    .inputUser:valid ~ .labelInput{
    top: -20px;
    font-size: 12px;
    color: rgb(238, 96, 234);
    }
    
    #data_nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
    }
    
    #submit{
    background-image: linear-gradient(to right, rgba(160, 5, 233, 0.877),rgb(109, 3, 113));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
    }  
    
    #submit:hover{
    background-image: linear-gradient(to right, rgb(109, 3, 113),rgba(160, 5, 233, 0.877));
    }  

</style>
</head>

<body>

<a href="home.php">Voltar</a>

<div class="box">
    <form action="" method='POST'>
    <fieldset>
    <legend><b>Formulário de Clientes</b></legend>

<br>
  
<div class="inputbox">
    <input type="text" name="nome" id="nome" class="inputUser" required>
    <label for="nome" class="labelInput">Nome Completo</label>
</div>

<br>
<br>

<div class="inputbox">
    <input type="password" name="senha" id="senha" class="inputUser" required>
    <label for="senha" class="labelInput">Senha</label>
</div>

<br>
<br>

<div class="inputbox">
    <input type="email" name="email" id="email" class="inputUser" required>
    <label for="email" class="labelInput">Email</label>
</div>

<br>
<br>

<div class="inputbox">
    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
    <label for="telefone" class="labelInput">Telefone</label>
</div>
   
<b><p>Sexo:</p></b>
    <input type="radio" id="feminino" name="genero" value="feminino" required>
    <label for="feminino">Feminino</label>
<br>
    <input type="radio" id="masculino" name="genero" value="masculino" required>
    <label for="masculino">Masculino</label>
<br>
    <input type="radio" id="outro" name="genero" value="outro" required>
    <label for="outro">Outro</label>

<br>
<br>

<label for="data_nascimento">Data de Nascimento:</label>
<input type="date" name="data_nascimento" id="data_nascimento" required>
   
<br>
<br>
<br>

<div class="inputbox">
    <input type="text" name="cidade" id="cidade" class="inputUser" required>
    <label for="cidade" class="labelInput">Cidade</label>
</div>

<br>
<br>

<div class="inputbox">
    <input type="text" name="estado" id="estado" class="inputUser" required>
    <label for="estado" class="labelInput">Estado</label>
</div>

<br>
<br>

<div class="inputbox">
    <input type="text" name="endereco" id="endereco" class="inputUser" required>
    <label for="endereco" class="labelInput">Endereço</label>
</div>

<br>
<br>

<input type="submit" name="submit" id="submit">

</fieldset>
</form>
</body>
</html>