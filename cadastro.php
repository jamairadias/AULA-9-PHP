<?php
    function cadastraUsuario($value){
        $arquivo = "json/usuarios.json";

        $jsonUsuarios = file_get_contents($arquivo);

        $arrayUsuarios = json_decode($jsonUsuarios, true);

        array_push($arrayUsuarios["usuarios"], $value);

        $jsonUsuarios = json_encode($arrayUsuarios, JSON_UNESCAPED_SLASHES);

        $cadastrou = file_put_contents($arquivo, $jsonUsuarios);

        return $cadastrou;
    }

    if($_POST){
        if($_FILES){
            if($_FILES["avatar"]["error"] == UPLOAD_ERR_OK){
               $nomeImg = $_FILES["avatar"]["name"];
               $nomeTmp = $_FILES["avatar"]["tmp_name"];

               $raizProjeto = dirname(__FILE__); 

               $caminhoJson = "/assets/img/uploads/";

               $pastaUploads = $raizProjeto.$caminhoJson;

               $caminhoUpload = $pastaUploads.$nomeImg;

               $moveu = move_uploaded_file($nomeTmp, $caminhoUpload);
                
            }
            
        }

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $novoUsuario = [
            "nome" => $nome,
            "email" => $email,
            "senha" => password_hash($senha, PASSWORD_DEFAULT),
            "avatar" => $caminhoJson.$nomeImg
        ];

        $cadastrou = cadastraUsuario($novoUsuario);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <?php $title = "Cadastro de Usuários"; ?>
    <?php require_once("inc/head.php"); ?>
<body>
    <?php require_once("inc/header.php"); ?>

    <div class="container pt-3">
        <h1>Cadastro de Usuários</h1>
        <p>Preencha o formulário para cadastrar-se na plataforma.</p>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome">
            </div>
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" name="avatar" class="form-control" id="avatar">
            </div>
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
        <?php if(isset($cadastrou) && $cadastrou): ?>
            <div class="alert alert-success">
                <p>Usuário cadastrado com sucesso</p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>