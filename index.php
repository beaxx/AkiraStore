<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>AkiraGames - login</title>
</head>
<body>
    <main>
        <div class="formLogin">
            <form action="index.php" method="post">
                <span>SEJA BEM VINDO JOGADOR!</span>
                <div class="inputs">
                    <label>LOGIN</label>
                    <input type="text" name="username" id="user" placeholder="Digite seu nome de usuário..." required>
                    <input type="password" name="password" id="password" placeholder="Digite sua senha..." required>
                    <div class="btnFinais">
                        <input type="submit" value="Entrar" class="btns">
                        <input type="reset" value="Limpar" class="btns">
                    </div>
                </div> 
            </form>
        </div>
        <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // isso aqui é p verificar se o formulário foi enviaodo, e se sim executar as ações abaixo
    $username = $_POST['username'];
    $senha = $_POST['password'];

    include 'conection.php'; // Include the database connection file

    $sql = "SELECT username, senha FROM usuarios WHERE username = '$username' AND senha = '$senha'";
    $resultado = mysqli_query($conection, $sql); 
    $linha = mysqli_fetch_array($resultado);

    if($linha){
        // adicionar um caminho depois.
    }else{
        echo "<div class=\"alertMessage\"> Usuário ou senha errado! </div>";
    }
    
    mysqli_close($conection);
}
?>
    </main>
</body>
</html>
