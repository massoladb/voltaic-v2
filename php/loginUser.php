<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_voltaic_simples";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select email, senha from tb_usuario where email = " . $email . ";";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($senha == $row["senha"]) {
                
            }
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>