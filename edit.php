<?php

if(!empty($_GET['id'])){

include_once('config.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

$result = $conexao->query($sqlSelect);

if($result->num_rows > 0){
    while($user_data = mysqli_fetch_assoc($result))
        {
        $nome = $user_data['nome'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
        $telefone = $user_data['telefone'];
        $sexo = $user_data['sexo'];
        $data_nasc = $user_data['data_nasc'];
        $cidade = $user_data['cidade'];
        $estado = $user_data['estado'];
        $endereco = $user_data['endereco'];
        }
}

else{
    header('Location: sistema.php');
}

}
else{
    header('Location: sistema.php');
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

    body{font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, rgba(160, 5, 233, 0.877),rgb(109, 3, 113));}

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

    #update{
    background-image: linear-gradient(to right, rgba(160, 5, 233, 0.877),rgb(109, 3, 113));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
    } 

    #update:hover{
    background-image: linear-gradient(to right, rgb(109, 3, 113),rgba(160, 5, 233, 0.877));
    }  

</style>
</head>

<body>
    <a href="sistema.php">Voltar</a>

<div class="box">
    <form action="saveEdit.php" method='POST'>
    <fieldset>
    <legend><b>Formulário de Clientes</b></legend>
    <br>
  
<div class="inputbox">
    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
    <label for="nome" class="labelInput">Nome Completo</label>
</div>

<br>
<br>

<div class="inputbox">
    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha?>" required>
    <label for="senha" class="labelInput">Senha</label>
</div>

<br>
<br>

<div class="inputbox">
    <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email?>" required>
    <label for="email" class="labelInput">Email</label>
</div>

<br>
<br>

<div class="inputbox">
    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" required>
    <label for="telefone" class="labelInput">Telefone</label>
</div>
   
<b><p>Sexo:</p></b>
    <input type="radio" id="feminino" name="genero" value='feminino' <?php echo ($sexo == 'feminino') ? 'checked' : ''  ?> required>
    <label for="feminino">Feminino</label>
<br>
    <input type="radio" id="masculino" name="genero" value='masculino' <?php echo ($sexo == 'masculino') ? 'checked' : ''  ?> required>
    <label for="masculino">Masculino</label>
<br>
    <input type="radio" id="outro" name="genero"  value='outro' <?php echo ($sexo == 'outro') ? 'checked' : ''  ?> required>
    <label for="outro">Outro</label>
    
<br>
<br>   

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc?>" required>
   
<br>
<br>
<br>

<div class="inputbox">
    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade?>" required>
    <label for="cidade" class="labelInput">Cidade</label>
</div>

<br>
<br>

<div class="inputbox">
    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado?>" required>
    <label for="estado" class="labelInput">Estado</label>
</div>

<br>
<br>

<div class="inputbox">
    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco?>" required>
    <label for="endereco" class="labelInput">Endereço</label>
</div>

<br>
<br>

<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="submit" name="update" id="update" value="Atualizar">

</fieldset>
</form>
</body>
</html>