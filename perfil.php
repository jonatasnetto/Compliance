<?php
    session_start();

    if(isset($_SESSION['username']) == FALSE){
        include('pages/header.php');
    }elseif($_SESSION['username']=="admin"){
        include('pages/headerAdmin.php');
    }else{
        include('pages/headerUser.php');
    }
  
    include('data_base/bd.php'); 
?>

<html>
    <br><br><br><br>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</html>

<?php
    $user = $_SESSION['username'];
    $id = filter_input(INPUT_GET, 'id_user', FILTER_SANITIZE_NUMBER_INT);

    $result_edit = $conn->query("SELECT * FROM usuarios Where username='$user'");
    $row_edit = $result_edit->fetch_array();
?>

<div class="container text-center p-3">
    <h4>Dados do perfil:</h4>
    <form action="perfil_atualizar.php" method="post">
        <div class="form-row text-start">
            <div class="form-group col-md-6 ">
                <label>ID:</label>
                <input type="text" name="id_user" class="form-control" readonly="true" placeholder="ID" value="<?php echo $row_edit['id_user']; ?>"><br>
            </div>
            <div class="form-group col-md-6 ">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" readonly="true" placeholder="Nome" value="<?php echo $row_edit['nome']; ?>"><br>
            </div>
            <div class="form-group col-md-6">
                <label>NIF/NIPC:</label>
                <input type="number" name="NIF_NIPC" class="form-control" readonly="true" placeholder="NIF/NIPC" value="<?php echo $row_edit['NIF_NIPC']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label>Morada:</label>
                <input type="text" name="morada" class="form-control" readonly="true" placeholder="Morada" value="<?php echo $row_edit['morada']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label>Contacto:</label>
                <input type="number" name="contacto" class="form-control" readonly="true" placeholder="Contacto" value="<?php echo $row_edit['contacto']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" readonly="true" placeholder="fulano@email.com" value="<?php echo $row_edit['email']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label>Usu??rio:</label>
                <input type="text" name="username" class="form-control" readonly="true" placeholder="Nome do usu??rio" value="<?php echo $row_edit['username']; ?>">
            </div>
            <br>
            <div class="container text-start">
                <input value="Editar" type="submit" class="btn btn-info">
            </div>
        </div>
    </form>
</div><br>


<?php include('pages/footer.php') ?>