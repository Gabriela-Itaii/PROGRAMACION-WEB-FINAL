<?php include("conexion.php"); ?>
<?php

session_start();

if(isset($_POST['botonLogin'])) {
    require('conecta.php');
    $u = $_POST['usuario'];
    $p = $_POST['contrasena'];
    $conectando->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sentencia = $conectando->prepare("SELECT COUNT(usuarioadmin) FROM loginadministradores WHERE usuarioadmin=:u AND contrasenaadmin=:p");
    $sentenciaAdministrador = $conectando->prepare("SELECT * FROM loginadministradores WHERE usuarioadmin=:u AND contrasenaadmin=:p");
    $sentenciaAdministrador->bindParam(":u", $u, PDO::PARAM_STR);
    $sentenciaAdministrador->bindParam(":p", $p, PDO::PARAM_STR);
    $sentenciaAdministrador->execute();
    $administradorSeleccion = $sentenciaAdministrador->fetch(PDO::FETCH_ASSOC);

    $sentenciaAlumno = $conectando->prepare("SELECT * FROM loginalumno WHERE usuarioalumno=:u AND contrasenaalumno=:p");
    $sentenciaAlumno->bindParam(":u", $u, PDO::PARAM_STR);
    $sentenciaAlumno->bindParam(":p", $p, PDO::PARAM_STR);
    $sentenciaAlumno->execute();
    $alumnoSeleccion = $sentenciaAlumno->fetch(PDO::FETCH_ASSOC);

    if($alumnoSeleccion) {
        $_SESSION['usuario'] = "alumno";
        header("location:album.php");
    } else {
        echo "<script> alert('Usuario o Contraseña Incorrecta!'); </script> ";
    }

    if($administradorSeleccion) {
        $_SESSION['usuario'] = "admin";
        header("location:albumadmin.php");
    } else {
        echo "<script> alert('Usuario o Contraseña Incorrecta!'); </script> ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <br/>
                <div class="card">
                    <div class="card-header">Iniciar Sesión</div>
                    <br/>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Usuario: <input required class="form-control" id="" type="text" name="usuario">
                            <br/>
                            Contraseña: <input required class="form-control" id="" type="password" name="contrasena">
                            <br/>
                            <button class="btn btn-success" type="submit" name="botonLogin">Entrar Album</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
