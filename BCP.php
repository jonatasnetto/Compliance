<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Software</title>
    </head>

    <?php 
        if(isset($_SESSION['username']) == FALSE){
            include('pages/header.php');
        }elseif($_SESSION['username']=="admin"){
            include('pages/headerAdmin.php');
        }else{
            include('pages/headerUser.php');
        }
    ?>

    <body>
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">

                <figure class="figure">
                    <img src="img/bia-bcp.png" class="figure-img img-fluid rounded mx-auto">
                    <br><br>
                    <h2 class="text-center"><u>Continuidade de Negócios</u></h2>
                    <br>
                    <p>
                        <b>Tempo estimado:</b> 2 mês <br>
                        <b>Quantidade de usuários:</b> 1000 <br>
                        <b>Valor:</b> <i>simule os valores na ferramenta de simulação.</i> <a class="btn btn-primary" href="simular.php" role="button">Simule agora...</a><br><br>

                        Objetivo: A avaliação de continuidade de negócios tem como objetivo levantar os principais ativos do negócio para verificar as principais ameaças e oferecer um feedback de ações necessárias para melhorias baseadas em metodologias globais de segurança e continuidade.
                    </p>
                </figure>

                </div>

            </div>

        </div>
    </body>

<?php include('pages/footer.php');?>

</html>