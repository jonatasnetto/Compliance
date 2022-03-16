
<?php

    include('bd.php');
    session_start();

    echo "Bem vindo ".$_SESSION['admin']."<br>";

    $id_user = $nome = $NIF_NIPC = $morada = $contacto = $email = $user = $msg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $id_user = $_POST["id_user"];
        $nome = $_POST["nome"];
        $NIF_NIPC = $_POST["NIF_NIPC"];
        $morada = $_POST["morada"];
        $contacto = $_POST["contacto"];
        $email = $_POST["email"];
        $user = $_POST["username"];
        
        $msg = EditaBD($id_user, $nome, $NIF_NIPC, $morada, $contacto, $email, $user, $conn);
    }
    
    function EditaBD($id_user, $nome, $NIF_NIPC, $morada, $contacto, $email, $user, $conn){
    
        $sql = "SELECT * FROM usuarios WHERE id_user='$id_user'";

        $res=$conn->query($sql);

        $msg = "";

        if ($res->num_rows>0){
            //alter customized fields
            $sql2 = "UPDATE usuarios SET nome = '$nome', NIF_NIPC = '$NIF_NIPC', morada = '$morada', contacto = '$contacto', email = ' $email', username = '$user' WHERE id_user = '$id_user'";

            $res=$conn->query($sql2);

            $sql = "SELECT * FROM usuarios WHERE id_user='$id_user'";

			$res=$conn->query($sql);
			
            while ($row = $res->fetch_assoc()){
				$msg = "Dados alterados com sucesso!<br>";
            }
            //return to user management
            header("Location: ../perfil.php");

        }else{
            $msg = "Usuário não encontrado<br>";
        }
        $conn->close();
        return $msg;
    }
?>
