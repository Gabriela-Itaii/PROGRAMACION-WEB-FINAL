<?php

session_start();
//print_r($_SESSION);

if(isset($_SESSION['usuario']) != "kevo") {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>album</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
<br/>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">Instituto Tecnologico Salina Cruz</a>
                <div class="collapse navbar-collapsed d-flex flex-row-reverse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="indexadmin.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="albumadmin.php">Album</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admincreaalumno.php">Crea-CuentaAlumno</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admincreaadmin.php">Crea-CuentaAdmin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="close.php">Cerrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

