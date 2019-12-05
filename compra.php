<?php 

    function validaNome($value){
        return strlen($value) >= 3;
    }

    function validaSobrenome($value){
        return strlen($value) <= 10;
    }

    function validaCPF($value){
        return strlen($value) === 11;
    }

    function validaNroCartao($value){
        if(strlen($value) == 16){
            return substr($value, -4);
        }
    }

    $erros = [];

    function validaCompra($v1, $v2, $v3, $v4){
        global $erros;

        if(!validaNome($v1)){
            array_push($erros, "Preencha o nome");   
        }

        if(!validaSobrenome($v2)){
            array_push($erros, "Preencha o sobrenome");   
        }

        if(!validaCPF($v3)){
            array_push($erros, "Preencha um CPF válido");   
        }

        if(!validaNroCartao($v4)){
            array_push($erros, "Preencha um número de cartão válido");   
        }
    }

    if($_POST){
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $cpf = $_POST["cpf"];
        $nroCartao = $_POST["nroCartao"];

        validaCompra($nome, $sobrenome, $cpf, $nroCartao);
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php $title = "Compra"; ?>
<?php require_once("inc/head.php"); ?>
<body>
    <?php 
        $nivelAcesso = mt_rand(0,1);
    ?>
    <?php require_once("inc/header.php"); ?>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-light rounded border">
                <form class="form" action="" method="POST">
                    <div class="row p-3">
                        <div class="col">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Seu nome">
                        </div>
                        <div class="col">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" name="sobrenome" class="form-control" placeholder="Seu sobrenome">
                        </div>
                        <div class="col">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" class="form-control" placeholder="Seu CPF">
                        </div>
                        <div class="col">
                            <label for="nroCartao">Número do Cartão</label>
                            <input type="text" name="nroCartao" class="form-control" placeholder="0000 0000 0000 0000">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">Estou de acordo com os termos</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <?php if(isset($_POST) && $_POST): ?>
                    <div class="card">
                        <div class="card-header">
                            Pedido
                        </div>
                        <div class="card-body">
                            <?php if(isset($erros) && $erros): ?>
                                <?php foreach($erros as $erro): ?>
                                    <p class="alert alert-danger"><?php echo $erro; ?></p>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="alert alert-success">Compra do filme <?php echo $_GET["titulo"]; ?> realizada com sucesso. </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>