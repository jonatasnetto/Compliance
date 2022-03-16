<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
<?php
    session_start();
    require_once "bd.php";
    
    $tipo = $cliente = $total_usuarios = $duracao = $progresso = $valor = "";
    $msg_erro ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $tipo = $_POST["tipo"];
        $cliente = $_POST["cliente"];
        $total_usuarios = $_POST["total_usuarios"];
        $duracao = $_POST["duracao"];
        $progresso = $_POST["progresso"];
        $valor = $_POST["valor"];

        if ($tipo=="" || $cliente=="" || $total_usuarios=="" || $duracao=="" || $progresso=="" || $valor==""){
            $msg_erro= "Dados inválidos";
        }else{
            $msg_erro = InsereBD($tipo, $cliente, $total_usuarios, $duracao, $progresso, $valor, $conn);}
        $msg_erro = "<p class='erro'>".$msg_erro."</p>";         
    }

    function verifica($in){
        $in = trim($in);
        $in = stripslashes($in);
        $in = htmlspecialchars($in);
        return $in;
    }
    
    function VerificaUser($usr,$conn){

        $sql ="SELECT username FROM usuarios WHERE username='$usr'";
        $res = $conn->query($sql);

        if ($res->num_rows>0){
            return 1;
        }else{
            return 0;
        }
        $conn->close();	
    }
    
    function InsereBD($tipo, $cliente, $total_usuarios, $duracao, $progresso, $valor, $conn){

        $sql ="INSERT INTO serviços (tipo, cliente, total_usuarios, duracao, progresso, valor) VALUES ('$tipo', '$cliente', '$total_usuarios', '$duracao', '$progresso', '$valor')";
        
        if ($conn->query($sql)=== TRUE){
            header("Location: ../gestaoservicos.php");
            $msg_erro= "Registo inserido com sucesso";
        }else{
            echo "Erro: ".$sql."<br>".$conn->error;
        }
        $conn->close();
    }
    echo $msg_erro;
?>
