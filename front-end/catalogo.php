<?php
session_start();
require_once '..\back-end\funciones.php';

?>
<!DOCTYPE html>
<html>
    <head>
       <title>Registro e</title>
       <!--NECESARIOS-->  <!--NO NECESARIOS-->
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href='estilo.css' rel="stylesheet"/>
        <link rel="icon" href="img/logo.png"/>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="../back-end/funciones.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
        <script>
            $(document).ready(function () {
                $("#cookie").append(document.createTextNode(categorias[getCookie("categoria")]));
            });
        </script>   
    </head>
    <body>
        <header>
            <header>
                <div id="logo">
                    <a href="index.php?categoria=general"><img alt="GrUPOn" src="..\img\logo.png" height="100"/></a>
                </div>
            </header>
            <nav>
                <?php echo formularioBusquedaProducto();
                echo navigation();
                ?>
            </nav>
            <main>
                <aside>
                    <h2 id="categoria_actual">
                        <div id="cookie">  
                        </div>
                    </h2>
                <?php echo menuCategorias(); ?>
                </aside>
        <!--AQUI IRA TODO EL MAIN -->
                <article>
                  <?php
            require_once '../back-end/formulario_borrar_catalogo.php';
            require_once '../back-end/lectura_catalogo.php';
            /**
             * COMO OBTENEMOS ID CATALOGO ACTUAL?
             */
            //$_SESSION['id_catalogo_borrar'] = $id;
            echo mostrarCatalogo();
            
        ?>
                </article>
        <!--AQUI IRA TODO EL MAIN -->
            </main>
       
            <footer>
                Grupo &num;2 - GrUPOn&copy;, el fruto dado por el odio hacia nosotros mismos
            </footer>
    </body>
</html>
