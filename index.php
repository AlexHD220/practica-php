<!DOCTYPE html>

<?php 
//require('conexion.php'); 

include('conexion.php');

?>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <link rel="stylesheet" type="text/css" href="estilos.css" media="all">
    </head>
    
    <body style="border: green 6px solid;">

        <div class = "nav margenBoton1 derecha">
            <a class="formaBoton1" href="index.html">Index</a>
            <a class="formaBoton1" href="formulario.html">Formulario</a>
        </div>

        <main>
            <font color = "green"><h1><center><u>Contacto</u></center></h1></font>
        </main>

        <section class="formulario">
            <form name="Contacto" action="store.php" method="post">
                <fieldset>
                    <legend style="font-size: 160%;"><b><i>Información personal</i></b></legend>

                    <label for="nombre"><b> Nombre: </b></label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre Completo" required style="width: 250px;"><br>

                    <label for="mail"><b> Correo electrónico: </b></label>
                    <input type="email" id="mail" name="mail" required style="width: 250px;"><br>

                    <legend><b>Género:</b></legend>

                    <div style="margin-left: 10px; font-size: 80%">
                        <label><input type="radio" id="masculino" name="genero" value="masculino" checked> Masculino</label>

                        <label style="margin-left: 20px;"><input type="radio" id="femenino" name="genero" value="femenino"> Femenino</label><br>
                    </div>

                    <label for="pass"><b> Contraseña: </b></label>
                    <input type="password" id="pass" name="pass" required style="width: 250px;"><br><br>

                    <label for="comentario"><b> Comentarios: </b></label><br>
                    <textarea id="comentario" name="comentario" rows="5" cols="50" placeholder="Agrega un comentario."></textarea><br>

                    <label for="ciudad"><b>Ciudad:</b></label>
                    <select id="ciudad" name="ciudad" required style="font-size: 100%;">
                        <option value="">Elige una opción</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option value="Zapopan">Zapopan</option>
                        <option value="Tlaquepaque">Tlaquepaque</option>
                        <option value="Tonala">Tonala</option>
                        <option value="Otra">Otra</option>
                    </select><br>
                     
                    <label><input id="interes" type="checkbox" name="interes" value = 1><b><i> Me interesa contratarte. </i></b></label><br>

                </fieldset>

                <div class="derecha">
                    <button type="reset" id="borrar" name="borrar" style="font-size: 100%;">Borrar</button>
                    <button type="submit" id="enviar" name="enviar" value="enviar" style="font-size: 100%; margin-left: 10px;">Enviar Formulario</button>
                </div>
                
            </form>


            <?php
                    /*if(!empty($_POST["nombre"]) && !empty($_POST["mail"]) && !empty($_POST["pass"])){

                        $nombre = $_POST["nombre"];
                        $mail = $_POST["mail"];
                        $genero = $_POST["genero"];
                        $pass = $_POST["pass"];
                        $comentario = $_POST["comentario"];
                        $ciudad = $_POST["ciudad"];
                        
                        if(isset($_POST["interes"])){
                            $interes = $_POST["interes"];
                        }
                        else{
                            $interes = 0;
                        }

                        echo "<h2> Formulario anterior </h2> <br><br>";
                        echo "El nombre es: " . $_POST["nombre"] . "<br>";
                        echo "El correo es: " . $_POST["mail"] . "<br>";
                        echo "El genero es: " . $_POST["genero"] . "<br>";
                        echo "La contraseña es: " . $_POST["pass"] . "<br>";
                        echo "El comentario es: " . $_POST["comentario"] . "<br>";
                        echo "La ciudad es: " . $_POST["ciudad"] . "<br>";

                        if($interes == 1){
                            echo "Quiero contratarte. <br>";
                        }
                        else{
                            echo "No me interesa contratarte. <br>"; 
                        }

                    }*/


                    //--- Aplicable a Sentencia SELECT --- fuera del if//
                    
                    $sql = "SELECT * FROM usuarios";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    
                    // Configura los resultados como un arreglo asociativo
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    
                    echo "<ul>";
                        // $stmt->fetchAll() Obtiene el arreglo asociativo
                        foreach ($stmt->fetchAll() as $row) { //me devuleve un arreglo asociativo donde cada llave representa la llave de caa columna
                            //...Implementar
                            echo "<li>" . $row['id'] . ": " . $row['nombre'] . " " . $row['mail'] . " " . $row['genero'] . " " . $row['pass'] . " " . $row['comentario'] . " " . $row['ciudad'] . " " . $row['interes'] . " " . "</li>" . "<br>";
                        }
                    echo "</ul>";
               
            ?>

        </section>
    </body>
</html>