<?php include("header.php"); ?>
<br/>
<?php include("conexion.php"); ?>

<?php

$objConexion = new conexion();
$alumnos = $objConexion->consultarPruebaConexion("SELECT * FROM `alumnos`");

?>

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display 3">Bienvenid@s Ingenier@s</h1>
        <p class="lead">Album privado de los exalumn@s del ITSAL</p>
        <hr class="my-2">
        <p>Album de alumnos egresados el Instituto Tecnológico de Salina Cruz, con la finalidad de mostrar los diferentes perfiles profesionales ocupados por los egresados del plantel.</p>
    </div>
</div>
<br/>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php foreach($alumnos as $alumno) { ?>
    <div class="col">
        <div class="card">
            <img src="imagenes/<?php echo $alumno['imagen']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $alumno['nombres']." ".$alumno['apellidos']; ?></h5>
                <p class="card-text"><?php echo $alumno['trabajoactual']." -- ".$alumno['trabajoanterior']; ?></p>
            </div>
        </div>
    </div>
<?php } ?>
</div>

<?php include("footer.php"); ?>
