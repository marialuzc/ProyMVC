<?php
require_once 'vistas/html/encabezado.php';
?>

    <?php
    if (isset($_GET["accion"])) {
        if ($_GET["accion"] == "productos") {
            require_once 'vistas/html/productos.php';
        }
        if ($_GET["accion"] == "nuevoProducto") {
            require_once 'vistas/html/nuevoProducto.php';
        }
        if ($_GET["accion"] == "modificarProducto") {
            require_once 'vistas/html/modificarProducto.php';
        }
        if ($_GET["accion"] == "eliminarProducto") {
            require_once 'vistas/html/eliminarProducto.php';
        }
    } else {
        require_once 'vistas/html/inicio.php';
    }
    ?>

<?php
require_once 'vistas/html/pie.php';
?>