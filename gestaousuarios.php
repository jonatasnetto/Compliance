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
        <hr>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="table-responsive-sm">
                    <table class="table">
                        <caption>Lista de usuários</caption>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">NIF/NIPC</th>
                                <th scope="col">Morada</th>
                                <th scope="col">Contacto</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('data_base/selectallusers.php'); ?>
                        </tbody>
                    </table>
                </div>        
            </div>
            <a class="btn btn-success" style="width: 80px;" href="inserirusuarios.php" role="button">Inserir</a>
        </div>
        <br>
        
        
    </body>
    <div class="footer">
        <?php include('pages/footer.php');?>
    </div>
    
</html>