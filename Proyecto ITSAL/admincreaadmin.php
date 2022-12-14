<?php include("headeradmin.php"); ?>
<?php include("conexion.php"); ?>

<?php

if(isset($_POST['creaAdmin'])) {
//if($_POST) {
//    print_r($_POST);

    $usuarioAdmin = $_POST['usuarioAdmin'];
    $contrasenaAdmin = $_POST['contrasenaAdmin'];

    $objConexion = new conexion();
    $sql = "INSERT INTO `loginadministradores` (`id_loginadmin`, `usuarioadmin`, `contrasenaadmin`) VALUES (NULL, '$usuarioAdmin', '$contrasenaAdmin');";
    $objConexion->ejecutarPruebaConexion($sql);
    header("location:admincreaadmin.php");

//    $objConexion = new conexion();
//    $alumnos = $objConexion->consultarPruebaConexion("SELECT * FROM `alumnos`");
//    print_r()
//    print_r($alumnos);
}

if($_GET) {
    //"DELETE FROM `alumnos` WHERE `alumnos`.`id` = ''";
    $id = $_GET['borrarAdmin'];
    $objConexion = new conexion();
    $sql = "DELETE FROM `loginadministradores` WHERE `loginadministradores`.`id_loginadmin` =".$id;
    $objConexion->ejecutarPruebaConexion($sql);
    header("location:admincreaadmin.php");

}

$objConexion = new conexion();
$alumnos = $objConexion->consultarPruebaConexion("SELECT * FROM `loginadministradores`");

?>

<br/>
<h1 style=" display:flex; jusitfy-content: center">SECCION ADMINISTRADOR</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="class-header">
                    Datos de la cuenta Administrador a crear
                </div>
                <div class="card-body">
                    <form action="admincreaadmin.php" method="post">
                        Usuario Administrador: <input class="form-control" id="" type="text" name="usuarioAdmin" required>
                        <br/>
                        Contraseña: <input class="form-control "id="" type="password" name="contrasenaAdmin" required >
                        <br/>
                        <input class="btn btn-success" type="submit" value="Crea Administrador" name="creaAdmin">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($alumnos as $alumno) { ?>
                    <tr>
                        <td><?php echo $alumno['id_loginadmin']; ?></td>
                        <td><?php echo $alumno['usuarioadmin']; ?></td>
                        <td><?php echo $alumno['contrasenaadmin']; ?></td>
                        <td><a class="btn btn-danger" href="?borrarAdmin=<?php echo $alumno['id_loginadmin']; ?>">Eliminar Administrador</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
