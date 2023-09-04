<?php 
include('conexion.php');

    //validar que la variable [$_POST["nombre"]] no este vacia en la pagina, si si existe valida y entra, sino no entra
    if(!empty($_POST["nombre"]) && !empty($_POST["mail"]) && !empty($_POST["pass"])){
        $nombre = $_POST["nombre"];
        $mail = $_POST["mail"];
        $genero = $_POST["genero"];
        $pass = $_POST["pass"];
        $comentario = $_POST["comentario"];
        $ciudad = $_POST["ciudad"];
        
        if(isset($_POST["interes"])){ //Verificar si la variable esta seteada (verificar que la variable exista aunque este vacia)
            $interes = $_POST["interes"]; // si si existe valida y entra, sino no, declara la variable como 0
        }
        else{
            $interes = 0;
        }



        //Insertar a DB

        //--- Aplicable a Sentencias INSERT, UPDATE, DELETE ---//

        $sql = "INSERT INTO usuarios (nombre, mail, genero, pass, comentario, ciudad, interes) 
                VALUES ('$nombre', '$mail', '$genero', '$pass', '$comentario', '$ciudad', $interes)";
            
        // Utilizar exec() dado que no se regresan resultados
        $conn->exec($sql);

        header('Location: index.php'); // <-- Regresar al formulario (archivo)
    }
    /*else{
        echo "<h2>Falta informcion</h2>";
    }*/
?>