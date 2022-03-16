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

    </style>
    

    <script src="calcular.js"></script>

    <body>
        
        <br><br><br><br><br><br>
        <div class="container col-5 ml-auto border">

            <h2 class="text-center"><u>Simular contratação</u></h2>
            <br>
    
            <p>Insira os dados solicitados:</p>
      
            <form>
                <div class="form-group">Nome: </div>
                <div ><input class="form-control" type="text" name="nome"></div>
                <div class="container mb-3 mt-3">
                    <p>Quem está a contratar:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="particular" name="pessoa" value="particular">
                        <label class="form-check-label" for="radio1">Particular</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="empresa" name="pessoa" value="empresa">
                        <label class="form-check-label" for="radio2">Coletivo</label>
                    </div>
                </div>
                <div class="form-group">Quantidade de usuarios: </div>
                <input id="totalusers" class="form-control" type="number" placeholder="Introduza a quantidade total de usuários" required>
                <br>
                <button type="button" id="btn" onclick="calcular()">Simular</button>
                <input type="reset" value="Limpar">
                <br><br>
                <div class="d-flex">
                    <input class="form-control" id="valor" readonly> €
                </div>
                <br>
                <p style="color:red;">Obs.: Os valores apresentados nesta ferramenta são meramente estimativos e podem ser alterados relativamente ao grau de complexidade técnica do ambiente tecnológico avaliado.</p>
                <br>
            </form>
        </div>
        <br>

    </body>

    <?php include('pages/footer.php');?>

</html>