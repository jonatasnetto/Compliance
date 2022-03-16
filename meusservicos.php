<?php session_start();?>

<!DOCTYPE html>
<html>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php 
        if(isset($_SESSION['username']) == FALSE){
            include('pages/header.php');
        }elseif($_SESSION['username']=="admin"){
            include('pages/headerAdmin.php');
        }else{
            include('pages/headerUser.php');
        }
    ?>

    <?php
        error_reporting(0);
        ini_set("display_errors",0);
    ?>

    <style>
        h2{
            text-decoration: underline;
        }
        footer{
            position: fixed;
            bottom:0;
            left:0;
            width:100%;
        }

    </style>

    <body>
        <br><br>
        <hr>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="table-responsive-sm">
                    <table class="table">
                        <caption>Lista de serviços</caption>
                        <thead>
                            <tr>
                            <th scope="col">Id_Servicos</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Total de usuários</th>
                            <th scope="col">data de registo</th>
                            <th scope="col">Duração (dias)</th>
                            <th scope="col">Progresso</th>
                            <th scope="col">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

                            <?php include('data_base/selectservicos.php'); ?>
                        </tbody>
                    </table>
                    
                </div>        
            </div>
          
            <a class="btn btn-success" style="width: 150px;" href="solicitarservico.php" role="button">Solicitar serviço</a>
            <br>
        </div>

        
        <div class="footer">
            <?php include('pages/footer.php');?>
        </div>

    </body>
    
</html>