<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./assets/css/estilos.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    

    <!--cabecera -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Administrador de la página
            </a>
        </div>
        
        <!--menu -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="index.php">Proyectos</a>
                    </li>
                    <li>
                        <a href="index.php">Equipo</a>
                    </li>
                    <li>
                        <a href="index.php">Historia</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>

        <div class="clearfix"></div>

    </header>

    <div id="contenedor">

    <!--barra lateral -->



    <!--contenido principal caja lateral -->

        <div id="principalAdmin">
            

            <table>
                <th colspan="2">Bienvenido admin</th><th><a href="index.html">Regresar</a></th>
                <tr><th colspan="3"><h1>Listado de usuarios</h1></th></tr>
                <tr>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Rol</th>

            </tr>

<?php

 include('conexion.php');

$sql="select * from login";
$resultado=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($resultado))

{
?>

<tr>
	<td><?php echo $mostrar['usuario'] ?></td>
	<td><?php echo $mostrar['pass'] ?></td>
	<td><?php echo $mostrar['rol'] ?></td>
</tr>

<?php
}
?>

</table>





        </div>

    </div>



    <script type="text/javascript" src="jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>