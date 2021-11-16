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
            require_once('./views/singin.php');
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
    case "deletealumno":
            $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
            // $_idalumno = isset($_GET['idalumno']) ? $_GET['idalumno'] : '0';
            require_once ('./models/alumno.php');
            $sqlAlumno = Alumno::delete($_idalumno);
            header("location: ./index.php?menu=alumno");
        break;
        case "editalumno":
            $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
            require_once ('./models/alumno.php');
            $sqlAlumno = Alumno::consultarAlumno($_idalumno);
            include_once './views/editar.php';
        break;
        case "editar":
            require_once('./views/editar.php');
        break; 
        case "insertalumno":
            require_once('./views/inserAlumno.php');
        break;
    default:
        require_once('./views/home.php');
}
?>
