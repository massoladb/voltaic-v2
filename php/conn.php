<?php
    try {
        $conn = new PDO('mysql:host=localhost;dbname=db_voltaic_simples','root','');
    } catch (PDOException $e) {
        $e->getMessage();
    }
?>