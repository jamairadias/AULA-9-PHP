<!DOCTYPE html>
<html lang="en">
<?php $title = "Home"; ?>
<?php require_once("inc/head.php"); ?>
<body>
    <?php

        $filmes = [
            "0" => [
                "imagem" => "assets/img/la-casa-de-papel.jpg",
                "titulo" => "La Casa de Papel",
                "sinopse" => "Assalto planejado ao Banco Central",
                "ator_principal" => "Ator 1",
                "duracao" => "120",
                "genero" => "Comédia",
                "classificacao" => "18"
            ],
            "1" => [
                "imagem" => "assets/img/stranger-things.jpg",
                "titulo" => "Stranger Things",
                "sinopse" => "Crianças com super poder",
                "ator_principal" => "Ator 1",
                "duracao" => "120",
                "genero" => "Comédia",
                "classificacao" => "18"
            ],
            "2" => [
                "imagem" => "assets/img/supernatural.jpg",
                "titulo" => "Supernatural",
                "sinopse" => "Algo sobrenatural",
                "ator_principal" => "Ator 1",
                "duracao" => "120",
                "genero" => "Comédia",
                "classificacao" => "18"
            ],
            "3" => [
                "imagem" => "assets/img/brooklyn-99.jpeg",
                "titulo" => "Brooklyn Nine Nine",
                "sinopse" => "Grupo de policiais que resolvem casos bizarros",
                "ator_principal" => "Ator 1",
                "duracao" => "120",
                "genero" => "Comédia",
                "classificacao" => "18"
            ],
            "4" => [
                "imagem" => "assets/img/supernatural.jpg",
                "titulo" => "Supernatural",
                "sinopse" => "Algo sobrenatural",
                "ator_principal" => "Ator 1",
                "duracao" => "120",
                "genero" => "Comédia",
                "classificacao" => "18"
            ],
            "5" => [
                "imagem" => "assets/img/brooklyn-99.jpeg",
                "titulo" => "Brooklyn Nine Nine",
                "sinopse" => "Grupo de policiais que resolvem casos bizarros",
                "ator_principal" => "Ator 1",
                "duracao" => "120",
                "genero" => "Comédia",
                "classificacao" => "18"
            ],
            "6" => [
                "imagem" => "assets/img/la-casa-de-papel.jpg",
                "titulo" => "La Casa de Papel",
                "sinopse" => "Assalto planejado ao Banco Central",
                "ator_principal" => "Ator 1",
                "duracao" => "120",
                "genero" => "Comédia",
                "classificacao" => "18"
            ],
            "7" => [
                "imagem" => "assets/img/stranger-things.jpg",
                "titulo" => "Stranger Things",
                "sinopse" => "Crianças com super poder",
                "ator_principal" => "Ator 1",
                "duracao" => "120",
                "genero" => "Comédia",
                "classificacao" => "18"
            ],
            "8" => [
                "imagem" => "assets/img/supernatural.jpg",
                "titulo" => "Supernatural",
                "sinopse" => "Algo sobrenatural",
                "ator_principal" => "Ator 1",
                "duracao" => "120",
                "genero" => "Comédia",
                "classificacao" => "18"
            ]
        ];
    ?>
    <?php require_once("inc/header.php"); ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="assets/img/la-casa-de-papel.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="assets/img/stranger-things.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="assets/img/supernatural.jpg" alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <section class="mt-5 container">
        <h1>Encontre os melhores filmes da nossa loja</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit soluta odio expedita, facilis ab eum enim magnam ratione in vel omnis eaque hic repellat quae doloremque id sapiente consequuntur beatae?</p>
        <div class="row">
            <?php foreach($filmes as $key => $value): ?>
                <div class="border mb-5 col-12 col-md-6 col-lg-4">
                    <img class="card-img-top" src="<?php echo $value["imagem"]; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value["titulo"]; ?></h5>
                        <p class="card-text"><?php echo $value["sinopse"]; ?></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal<?php echo $key; ?>">
                            Visualizar
                        </button>
                        <form action="compra.php" method="GET" class="d-inline-block">
                            <input type="hidden" value="<?php echo $value["titulo"]; ?>" name="titulo">
                            <button type="submit" class="btn btn-primary mb-4">
                                Comprar
                            </button>
                        </form>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $value["titulo"]; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><i class="fa fa-book mr-2"></i> Sinopse: <?php echo $value["sinopse"]; ?></p>
                                    <p><i class="fa fa-user mr-2"></i> Ator Principal: <?php echo $value["ator_principal"]; ?></p>
                                    <p><i class="fa fa-clock-o mr-2"></i> Duração: <?php echo $value["duracao"]; ?></p>
                                    <p><i class="fa fa-angry mr-2"></i> Gênero: <?php echo $value["genero"]; ?></p>
                                    <p><i class="fa fa-exclamation-triangle mr-2"></i> Classificação: <?php echo $value["classificacao"]; ?></p>                 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>