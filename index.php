
<head>
    <meta charset="UTF-8">
    <title>Formulario de contacto</title>

  <link rel="stylesheet" type="text/css" href="form.css">

</head>
<body>
<?php
    require 'data.php';
    $db = conectarDb();

    //server es un array con informacion, entre ella el request method
    //hay que especificarlo que sea de tipo POST, ya que estaremos
    //mandando informacion

    //si el metodo es igual a post, entonces colocamos 
    //var dump


    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<prev>";
        var_dump($_POST);
        echo "</prev>";

        //Le asignamos los valores a POST con su respectivo contenido
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        //insertarmos los datos en la base de datos con codigo de SQL
        $query = "INSERT INTO propiedades (nombre, email, telefono, mensaje)
         VALUES  ('$nombre', '$email', '$telefono', '$mensaje')";

         echo $query; //prueba


    }
?>
    <!-- formulario de contacto en html y css -->

    <div class="contact_form">

        <div class="formulario">
            <h1>Formulario de contacto</h1>
            <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>


            <form method="POST">


                <p>
                    <label for="nombre" class="colocar_nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                </p>

                <p>
                    <label for="email" class="colocar_email">Email</label>
                    <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                </p>

                <p>
                    <label for="telefono" class="colocar_telefono">Teléfono
                    </label>
                    <input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
                </p>

                <p>
                    <label for="mensaje" class="colocar_mensaje">Mensaje
                    </label>
                    <textarea name="mensaje" class="texto_mensaje" id="mensaje" required="obligatorio"
                        placeholder="Deja aquí tu comentario..."></textarea>
                </p>

                <button type="submit" name="enviar_formulario" id="enviar">
                    <p>Enviar</p>
                </button>

                <p class="aviso">
                    <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>

            </form>
        </div>
    </div>

</body>

</html>