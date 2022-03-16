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

      <!--Registo-HTML-->
        <div class="container col-5 ml-auto border">
            <h2>Inserir usuários</h2>

            <p>Insira seus dados solicitados para criar uma conta</p>

            <form method="post" action="data_base/registousers.php">
                
              <div class="form-group">Nome: </div><div class="dir"><input class="form-control" type="text" name="nome"></div>
              
              <div class="form-group">NIF/NIPC: </div><div class="dir"><input class="form-control" type="number" name="nifnipc"></div>
                  
              <div class="form-group">Morada: </div><div class="dir"><input class="form-control" type="text" name="morada"></div>
                  
              <div class="form-group">Contacto: </div><div class="dir"><input class="form-control" type="text" name="contacto"></div>

              <div class="form-group">E-mail: </div><div class="dir"><input class="form-control" type="email" name="email"></div>
                  
              <div class="form-group">Username: </div><div class="dir"><input class="form-control" type="text" name="user"></div>
                  
              <div class="form-group">Password: </div><div class="dir"><input class="form-control" type="password" name="pass"></div>
              
              <div class="form-group">Password novamente: </div><div class="dir"><input class="form-control" type="password" name="pass2"></div>

              <br>
            
              <button type="submit" value="registo">Registar</button>
              <input type="reset" value="Limpar">
              <input type="button" value="Voltar" onClick="history.go(-1)">
  
            </form>
            <br>

        </div>
    </div>
  </body>
  
  <?php include('pages/footer.php');?>

</html>