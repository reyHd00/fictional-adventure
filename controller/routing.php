<?php
$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
// $var_getMenu = $_GET['menu'];

switch ($var_getMenu) {
    case "inicio":
            require_once('./views/home.php');
        break;
    case "acercade":
            require_once('./views/acercade.php');
        break;
    case "login":
            require_once('./views/login.php');
        break;
    case "registrarse":
            require_once('./views/registrarse.php');
        break;
    case "carrusel":
            require_once('./views/carrusel.php');
        break;
    case "alumno":
            include_once './models/alumno.php';
            $sqlAlumno = Alumno::consultar();
            include_once './views/viewAlumno.php';
        break;
    case "bienvenido":
            require_once ('./views/bienvenido.php');
        break;
    case "logout":
            $session_destroy = session_destroy();
            header("location: ./index.php?menu=home");
        break;
    default:
        require_once('./views/home.php');
}
?>
