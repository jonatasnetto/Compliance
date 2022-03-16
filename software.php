<?php 
    session_start();

    if(isset($_SESSION['username']) == FALSE){
        include('pages/header.php');
    }elseif($_SESSION['username']=="admin"){
        include('pages/headerAdmin.php');
    }else{
        include('pages/headerUser.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>



    <body>
        <br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">

                    <figure class="figure">
                        <img src="img/snow-license-manager-dashboard.png" class="figure-img img-fluid rounded mx-auto">
                        <br><br>
                        <h2 class="text-center"><u>Avaliação de software</u></h2>
                        <br>
                    <p>
                        <b>Tempo estimado:</b> 1 mês <br>
                        <b>Quantidade de usuários:</b> 1000 <br>
                        <b>Valor:</b> <i>simule os valores na ferramenta de simulação.</i> <a class="btn btn-primary" href="simular.php" role="button">Simule agora...</a><br><br>
                        
                        Objetivo: A avaliação de software tem o objetivo de avaliar de maneira minuciosa os ativos de software do cliente e prover um overview de legalidade claro e objetivo apontando as discrepâncias de uso e possíveis melhorias.
                    </p>
                </figure>
                
            </div>

        </div>
        
    </div>
    </body>

    <?php include('pages/footer.php');?>

</html>