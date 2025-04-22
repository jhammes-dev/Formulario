<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>login</title>
    
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgba(160, 5, 233, 0.877),rgb(109, 3, 113));}

            div{
            background-color:rgba(0,0,0,0.5);
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 60px;
            border-radius: 15px;
            color:floralwhite;}

            input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 20px;}
        
            .inputSubmit{
            background-image: linear-gradient(to right, rgb(109, 3, 113),rgba(160, 5, 233, 0.877));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;}

           .inputSubmit:hover{
                background-image: linear-gradient(rgb(109, 3, 113),rgba(160, 5, 233, 0.877));}

            
    </style>
</head>
<body>

            <a href="home.php">Voltar</a>
    <div>  
            <h1>Login</h1>
            <form action="testLogin.php" method='POST'>  
            <input type="text" name="email" placeholder="Email">
            <br><br>        
            <input type="password" name="senha" placeholder='senha'>
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </form>

    </div>

    



    
</body>
</html>