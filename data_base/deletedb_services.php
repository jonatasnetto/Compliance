
<?php
    include('bd.php');
    session_start();
    echo "Bem vindo ".$_SESSION['admin']."<br>";

    $idServiços = $tipo = $cliente = $total_usuarios = $duracao = $progresso = $valor = $msg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $idServiços = $_POST["idServiços"];
        $tipo = $_POST["tipo"];
        $cliente = $_POST["cliente"];
        $total_usuarios = $_POST["total_usuarios"];
        $duracao = $_POST["duracao"];
        $progresso = $_POST["progresso"];
        $valor = $_POST["valor"];
        $msg = EditaBD($idServiços, $tipo, $cliente, $total_usuarios, $duracao, $progresso, $valor, $conn);
    }
    
    function EditaBD($idServiços, $tipo, $cliente, $total_usuarios, $duracao, $progresso, $valor, $conn){
        $sql = "SELECT * FROM serviços WHERE idServiços='$idServiços'";
        $res=$conn->query($sql);
        $msg = "";

        if ($res->num_rows>0){
            //alter customized fields

            $sql2 = "DELETE FROM serviços WHERE idServiços = $idServiços;";

            $res=$conn->query($sql2);

            $sql = "SELECT * FROM serviços WHERE idServiços='$idServiços'";

			$res=$conn->query($sql);
			
            while ($row = $res->fetch_assoc()){
				$msg = "Serviço removido com sucesso!<br>";
            }
            //return to service management
            header("Location: ../gestaoservicos.php");
        }else{
            $msg = "Serviço não encontrado<br>";
        }
        $conn->close();
        return $msg;
    }
?>
