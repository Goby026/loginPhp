<?php
    session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>

            <?php
            if ( isset($_SESSION['userId']) ){
                ?>

                <form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
                    <input type="hidden" name="logout" class="form-control" id="logout" value="0">
                    <button name="login-submit" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Cerrar sesión</button>
                </form>

                <?php
            }else{

                ?>

            <form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username or email">
                <input type="password" name="password" class="form-control" id="password"
                       placeholder="Password">
                <button name="login-submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Ingresar</button>
                <a href="./signup.php" class="btn btn-primary">Registro</a>
            </form>

                <?php


            }
            ?>

        </div>
    </nav>
</header>
