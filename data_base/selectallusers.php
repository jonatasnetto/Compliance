<?php
    include('bd.php');

    $stmt = $conn->query("SELECT * FROM usuarios");

    while ($row = $stmt->fetch_array()) {

        echo "<tr>";
        echo "<th>" . $row['id_user'] . "</th>";
        echo "<td>" . $row['nome'] .  "</td>";
        echo "<td>" . $row['NIF_NIPC'] . "</td>";
        echo "<td>" . $row['morada'] . "</td>";
        echo "<td>" . $row['contacto'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
    
        ?>
        <td width="185">
            <a href="updateusers.php?id_user=<?php echo $row['id_user']; ?>" class="btn btn-info" style="width: 80px;">Editar</a>
            <a href="deleteusers.php?id_user=<?php echo $row['id_user']; ?>" class="btn btn-danger" style="width: 80px;">Deletar</a>
        </td>
    <?php
    }   
    include('fecharLigação.php')
?>

