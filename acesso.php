<?php
  session_start();
  include('data_base/bd.php');
?>

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

    <!--LogIn function-->
      
    <?php
      $username = $password = $msg = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST"){ 

        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        
        if (empty($_POST["username"]) || empty($_POST["password"])){
            $msg = "Por favor insira os dados!";
        }else{
          $msg = LoginBD($username, $password, $conn);
        }
        
      }
        
      function LoginBD($username, $password, $conn){
        
        $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";

        $res=$conn->query($sql);

        $row = mysqli_num_rows($res);

        $msg = "";

        if($row > 0){

          $_SESSION['username']=$username;

          header("Location: index.php");

        }else{
          $msg = "Dados Invalidos! :/ Tente novamente!";

        }
        $conn->close();
        return $msg;
      }

    ?>

    <!--Forms-->
    
    <div class="container-fluid d-flex justify-content-center w-75 h-50 ">
      
      <!--Login_form -HTML-->
      <div class="container-fluid col-5 ml-auto border">
            <h2><u>Login</u></h2>

            <p>Insira os dados de acesso:</p>

            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
              <div class="form-group">Username: </div>
              <div ><input class="form-control" type="text" name="username"></div>
              <div class="form-group">Password: </div>
              <div ><input class="form-control" type="password" name="password"></div>
              <br>
              <button type="submit" value="login">Entrar</button>
              <input type="reset" value="Limpar">
              <br><br>
              <p>Não tem acesso? Cadastre-se ao lado -></p>
            </form>
             
            <?php echo "<span style='color:red;'>$msg</span>";?>

      </div>

      <!--Register_form -HTML-->
        <div class="container col-5 ml-auto border">
            <h2><u>Registo</u></h2>

            <p>Insira seus dados solicitados para criar uma conta</p>

            <form method="post" action="data_base/registousers.php">
                
              <div class="form-group">Nome: </div><div class="dir"><input class="form-control" type="text" name="nome" placeholder="nome completo" eonfocus='this.placeholder=""' onblur='this.placeholder="nome completo"' required></div>
              
              <div class="form-group">NIF/NIPC: </div><div class="dir"><input class="form-control" type="number" name="nifnipc" placeholder="ex.: 222333444" required></div>
                  
              <div class="form-group">Morada: </div><div class="dir"><input class="form-control" type="text" name="morada" placeholder="morada completa" required></div>
                  
              <div class="form-group">Contacto: </div><div class="dir"><input class="form-control" type="tel" name="contacto" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" placeholder="ex.: 999888777"required></div>

              <div class="form-group">E-mail: </div><div class="dir"><input class="form-control" type="email" name="email" placeholder="email@example.com" required></div>
                  
              <div class="form-group">Username: </div><div class="dir"><input class="form-control" type="text" name="user" required></div>
                  
              <div class="form-group">Password: </div><div class="dir"><input class="form-control" type="password" name="pass" placeholder="Exemplo123456" required></div>
              
              <div class="form-group">Password novamente: </div><div class="dir"><input class="form-control" type="password" name="pass2" required></div>

              <br>
              <button type="submit" value="registo">Registar</button>
              <input type="reset" value="Limpar">

            </form>
            <br>

        </div>
    </div>
  </body>

</html>
<?php include('pages/footer.php');?>