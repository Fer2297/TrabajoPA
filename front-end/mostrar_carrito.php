<?php
session_start();
require_once '../back-end/funciones.php';
if (!isset($_GET['categoria'])) {
    $_GET['categoria'] = 'general';
}
if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'empresa') {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrito</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="estilow3.css">
        <link rel="icon" href="../img/icono.png"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
        <script src="../back-end/funciones.js"></script>
        <script src="../back-end/libs/jquery.zoom.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
        <script>
            window.addEventListener("load", function () {
                window.cookieconsent.initialise({
                    "palette": {
                        "popup": {
                            "background": "#252e39"
                        },
                        "button": {
                            "background": "#14a7d0"
                        }
                    },
                    "theme": "classic",
                    "content": {
                        "message": "Todo el mundo sabe que las webs usan cookies, pero la UE nos obliga a poner esta obviedad.",
                        "dismiss": "Okey!",
                        "link": "Aprende más sobre las cookies"
                    }
                })
            });
        </script>
        <script>
            var valueofCarrito = getCookie("carrito");
            if (valueofCarrito == "") {
                setCookie("carrito", '', 1);
            }</script>
    </head>
    <body class="w3-display-container">
        <header class="w3-container w3-flat-midnight-blue">
            <div id="logo">
                <a href="index.php?categoria=general"><img alt="GrUPOn" src="..\img\logo.png" height="90"/></a>
            </div>
        </header>
        <nav class="w3-container w3-card w3-flat-wet-asphalt">
            <div class="w3-container w3-third">
            </div>
            <div class="w3-container w3-center w3-third w3-cell w3-cell-middle">
                <?php echo formularioBusquedaProducto(); ?>
            </div>
            <div class="w3-container w3-third w3-row w3-center">
                <?php echo navigation(); ?>
            </div>
        </nav>
        <main class="w3-container w3-flat-clouds">
            <aside class="w3-container w3-quarter w3-flat-belize-hole w3-card">
                <h2 class="w3-container w3-card w3-flat-wet-asphalt w3-block w3-center">
                    <?php
                    if (isset($_SESSION['tipo']) && ($_SESSION['tipo'] == 'cliente')) {
                        echo $arrayCategoriasLogged[$_GET['categoria']];
                    } else {
                        echo $arrayCategoriasNoLogged[$_GET['categoria']];
                    }
                    ?>
                </h2>
                <?php echo menuCategorias(); ?>
            </aside>
            <article class="w3-container w3-threequarter">
                <?php
                require_once '../back-end/lectura_carrito.php';
                require_once '../back-end/lectura_producto.php';
                require_once '../back-end/proceso_compra_terminar.php';
                if ($_COOKIE['carrito'] == '') {
                    ?><div class="w3-panel w3-pale-red w3-leftbar w3-border-red"><h2>No ha a&ntilde;adido nada al carrito</h2></div><?php
                } else {
                    echo mostrarCarrito();
                    if (isset($_SESSION['cuenta'])) {
                        echo opcionesCompra();
                    } else {
                        echo '<div class="w3-panel w3-pale-yellow"><h4>Advertencia</h4><p>Para poder finalizar su compra debe usted logearse</p></div>';
                    }
                }
                ?></article>
        </main>  
        <footer class="w3-container w3-bottom w3-flat-midnight-blue">
            Grupo &num;2 - GrUPOn&copy;, el fruto dado por el odio hacia nosotros mismos
        </footer>
    </body>
</html>
