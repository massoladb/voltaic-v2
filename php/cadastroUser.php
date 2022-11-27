<?php

    include_once('conn.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];
    $tipo_usuario = $_POST['tipo_usuario'];

    $sql = 'call spCadUser(:email,:senha,:endereco,:tipo_usuario);';

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':senha',$senha);
    $stmt->bindParam(':endereco',$endereco);
    $stmt->bindParam(':tipo_usuario',$tipo_usuario);
    $stmt->execute();
?>