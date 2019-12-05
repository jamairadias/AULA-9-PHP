<?php
    $conteudoJson = file_get_contents("json/usuarios.json");
    $arrayUsuarios = json_decode($conteudoJson, true);
?>
<!DOCTYPE html>
<html lang="en">
    <?php $title = "Lista de Usuários"; ?>
    <?php require_once("inc/head.php"); ?>
<body>
    <?php require_once("inc/header.php"); ?>

    <div class="container pt-3">
        <h1>Lista de Usuários Cadastrados</h1>
        <p>Abaixo estamos listando todos usuários cadastrados em nossa plataforma.</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Avatar</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($arrayUsuarios["usuarios"] as $usuario): ?>
                    <tr>
                        <td scope="row"><?= $usuario["nome"]; ?></td>
                        <td><?= $usuario["nome"]; ?></td>
                        <td><?= $usuario["email"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>        
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>