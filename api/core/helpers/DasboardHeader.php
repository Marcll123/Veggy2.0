<!--Menu de la pagina privada el dashboard-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/VEGGY/resources/img/favicon/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../../js/src/css/style.css">
    <link rel="stylesheet" href="../../../js/src/css/icons.css">
    <script src="../../resources/js/Chart.min.js"></script>
    <title>Administración</title>
</head>
<!--Este es el nav principal que contiene el nombre y un dropdown de configuraciones
 y cerrar sesion-->
<body>
    <header>
        <div class="navbar-fixed">
            <nav class="nav-dash">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-large"><i
                        class="material-icons">menu</i></a>
                <div class="nav-wrapper">
                    <ul>
                        <li><a href="../../views/dashboard/index.php">VEGGY</a></li>
                    </ul>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="../../resources/pages/ajustes.php">Ajustes</a></li>
                        <li><a href="../../resources/pages/login-dash.php">Cerrar sesión</a></li>
                        <li class="divider"></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Configuraciones<i
                                    class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--Menu lateral para el principal y a su vez la vista de movil-->
        <ul class="sidenav" id="mobile-demo">
            <li>
                <div class="user-view">
                    <div class="background">
                    </div>
                    <a href="#user"><img class="circle" src="../../resources/img/img-dash/hombre.png"></a>
                    <a href="#name"><span class="white-text name">Marcos Lopez</span></a>
                    <a href="#email"><span class="white-text email">Marcosleonor99@gmail.com</span></a>
                </div>
            </li>
            <li><a href="../../resources/pages/users.php"><i class="material-icons">person</i>Usuarios</a></li>
            <li><a href="../../resources/pages/dash-productos.php"><i class="material-icons">restaurant</i>Productos</a>
            </li>
            <li><a href="../../resources/pages/dash-ventas.php"><i class="material-icons">monetization_on</i>Ventas</a>
            </li>
            <li><a href="../../resources/pages/dash-estadisticas.php"><i class="material-icons">widgets</i>Estadísticas</a></li>
        </ul>
    </header>