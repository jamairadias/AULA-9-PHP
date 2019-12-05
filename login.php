<?php 
    function logarUsuario($email, $senha){
        $arquivo = "json/usuarios.json";
        $logado = false;

        $jsonUsuarios = file_get_contents($arquivo);

        $arrayUsuarios = json_decode($jsonUsuarios, true);

        foreach ($arrayUsuarios["usuarios"] as $key => $value) {
            if($email == $value["email"] && password_verify($senha, $value["senha"])){
                $logado = true;
                break;
            }
        }
        return $logado;
    }

    if($_POST){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $logado = logarUsuario($email, $senha);
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = "Login"; ?>
<?php require_once("inc/head.php"); ?>
<body>
    <?php require_once("inc/header.php"); ?>

    <div class="container pt-3">
        <h1>Login</h1>
        <p>Informe e-mail e senha para efetuar login na plataforma.</p>
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php if(!isset($logado) && !$logado): ?>
            <div class="alert alert-danger">
                <p>Usuário ou senha inválidos</p>
            </div>
        <?php elseif(isset($logado) && $logado):?>
            <?php header("Location: teste.php"); ?>
        <?php endif; ?>
            
    </div>
</body>
</html>