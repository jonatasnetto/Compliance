<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
<?php

    session_start();
    require_once "bd.php";
    
    $nome = $nifnipc = $morada = $contacto = $email = $user = $pass = $pass2 ="";
    $msg_erro ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $nifnipc = $_POST["nifnipc"];
        $morada = $_POST["morada"];
        $contacto = $_POST["contacto"];
        $email = $_POST["email"];
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $pass2 = $_POST["pass2"];

        if ($nome=="" || $nifnipc=="" || $morada=="" || $contacto=="" || $email=="" || $user=="" || $pass=="" || $pass2==""){
            $msg_erro= "Dados inválidos";
            }elseif ($pass != $pass2){
                $msg_erro= "Passwords diferentes";
                }elseif (VerificaUser($user,$conn)==1){
                    $msg_erro= "Utilizador já existe!";
                    }elseif (senhaValida($pass)!=4){
                        $msg_erro= "Password insegura";
                        }else{
                            $msg_erro = InsereBD($nome, $nifnipc, $morada, $contacto, $email, $user, $pass, $conn);}

        $msg_erro = "<p class='erro'>".$msg_erro."</p>";
                            
    }

    function senhaValida($senha) {
        $p1 = preg_match('/[a-z]/', $senha);
        $p2 = preg_match('/[A-Z]/', $senha);
        $p3 = preg_match('/[0-9]/', $senha);
        $p4 = preg_match('/^[\w$@]{8,}$/', $senha);
        $p = $p1 + $p2 + $p3 + $p4;
        return $p;
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

    function InsereBD($nome, $nifnipc, $morada, $contacto, $email, $user, $pass, $conn){

        $pass = md5($pass);

        $sql ="INSERT INTO usuarios (nome, NIF_NIPC, morada, contacto, email, username, password) VALUES ('$nome', '$nifnipc', '$morada', '$contacto', '$email', '$user', '$pass')";
        
        if ($conn->query($sql)=== TRUE){
            $msg_erro= "Registo inserido com sucesso! :)";

            header("Location: ../acesso.php");
            
        }else{
            echo "Erro: ".$sql."<br>".$conn->error;
        }

        $conn->close();
        return $msg_erro;
    }
    echo $msg_erro;
?>
