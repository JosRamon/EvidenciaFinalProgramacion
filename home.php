
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
                Bienvenidos a WiMex
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

    <aside id="sidebar">
        
        <div id="register" class="bloque">
            <h3>Registrate</h3>
            <form action="registro.php" method="POST">
                
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre"/>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos"/>

                <label for="email">Email</label>
                <input type="email" name="email"/>

                <label for="password">Password</label>
                <input type="password" name="password"/>


               
                <input type="submit" value="email"/>

            </form>
        </div>


    </aside>

    <!--contenido principal caja lateral -->

        <div id="principal">

        <div class="portada"></div>


            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entradas</h2>
                <p>Lorem ipsum dolor sit amet, con lorem ipsum dolor lorem ipsum lorem sed</p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entradas</h2>
                <p>Lorem ipsum dolor sit amet, con lorem ipsum dolor lorem ipsum lorem sed</p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entradas</h2>
                <p>Lorem ipsum dolor sit amet, con lorem ipsum dolor lorem ipsum lorem sed</p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entradas</h2>
                <p>Lorem ipsum dolor sit amet, con lorem ipsum dolor lorem ipsum lorem sed</p>
            </article>

            
            <div class="mi-web p-5 w-75 m-auto border bg-warning text-dark">
            
            <h2>Suscríbete</h2>
            <h2>Recibe noticias día con día en tu correo</h2>
            
                <form class="form-inline" action="/action_page.php">
                    <label for="email" class="mr-sm-2"><h2>Correo:</h2></label>
                    <input type="email" class="form-control mb-2 mr-sm-2" placeholder="Enter email" id="email">                  
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        <h2 style="font-size: 20px"></h2> 
                    </button>
                  </form>
    
            
        </div>
        
        <div class="container ">           
          
            <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Gracias por visitarnos</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                    Presiona cerrar para continuar
                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  
                </div>
              </div>
            </div>
            
          </div>

        </div>


    </div>   

    <!--pie de página -->
    <footer id="pie">
    <a href="index.html">Regresar</a>

        <p>WiMex TI &copy; 2022</p>

    </footer>

    <script type="text/javascript" src="jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>