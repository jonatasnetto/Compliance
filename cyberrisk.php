<?php session_start();?>
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
        <br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">

                <figure class="figure">
                    <img src="img/hacking-detected CyberRisk.jpeg" class="figure-img img-fluid rounded" style="width: 100%;">
                    <br><br>
                    <h2 class="text-center"><u>CyberRisk</u></h2>
                    <br>
                    <p>
                        <b>Tempo estimado:</b> 1 mês <br>
                        <b>Quantidade de usuários:</b> 1000 <br>
                        <b>Valor:</b> <i>simule os valores na ferramenta de simulação.</i> <a class="btn btn-primary" href="simular.php" role="button">Simule agora...</a><br><br>

                        Objetivo: A Avaliação de CyberRisk tem como objetivo realizar testes tecnológicos de natureza invaziva e de massividade para identificar os principais riscos de segurança e prover orientação técnica profissional na resolução e mitigação dos riscos que podem causar impacto no negócio.
                    </p>
                </figure>

                </div>

            </div>

        </div>
    </body>

    <?php include('pages/footer.php');?>

</html>