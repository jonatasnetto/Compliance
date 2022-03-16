<?php

    $servername = "localhost";
    $username = "root";
    $password = "root21";
    $bd = "bd_compliance";
    
    //create connection
    $conn = new mysqli($servername, $username, $password, $bd);
    
    if ($conn->connect_error){
        die("Ligação falhou!" .$conn->connect_error);
    }


?>