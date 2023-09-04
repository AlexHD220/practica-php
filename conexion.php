<?php
    // Credenciales
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "formulario";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //echo "Conexión Exitosa a la Base de Datos." . "<br>";
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage() . "<br>";
    }
?>