<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
    
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
      .border{
        border:1px solid;
      }
  </style>
  
  <body>
    <br><br><br><br><br>
    <div class="container-fluid d-flex justify-content-center w-75 h-50 ">
      
      <!--Service register--HTML-->
        <div class="container col-5 ml-auto border">
            <h2>Inserir serviço</h2>

            <p>Insira seus dados solicitados</p>

            <form method="post" action="data_base/registoservicos.php">
                
              <div class="form-group">Tipo: </div><div class="dir"><input class="form-control" type="text" name="tipo"></div>
              
              <div class="form-group">Cliente: </div><div class="dir"><input class="form-control" type="text" name="cliente"></div>
                  
              <div class="form-group">Total de usuários: </div><div class="dir"><input class="form-control" type="number" name="total_usuarios"></div>
                  
              <div class="form-group">Duração (dias): </div><div class="dir"><input class="form-control" type="number" name="duracao"></div>

              <div class="form-group">Progresso: </div><div class="dir"><input class="form-control" type="number" name="progresso"></div>
                  
              <div class="form-group">Valor: </div><div class="dir"><input class="form-control" type="number" name="valor"></div>
              <br>
              <button type="submit" value="registo">Inserir</button>
              <input type="reset" value="Limpar">
              <input type="button" value="Voltar" onClick="history.go(-1)">

            </form>
            <br>
        </div>
    </div>
  </body>
  
  <?php include('pages/footer.php');?>

</html>