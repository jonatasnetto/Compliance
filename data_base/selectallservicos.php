<?php
    include('bd.php');

    $stmt = $conn->query("SELECT * FROM serviços");

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
        <td width="185">
            <a href="updateservices.php?idServiços=<?php echo $row['idServiços']; ?>" class="btn btn-info" style="width: 80px;">Editar</a>
            <a href="deleteservices.php?idServiços=<?php echo $row['idServiços']; ?>" class="btn btn-danger" style="width: 80px;">Deletar</a>
        </td>
    <?php
    }   
    include('fecharLigação.php')
?>

