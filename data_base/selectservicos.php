<?php session_start();?>

<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
<?php

    include('bd.php');

    $user = $_SESSION['username'];

    $stmt = $conn->query("SELECT * FROM serviços where cliente='$user';");

    while ($row = $stmt->fetch_array()) {

        echo "<tr>";
        echo "<th>" . $row['idServiços'] . "</th>";
        echo "<td>" . $row['tipo'] .  "</td>";
        echo "<td>" . $row['cliente'] . "</td>";
        echo "<td>" . $row['total_usuarios'] . "</td>";
        echo "<td>" . $row['data'] . "</td>";
        echo "<td>" . $row['duracao'] . "</td>";
        echo "<td>" . $row['progresso'] . "</td>";
        echo "<td>" . $row['valor'] . "</td>";
    
        ?>
    <?php
    }   
    include('fecharLigação.php')
?>

