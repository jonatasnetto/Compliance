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
    $id = filter_input(INPUT_GET, 'idServiços', FILTER_SANITIZE_NUMBER_INT);

    $result_edit = $conn->query("SELECT * FROM serviços Where idServiços=$id");
    $row_edit = $result_edit->fetch_array();
?>

<div class="container text-center p-3">
    <h4>Realize as alterações desejadas e clique no botão atualizar:</h4>
    <form action="data_base/updatedb_services.php" method="post">
        <div class="form-row text-start">
            <div class="form-group col-md-6 ">
                <label>ID:</label>
                <input type="text" name="idServiços" class="form-control" readonly="true" placeholder="idServiços" value="<?php echo $row_edit['idServiços']; ?>"><br>
            </div>
            <div class="form-group col-md-6 ">
                <label>Tipo:</label>
                <input type="text" name="tipo" class="form-control" placeholder="Tipo de serviço" value="<?php echo $row_edit['tipo']; ?>"><br>
            </div>
            <div class="form-group col-md-6">
                <label>Cliente:</label>
                <input type="text" name="cliente" class="form-control" placeholder="Cliente" value="<?php echo $row_edit['cliente']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label>Total de usuários:</label>
                <input type="number" name="total_usuarios" class="form-control" placeholder="Quantidade de usuários" value="<?php echo $row_edit['total_usuarios']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label>Duração:</label>
                <input type="number" name="duracao" class="form-control" placeholder="Duração" value="<?php echo $row_edit['duracao']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label>Progresso:</label>
                <input type="number" name="progresso" class="form-control" placeholder="Progresso" value="<?php echo $row_edit['progresso']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label>Valor:</label>
                <input type="number" name="valor" class="form-control" placeholder="Valor" value="<?php echo $row_edit['valor']; ?>">
            </div>
            <br>
            <div class="container text-start">
                <input value="Atualizar" type="submit" class="btn btn-info">
                <input class="btn btn-info" type="button" value="Voltar" onClick="history.go(-1)">
            </div>
        </div>    
    </form>
</div><br>


<?php include('pages/footer.php') ?>